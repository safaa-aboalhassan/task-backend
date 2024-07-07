<?php
$tests = array(1, "tarig", 1.5, true, "s", false);

for ($i = 0; $i < count($tests); $i++) {
    if ($tests[$i] === true || $tests[$i] === false) {
        echo "no || ";
    } else {
        echo "yes || ";
    }
}
?>
