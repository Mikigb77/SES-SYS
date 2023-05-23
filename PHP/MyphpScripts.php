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
