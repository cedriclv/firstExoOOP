<?php
require_once './Way.php';

final class MotorWay extends Way
{

    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): void
    {
        if (!($vehicle instanceof Bike || $vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
