<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Route with N get parameters
$app->get('/stickee', 'Src\Controllers\WidgetsController:getPacks');

$app->run();