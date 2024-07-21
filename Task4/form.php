
<?php
session_start();
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/styl.css">
</head>
<body  class="back">
<form class="container m-auto w-75" action="./handel.php" method="POST">
    <h2 class="container mb-3 text-center text-info">login form</h2>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">Email address</label>
  <input  name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  <small style="color:red"><?php echo isset($_SESSION['error']['email']) ? $_SESSION['error']['email']:''; ?></small>
</div>
<label for="inputPassword5" class="form-label  fw-bold">Password</label>
<input type="password" name="pass" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
<small style="color:red"><?php echo isset($_SESSION['error']['password'])? $_SESSION['error']['password']:''; ?></small>
  
</div>
 <button class="btn  btn-primary p-3 m-4" type="submit" value="login">login</button>
</form>
<?php session_unset(); ?> 
</body>
</html>