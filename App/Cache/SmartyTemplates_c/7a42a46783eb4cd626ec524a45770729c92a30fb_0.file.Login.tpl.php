<?php
/* Smarty version 3.1.29, created on 2016-06-21 19:32:46
  from "E:\GraceEasy\App\Views\Admin\Login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576925de1bb984_17290831',
  'file_dependency' => 
  array (
    '7a42a46783eb4cd626ec524a45770729c92a30fb' => 
    array (
      0 => 'E:\\GraceEasy\\App\\Views\\Admin\\Login.tpl',
      1 => 1466508658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576925de1bb984_17290831 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE | General UI</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <!-- Theme style -->
    <link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <![endif]-->
</head>
<body class="skin-black">
<div class="header">Sign In</div>
<form method="post" action="/Admin/login">
    <div class="body bg-gray">
        <div class="form-group">
            <input type="text" name="userName" class="form-control" placeholder="LoginName" value="irones"/>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" value="irones"/>
        </div>
    </div>
    <div class="footer">
        <input type="submit" name="button" id="button" value="Sign In">
    </div>
</form>
</body>
</html><?php }
}
