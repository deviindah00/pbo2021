<? php
 Aplikasi namespace ;
class  Mahasiswa  memperluas  Pengguna {
// atribut
    dilindungi  $ nama ;
    dilindungi  $ nim ;
    dilindungi  $ tanggal_lahir ;
    dilindungi  $ jenis_kelamin ;
    const  AKTIF = 1 ;
    const  NON_AKTIF = 2 ;
    public  statis  $ Status = Diri :: AKTIF ;
    publik  statistik  $ sks = 3 ;
    publik  statistik  $ bobot = 12 ;

    function  __construct ( $ nama , $ nim , $ tl , $ jk ) {
        $ ini -> nama = $ nama ;
        $ ini -> nim = $ nim ;
        $ this -> tanggal_lahir = $ tl ;
        $ this -> jenis_kelamin = $ jk ;
}
     fungsi  publik tampilkanAngkatan () {
        echo  "merupakan angkatan tahun 20" . substr ( $ this -> nim , 5 , - 4 ). "<br>" ;
    }
    public  function  tampilkanUmur () {
        echo  date_diff ( date_create ( $ this -> tanggal_lahir ), date_create ( 'today' )) -> y ;
    }
     fungsi  publik tampilkanNama ( $ nama ) {
        echo  $ this -> nama ;   
    }
    // penyetel
    public  function  setNama ( $ nama ) {
        $ ini -> nama = $ nama ;
    }
    public  function  setNim ( $ nim ) {
        $ ini -> nim = $ nim ;
    }
    public  function  setTanggalLahir ( $ tanggal_lahir ) {
        $ ini -> tanggal_lahir = $ tanggal_lahir ;
    }
    public  function  setJanisKelamin ( $ jenis_kelamin ) {
        $ this -> jenis_kelamin = $ jenis_kelamin ;
    }
    // getter
     fungsi  publik getNama () {
        kembalikan  $ this -> nama ;
    }
     fungsi  publik getNim () {
        kembalikan  $ this -> nim ;
    }
     fungsi  publik getTanggalLahir () {
        kembalikan  $ this -> tanggal_lahir ;
    }
     fungsi  publik getJenisKelamin () {
        return  $ this -> jenis_kelamin ;
    }
    // statistik 
     fungsi statistik  publik bergerak () 
    {
        echo  "agen solusi, bukan agen perubahan" ;
    }
     tuntaskan fungsi publik  akhir () 
    {
        self :: bergerak ();
        echo  'memperbaiki menjadi lebih baik' ;
    }
    // praktikum08
    public  static  function  hitungSks ()
    {
        echo  "jumlah SKS nya adalah" . "<b>" . diri :: $ sks * diri :: $ bobot . "<b>" . "<br/>" ;
    }
}