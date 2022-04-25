<?php


class Speedometer {
    public $x;
    
    public static function convertKmToMiles(float $value):float{
        return $value*0.621;
    }
    
    public static function convertMilesToKm(float $value):float{
        return $value/0.621;
    }
}
