<?php

if ($_GET['sel_lang'] > '') {
    //sets a cookie for a month with the language that the user selected

    setcookie('selected_language', $_GET['sel_lang'], time() + 3600 * 24 * 30, '/');

    $xoopsConfig['language'] = $_GET['sel_lang'];
} elseif ($HTTP_COOKIE_VARS['selected_language'] > '') {
    $xoopsConfig['language'] = $HTTP_COOKIE_VARS['selected_language'];
}
