<?php
class Produk
{
    //member1 var
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; //instance obj dbkoneksi.php
        $this->koneksi = $dbh;
    }
    //member3 fungsionalitas CRUD
    public function index()
    {
        $sql = "SELECT * FROM produk ORDER BY id DESC";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    // fungsi untuk menyimpan data produk (CREATE) 
    public function simpan($data)
    {
        $sql = "INSERT INTO produk (kode, nama, kondisi, harga, stok, idjenis, foto)
                Value (?,?,?,?,?,?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}