<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

var_dump(Car::ALLOWED_ENERGIES);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck('yellow', 8, 'fuel',1500);
var_dump($truck);

$truck->setLoading(1000);

var_dump($truck);

echo $truck->isFull();

$truck->setLoading(1500);

var_dump($truck);

echo $truck->isFull();
