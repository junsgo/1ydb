<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?>﻿<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/header1.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/jquery.fullPage.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/base.min.css">
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo G_TEMPLATES_CSS; ?>/footer_header.js"></script>



<script type="text/javascript">
  function current(){ 
  var d=new Date(),str=''; 
  str +=d.getMonth()+1+'月'; //获取当前月份（0——11） 
  str +=d.getDate()+'日&nbsp;&nbsp;'; 
  str +=d.getHours()+':'; 
  str +=d.getMinutes()+':'; 
  str +=d.getSeconds()+''; 
  return str; } 
  setInterval(function(){$("#nowTime").html(current)},1000); 
</script>
  <style>
  .header-right{float: right;margin-right: 5px;margin-top: 20px;}
  .header-right a{
      display: block;
      width: 130px;text-align: center;
      height: 42px;line-height: 42px;background:#ff4a00;border-radius: 2px;color: #fff;font-size: 20px;
  }
  </style>

	

	<!--新闻列表-->
 <div class="footers">

        <div class="footer_change">
		<ul class="footerIn">
			<li>
				<span style="background-position: -119px -70px;height: 46px;margin-top: 7px"></span>
				<p>100%公平公正公开</p>
			</li>
			<li>
				<span style="background-position: -119px -122px;margin-top: 4px;height: 48px;"></span>
				<p>100%品质保障</p>
			</li>
			<li>
				<span style="background-position: -193px -22px;height: 39px;margin-top: 13px;"></span>
				<p>全国免运费（港澳除外）</p>
			</li>
			<li>
				<span style="background-position: -193px -62px;"></span>
				<p>100%权益保障</p>
			</li>
		</ul>
            <div class="footer">
                <div class="yFootSupport">
                    <div class="yFootSupport_in">
                            <dl>
                                <dt>新手指南</dt>
                                <dd><a href="<?php echo WEB_PATH; ?>/single/newbie" target="_blank">购物指南</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/1" target="_blank">常见问题</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/13" target="_blank">意见反馈</a></dd>
                            </dl>
                            <dl>
                                <dt>服务支持</dt>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/4" target="_blank">保障体系</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/6" target="_blank">隐私声明</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/3" target="_blank">风险提示</a></dd>
                            </dl>
                            <dl>
                                <dt>商品配送</dt>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/7" target="_blank">配送费用</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/9" target="_blank">验货签收</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/14" target="_blank">会员福利</a></dd>
                            </dl>
                            <dl>
                                <dt>关于我们</dt>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/1" target="_blank">了解我们</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/13" target="_blank">诚聘英才</a></dd>
                                <dd><a href="<?php echo WEB_PATH; ?>/help/13" target="_blank">联系我们</a></dd>
                            </dl>
                           <dl class="dl_Time">
                               <dd title="服务热线" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/images/phone.png) no-repeat 0px 5px;">0</dd>
                               <dd title="服务器时间" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/images/time.png) no-repeat 0px 6px;background-size:21px;" id='nowTime' class="sysTime">
                               </dd>
                               
                               <dd title="迅磊公益基金"  id="nowTime" class="sysTime" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/images/fund.png) no-repeat 0px 6px;background-size:21px;">
                                 <?php $mysql_model=System::load_sys_class('model'); ?><?php $fund_data=$this->DB()->GetOne("select * from `@#_fund` limit 1",array("cache"=>0)); ?>
                                 <?php if(defined('G_IN_ADMIN')) {echo '<div style="padding:8px;background-color:#F93; color:#fff;border:1px solid #f60;text-align:center"><b>This Tag</b></div>';}?>
                                  ￥<?php 
                                       echo intval($fund_data['fund_count_money']).".00";
                                    ?>
                               </dd>
                           </dl>
                        <dl class="dlLast">
                                <a href="">
                                    <dd class="dlLast-WeChat">
                                        <div class="y-popover">
                                            <span class="y-arrow"></span>
                                            <img src="<?php echo G_GLOBAL_STYLE; ?>/images/3.png" alt="">
                                            <b>扫二维码关注迅磊</b>
                                        </div>
                                    </dd>
                                </a>
                                <a href="">
                                    <dd class="dlLast-Sina">
                                        <div class="y-popover">
                                            <span class="y-arrow"></span>
                                            <img src="<?php echo G_GLOBAL_STYLE; ?>/images/3.png" alt="">
                                            <b>新浪微博</b>
                                        </div>
                                    </dd>
                                </a>
                                <a href="">
                                    <dd class="dlLast-apple">
                                        <div class="y-popover">
                                            <span class="y-arrow"></span>
                                            <img src="<?php echo G_GLOBAL_STYLE; ?>/images/3.png" alt="">
                                            <b>扫二维码下载</b>
                                        </div>
                                    </dd>
                                </a>
                                <a href="">
                                    <dd class="dlLast-Android">
                                        <div class="y-popover">
                                            <span class="y-arrow"></span>
                                            <img src="<?php echo G_GLOBAL_STYLE; ?>/images/3.png" alt="">
                                            <b>扫二维码下载</b>
                                        </div>
                                    </dd>
                                </a>
                            </dl>
                        </div>
                        <div class="footer-time-list">
                            <div class="yFootBottomRight">
                             &nbsp; Copyright ©2015  迅磊网络 版权所有 &nbsp; 技术支持： &nbsp;<a href="#" target="_blank" >迅磊网络</a> 
                            </div>
                            
                        </div>
                    </div>

               
            </div>
        </div>
    </div>	



	<!--end 新闻列表-->

	
	
	<!--右侧导航-->
