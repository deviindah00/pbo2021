<?php
    require_once("User.php");
    class Mahasiswa extends User
    {
        protected $nim;
        protected $nama;
        protected $tanggal_lahir;
        protected $jenis_kelamin;

        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function tampilkanAngkatan(){
            echo "Merupakan angkatan tahun 20" . substr($this->nim, 5, 2);
        }
        public function tampilkanUmur(){

            echo date_diff(date_create($this->tanggal_lahir), 
                date_create("today"))->y;
        }
        public function tampilkanNama(){
            echo $this->nama;
        }

    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setNim($nim){
        $this->nim=$nim;
    }
    public function setTanggalLahir($tanggal_lahir){
        $this->tanggal_lahir=$tanggal_lahir;
    }
    public function setJanisKelamin($jenis_kelamin){
        $this->jenis_kelamin=$jenis_kelamin;
    }

    public function getNama(){
        return $this->nama;
    }
    public function getNim(){
        return $this->nim;
    }
    public function getTanggalLahir(){
        return $this->tanggal_lahir;
    }
    public function getJenisKelamin(){
        return $this->jenis_kelamin;
    }
}
?> 