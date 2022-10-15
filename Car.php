<?php
require_once './Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGY = ['fuel', 'electric'];
    private string $energy;
    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function changeWheels()
    {
        return 'wheels Changed';
    }

    public function start()
    {
        // code here
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGY))
            $this->energy = $energy;
    }
}
