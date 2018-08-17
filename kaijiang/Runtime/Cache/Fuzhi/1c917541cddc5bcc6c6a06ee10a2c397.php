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
    <div class="w1030 clearfix">
        <ul class="nav-plus clearfix">
            <li><a href="<?php echo ($BaseUrl); ?>">网站首页</a></li>
            <li><a href="<?php echo ($BaseUrl); ?>pk10/">北京赛车pk10</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xyft/">幸运飞艇</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>cqssc/">重庆时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xjssc/">新疆时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>tjssc/">天津时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>gdkl10/">广东快乐十分</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xync/">幸运农场</a></li>			
		    <li class="dropdown-nav">
                <a href="javascript://" class="dropdown-desc">更多彩种<i class="icon"></i></a>
                <ul class="dropdown-ul" style="display: none;">
					<li><a href="<?php echo ($BaseUrl); ?>gd11x5/">广东11选5</a></li>
					<li><a href="<?php echo ($BaseUrl); ?>jsk3/">江苏快三</a></li>
					<li><a href="<?php echo ($BaseUrl); ?>kl8/">北京快乐8</a></li>
					<li><a href="<?php echo ($BaseUrl); ?>shssl/">上海时时乐</a></li>
                </ul>
            </li>
			
        </ul>

    </div>
</div>
  
</div>
 <script type="text/javascript">

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
    
 
<!--body-content-->
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
    <li><a href="xync/" game="xync">幸运农场</a></li>
    <li><a href="jsk3/" game="jsk3">江苏快3</a></li>
    <li><a href="shssl/" game="shssl" class="last">上海时时乐</a></li>
</ul>

