<?php
require_once './Vehicle.php';

class SkateBoard extends Vehicle
{

    public function __construct(string $color)
    {
        parent::__construct($color, $nbSeats);
    }

    public function changeWheels()
    {
        return 'wheels Changed';
    }
}
