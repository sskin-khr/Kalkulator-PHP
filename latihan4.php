<?php
$input = readline("Masukkan sebuah angka: ");
$angka = (int) $input;

if ($angka % 2 == 0) {
    echo "Genap!\n";
} else {
    echo "Ganjil!\n";
}