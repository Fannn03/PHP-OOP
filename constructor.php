<?php 

class Mahasiswa{

    public $nama, $kelamin;

    function __construct($nama, $kelamin){
        $this->nama = $nama;
        $this->kelamin = $kelamin;
    }

    public function get(){
        return array($this->nama, $this->kelamin);
    }

}

$budi = new Mahasiswa('budi', 'laki');

var_dump($budi->get());

?>