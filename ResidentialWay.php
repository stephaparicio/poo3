<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
        $this->setCurrentVehicules([]);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        
    }
}