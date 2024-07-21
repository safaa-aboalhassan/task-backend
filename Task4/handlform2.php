<?php
$mail=$_POST['mail'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$name=$_POST['name'];
$faccount=$_POST['faccount'];
$inaccount=$_POST['instaccount'];
$twitaccount=$_POST['twitaccount'];
$error =[];

function cleandata($input){
    return htmlspecialchars(stripslashes(trim($input)));
}

$mail=cleandata($mail);
$pass=cleandata($pass);
$phone=cleandata($phone);
$name=cleandata($name);
$faccount=cleandata($faccount);
$inaccount=cleandata($inaccount);
$twitaccount=cleandata($twitaccount);

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

if(empty($name)){
    $error['name'] = "user name is requried";
}

if(empty($phone)){
    $error['phone'] = "phone  is requried";
}
else if(strlen($phone) < 10){
    $error['phone'] ="phone must be at least 10 number ";
   }

   if(empty($faccount)){
    $error['faccount'] = "facebook account   is requried";
}
if(count($error) > 0){
    session_start();
    $_SESSION['error']=$error;
    return header("location:./form2.php");
}
else {
    session_start();
    $_SESSION['username'] = $name;
    return header("location:./home.php");
    }
?>