<?php
function urutanAngka ($angka) {
    $kolom = 1;
    for($i = 1; $i <= $angka; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $kolom . " ";
            $kolom++;
        }
        echo "<br>";
    }
}
echo urutanAngka(5);