<?php

$smarty->caching = 2;
$smarty->cache_lifetime = 300; // 1/3 минуты

if($_POST["action"] && $_POST["action"] == "saveEvent")
{
    $db->insert(
        "`events`",
        chooseInsert("createEvent", $_GET, $_POST)
    );
}

$output = $smarty->fetch(APP . "/view/templates/createEvent.tpl");

print $output;