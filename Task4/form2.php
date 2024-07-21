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
<body>
<form class="container m-auto w-75" action="./handlform2.php" method="POST">
    <h2 class="container mb-3 text-center text-info">login form</h2>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">user name</label>
  <input  name="name" class="form-control" id="exampleFormControlInput1">
  <small style="color:red"><?php echo isset($_SESSION['error']['name']) ? $_SESSION['error']['name']:''; ?></small>
</div>

<label for="inputPassword5" class="form-label  fw-bold">Password</label>
<input type="password" name="pass" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
<small style="color:red"><?php echo isset($_SESSION['error']['password']) ? $_SESSION['error']['password']:''; ?></small>
<div id="passwordHelpBlock" class="form-text">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">phone number</label>
  <input  name="phone" type="phone" class="form-control" id="exampleFormControlInput1">
  <small style="color:red"><?php echo isset($_SESSION['error']['phone']) ? $_SESSION['error']['phone']:''; ?></small>
 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">Email address</label>
  <input  name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  <small style="color:red"><?php echo isset($_SESSION['error']['email']) ? $_SESSION['error']['email']:''; ?></small>
 
</div>
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">facebook account url</label>
  <input  name="faccount" class="form-control" id="exampleFormControlInput1">
  <small style="color:red"><?php echo isset($_SESSION['error']['faccount']) ? $_SESSION['error']['faccount']:''; ?></small>
 
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">twitter account url</label>
  <input  name="twitaccount" class="form-control" id="exampleFormControlInput1">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label  fw-bold">instgram account url</label>
  <input  name="instaccount" class="form-control" id="exampleFormControlInput1">
 
</div>



  
</div>
 <button class="btn  btn-primary p-3 m-4" type="submit" value="login">login</button>
</form>
<?php session_unset(); ?> 
</body>
</html>