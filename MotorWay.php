<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
        $this->setCurrentVehicules([]);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if (!$vehicle instanceof Bicycle) {
            $currentVehicules = $this->getCurrentVehicules();
            $currentVehicules[] = $vehicle;
            $this->setCurrentVehicules($currentVehicules);
        }
    }
}
