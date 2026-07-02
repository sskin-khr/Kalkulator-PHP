<?php
echo "--- Kalkulator Nilai Mahasiswa UPATIK ---\n";

$nama = readline("Masukkan Nama Mahasiswa: ");
$inputNilai = readline("Masukkan Nilai Akhir (0-100): ");
 
if (!is_numeric($inputNilai) || $inputNilai < 0 || $inputNilai > 100) {
    echo "Nilai tidak valid! Masukkan angka 0-100.\n";
    exit;
}
 
$nilai = (int) $inputNilai;

if ($nilai >= 85) {
    $predikat = "A";
} elseif ($nilai >= 70) {
    $predikat = "B";
} else if ($nilai >= 55) {
    $predikat = "C";
} elseif ($nilai >= 40) {
    $predikat = "D";
} else {
    $predikat = "E";
}

if ($nilai >= 55 && $nilai <= 100) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

echo "\nHasil Evaluasi:\n";
echo "Mahasiswa atas nama " . $nama . " mendapatkan nilai " . $nilai . ".\n";
echo "Predikat: " . $predikat . "\n";
echo "Status: " . $status . "\n";
echo "=========================================\n";
