<?php
//1. ARRAY NUMERIK
$ar_buah = ["Jeruk", "Mangga", "Pisang", "Apel"];

//CETAK Array
//cetak index ke ?
echo $ar_buah[0];
echo "<hr>";
//tampilkan total buah
$jumlah = count($ar_buah);
echo 'jumlah buah:' .$jumlah;
echo "<hr>";
//menampilkan semua buah dengan foreach
foreach ($ar_buah as $value) {
    echo "<br>$value";
}

echo "<hr>";
//2. ARRAY ASOSIATIF
$ar_hewan = [10=>'Kucing', 'Bebek', 20=>'Ayam', 'Sapi'];
//menampilkan semua hewan dengan foreach
foreach ($ar_hewan as $id => $value) {
    echo "<br>$id $value";
}

echo "<hr>";
//3. ARRAY MULTIDIMENSI
$a1=['Nama'=>'Budi', 'Alamat'=>'Depok', 'Usia'=>30];
$a2=['Nama'=>'Siti', 'Alamat'=>'Jakarta', 'Usia'=>20];
$a3=['Nama'=>'Andi', 'Alamat'=>'Bogor', 'Usia'=>25];

$ar_siswa = [$a1, $a2, $a3];

//Menampilkan semua siswa dengan foreach
foreach ($ar_siswa as $siswa) {
    echo '<br>Nama: ' . $siswa['Nama'];
    echo '<br>Alamat: ' . $siswa['Alamat'];
    echo '<br>Usia: ' . $siswa['Usia'];
    echo '<hr>';
}
echo "<hr>";
?>

Bulan:
<select name="bln">
<option value="">Bulan</option>
<?php
$bln = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

foreach ($bln as $id => $value) {
    echo "<option value='$id'>$value</option>";
}
?>
</select>