<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:v="urn:schemas-microsoft-com:vml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($keyword); ?>" />
<meta name="description" content="<?php echo ($description); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<base href="<?php echo ($BaseUrl); ?>"/>
<link href="css/base.css"  rel="stylesheet" />
<script src="js/util/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/util/cpCommon.js" ></script>
<script type="text/javascript" src="js/util/httpUtil.js" ></script>
<script type="text/javascript" src="js/beforPage.js" ></script>
<script type="text/javascript" src="js/util/doT/doT.min.js" ></script>
<script type="text/javascript" src="js/cookie.js" ></script>

    <link href="css/style.css" rel="stylesheet" />
    <link href="css/lot/<?php echo ($lottory); ?>.css" rel="stylesheet" />
    <style type="text/css">

        v\:line, v\:rect, v\:oval, v\:group, v\:stroke, v\:fill, v\:polyline {behavior: url(#default#VML);}
        .cvs { position: absolute;}
        #trendChart {padding: 0;position: relative;left:0;top:0;}
        #canvas{ z-index:999; position:absolute; left:0; top:0;}

    </style>
    <!--[if lte IE 9]> <style type="text/css">.dateLineTable	*{padding:auto;margin:auto;}</style><![endif]-->

<?php echo hook('pageHeader');?>

</head>
<body>
<div class="gonggao" style="width:100%;background-color: #ebebeb;">
	<iframe src="http://api.338p.com/cp_newshow/liuhecai.php?u=<?php echo ($BaseUrl); ?>" width="100%" height="30" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
</div>
	<!-- 头部 -->
    
<div class="header-plus">
<div class="head-toptray-logo clearfix">
 <div class="w1030">
    <div class="logo-box clearfix fl" style="width:220px;">
        <a title="PK开奖直播" href="<?php echo ($BaseUrl); ?>">
            <h1>PK10开奖直播</h1>
            <img title="PK开奖直播" alt="PK开奖直播" src="/style/images/logo.gif" class="logo-index-hd" /></a>
       
    </div>
	<ul class="fl" style="width:500px; text-align:center">
<img src="/style/images/yz.png" />
    </ul>
    <ul class="fr">
<img src="/style/images/m.jpg" />
    </ul>
	</div>
</div>

    <script src="js/jquery.SuperSlide.2.1.1.js"></script>
	<script src="css/nva-plus.css"></script>
        <div class="header-navbar-plus">
            <!--style="background-color: #ff7b00-->
    <div class="w1030 clearfix">
        <ul class="nav-plus clearfix">
            <li><a href="<?php echo ($BaseUrl); ?>">网站首页</a></li>
            <li class="dropdown-nav" id="lottery_hall">
                <a href="javascript://" class="dropdown-desc">彩票大厅<img src="/images/cpdt_white.png"><i class="icon"></i></a>
                <ul class="dropdown-ul" style="display: none;">
                    <li><a href="<?php echo ($BaseUrl); ?>gd11x5/">广东11选5</a></li>
                    <li><a href="<?php echo ($BaseUrl); ?>jsk3/">江苏快三</a></li>
                    <li><a href="<?php echo ($BaseUrl); ?>kl8/">北京快乐8</a></li>
                    <li><a href="<?php echo ($BaseUrl); ?>shssl/">上海时时乐</a></li>
                    <li><a href="<?php echo ($BaseUrl); ?>xync/">加拿大28</a></li>
                </ul>
            </li>
            <li><a href="<?php echo ($BaseUrl); ?>pk10/">北京赛车pk10</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xyft/">幸运飞艇</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>cqssc/">重庆时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>jsssc/">极速时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>tjssc/">天津时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>gdkl10/">广东快乐十分</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xync/">加拿大28</a></li>

<!--		    <li class="dropdown-nav">
                <a href="javascript://" class="dropdown-desc">更多彩种<i class="icon"></i></a>
                <ul class="dropdown-ul" style="display: none;">
					<li><a href="<?php echo ($BaseUrl); ?>gd11x5/">广东11选5</a></li>
					<li><a href="<?php echo ($BaseUrl); ?>jsk3/">江苏快三</a></li>
					<li><a href="<?php echo ($BaseUrl); ?>kl8/">北京快乐8</a></li>
					<li><a href="<?php echo ($BaseUrl); ?>shssl/">上海时时乐</a></li>
                    <li><a href="<?php echo ($BaseUrl); ?>xync/">幸运农场</a></li>
                </ul>
            </li>-->
        </ul>

    </div>
</div>

</div>
<!--彩票大厅样式变化-->
 <script type="text/javascript">
     $('#lottery_hall').mouseenter(function(){
         $('#lottery_hall img').attr('src','/images/cpdt_red.png')

     });
     $('#lottery_hall').mouseleave(function(){

         $('#lottery_hall img').attr('src','/images/cpdt_white.png')
     });

var pathname = window.location.pathname;
if (pathname.indexOf("pk10") >= 0){
	$(".w1030 ul li:eq(1)").addClass("on");
}else if (pathname.indexOf("xyft") >= 0){
	$(".w1030 ul li:eq(2)").addClass("on");
}else if (pathname.indexOf("cqssc") >= 0){
	$(".w1030 ul li:eq(3)").addClass("on");
}else if (pathname.indexOf("xjssc") >= 0){
	$(".w1030 ul li:eq(4)").addClass("on");
}else if (pathname.indexOf("tjssc") >= 0){
	$(".w1030 ul li:eq(5)").addClass("on");
}else if (pathname.indexOf("gdkl10") >= 0){
	$(".w1030 ul li:eq(6)").addClass("on");
}else if (pathname.indexOf("xync") >= 0){
	$(".w1030 ul li:eq(7)").addClass("on");
}else{
	$(".w1030 ul li:eq(0)").addClass("on");
}
</script>
<script id="jsID" type="text/javascript">
jQuery(".nav-plus").slide({ type:"menu", titCell:".dropdown-nav", targetCell:".dropdown-ul",effect:"fade",delayTime:300,triggerTime:0,defaultPlay:false,returnDefault:true});
</script>
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div id="main-container">
    

    <div class="body-content">
    <!-- 彩票大厅 头部 -->
        <div>

    <div class="business" style='display:<?php if(empty($WEB_SITE_AD_TOP1_PIC)): ?>none<?php else: ?>block<?php endif; ?>'>
        <a href="<?php echo C('WEB_SITE_AD_TOP1_LINK');?>" target='_blank' rel="nofollow">
            <img src="<?php echo C('WEB_SITE_AD_TOP1_PIC');?>"  />
        </a>
    </div>
    <div class="business" style='display:<?php if(empty($WEB_SITE_AD_TOP2_PIC)): ?>none<?php else: ?>block<?php endif; ?>'>
        <a href="<?php echo C('WEB_SITE_AD_TOP2_LINK');?>"  target='_blank' rel="nofollow">
            <img src="<?php echo C('WEB_SITE_AD_TOP2_PIC');?>"  />
        </a>
    </div>
    <div class="business" style='display:<?php if(empty($WEB_SITE_AD_TOP3_PIC)): ?>none<?php else: ?>block<?php endif; ?>'>
        <a href="<?php echo C('WEB_SITE_AD_TOP3_LINK');?>"  target='_blank' rel="nofollow">
            <img src="<?php echo C('WEB_SITE_AD_TOP3_PIC');?>"  />
        </a>
    </div>
    <div class="business" style='display:<?php if(empty($WEB_SITE_AD_TOP4_PIC)): ?>none<?php else: ?>block<?php endif; ?>'>
        <a href="<?php echo C('WEB_SITE_AD_TOP4_LINK');?>"  target='_blank' rel="nofollow">

            <img src="<?php echo C('WEB_SITE_AD_TOP4_PIC');?>"  />
        </a>
    </div>

</div>

        <ul class="lot-menu addTopLine">
    <li><a href="pk10/" game="pk10" class="cur">北京赛车pk10</a></li>
    <li><a href="cqssc/" game="cqssc">重庆时时彩</a></li>
    <li><a href="gdkl10/" game="gdkl10">广东快乐十分</a></li>
	<li><a href="xyft/" game="xyft">幸运飞艇</a></li>
    <li><a href="tjssc/" game="tjssc">天津时时彩</a></li>
    <li><a  game="pc28" id="pc28">加拿大28</a></li>
    <li><a href="jsk3/" game="jsk3">江苏快3</a></li>
    <li><a href="shssl/" game="shssl" class="last">上海时时乐</a></li>
</ul>

<ul class="lot-menu delBottomLine" style="margin-top: 0px;"> 
<li><a href="gd11x5/" game="gd11x5">广东11选5</a></li>
    <li><a href="jsssc/" game="jsssc">极速时时彩</a></li>
    <li><a href="kl8/" game="kl8">北京快乐8</a></li>
    <!--<li><a href="fc3d/" game="fc3d">福彩3d</a></li>-->
    <li><a href="pl3/" game="pl3">排列3</a></li>
    <li><a href="jssc/" game="jssc">极速赛车</a></li>
    <li><a game="cqft" id="cqft">重庆番摊</a></li>
    <li><a  game="bjft" id="bjft">北京番摊</a></li>
</ul>
<script type="text/javascript">

    var pathname = window.location.pathname;
    if (pathname.indexOf("trend.html") >= 0)
    {
        $('.lot-menu').hide();
        $('.zst-menu').show();
        $('.zst-menu a').removeClass('cur');
        $('[game="'+beforPageJs.gameName+'"]').addClass('cur');
    }
    else
    {
        $('.zst-menu').hide();
        $('.lot-menu').show();
        $('.lot-menu a').removeClass('cur');
        $('[game="'+beforPageJs.gameName+'"]').addClass('cur');
    }
    $("#pc28").click(function () {
        alert("敬請期待！");
        return false;
    });
    $("#cqft").click(function () {
        alert("敬請期待！");
        return false;
    });
    $("#bjft").click(function () {
        alert("敬請期待！");
        return false;
    });
</script>

<div class=lot-award1>
<ul class="lot-award mt5">
    <li class="logo">
        <img src="images/<?php echo ($lottory); ?>-logo.png"  alt="<?php echo ($lottoryName); ?>"/>
    </li>
    <li class="currentAward">
        <div class="title">
            最新开奖：
        </div>
        <div class="period" style="color: green;"> 期</div>
		
        <div class="period-info"><a class="video_btn" href="../<?php echo ($lottory); ?>/shipin/" style="color:#FFF;">开奖视频</a>每日销售<span><?php echo ($totalExpect); ?></span>期，今日剩余<span class="period-leave">--</span>期</div>
        <div class="lot-nums">
            <!-- <span class="no9">9</span>
            <span class="no2">2</span>
            <span class="no1">1</span>
            <span class="no7">7</span>
            <span class="no3">3</span>
            <span class="no9"></span>
            <span class="no2"></span>
            <span class="no1"></span>
            <span class="no7"></span>
            <span class="no3"></span> -->
            <p>正在加载中……<p>
        </div>
    </li>
    <li class="warnTime">
        <div class="title">
            <div id="period">&nbsp;</div>
            <div>距离下期开奖剩余</div>
        </div>
        <div class="minute" id="djsmm">00</div>
        <div class="t2">分</div>
        <div class="second" id="djsss">00</div>
        <div class="t2">秒</div>
        <div class="sound" id="countdown_sound" title="点击关闭提醒声音"></div>
        <audio src="images/du.mp3"  id="duSound" style="display:none;"></audio>
    </li>
<!--
	 <li class="warnTime" style="width:200px;">
       <a href="/pk10/zhibo" title="pk10开奖直播" target="_blank">视频开奖直播</a>
    </li>
    <!-- 		<li class="navi">
                <ul>
                    <li>
                        <a href="javascript:void(0);">PK10交流论坛</a>
                    </li>
                    <li>
                       <a href="javascript:void(0);" style="color:Red">调用开奖结果</a>
                    </li>
                    <li class="pk10_newIcon">
                        <a href="/pk10/positiontrend">PK10号码走势图</a>
                         <span class="pk10_wen_newIcon"></span>
                    </li>
                    <li>
                        <a href="/exitData/exitData.html#gameId=50"class="down">下载历史记录</a>
                    </li>
                </ul>
            </li> -->
</ul>

</div>
<!-- <script type="text/javascript" src="js/djs.js"></script> -->
<!-- <script type="text/javascript">
var pageDjs = new Djs();
//pageDjs.djsInit(1418391670978,"2014-12-12 21:44:00");
var getTableDade = function(){
            alert("开奖咯");
        };
pageDjs.djsInit(1418391670978,"2014-12-12 21:41:30",getTableDade);

</script> -->
<script type="text/javascript">    var lotteryLuzhu = "";</script>
<script src="js/lot/lotcommon.js"  type="text/javascript"></script>
<script src="js/lot/<?php echo ($lottory); ?>/award.js"  type="text/javascript"></script>
<script src="js/lot/warntime.js"  type="text/javascript"></script>

        <div class="lot-wrap">
            <div class="feedbackDiv">以下数据功能由本站提供，使用过程中如有任何意见或建议请<a href="Common/feedback.html"  target="_blank">及时反馈</a></div>
<div class="web_listOP">
    <ul id="web_listOP_ul">

    </ul>
</div>
<script type="text/javascript" src="js/data/cfg/gameDate.js" ></script>
<script type="text/javascript">
    var gameNameTemp=beforPageJs.gameName||beforPageJs_gameName;

    if(pathname.indexOf("/jiqiao/")>=0){
        if (pathname.indexOf("/pk10/") >= 0){
            gameNameTemp="pk10";
        }else if (pathname.indexOf("/cqssc/") >= 0){
            gameNameTemp="cqssc";
        }else if (pathname.indexOf("/gdkl10/") >= 0){
            gameNameTemp="gdkl10";
        }else if (pathname.indexOf("/kl8/") >= 0){
            gameNameTemp="kl8";
        }else if (pathname.indexOf("/tjssc/") >= 0){
            gameNameTemp="tjssc";
        }else if (pathname.indexOf("/jssc/") >= 0){
            gameNameTemp="jssc";
        }else if (pathname.indexOf("/jsk3/") >= 0){
            gameNameTemp="jsk3";
        }else if (pathname.indexOf("/shssl/") >= 0){
            gameNameTemp="shssl";
        }else if (pathname.indexOf("/jsssc/") >= 0){
            gameNameTemp="jsssc";
        }else if (pathname.indexOf("/gd11x5/") >= 0){
            gameNameTemp="gd11x5";
        }else if (pathname.indexOf("/xyft/") >= 0){
            gameNameTemp="xyft";
        }else if (pathname.indexOf("/fc3d/") >= 0){
            gameNameTemp="fc3d";
        }else if (pathname.indexOf("/pl3/") >= 0){
            gameNameTemp="pl3";
        }
    }
    var list = webListOP[gameNameTemp];
 //   console.log(webListOP);
    if (list.length > 0) {
        var html = '';
        for (var i = 0, max = list.length; i < max; i++) {
            var obj = list[i];
            var href = obj.href, title = obj.title, aClass = obj.aClass, spanClass = obj.spanClass, text = obj.text;
            html += '<li ' + (href.indexOf("/"+beforPageJs.pageName +".html") >= 0 ? 'class="hover">' : '>')
            + '<a href="' + href + '" ' + (title ? 'title="'+title+'" ' : '')
            + (aClass ? 'class="'+aClass+'" ' : '') + '>' + text + '</a>'
            + (spanClass ? '<span class="'+spanClass+'"></span> ' : '') + '</li>';
        }
        $('#web_listOP_ul').html(html);
    }

</script >
            <div class="clear"></div>
            <div>
                <input type="hidden" time="10000" id="callFun" value="awardNewData" />
                <div class="explain_table">
                    1、【号码规律统计】提供号码开出位置的历史同位号码统计。例如第1期开出号码1后，在第1期开出号码1的相同位置，第2期开出号码为2，如此以上期开奖号码为参照，辅助预测同位开出的号码；<br />
                    2、柱形图表为历史同位开出号码的次数分布，用于查看已开出号码的分布及趋势，亦可作为参考辅助杀号。
                </div>
                <div class="clear"></div>
                <div class="lot-search">
                    <div class="car-num">
                        <ul class="lot-number-omit" style="margin-bottom: 10px;">
                            <li class="ball" style="padding-bottom: 2px;">
                                <ul style="width: 890px; _width: 880px; float: left; margin-left: 10px;" id="rankUl">
                                    <li> <a href="javascript:gotoPage(1)" id="rankLi1" class="cur">号码1 </a>|</li>
                                    <li> <a href="javascript:gotoPage(2)" id="rankLi2">号码2 </a>|</li>
                                    <li> <a href="javascript:gotoPage(3)" id="rankLi3">号码3</a>|</li>
                                    <li> <a href="javascript:gotoPage(4)" id="rankLi4">号码4</a>|</li>
                                    <li> <a href="javascript:gotoPage(5)" id="rankLi5">号码5</a>|</li>
                                    <li> <a href="javascript:gotoPage(6)" id="rankLi6">号码6</a>|</li>
                                    <li> <a href="javascript:gotoPage(7)" id="rankLi7">号码 7</a>|</li>
                                    <li> <a href="javascript:gotoPage(8)" id="rankLi8">号码 8</a>|</li>
                                    <li> <a href="javascript:gotoPage(9)" id="rankLi9">号码 9</a>|</li>
                                    <li> <a href="javascript:gotoPage(10)" id="rankLi10">号码10</a> |</li>
                                    <li><a href="pk10/numbertooutput.html">全部号码</a> </li>
                                </ul>
                                <ul style="float: right; width: 80px; text-align: right;">
                                    <li>
                                        <select id="selDate">
                                            <option value="60">60期</option>
                                            <option value="30">30期</option>
                                            <option value="90">90期</option>
                                        </select>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div id="chartcontainer" style="height:200px;width:100%"></div>
                    <div class="clear"></div>
                    <div class="dateLineTable" style="padding: 0;" id="trendChart">
                        <div id="history_data-html"></div>
                        <script id="history_data-tmpl" type="text/template">
                            <table class="lot-table" id="history" >
                                <tr class="head">
                                    <td rowspan="2" width="160">时间
                                    </td>
                                    <td width="350" rowspan="2">
                                        同位开奖号码分布
                                        <p id="ckb-samepn" style="width:100px;margin:0 auto;">
                                            <b class="checkbox" style="margin: 10px 5px 0 0;"></b>
                                            <span style="cursor: pointer;color:#c3271d">显示同位号码</span>
                                        </p>
                                    </td>
                                    <td rowspan="2" width="120">升平降
                                    </td>
                                    <td   colspan="2">单双</td>
                                    <td colspan="2"  >大小</td>
                                </tr>
                                <tr class="head">
                                    <td>单</td>
                                    <td>双</td>
                                    <td>大</td>
                                    <td>小</td>
                                </tr>
                                <tbody id="chart">
                                {{
                                for (var i = 0; i <it.length; i++) {
                                var row=it[i];
                                var lowDate=new Date(Date.parse(row.lotteryTime.replace(/-/g,"/"))).format("MM-dd hh:mm");
                                var odd_even="even";
                                if((i+1)%2!=2){
                                odd_even="odd";
                                }
                                }}
                                <tr class='{{=odd_even}}'>
                                    <td>
                                        <p class="p">{{=row.termNum}} </p>
                                        <p class="t">{{=lowDate}}</p>
                                    </td>
                                    <td class="nums shade">
                                        <i class='pk-no{{=row.n1}}' name="num-{{=row.n1}}"></i>
                                        <i class='pk-no{{=row.n2}}' name="num-{{=row.n2}}"></i>
                                        <i class='pk-no{{=row.n3}}' name="num-{{=row.n3}}"></i>
                                        <i class='pk-no{{=row.n4}}' name="num-{{=row.n4}}"></i>
                                        <i class='pk-no{{=row.n5}}' name="num-{{=row.n5}}"></i>
                                        <i class='pk-no{{=row.n6}}' name="num-{{=row.n6}}"></i>
                                        <i class='pk-no{{=row.n7}}' name="num-{{=row.n7}}"></i>
                                        <i class='pk-no{{=row.n8}}' name="num-{{=row.n8}}"></i>
                                        <i class='pk-no{{=row.n9}}' name="num-{{=row.n9}}"></i>
                                        <i class='pk-no{{=row.n10}}' name="num-{{=row.n10}}"></i>
                                    </td>
                                    <td name="spj"></td>
                                    <td name="odd"></td>
                                    <td name="even"></td>
                                    <td name="big"></td>
                                    <td name="small"></td>
                                </tr>
                                {{
                                }
                                }}
                                </tbody>
                            </table>
                        </script>
                    </div>
                    <script type="text/javascript">
                        var chartLine = null;
                        var count = $("#selDate").val();
                        var request =  GetRequest();
                        var ball = request['ball'];
                        if(!ball)
                            ball=1;
                        function awardNewData() {
                            $.get("/pk10/getNewestRecord.do", { t: Math.random() }, function (data) {
                                var numbers = data.numbers.split(',');
                                var tr1 = $("#chart tr:first");
                                var clsName = "odd";
                                if (tr1) {
                                    clsName = tr1.attr("class") == "odd" ? "even" : "odd";
                                }
                                var html = '<tr class="' + clsName + '"><td><p class="p">' + data.period + '</p><p class="t">' + data.drawingTime;
                                html += '</p></td><td class="nums shade">';
                                for (var i = 0; i < numbers.length; i++) {
                                    html += '<i class="pk-no' + numbers[i] + '" name="num-' + numbers[i] + '"></i>';
                                }
                                html += '</td>';
                                html += '<td name="spj"></td>';
                                //html += '<td name="ch"></td>';
                                //html += '<td name="zx"></td>';
                                html += '<td name="odd"></td>';
                                html += '<td name="even"></td>';
                                html += '<td name="big"></td>';
                                html += '<td name="small"></td>';
                                html += '</tr>';
                                tr1.before(html);
                                $("#chart tr:last").remove();
                                reloadData();
                            }, 'json');

                        }
                        //更新图表
                        function reloadData() {
                            //处理排名样式
                            $("#rankUl li a").removeClass("cur")
                            $("#rankLi"+ball).addClass("cur")

                            count = $("#selDate").val();
                            $.post("/pk10/getHistoryData.do",
                                    {count:count},
                                    function(r) {
                                        if (r) {
                                            doTCompile("history_data", r.rows);

                                            ckbSamepnClick();//注册监听事件
                                            $.get("/pk10/getDataList.do", { num: ball,count:count, t: Math.random() }, function (data) {
                                                var chartDatas = [];
                                                if (data.success) {
                                                    for (var i = 1; i < 11; i++) {
                                                        chartDatas.push({ Name: "号码" + i, Value: data["num" + i] });
                                                    }
                                                    clearDraw();
                                                    showSelectBall();
                                                    var list = data.nums;
                                                    var trs = $("#history tr[class!=head]");
                                                    for (var i = 0; i < trs.length; i++) {
                                                        var tr=$(trs[i]);
                                                        if (i >= count) tr.hide();
                                                        else {
                                                            tr.show();
                                                            var a = list[i], b = list[i + 1];
                                                            if (a > b) tr.find("[name=spj]").text("升").css("color", "#0000ff");//addClass("td_font_lightblue");
                                                            else if (a < b) tr.find("[name=spj]").text("降").css("color", "#00a200");//.addClass("td_draklightgreen");
                                                            else tr.find("[name=spj]").text("平").css("color", "#c3271d");//.addClass("td_red");
                                                            if (a % 2 != 0) tr.find("[name=odd]").text("单").css("color", "#c3271d");//.addClass("td_draklightgreen");
                                                            else tr.find("[name=even]").text("双").css("color", "#000");//.addClass("td_draklightgreen");
                                                            if (a > 5) tr.find("[name=big]").text("大").css("color", "#c3271d");//.addClass("td_lightblue");
                                                            else tr.find("[name=small]").text("小").css("color", "#000");//.addClass("td_lightblue");
                                                            if (a == ~~ball) {
                                                                tr.find("i[name=num-" + a + "]").removeClass("noshade").addClass("numsRed").attr("s", 1);
                                                            } else {
                                                                tr.find("i[name=num-" + a + "]").addClass("noshade");
                                                            }
                                                            tr.find("i[name=num-" + a + "]").addClass("numline");
                                                        }
                                                    }
                                                    chartLine.reDraw();
                                                    showColumn(" ", chartDatas, function () {
                                                        return this.x + ':' + this.y + '(' + (Math.round(this.y / count * 10000) / 100.00) + '%)';
                                                    });
                                                }
                                            }, 'json');
                                        }
                                    }, "json");
                        }

                        function showSelectBall() {
                            var trs = $("#history tr[class!=head]");
                            var show = false;
                            if ($("#ckb-samepn b").hasClass("checked")) {
                                show = true;
                            }
                            for (var i = 0; i < trs.length; i++) {
                                var tr = $(trs[i]);

                                if (show) {
                                    if (tr.find("i[name=num-" + ball + "]").attr("s") == 1) continue;
                                    tr.find("i[name=num-" + ball + "]").addClass("noshade");
                                } else {
                                    tr.find("i[name=num-" + ball + "]").removeClass("noshade");
                                }
                            }
                        }
                        //清除所有
                        function clearDraw() {
                            chartLine.clearLines();
                            $("i").removeClass("noshade").removeClass("numsRed").removeClass("numline").attr("s", 0);

                            $("#history td[name=even],#history td[name=odd],#history td[name=big],#history td[name=small]").text("");
                            // $("#history td").removeClass("td_drakblue").removeClass("td_draklightgreen").removeClass("td_lightblue");
                        }

                        function ckbSamepnClick(){
                            $("#ckb-samepn").click(function () {
                                var c = $("b", $(this)).attr("data-c");

                                if ($("b", $(this)).attr("class") == "checkbox") {
                                    $("b", $(this)).addClass("checked");
                                } else {
                                    $("b", $(this)).removeClass("checked");
                                }
                                showSelectBall();
                            });
                        }

                        function gotoPage(ballVal){
                            if(ballVal)
                                ball=ballVal;

                            window.location.href="pk10/numberrulestat.html#ball="+ball;
                            reloadData();
                        }

                        $(function () {
                            $("#selDate").on("change", function () {
                                reloadData();
                            });
                            require(['trendChart'], function (e) {
                                chartLine = new e({ css: { noyl: "noyl", bline: "bline", lines: [".numline"] }, lineWidth: 2, lineColor: "#BB8569" });
                                reloadData();
                            });

                        });
                    </script>
                    <script src="js/highchats/highcharts.js" type="text/javascript"></script>
                    <script src="js/util/jschart.js" type="text/javascript"></script>
                    <script src="js/require.js" type="text/javascript"></script>
                    <script src="js/trendChart.js" type="text/javascript"></script>
                </div>
            </div>
            </div>
            <div class="clear"></div>

</div>
	<!-- /主体 -->

	<!-- 底部 -->
	
<script type="text/javascript">
(function(){
	var ThinkPHP = window.Think = {
		"ROOT"   : "", //当前网站地址
		"APP"    : "/index.php?s=", //当前项目地址
		"PUBLIC" : "/Public", //项目公共目录地址
		"DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
		"MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
		"VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
	}
})();
</script>

<!--foot-->
<link rel="stylesheet" href="css/footer.css"  />
<div class="footer">
  <div class="wrap">
  <div class="foot_nav"><a href="about/">关于我们</a> | <a href="about/index.html#page5">网站声明</a> | <a href="about/index.html#page4">联系我们</a> | <a href="about/index.html#page3">广告服务</a> | <a href="sitemap.html">网站地图</a></div>

    <p>推荐使用谷歌、火狐、IE9以上浏览器</p>
    <p style="color:red">郑重提示：购买彩票有风险，投注需谨慎，不得向未满18周岁的青少年出售彩票！</p>
    <p>敬告用户：除本站产品外，本站所刊登广告的网站和第三方内容一概与本站无关，用户须自行判断广告和第三方内容的真实性，由此所产生的后果本站概不负责！</p>
  </div>
  <div class="footer_bottom">Copyright © 2011-2016 All Rights Reserved. Current version is 2.0</div>

</div>
<!--/foot-->


<script type="text/javascript" src="js/util/jquery.slides.min.js" ></script>
<script type="text/javascript" src="js/util/highcharts.js" ></script>
<script type="text/javascript" src="js/util/jschart.js" ></script>
<script type="text/javascript" src="js/service.js" ></script>


<?php echo hook('pageFooter', 'widget');?>
<div class="hidden">
	<?php echo $tontji;?>
</div>
<!--
<link rel="stylesheet" href="css/zzsc.css">
<div id="leftsead">
    <ul>
        <li>
            <a href="javascript:void(0)" class="youhui">
                <img src="http://www.163kai.com/images/l02.png" width="47" height="49" class="shows">
                <img src="http://www.163kai.com/images/a.png" width="57" height="49" class="hides" style="display: none;">
                <img src="2.jpg" width="145" class="2wm" style="margin: -100px 57px 0px 0px; display: none;">
            </a>
        </li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo C('WEB_SITE_QQ');?>&amp;site=qq&amp;menu=yes" target="_blank">
                <div class="hides" style="width: 161px; margin-right: -163px; display: none;" id="qq">
                    <div class="hides" id="p1">
                        <img src="http://www.163kai.com/images/ll04.png">
                    </div>
                    <div class="hides" id="p2"><span style="color:#FFF;font-size:13px"><?php echo C('WEB_SITE_QQ');?></span>
                    </div>
                </div>
                <img src="http://www.163kai.com/images/l04.png" width="47" height="49" class="shows" style="display: block;">
            </a>
        </li>
        <li id="tel">
        <a href="javascript:void(0)">
            <div class="hides" style="width: 161px; margin-right: -163px; display: none;" id="tels">
                <div class="hides" id="p1">
                    <img src="http://www.163kai.com/images/ll05.png">
                </div>
                <div class="hides" id="p3"><span style="color:#FFF;font-size:12px">0592-88888888</span>
                </div>
            </div>
        <img src="http://www.163kai.com/images/l05.png" width="47" height="49" class="shows" style="display: block;">
        </a>
        </li>
        <li id="btn">
        <a id="top_btn">
            <div class="hides" style="width: 161px; margin-right: -163px; display: none;">
                <img src="http://www.163kai.com/images/ll06.png" width="161" height="49">
            </div>
            <img src="http://www.163kai.com/images/l06.png" width="47" height="49" class="shows" style="display: block;">
        </a>
    </li>
    </ul>
</div>
<script>

$(document).ready(function(){
    
    $("#leftsead a").hover(function(){
        if($(this).prop("className")=="youhui"){
            $(this).children("img.hides").show();
        }else{
            $(this).children("div.hides").show();
            $(this).children("img.shows").hide();
            $(this).children("div.hides").animate({marginRight:'0px'},'0'); 
        }
    },function(){ 
        if($(this).prop("className")=="youhui"){
            $(this).children("img.hides").hide();
        }else{
            $(this).children("div.hides").animate({marginRight:'-163px'},0,function(){$(this).hide();$(this).next("img.shows").show();});
        }
    });

    $("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 600);});

        //右侧导航 - 二维码
        $(".youhui").mouseover(function(){
            $(this).children(".2wm").show();
        })
        $(".youhui").mouseout(function(){
            $(this).children(".2wm").hide();
        });


});


</script>
-->
	<!-- /底部 -->
</body>
</html>