<?php
$no1 = 323;
$no2 = 97;
$no3 = 48; 

if ($no1 > $no2 && $no1 > $no3) {
    echo "Number one is greater";
} elseif ($no2 > $no3 && $no2 > $no1) {
    echo "Number two is greater";
} else {
    echo "Number three is greater <br>";
}
echo "<br>";

if($no1 < $no2 && $no1 < $no3){
    echo "Number one is Smaller";
}
elseif ($no2 < $no3 && $no2 < $no1) {
    echo "Number two is  Smaller";
}
else {
    echo "Number three is Smaller";
}

?>

