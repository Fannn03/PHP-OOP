<?php 


class AutoMotif {

    public $nama;
    private $id;
    protected $seri;

    public function __construct($nama, $seri, $id)
    {
        $this->nama = $nama;
        $this->id = $id;
        $this->seri = $seri;
    }

    public function get(){
        $txt = "Nama Mobil : {$this->nama} \nId Mobil : {$this->id} \nSeri Mobil : {$this->seri}";

        return $txt;
    }

}

class Mobil extends AutoMotif{
    public function get(){
        return $this->seri;
    }
}

$mobil = new Mobil('kijang', '65A554', '304');

print($mobil->get());



?>