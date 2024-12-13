<?php

require('./animal.php');
require('./ape.php');
require('./frog.php');

$sheep = new Animal("shaun");

echo "Name : ". $sheep->name. "<br>"; // "shaun"
echo "Legs : ". $sheep->legs. "<br>"; // 4
echo "Cold Blooded : ". $sheep->cold_blooded. "<br>"; // "no"

echo "<br>";
$sungokong = new Ape("kera sakti");
echo "Name : ". $sungokong->name. "<br>"; // "shaun"
echo "Legs : ". $sungokong->legs. "<br>"; // 4
echo "Cold Blooded : ". $sungokong->cold_blooded. "<br>";
echo "Yell : ", $sungokong->yell(); // "Auooo"

echo "<br>";
$kodok = new Frog("buduk");
echo "<br>Name : ". $kodok->name. "<br>"; // "shaun"
echo "Legs : ". $kodok->legs. "<br>"; // 4
echo "Cold Blooded : ". $kodok->cold_blooded. "<br>";
echo "Jump : ", $kodok->jump() ; // "hop hop"
