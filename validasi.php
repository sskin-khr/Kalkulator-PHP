<?php
$input = readline("Masukkan angka: ");

if (!is_numeric($input)) {
    echo "Itu bukan angka!";
} else {
    $angka = (int) $input;
    echo "Angka anda: " . $angka;
}