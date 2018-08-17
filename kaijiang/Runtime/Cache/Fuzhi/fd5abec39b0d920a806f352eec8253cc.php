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

<link href="css/index.css"  rel="stylesheet" />

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
                    <li><a href="<?php echo ($BaseUrl); ?>xync/">幸运农场</a></li>
                </ul>
            </li>
            <li><a href="<?php echo ($BaseUrl); ?>pk10/">北京赛车pk10</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xyft/">幸运飞艇</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>cqssc/">重庆时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xjssc/">新疆时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>tjssc/">天津时时彩</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>gdkl10/">广东快乐十分</a></li>
			<li><a href="<?php echo ($BaseUrl); ?>xync/">幸运农场</a></li>

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
    


    <!--body-content-->
<div class="body-content">

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
		<div style=" margin-top: 10px;">

	<div class="lot-menu">

	<div class="game_list">
        <ul>
          <li><a href="/pk10"><em class="pk10-icon"></em>北京赛车  </a> <span id="pk10-timeqihaob"></span></li>
		  <li><a href="/xyft/"><em class="xyft-icon"></em>幸运飞艇</a><span id="xyft-timeqihaob"></span></li>
          <li><a href="/cqssc/"><em class="cqssc-icon"></em>重庆时时彩 </a><span id="cqssc-timeqihaob"></span></li>
          <li><a href="/gdkl10/"><em class="gdkl10-icon"></em>广东快乐十分 </a><span id="gdkl10-timeqihaob"></span></li>
          <li><a href="/xync/"><em class="xync-icon"></em>幸运农场 </a><span id="xync-timeqihaob"></span></li>
          <li><a href="/xjssc/"><em class="xjssc-icon"></em>新疆时时彩</a> <span id="xjssc-timeqihaob"></span></li>
          <li><a href="/tjssc/"><em class="tjssc-icon"></em>天津时时彩 </a><span id="tjssc-timeqihaob"></span></li>
          <li><a href="/gd11x5/"><em class="gd11x5-icon"></em>广东11选5 </a><span id="gd11x5-timeqihaob"></span></li>
          <li><a href="/jsk3/"><em class="jsk3-icon"></em>江苏快三 </a><span id="jsk3-timeqihaob"></span></li>
        </ul>
      </div>


		<!--banner-->

        <div class="index_left_ad"><a href="m" target="_blank"><img alt="手机pk10开奖直播" src="/style/images/mobile2.gif"></a></div>

	</div>
		</div>
		
<div class="banner">
	
	<div class="ck-slide">
        <ul class="ck-slide-wrapper">
		<li style="opacity: 0;"> <a href="javascript:;"><img src="/style/images/banner/4.png" alt="幸运飞艇" width="470" height="224"></a> </li>
          <li style="opacity: 0;"> <a href="javascript:;"><img src="/style/images/banner/3.jpg" alt="千禧彩票网" width="470" height="224"></a> </li>
          <li style="opacity: 0.138756;"> <a href="javascript:;"><img src="/style/images/banner/1.jpg" alt="PK10开奖直播" width="470" height="224"></a> </li>
          <li style="opacity: 0.861244;"> <a href="javascript:;"><img src="/style/images/banner/4.jpg" alt="手机PK10开奖直播" width="470" height="224"></a> </li>
          <li style="opacity: 0;"> <a href="javascript:;"><img src="/style/images/banner/2.jpg" alt="千禧彩票网" width="470" height="224"></a> </li>
    
        </ul>
        <a href="javascript:;" class="ctrl-slide ck-prev" style="opacity: 0.15;">上一张</a> <a href="javascript:;" class="ctrl-slide ck-next" style="opacity: 0.15;">下一张</a>
        <div class="ck-slidebox" style="margin-left: -54px;">
          <div class="slideWrap">
            <ul class="dot-wrap">
              <li class=""><em>1</em></li>
              <li class=""><em>2</em></li>
              <li class=""><em>3</em></li>
              <li class="current"><em>4</em></li>
              <li class=""><em>5</em></li>
            </ul>
          </div>
        </div>
      </div>

	<script src="/style/js/slide.js"></script>
<script>

			$('.ck-slide').ckSlide({

				autoPlay: true

			});

		</script>
