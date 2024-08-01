<?php
$server = 'localhost';
$user_name = 'root';
$password = '';
$database_name = 'market';

$conn = mysqli_connect($server, $user_name, $password, $database_name);


if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$customerNumber = isset($_GET['customer_number']) ? ($_GET['customer_number']) : 0;


$sqlcommand = 'SELECT * FROM `customers` WHERE `customerNumber` ='. $customerNumber;
$result = mysqli_query($conn, $sqlcommand);


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
            <label for="customer_number">Enter customer number:</label>
            <input id="customer_number" name="customer_number" type="text">
            <button type="submit" class="btn btn-primary">OK</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Credit Limit</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['customerName'] . "</td>";
                        echo "<td>" . $row['creditLimit'] . "</td>";
                        echo "<td>" . $row['addressLine1'] . "</td>";
                        echo "<td>" . $row['phone'] . "</td>";
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


