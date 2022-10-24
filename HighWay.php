<?php
abstract class HighWay {

     private array $currentVehicules;
     private int $nbLane;
     private int $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);
   

     public function getCurrentVehicules()
     {
        return $this->currentVehicules;
     }

     public function  setCurrentVehicules(array $vehicules)
     {
        $this->currentVehicules = $vehicules;
     }

     public function getNbLane()
     {
        return $this->nbLane;
     }

     public function setNbLane($nbLane)
     {
        $this->nbLane = $nbLane;
     }

     public function getMaxSpeeds()
     {
        return $this->maxSpeed;
     }

     public function setMaxSpeed($maxSpeed)
     {
        $this->maxSpeed = $maxSpeed;
     }

}
