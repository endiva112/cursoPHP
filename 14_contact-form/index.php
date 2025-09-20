<?php 
    //msg vars
    $msg = '';
    $msgClass = '';

    //check 4 submit
    if (filter_has_var(INPUT_POST, 'submit')) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // check recquiered fields
        if (!empty($name) && !empty($email) && !empty($message)) {
            //passed
            echo 'Passed';
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
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <input type="text" name="message" class="form-control" value="">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>