<ul class="lot-menu delBottomLine" style="margin-top: 0px;"> 
<li><a href="gd11x5/" game="gd11x5">广东11选5</a></li>
    <li><a href="xjssc/" game="xjssc">新疆时时彩</a></li>
    <li><a href="kl8/" game="kl8">北京快乐8</a></li>
    <li><a href="fc3d/" game="fc3d">福彩3d</a></li>
    <li><a href="pl3/" game="pl3">排列3</a></li>
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
	<input type="hidden" id="callFun" value="callFun" time="1000"/>
	<div style="margin-bottom:20px;" id="lot-wrap">
		<div class="lot-search">
			<div class="car-num">
				<ul style="margin-bottom: 10px;" class="lot-number-omit">
					<li style="padding-bottom: 2px;" class="ball">
						<ul style="width: 750px; _width: 740px; float: left; margin-left: 10px;">
							<li id="ballstat-switch">
								<b style="margin: 8px 0 0 0;" class="checkbox checked"></b>
								<span class="ckb-txt">
									<label style="cursor: pointer">今日双面统计</label>
								</span>
							</li>
							<li id="changlong-switch">
								<b style="margin: 8px 0 0 0;" class="checkbox checked"></b>
								<span class="ckb-txt">
									<label style="cursor: pointer">长龙提醒</label></span></li>
							<li id="car-switch">
								<b style="margin: 8px 0 0 0;" class="checkbox checked"></b>
								<span class="ckb-txt">
									<label style="cursor: pointer">查看车号分布</label>
								</span>
							</li>
	
						</ul>
						<script type="text/javascript" src="js/My97DatePicker/WdatePicker.js" ></script>
						<ul style="float: right; width: 220px; text-align: right;">
							<li>
								<span style="display: block; float: left;">
									<label style="margin: 0px;">选择日期：</label></span>
								<span style="display: block; float: left;">
									<input name="dateData" type="text" id="dateData" onClick="WdatePicker();" readonly="readonly" style="height:18px; margin:0px;"></span>
								<span style="padding-left: 10px;"><a style="margin: 0px;" href="javascript:Search();">查询</a></span>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div style="clear:both" id="ballstat_remind" class="dataTableKuang">
			<div id="ball_stat_list-html"></div> 
			<script id="ball_stat_list-tmpl" type="text/template">
				<table width="100%" cellspacing="1" cellpadding="0" border="0">
			        <tbody><tr class="huisekColor">
			            <td class="firstTd" colspan="10"><span>今日双面统计</span></td>
			        </tr>
			        <tr class="huisekColor2">
			            <td>
			                <div class="web_ballPaiMing">冠&#12288;军</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">亚&#12288;军</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第三名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第四名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第五名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第六名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第七名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第八名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第九名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
		
			            </td>
			            <td>
			                <div class="web_ballPaiMing">第十名</div>
			                <div class="web_bigAndSmall">
			                    <ul>
			                        <li>大</li>
			                        <li>小</li>
			                        <li>单</li>
			                        <li>双</li>
			                    </ul>
			                </div>
			            </td>
			        </tr>
			        {{ 
				    	var rowsLen=it.length;
				    	var recArray=new Array();
			            function addRecArray(recTermNum){
			              var isExist=false;
			              for(var i=0;i<recArray.length;i++){
			                if(recArray[i]==recTermNum){
			                  isExist=true;
			                  break;
			                }
			              }
			              if (!isExist) {
			                recArray.push(recTermNum);
			              }
			              return isExist;
			            } 
				    	for(var i=0;i<rowsLen;i++){ /*循环开始A*/
				    		var rd=it[i];
				    		var dataType=rd.dataType;
				    		var ld=rd.lotteryDate;
				    		if(!addRecArray(ld)){
				     }}
			        <tr id="todayDoubleData" class="huisekColor">
				        <td>
				         <div class="web_bigAndSmall2">
				          <ul>
				           <li>{{=getVal(it,ld,1,6,2)}}</li>
				           <li>{{=getVal(it,ld,1,6,1)}}</li>
				           <li>{{=getVal(it,ld,1,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,1,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				         <ul>
				           <li>{{=getVal(it,ld,2,6,2)}}</li>
				           <li>{{=getVal(it,ld,2,6,1)}}</li>
				           <li>{{=getVal(it,ld,2,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,2,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				          <ul>
				           <li>{{=getVal(it,ld,3,6,2)}}</li>
				           <li>{{=getVal(it,ld,3,6,1)}}</li>
				           <li>{{=getVal(it,ld,3,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,3,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				          <ul>
				           <li>{{=getVal(it,ld,4,6,2)}}</li>
				           <li>{{=getVal(it,ld,4,6,1)}}</li>
				           <li>{{=getVal(it,ld,4,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,4,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				          <ul>
				           <li>{{=getVal(it,ld,5,6,2)}}</li>
				           <li>{{=getVal(it,ld,5,6,1)}}</li>
				           <li>{{=getVal(it,ld,5,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,5,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				         <ul>
				           <li>{{=getVal(it,ld,6,6,2)}}</li>
				           <li>{{=getVal(it,ld,6,6,1)}}</li>
				           <li>{{=getVal(it,ld,6,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,1,6,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				         <ul>
				           <li>{{=getVal(it,ld,7,6,2)}}</li>
				           <li>{{=getVal(it,ld,7,6,1)}}</li>
				           <li>{{=getVal(it,ld,7,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,7,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				         <ul>
				           <li>{{=getVal(it,ld,8,6,2)}}</li>
				           <li>{{=getVal(it,ld,8,6,1)}}</li>
				           <li>{{=getVal(it,ld,8,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,8,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				         <ul>
				           <li>{{=getVal(it,ld,9,6,2)}}</li>
				           <li>{{=getVal(it,ld,9,6,1)}}</li>
				           <li>{{=getVal(it,ld,9,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,9,5,2)}}</li>
				          </ul>
				         </div></td>
				        <td>
				         <div class="web_bigAndSmall2">
				         <ul>
				           <li>{{=getVal(it,ld,10,6,2)}}</li>
				           <li>{{=getVal(it,ld,10,6,1)}}</li>
				           <li>{{=getVal(it,ld,10,5,1)}}</li>
				           <li style="border:none;">{{=getVal(it,ld,10,5,2)}}</li>
				          </ul>
				         </div></td>
				       </tr> 
			      {{ 
				      }
			     	}
				  }}
			    </tbody>
		    </table>
		    </script>
		</div>
		<div id="changlong_warn" class="kaijiang_tiptool">
			<div class="tiptool_head">
				<ul>
					<li>长龙连开提醒</li>
				</ul>
			</div>
			<div id="changlong_info" class="tiptool_info">
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
		</div>
		<ul style="font-family: '微软雅黑'" id="ball-choose">
			<li style="line-height: 13px;"><span style="font-size: 14px;">查看车号分布：</span></li>
			<li>
				<span class="pk10"><b data-c="1" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号1</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="2" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号2</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="3" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号3</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="4" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号4</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="5" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号5</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="6" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号6</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="7" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号7</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="8" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号8</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="9" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号9</label></span>
			</li>
			<li>
				<span class="pk10"><b data-c="10" class="checkbox"></b></span>
				<span class="ckb-txt">
					<label style="cursor: pointer">号10</label></span>
			</li>
			<li style="position:relative;">
				<div class="bg_u4">
				  <input type="button" onclick="SetChk()" value="还原" style="*padding-top:3px">
				</div>
			</li>
		</ul>
		<div style="clear: both"></div>
		<div id="history-table">
			<table id="history" class="lot-table">
				<tbody>
					<tr class="head">
						<td width="160">时间</td>
						<td width="350">开奖号码</td>
						<td colspan="3">冠亚军和</td>
						<td colspan="5">1~5龍虎</td>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
    <script type="text/javascript">
        $(function () {
            callFun();
        });
        function callFun(){
            LoadPk10TipSet();
            getHistoryData(200);
            reloadBallStatRemind();
            reloadChangLong();
        }
        function reloadBallStatRemind() {
            $.get("/pk10/getBallStat.do?today=1",function(r){
                if (r) {
                    doTCompile("ball_stat_list", r);
                }
            },"json");
        }
        function getVal(datas,date,rank,dataType,num){
            var dayTotalNum="0";
            for(var i=0;i<datas.length;i++){
                var d=datas[i];
                if(d.lotteryDate==date&&d.num==num&&d.dataType==dataType&&d.rank==rank){
                    dayTotalNum= d.dayTotalNum;
                    break;
                }
            }
            return dayTotalNum;
        }
        var NUM_INDEX = {1:'冠　军',2:'亚　军',3:'季　军',4:'第四名',5:'第五名',
            6:'第六名',7:'第七名',8:'第八名',9:'第九名',10:'第十名'};
        var NUM_TYPE = {1:'大',2:'小',3:'单',4:'双',5:'龙', 6:'虎'};
        function reloadChangLong() {
            $.post("/pk10/getMergeData.do",
                    function(r) {
                        if (r) {
                            doTCompile("cl_list", r.clList);
                        }
                    }, "json");
        }
        function Search() {
            $.get("/pk10/kaijiang.do", { date: $("#dateData").val() }, function (result) {
                if(result&&result.rows&&result.rows.length>0){
                    var j = 0;
                    var html = '';
                    for(var i in result.rows){
                        var data = result.rows[i];
                        var clsName = "even";
                        if (j%2==0) {
                            clsName = "odd";
                        }
                        html += '<tr class="' + clsName + '"><td><p class="p">' + data.termNum + '</p><p class="t">'
                        + data.lotteryTime.substring(5, 16);
                        html += '</p></td><td class="nums">';
                        html += '<i class="pk-no' + data.n1 + '"></i>';
                        html += '<i class="pk-no' + data.n2 + '"></i>';
                        html += '<i class="pk-no' + data.n3 + '"></i>';
                        html += '<i class="pk-no' + data.n4 + '"></i>';
                        html += '<i class="pk-no' + data.n5 + '"></i>';
                        html += '<i class="pk-no' + data.n6 + '"></i>';
                        html += '<i class="pk-no' + data.n7 + '"></i>';
                        html += '<i class="pk-no' + data.n8 + '"></i>';
                        html += '<i class="pk-no' + data.n9 + '"></i>';
                        html += '<i class="pk-no' + data.n10 + '"></i>';
                        var guanyahe = data.n1 + data.n2;
                        html += '</td>';
                        html += '<td>' + guanyahe + '</td>';
                        var guanyahedx = '大';
                        if(guanyahe==11){
                            guanyahedx = '和';
                        }else if(guanyahe<11){
                            var guanyahedx = '小';
                        }
                        html += '<td><p ' + (guanyahedx == "大" ? 'class="r"' : '') + '>' + guanyahedx + '</p></td>';
                        var guanyaheds = '单';
                        if(guanyahe==11){
                            guanyaheds = '和';
                        }else if(guanyahe%2==0){
                            guanyaheds = '双';
                        }
                        html += '<td><p ' + (guanyaheds == "单" ? 'class="r"' : '') + '>' + guanyaheds + '</p></td>';
                        var longhu = new Array();
                        longhu[0] = (data.n1>data.n10)?"龍":"虎";
                        longhu[1] = (data.n2>data.n9)?"龍":"虎";
                        longhu[2] = (data.n3>data.n8)?"龍":"虎";
                        longhu[3] = (data.n4>data.n7)?"龍":"虎";
                        longhu[4] = (data.n5>data.n6)?"龍":"虎";
                        for (var i = 0; i < longhu.length; i++) {
                            html += '<td><p ' + (longhu[i] == "龍" ? 'class="r"' : '') + '>' + longhu[i] + '</p></td>';
                        }
                        html += '</tr>';
                        j++;
                    }
                    $("#history .head").nextAll().remove();
                    $("#history .head").after(html);
                }else{
                    $("#history tr:gt(0)").remove();
                }
            }, "json");
        }
        function showCarNum() {
            var datas = [];
            var ckbeds = $("#ball-choose li b.checked");
            for (var i = 0; i < ckbeds.length; i++) {
                datas.push($(ckbeds[i]).attr("data-c"));
            }

            $(".nums i").removeClass("noshade");
            if (datas.length > 0) {
                $(".nums").addClass("shade");
            }
            for (var i = 0; i < datas.length; i++) {
                var c = ".pk-no" + datas[i];
                $(c).addClass("noshade");
            }
            if (datas.length == 0) {
                $(".nums").removeClass("shade");
            }
        }

        $("#ball-choose li").click(function () {

            var c = $("b", $(this)).attr("data-c");

            if ($("b", $(this)).attr("class") == "checkbox") {
                $("b", $(this)).addClass("checked");
            } else {
                $("b", $(this)).removeClass("checked");
            }
            showCarNum();
        })
        function SetChk()
        {
            $("#ball-choose b").removeClass("checked");
            $(".nums").removeClass("shade");
        }
    </script>
		<div class="clear"></div>
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