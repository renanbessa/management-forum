<?php

require __DIR__ . '/vendor/autoload.php';

use App\Utils\View;
use \App\Http\Router;
use \WilliamCosta\DotEnv\Environment;

//CARREGA VARIÁVEIS DE AMBIENTE
Environment::load(__DIR__);

//DEFINE A CONSTANTE DE URL DO PROJETO
define('URL', getenv('URL'));

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
