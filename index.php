<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
    if(isset($_SESSION['user_id']))
    {
       $user_name = $_SESSION['user_id'];
    } else {
        header("Location: login.php");
        die;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title>My Website</title>
    <a href="logout.php">Logout</a>
    <h1>This is the index page</h1>

    <br>
    Hello, <?php echo $user_name ?>
</body>
</html>