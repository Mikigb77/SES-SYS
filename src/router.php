<?

namespace SesSys\Src;


class Router
{
    public $getUrl = [];
    public $postUrl = [];

    public function getUrl($url, $fn)
    {
        $this->getUrl[$url] = $fn;
    }

    public function postURL($url, $fn)
    {
        $this->postUrl[$url] = $fn;
    }


    public function resolve()
    {
        $currURL = $_SERVER['REQUEST_URI'];
        if (strpos($currURL, '?'))
            $currURL = substr($currURL, 0, strpos($currURL, '?'));
        if (strpos($currURL, 'public'))
            $currURL = substr($currURL, strpos($currURL, 'public') + strlen('public'));
        if ($currURL[strlen($currURL) - 1] == '/')
            $currURL = substr($currURL, 0, strlen($currURL) - 2);
        if ($currURL == '')
            $currURL = '/';

        $method = $_SERVER['REQUEST_METHOD'];

        $fn = $method == 'GET' ? $this->getUrl[$currURL] ?? null : $this->postUrl[$currURL] ?? null;

        if ($fn != null)
            call_user_func($fn, $this);
        else {
            echo '<br><strong><font size="+3"><h1>Page Not Found<h1></font></strong><br>';
        }
    }

    public function renderView($view)
    {
        ob_start();
        require_once(__DIR__ . "/../views/pages/$view.php");
        $output = ob_get_clean();
        require_once(__DIR__ . "/../views/_layout.php");
    }
}
