<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl;?>/css/phone.css" type="text/css" />
	<meta content="Android开发,IOS开发,APP开发,网页开发,web开发,商业策略,咨询设计,定制研发,联合运营,深圳app开发,深圳手机软件开发" name="keywords">
	<meta content="移动互联网手机客户端软件开发优秀公司/android安卓手机应用软件开发/app开发公司/iphone/ipad/ios手机应用软件开发/网页/web开发" name="description">
	<meta name="copyright" content="深圳光合科技有限公司-www.gohoc.com">
	<meta name="author" content="深圳光合科技有限公司">
</head>
<body>
<script>
	function message() {
		if($("#message").css('display')=='none') {
			$("#message").css('display', 'block');
		}else {
			$("#message").css('display', 'none');
		}
	}
</script>
<div class="topitme1" >
	<img class="topleft" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/logo.png"/>
	<img onclick="message()" class="topright" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/more.png"/>
</div>
<div id="message" class="message" style="background-image: url('<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/message.png');">
	<label onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site-phone/index');?>'">首页</label>
	<label onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site-phone/project');?>'">案例</label>
	<label><a href="tel:075523180315">联系我们</a></label>
</div>
        <?= $content ?>
<div class="bottom">
	<div class="bottomleft">
		<h1>深圳光合科技有限公司</h1><br/><br/>
		<h2>深圳市南山区科兴科学园B1单元701-76</h2><br/>
		<h2>技术支持:0755-23180315</h2><br/>
		<h2>Email:dongzhibin@gohoc.com</h2><br/>
	</div>
	<div class="bottomright">
		<img src="<?php echo Yii::$app->request->BaseUrl;?>/img/weixin.jpg">
	</div>
</div>
</body>
</html>
<?php $this->endPage() ?>
