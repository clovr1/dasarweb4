<?php
$a = 10;
$b = 5;


$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;


echo "<h2>1. Hasil Operasi Aritmatika ($a dan $b)</h2>";
echo "Penjumlahan ($a + $b) = " . $hasilTambah . "<br>";
echo "Pengurangan ($a - $b) = " . $hasilKurang . "<br>";
echo "Perkalian ($a * $b) = " . $hasilKali . "<br>";
echo "Pembagian ($a / $b) = " . $hasilBagi . "<br>";
echo "Sisa Bagi ($a % $b) = " . $sisaBagi . "<br>";
echo "Pangkat ($a ** $b) = " . $pangkat . "<br>";


echo "<h2>2. Hasil Operasi Perbandingan ($a dan $b)</h2>";
echo "Sama dengan ($a == $b): "; var_dump($hasilSama); echo "<br>";
echo "Tidak sama dengan ($a != $b): "; var_dump($hasilTidakSama); echo "<br>";
echo "Lebih kecil ($a < $b): "; var_dump($hasilLebihKecil); echo "<br>";
echo "Lebih besar ($a > $b): "; var_dump($hasilLebihBesar); echo "<br>";
echo "Lebih kecil atau sama ($a <= $b): "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Lebih besar atau sama ($a >= $b): "; var_dump($hasilLebihBesarSama); echo "<br>";
?>