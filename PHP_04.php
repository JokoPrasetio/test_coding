<?php
function findOddNumbers($angka1, $angka2) {
    $start = min($angka1, $angka2);
    $end = max($angka1, $angka2);
    $oddNumbers = [];
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 2 !== 0) {
            $oddNumbers[] = $i;
        }
    }
    return $oddNumbers;
}

$angka1 = 4;
$angka2 = 9;
$oddNumbers = findOddNumbers($angka1, $angka2);
echo "Bilangan ganjil antara $angka1 dan $angka2 adalah: ";
print_r($oddNumbers);
?>
