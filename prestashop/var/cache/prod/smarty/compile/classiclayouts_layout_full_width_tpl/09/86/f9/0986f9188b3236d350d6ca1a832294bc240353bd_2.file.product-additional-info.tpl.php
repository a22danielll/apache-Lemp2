<?php
/* Smarty version 4.3.1, created on 2023-06-05 11:17:25
  from '/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647da8253b9582_66096225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0986f9188b3236d350d6ca1a832294bc240353bd' => 
    array (
      0 => '/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_647da8253b9582_66096225 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
