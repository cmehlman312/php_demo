<?php

use repository\CarRepository;

require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');

$constants = require base_path('config.php');

$carrepository = new CarRepository();
$car = $carrepository->find($_GET['id']);

view("cars/item.view.php", [
    'heading' => 'View Car',
    'car' => $car,
    'constants' => $constants
]);