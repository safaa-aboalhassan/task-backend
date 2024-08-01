<?php

$server='localhost';
$user_name='root';
$password='';
$database_name='market';

$conn = mysqli_connect($server,$user_name,$password,$database_name);
if(!$conn){
    die('database filed to connect database the error is'. mysqli_error($result));
}
// var_dump($conn);

$sqlcommand = 'SELECT * FROM `customers` WHERE `creditLimit` >20.000';
$result = mysqli_query($conn,$sqlcommand);
// var_dump($result);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   

    <table class="table">
<thead>
    <tr>
<th>custmer name</th>
<th>custmer salary>20.000</th>
</tr>
</thead>
<tbody>

<?php
if(mysqli_num_rows($result)>0){

    while($row=mysqli_fetch_assoc($result)){
       
echo "<tr> <td>".$row['customerName']."</td>".
 " <td>".$row['creditLimit']."</td>.</tr>";

    }
}

?>

</tbody>
</table>
</body>
</html>