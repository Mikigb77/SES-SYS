<?

namespace SesSys\Controllers;

use SesSys\Src\Router;

class Controller
{
    static public function main(Router $router)
    {
        $router->renderView('main');
    }

    static public function Doc()
    {
        header('Location: https://ses.systems/informacion-tecnica/');
    }

    static public function pol_priv(Router $router)
    {
        $router->renderView('politPriv');
    }

    static public function tec_mix(Router $router)
    {
        $router->renderView('tecInfoMix');
    }

    static public function tec_sec(Router $router)
    {
        $router->renderView('tecInfoSec');
    }

    static public function tec(Router $router)
    {
        $router->renderView('tecInfo');
    }
}
