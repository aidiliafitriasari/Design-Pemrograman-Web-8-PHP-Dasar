<?php

$gaji_pokok = 3250000;
$tunjangan = 1200000;

$gaji_kotor = $gaji_pokok + $tunjangan;
$pajak = 0.10 * $gaji_kotor;
$gaji_bersih = $gaji_kotor - $pajak;

echo "Gaji pokok adalah : $gaji_pokok <br>";
echo "Tunjangan jabatan adalah : $tunjangan <br>";
echo "Gaji kotor adalah : $gaji_kotor <br>";
echo "Pajaknya adalah : $pajak <br>";
echo "Gaji bersih adalah : $gaji_bersih <br>";

?>