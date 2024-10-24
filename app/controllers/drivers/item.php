<?php

require base_path('Core/Database.php');

$config = require base_path('config.php');
$db = new Database($config['database']);

//$heading = 'View Driver';

    $id = $_GET['id'];
    $driver = $db->query('SELECT * FROM drivers WHERE id = "' . $_GET['id'] . '"')->fetch();

view("drivers/item.view.php", [
    'heading' => 'View Driver',
    'driver' => $driver
]);