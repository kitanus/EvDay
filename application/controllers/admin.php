<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 21.02.2018
 * Time: 7:28
 */

use EvDay\Events as E;

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events"))
);

if(!empty($_POST['action']) && $_POST['action'])
{
    for ($i = 0; $i<count($event); $i++)
    {
        $db->update(
            "`events`",
            chooseUpdate("event", $_POST, "0"),
            "`id` = '{$i}'"
        );
    }

    foreach ($_POST['visible'] AS $key => $val)
    {
        $db->update(
            "`events`",
            chooseUpdate("event", $_POST, $val),
            "`id` = '{$key}'"
        );
    }
}

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events"))
);

$eventFunctions = new E($_POST, $event);

$template = "";
$template = $eventFunctions->listOfEvents();

include APP . "/view/templates/admin.html";