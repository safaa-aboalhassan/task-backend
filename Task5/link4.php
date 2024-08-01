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

$sqlcommand = '
    SELECT 
        products.productName,
        (orderdetails.priceEach * products.buyPrice) AS income,
        SUM(orderdetails.quantityOrdered) AS totalOrdered
    FROM 
        products
    INNER JOIN 
        orderdetails ON products.productCode = orderdetails.productCode
    GROUP BY 
        products.productName
    ORDER BY 
        totalOrdered DESC
';



$result = mysqli_query($conn, $sqlcommand);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Order Quantities</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Total Quantity Ordered</th>
                    <th>price of income</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['productName']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['totalOrdered']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['income']) . "</td>";
                       
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

<?php
mysqli_close($conn);
?>