<!-- .site-footer END -->
<script type="text/javascript">


window.onscroll = function () {

if (document.documentElement.scrollTop + document.body.scrollTop > 0) {

document.getElementById("returntop").style.display = "block";


}
else {


	
document.getElementById("returntop").style.display = "none";


}
} 


</script>
<div class="Left-fixed-divs" id="returntop">
	<ul>
	<li class="shoppingCartRightFix Left-fixed-divs3"><a target="_blank" href="<?php echo WEB_PATH; ?>/member/cart/cartlist" class="u-menus" id="btnMyCart"><i style="margin-top: -13px;"></i>
	<p style="margin-left: 34%;
font-size: 16px;color: #FFF;" id="sl">
				购</br>物</br>车<em style="width: 15px;">0</em>
                     
	</p>
				</a></li>
		
		<li class="YonlineService otherlifix"><a hidefocus="true" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" target="_blank"><i style="margin-left:12px;"></i><em>在线</em><em>客服</em></a></li>
		<li class="otherlifix otherlifixw">
			<a hidefocus="true" href="javascript:void 0">
				<i style="background-position:-168px -176px;"></i>
				<em>官方</em>
				<em>微信</em>
			</a>
			<img src="statics/plugin/style/images/3.png" height="216" width="188">
			<s></s>
		</li>
		<li class="otherlifix otherlifixw">
			<a hidefocus="true" target="_blank" href="?go/index/app">
				<i style="margin-left:12px;margin-top:0;background-position:-203px -172px;height: 27px;margin-bottom:0;"></i>
				<em>手机</em><em>App</em>
			</a>
			<!-- <img width="188" height="188" src="/static/img/front/index/weixinlogo.png" style="border:1px solid #adadad;"> -->

		</li>
		<li class="otherlifix">
			<a hidefocus="true" href="?member/home/userrecharge">
				<i style="margin-left:12px;background-position:-236px -176px;"></i>
				<em>快速</em><em>充值</em>
			</a>
		</li>
		<li class="otherlifix lifixTop">
			<i style="background-position:-276px -170px"></i>
			<em>置</em><em>顶</em>
		</li>
	</ul>
</div>

 	<!--end右下角揭晓-->
	<script type="text/javascript">
