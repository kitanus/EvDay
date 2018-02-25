<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 21.02.2018
 * Time: 7:28
 */
// Это новая ветка в git
use EvDay\Events as E;

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events"))
);

$smarty->caching = 2;

$smarty->cache_lifetime = 10; // 1/3 минуты

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

for($i=0; $i<count($event); $i++){
    $change[$i] =  $eventFunctions->changeCheck($event[$i]["checked"]);
}

$smarty->assign('max',count($event));
$smarty->assign('event',$event);
$smarty->assign('isCheck',$change);

$output = $smarty->fetch(APP . "/view/templates/admin.tpl");

print $output;