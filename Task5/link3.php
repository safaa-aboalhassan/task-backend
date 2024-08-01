<?php
$server = 'localhost';
$user_name = 'root';
$password = '';
$database_name = 'market';

$conn = mysqli_connect($server, $user_name, $password, $database_name);

// Check connection
if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$sqlcommand = 'SELECT customers.customerName, COUNT(orders.`orderNumber`) AS `order_count` 
               FROM `orders`
               INNER JOIN `customers` ON customers.`customerNumber` = orders.`customerNumber`
               GROUP BY customers.customerName';

$result = mysqli_query($conn, $sqlcommand);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order Counts</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Number of Orders</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['customerName'] . "</td>";
                        echo "<td>" . $row['order_count'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

