<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 21.02.2018
 * Time: 7:28
 */

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

$template = "";
for ($i = 0; $i<count($event); $i++)
{
    if($event[$i]["checked"] == 1)
    {
        $check = "checked";
    }
    else
    {
        $check = "";
    }
    $template .= '<tr>';
    $template .= '<td>'.$event[$i]["name"].'</td>';
    $template .= '<td>';
    $template .= '<p>';
    $template .= $event[$i]["content"];
    $template .= '</p>';
    $template .= '</td>';
    $template .= '<td>'.$event[$i]["price"].'</td>';
    $template .= '<td>'.$event[$i]["time"].'</td>';
    $template .= '<td>'.$event[$i]["link"].'</td>';
    $template .= '<td><input type="checkbox" name="visible['.$event[$i]["id"].']" value="1" '.$check.'></td>';
    $template .= '</tr>';
}

include APP . "/view/templates/admin.html";