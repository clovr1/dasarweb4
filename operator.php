<?php

$a = 10;
$b = 5;
$awalA = $a;

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

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$a = $awalA;
$a += $b;
$a = $awalA;
$a -= $b;
$a = $awalA;
$a *= $b;
$a = $awalA;
$a /= $b;
$a = $awalA;
$a %= $b;


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;


echo "<h2>1. Hasil Operasi Aritmatika ($awalA dan $b)</h2>";
echo "Penjumlahan ($awalA + $b) = " . $hasilTambah . "<br>";
echo "Pengurangan ($awalA - $b) = " . $hasilKurang . "<br>";
echo "Perkalian ($awalA * $b) = " . $hasilKali . "<br>";
echo "Pembagian ($awalA / $b) = " . $hasilBagi . "<br>";
echo "Sisa Bagi ($awalA % $b) = " . $sisaBagi . "<br>";
echo "Pangkat ($awalA ** $b) = " . $pangkat . "<br><hr>";


echo "<h2>2. Hasil Operasi Perbandingan ($awalA dan $b)</h2>";
echo "Sama dengan ($awalA == $b): "; var_dump($hasilSama); echo "<br>";
echo "Tidak sama dengan ($awalA != $b): "; var_dump($hasilTidakSama); echo "<br>";
echo "Lebih kecil ($awalA < $b): "; var_dump($hasilLebihKecil); echo "<br>";
echo "Lebih besar ($awalA > $b): "; var_dump($hasilLebihBesar); echo "<br>";
echo "Lebih kecil atau sama ($awalA <= $b): "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Lebih besar atau sama ($awalA >= $b): "; var_dump($hasilLebihBesarSama); echo "<br><hr>";

echo "<h2>3. Hasil Operasi Logika ($awalA dan $b)</h2>";
echo "AND (\$a && \$b): "; var_dump($hasilAnd); echo "<br>";
echo "OR (\$a || \$b): "; var_dump($hasilOr); echo "<br>";
echo "NOT (\$a): "; var_dump($hasilNotA); echo "<br>";
echo "NOT (\$b): "; var_dump($hasilNotB); echo "<br><hr>";


echo "<h2>4. Hasil Operator Identitas (Nilai: $awalA, Tipe: int | Nilai: $b, Tipe: int)</h2>";
echo "Identik (\$a === \$b): "; var_dump($hasilIdentik); echo "<br>";
echo "Tidak Identik (\$a !== \$b): "; var_dump($hasilTidakIdentik); echo "<br>";
echo "<hr>";
?>