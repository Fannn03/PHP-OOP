<?php 


class Fruit{

    public $nama = 'nama buah';
    public $banyak = 'banyak buah';
    public $harga = 'harga buah';

    public function set($data){
        return $this->nama = $data;
    }
    public function get(){
        $data = $this->nama;
        return printf('buah yang dibeli oleh fatur : ' . $data);
    }
    
}

$andrian = new Fruit();
$andrian->nama = 'pisang';
$andrian->banyak = 5;
$andrian->harga = "50.000";

var_dump($andrian);

$fatur = new Fruit();
$fatur->set('salak');
$fatur->get();

echo "\n";

class Komik{

    public $nama, $penulis, $penerbit;

    public function say($data, $data2, $data3){
        $nama = $this->nama = $data;
        $penulis = $this->penulis = $data2;
        $penerbit = $this->penerbit = $data3;

        return print_r('nama komik : ' . $nama . '||' . 'penulis : ' . $penulis . '||' . 'penebit :' . $penerbit );
    }

}

$client = new Komik();

$client->say('naruto', 'masashi', 'shounen');

?>