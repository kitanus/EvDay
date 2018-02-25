<?php
/* Smarty version 3.1.31, created on 2018-02-25 18:58:19
  from "C:\OSPanel\domains\evday\application\view\templates\createEvent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92dd1b8131c6_07497927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b88fe9845f3ee283eacfe629f2767d7072dd885' => 
    array (
      0 => 'C:\\OSPanel\\domains\\evday\\application\\view\\templates\\createEvent.tpl',
      1 => 1519187838,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 300,
),true)) {
function content_5a92dd1b8131c6_07497927 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
    <form method="post" action="/?go=createEvent">
        <input type="text" name="nameEvent" id="nameEvent" placeholder="Название мероприятия">
        <textarea name="contentEvent" maxlength="190" placeholder="Описание мероприятия"></textarea>
        <input type="text" name="priceEvent" placeholder="Стоймость билета"><br>
        Дата: <input type="datetime-local" name="timeEvent" id="timeEvent">
        <input type="text" name="linkEvent" placeholder="Ссылка на сайт мероприятия">
        <button name="action" value="saveEvent">Создать мероприятие</button>
    </form>
</main><?php }
}
