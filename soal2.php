<?php

$jumlah_tabungan = 1387500;
$uang_pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

echo "Total Tabungan Ani di Bank : Rp. $jumlah_tabungan <br><br>";
foreach ($uang_pecahan as $uang) {
    $jumlah_pecahan = intdiv($jumlah_tabungan, $uang);
    $jumlah_tabungan = $jumlah_tabungan % $uang;

    echo "Pecahan Rp. $uang adalah : $jumlah_pecahan <br>";
}

?>