<?php
//ingat nama class tidak boleh diawali angka

class frog extends animal{
    public $lompat = 'hop hop';
    public function jump(){
        echo $this->lompat;
    }
    public $legs = 4;
    function get_legs(){
		echo 'jumlah kaki kodok: ' . $this->legs . ' --> tes jika kodok tidak mewarisi sifat kaki=2 dari animal'; 
	}
}


?>
