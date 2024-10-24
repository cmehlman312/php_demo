<?php

use Core\Validator;

require base_path('Core/Database.php');
require base_path('Core/Validator.php');

$config = require base_path('config.php');
$db = new Database($config['database']);



if($_SERVER['REQUEST_METHOD']==='GET'){

    $url = basename($_SERVER['REQUEST_URI']);

    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $id = $query['id'];

    $query = "SELECT * FROM cars WHERE id = :id";
    $params = array('id' => $id);
    $car = $db->querywithparams($query, $params)->fetch();



    // require view('notes/create.view.php');
    view("cars/edit.view.php", [
        'heading' => 'Edit Car',
        'errors' => [],
        'car' => $car,
    ]);

}



if ($_SERVER['REQUEST_METHOD']==='POST') {

    $errors = [];

    $make = $_POST['make'];
    if (Validator::string($make, 1, 50)) {
        $errors['make'] = 'A car make is required';
    }

    $model = $_POST['model'];
    if (Validator::string($model, 1, 75)) {
        $errors['model'] = 'A car model is required';
    }

    $year = $_POST['year'];
    if (Validator::string($year, 4, 4)) {
        $errors['year'] = 'A valid 4-digit year is required';
    }

    $color = $_POST['color'];
    if (Validator::string($color, 1, 75)) {
        $errors['color'] = 'A color is required';
    }

    if (!empty($errors)) {

        $transmission = $_POST['transmission'];

        $cleanMake = htmlspecialchars($make);
        $cleanModel = htmlspecialchars($model);
        $cleanYear = htmlspecialchars($year);
        $cleanColor = htmlspecialchars($color);
        $cleanTransmission = htmlspecialchars($transmission);

        $query = "UPDATE cars SET make=:make, model=:model, year=:year, color=:color, transmission = :transmission WHERE id = :id";
        $params = array('make'=> $cleanMake, 'model'=>$cleanModel, 'year'=>$cleanYear, 'color'=>$cleanColor, 'transmission'=>$cleanTransmission, 'id'=>$_POST['id'] );
        $db->querywithparams($query, $params);

        header('location: /cars');
        die();
    }
}


