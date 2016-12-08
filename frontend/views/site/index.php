<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl;?>/css/site1.css" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="<?php echo Yii::$app->request->BaseUrl;?>/js/jquery.js"></script>
<title>
<?php
$this->title = '首页 - 光合科技 - 专业互联网技术提供商'; 
use common\help\Helper;
?>
</title>

</head>
<body>
<div class="big_center">
<div id="big_banner" class="big_banner">
<div class="banner" style="position:relative;">
<SCRIPT>

var widths= 1200;
var counts=3;
img1=new Image ();img1.src='<?php echo Yii::$app->request->BaseUrl;?>/img/banner3.png';
img2=new Image ();img2.src='<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2.png';
img3=new Image ();img3.src='<?php echo Yii::$app->request->BaseUrl;?>/img/banner1.png';
url1=new Image ();url1.src='javascript:void(0)';
url2=new Image ();url2.src='javascript:void(0)';
url3=new Image ();url3.src='javascript:void(0)';

var nn=1;
var key=0;
function change_img()
{
	if(key==0){
		key=1;
		}
else if(document.all)
{
document.getElementById("pic").filters[0].Apply();
document.getElementById("pic").filters[0].Play(duration=3);

}
eval('document.getElementById("pic").src=img'+nn+'.src');
eval('document.getElementById("url").href=url'+nn+'.src');
for (var i=1;i<=counts;i++){
	document.getElementById("xxjdjj"+i).className='axx';
	}
document.getElementById("xxjdjj"+nn).className='bxx';
if(nn=="1")
{
	$("#big_banner").css({'background-image':'url(<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_bg.png)'});

	setTimeout(function(){
		$("#banner3_message2").animate({
		top:(392)+'px',
			},2000);
	},10);
	setTimeout(function(){
		$("#banner3_message2").animate({
		left:(97)+'px',
			},2000);
	},400);
	
	
	
	setTimeout(function(){
		$("#banner3_message3").animate({
		left:(968)+'px',
			},2000);
	},10);
	setTimeout(function(){
		$("#banner3_message3").animate({
		top:(60)+'px',
			},2000);
	},400);
	
	
	
	
	$("#banner3_message1").css({display:"block"});
	$("#banner3_message2").css({display:"block"});
	$("#banner3_message3").css({display:"block"});
	$("#banner3_message4").css({display:"block"});
	$("#banner3_message5").css({display:"block"});
	$("#banner3_message6").css({display:"block"});
}
else
{
	$("#banner3_message1").stop(true).animate();
	$("#banner3_message2").stop(true).animate();
	$("#banner3_message3").stop(true).animate();
	
	$("#banner3_message1").removeClass("divClass");
	$("#banner3_message2").removeClass("divClass");
	$("#banner3_message3").removeClass("divClass");
	
	$("#banner3_message1").css({display:"none"});
	$("#banner3_message2").css({display:"none",top:"60px",left:'968px'});
	$("#banner3_message3").css({display:"none",top:"392px",left:'97px'});
	$("#banner3_message4").css({display:"none"});
	$("#banner3_message5").css({display:"none"});
	$("#banner3_message6").css({display:"none"});
}
if(nn=="2")
{
	$("#big_banner").css({'background-image':'url(<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_bg.png)'});
	$("#banner2_message4").css({display:"inline-block"});
	$("#banner2_message5").css({display:"block"});
	$("#banner2_message6").css({display:"block"});
	$("#banner2_message4").css({left:"964px"});
	$("#banner2_message1").animate({
		top:'204px',
		left:'432px',
		width:'146px',
		height:'106px',
		},300);
	var h1=60;
	var h2=30;
	var h3=40;
	setTimeout(function(){
		$("#banner2_message1").animate({
		top:(204+h1)+'px',
			},100);
	},10);
	setTimeout(function(){
		$("#banner2_message1").animate({
		top:(204+h2)+'px',
			},120);
	},10);
	setTimeout(function(){
		$("#banner2_message1").animate({
		top:(204+h3)+'px',
			},140);
	},10);

	
	$("#banner2_message2").animate({
		top:'160px',
		left:'635px',
		width:'147px',
		height:'104px',
		},300);
	setTimeout(function(){
		$("#banner2_message2").animate({
		top:(160+h1)+'px',
			},100);
	},10);
	setTimeout(function(){
		$("#banner2_message2").animate({
		top:(160+h2)+'px',
			},120);
	},10);
	setTimeout(function(){
		$("#banner2_message2").animate({
		top:(160+h3)+'px',
			},140);
	},10);
	
	$("#banner2_message3").animate({
		top:'130px',
		left:'987px',
		height:'169px',
		},2000);
	setTimeout(function(){
		$("#banner2_message3").animate({
		width:'35px',
			});
	},1000);
	$("#banner2_message4").animate({
		top:'253px',
		},2000);	
	setTimeout(function(){
		$("#banner2_message4").animate({
		left:'1024px',
			});
	},1000);
}
else
{
	$("#banner2_message1").stop(true).animate();
	$("#banner2_message2").stop(true).animate();
	$("#banner2_message3").stop(true).animate();
	$("#banner2_message4").stop(true).animate();
	$("#banner2_message1").css({display:"none",position:"absolute",top:"-200px",left:"432px",width:"146px",height:"106px"});
	$("#banner2_message2").css({display:"none",position:"absolute",top:"-200px",left:"635px",width:"147px",height:"104px"});
	$("#banner2_message3").css({display:"none",position:"absolute",top:"130px",left:"987px",width:"20px",height:"10px",overflow:"hidden"});
	$("#banner2_message4").css({display:"none",position:"absolute",top:"80px",left:"964px",width:"51px",height:"77px"});
	$("#banner2_message5").css({display:"none",position:"absolute",top:"49px",left:"127px"});
	$("#banner2_message6").css({display:"none",position:"absolute",top:"15px",left:"913px"});
	
}
if(nn=="3")
{
	var w1=80;
	var w2=90;
	var w3=60;
	var w4=100;
	var w5=30;
	$("#banner1_message1").animate({
		left:''+(96-w1)+'px',
		},4000);
	$("#banner1_message2").animate({
		left:''+(187-w1)+'px',
		},3000);
	$("#banner1_message3").animate({
		left:''+(508+w1)+'px',
		},2600);
	$("#banner1_message4").animate({
		left:''+(998+w1)+'px',
		},5000);
	$("#banner1_message5").animate({
		left:''+(940+w1)+'px',
		},2600);

	$("#big_banner").css({'background-image':'url(<?php echo Yii::$app->request->BaseUrl;?>/img/banner1_bg.png)'});
	$("#banner1_message1").css({display:"block"});
	$("#banner1_message2").css({display:"block"});
	$("#banner1_message3").css({display:"block"});
	$("#banner1_message4").css({display:"block"});
	$("#banner1_message5").css({display:"block"});
	$("#banner1_message6").css({display:"block"});
}
else
{
	$("#banner1_message1").stop(true).animate();
	$("#banner1_message2").stop(true).animate();
	$("#banner1_message3").stop(true).animate();
	$("#banner1_message4").stop(true).animate();
	$("#banner1_message5").stop(true).animate();
	$("#banner1_message6").stop(true).animate();
	
	$("#banner1_message1").css({display:"none",position:"absolute",top:"328px",left:"96px"});
	$("#banner1_message2").css({display:"none",position:"absolute",top:"52px",left:"187px"});
	$("#banner1_message3").css({display:"none",position:"absolute",top:"10px",left:"508px"});
	$("#banner1_message4").css({display:"none",position:"absolute",top:"152px",left:"998px"});
	$("#banner1_message5").css({display:"none",position:"absolute",top:"318px",left:"940px"});
}
nn++;
if(nn>counts){nn=1;}
tt=setTimeout('change_img()',10000);}
function changeimg(n){nn=n;window.clearInterval(tt);change_img();}
document.write('<style>');
document.write('.axx{padding:1px 7px;border-left:#cccccc 0px solid;}');
document.write('a.axx:link,a.axx:visited{text-decoration:none;color:#fff;line-height:12px;border-top:2px solid #D34600;}');
document.write('a.axx:active,a.axx:hover{text-decoration:none;color:#fff;line-height:12px;border-top:1px solid #999;}');
document.write('.bxx{padding:1px 7px;border-left:#cccccc 0px solid;}');
document.write('a.bxx:link,a.bxx:visited{text-decoration:none;color:#fff;line-height:12px;border-top:2px solid #fff;}');
document.write('a.bxx:active,a.bxx:hover{text-decoration:none;color:#fff;line-height:12px;border-top:2px solid #fff;}');
document.write('</style>');
document.write('<div style="width:'+widths+'px;overflow:hidden;text-overflow:clip;margin-top:0 auto;">');
document.write('<div><a id="url"><img id="pic" style="border:0px;filter:progid:dximagetransform.microsoft.wipe(gradientsize=1.0,wipestyle=4, motion=forward)" height="460" width='+widths+' /></a></div>');
document.write('<div style="filter:alpha(style=0,opacity=50,finishOpacity=2);opacity:0.5;width:100%-2px;font-size:20px;text-align:center;top:-20px;position:relative;margin:1px;height:12px;padding:0px;margin:0px;border:0px;">');
for(var i=1;i<counts+1;i++){document.write('<a style="height:2px;margin-right:5px;" href="javascript:changeimg('+i+');" id="xxjdjj'+i+'" class="axx" target="_self"></a>');}
document.write('</div></div>');
$(function(){
	var bannerimg1 = $("#banner3_message1");
	var speed = 10;
	var deg = -50;
	setInterval(function () {
		bannerimg1.css({
			'-ms-transform': 'rotate(' + deg + 'deg)', /* IE 9 */
			'-moz-transform': 'rotate(' + deg + 'deg)', /* Firefox */
			'-webkit-transform': 'rotate(' + deg + 'deg)', /* Safari and Chrome */
			'-o-transform': 'rotate(' + deg + 'deg)', /* Opera */
			'transform': 'rotate(' + deg + 'deg)'
		});
		deg+=1;
		if (deg >= 360) {
			deg = 0;
		}
	}, speed);
	
	
	
	var bannerimg2 = $("#banner3_message2");
	var speed2 = 100;
	var deg2 = 0;
	setInterval(function () {
		bannerimg2.css({
			'-ms-transform': 'rotate(' + deg2 + 'deg)', /* IE 9 */
			'-moz-transform': 'rotate(' + deg2 + 'deg)', /* Firefox */
			'-webkit-transform': 'rotate(' + deg2 + 'deg)', /* Safari and Chrome */
			'-o-transform': 'rotate(' + deg2 + 'deg)', /* Opera */
			'transform': 'rotate(' + deg2 + 'deg)'
		});
		deg2+=1;
		if (deg2 >= 360) {
			deg2 = 0;
		}
	}, speed);
	
	var bannerimg3 = $("#banner3_message3");
	var speed3 = 100;
	var deg3 = 0;
	setInterval(function () {
		bannerimg3.css({
			'-ms-transform': 'rotate(' + deg3 + 'deg)', /* IE 9 */
			'-moz-transform': 'rotate(' + deg3 + 'deg)', /* Firefox */
			'-webkit-transform': 'rotate(' + deg3 + 'deg)', /* Safari and Chrome */
			'-o-transform': 'rotate(' + deg3 + 'deg)', /* Opera */
			'transform': 'rotate(' + deg3 + 'deg)'
		});
		deg3+=1;
		if (deg3 >= 360) {
			deg3 = 0;
		}
	}, speed);
	change_img();
})
</SCRIPT>
<img id="banner2_message1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_message1.png" />
<img id="banner2_message2" src="<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_message2.png" />
<img id="banner2_message3" src="<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_message3.png" />
<img id="banner2_message4" src="<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_message4.png" />
<img id="banner2_message5" src="<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_message5.png" />
<img id="banner2_message6" src="<?php echo Yii::$app->request->BaseUrl;?>/img/new/banner2_message6.png" />




