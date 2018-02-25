<?php
/**
 * Created by PhpStorm.
 * User: VladKor
 * Date: 25.02.2018
 * Time: 18:21
 */

$smarty->caching = 2;
$smarty->cache_lifetime = 300; // 1/3 минуты

$output = $smarty->fetch(APP . "/view/templates/header.tpl");

print $output;