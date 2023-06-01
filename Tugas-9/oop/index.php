<?php
require('animal.php');
require('frog.php');
require('ape.php');

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name;
echo "<br>";
echo "legs : " . $sheep->legs;
echo "<br>";
echo "cold blooded : " . $sheep->cold_blooded;
echo "<br><br>";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name;
echo "<br>";
echo "legs : " . $kodok->legs;
echo "<br>";
echo "cold blooded : " . $kodok->cold_blooded;
echo "<br>";
echo "Jump : " . $kodok->jump();
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name;
echo "<br>";
echo "legs : " . $sungokong->legs;
echo "<br>";
echo "cold blooded : " . $sungokong->cold_blooded;
echo "<br>";
echo "Yell : " . $sungokong->yell();
echo "<br>";