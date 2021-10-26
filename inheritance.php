<?php 

class Mahasiswa {

    public $nama, $kelas, $kelamin, $say;

    public function __construct($nama, $kelas, $kelamin)
    {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->kelamin = $kelamin;
    }

}

class Siswa extends Mahasiswa{

    public function say(){
        
        if (strtolower($this->kelamin)  == 'laki') {
            $this->kelamin = strtolower($this->kelamin);
            $this->say = "selamat datang mas";
        }elseif (strtolower($this->kelamin) == 'perempuan') {
            $this->kelamin = strtolower($this->kelamin);
            $this->say = 'selamat datang mba';
        }else{
            $this->kelamin = 'tidak dikenal';
            $this->say = 'Mohon masukan jenis kelamin dengan benar.';
        }

        return "Nama : {$this->nama} \nKelas : {$this->kelas} \nKelamin : {$this->kelamin} \n{$this->say}";

    }

}

$siswa = new Siswa('Budi', 'Informatika', 'laKi');

print($siswa->say());
echo "\n";

?>