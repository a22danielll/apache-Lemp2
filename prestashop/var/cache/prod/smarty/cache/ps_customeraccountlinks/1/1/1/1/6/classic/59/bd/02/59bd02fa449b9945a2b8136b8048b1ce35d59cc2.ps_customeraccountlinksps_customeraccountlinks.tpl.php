<?php
/* Smarty version 4.3.1, created on 2023-06-05 11:09:25
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_647da6458fa511_13072504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1671890849,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_647da6458fa511_13072504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/a2/ec/6d/a2ec6d3a15ed831449d1988d00218a17b6694c81_2.file.helpers.tpl.php',
    'uid' => 'a2ec6d3a15ed831449d1988d00218a17b6694c81',
    'call_name' => 'smarty_template_function_renderLogo_1717016822647d9ff4139a30_36349824',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://prestashop.webtest.dedyn.io/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="https://prestashop.webtest.dedyn.io/index.php?controller=guest-tracking" title="Order tracking" rel="nofollow">Order tracking</a></li>
        <li><a href="https://prestashop.webtest.dedyn.io/index.php?controller=my-account" title="Log in to your customer account" rel="nofollow">Sign in</a></li>
        <li><a href="https://prestashop.webtest.dedyn.io/index.php?controller=registration" title="Create account" rel="nofollow">Create account</a></li>
        <li>
  <a href="//prestashop.webtest.dedyn.io/index.php?fc=module&module=ps_emailalerts&controller=account&id_lang=1" title="My alerts">
    My alerts
  </a>
</li>

       
	</ul>
</div>
<?php }
}
