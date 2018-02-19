<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 18.02.2018
 * Time: 12:02
 */

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events"))
);

$text = '';
for($i = 0; $i<count($event); $i++) {
    $text .= '<div class="event">';
    $text .= '<header>';
    $text .= '<p>' . $event[$i]["name"] . '</p>';
    $text .= '</header>';
    $text .= '<article>';
    $text .= '<p>' . $event[$i]["time"] . '</p>';
    $text .= $event[$i]["content"];
    $text .= '<p>' . $event[$i]["price"] . ' р.</p>';
    $text .= '<a href="' . $event[$i]["link"] . '">Подробнее..</a>';
    $text .= '</article>';
    $text .= '</div>';
}

include APP . "/view/templates/eventPage.html";