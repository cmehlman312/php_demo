<?php

$router->get('/', 'index.php');

$router->get('/cars', 'cars/index.php');
$router->get('/car', 'cars/item.php');
$router->delete('/car', 'cars/destroy.php');

$router->get('/car/create', 'cars/create.php');
$router->post('/car/create', 'cars/create.php');

$router->get('/car/edit', 'cars/edit.php');
$router->patch('/car/edit', 'cars/edit.php');

$router->get('/drivers', 'drivers/index.php');
$router->get('/driver', 'drivers/item.php');
$router->delete('/driver', 'drivers/destroy.php');

$router->get('/driver/create', 'drivers/create.php');
$router->post('/driver/create', 'drivers/create.php');

$router->get('/driver/edit', 'drivers/edit.php');
$router->patch('/driver/edit', 'drivers/edit.php');


$router->get('/assignments', 'assignments/index.php');

$router->get('/assignment/edit', 'assignments/edit.php');
$router->patch('/assignment/edit', 'assignments/edit.php');
$router->get('/assignment/destroy', 'assignments/destroy.php');
