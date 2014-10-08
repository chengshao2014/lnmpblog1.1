<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/admin/css/common.css"/>
<title></title>
</head>
<body>
	<div class="content">
		<div class="loginborder">
			<div class="center">
				<form action="<?php echo Yii::app()->request->baseUrl; ?>/blogadmin/index.html/" method="post">
				<?php //$form = $this->beginWidget('CActiveForm')?>
				<?php
					$form = $this->beginWidget('CActiveForm', array(
					    'id' => 'login-form',
					    	'enableClientValidation' => true,
					    	'clientOptions' => array(
					        	'validateOnSubmit' => true,
					    		),
					        ));
					?>
				<div class="" style="float:center;height:60px">
					<div style="float:left;width:20%;height:60px;text-align:right;">登录:</div>
					<div style="width:auto;height:60px;float:left"><?php echo $form->textField($loginForm,'username',array('id'=>'userName'))?>
				</div>
				</div>
				<div class="" style="float:center;height:60px">
					<div style="float:left;width:20%;height:60px;text-align:right;">密码:</div>
					<div style="width:auto;height:60px;float:left"><?php echo $form->passwordField($loginForm,'password',array('id'=>'psd'))?></div>
				</div>
				<div class="" style="float:center;">
					<div style="float:left;width:20%;height:60px;text-align:right;">验证码:</div>
					<div style="width:auto;height:60px;float:left"><?php echo $form->textField($loginForm,'captcha',array('id'=>'verify'))?></div>
					<div style="width:30%;height:60px;float:left;text-align:center;">
						<?php $this->widget('CCaptcha', array('showRefreshButton'=>false,'id' => 'veryCode',
           						 'clickableImage' => true,
           						 'imageOptions'=>array('alt'=>'点击换图','title'=>'点击换图','style' => 'cursor:pointer;')));
       					 ?>
					</div>
				</div>
				<div class="" style="float:center;">
				<input type="submit" name="sub" value="登录" class="logins">
				<input type="reset" name="reset" value="重置" class="res">
				</div>
				<?php $this->endWidget();?>
				</form>
			</div>
			<ul class="pro">
				<li class="error"></li></ul>
			<ul class="psd">
				<li class="error"></li>
			</ul>
			<ul>
				<li class="ver">
					<?php echo $form->error($loginForm,'captcha') ?>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>