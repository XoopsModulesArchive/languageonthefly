<?php

$modversion['name'] = 'Sprachauswahl';
$modversion['version'] = 1.00;
$modversion['description'] = 'Erlaubt Usern die Sprache der Navigationslinks zu ändern';
$modversion['credits'] = 'Adi Chiributa - webmaster@artistic.ro';
$modversion['author'] = 'Adi Chiributa - webmaster@artistic.ro';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'languages.jpg';
$modversion['dirname'] = 'language';

//Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminmenu'] = '';

//language selection block
$modversion['blocks'][1]['file'] = 'language_blocks.php';
$modversion['blocks'][1]['name'] = 'Sprache auswählen';
$modversion['blocks'][1]['description'] = 'Erlaubt Usern die Sprache der Navigationslinks zu ändern';
$modversion['blocks'][1]['show_func'] = 'b_language_select_show';
$modversion['blocks'][1]['edit_func'] = 'b_language_select_edit';
$modversion['blocks'][1]['options'] = 'images| |5';

// Menu
$modversion['hasMain'] = 0;
