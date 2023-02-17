<?php

use SesSys\Controllers\Controller;
use SesSys\Src\Router;

require_once(__DIR__ . "/../vendor/autoload.php");

$router = new Router;

$router->getUrl('/', [Controller::class, 'main']);
$router->postUrl('/', [Controller::class, 'main']);
$router->getUrl('/Documentation/', [Controller::class, 'Doc']);
$router->postUrl('/Documentation/', [Controller::class, 'Doc']);
$router->postUrl('/politica-de-privacidad/', [Controller::class, 'pol_priv']);
$router->getUrl('/politica-de-privacidad/', [Controller::class, 'pol_priv']);
$router->getUrl('/informacion-tecnica/mixto/', [Controller::class, 'tec_mix']);
$router->postUrl('/informacion-tecnica/mixto/', [Controller::class, 'tec_mix']);
$router->getUrl('/informacion-tecnica/seco/', [Controller::class, 'tec_sec']);
$router->postUrl('/informacion-tecnica/seco/', [Controller::class, 'tec_sec']);
$router->getUrl('/informacion-tecnica/', [Controller::class, 'tec']);
$router->postUrl('/informacion-tecnica/', [Controller::class, 'tec']);
$router->getUrl('/informacion-tecnica/detalles-constructivos/', [Controller::class, 'tec_det']);
$router->postUrl('/informacion-tecnica/detalles-constructivos/', [Controller::class, 'tec_det']);
$router->postUrl('/contacto/', [Controller::class, 'contact']);
$router->getUrl('/contacto/', [Controller::class, 'contact']);




$router->resolve();
