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


    $query = "SELECT C.id, C.make, C.model, C.year, C.color, C.transmission, D.`name` as driver_assigned
            FROM cars C
            LEFT JOIN drivers D ON C.driver_assigned = D.id
            WHERE C.id = :id";

//    $query = "SELECT * FROM cars WHERE id = :id";
    $params = array('id' => $id);
    $car = $db->querywithparams($query, $params)->fetch();

    if($car['transmission'] === 'Automatic'){
        $query = "SELECT * FROM drivers";
        $drivers = $db->query($query)->fetchAll();
    }
    else{
        $query = "SELECT * FROM drivers WHERE drivemanual = :drivemanual";
        $params = array('drivemanual' => 1);
        $drivers = $db->querywithparams($query, $params)->fetchAll();
    }



    view("assignments/edit.view.php", [
        'heading' => 'Edit Assigned Driver',
        'errors' => [],
        'car' => $car,
        'drivers'=> $drivers,
    ]);

}


if ($_SERVER['REQUEST_METHOD']==='POST') {


    $id = $_POST['id'];
    $driverid = $_POST['driverid'];

    $query = "UPDATE cars SET driver_assigned=:driverassigned WHERE id = :id";
    $params = array('id'=>$id, 'driverassigned'=>$driverid );
    $db->querywithparams($query, $params);


    header('location: /assignments');
    exit();

}


