<?php
if(!isset($GLOBALS['_vars'])) $GLOBALS['_vars'] = array(); 
$fields = array();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>ɨ���ά��</title>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $GLOBALS['cfg_soft_lang']; ?>" />
		<meta name="generator" content="DedeCMS V5.6" />
		<meta name="author" content="desdev.cn" />
		<style type="text/css">
			body{
				margin: 0;
			}
			.dede_weixin_popup {
			 padding: 10px;
			  width: 240px;
			  height: 300px;
			  background: #fff;
			  font-size: 12px;
			}.dede_weixin_popup .dede_weixin_popup_head {
			  font-size: 12px;
			  font-weight: bold;
			  text-align: left;
			  line-height: 16px;
			  height: 16px;
			  position: relative;
			  color: #000;
			}.dede_weixin_popup .dede_weixin_popup_foot {
			  font-size: 12px;
			  text-align: left;
			  line-height: 22px;
			  color: #666;
			}
		</style>
	</head>
	<body>
		<div id="dede_weixin_qrcode_dialog" class="dede_weixin_popup" style="left: 516px; top: 9606.5px; width: 240px; height: 230px;">
			<div class="dede_weixin_popup_head"><span>������΢������Ȧ</span>
			</div>
			<div id="dede_weixin_qrcode_dialog_qr" class="dede_weixin_popup_main">
				<center>
					<a href="http://2v.dedecms.com/" target="_blank">
						<img src="<?php echo $GLOBALS['cfg_plus_dir']; ?>/qrcode.php?action=get_qrcode&type=<?php echo $GLOBALS['_vars']['type']; ?>&id=<?php echo $GLOBALS['_vars']['id']; ?>" width="" height="" border="0" alt="">
					</a>
				</center>
			</div>
			<div class="dede_weixin_popup_foot">��΢�ţ�����ײ��ġ����֡���
				<br>ʹ�á�ɨһɨ�����ɽ���ҳ����������Ȧ��</div>
		</div>
	</body>

</html>