<?php 
    require_once("Mahasiswa.php");
    class MahasiswaBaru extends Mahasiswa
    {
        protected $no_registrasi;

        function __construct($nim, $nama, $tgl, $jk){
            $this->nim = $nim;
            $this->nama = $nama;
            $this->tanggal_lahir = $tgl;
            $this->jenis_kelamin = $jk;
        }

        public function bayarGedung(){

        }

    public function setNoRegristrasi($no_regristrasi){
        $this->no_registrasi=$no_regristrasi;
    }

    public function getNoRegristrasi(){
        return $this->no_registrasi;
    }
}
?>