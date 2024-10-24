<?php

require base_path('Core/Database.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$cars = $db->query("select * from cars")->fetchAll();

view("cars/index.view.php", [
    'heading' => 'Cars in the garage',
    'cars' => $cars
]);