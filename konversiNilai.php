<?php

$nilai = 90;
if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "B";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "C";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "D";
} elseif ($nilai >= 0 && $nilai <= 59) {
    echo "E";
} else {
    echo "Tidak ditemukan";
}

?>