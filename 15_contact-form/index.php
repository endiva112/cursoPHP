<?php 
    //msg vars
    $msg = '';
    $msgClass = '';

    //check 4 submit
    if (filter_has_var(INPUT_POST, 'submit')) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // check recquiered fields
        if (!empty($name) && !empty($email) && !empty($message)) {
            //passed
            // chequear email
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                //email no valido
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                //email valido
                // email recipiente
                $toEmail = 'endiva03@gmail.com';
                // asunto
                $subject = 'Contact Request From '.$name;
                $body = '<h2>Contact Request</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Message</h4><p>'.$message.'</p>
                        ';
                //Cabeceras del correo
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

                //Cabeceras adicionales
                $headers .= "From: " .$name . "<".$email.">"."\r\n";
                if(mail($toEmail, $subject, $body, $headers)) {
                    //Email enviado
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    //Email not sent
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            //failed
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>
    <div class="container">

    <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>

        <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"><!--Para enviarlo a este mismo archivo-->
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" 
                value="<?php
                    echo isset($_POST['name']) ? $name : '';//Esta es una forma comoda y efectiva de mantener los campos que ya se habían rellenado
                    ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" 
                value="<?php
                    echo isset($_POST['email']) ? $email : '';
                    ?>">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <input type="text" name="message" class="form-control" value="<?php
                    echo isset($_POST['message']) ? $message : '';
                    ?>">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

<?php var_dump($_POST) ?>

</html>