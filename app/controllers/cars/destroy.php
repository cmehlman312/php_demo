<?php

use repository\CarRepository;

require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');

$constants = require base_path('config.php');

$carrepository = new CarRepository();
$carrepository->delete($_POST['id']);

header('location: /cars');
exit();