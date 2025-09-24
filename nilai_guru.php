<?php
$daftarNilaiSiswa = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 92],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 64],
    ['nama' => 'Eva', 'nilai' => 90]
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilaiSiswa);

foreach ($daftarNilaiSiswa as $siswa) {
    $totalNilai += $siswa['nilai'];
}

$rataRataKelas = $totalNilai / $jumlahSiswa;

echo "<h2>Jawaban Soal Cerita (Nilai Di Atas Rata-Rata)</h2>";
echo "Rata-rata Kelas: " . round($rataRataKelas, 2) . "<br>";
echo "Daftar Siswa di Atas Rata-Rata:<br>";

foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa['nilai'] > $rataRataKelas) {
        echo "- {$siswa['nama']} (Nilai: {$siswa['nilai']}) <br>";
    }
}
?>