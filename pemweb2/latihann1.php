<?php
//Belajar php 

#belajar laravel 

/*ini komentar 1 
ini komentar 2 
ini komentar 3*/ 

//cetak 
echo 'Hello Word'; 
echo "<br>"; 
echo "Belajar PHP"; 

echo "<hr>";

//variabel
$nama = "Kim Mingyu";
$umur = 28;
$alamat = "Depok";
$berat = 75.5;

//cetak variabel
echo 'nama saya ' .$nama.'<br>';
echo $umur;
echo '<hr>nama saya ' .$nama. ' alamat ' .$alamat. ' umur ' .$umur. ' berat ' .$berat.'<br>';
echo '<hr>';

//variabel sistem
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<hr>';

//variabel konstanta
$jari2 = 10;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
echo 'Luas Lingkaran dengan jari-jari ' .$jari2. '=' .$luas;
echo '<hr>';

//jika nilai >5 maka nilai bagus
//selain itu buruk
//if
$nilai = 7; //ubah nilainya
if ($nilai > 5) {
    echo 'Bagus';
} else {
    echo 'Buruk';
}

echo '<hr>';

//ternary
$nilaiku = 6; //ubah nilainya
echo $nilaiku < 5 ? 'Bagus' : 'Buruk';

echo '<hr>';
//IF Multi Kondisi
//JIKA UMUR LEBIH 20 TAHUN S.D 50 TAHUN, ANDA DAPAT MENGENDARAI MOBIL
//JIKA UMUR LEBIH 17 TAHUN, ANDA DAPAT MENGENDARAI MOTOR
//JIKA UMUR LEBIH 10 TAHUN, ANDA DAPAT MENGENDARAI SEPEDA
$umur = 25; //ubah nlainya
if ($umur > 20 && $umur <= 50) {
    echo 'Anda dapat mengendarai mobil';
} elseif ($umur > 17) {
    echo 'Anda dapat mengendarai motor';
} elseif ($umur > 10) {
    echo 'Anda dapat mengendarai sepeda';
} else {
    echo 'Anda belum bisa mengendarai kendaraan';
}

echo '<hr>';
//switch case
$angka = 70;
switch ($angka) {
    case $angka <=70:
        echo "Angka Cukup";
        break;
    case $angka <=80:
        echo "Angka Memuskan";
        break;
    case $angka <=90:
        echo "Angka Sangat Memuaskan";
        break;
    default:
        echo "Angka Tidak Valid";
}

?>