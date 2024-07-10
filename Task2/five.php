<?php
$tests = array(6, 4, 9, 3, 12, 8, 7);
$n = [0]; 

for ($i = 0; $i < count($tests) ; $i++) {
    foreach ($tests as $value) {
        if ($tests[$i] < $value) {
            $n[] = $tests[$i]; 
        }
    }
}


foreach ($n as $element) {
    echo "$element<br>";
}
?>
