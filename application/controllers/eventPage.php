<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 18.02.2018
 * Time: 12:02
 */

use EvDay\Events as E;

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events")),
    null,
    "`event_check` = '1'",
    $chooseSort
);

$eventFunctions = new E($_POST, $event);

$chooseSort = null;
if(!empty($_POST["action"]) && $_POST["action"] == "filter"){
    $chooseSort = $eventFunctions->typeSort();
}

$text = $eventFunctions->createEvent();

include APP . "/view/templates/eventPage.html";