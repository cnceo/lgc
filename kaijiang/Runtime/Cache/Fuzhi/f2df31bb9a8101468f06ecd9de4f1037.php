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
			<li><a href="<?php echo ($BaseUrl); ?>xjssc/">极速时时彩</a></li>
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
    <li><a href="xync/" game="xync">加拿大28</a></li>
    <li><a href="jsk3/" game="jsk3">江苏快3</a></li>
    <li><a href="shssl/" game="shssl" class="last">上海时时乐</a></li>
</ul>

<ul class="lot-menu delBottomLine" style="margin-top: 0px;"> 
<li><a href="gd11x5/" game="gd11x5">广东11选5</a></li>
    <li><a href="xjssc/" game="xjssc">极速时时彩</a></li>
    <li><a href="kl8/" game="kl8">北京快乐8</a></li>
    <!--<li><a href="fc3d/" game="fc3d">福彩3d</a></li>-->
    <li><a href="pl3/" game="pl3">排列3</a></li>
    <li><a href="jssc/" game="jssc">极速赛车</a></li>
    <li><a href="xjssc/" game="xjssc">重庆番摊</a></li>
    <li><a href="xjssc/" game="xjssc">北京番摊</a></li>
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
        }else if (pathname.indexOf("/xync/") >= 0){
            gameNameTemp="xync";
        }else if (pathname.indexOf("/jsk3/") >= 0){
            gameNameTemp="jsk3";
        }else if (pathname.indexOf("/shssl/") >= 0){
            gameNameTemp="shssl";
        }else if (pathname.indexOf("/xjssc/") >= 0){
            gameNameTemp="xjssc";
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
       <input type="hidden" id="callFun" value="load" time="1000"/>
       <div style="margin-bottom:20px;">
           <ul class="lot-number-omit">
               <li class="ball">
                   <ul id="rankUl">
                       <li>
                           <a href="javascript:gotoPage('',1)" id="rankLi1" class='cur'>
                               冠军
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',2)" id="rankLi2" >
                               亚军
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',3)" id="rankLi3" >
                               第三名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',4)" id="rankLi4" >
                               第四名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',5)" id="rankLi5" >
                               第五名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',6)" id="rankLi6" >
                               第六名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',7)" id="rankLi7" >
                               第七名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',8)" id="rankLi8" >
                               第八名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',9)" id="rankLi9" >
                               第九名
                           </a>
                           |
                       </li>
                       <li>
                           <a href="javascript:gotoPage('',10)" id="rankLi10" >
                               第十名
                           </a>
                       </li>
                   </ul>
               </li>
               <li class="type">
                   <ul id="mlist_ul">
                       <li> <label> <input type="checkbox" name="c_p" id="c_p1" value="mlist-1"/>长龙提醒</label>&nbsp; </li> &nbsp;
                       <li> <label> <input type="checkbox" name="c_p" id="c_p8" value="mlist-2"/>单码遗漏</label>&nbsp; </li>
                       <li> <label> <input type="checkbox" name="c_p" id="c_p3" value="mlist-3"/>大小/单双路珠</label>&nbsp; </li>
                       <li> <label> <input type="checkbox" name="c_p" id="c_p5" value="mlist-4"/>龙虎路珠</label>&nbsp; </li>
                       <li> <label> <input type="checkbox" name="c_p" id="c_p6" value="mlist-5"/>冠亚和单双/大小路珠</label>&nbsp; </li>
                       <!--        <li> <label> <input type="checkbox" name="c_p" id="c_p7" value="mlist-6"/>冠亚和大小路珠</label>&nbsp; </li>  -->
                       <!-- <li> <label> <input type="checkbox" name="c_p" id="c_p2" />号码遗漏</label> &nbsp;</li> -->
                       <!-- <li> <label> <input type="checkbox" name="c_p" id="c_p9" />上期跟号</label>&nbsp; </li>
                       <li> <label> <input type="checkbox" name="c_p" id="c_p10" />皇家模式</label> </li>&nbsp; -->
                       <li > <label id="ballIndex" style="display: none;">0</label>&nbsp; </li>
                   </ul>
               </li>
           </ul>
           <div class="clear"></div>
           <div id="lot_content">
               <div id="mlist-1">
                   <table class="merge-title-table" style="margin-bottom: -1px;">
                       <tbody>
                       <tr>
                           <td>
                               <span>长龙提醒</span>
                               <!--
                               <span>长龙提醒 <a href="/pk10/changlongwarn/1" target="_blank" class="changlong-setting"> 设置</a> </span>
                                -->
                           </td>
                           <td>
                               <!--
                               <a class="move-down" onclick="movePanel('c_p1','down');" title="向下"></a>
                                -->
                           </td>
                       </tr>
                       </tbody>
                   </table>
                   <div style="margin-bottom: 10px;">
                       <div id="cl_list-html" style="float: left;"></div>
                       <script id="cl_list-tmpl" type="text/template">
                           {{
                           var rowsLen=it.length;
                           for(var i=0;i<rowsLen;i++){ /*循环开始A*/
                           var rd=it[i];
                           var tRank="";
                           if(rd.rank==1){
                           tRank="冠";
                           }else if(rd.rank==2){
                           tRank="亚";
                           }else if(rd.rank==3){
                           tRank="三";
                           }else if(rd.rank==4){
                           tRank="四";
                           }else if(rd.rank==5){
                           tRank="五";
                           }else if(rd.rank==6){
                           tRank="六";
                           }else if(rd.rank==7){
                           tRank="七";
                           }else if(rd.rank==8){
                           tRank="八";
                           }else if(rd.rank==9){
                           tRank="九";
                           }else if(rd.rank==10){
                           tRank="十";
                           }
                           var tNum=rd.num;
                           var tType="";
                           if(rd.dataType==2){
                           if(tNum%2==0){
                           tType="虎";
                           }else{
                           tType="龍";
                           }
                           }else if(rd.dataType==5){
                           if(tNum==1){
                           tType="单";
                           }else{
                           tType="双";
                           }
                           }else if(rd.dataType==6){
                           if(tNum==1){
                           tType="小";
                           }else{
                           tType="大";
                           }
                           }
                           }}
                           <div class="cl_s">
                               第{{=tRank}}名：{{=tType}}<span style="margin: 0px 10px;">连开</span>{{=rd.nowMissing}} 期
                           </div>
                           {{
                           }
                           }}
                       </script>
                   </div>
                   &nbsp;<br />
               </div>
               <div style="height: 25px; clear: both;"> </div>
               <div id="mlist-2">
                   <table class="merge-title-table" style="margin-bottom: 0px;">
                       <tbody>
                       <tr>
                           <td>
	         <span id="showWin">
	           单码遗漏
	         </span>
                           </td>
                           <td> <!--<a class="move-up" onclick="movePanel('c_p2','up');" title="向上"></a> <a class="move-down" onclick="movePanel('c_p2','down');" title="向下"></a>--> </td>
                       </tr>
                       </tbody>
                   </table>
                   <div id="missing_list-html"></div>
                   <script id="missing_list-tmpl" type="text/template">
                       <table class="lot-table" id="Table1">
                           <caption>
                           </caption>
                           <tr class="head">
                               <td width="170px">
                                   号码
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               遗漏输赢
                                           </li>
                                           <li class="btn" id="classUpDown1">
		                             <span class="btn1" order-cloumn="1" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="1" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               今日出现
                                           </li>
                                           <li class="btn" id="classUpDown2">
		                             <span class="btn1" order-cloumn="2" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="2" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               当前遗漏
                                           </li>
                                           <li class="btn " id="classUpDown3">
		                             <span class="btn1" order-cloumn="3" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="3" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               今日遗漏
                                           </li>
                                           <li class="btn  " id="classUpDown4">
		                             <span class="btn1" order-cloumn="4" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="4" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               一周遗漏
                                           </li>
                                           <li class="btn  " id="classUpDown5">
		                              <span class="btn1" order-cloumn="5" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="5" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               一月遗漏
                                           </li>
                                           <li class="btn  " id="classUpDown6">
		                              <span class="btn1" order-cloumn="6" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="6" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                               <td>
                                   <div class="web_Sortk">
                                       <ul>
                                           <li class="ps1">
                                               历史遗漏
                                           </li>
                                           <li class="btn  " id="classUpDown7">
		                              <span class="btn1" order-cloumn="7" order-type="1">
		                             </span>
		                             <span class="btn2" order-cloumn="7" order-type="2">
		                             </span>
                                           </li>
                                       </ul>
                                   </div>
                               </td>
                           </tr>
                           {{ var rowsLen=it.length; }}
                           {{ for (var i = 1; i <=rowsLen; i++) { }}
                           {{ var joClass=i%2==0?"even":"odd"; }}
                           {{ var row=it[i-1]; }}
                           <tr class="{{=joClass}}">
                               <td>
                                   {{=eval('dataTypeNumsDesc['+dataType+'].n'+row.num)}}
                               </td>
                               <td>
                                   <span class="{{=row.nowMissing<=0?"lose":"win"}}">
                                   {{var nowMissing=row.nowMissing==null?0:row.nowMissing;}}
                                   {{=nowMissing<=0?"输":"赢"}}{{=Math.abs(nowMissing)}}
                                   </span>
                               </td>
                               <td>
                                   {{=row.dayTotalNum==null?0:row.dayTotalNum}}
                               </td>
                               <td>
                                   {{=nowMissing>0?0:Math.abs(nowMissing)}}
                               </td>
                               <td>
                                   {{=row.dayMissing==null?0:row.dayMissing}}
                               </td>
                               <td>
                                   {{=row.weekTotalNum==null?0:row.weekTotalNum}}
                               </td>
                               <td>
                                   {{=row.monthTotalNum==null?0:row.monthTotalNum}}
                               </td>
                               <td>
                                   {{=row.allTotalNum==null?0:row.allTotalNum}}
                               </td>
                           </tr>
                           {{ } }}
                       </table>
                   </script>
                   <br />
               </div>
               <div id="mlist-3">
                   <table class="merge-title-table">
                       <tbody>
                       <tr>
                           <td> <span>大小/单双路珠</span> </td>
                           <td> <!--<a class="move-up" onclick="movePanel('c_p4','up');" title="向上"></a> <a class="move-down" onclick="movePanel('c_p4','down');" title="向下"></a>--> </td>
                       </tr>
                       </tbody>
                   </table>
                   <div id='dx_lot_content'></div>
                   <br />
               </div>
               <div id="mlist-4">
                   <table class="merge-title-table">
                       <tbody>
                       <tr>
                           <td> <span>龙虎路珠</span> </td>
                           <td> <!--<a class="move-up" onclick="movePanel('c_p5','up');" title="向上"></a> <a class="move-down" onclick="movePanel('c_p5','down');" title="向下"></a>--> </td>
                       </tr>
                       </tbody>
                   </table>
                   <div id="luzhu_1" class="luzhu t_1" style="display:none"></div>
                   <div id="luzhu_2" class="luzhu t_2" style="display:none"></div>
                   <div id="luzhu_3" class="luzhu t_3" style="display:none"></div>
                   <div id="luzhu_4" class="luzhu t_4" style="display:none"></div>
                   <div id="luzhu_5" class="luzhu t_5" style="display:none"></div>
                   <br />
               </div>
               <div id="mlist-5">
                   <table class="merge-title-table">
                       <tbody>
                       <tr>
                           <td> <span>冠亚和单双/大小路珠</span> </td>
                           <td><!-- <a class="move-up" onclick="movePanel('c_p6','up');" title="向上"></a> <a class="move-down" onclick="movePanel('c_p6','down');" title="向下"></a>--> </td>
                       </tr>
                       </tbody>
                   </table>
                   <div id="jshtml">
                   </div>
               </div>
           </div>
           <script type="text/javascript">
               var request =  GetRequest();
               var dataType = request['dataType'];
               var rank = request['rank'];
               var gameId = request['gameId'];
               var orderCloumn = request['orderCloumn'];
               var orderType = request['orderType'];
               if(!dataType)
                   dataType=1;
               if(!gameId)
                   gameId=50;
               if(!rank&&dataType==1)
                   rank=1;
               if(!orderCloumn)
                   orderCloumn=1;
               if(!orderType)
                   orderType=2;
               //长龍
               function getMergeData(){
                   $.post("/pk10/getMergeData.do",
                           {rank:rank},
                           function(r) {
                               if (r) {
                                   doTCompile("cl_list", r.clList);
                               }
                           }, "json");
               }
               //连续遗漏
               var dataTypeNumsDesc={
                   "1":{"n1":"1","n2":"2","n3":"3","n4":"4","n5":"5","n6":"6","n7":"7","n8":"8","n9":"9","n10":"10"},
                   "2":{"n1":"冠军龙","n2":"冠军虎","n3":"亚军龙","n4":"亚军虎","n5":"第三名龙","n6":"第三名虎","n7":"第四名龙","n8":"第四虎","n9":"第五名龙","n10":"第五名虎"},
                   "3":{"n1":"冠亚和单","n2":"冠亚和双"},
                   "4":{"n1":"冠亚和小","n2":"冠亚和大"},
                   "5":{"n1":"单","n2":"双"},
                   "6":{"n1":"小","n2":"大"}
               };
               function getMissingList(){
                   var rankVal=rank;
                   if(dataType==2||dataType==3||dataType==4){
                       rankVal="";
                   }
                   $.post("/missing/getMissingList.do",
                           {dataType:dataType,gameId:gameId,rank:rankVal,orderCloumn:orderCloumn,orderType:orderType },
                           function(r) {
                               if (r) {
                                   doTCompile("missing_list", r.t);
                                   //处理排序样式
                                   $("#classUpDown"+orderCloumn).addClass(orderType==1?"btnUp":"btnDown");
                                   //处理 类型样式
                                   $("#dataTypeUl li a").removeClass("cur")
                                   $("#dataTypeLi"+dataType).addClass("cur")
                                   //处理排名样式
                                   $("#rankUl li a").removeClass("cur")
                                   $("#rankLi"+rank).addClass("cur")
                               }
                           }, "json");
               }
               //大小路珠
               function luzhuShow(){
                   for(var i=0;i<11;i++){
                       $(".t_"+i).hide();
                   }
                   $(".t_"+rank).show();
               }
               function searchQianhouLuzhu() {
                   $.get('/pk10/eobsLuzhu.do', {
                   }, function(data) {
                       $("#dx_lot_content").html(data);
                       luzhuShow();
                   });
               }
               //龍虎路珠
               var NUM_INDEX = {1:'冠军',2:'亚军',3:'第三名',4:'第四名',5:'第五名'};
               function luzhu(rows, n){
                   var j = 0;
                   var html = '<div style="width:980px; overflow-x:auto;" class="luzhu_scroll">'
                           +'<table class="roadmap-table "><tr valign="top">';
                   var l1=0;
                   var h1=0;
                   var tag1 = '';
                   for(var i=rows.length-1;i >= 0; i--){
                       var data = rows[i];
                       var a1, a2;
                       if(n==1){
                           a1 = data.n1;
                           a2 = data.n10;
                       }else if(n==2){
                           a1 = data.n2;
                           a2 = data.n9;
                       }else if(n==3){
                           a1 = data.n3;
                           a2 = data.n8;
                       }else if(n==4){
                           a1 = data.n4;
                           a2 = data.n7;
                       }else if(n==5){
                           a1 = data.n5;
                           a2 = data.n6;
                       }
                       var cl = '';
                       var tag = '';
                       if(a1>a2){
                           cl = 'odd';
                           tag = '龍';
                           l1++;
                       }else{
                           cl = 'even';
                           h1++;
                           tag = '虎';
                       }
                       if(i==rows.length-1){
                           html += "<td class='"+cl+"'>";
                       }else if(tag1!=tag){
                           html += "</td><td class='"+cl+"'>";
                       }
                       if(tag == '虎'){
                           html += '<label>'+tag+'</label>';
                       }else{
                           html += '<span>'+tag+'</span>';
                       }
                       if(i==0){
                           html += '</td>';
                       }
                       tag1 = tag;
                   }
                   html += '</tr> </table></div>';
                   var tmp = '<table class="roadmap-table-caption"><tr><td>'+
                           '<span>今日号码累计：<span class="count"> 龍（'+l1+'） 虎（'+h1+'）</span>'+NUM_INDEX[n]+'龍虎</span>'
                           +'</td></tr></table>';
                   return tmp + html;
               }
               function searchLuzhu() {
                   $.get("/pk10/kaijiang.do", {}, function (result) {
                       var tmp1='', tmp2='', tmp3='', tmp4='', tmp5='';
                       if(result&&result.rows&&result.rows.length>0){
                           tmp1 = luzhu(result.rows, 1);
                           tmp2 = luzhu(result.rows, 2);
                           tmp3 = luzhu(result.rows, 3);
                           tmp4 = luzhu(result.rows, 4);
                           tmp5 = luzhu(result.rows, 5);
                       }
                       $('#luzhu_1').html(tmp1);
                       $('#luzhu_2').html(tmp2);
                       $('#luzhu_3').html(tmp3);
                       $('#luzhu_4').html(tmp4);
                       $('#luzhu_5').html(tmp5);
                       luzhuShow();
                   }, "json");
               }
               //龍虎结束

               //冠亚和路珠
               function getGuanyaLuzhubseo(){
                   $.get("/pk10/guanyaLuzhubseo.do", {
                       t : Math.random()
                   }, function(text) {
                       $('#jshtml').html(text);
                       $("#luzhuhe_other").hide();
                   });
               }
               //冠亚和路珠
               function load(){
                   getMergeData();
                   getMissingList();
                   searchQianhouLuzhu();
                   getGuanyaLuzhubseo();
                   searchLuzhu();
               }
               load();
               function gotoPage(dataTypeNum,rankNum){
                   if(dataTypeNum)
                       dataType=dataTypeNum;
                   if(rankNum)
                       rank=rankNum;
                   window.location.href="/pk10/merge.html#dataType="+dataType+"&gameId="+gameId+"&rank="+rank+"&orderCloumn="+orderCloumn+"&orderType="+orderType;
                   load();
               }
               $(".web_Sortk .btn span").live("click",
                       function() {
                           $(".web_Sortk li").removeClass("btnDown");
                           $(".web_Sortk li").removeClass("btnUp");
                           $(this).attr("class")=="btn1"?$(this).parents("li").addClass("btnUp"):$(this).parents("li").addClass("btnDown");
                           orderCloumn=$(this).attr("order-cloumn");
                           orderType=$(this).attr("order-type");
                           gotoPage();
                       }
               );

               $("input[name='c_p']").live("change",function(){
                   var tid=$(this).attr("value");
                   if($(this).attr("checked")=="checked"){
                       $("#"+$(this).val()).show();
                   }else{
                       $("#"+$(this).val()).hide();
                   }
               })
           </script>
       </div>
       <div class="clear"></div>
   </div>
  </div>
   
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