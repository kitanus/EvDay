<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 02.02.2018
 * Time: 14:36
 */

    /**
     * Раздатчик адрессов шаблонов стилей и HTML-текста для шапки
     * @param array        $get      массив GET
     * @param string        $kind      название типа шаблона
     * @return string
     */
    function chooseHeader($get, $kind)
    {
        if ($kind == "css")
        {
            switch ($get['go'])
            {
                case "createAccount":
                    return APP . "/view/css/beforeLogin/header.css";
                    break;
                case "enter":
                    return APP . "/view/css/beforeLogin/header.css";
                    break;

                default:
                    return APP . "/view/css/header.css";
            };
        }
        else
        {
            switch ($get['go'])
            {
                case "createAccount":
                    return APP . "/view/templates/beforeLogin/header.html";
                    break;
                case "enter":
                    return APP . "/view/templates/beforeLogin/header.html";
                    break;

                default:
                    return APP . "/view/templates/header.html";
            };
        };
    };

    /**
     * Раздатчик адрессов шаблонов стилей и HTML-текста для тела
     * @param array        $get      массив GET
     * @param string        $kind      название типа шаблона
     * @return string
     */
    function chooseBody($get, $kind)
    {
        if ($kind == "css")
        {
            switch ($get['go'])
            {
                case "createAccount":
                    return APP . "/view/" . $kind . "/beforeLogin/bodyReg.css";
                    break;
                default:
                    return APP . "/view/" . $kind . "/eventPage.css";
            }
        }
        else
        {
            switch ($get['go']) {
                case "createAccount":
                    return APP . "/controllers/bodyReg.php";
                    break;
                default:
                    return APP . "/controllers/eventPage.php";
            }
        }
    }