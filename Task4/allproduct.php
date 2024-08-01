<?php
$products = [
  'lady' => [
    'price' => '3620 sd',
    'img' => 'img/OIP (1).jfif',
    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  ],
  'dana' => [
    'price' => '2620 sd',
    'img' => 'img/OIP2.jfif',
    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  ],
  'chanel classic' => [
    'price' => '1450 sd',
    'img' => 'img/OIP (3).jfif',
    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  ],
  'sooba' => [
    'price' => '9430 sd',
    'img' => 'img/OIP (4).jfif',
    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  ],
  'chanel' => [
    'price' => '1620 sd',
    'img' => 'img/OIP.jfif',
    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
  ],
  'fantacy' => [
    'price' => '1250 sd',
    'img' => 'img/OIP (5).jfif',
    'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
  ],
];

session_start(); 


if (!isset($_SESSION['user']) && !isset($_SESSION['username'])) {
  header("Location: form.php");
  
}
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
<body class="back">
  <section class="d-flex flex-row flex-nowrap justify-content-between m-4 back">
    <div class="w-20 m-2">
      <img  src="img/logo3.jpg" alt="" class=" w-25">
    </div>
    <h4 class="text-info text-capitalize text-center">Welcome:
      <?php 
      if (isset($_SESSION['username'])) {
        echo $_SESSION['username'];
      } elseif (isset($_SESSION['user'])) {
        echo $_SESSION['user'];
      } else {
        echo "Guest";
      }
      ?>
    </h4>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around gap-4 w-100 font-control-lg fs-5">
            <li class="nav-item">
              <a class="nav-link active text-primary" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="allproduct.php">All product</a>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION['user'])): ?>
                <a class="nav-link active" href="form2.php">Account</a>
              <?php else: ?>
                <a class="nav-link active" href="form.php">Account</a>
              <?php endif; ?>
            </li>
          </ul>
          <a href="logout.php"><button class="btn btn-primary p-3 m-4" type="submit">Logout</button></a>
        </div>
      </div>
    </nav>
  </section>

  <h2 class="text-info text-lg-center m-auto">Our Products</h2>

  <section class="d-flex flex-row flex-wrap gap-1 container m-auto w-75">
    <!-- Loop product -->
    <?php foreach ($products as $product => $values): ?>
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $values['img']; ?>" class="card-img-top" alt="Product Image">
        <div class="card-body">
          <h5 class="card-title"><?php echo $product; ?></h5>
          <h5 class="card-title"><?php echo $values['price']; ?></h5>
          <p class="card-text"><?php echo $values['desc']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </section>

  <!-- butoon -->
  <section class="btoon">
    <div class="content card">
      <p class="fs-4">See all products</p>
    </div>
  </section>
  
</body>
</html>
