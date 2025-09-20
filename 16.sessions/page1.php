<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP-SELF']; ?>">
        <input type="text" name="name" placeholder="Enter name"><br>
        <input type="text" name="email" placeholder="Enter email"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>