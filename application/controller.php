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



    include APP . "/view/layout.php";