<?php

$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka" . $namaBuah[0] . "," . $namaBuah[1] . "dan" . $namaBuah[2] . "<br>";

//tampilkan Mangga
echo "saya suka $namaBuah[1] <br>";
//tampilkan Jeruk
echo "saya suka $namaBuah[2] <br>";
//tampilkan Apel
echo "saya suka $namaBuah[3] <br>";
//tampilkan Melon
echo "saya suka $namaBuah[4] <br>";

//array dengan spesifik index
$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"20 Tahun");
$umur['Ahmad']="50 Tahun";
echo "<br> Umur Andi adalah " .$umur['Andi']; 
echo "<br> Umur Ben adalah " .$umur['Ben'];
echo "<br> Umur Joe adalah " .$umur['Joe'];
echo "<br> Umur Ahmad adalah " .$umur['Ahmad'];

//tampilkan semua umur

?>