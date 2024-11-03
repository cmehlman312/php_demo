<?php

use repository\CarRepository;

require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');

$constants = require base_path('config.php');

if($_SERVER['REQUEST_METHOD']==='GET'){
    $url = basename($_SERVER['REQUEST_URI']);

    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id'];

    $carrepository = new CarRepository();
    $carrepository->updateDriverAssigned($id, null);

    header('location: /assignments');
    exit();
}

