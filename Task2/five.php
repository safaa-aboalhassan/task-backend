<?php
$tests = array(6, 4, 9, 3, 12, 8, 7);
$sort = array();
$n = $tests[0]; 

for ($i = 0; $i < count($tests) - 1; $i++) {
    if ($n > $tests[$i]) {
        $sort[] = $tests[$i + 1];
        $n = $tests[$i + 1]; 
    }
}


foreach ($sort as $value) {
    echo "$value<br>";
}
?>
