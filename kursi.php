<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "<h2>Jawaban Soal Cerita (Persentase Kursi Kosong)</h2>";
echo "Total Kursi: " . $totalKursi . "<br>";
echo "Kursi Terisi: " . $kursiTerisi . "<br>";
echo "Kursi Kosong: " . $kursiKosong . "<br>";
echo "Persentase Kursi Kosong: " . round($persentaseKosong, 2) . " %"; 
?>