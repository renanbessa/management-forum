<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Controller\Pages\Home;
use \App\Http\Router;

define('URL', 'http://localhost/mvc-php');

$obRouter = new Router(URL);
var_dump($obRouter);

exit;

echo Home::getHome();
