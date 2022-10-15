<?php
require_once './Way.php';

final class ResidentialWay extends Way
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->currentVehicles[] = $vehicle;
    }
}
