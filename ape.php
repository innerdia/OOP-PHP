<?php
//ingat nama class tidak boleh diawali angka

class ape extends animal{
    public $suara = 'Auooo';
    public function yell(){
        echo $this->suara;
        echo "<br>";
    }
}


?>