<img id="banner3_message1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_message1.png" />
<img id="banner3_message4" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_message4.png" />
<img id="banner3_message2" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_message2.png" />
<img id="banner3_message3" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_message3.png" />
<img id="banner3_message5" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_message5.png" />
<img id="banner3_message6" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner3_message6.png" />


<img id="banner1_message1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner1_message1.png" />
<img id="banner1_message2" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner1_message2.png" />
<img id="banner1_message3" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner1_message3.png" />
<img id="banner1_message4" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner1_message4.png" />
<img id="banner1_message5" src="<?php echo Yii::$app->request->BaseUrl;?>/img/banner1_message5.png" />
</div>
</div>
<div class="center">

<!--<div id="div1" style="background-color:red;">2333333333333333</div>
<div id="div2" style="background-color:red;">2333333333333333</div>
<div id="div3" style="background-color:red;">2333333333333333</div>
<input id="button" type="button" name="button" value="点我" />-->

<script>
$("#button").click(function(){
  $("#div1").fadeToggle();
  $("#div2").fadeToggle("slow");
  $("#div3").fadeToggle(3000);
});
</script>
<div class="project_top">
<span class="project_top_span1">案例展示</span>
<div class="project_top_span2">
<a style="color:#000;" href="<?php echo Yii::$app->urlManager->createUrl('project/index');?>">
<span>更多</span>
<img src="<?php echo Yii::$app->request->BaseUrl;?>/img/more.png">
</a>
</div>
</div>
<script>
function onout(id)
{
	document.getElementById("center"+id).style.display="none";
}
function onover(id)
{
	document.getElementById("center"+id).style.display="block";
}
function icononout(id)
{
	document.getElementById("icon"+id).src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png";
	document.getElementById("style_img"+id).src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png";
	
	document.getElementById("bcolor"+id).style.backgroundColor="#fff";
	$("#icon_img"+id).animate({
		height:'185px',
		width:'200px',
		marginTop:'-10px',
		marginLeft:'-50px',
		});
		//setTimeout(function(){
		//	if(!$("#icon_img").is(":animated")){
		//	$("#icon_img"+id).stop(false,true).animate();
		//}
		//},2000);
}
function icononover(id)
{
	document.getElementById("icon"+id).src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_black.png";
	document.getElementById("style_img"+id).src="<?php echo Yii::$app->request->BaseUrl;?>/img/fff.png";
	
	document.getElementById("bcolor"+id).style.backgroundColor="#000";
	$("#icon_img"+id).animate({
		height:'100px',
		width:'100px',
		marginTop:'25px',
		marginLeft:'50px',
		});

}
</script>
<div class="project" style="position:relative;">
<div class="project_left">
<a href="<?php echo Yii::$app->urlManager->createUrl('project/index')."#p7";?>"><img  onmouseover="onover(1)" onmouseout="onout(1)" src="<?php echo Yii::$app->request->BaseUrl;?>/img/center1.png"></a>
<a href="<?php echo Yii::$app->urlManager->createUrl('project/index')."#p2";?>"><img  onmouseover="onover(2)" onmouseout="onout(2)" src="<?php echo Yii::$app->request->BaseUrl;?>/img/center2.png"></a>
</div>
<div class="project_center">
<a href="<?php echo Yii::$app->urlManager->createUrl('project/index')."#p3";?>"><img  onmouseover="onover(3)" onmouseout="onout(3)" src="<?php echo Yii::$app->request->BaseUrl;?>/img/center3.png"></a>
</div>
<div class="project_right">
<a href="<?php echo Yii::$app->urlManager->createUrl('project/index')."#p1";?>"><img  onmouseover="onover(4)" onmouseout="onout(4)" src="<?php echo Yii::$app->request->BaseUrl;?>/img/center4.png"></a>
<a href="<?php echo Yii::$app->urlManager->createUrl('project/index')."#p5";?>"><img  onmouseover="onover(5)" onmouseout="onout(5)" src="<?php echo Yii::$app->request->BaseUrl;?>/img/center5.png"></a>
</div>
<div id="center1" class="tm" style="pointer-events: none;display:none;width:400px;height:105px;background-color:#000;position:absolute;top:210px;left:0px;">
<div class="comment">
<span style="color:#fff;font-size:18px;">乐提网</span>
<p>
    <?php
		$content="乐提社区 是周大福内部员工论坛，主要用户周大福内部员工的沟通交流、活动、信息发布等。通过乐提社区增加员工互动性需求及网站粘度，与公司内部产品互通，满足员工个性需求。";
		echo Helper::truncate_utf8_string($content,45);
	?>
