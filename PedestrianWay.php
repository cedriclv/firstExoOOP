<?php
require_once './Way.php';

final class PedestrianWay extends Way
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle): void
    {
        if (($vehicle instanceof Bike || $vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
