<?php

use Core\Validator;

require base_path('Core/Database.php');
require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);


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

//    dd($errors);


    if(!empty($errors)){

        $transmission = $_POST['transmission'];

        $cleanMake= htmlspecialchars($make);
        $cleanModel= htmlspecialchars($model);
        $cleanYear= htmlspecialchars($year);
        $cleanColor= htmlspecialchars($color);
        $cleanTransmission = htmlspecialchars($transmission);

        $query = "INSERT INTO cars(make, model, year, color, transmission) VALUES('{$cleanMake}','{$cleanModel}','{$cleanYear}','{$cleanColor}','{$cleanTransmission}')";
        $db->query($query);

        header('location: /cars');
        die();
    }

}

// require view('notes/create.view.php');
view("cars/create.view.php", [
    'heading' => 'Create Car',
    'errors' => []
]);