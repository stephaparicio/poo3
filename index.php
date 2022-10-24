<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Vehicle.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';



//Bicycle
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

//CAR
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);

//Truck
$truck = new Truck('black', 6, 'fuel', 110);
$truck->setCurrentSpeed(80);
$truck->setCargo(50);
$truck->setNbWheels(8);
var_dump($truck);
echo $truck->forward();
echo $truck->isFull();

$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bicycle);
var_dump($pedestrianWay);



