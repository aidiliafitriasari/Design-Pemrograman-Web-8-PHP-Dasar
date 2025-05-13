<?php

$angka = array(12,13,15,16,67,189,346,876,54232,3256);
$length = count(value:$angka);
for ($i=0; $i<$length; $i++) {
    if ($angka[$i] % 2 == 0) {
        echo "Angka $angka[$i] Genap <br>";
    } else {
        echo "Angka $angka[$i] Ganjil <br>";
    }
}

?>