<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahNilaiDihitung = count($nilaiSiswa) - 4; 


sort($nilaiSiswa);

$nilaiTerkoreksi = array_slice($nilaiSiswa, 2, -2);

$totalNilai = 0;
foreach ($nilaiTerkoreksi as $nilai) {
    $totalNilai += $nilai;
}
$rataRata = $totalNilai / $jumlahNilaiDihitung;

echo "<h2>Jawaban Soal Cerita (Total dan Rata-rata Nilai)</h2>";
echo "Daftar Nilai Awal: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Nilai Terendah yang Diabaikan: " . $nilaiSiswa[0] . ", " . $nilaiSiswa[1] . "<br>";
echo "Nilai Tertinggi yang Diabaikan: " . $nilaiSiswa[count($nilaiSiswa) - 2] . ", " . $nilaiSiswa[count($nilaiSiswa) - 1] . "<br>";
echo "Nilai yang Dihitung: " . implode(", ", $nilaiTerkoreksi) . "<br>";
echo "Total Nilai: " . $totalNilai . "<br>";
echo "Rata-rata Nilai (dari $jumlahNilaiDihitung nilai): " . round($rataRata, 2) . "<br>";
?>