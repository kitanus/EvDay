<?php
/* Smarty version 3.1.31, created on 2018-02-25 18:59:15
  from "C:\OSPanel\domains\evday\application\view\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92dd5394c6c7_84018933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c4f8e40d1dc04bd3e4d6dcf3eecbd9c9dbde4e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\evday\\application\\view\\templates\\admin.tpl',
      1 => 1519573500,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 10,
),true)) {
function content_5a92dd5394c6c7_84018933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
    <form method="post" action="http://evday/?go=admin&login=vladkor&password=forgot525">
        <div id="visible">
            <table>
                <tr>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Цена</th>
                    <th>Дата</th>
                    <th>Ссылка</th>
                    <th>Пропуск</th>
                </tr>
                                    <tr>
                        <td>Yokai Partu</td>
                        <td>
                            <p>
                                Описание
                            </p>
                        </td>
                        <td>400</td>
                        <td>2018-02-16 18:00:00</td>
                        <td>/</td>
                        <td><input type="checkbox" name="visible[1]" value="1" ></td>
                    </tr>
                                    <tr>
                        <td>Прогулка</td>
                        <td>
                            <p>
                                Прогулка по берегу Казанки от НКЦ до Казань Арены
                            </p>
                        </td>
                        <td>0</td>
                        <td>2018-02-20 18:00:00</td>
                        <td></td>
                        <td><input type="checkbox" name="visible[2]" value="1" ></td>
                    </tr>
                                    <tr>
                        <td>Выставка инопланетян и пришельцев в Казани.</td>
                        <td>
                            <p>
                                Впервые в Казани открылась масштабная выставка инопланетных форм жизни - пришельцев и инопланетян!
 
У вас есть уникальная возможность узнать эти секреты, увидеть пришельцев.
                            </p>
                        </td>
                        <td>400</td>
                        <td>2018-02-20 15:00:00</td>
                        <td>https://kzngo.ru/event/sekretnyy-obekt-u-17-laboratorii-nova-4011</td>
                        <td><input type="checkbox" name="visible[6]" value="1" checked></td>
                    </tr>
                                    <tr>
                        <td>Выставка «Демидовы и металл. Сплав на века»</td>
                        <td>
                            <p>
                                В Музее Пушечного двора Музея-заповедника «Казанский Кремль» открывается выставка «Демидовы и металл. Сплав на века» из фондов Нижнетагильского музея-заповедника «Горнозаводской Урал»
                            </p>
                        </td>
                        <td>200</td>
                        <td>2018-02-20 09:00:00</td>
                        <td>https://kzngo.ru/event/vystavka-demidovy-i-metall-splav-na-veka-4506</td>
                        <td><input type="checkbox" name="visible[7]" value="1" checked></td>
                    </tr>
                                    <tr>
                        <td>Бесплатный концерт авторской музыки</td>
                        <td>
                            <p>
                                19 февраля состоится концерт авторской музыки молодого казанского композитора Миляуши Хайруллиной. Вас ждет вечер премьер и открытий 
                            </p>
                        </td>
                        <td>0</td>
                        <td>2018-02-22 16:00:00</td>
                        <td>https://kzngo.ru/event/besplatnyy-koncert-avtorskoy-muzyki-4588</td>
                        <td><input type="checkbox" name="visible[8]" value="1" checked></td>
                    </tr>
                                    <tr>
                        <td>Спектакль «Разговор о другом»</td>
                        <td>
                            <p>
                                Белый мужчина, терзаемый внутренними противоречиями, входит в лифт и застревает между этажами. Пытаясь выбраться, герой разделяется на двух персонажей. Либерала и патриота. Правого и левого.
                            </p>
                        </td>
                        <td>500</td>
                        <td>2018-02-23 18:00:00</td>
                        <td>https://kzngo.ru/event/spektakl-razg-4436</td>
                        <td><input type="checkbox" name="visible[9]" value="1" checked></td>
                    </tr>
                                    <tr>
                        <td>Психологические встречи "Время жить"</td>
                        <td>
                            <p>
                                На этих встречах делятся опытом и жизненными «фишками», учатся целостно и корректно воспринимать себя и мир вокруг, общаются и заводят полезные знакомства, а также пьют чай и поедают печеньк
                            </p>
                        </td>
                        <td>200</td>
                        <td>2018-02-24 09:00:00</td>
                        <td>https://kzngo.ru/event/psihologicheskie-vstrechi-vremya-zhit-3248</td>
                        <td><input type="checkbox" name="visible[10]" value="1" checked></td>
                    </tr>
                            </table>
        </div>
        <button name="action" value="save">Сохранить</button>
    </form>
</main><?php }
}
