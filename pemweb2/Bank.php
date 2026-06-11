<?php
class Bank{
    //member1 variabel
    protected $norek;
    public $nama;
    private $saldo;
    //variabel static dan konstanta di dlm class
    static $jml = 0;
    const BANK = 'Bank Syariah Nurul Fikri';
    //member2 konstruktor
    public function __construct($no, $nasabah, $saldo)
    {
        $this->norek = $no;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    //member3 method
    public function setor($uang){
        //$this->saldo = $this->saldo + $uang;
        $this->saldo += $uang;
    }
    public function ambil($uang){
        //$this->saldo = $this->saldo - $uang;
        $this->saldo -= $uang;
    }
    public function cetak(){
        echo '<b><u>'.self::BANK.'</u></b>';
        echo '<br/>No. Rekening :'.$this->norek;
        echo '<br/>Nama Nasabah :'.$this->nama;
        echo '<br/>Saldo : Rp. '.number_format($this->saldo,0, ',', '.');
        echo '<hr/>';
    }

<?php
require 'Bank.php’;
//ciptakan object
$n1 = new Bank('001','Siti',5000000);
$n2 = new Bank('002','Andi',7000000);
$n3 = new Bank('003','Dede',3000000);
$n4 = new Bank('004','Didin',1000000);

//panggil fungsi2
$n1->setor(4000000);
$n3->setor(1000000);
$n1->ambil(6000000);
$n2->ambil(2000000);
echo '<h3 align="center">'.Bank::BANK.'</h3>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
echo 'Jumlah Nasabah :'.Bank::$jml.' orang';
?>