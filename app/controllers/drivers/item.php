<?php

use repository\DriverRepository;
use repository\CarRepository;

require base_path('Interfaces/IDriverRepository.php');
require base_path('repository/DriverRepository.php');
require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');

$constants = require base_path('config.php');

$driverrepository = new DriverRepository();
$driver = $driverrepository->getById($_GET['id']);

$carrepository = new CarRepository();
$cars = $carrepository->findByDriverId($_GET['id']);

view("drivers/item.view.php", [
    'heading' => 'View Driver',
    'driver' => $driver,
    'cars' => $cars,
    'constants' => $constants,
]);