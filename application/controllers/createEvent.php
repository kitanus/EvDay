<?php

//print "<pre>";
//print var_dump($_POST);
//print "</pre>";

if($_POST["action"] && $_POST["action"] == "saveEvent") {
    $db->insert(
        "`events`",
        chooseInsert("createEvent", $_GET, $_POST)
    );
}

include APP . "/view/templates/createEvent.html";