<?php

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

        $method = $_SERVER['REQUEST_METHOD'];

        $fn = $method == 'GET' ? $this->getUrl[$currURL] ?? null : $this->postUrl[$currURL] ?? null;

        if ($fn != null)
            call_user_func($fn, $this);
        else {
            echo '<br><strong><font size="+3"><h1>Page Not Found<h1></font></strong><br>';
            echo "Requested: " . $currURL . "<br>";
            header("Location: /");
        }
    }

    private function checkLanguage()
    {
        $lang = $lang ?? 'es_ES';
        if (!empty($_GET)) {
            $lang = $_GET['lang'];
            putenv("LANG=" . $lang);
            setlocale(LC_ALL, $lang);
            $domain = "messages";
            $localeDir = '';
            bindtextdomain($domain, $localeDir);
            if ($lang == "en_US") {
                $localeDir = __DIR__ . '/../locales';
                bindtextdomain($domain, $localeDir);
                bind_textdomain_codeset($domain, 'UTF-8');
                textdomain($domain);
            }
        }
    }
    public function renderView($view)
    {
        //check the language:
        $this->checkLanguage();
        ob_start();
        require_once(__DIR__ . "/../views/pages/$view.php");
        $output = ob_get_clean();
        require_once(__DIR__ . "/../views/_layout.php");
    }
}