</p>
</div>
</div>


<div class="tab" style="left:330px;">
web
</div>
<div class="tab" style="left:250px;top:315px;">
iOS
</div>
<div class="tab tab_android" style="left:320px;top:315px;">
Android
</div>
<div class="tab" style="left:650px;top:0px;">
iOS
</div>
<div class="tab tab_android" style="left:720px;top:0px;">
Android
</div>
<div class="tab" style="left:1050px;top:0px;">
iOS
</div>
<div class="tab tab_android" style="left:1120px;top:0px;">
Android
</div>
<div class="tab" style="left:1050px;top:315px;">
iOS
</div>
<div class="tab tab_android" style="left:1120px;top:315px;">
Android
</div>



<div id="center2" class="tm" style="pointer-events: none;display:none;width:400px;height:105px;background-color:#000;position:absolute;top:525px;left:0px;">
<div class="comment">
<span style="color:#fff;font-size:18px;">Funny集</span>
<p>
    <?php
		$content="收录了最新最in的段子、动图和表情，再也不怕跟女神无话可说，再也不怕在表情大战中败下阵来。无论你是白富美还是高富帅，手机必备app。";
		echo Helper::truncate_utf8_string($content,45);
	?>
</p>
</div>
</div>
<div id="center3" class="tm" style="pointer-events: none;display:none;width:400px;height:105px;background-color:#000;position:absolute;top:525px;left:400px;">
<div class="comment">
<span style="color:#fff;font-size:18px;">思维导图</span>
<p>
    <?php
		$content="思维导图又叫心智图，是表达发射性思维的有效的图形思维工具 ，它简单却又极其有效，是一种革命性的思维工具。";
		echo Helper::truncate_utf8_string($content,45);
	?>
