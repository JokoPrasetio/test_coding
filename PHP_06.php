<?php
$arr = [2, 5, 3];
$result = array_map(
    function($n) {
        return pow($n, 2) + 3 * 2;
    }, $arr
);

print_r($result);
?>