<!--公告栏-->
         <!--       <div class="gonggao" style="width:420px;">
                    <iframe src="http://api.338p.com/cp_newshow/liuhecai.php?u=<?php echo ($BaseUrl); ?>" width="800" height="30" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                </div>-->

	  
	  <div style='clear:both'></div>
<div class="tabbox">
        <div class="tab"> <a href="/pk10" class="on">北京赛车</a> <a href="/cqssc" class="">重庆时时彩</a> <a href="/gdkl10" class="">广东快乐十分</a> <a href="/xync">幸运农场</a> <a href="/gd11x5">广东11选5</a> </div>
        <div class="content">
          <ul>
            <li style="display: block;">
              <div class="box_game_info"> <span class="fl">第<span id="pk10period"></span>期开奖结果： </span> <span class="fr">距离第<span id="pk10-timeqihao"></span>期开奖还有：<b id="pk10-time"></b></span> </div>
              <div class="open_nums" id="pk10">
			  </div>
              <div class="game_trend">
                <dl>
                  <dt><a href="/pk10/zoushitu.html">号码走势</a></dt>
                  <dt><a href="/pk10/merge.html">号码路珠</a></dt>
                  <dt><a href="/pk10/yilou.html">号码遗漏</a></dt>
                  <dt><a href="/pk10/twosidedstat.html">双面统计</a></dt>
                  <dt><a href="/pk10/luzhubigorsmall.html">单双路珠</a></dt>
                  <dt><a href="/pk10/ballstat.html">单双历史</a></dt>
        
                </dl>
              </div>
            </li>
            <li style="display: none;">
              <div class="box_game_info"> <span class="fl">第<span id="cqsscperiod"></span>期开奖结果： </span> <span class="fr">距离第<span id="cqssc-timeqihao"></span>期开奖还有：<b id="cqssc-time"></b></span> </div>
              <div class="open_nums" id="cqssc"></div>
              <div class="game_trend">
                <dl>
                  <dt><a href="/cqssc/zoushitu.html">号码走势</a></dt>
                    <dt><a href="/cqssc/luzhunumber.html">号码路珠</a></dt>
                    <dt><a href="/cqssc/yilou.html">号码遗漏</a></dt>
                    <dt><a href="/cqssc/twosidedstat.html">双面统计</a></dt>
                    <dt><a href="/cqssc/luzhubigorsmall.html">单双路珠</a></dt>
                    <dt><a href="/cqssc/ballstat.html">单双历史</a></dt>
             
                </dl>
              </div>
            </li>
            <li style="display: none;">
              <div class="box_game_info"> <span class="fl">第<span id="gdkl10period"></span>期开奖结果： </span> <span class="fr">距离第<span id="gdkl10-timeqihao"></span>期开奖还有：<b id="gdkl10-time"></b></span> </div>
              <div class="open_nums" id="gdkl10"></div>
              <div class="game_trend">
                <dl>
                    <dt><a href="/gdkl10/zoushitu.html">号码走势</a></dt>
                    <dt><a href="/gdkl10/luzhunumber.html">号码路珠</a></dt>
                    <dt><a href="/gdkl10/merge.html">号码遗漏</a></dt>
                    <dt><a href="/gdkl10/twosidedstat.html">双面统计</a></dt>
                    <dt><a href="/gdkl10/luzhubigorsmall.html">单双路珠</a></dt>
                    <dt><a href="/gdkl10/ballstat.html">单双历史</a></dt>
               
                </dl>
              </div>
            </li>
            <li style="display: none;">
              <div class="box_game_info"> <span class="fl">第<span id="xyncperiod"></span>期开奖结果： </span> <span class="fr">距离第<span id="xync-timeqihao"></span>期开奖还有：<b id="xync-time"></b></span> </div>
              <div class="open_nums" id="xync">
			  </div>
              <div class="game_trend">
                <dl>
                  	<dt><a href="/xync/zoushitu.html">号码走势</a></dt>
                    <dt><a href="/xync/luzhunumber.html">号码路珠</a></dt>
                    <dt><a href="/xync/luzhutotal.html">号码遗漏</a></dt>
                    <dt><a href="/xync/twosidedstat.html">双面统计</a></dt>
                    <dt><a href="/xync/luzhubigorsmall.html">单双路珠</a></dt>
                    <dt><a href="/xync/ballstat.html">单双历史</a></dt>
 
                </dl>
              </div>
            </li>
            <li style="display: none;">
              <div class="box_game_info"> <span class="fl">第<span id="gd11x5period"></span>期开奖结果： </span> <span class="fr">距离第<span id="gd11x5-timeqihao"></span>期开奖还有：<b id="gd11x5-time"></b></span> </div>
              <div class="open_nums" id="gd11x5"></div>
              <div class="game_trend">
                <dl>
                	<dt><a href="/gd11x5/zoushitu.html">号码走势</a></dt>
                    <dt><a href="/gd11x5/luzhunumber.html">号码路珠</a></dt>
                    <dt><a href="/gd11x5/luzhutotal.html">号码遗漏</a></dt>
                    <dt><a href="/gd11x5/twosidedstat.html">双面统计</a></dt>
                    <dt><a href="/gd11x5/luzhubigorsmall.html">单双路珠</a></dt>
                    <dt><a href="/gd11x5/ballstat.html">单双历史</a></dt>
          
                </dl>
              </div>
            </li>
          </ul>
        </div>
      </div>
	  
