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
                case "createEvent":
                    return APP . "/view/css/header.css";
                    break;
                case "admin":
                    return APP . "/view/css/header.css";
                    break;

                default:
                    return APP . "/view/css/header.css";
            };
        }
        else
        {
            switch ($get['go'])
            {
                case "createEvent":
                    return APP . "/controllers/header.php";
                    break;
                case "admin":
                    return APP . "/controllers/header.php";
                    break;

                default:
                    return APP . "/controllers/header.php";
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
                case "createEvent":
                    return APP . "/view/" . $kind . "/createEvent.css";
                    break;
                case "admin":
                    return APP . "/view/" . $kind . "/admin.css";
                    break;
                default:
                    return APP . "/view/" . $kind . "/eventPage.css";
            }
        }
        else
        {
            switch ($get['go']) {
                case "createEvent":
                    return APP . "/controllers/createEvent.php";
                    break;
                case "admin":
                    return APP . "/controllers/admin.php";
                    break;
                default:
                    return APP . "/controllers/eventPage.php";
            }
        }
    }