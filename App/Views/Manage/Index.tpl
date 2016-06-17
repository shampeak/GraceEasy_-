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
<table width="200" border="1">
  <tr>
    <td>序号</td>
    <td>内容</td>
    <td>操作</td>
  </tr>
  <tr>
    <td>0</td>
    <td>概念云</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>1</td>
    <td>函数库</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>设计模式</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>说明：</p>
<p>循环读取store目录下的文件夹下 readme.md</p>
<p>read可以根据后台设定进行重写</p>
<p>获取title /decription /and list</p>
<p>list 根据配置生成</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>点击内容跳转到相对应的内容上</p>
<p>路由结构如下</p>
<p>/pages/index	首页 点击详细跳出列表,或者所有内容展示</p>
<p>/pages/lm?path=概念云	相对应的二级内容[根据设定,显示所有内容,或者仅仅列表]</p>
<p>pages/nr?path=概念云&amp;nr=单例 [显示内容]</p>
<p>导航 首页 -&gt; 二级 -&gt; 内容</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>预处理内容</p>
<p>1 : 循环每个目录</p>
<p>获取访问的目录名和下面的readme.json</p>
<p>获得一级栏目的路径,标题,描述</p>
<p>&nbsp;</p>
<p>2 : 对栏目路径下进行循环</p>
<p>获取所有的信息,并且进行排序</p>
<p>文件list.json</p>
<p>文件名 - 描述 - 访问路径 </p>
<p>后台的操作是对readme.json和list.json进行重写</p>
<p>&nbsp;</p>
<!-- header logo: style can be found in header.less -->


</body>
</html>