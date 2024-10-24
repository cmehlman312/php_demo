<?php

require base_path('Core/Database.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$query = "SELECT C.id, C.make, C.model, C.year, C.color, C.transmission, D.`name` as driver_assigned
            FROM cars C
            LEFT JOIN drivers D ON C.driver_assigned = D.id";
$cars = $db->query($query)->fetchAll();

view("assignments/index.view.php", [
    'heading' => 'Assign drivers to cars in your garage',
    'cars' => $cars
]);