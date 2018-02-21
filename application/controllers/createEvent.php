<?php

if($_POST["action"] && $_POST["action"] == "saveEvent")
{
    $db->insert(
        "`events`",
        chooseInsert("createEvent", $_GET, $_POST)
    );
}

include APP . "/view/templates/createEvent.html";