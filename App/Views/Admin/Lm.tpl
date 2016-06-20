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
<p>导航 : <a href="/admin/">index</a>-&gt; </p>
<table width="50%" border="1">
  <tr>
    <td width="60">sort</td>
    <td>{$lminfo['sort']}</td>
  </tr>
  <tr>
    <td>chr</td>
    <td>{$lminfo['chr']}</td>
  </tr>
  <tr>
    <td>title</td>
    <td>{$lminfo['title']}</td>
  </tr>
  <tr>
    <td>des</td>
    <td>{$lminfo['des']}</td>
  </tr>
  <tr>
    <td>path</td>
    <td>{$lminfo['path']}</td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="99%" border="1">
  <tr>
    <td height="30">序号</td>
    <td height="30">chr</td>
    <td>title</td>
    <td>des</td>
  </tr>
  {foreach from=$respath item=value name=foo}
  <tr>
    <td height="30"><input name="list[{$value}][sort]" type="text" value="{$smarty.foreach.foo.index}" size="5" maxlength="5"></td>
    <td height="30"><input type="hidden" name="list[{$value}][chr]" value="{$value}">
      <a href='/admin/lm/?chr={$value}'>{$value}</a></td>
    <td><input type="text" name="list[{$value}][title]" value="{$resjson['list'][$value]['title']}"></td>
    <td><input name="list[{$value}][des]" type="text" size="60" maxlength="60" value="{$resjson['list'][$value]['des']}"></td>
  </tr>
  {/foreach}
  <tr>
    <td colspan="4"><p>
      <input type="submit" name="button" id="button" value="提交">
    </p></td>
  </tr>
</table>
<pre>&nbsp;</pre>
<p>&nbsp;</p>
</body>
</html>