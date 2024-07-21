<?php
// recive data

// print_r($_POST);
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$error =[];
// clean data
function cleandata($input){
    return htmlspecialchars(stripslashes(trim($input)));
}

$mail=cleandata($mail);
$pass=cleandata($pass);

echo $mail ."-". $pass;

// validate data

if(empty($mail)){
    $error['email'] = "Emaile is requried" ;
}

 else if(! filter_var($mail , FILTER_VALIDATE_EMAIL)){
    $error['email']= "emaile is not true";
}

if(empty($pass)){
    $error['password'] = "password is requried";
}
else if(strlen($pass) < 8){
 $error['password'] ="password must be at least 8 chars";
}
if(count($error) > 0){
    session_start();
    $_SESSION['error']=$error;
    return header("location:./form.php");
}
else {
session_start();
$_SESSION['user'] = $mail;
return header("location:./home.php");
}

var_dump($error);
?>