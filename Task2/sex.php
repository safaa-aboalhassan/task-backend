<?php
$array1 = array('a', 'b', 'c', 'd','s');
$array2 = array('c', 'd', 'e', 'f','s');
$n = array(); 


for ($i = 0; $i < count($array1); $i++) {
    foreach ($array2 as $value) {
        if ($array1[$i] == $value) {
            $n[] = $array1[$i]; 
        }
    }
}

foreach ($n as $element) {
    echo $element . "<br>";
}
?>
