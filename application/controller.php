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
    use EvDay\Admin as A;

    $sql = "ok";
    $db = new M();

    include APP . "/functions/elector.php";
    include APP . "/functions/MySQLArrays.php";

    $adminSql = $db->select(
        "`admin`",
        $db->fromArrToStr(chooseSelect("admin"))
    );

    $admin = new A($adminSql);
    
    if($_GET["go"] == "admin") {
        $_GET["go"] = $admin->enter($_GET["login"], $_GET["password"]);
    }

    include APP . "/view/layout.php";