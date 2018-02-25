<?php
/* Smarty version 3.1.31, created on 2018-02-25 18:47:10
  from "C:\OSPanel\domains\evday\application\view\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92da7ebc7593_01710413',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5a92da7ebc7593_01710413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '314995a92da7eb2b173_55821368';
?>
<main>
    <form method="post" action="http://<?php echo $_SERVER['SERVER_NAME'];
echo $_SERVER['REQUEST_URI'];?>
">
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
                <?php
$__section_customer_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_customer']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer'] : false;
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['max']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_start = min(0, $__section_customer_0_loop);
$__section_customer_0_total = min(($__section_customer_0_loop - $__section_customer_0_start), $__section_customer_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total != 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = $__section_customer_0_start; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["name"];?>
</td>
                        <td>
                            <p>
                                <?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["content"];?>

                            </p>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["price"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["time"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["link"];?>
</td>
                        <td><input type="checkbox" name="visible[<?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["id"];?>
]" value="1" <?php echo $_smarty_tpl->tpl_vars['isCheck']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>
></td>
                    </tr>
                <?php
}
}
if ($__section_customer_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = $__section_customer_0_saved;
}
?>
            </table>
        </div>
        <button name="action" value="save">Сохранить</button>
    </form>
</main><?php }
}
