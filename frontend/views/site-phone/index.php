<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="<?php echo Yii::$app->request->BaseUrl;?>/css/phoneindex.css" type="text/css" />
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
<div class="topimg">
    <img class="topimg1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/topbg1.png"/>
    <div class="toplabel">
        <label class="toplabel1">#互联网技术服务，一站式搞定#</label><br/>
        <label class="toplabel2">专业互联网服务技术</label>
    </div>
</div>
<div class="item">
<div class="itemdiv"><h1 class="itemtitle">服务项目</h1></div>
<div class="itemcontent">
    <div class="imgdiv1">
        <img class="imgtim1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/icon1.png"/>
        <div class="fontdiv">
            <label class="fontlabel1">系统运维</label><br/><br/>
            <label class="fontlabel2">提供运维服务,提高安全性与可能性</label>
        </div>
        <div class="ficondiv">
        <img class="ficonimg" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/ficon.png">
        </div>
    </div>
    <div class="imgdiv2">
        <img class="imgtim1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/icon2.png"/>
        <div class="fontdiv">
            <label class="fontlabel1">H5定制</label><br/><br/>
            <label class="fontlabel2">基于ionic架构的成熟web app方案</label>
        </div>
        <div class="ficondiv">
            <img class="ficonimg" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/ficon.png">
        </div>
    </div>
    <div class="imgdiv3">
        <img class="imgtim1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/icon3.png"/>
        <div class="fontdiv">
            <label class="fontlabel1">Android定制</label><br/><br/>
            <label class="fontlabel2">轻松兼容不同版本与分辨率</label>
        </div>
        <div class="ficondiv">
            <img class="ficonimg" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/ficon.png">
        </div>
    </div>
    <div class="imgdiv4">
        <img class="imgtim1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/icon4.png"/>
        <div class="fontdiv">
            <label class="fontlabel1">UI设计</label><br/><br/>
            <label class="fontlabel2">不仅仅是设计，更帮助您梳理需求和交互</label>
        </div>
        <div class="ficondiv">
            <img class="ficonimg" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/ficon.png">
        </div>
    </div>
    <div class="imgdiv5">
        <img class="imgtim1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/icon5.png"/>
        <div class="fontdiv">
            <label class="fontlabel1">IOS定制</label><br/><br/>
            <label class="fontlabel2">经验丰富的工程师在此恭候</label>
        </div>
        <div class="ficondiv">
            <img class="ficonimg" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/ficon.png">
        </div>
    </div>
    <div class="imgdiv6">
        <img class="imgtim1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/icon6.png"/>
        <div class="fontdiv">
            <label class="fontlabel1">WEB定制</label><br/><br/>
            <label class="fontlabel2">为你打造可扩展的自适应系统</label>
        </div>
    </div>
</div>
</div>
<div class="item">
    <div class="itemdiv"><h1 class="itemtitle">服务流程</h1></div>
    <div class="content">
        <div style="text-align:center;height:514px;background: url('<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten1bg.png');background-size: 100%">
            <img class="contentimg1" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten1iocn.png">
        </div>
        <div style="text-align:center;height:514px;background: url('<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten2bg.png');background-size: 100%">
            <img class="contentimg2" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten2iocn.png">
        </div>
        <div style="text-align:center;height:514px;background: url('<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten3bg.png');background-size: 100%">
            <img class="contentimg3" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten3iocn.png">
        </div>
        <div style="text-align:center;height:514px;background: url('<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten4bg.png');background-size: 100%">
            <img class="contentimg4" src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/conten4iocn.png">
        </div>
    </div>
</div>
<div class="item">
    <div class="itemdiv"><h1 class="itemtitle">案例展示</h1></div>
    <div class="bottomcontent">
        <div class="bottomcontentdiv" onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site-phone/project')."#p7";?>'"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/projec7.png"/><div class="bottomcontentdiv1">
                <label>Ishare</label><br/>
                <p class="bottomcontentdivp">为周大福定制的企业内部即时通讯app，拥有即时通讯、群聊、通讯录、朋友圈等完整的微信功能，更有为企业内部定制的投票、调查等个性化服务。</p>
            </div>
        </div>
        <br/>
        <hr/><br/>
        <div class="bottomcontentdiv" onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site-phone/project')."#p2";?>'"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/projec2.png"/><div class="bottomcontentdiv1">
                <label>Funny集</label><br/>
                <p class="bottomcontentdivp">收录了最新最in的段子、动图和表情，再也不怕跟女神无话可说，再也不怕在表情大战中败下阵来。无论你是白富美还是高富帅，手机必备app。</p>
            </div>
        </div>
        <br/>
        <hr/><br/>
        <div class="bottomcontentdiv" onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site-phone/project')."#p3";?>'"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/projec5.png"/><div class="bottomcontentdiv1">
                <label>静音</label><br/>
                <p class="bottomcontentdivp">提供了雨声、风声和森林中的鸟鸣声，适合需要专注冥想的场合。支持多种声音混合播放，营造奇妙的独处空间。读书、学习、听雨、惬意、悠然、自得、一切都是这么的自然。</p>
            </div>
        </div>
        <br/>
        <hr/><br/>
        <div class="bottomcontentdiv" onclick="window.location.href='<?php echo Yii::$app->urlManager->createUrl('site-phone/project')."#p4";?>'"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/projec1.png"/><div class="bottomcontentdiv1">
                <label>友聘</label><br/>
                <p class="bottomcontentdivp">友聘，是一款专注好友圈求职和工作机会的职场社交应用，帮助求职者和招聘方利用移动互联网社交圈高效传播求职和招聘信息，不断提升职场人脉，从而增强求职和招聘的效率。目前...</p>
            </div>
        </div>
        <br/>
        <hr/><br/>
        <div class="bottomcontentdiv"><img src="<?php echo Yii::$app->request->BaseUrl;?>/img/iphone/projec4.png"/><div class="bottomcontentdiv1">
                <label>财金极客</label><br/>
                <p class="bottomcontentdivp">自媒体平台，开发中</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>