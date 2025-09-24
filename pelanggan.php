<?php

$hargaProduk = 120000;
$diskon = 0.20; 
$batasDiskon = 100000;
$hargaBayar = $hargaProduk; 

if ($hargaProduk > $batasDiskon) {
    $potongan = $hargaProduk * $diskon;
    $hargaBayar = $hargaProduk - $potongan;
    $statusDiskon = "Mendapat diskon 20% (". number_format($potongan, 0, ',', '.') .")";
} else {
    $statusDiskon = "Tidak mendapat diskon";
}

echo "<h2>Jawaban Soal Cerita (Perhitungan Diskon)</h2>";
echo "Harga Produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
echo "Status Diskon: " . $statusDiskon . "<br>";
echo "Harga yang Harus Dibayar: Rp " . number_format($hargaBayar, 0, ',', '.') . "<br>";
?>