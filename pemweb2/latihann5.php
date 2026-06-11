<?php
//member1 variabel (public, protected, private)
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
    public $matkul;
    public $nilai;
    
    //member2 konstruktor (wajib menggunakan public)
    public function __costruct($nama, $nim, $jurusan, $matkul, $nilai) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    //member3 method (wajib public)
    //method untuk menampilkan data mahasiswa
    public function tampikanData()
    {
        echo "Nama: " .$this->nama. "<br>";
        echo "NIM: " .$this->nim. "<br>";
        echo "Jurusan: " .$this->jurusan. "<br>";
        echo "Mata Kuliah: " .$this->matkul. "<br>";
        echo "Nilai: ".$this->niai. "<br>";
        echo "Status: " .$this->getHasil(). "<br>";
     }

     //member4 class method: return value
     public function getHasil()
     {
        if($this->nilai >= 60) return "Lulus";
        else return "Gagal";
     }

}

//membuat objek dari class mahasiswa
$mhs1 = new Mahasiswa("Budi", "123456", "Informatika", "Pemweb", 85);

//memanggil method untuk menampilkan data mahasiswa ke browser
$mhs1->tampilkanData();
?>