<?php

include_once 'Vehicles.php';

abstract class HighWay {

    private $currentVehicles = [];
    private $nbLanes;
    private $maxSpeed;

    public function setCurrentVehicles($currentVehicles) {
        $this->currentVehicles = $currentVehicles;
    }

    public function setNbLanes($nbLanes) {
        $this->$nbLanes = $nbLanes;
    }

    public function setMaxSpeed($maxSpeed) {
        $this->$maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array {
        return $this->currentVehicles;
    }

    public function getNbLanes(): int {
        return $this->nbLanes;
    }

    public function getMaxSpeed(): int {
        return $this->maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}

final class MotorWay extends HighWay {

    public function __construct() {
        $this->setMaxSpeed(130);
        $this->setNbLanes(4);
    }

    public function addVehicle(Vehicle $vehicle) { 
        if ($vehicle instanceof Car)        
        $this->getCurrentVehicles()[] = $vehicle;
    }

}

final class PedestrianWay extends HighWay {

    public function __construct() {
        $this->setMaxSpeed(10);
        $this->setNbLanes(1);
    }

    public function addVehicle(Vehicle $vehicle) { 
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard)
            $this->getCurrentVehicles()[] = $vehicle;
    }

}

final class ResidentialWay extends HighWay {

    public function __construct() {
        $this->setMaxSpeed(50);
        $this->setNbLanes(2);
    }

    public function addVehicle(Vehicle $vehicle) {       
        $this->getCurrentVehicles()[] = $vehicle;
    }

}
?>