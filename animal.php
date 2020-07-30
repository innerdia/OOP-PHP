<?php
//ingat nama class tidak boleh diawali angka
class animal {
	//property ada kata kunci public diikuti variabel
	//jika ingin mengunakan $legs maka digunakan diluar class nya/diluar class animal
	public $legs = 2;
	public $cold_blooded = false;
	public $name;

	function __construct($name){
		$this->name= $name;
	}
	function get_name(){
		echo $this->name;
	}
	function get_legs(){
		echo $this->legs;
	}
	function get_cold_blooded(){
		echo $this->cold_blooded;
	}
}

?>
