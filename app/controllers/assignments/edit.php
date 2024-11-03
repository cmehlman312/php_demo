<?php

use repository\DriverRepository;
use repository\CarRepository;

require base_path('Interfaces/IDriverRepository.php');
require base_path('repository/DriverRepository.php');
require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');
require base_path('entities/Car.php');

$constants = require base_path('config.php');

require base_path('Core/Validator.php');

$carrepository = new CarRepository();

if($_SERVER['REQUEST_METHOD']==='GET'){

    $url = basename($_SERVER['REQUEST_URI']);

    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id'];

    $car = $carrepository->find($id);


    $drivemanual = 0;
    if($car['transmission'] == 'Automatic'){
        $drivemanual = 1;
    }

    $driverrepository = new DriverRepository();
    $drivers = $driverrepository->findByDriveManual($drivemanual);

    view("assignments/edit.view.php", [
        'heading' => 'Edit Assigned Driver',
        'errors' => [],
        'car' => $car,
        'drivers'=> $drivers,
    ]);

}


if ($_SERVER['REQUEST_METHOD']==='POST') {


    $carid = $_POST['id'];
    $driverid = $_POST['driverid'];

    $carrepository->updateDriverAssigned($carid, $driverid);


    header('location: /assignments');
    exit();

}


