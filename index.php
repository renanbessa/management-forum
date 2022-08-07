<?php

require __DIR__ . '/vendor/autoload.php';

use App\Utils\View;
use \App\Http\Router;

define('URL', 'http://localhost/mvc-php');

//DEFINE O VALOR PADRÃO DAS VARIÁVEIS
View::init([
    'URL' => URL,
]);

//INICIA O ROUTER
$obRouter = new Router(URL);

//INCLUI AS ROTAS DE PÁGINAS
include __DIR__ . '/routes/pages.php';

//IMPRIME O RESPONSE DA ROTA
$obRouter->run()
    ->sendResponse();
