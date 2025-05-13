<?php
/* Operator logika yang bisa digunakan
* ==    Sama dengn          $x == $y
* ===   Identical           $x === $y
* !=    Tidak sama dengan   $x != $y
* <>    Tidak sama dengan   $x <> $y
* !==   Not identical       $x !== $y
* >     Lebih besar dari`   $x > $y
* <     Kurang dari         $x < $y
* >=    Lebih besar atau sama dengan    $x >= $y
* <=    Kurang dari atau sama dengan    $x <= $y
* <=>   Spaceship           $x <=> $y
*/

$t = date(format:"H"); //mendapatkan jam dengan format 1-24
echo "if <br>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br><br> If dan Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><br> Nested If <br>";
if ($t < 12) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat Sore!";
} else {
    echo "Selamat Malam";
}

?>