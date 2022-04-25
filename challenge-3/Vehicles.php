<?php

class Vehicle {

    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
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
        $this->currentSpeed = 0;
        return "Car started !";
    }

}

class Car extends Vehicle {
    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats, $energy);
        $this->nbWheels = 4;
    }    
}

class Skateboard extends Vehicle {
    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats, $energy);
        $this->nbWheels = 1;
    }    
}

class Bike extends Vehicle {
    public function __construct(string $color, int $nbSeats, string $energy) {
        parent::__construct($color, $nbSeats, $energy);
        $this->nbWheels = 2;
    }    
}
 

class Camion extends Vehicle { //un Camion est un enfant de vehicule

    private $capacity;
    private $load;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity) {
        parent::__construct($color, $nbSeats, $energy);
        $this->capacity = $capacity;
        $this->load = 0;
    }

    public function loadingState(): string {
        if ($this->load < $this->capacity)
            return "in filling";
        else
            return "full";
    }

    public function getCapacity(): int {
        return $this->capacity;
    }
    
    public function setCapacity(int $capacity){
        if ($capacity > 0) $this->capacity=$capacity;
    }

    public function getLoad(): int {
        return $this->load;
    }
    
    public function setLoad(int $load) {
        if ($load <= $this->capacity)
        $this->load=$load;
    }    
        

}
    
    
?>