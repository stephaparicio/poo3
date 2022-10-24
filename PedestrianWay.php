<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
        $this->setCurrentVehicules([]);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $currentVehicules = $this->getCurrentVehicules();
            $currentVehicules[] = $vehicle;
            $this->setCurrentVehicules($currentVehicules);
        }
    }
}
