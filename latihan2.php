<?php
//variabel dalam PHP
$txt = "Selamat datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p>isi variabel txt adalah: $txt</p>";
echo "<p>isi variabel x adalah: $x</p>";
echo "<p>isi variabel y adalah: $y</p>";
echo "Belajar PHP di " . $txt2 . "<br>";
echo $x + $y;

//PHP konstanta
define("nama_konstanta", "{Aidilia Fitriasari}");
echo "<br>".nama_konstanta;

?>