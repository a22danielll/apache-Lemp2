<?php
/* Smarty version 4.3.1, created on 2023-06-05 10:39:30
  from '/prestashop/admin3/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647d9f42e97b14_92850026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67d214a727c132e9106f19491a6ded0a306534f5' => 
    array (
      0 => '/prestashop/admin3/themes/new-theme/template/content.tpl',
      1 => 1681819498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647d9f42e97b14_92850026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
