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
        a1.firstName AS EmployeeName, 
        a2.firstName AS manger
    FROM 
        employees AS a1
    inner JOIN 
        employees AS a2 ON a1.reportsTo = a2.employeeNumber';



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
                    <th>employee Name</th>
                    <th>manger</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['EmployeeName']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['manger']) . "</td>";
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
