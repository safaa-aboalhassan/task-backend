<?php
$tests = array(5, 4, 9, 3, 1, 7, 5, 8, 6);
$max = 0;

for ($i = 0; $i < count($tests); $i++) {
    if ($tests[$i] > $max) {
        $max = $tests[$i];
    }
}

echo "The maximum value in the array is: $max";
?>
