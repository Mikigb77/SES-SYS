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
}
