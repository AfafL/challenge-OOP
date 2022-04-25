<?php

class Car {

    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->setParkBrake(true);
    }

    public function setParkBrake(bool $hasParkBrake) {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): int {
        return $this->energy;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function forward(): string {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string {
        if ($this->hasParkBrake == true) {
            throw new Exception("Can not start the car");
        }
        $this->currentSpeed = 0;
        return "Car started !";
    }

}

?>