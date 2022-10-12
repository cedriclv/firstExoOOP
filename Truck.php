<?php

require_once './Vehicle.php';

class Truck extends Vehicle
{

    private int $inventoryCapacity;
    private int $load = 0;
    private string $energy;

    public function __construct(int $inventoryCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->inventoryCapacity = $inventoryCapacity;
        $this->energy = $energy;
    }

    public function isFill(): string
    {
        if ($this->load >= $this->inventoryCapacity) {
            return 'full';
        }
        return 'in_filling';
    }

    public function getInventoryCapacity(): int
    {
        return $this->inventoryCapacity;
    }
    public function setInventoryCapacity(int $inventoryCapacity): void
    {
        $this->inventoryCapacity = $inventoryCapacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
}
