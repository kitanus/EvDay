<?php
/* Smarty version 3.1.31, created on 2018-02-25 18:14:09
  from "C:\OSPanel\domains\evday\application\view\templates\eventPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a92d2c1e3b186_81773292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6ea21477e1b01aace727844c96903dfb07b1661' => 
    array (
      0 => 'C:\\OSPanel\\domains\\evday\\application\\view\\templates\\eventPage.tpl',
      1 => 1519571648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a92d2c1e3b186_81773292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '314235a92d2c1d6ff56_33745311';
?>
<main>
    <div id="eventWall">
        <?php
$__section_customer_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_customer']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer'] : false;
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['max']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_start = min(0, $__section_customer_0_loop);
$__section_customer_0_total = min(($__section_customer_0_loop - $__section_customer_0_start), $__section_customer_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total != 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = $__section_customer_0_start; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
            <div class="event">
                <header>
                    <p><?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["name"];?>
</p>
                </header>
                <article>
                    <p><?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["time"];?>
</p>
                    <?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["content"];?>

                    <p><?php echo $_smarty_tpl->tpl_vars['isFree']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>
</p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['event']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]["link"];?>
">Подробнее. .</a>
                </article>
            </div>
        <?php
}
}
if ($__section_customer_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = $__section_customer_0_saved;
}
?>
    </div>
</main><?php }
}
