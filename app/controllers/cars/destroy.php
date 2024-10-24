<?php


require base_path('Core/Database.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$db->query('DELETE FROM cars WHERE id = "'. $_POST['id'].'"');

header('location: /cars');
exit();