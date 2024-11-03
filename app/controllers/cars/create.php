<?php

use Core\Validator;
use repository\CarRepository;
use entities\Car;

require base_path('Core/Validator.php');
require base_path('Interfaces/ICarRepository.php');
require base_path('repository/CarRepository.php');
require base_path('entities/Car.php');

$constants = require base_path('config.php');

if ($_SERVER['REQUEST_METHOD']==='POST'){

    $errors=[];

    $make = $_POST['make'];
    if(Validator::string($make,1,50)){
        $errors['make']='A car make is required';
    }

    $model = $_POST['model'];
    if(Validator::string($model,1,75)){
        $errors['model']='A car model is required';
    }

    $year = $_POST['year'];
    if(Validator::string($year,4,4)){
        $errors['year']='A valid 4-digit year is required';
    }

    $color = $_POST['color'];
    if(Validator::string($color,1,75)){
        $errors['color']='A color is required';
    }

    if(!empty($errors)){
        $transmission = $_POST['transmission'];

        $cleanMake= htmlspecialchars($make);
        $cleanModel= htmlspecialchars($model);
        $cleanYear= htmlspecialchars($year);
        $cleanColor= htmlspecialchars($color);
        $cleanTransmission = htmlspecialchars($transmission);

        $car = new Car();
        $car->setMake($cleanMake);
        $car->setModel($cleanModel);
        $car->setYear($cleanYear);
        $car->setColor($cleanColor);
        $car->setTransmission($cleanTransmission);

        $carRepository = new CarRepository();
        $carRepository->create($car);

        header('location: /cars');
        die();
    }

}


view("cars/create.view.php", [
    'heading' => 'Create Car',
    'errors' => [],
    'constants' => $constants,
]);