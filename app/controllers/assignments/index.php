<?php

use repository\CarRepository;

require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');

$constants = require base_path('config.php');

$carrepository = new CarRepository();
$cars = $carrepository->getAllWithDrivers();

view("assignments/index.view.php", [
    'heading' => 'Assign drivers to cars in your garage',
    'cars' => $cars,
    'constants' => $constants
]);