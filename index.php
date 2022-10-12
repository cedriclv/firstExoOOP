<?php
require_once './Bicycle.php';
require_once './Car.php';
$bike = new Bicycle('red');
var_dump($bike);
echo ($bike->forward());
echo ($bike->brake());


$voiture = new Car('red', 3, 'diesel');
var_dump($voiture);

$voiture2 = new Car('green', 3, 'diesel');
var_dump($voiture2);