</p>
</div>
</div>
<div id="center4" class="tm" style="pointer-events: none;display:none;width:400px;height:105px;background-color:#000;position:absolute;top:210px;left:800px;">

<div class="comment">
<span style="color:#fff;font-size:18px;">友聘</span>
<p>
    <?php
		$content="友聘，是一款专注好友圈求职和工作机会的职场社交应用，帮助求职者和招聘方利用移动互联网社交圈高效传播求职和招聘信息，不断提升职场人脉，从而增强求职和招聘的效率。目前，iOS1.0和Android 1.0版本已上线。";
		echo Helper::truncate_utf8_string($content,45);
	?>
</p>
</div>
</div>
<div id="center5" class="tm" style="pointer-events: none;display:none;width:400px;height:105px;background-color:#000;position:absolute;top:525px;left:800px;">
<div class="comment">
<span style="color:#fff;font-size:18px;">静音</span>
<p>
    <?php
		$content="提供了雨声、风声和森林中的鸟鸣声，适合需要专注冥想的场合。支持多种声音混合播放，营造奇妙的独处空间。读书、学习、听雨、惬意、悠然、自得、一切都是这么的自然。";
		echo Helper::truncate_utf8_string($content,45);
	?>
</p>
</div>
</div>
</div>

<div class="server_top">
<span class="server_top_span1">我们的服务</span>
</div>
<div class="server">
<div id="item1" style="position:relative;" onmouseover="icononover(1)" onmouseout="icononout(1)" class="item">
<div style="overflow:hidden;width:200px;height:160px;background-color:black;float:left;pointer-events: none;">
<img id="icon_img1" style="margin-top:-10px;margin-left:-50px;height:185px;width:200px;pointer-events: none;" class="server_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_icon1.png" />