<script>
$(function(){
	$(".tabbox .tab a").mouseover(function(){
		$(this).addClass('on').siblings().removeClass('on');
		var index = $(this).index();
		number = index;
		$('.tabbox .content li').hide();
		$('.tabbox .content li:eq('+index+')').show();
	});
	
	var auto = 0;  //等于1则自动切换，其他任意数字则不自动切换
	if(auto ==1){
		var number = 0;
		var maxNumber = $('.tabbox .tab a').length;
		function autotab(){
			number++;
			number == maxNumber? number = 0 : number;
			$('.tabbox .tab a:eq('+number+')').addClass('on').siblings().removeClass('on');
			$('.tabbox .content ul li:eq('+number+')').show().siblings().hide();
		}
		var tabChange = setInterval(autotab,3000);
		//鼠标悬停暂停切换
		$('.tabbox').mouseover(function(){
			clearInterval(tabChange);
		});
		$('.tabbox').mouseout(function(){
			tabChange = setInterval(autotab,3000);
		});
	  }
});
</script>	  
	  
	  
	  
	

	<script type="text/javascript">
	$(function () {
		$('#slides').slidesjs({
			width: 470,
			height: 190,
			play: {
				active: true,
				auto: true,
				interval: 6000
			}
		});
	});
	</script>
	<!-- 开奖纪录 -->

	<script type="text/javascript">
		function getCpResult(){
			 $.get('pk10/getPk10AwardData.do?' + Math.random(), function (data) {
				 if(!data)
					 return;
				 var curData=data.current;
				 doTCompile("pkcur_data", curData);
		        }, 'json');
			 $.get('cqssc/getCqsscAwardData.do?' + Math.random(), function (data) {
				 if(!data)
					 return;
				 var curData=data.current;
				 doTCompile("cqssc_cur_data", curData);
		        }, 'json');
			 $.get('gdkl10/getGdkl10AwardData.do?' + Math.random(), function (data) {
				 if(!data)
					 return;
				 var curData=data.current;
				 doTCompile("kl10_cur_data", curData);
		        }, 'json');
		}
		getCpResult();
	</script>
</div>
		<!--/banner-->
		<!--software-->
		
	
		
		
			<div class="software">
	<div class="soft">
	
		
	<div class="index_right">
      <div class="hot_news">
         <div class="title">
          <h2><a href="/pk10/shdd.html">PK10杀号</a></h2>
        </div>
        <div class="hot_news_list">
          <ul>
		  
			<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><a style="float:left;" href="/pk10/shdd.html" target="_blank">·<?php echo ($data["title"]); ?></a>
			  </br><?php endforeach; endif; else: echo "" ;endif; ?>
			
		  </ul>
        </div>
      </div>
      <div class="index_right_ad"> <img src="/images/app.png" width="238" height="156" alt="手机版"> </div>
	  
    </div>	


	
		
	</div>

<!-- 	<div class="code"> -->
		<!-- virtual="/wxsys/" -->
