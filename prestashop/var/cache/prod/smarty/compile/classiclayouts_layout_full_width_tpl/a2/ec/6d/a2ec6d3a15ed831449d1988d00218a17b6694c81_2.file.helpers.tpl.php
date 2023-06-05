<?php
/* Smarty version 4.3.1, created on 2023-05-31 14:21:34
  from '/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64773bceadbca3_71096258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2ec6d3a15ed831449d1988d00218a17b6694c81' => 
    array (
      0 => '/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1671890849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64773bceadbca3_71096258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/a2/ec/6d/a2ec6d3a15ed831449d1988d00218a17b6694c81_2.file.helpers.tpl.php',
    'uid' => 'a2ec6d3a15ed831449d1988d00218a17b6694c81',
    'call_name' => 'smarty_template_function_renderLogo_8839624064773bcead8602_82119306',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_8839624064773bcead8602_82119306 */
if (!function_exists('smarty_template_function_renderLogo_8839624064773bcead8602_82119306')) {
function smarty_template_function_renderLogo_8839624064773bcead8602_82119306(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_8839624064773bcead8602_82119306 */
}
