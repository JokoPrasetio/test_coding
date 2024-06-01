<?php
function findDuplicates($array) {   
    $frequency = [];

    foreach ($array as $value) {
        if (isset($frequency[$value])) {
            $frequency[$value]++;
        } else {
            $frequency[$value] = 1;
        }
    }

    foreach ($frequency as $number => $count) {
        if ($count > 1) {
            echo $number . " muncul lebih dari satu kali.<br>";
        }
    }
}

$array = array(790, 483, 281, 224, 483, 60, 698, 483, 790, 168);
findDuplicates($array);
?>