<div style="filter: alpha(opacity=90);-moz-opacity: 0.9;opacity: 0.9;width:28x;display:inline;position:absolute;top:70px;left:190px;background-color:#fff;height:21px;background:url('<?php echo Yii::$app->request->BaseUrl;?>/img/000.png');">
<img id="style_img1" style="height:21px;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png"/>
</div>


</div>
<div class="view_white_div" style="pointer-events: none;">
<div style="height:18px;pointer-events: none;"></div>
<span>系统运维</span><br/>
<div class="server_div" >
<span style="font-size:12px;margin-left:0px;">提供运维服务，提高安全性与可用性</span>
</div>
<img id="icon1" class="server_icon_left" src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png" />
</div>
<div id="bcolor1" class="bcolor" style="background-color:#fff;position:absolute;top:0px;left:0px;pointer-events: none;">
<img class="server_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_1.png">
</div>
</div>

<div id="item2" style="position:relative;" onmouseover="icononover(2)" onmouseout="icononout(2)" class="item">
<div style="overflow:hidden;width:200px;height:160px;background-color:black;float:left;pointer-events: none;">
<img id="icon_img2" style="margin-top:-10px;margin-left:-50px;height:185px;width:200px;pointer-events: none;" class="server_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_icon2.png" />


<div style="filter: alpha(opacity=90);-moz-opacity: 0.9;opacity: 0.9;width:28x;display:inline;position:absolute;top:70px;left:190px;background-color:#fff;height:21px;background:url('<?php echo Yii::$app->request->BaseUrl;?>/img/000.png');">
<img id="style_img2" style="height:21px;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png"/>
</div>


