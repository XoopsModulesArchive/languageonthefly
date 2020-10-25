<?php

require_once XOOPS_ROOT_PATH . '/class/xoopslists.php';

function b_language_select_show($options)
{
    global $xoopsConfig, $PHP_SELF, $QUERY_STRING;

    $block = [];

    $block['title'] = 'Sprache auswählen';

    $languages = XoopsLists::getLangList();

    if (is_array($languages)) {
        //show a list of flags to select language

        if ('images' == $options[0]) {
            $block['content'] .= '<div align="center"><br>';

            $imagelist = '';

            $i = 0;

            foreach ($languages as $v => $n) {
                $imagelist .= '<a href="' . $PHP_SELF . '?' . $QUERY_STRING . "&sel_lang=$v\">";

                if (file_exists(XOOPS_ROOT_PATH . "/modules/language/flags/$n.gif")) {
                    $imagelist .= '<img src="' . XOOPS_URL . "/modules/language/flags/$n.gif\" alt=\"$n\">";
                } else {
                    $imagelist .= '<img src="' . XOOPS_URL . "/modules/language/flags/noflag.gif\" alt=\"$n\">";
                }

                $imagelist .= '</a>';

                $i++;

                if ($i < count($languages)) {
                    if (is_numeric($options[2]) && ($options[2] > 0)) {
                        if (0 == ($i % $options[2])) {
                            $imagelist .= '<br>';
                        } else {
                            $imagelist .= $options[1];
                        }
                    } else {
                        $imagelist .= $options[1];
                    }
                }
            }

            $block['content'] .= $imagelist . '</div>';
        } else {
            //show a drop down list to select language

            $block['content'] .= "<script type='text/javascript'>
<!-- 
function SelLang_jumpMenu(targ,selObj,restore){
    eval(targ+\".location='" . $PHP_SELF . '?' . $QUERY_STRING . "\"+\"&sel_lang=\"+selObj.options[selObj.selectedIndex].value+\"'\");
    if (restore) selObj.selectedIndex=0;
}
-->
</script>";

            $block['content'] .= "<div align=\"center\"><select name=\"sel_lang\" onChange='SelLang_jumpMenu(\"parent\",this,0)'>";

            foreach ($languages as $v => $n) {
                $block['content'] .= "<option value=\"$v\"";

                if ($xoopsConfig['language'] == $n) {
                    $block['content'] .= ' selected';
                }

                $block['content'] .= ">$n</option>";
            }

            $block['content'] .= '</select></div>';
        }
    }

    return $block;
}

function b_language_select_edit($options)
{
    $form = "Anzeigemethode:&nbsp;<select name='options[]'>";

    $form .= "<option value='images'";

    if ('images' == $options[0]) {
        $form .= " selected='selected'";
    }

    $form .= ">Flaggenliste</option>\n";

    $form .= "<option value='dropdown'";

    if ('dropdown' == $options[0]) {
        $form .= " selected='selected'";
    }

    $form .= ">Dropdown-Liste</option>\n";

    $form .= "</select>\n";

    $form .= "<br>Bildtrenner (optional):&nbsp;<input type='text' name='options[]' value='" . $options[1] . "'>";

    $form .= "<br>Bilder pro Zeile (optional):&nbsp;<input type='text' name='options[]' value='" . $options[2] . "'>";

    return $form;
}
