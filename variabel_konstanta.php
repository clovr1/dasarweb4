<?php
$nama = "Budi Santoso";
$umur = 21;
echo "Halo, nama saya $nama dan usia saya $umur tahun.";
echo "<br>"; 

$nilai = 95.5;
$NILAI = 80; 
echo "Nilai mata kuliah: $nilai. Nilai lain: $NILAI.";
echo "<br>";

define("GREETING", "Selamat datang di pemrograman PHP!");
define("TAHUN_BERDIRI", 1995); 

echo GREETING;
echo "<br>";
echo "PHP diciptakan pada tahun " . TAHUN_BERDIRI;
echo "<br>";


define("PI", 3.14159265);
$radius = 7;
$luas_lingkaran = PI * ($radius * $radius);
echo "Luas lingkaran dengan jari-jari $radius adalah $luas_lingkaran.";
echo "<br>";
?>