<?php
session_start();

    //error_reporting(E_ERROR);

   // func();


function errorHandler($type, $msg, $file, $line)
{
    $erorr = "<strong style='color: red'>Type:</strong> " . $type . "<br>";
    $erorr .= "<strong style='color: red'>Message:</strong>: " . $msg  . "<br>";
    $erorr .= "<strong style='color: red'>File:</strong>: " . $file  . "<br>";
    $erorr .= "<strong style='color: red'>Line:</strong>: " . $line  . "<br>";
    echo $erorr;
}

set_error_handler('errorHandler');


    if(isset($_POST['email'])){





        $email = $_POST['email'];
        $password = $_POST['password'];


        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        //header('location:welcome.php');
    }

   // if(){$_SERVER['RE']}

    $error = "";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="index.php" method="POST">
            <div class="user-box">
                <input type="email" name="email" required="">
                <label>Email</label>
                <span><?php echo $error ?></span>
            </div>
            <div class="user-box">
                <input type="password" name="password" required="">
                <label>Password</label>
            </div>

            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
    </div>


    <div>
        <p></p>
    </div>


</body>

</html>