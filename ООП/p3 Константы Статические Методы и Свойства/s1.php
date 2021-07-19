<?php
require_once('Car/Car.php');


$c1 = new Car('BMW');
$c2 = new Car('Renualt');

Car::getnumberOfCars();
Car::showOllCars();

$c2 = new Car('Audi');
$c2 = new Car('Ford');
$c2 = new Car('Honda');
$c2 = new Car('Hyundai');
$c2 = new Car('Kia');
$c2 = new Car('Lada ');
$c2 = new Car('Mazda');
$c2 = new Car('Bentley');
$c2 = new Car('Bugatti');



Car::showOllCars();