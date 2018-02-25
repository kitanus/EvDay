<?php
/* Smarty version 3.1.31, created on 2018-02-25 18:57:48
  from "C:\OSPanel\domains\evday\application\view\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92dcfc5ba661_45830964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e39b95f9ccdee9817faf046976262eecf9d8a4c7' => 
    array (
      0 => 'C:\\OSPanel\\domains\\evday\\application\\view\\templates\\header.tpl',
      1 => 1519135066,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 300,
),true)) {
function content_5a92dcfc5ba661_45830964 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="logo">
    <a href="/"><span id="doc">Ev</span><span id="stud">Day</span></a>
</div>
<div id="filter">
    <form method="post">
        <div>Фильтр</div>
        <select name="typeOfFilter">
            <option value="no">-</option>
            <option value="time">По дате</option>
            <option value="price">По стоймости</option>
        </select>
        <select name="filterOrder">
            <option value="no">-</option>
            <option value="less">От меньшего</option>
            <option value="more">От большего</option>
        </select>
        <button name="action" value="filter">Установить</button>
    </form>
</div>
<div id="createEvent">
    <a href="/?go=createEvent"><span>Создать мероприятие</span></a>
</div>

<?php }
}
