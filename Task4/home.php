<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="back">
    <section class="d-flex flex-row flex-nowrap justify-content-between m-4 back ">
        <div class="w-20 m-2">
            <img class="img" src="img/logo3.jpg" alt="" class="w-100">
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around gap-4 w-100 font-control-lg fs-5">
                        <li class="nav-item">
                            <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
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

    <!-- -----------------section3-------------------------------------- -->

    <div class="backimg container">

    </div>

    <!-- --------------------------footer--------------------------------- -->
    <section class="w-100 h-auto footer">
        <div class="d-flex justify-content-around p-5 m-5">
            <div>
                <p class="text-center fs-5 m-4 p-5 text-light">
                    © Front. 2021 Htmlstream. All rights reserved.<br><br>
                    When you visit or interact with our sites, services or tools, we or our authorised service providers may use cookies for storing information to help provide you with a better, faster and safer experience and for marketing purposes.
                </p>
            </div>
        </div>
    </section>
    <!-- -------------------------------------------------- -->
</body>
</html>
