<?php
$server = 'localhost';
$user_name = 'root';
$password = '';
$database_name = 'market';

$conn = mysqli_connect($server, $user_name, $password, $database_name);


if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

if (isset($_GET['number']) && is_numeric($_GET['number'])) {
    $Number = intval($_GET['number']);  



$sqlcommand = ('SELECT `productName` FROM `products` WHERE `quantityInStock` > '.$Number);
$result = mysqli_query($conn, $sqlcommand);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <form action="" method="get">
            <label for="number">Enter number from (100_5000):</label>
            <input id="number" name="number" type="text" value="">
            <button type="submit" class="btn btn-primary">OK</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>product Name</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['productName'] ."</td>";
                       
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>


