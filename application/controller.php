<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 31.01.2018
 * Time: 13:44
 */

    // Запускаем сессии
    session_start();

    use EvDay\MySQL as M;

    $sql = "ok";
    $db = new M();

    include APP . "/functions/elector.php";
    include APP . "/functions/MySQLArrays.php";

    if($_GET["go"] == "admin") {
        if (!empty($_GET["login"]) && !empty($_GET["password"])) {
            $admin = $db->select(
                "`admin`",
                $db->fromArrToStr(chooseSelect("admin"))
            );

            for ($j = 0; $j < count($admin); $j++) {
                if (($_GET["login"] == $admin[$j]["login"]) && ($_GET["password"] == $admin[$j]["password"])) {
                    $_GET["go"] = "admin";
                } else {
                    $_GET["go"] = "";
                }
            }
        }else{
            $_GET["go"] = "";
        }
    }

    include APP . "/view/layout.php";