<?

use SesSys\Controllers\Controller;
use SesSys\Src\Router;

require_once(__DIR__ . "/../vendor/autoload.php");

$router = new Router;

$router->getUrl('/', [Controller::class, 'main']);
$router->postUrl('/', [Controller::class, 'main']);
$router->getUrl('/Documentation', [Controller::class, 'Doc']);
$router->postUrl('/Documentation', [Controller::class, 'Doc']);
$router->postUrl('/politica-de-privacidad', [Controller::class, 'pol_priv']);
$router->getUrl('/politica-de-privacidad', [Controller::class, 'pol_priv']);


$router->resolve();
