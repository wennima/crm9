<?php /* Smarty version Smarty-3.1.7, created on 2018-07-17 17:14:42
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13058322375b4e15f24a6ae7-20204949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aed4ae68b758362f3a9a48e167b0f369913dcfa6' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1531840741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13058322375b4e15f24a6ae7-20204949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b4e15f24b890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b4e15f24b890')) {function content_5b4e15f24b890($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>