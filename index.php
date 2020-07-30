<?php
require "animal.php";
require "ape.php";
require "frog.php";

$sheep = new Animal("shaun");
echo $sheep->get_name(); //"shaun"
echo "<br>";
echo $sheep->get_legs(); //2
echo "<br>";
//menampilkan false
//echo var_dump($sheep->get_cold_blooded()); //tes false
//echo "<br>";
echo $sheep->get_cold_blooded(); //false
echo "<br>";

//next ape
$sungokong = new Ape("kera sakti");
echo $sungokong->get_name();
echo "<br>";
$sungokong->yell(); // "Auooo"
echo "<br>";

//next frog
$kodok = new Frog("buduk");
echo $kodok->get_name();
echo "<br>";
$kodok->jump() ; // "hop hop"
echo "<br>";
echo $kodok->get_legs(); //4
echo "<br>";
?>
