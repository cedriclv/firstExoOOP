<?php
require_once './Bicycle.php';
require_once './Car.php';
require_once './Truck.php';
require_once './Vehicle.php';
require_once './MotorWay.php';
require_once './Bike.php';
require_once './Speedometer.php';

?>
<?php
// Speedometer avec voiture

$voiture = new Car('red', 3, 'diesel');
$voiture->setCurrentSpeed(9);
echo ("Les feux de la voiture sont ".$voiture->switchOn());
?>
<br>
<?php
// essai avec moto


$motorcycle = new Bike('red', 2,'fuel');
$motorcycle->setCurrentSpeed(9);
echo ("Les feux de la moto sont ".$motorcycle->switchOn());
?>
<br>
<?php
// essai fonctionnement static de Speedometer

echo(Speedometer::convertKmToMiles(10));
?>