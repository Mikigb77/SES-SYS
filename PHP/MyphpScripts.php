<?php
function retainGET($newUrl)
{
    if (empty($_GET))
        return $newUrl;
    $currentURL = $_SERVER['REQUEST_URI'];
    $get = substr($currentURL, strpos($currentURL, '?'));
    return $newUrl . $get;
}

/**
 * changes the value of lang to $value
 */
function changeLang($value)
{
    $currentURL = $_SERVER['REQUEST_URI'];

    // Desired key and value for the query parameter
    $desiredKey = 'lang';
    $desiredValue = $value;

    // Check if the parameter already exists in the URL
    if (strpos($currentURL, $desiredKey . '=') !== false) {
        // Parameter already exists, replace its value
        $newURL = preg_replace('/(' . $desiredKey . '=)[^&]+/', '$1' . $desiredValue, $currentURL);
    } else {
        // Parameter does not exist, add it to the URL
        $separator = (strpos($currentURL, '?') !== false) ? '&' : '?';
        $newURL = $currentURL . $separator . $desiredKey . '=' . $desiredValue;
    }

    return $newURL;
}


function checkLanguage()
{
    $lang = $lang ?? 'es_ES';
    $languages = array('en_US', 'pt_PT', 'es_ES');
    $lang = $_GET['lang'] ?? $lang;
    putenv("LANG=" . $lang);
    setlocale(LC_ALL, $lang);
    $domain = "messages";
    $localeDir = '';
    bindtextdomain($domain, $localeDir);
    if (in_array($lang, $languages)) {
        $localeDir = __DIR__ . '/../locales/' . $lang;
        bindtextdomain($domain, $localeDir);
        bind_textdomain_codeset($domain, 'UTF-8');
        textdomain($domain);
    }
}

/*
function checkLanguage()
{
    // Set the default language
    $lang = $lang ?? 'es_ES';

    // Specify valid languages
    $languages = array('en_US', 'pt_PT');

    // Get the targeted language from the query parameter, or use the default
    $lang = $_GET['lang'] ?? $lang;

    // Set the environment variable for the desired language
    putenv("LANG=" . $lang);

    // Set the locale for all categories
    setlocale(LC_ALL, $lang);

    // Specify the translation domain
    $domain = "messages";

    // Set the directory where the locale files are located
    $localeDir = __DIR__ . '/../locale';

    // Check if the desired language is valid
    if (in_array($lang, $languages)) {
        // Bind the translation domain to the locale directory
        bindtextdomain($domain, $localeDir);

        // Set the codeset for translations
        bind_textdomain_codeset($domain, 'UTF-8');

        // Activate the translation domain
        textdomain($domain);
    }
}
*/