</div>
<div class="view_white_div" style="pointer-events: none;">
<div style="height:18px;pointer-events: none;"></div>
<span>HTML5 App定制</span><br/>
<div class="server_div" >
<span style="font-size:12px;margin-left:0px;">基于ionic架构的成熟web app方案</span>
</div>
<img id="icon2" class="server_icon_left" src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png" />
</div>
<div id="bcolor2" class="bcolor" style="background-color:#fff;position:absolute;top:0px;left:0px;pointer-events: none;">
<img class="server_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_2.png">
</div>
</div>

<div id="item3" style="position:relative;" onmouseover="icononover(3)" onmouseout="icononout(3)" class="item">
<div style="overflow:hidden;width:200px;height:160px;background-color:black;float:left;pointer-events: none;">
<img id="icon_img3" style="margin-top:-10px;margin-left:-50px;height:185px;width:200px;pointer-events: none;" class="server_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_icon3.png" />


<div style="filter: alpha(opacity=90);-moz-opacity: 0.9;opacity: 0.9;width:28x;display:inline;position:absolute;top:70px;left:190px;background-color:#fff;height:21px;background:url('<?php echo Yii::$app->request->BaseUrl;?>/img/000.png');">
<img id="style_img3" style="height:21px;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png"/>
</div>


</div>
<div class="view_white_div" style="pointer-events: none;">
<div style="height:18px;pointer-events: none;"></div>
<span> iOS App定制</span><br/>
<div class="server_div" >
<span style="font-size:12px;margin-left:0px;">经验丰富的工程师在此恭候</span>
</div>
<img id="icon3" class="server_icon_left" src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png" />
</div>
<div id="bcolor3" class="bcolor" style="background-color:#fff;position:absolute;top:0px;left:0px;pointer-events: none;">
<img class="server_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_3.png">
</div>
</div>

<div id="item4" style="position:relative;" onmouseover="icononover(4)" onmouseout="icononout(4)" class="item">
<div class="view_white_div" style="pointer-events: none;float:left;">
<div style="height:18px;pointer-events: none;"></div>
<span>平面 & UI设计</span><br/>
<div class="server_div" >
<span style="font-size:12px;margin-left:0px;">不仅仅是设计，更帮助您梳理需求和交互</span>
</div>
<img id="icon4" class="server_icon_left" src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png" />
</div>
<div style="overflow:hidden;width:200px;height:160px;background-color:black;float:left;pointer-events: none;">
<img id="icon_img4" style="margin-top:-10px;margin-left:-50px;height:185px;width:200px;pointer-events: none;" class="server_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_icon4.png" />

