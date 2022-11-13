<?php

class Speedometer
{

    public const MILES_IN_KM = 1.60934;

    public static function convertKmToMiles(float $km): float
    {
        return round($km/self::MILES_IN_KM,2);
    }

    public static function convertMilesToKm(float $miles): float
    {
        return round($miles*self::MILES_IN_KM,2);
    }
}
