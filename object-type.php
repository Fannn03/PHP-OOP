<?php 


    class Mahasiswa {
        public $nama, $kelas, $kelamin;

        public function __construct($nama = NULL, $kelas = NULL, $kelamin = NULL)
        {
            $this->nama = $nama;
            $this->kelas = $kelas;
            $this-> kelamin = $kelamin;
        }

        public function get(){
            return "$this->nama, $this->kelas, $this->kelamin";
        }

    }

    class cetakMahasiswa {

        public function cetak( Mahasiswa $data ){

            $str = "Nama Siswa : {$data->nama} \nKelas : {$data->kelas} \nJenis Kelamin : {$data->kelamin}";

            return print($str);
        }

    }

    $user = new Mahasiswa('Budi', 'Informatika', 'Laki-laki');
    $cetakUser = new cetakMahasiswa();

    $cetakUser->cetak($user);
    

?>