<?php

require 'Core/functions.php';

require 'Core/Database.php';

$config = require 'config.php';
$db = new Database($config['database']);

$query = "CREATE DATABASE IF NOT EXISTS php_code_challlenge;
USE php_code_challlenge;
CREATE TABLE IF NOT EXISTS cars(
    id VARCHAR(255) NOT NULL,
    make VARCHAR(255) NOT NULL,
    model VARCHAR(255) NOT NULL,
    releaseyear INT NOT NULL,
    color VARCHAR(255) NOT NULL,
    transmission VARCHAR(255) NOT NULL,
);
        "; 
$db->query($query);