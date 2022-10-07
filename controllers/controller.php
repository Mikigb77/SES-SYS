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
        echo "Docu<br>";
    }
}
