<?php
$films = array("avatar", "predistnation", "avatar", "prestigr");
$c = 0;

for ($i = 0; $i < count($films); $i++) {
    if ($films[$i] == "avatar") {
        $c++;
    }
}

echo "The number of times film appears in the array is: $c";
?>