<!-- 	</div> -->
</div>
<div class="wrap">
    <div class="video_list">
    
    
	<ul class="picList">
          <li>
            <div class="pic"><a href="/pk10/shipin" target="_blank"><img src="/style/images/pk10v.jpg"></a><p><b id="bpk10-time"></b>秒后直播</p> </div>
            <p><a href="/pk10/shipin" target="_blank">北京赛车pk10</a></p>
          </li>
           <li>
            <div class="pic"><a href="/xyft/shipin" target="_blank"><img src="/style/images/xyftv.jpg"></a><p><b id="bxyft-time"></b>秒后直播</p></div>
         <p><a href="/xyft/shipin" target="_blank">幸运飞艇</a></p>
		</li>
          <li>
            <div class="pic"><a href="/cqssc/shipin" target="_blank"><img src="/style/images/cqsscv.jpg"></a> <p><b id="bcqssc-time"></b>秒后直播</p></div>
            <p><a href="/cqssc/shipin" target="_blank">重庆时时彩</a></p>
          </li>
          <li>
            <div class="pic"><a href="/gdkl10/shipin" target="_blank"><img src="/style/images/gdkl10v.jpg"></a><p><b id="bgdkl10-time"></b>秒后直播</p></div>
          <p><a href="/gdkl10/shipin" target="_blank">广东快乐十分</a></p>
          </li>
          <li>
            <div class="pic"><a href="/xync/shipin" target="_blank"><img src="/style/images/xyncv.jpg"></a><p><b id="bxync-time"></b>秒后直播</p></div>
          <p><a href="/xync/shipin" target="_blank">幸运农场</a></p>
          </li>
          <li>
            <div class="pic"><a href="/xjssc/shipin" target="_blank"><img src="/style/images/xjsscv.jpg"></a><p><b id="bxjssc-time"></b>秒后直播</p></div>
           <p><a href="/xjssc/shipin" target="_blank">新疆时时彩</a></p>
          </li>
          <li>
            <div class="pic"><a href="/tjssc/shipin" target="_blank"><img src="/style/images/tjsscv.jpg"></a><p><b id="btjssc-time"></b>秒后直播</p></div>
         <p><a href="/tjssc/shipin" target="_blank">天津时时彩</a></p>
          </li>
          <li>
            <div class="pic"><a href="/gd11x5/shipin" target="_blank"><img src="/style/images/gd11x5v.jpg"></a><p><b id="bgd11x5-time"></b>秒后直播</p></div>
          <p><a href="/gd11x5/shipin" target="_blank">广东11选5</a></p>
          </li>
         
        </ul>
  
    </div>
  </div>
  <style type="text/css"> 
