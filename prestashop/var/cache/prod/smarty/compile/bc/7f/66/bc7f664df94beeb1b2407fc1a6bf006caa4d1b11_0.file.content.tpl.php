<?php
/* Smarty version 4.3.1, created on 2023-06-05 10:39:22
  from '/prestashop/admin3/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d9f3ac3aea9_44847930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc7f664df94beeb1b2407fc1a6bf006caa4d1b11' => 
    array (
      0 => '/prestashop/admin3/themes/default/template/content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647d9f3ac3aea9_44847930 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
