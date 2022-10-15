<?php

abstract class Way
{
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;
    // getters

    abstract public function addVehicle(Vehicle $vehicule);


    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    // setters
    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}
