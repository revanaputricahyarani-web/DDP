<?php
$ar_buah = ['Pepaya','Mangga','Pisang','Jambu'];
//ganti sebuah element
$ar_buah[2] = 'Jeruk';
//hapus sebuah element
unset($ar_buah[3]);
//nambah
$ar_buah[] = 'Alpukat';
$ar_buah[] = 'Belewah';
echo '=====cetak data saja====='
foreach($ar_buah as $buah) {
    echo '<br/> Buah ' .$buah;
}
echo '<br/>=====cetak key dan value=====';
foreach($ar_buah as $id => $buah) {
    echo '<br/> Buah '.$id.' = '.$buah;
}