<?php

require base_path('Core/Database.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$drivers = $db->query("select * from drivers")->fetchAll();

view("drivers/index.view.php", [
    'heading' => 'Drivers at your service',
    'drivers' => $drivers
]);