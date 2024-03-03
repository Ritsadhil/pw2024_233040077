<?php
$rluas = 10;
$rkeliling = 20;

function hitungLuasLingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas;
}

function hitungKelilingLingkaran($r) {
    $keliling = 2 * 3.14 * $r;
    return $keliling;
}

echo "<h3>Menghitung Luas Lingkaran</h3><br>";
echo "Jari-jari = $rluas cm <br>";
echo "Luas Lingkaran = " . hitungLuasLingkaran($rluas) . " cm²";
echo "<hr>";
echo "<h3>Menghitung Keliling Lingkaran</h3><br>";
echo "Jari-jari = $rkeliling cm<br>";
echo "Keliling Lingkaran = " . hitungKelilingLingkaran($rkeliling) . "cm";
echo "<hr>";