.wrapper
{ width:1015px; height:615px;overflow:hidden; position:relative; }
.iframe { width:1224px;height:1380px; position:absolute; top:-0px; left:-111px; }
</style> 
<!--
<div class="wrapper"> 
<iframe class="iframe" src="http://api.338p.com/cp_newshow/321k.php?u=<?php echo ($BaseUrl); ?>" scrolling="no" frameborder="0">
</iframe>
</div> -->
  
  
  
  
  
		<!--/software-->
		<div class="clear"></div>
		<!--lot-forum -->
			<div class="lot-forum mt10">
	<div class="l-title">
		<h2>网站公告</h2>
	</div>
    <ul style="height: 168px;">

        <?php if(is_array($lists2)): $i = 0; $__LIST__ = $lists2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a style="float:left;" href="gallery/<?php echo ($data['id']); ?>.html" target="_blank"><?php echo ($data["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		
		</ul>
	<div  class="ad_diz_hottopic_bottom">
		<a href="" target="_blank">

			<!-- <img alt="" src="http://g1.133918.com:9000/business/2014/10/14/172822122.gif" /> -->
		</a>
	</div>
</div>
		<!--/lot-forum -->
		<!--lot-trend -->
			<div class="lot-trend mt10">
	<div class="l-title">
		<h2>北京赛车pk10号码走势图</h2>
		<a href="pk10/positiontrend.html"  target="_blank">查看详细走势>></a>
	</div>
	<div class="play-name">
		<a href="javascript:void(0);" class='cur' ball="1">冠军</a> | 
		<a href="javascript:void(0);" ball="2">亚军</a> | 
		<a href="javascript:void(0);" ball="3">第三名</a> | 
		<a href="javascript:void(0);" ball="4">第四名</a> | 
		<a href="javascript:void(0);" ball="5">第五名</a> | 
		<a href="javascript:void(0);" ball="6">第六名</a> | 
		<a href="javascript:void(0);" ball="7">第七名</a> |
		<a href="javascript:void(0);" ball="8">第八名</a> | 
		<a href="javascript:void(0);" ball="9">第九名</a> | 
		<a href="javascript:void(0);" ball="10">第十名</a>
	</div>
	<!--走势图-->
	<div id="lot-trend-container" style="width: 720px; height: 180px;">
	</div>
	<!--/走势图-->
</div>
		<!--/lot-trend -->
		<div class="clear"></div>
	
	
	
	
	

<div style='clear:both'></div>

<div class="wrap">
      <div class="game_news">
          <div class="game_news_left fl">
				<div class="l-title">
					<h2>心得技巧分享</h2>

				</div>
				
				<div class="game_news_main">
				   
			  <div class="info_news news_top">
            <div class="news_hot">
              <h4>北京赛车</h4>
              <a href="jiqiao/pk10/" target="_blank" class="gey_link fr">更多&gt;&gt;</a></div>
            <div class="news_bd">
              <dl>
                <dt><img src="/style/images/pk10-logo.png" width="82" height="82"></dt>
                <dd><a href="jiqiao/<?php echo ($pktop['lottory']); ?>/<?php echo ($pktop['id']); ?>.html" target="_blank"><?php echo ($pktop["title"]); ?></a></dd>
                <dd><?php echo ($pktop["description"]); ?></dd>              </dl>
            </div>
            <div class="news_ft">
              <ul>
			   <?php if(is_array($lists1)): $i = 0; $__LIST__ = $lists1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a style="float:left;" href="jiqiao/<?php echo ($data['lottory']); ?>/<?php echo ($data['id']); ?>.html" target="_blank"><?php echo ($data["title"]); ?></a><span style="float:right;"><?php echo (date("Y-m-d",$data["create_time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
            </div>

          </div>
          <div class="info_news news_right">
            <div class="news_hot">
              <h4>重庆时时彩</h4>
              <a href="jiqiao/cqssc/" target="_blank" class="gey_link fr">更多&gt;&gt;</a></div>
            <div class="news_bd">
              <dl>
                <dt><img src="/style/images/cqssc-logo.png" width="82" height="82"></dt>
                <dd><a href="jiqiao/<?php echo ($pktop3['lottory']); ?>/<?php echo ($pktop3['id']); ?>.html" target="_blank"><?php echo ($pktop3["title"]); ?></a></dd>
                <dd><?php echo ($pktop3["description"]); ?></dd>              </dl>
            </div>
            <div class="news_ft">
             <ul>
			   <?php if(is_array($lists3)): $i = 0; $__LIST__ = $lists3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a style="float:left;" href="jiqiao/<?php echo ($data['lottory']); ?>/<?php echo ($data['id']); ?>.html" target="_blank"><?php echo ($data["title"]); ?></a><span style="float:right;"><?php echo (date("Y-m-d",$data["create_time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
            </div>
          </div>
          <div class="info_news news_left">
            <div class="news_hot">
              <h4>广东快乐十分</h4>
              <a href="jiqiao/gdkl10/" target="_blank" class="gey_link fr">更多&gt;&gt;</a></div>
            <div class="news_bd">
              <dl>
                <dt><img src="/style/images/gdkl10-logo.png" width="82" height="82"></dt>
                <dd><a href="jiqiao/<?php echo ($pktop4['lottory']); ?>/<?php echo ($pktop['id']); ?>.html" target="_blank"><?php echo ($pktop4["title"]); ?></a></dd>
                <dd><?php echo ($pktop4["description"]); ?></dd>              </dl>
            </div>
            <div class="news_ft" style="height:200px;">
              <ul>
                <?php if(is_array($lists4)): $i = 0; $__LIST__ = $lists4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a style="float:left;" href="jiqiao/<?php echo ($data['lottory']); ?>/<?php echo ($data['id']); ?>.html" target="_blank"><?php echo ($data["title"]); ?></a><span style="float:right;"><?php echo (date("Y-m-d",$data["create_time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
            </div>
          </div>
          <div class="info_news news_bottom">
            <div class="news_hot">
              <h4>幸运飞艇</h4>
              <a href="/jiqiao/xyft/" target="_blank" class="gey_link fr">更多&gt;&gt;</a></div>
            <div class="news_bd">
              <dl>
                <dt><img src="/images/xyft-logo.png" width="82" height="82"></dt>
                <dd><a href="jiqiao/<?php echo ($pktop5['lottory']); ?>/<?php echo ($pktop5['id']); ?>.html" target="_blank"><?php echo ($pktop5["title"]); ?></a></dd>
                <dd><?php echo ($pktop5["description"]); ?></dd>              </dl>
            </div>
            <div class="news_ft">
              <ul>
               <?php if(is_array($lists5)): $i = 0; $__LIST__ = $lists5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a style="float:left;" href="jiqiao/<?php echo ($data['lottory']); ?>/<?php echo ($data['id']); ?>.html" target="_blank"><?php echo ($data["title"]); ?></a><span style="float:right;"><?php echo (date("Y-m-d",$data["create_time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>             </ul>
            </div>
          </div>
          
          
          
				   
				   
				</div>

		  </div>
	
	
	
	
	
<script src="/js/jquery.SuperSlide.2.1.1.js"></script>
          <div class="game_news_right fr">
        
				<div class="sideMenu" style="margin:0 auto">
			<h3 style="background:#f9f9f9;" class="on"><em></em>北京赛车开奖号码</h3>
			<ul style="display: block;">
			 <?php if(is_array($list_pk10)): $i = 0; $__LIST__ = $list_pk10;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?></span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
                    	<span><?=$numarr[5]?></span>
                    	<span><?=$numarr[6]?></span>
                    	<span><?=$numarr[7]?></span>
                    	<span><?=$numarr[8]?></span>
                    	<span><?=$numarr[9]?></span>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 

			</ul>
			<h3><em></em>重庆时时彩开奖号码</h3>
			<ul>
			<?php if(is_array($list_cqssc)): $i = 0; $__LIST__ = $list_cqssc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
                 
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>
			<h3><em></em>广东快乐十分开奖号码</h3>
			<ul>
			<?php if(is_array($list_gdkl10)): $i = 0; $__LIST__ = $list_gdkl10;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
						<span><?=$numarr[5]?></span>
                    	<span><?=$numarr[6]?></span>
                    	<span><?=$numarr[7]?></span>
                 
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>
			<h3><em></em>幸运农场开奖号码</h3>
			<ul>
			<?php if(is_array($list_xync)): $i = 0; $__LIST__ = $list_xync;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
						<span><?=$numarr[5]?></span>
                    	<span><?=$numarr[6]?></span>
                    	<span><?=$numarr[7]?></span>
                 
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>
			<h3><em></em>新疆时时彩开奖号码</h3>
			<ul>
			<?php if(is_array($list_xjssc)): $i = 0; $__LIST__ = $list_xjssc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
                 
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>
			<h3><em></em>天津时时彩开奖号码</h3>
			<ul>
			<?php if(is_array($list_tjssc)): $i = 0; $__LIST__ = $list_tjssc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>
 <h3><em></em>广东11选5开奖号码</h3>
			<ul>
			<?php if(is_array($list_gd11x5)): $i = 0; $__LIST__ = $list_gd11x5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                    	<span><?=$numarr[3]?></span>
                    	<span><?=$numarr[4]?></span>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>
			<h3 style="border-bottom:none"><em></em>江苏快三开奖号码</h3>
			<ul>
			<?php if(is_array($list_jsk3)): $i = 0; $__LIST__ = $list_jsk3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li>
                    <div class="openinfo"><span class="fl">第<?php echo ($data["dat_expect"]); ?>期</span> <span class="fr">
					<?php  echo date("H:i",$data["dat_open_time"]); $numarr = explode(",",$data["dat_codes"]); ?>
					</span></div>
                    <div class="opennumber">
                    	<span><?=$numarr[0]?></span>
                    	<span><?=$numarr[1]?></span>
                    	<span><?=$numarr[2]?></span>
                 
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?> 
 </ul>

		</div><!-- sideMenu End -->
		
		<script type="text/javascript">
			var ary = location.href.split("&");
			jQuery(".sideMenu").slide({titCell:"h3", targetCell:"ul",defaultIndex:0,effect:"slideDown",delayTime:300,returnDefault:true});
		</script>
		</div>
      </div>
</div>

<script src="js/indexqihao.js"  type="text/javascript"></script>


<block name="script">
    <script type="text/javascript" src="js/indexlotaward.js" ></script>

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