(function(){				
		var week = '日一二三四五六';
		var innerHtml = '{0}:{1}:{2}';
		var dateHtml = "{0}月{1}日 &nbsp;周{2}";
		var timer = 0;
		var beijingTimeZone = 8;				
				function format(str, json){
					return str.replace(/{(\d)}/g, function(a, key) {
						return json[key];
					});
				}				
				function p(s) {
					return s < 10 ? '0' + s : s;
				}			

				function showTime(time){
					var timeOffset = ((-1 * (new Date()).getTimezoneOffset()) - (beijingTimeZone * 60)) * 60000;
					var now = new Date(time - timeOffset);
					document.getElementById('sp_ServerTime').innerHTML = format(innerHtml, [p(now.getHours()), p(now.getMinutes()), p(now.getSeconds())]);				
					//document.getElementById('date').innerHTML = format(dateHtml, [ p((now.getMonth()+1)), p(now.getDate()), week.charAt(now.getDay())]);
				}				
				
				window.yungou_time = 	function(time){						
					showTime(time);
					timer = setInterval(function(){
						time += 1000;
						showTime(time);
					}, 1000);					
				}
	window.yungou_time(<?php echo time(); ?>*1000);
				
})();
				
				
				
$(document).ready(function(){
	try{  
       if(typeof(eval(pleasereg_initx))=="function"){
            pleasereg_initx();
	   }
    }catch(e){
       //alert("not function"); 
    }  
})
</script>
<script>
$(function(){
	$(".quick_cart").hover(
		function(){			
			$("#rCartlist,#rCartLoading").show();
			$("#rCartlist p,#rCartlist h3").hide(); 
			$("#rCartlist li").remove();
			$("#rCartTotal2").html("");
			$("#rCartTotalM").html("");
			$.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartshop/"+ new Date().getTime(),function(data){
				$("#rCartlist ul").append(data.li);
				$("#rCartTotal2").html(data.num);
				$("#rCartTotalM").html(data.sum);
				$("#rCartLoading").hide();
				$("#rCartlist ul,#rCartlist p,#rCartlist h3").show();				
			});
		},
		function(){
			$("#rCartlist,#rCartlist ul,#rCartlist p,#rCartlist h3").hide();
		}
	);
});
function delshop(id){
	var Cartlist = $.cookie('Cartlist');
	var info = $.evalJSON(Cartlist);
	var num=$("#rCartTotal2").html()-1;
	var sum=$("#rCartTotalM").html();
	info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];
		
	delete info[id];
	//$.cookie('Cartlist','',{path:'/'});
	$.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
	$("#rCartTotalM").html(info['MoenyCount']);
	$('#rCartTotal2').html(num);
	$('#sCartTotal').text(num);											
	$('#btnMyCart em').text(num);
	$("#shopid"+id).remove();
}
$(document).ready(function(){
	$.get("<?php echo WEB_PATH; ?>/member/cart/getnumber/"+ new Date().getTime(),function(data){
		$("#sCartTotal").text(data);											
		$("#btnMyCart em").text(data);											
	});
});
</script>
<script>

$(function(){

	$("#btnGotoTop").click(function(){
		$("html,body").animate({scrollTop:0},1500);
	});
	$("#btnFavorite,#addSiteFavorite").click(function(){
		var ctrl=(navigator.userAgent.toLowerCase()).indexOf('mac')!=-1?'Command/Cmd': 'CTRL';
		if(document.all){
	 
			window.external.addFavorite('<?php echo G_WEB_PATH; ?>','<?php echo _cfg("web_name"); ?>');
		}
		else if(window.sidebar){
		   window.sidebar.addPanel('<?php echo _cfg("web_name"); ?>','<?php echo G_WEB_PATH; ?>', "");
		}else{ 
			alert('您可以通过快捷键' + ctrl + ' + D 加入到收藏夹');
		}
    });
	$("#divRighTool a").hover(		
		function(){
			$(this).addClass("Current");
		},
		function(){
			$(this).removeClass("Current");
		}
	)	
	
 
});
	//云购基金
	$.ajax({
		url:"<?php echo WEB_PATH; ?>/api/fund/get",
		success:function(msg){
		var str='<i class="rmbf">￥</i>'+msg;
			$("#spanFundTotal").html(str);
		}
	});
</script>

 </body>
</html>