<div style="filter: alpha(opacity=90);-moz-opacity: 0.9;opacity: 0.9;width:28x;display:inline;position:absolute;top:70px;left:190px;background-color:#fff;height:21px;background:url('<?php echo Yii::$app->request->BaseUrl;?>/img/000.png');">
<img id="style_img4" style="height:21px;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png"/>
</div>



</div>
<div style="height:18px;pointer-events: none;"></div>
<div id="bcolor4" class="bcolor" style="background-color:#fff;position:absolute;top:0px;left:200px;pointer-events: none;">
<img class="server_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_4.png">
</div>
</div>

<div id="item5" style="position:relative;" onmouseover="icononover(5)" onmouseout="icononout(5)" class="item">
<div class="view_white_div" style="pointer-events: none;float:left;">
<div style="height:18px;pointer-events: none;"></div>
<span>Web系统定制开发</span><br/>
<div class="server_div" >
<span style="font-size:12px;margin-left:0px;">为您打造可扩展的自适应系统</span>
</div>
<img id="icon5" class="server_icon_left" src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png" />
</div>
<div style="overflow:hidden;width:200px;height:160px;background-color:black;float:left;pointer-events: none;">
<img id="icon_img5" style="margin-top:-10px;margin-left:-50px;height:185px;width:200px;pointer-events: none;" class="server_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_icon5.png" />



<div style="filter: alpha(opacity=90);-moz-opacity: 0.9;opacity: 0.9;width:28x;display:inline;position:absolute;top:70px;left:190px;background-color:#fff;height:21px;background:url('<?php echo Yii::$app->request->BaseUrl;?>/img/000.png');">
<img id="style_img5" style="height:21px;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png"/>
</div>


</div>
<div style="height:18px;pointer-events: none;"></div>
<div id="bcolor5" class="bcolor" style="background-color:#fff;position:absolute;top:0px;left:200px;pointer-events: none;">
<img class="server_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_5.png">
</div>
</div>

<div id="item6" style="position:relative;" onmouseover="icononover(6)" onmouseout="icononout(6)" class="item">
<div class="view_white_div" style="pointer-events: none;float:left;">
<div style="height:18px;pointer-events: none;"></div>
<span>Android App定制</span><br/>
<div class="server_div" >
<span style="font-size:12px;margin-left:0px;">轻松兼容不同版本与分辨率</span>
</div>
<img id="icon6" class="server_icon_left" src="<?php echo Yii::$app->request->BaseUrl;?>/img/more_white.png" />
</div>
<div style="overflow:hidden;width:200px;height:160px;background-color:black;float:left;pointer-events: none;">
<img id="icon_img6" style="margin-top:-10px;margin-left:-50px;height:185px;width:200px;pointer-events: none;" class="server_img1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_icon6.png" />



<div style="filter: alpha(opacity=90);-moz-opacity: 0.9;opacity: 0.9;width:28x;display:inline;position:absolute;top:70px;left:190px;background-color:#fff;height:21px;background:url('<?php echo Yii::$app->request->BaseUrl;?>/img/000.png');">
<img id="style_img6" style="height:21px;" src="<?php echo Yii::$app->request->BaseUrl;?>/img/000.png"/>
</div>


</div>
<div style="height:18px;pointer-events: none;"></div>
<div id="bcolor6" class="bcolor" style="background-color:#fff;position:absolute;top:0px;left:200px;pointer-events: none;">
<img class="server_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/item_6.png">
</div>
</div>

</div>
<div class="bottom_top">
<span class="bottom_top_span1">产品开发流程</span>
</div>
<div class="bottom">
<img src="<?php echo Yii::$app->request->BaseUrl;?>/img/foot.jpg" />
<div class="zzbottom">
</div>
<img class="foot_icon_img" src="<?php echo Yii::$app->request->BaseUrl;?>/img/foot_icon.png" />
</div>

<div style="height:73px;"></div>
</div>
</div>
</body>
</html>

