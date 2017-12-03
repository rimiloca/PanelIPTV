<?php

include('_start.php');
$databasemanagar->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'albondemand',
    'username' => 'root',
    'password' => 'nderim1@',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$debug = false;
include('_load.php');
