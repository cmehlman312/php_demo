<?php

require base_path('Core/Database.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = 'View Car';

    $id = $_GET['id'];
    $car = $db->query('SELECT * FROM cars WHERE id = "' . $_GET['id'] . '"')->fetch();

view("cars/item.view.php", [
    'heading' => 'Car',
    'car' => $car
]);