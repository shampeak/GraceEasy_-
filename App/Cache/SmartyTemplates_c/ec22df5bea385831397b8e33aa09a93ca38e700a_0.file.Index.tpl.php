<?php
/* Smarty version 3.1.29, created on 2016-06-23 11:51:39
  from "E:\phpleague\Grace\GraceEasy\App\Views\Lm\Index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576b5ccbea4b39_28945014',
  'file_dependency' => 
  array (
    'ec22df5bea385831397b8e33aa09a93ca38e700a' => 
    array (
      0 => 'E:\\phpleague\\Grace\\GraceEasy\\App\\Views\\Lm\\Index.tpl',
      1 => 1466653896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b5ccbea4b39_28945014 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['res']->value['description'];?>
">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
</title>
   
    <!-- Bootstrap -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">

  <style>
    #te {
		padding-left: 0px;
		padding-right: 0px;
    }
    </style>


  </head>
  <body>
  

<div class="container-fluid">

<div class="row">
  <div class="col-md-12" id="te">
  
  
<ol class="breadcrumb">
  <li><a href="/">首页</a></li>
  <li><a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
</a></li>
</ol>  
<div class="list-group">
  <?php
$_from = $_smarty_tpl->tpl_vars['res']->value['list'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_foo_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
  <a href="lm/view?chr=<?php echo $_smarty_tpl->tpl_vars['res']->value['chr'];?>
&child=<?php echo $_smarty_tpl->tpl_vars['value']->value['chr'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
  <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_item;
}
if ($__foreach_foo_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_foo_0_saved_key;
}
?>
</div>  
  

  </div>
</div>



</div>











  </body>
</html>
<?php }
}
