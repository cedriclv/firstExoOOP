<?php

require_once './Vehicle.php';
require_once './LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGY = ['fuel', 'electric'];
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function switchOn()
    {
        if ($this-> currentSpeed >= 10)
        {
            return true;
        }
        return false;
    }

    public function switchOff()
    {
        return false;
    }

    public function changeWheels()
    {
        return 'wheels Changed';
    }

    public function start()
    {
        if ($this->getHasParkBrake()) {
            throw (new Exception('brake set on !'));
        }
        return 'GO GO';
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

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    /**
     * Get the value of hasParkBrake
     */
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }
}
