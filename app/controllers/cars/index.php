<?php

use repository\CarRepository;

require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');

$constants = require base_path('config.php');

$carrepository = new CarRepository();
$cars = $carrepository->getAll();

view("cars/index.view.php", [
    'heading' => 'Cars in the garage',
    'cars' => $cars,
    'constants'=>$constants,
]);