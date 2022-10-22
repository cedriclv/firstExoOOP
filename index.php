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
//echo ($truck1->getEnergy());

$autoroute = new MotorWay();
$autoroute->addVehicle($truck1);
//$autorouteState = $autoroute->getCurrentVehicles();


// 1st try with brake on, generating the exception and echo of the exception message
//Then finaly is executed anyway
echo '<br>1<br>';
$voiture->setParkBrake(true);

try {
    echo ($voiture->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma voiture roule comme un donut';
}


// 2nd try with brake off,  echoing the end of the start function as no exception has been thrown. 
//Then finaly is executed anyway
echo '<br>2<br>';
$voiture->setParkBrake(false);

try {
    echo ($voiture->start());
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma voiture roule comme un donut';
}
