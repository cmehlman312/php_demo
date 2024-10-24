<?php


require base_path('Core/Database.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$db->query('DELETE FROM drivers WHERE id = "'. $_POST['id'].'"');

//dd($_SERVER);


header('location: /drivers');
exit();