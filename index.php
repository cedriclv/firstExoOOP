<?php
require_once './Bicycle.php';
require_once './Car.php';
require_once './Truck.php';
require_once './Vehicle.php';
require_once './MotorWay.php';

$bike = new Bicycle('red', 2);
//var_dump($bike);


$voiture = new Car('red', 3, 'diesel');
//var_dump($voiture);

$voiture2 = new Car('green', 3, 'fuel');
//var_dump($voiture2);


$truck1 = new Truck(10, 'purple', 2, 'diesel');
echo ($truck1->getEnergy());

$autoroute = new MotorWay();
$autoroute->addVehicle($truck1);
//$autorouteState = $autoroute->getCurrentVehicles();
echo '1<br>';
var_dump($autoroute);
echo '2<br>';
var_dump($autoroute->getCurrentVehicles());
