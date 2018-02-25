<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 18.02.2018
 * Time: 12:02
 */

use EvDay\Events as E;

$smarty->caching = 2;
$smarty->cache_lifetime = 10; // 1/3 минуты

$eventFunctions = new E($_POST, $event);

$chooseSort = null;
if(!empty($_POST["action"]) && $_POST["action"] == "filter"){
    $chooseSort = $eventFunctions->typeSort();
}

$event = $db->select(
    "`events`",
    $db->fromArrToStr(chooseSelect("events")),
    null,
    "`event_check` = '1'",
    $chooseSort
);


for($i=0; $i<count($event); $i++){
    $change[$i] =  $eventFunctions->changeFree($event[$i]["price"]);
}

$smarty->assign('max',count($event));
$smarty->assign('event',$event);
$smarty->assign('isFree',$change);


$output = $smarty->fetch(APP . "/view/templates/eventPage.tpl");

print $output;