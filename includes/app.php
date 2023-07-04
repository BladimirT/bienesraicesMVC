<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// Conecar a la base de datos
$db = conectarDB();
use Model\ActiveRecord;

ActiveRecord::setDB($db);
