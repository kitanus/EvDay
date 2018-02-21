<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 18.02.2018
 * Time: 12:02
 */

use EvDay\Events as E;

$eventFunctions = new E($_POST);

$chooseSort = null;

if(!empty($_POST["action"]) && $_POST["action"] == "filter"){
    $chooseSort = $eventFunctions->orderSort();
}

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events")),
    null,
    "`event_check` = '1'",
    $chooseSort
);

$text = '';
for($i = 0; $i<count($event); $i++)
{
    if($event[$i]["price"] == "0")
    {
        $price = "Бесплатно";
    }
    else
    {
        $price = $event[$i]["price"]." р.";
    }
    $text .= '<div class="event">';
    $text .= '<header>';
    $text .= '<p>' . $event[$i]["name"] . '</p>';
    $text .= '</header>';
    $text .= '<article>';
    $text .= '<p>' . $event[$i]["time"] . '</p>';
    $text .= $event[$i]["content"];
    $text .= '<p>' . $price . ' </p>';
    $text .= '<a href="' . $event[$i]["link"] . '">Подробнее..</a>';
    $text .= '</article>';
    $text .= '</div>';
}

include APP . "/view/templates/eventPage.html";