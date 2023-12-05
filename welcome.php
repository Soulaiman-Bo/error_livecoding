<?php
session_start();
//session_unset();
// session_destroy();

// function errorHandler($type, $msg, $file, $line)
// {
//     $erorr = "Type: " . $type . "`\n";
//     $erorr .= "Message: " . $msg  . "`\n";
//     $erorr .= "File: " . $file  . "`\n";
//     $erorr .= "Line: " . $line  . "`\n `\n";

//     error_log($erorr, 3 ,"error.log");
//     echo $erorr;
// }

// set_error_handler('errorHandler');


// if (!isset($_SESSION['email'])) {

//     trigger_error("Tergui Error", E_USER_WARNING);
// }


class TergiuError extends Exception {
    public function getTerguiError(){
        return "Tergui error from TergiuError class \n";
    }
}

function divide($num1, $num2){
        if($num2 == 0){
            throw new TergiuError();

        }
        return $num1 / $num2;
}

try {

    divide(10, 5);
    divide(10, 5);
    divide(10, 5);
    divide(10, 5);
    divide(10, 0);
    divide(10, 5);
    divide(10, 5);
    divide(10, 5);

} catch (TergiuError $e) {

    // echo $e->getMessage() . '<br>';
    // echo $e->getFile();

    $error = $e->getTerguiError();
    $file = $e->getFile();
    echo $error;
    echo $file;
    //error_log($error ,  3 ,"error.log");

}


// $email = $_SESSION['email'];
// $password = $_SESSION['password'];



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Welcome <?php // echo $email ?> </h1>

</body>

</html>