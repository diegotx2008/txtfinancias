<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

use app\routes\Router;
require_once '../vendor/autoload.php';

echo Router::execute();


