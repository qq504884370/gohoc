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
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<link rel="icon" href="<?php echo Yii::$app->request->BaseUrl;?>/img/logo.png" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo Yii::$app->request->BaseUrl;?>/img/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl;?>/css/gohoc.css" type="text/css" />
	<meta content="Android开发,IOS开发,APP开发,网页开发,web开发,商业策略,咨询设计,定制研发,联合运营,深圳app开发,深圳手机软件开发" name="keywords">
	<meta content="移动互联网手机客户端软件开发优秀公司/android安卓手机应用软件开发/app开发公司/iphone/ipad/ios手机应用软件开发/网页/web开发" name="description">
	<meta name="copyright" content="深圳光合科技有限公司-www.gohoc.com"></meta>
	<meta name="author" content="深圳光合科技有限公司">
</head>
<body>
<div class="head_div">
<div class="head_div1">
<a href="<?php echo Yii::$app->urlManager->createUrl('site/index');?>"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/logotop.png" /></a>
<?php $url=explode('/',$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);?>
<ul class="nav">
<li onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site/index');?>'" style="<?php if($url[1]=='site'){echo 'color: #47b4f3;';}elseif(!isset($url[1])||empty($url[1])){echo 'color: #47b4f3;';}else{'color: #000;';} ?>">首页</li>
<li onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('project/index');?>'" style="<?php if($url[1]=='project'){echo 'color: #47b4f3;';}else{'color: #000;';} ?>">最新案例</li>
<!--<li>服务</li>
<li>关于</li>-->
<li id="lastli" style="<?php if($url[1]=='contact'){echo 'color: #47b4f3;';}else{'color: #000;';} ?>" onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('contact/index');?>'">联系我们</li>
</ul>
</div>
</div>
<div class="line_div">&nbsp;</div>
        <?= $content ?>
<div class="line_div">&nbsp;</div>
<div class="foot">
<div class="foot_div">
<img class="float_img3" src="<?php echo Yii::$app->request->BaseUrl;?>/img/bottom.png" />
<img class="float_img4" src="<?php echo Yii::$app->request->BaseUrl;?>/img/weixin.jpg" />
</div>
<span><a class="foot_span_a" href="javascript:void(0)">Copyright 2012-2016 光合科技-版权所有</a></span><span class="foot_right_span"><a class="foot_span_a" href="http://www.miitbeian.gov.cn/">粤ICP备12077998号-3</a></span>
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258398786'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/stat.php%3Fid%3D1258398786%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
<div class="footprint"></div>
</div>
<div class="float">
<a href="tencent://message/?uin=1319879782&Site=qq&Menu=yes"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/qqicon.png"></a>
<!--<img onmouseover="showwx()" onmouseout="hidewx()" style="cursor:pointer;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/weixinicon.png">-->
<img onmouseover="showtel()" onmouseout="hidetel()" style="cursor:pointer;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/telicon.png">
</div>
<script>
function showwx()
{
	document.getElementById("float_img1").style.display="block";
}
function showtel()
{
	document.getElementById("float_img2").style.display="block";
}
function hidewx()
{
	document.getElementById("float_img1").style.display="none";
}
function hidetel()
{
	document.getElementById("float_img2").style.display="none";
}
</script>
<img id="float_img1" class="float_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/tcwx.png">
<img id="float_img2" class="float_img2" src="<?php echo Yii::$app->request->BaseUrl;?>/img/tcdh.png">

</body>
</html>
<?php $this->endPage() ?>
