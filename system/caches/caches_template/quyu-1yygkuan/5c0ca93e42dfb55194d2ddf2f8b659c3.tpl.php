<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta property="qc:admins" content="372363545576117046375" />
<meta http-equiv="X-UA-Compatible" content="IE=8" /> 
    <link rel="shortcut icon" href=" /favicon.ico" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?php if(isset($keywords)): ?><?php echo $keywords; ?><?php  else: ?><?php echo _cfg("web_key"); ?><?php endif; ?>" />
    <meta name="description" content="<?php if(isset($description)): ?><?php echo $description; ?><?php  else: ?><?php echo _cfg("web_des"); ?><?php endif; ?>" />
    <title><?php if(isset($title)): ?><?php echo $title; ?><?php  else: ?><?php echo _cfg("web_name"); ?><?php endif; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/header.css" />
    <link href="<?php echo G_TEMPLATES_STYLE; ?>/css/register.css" rel="stylesheet" type="text/css" />
  
    <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/index2.css?date=20140731">
     <link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_CSS; ?>/Comm1.css?date=20140731">
    <script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/global/js/jquery-1.8.3.min.js"></script>

<!--新导航-->
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/Comm.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/register.css">
<link rel="stylesheet" type="text/css" href="<?php echo G_GLOBAL_STYLE; ?>/newnav/index_oo.css">
<script type="text/javascript" async="" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/ag.js"></script>
<script async="" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/analytics.js"></script>
<script src="<?php echo G_GLOBAL_STYLE; ?>/newnav/hm.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/index.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/jquery.lazyload.js"></script>
<script type="text/javascript">
  function setCookie(name,value,time){ 
      var strsec = getsec(time); 
      var exp = new Date(); 
      exp.setTime(exp.getTime() + strsec*1); 
      document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString(); 
  } 

  function getsec(str){ 
     //alert(str); 
     var str1=str.substring(1,str.length)*1; 
     var str2=str.substring(0,1); 
     if (str2=="s"){ 
          return str1*1000; 
     }else if (str2=="h"){ 
         return str1*60*60*1000; 
     }else if (str2=="d"){ 
         return str1*24*60*60*1000; 
     } 
  } 

  function getCookie(name) { 
      var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
   
      if(arr=document.cookie.match(reg))
          return unescape(arr[2]); 
      else 
          return null; 
  } 

  function delCookie(name) { 
      var exp = new Date(); 
      exp.setTime(exp.getTime() - 1); 
      var cval=getCookie(name); 
      if(cval!=null) 
          document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
  } 


  function init(){
    $(".outbj").show();
    $(".ad").show();
    $(window).resize(function(){
      $(".outbj").css({width:$(document).width()+"px",height:$(document).height()+"px"});
      $(".ad").css({top:($(window).height()-591)/2+"px",left:($(window).width()-436)/2+"px"});
    })
    $(window).resize();
    $(".closeBtn").click(function(){
      $(".outbj").hide();
      $(".ad").hide();
    })
  }
  $(function() {
    if(!getCookie("my")){
        init();
        setCookie('my','111','d1');
      }
  });
   $(document).ready(function(){

      $("#pageflip").hover(function(){
        $("#pageflip img , .msg_block").stop().animate({width: '100px', height: '100px'}, 500); 
      },function(){
        $("#pageflip img").stop().animate({width: '50px', height: '50px'}, 220);
        $(".msg_block").stop().animate({width: '50px', height: '50px'}, 200);
      });

    });
</script>

<style type="text/css">
  #pageflip{right:0px;position:fixed;top:0px;z-index: 1;}
  #pageflip img{z-index: 1;right: 0px;width: 50px;position: absolute;top: 0px;height: 52px;ms-interpolation-mode: bicubic;}
  .msg_block{right:0px;width:50px;position:absolute;overflow:hidden;top:0px;background:url(statics/templates/quyu-1yygkuan/images/sijiao/page_flip.png) no-repeat right top;height:50px}
  .yNavIndex .yMenuIndex .look_index_nav{position: relative;width: 120px;padding: 0px 40px 0px 0px;}
  .yNavIndex .yMenuIndex .look_index_nav a.look_index_nava{color:#ec610c;position:relative;}
  .yNavIndex .yMenuIndex .look_index_nav:hover a.look_index_nava{display: block; margin-top:-6px; margin-left:-5px; padding: 5px 0px 5px 15px; overflow: hidden; background-color: #fff; border: 1px solid #ddd; border-bottom: 0; box-shadow: 0 2px 4px #ccc; width: 138px;}
  .yNavIndex .yMenuIndex .look_index_nav a.look_index_nava:hover{font-weight: normal;}
  .yNavIndex .yMenuIndex .look_index_nav dl {position: absolute; z-index: 10; width: 162x; left: -5px; background: #fff; border: 1px solid #ddd; box-shadow: 0 2px 4px #ccc;border-top: 0; padding: 10px 0 10px 0;top: 33px;display:none;}
    .yNavIndex .yMenuIndex .look_index_nav dl dd a{color: #8d8d8d;display:block;padding-right:0px;width:142px;}
     .yNavIndex .yMenuIndex .look_index_nav dl dd a:hover{border:0px;font-weight: normal;color:#666;background:#f3f3f3;}
     .yNavIndex .yMenuIndex .look_index_nav:hover dl{display:block;}

     .ico-dot {
    position: absolute;
    width: 6px;
    height: 6px;
    overflow: hidden;
    border-radius: 50%;
    background: #db3652;
    box-shadow: 0px 0px 0 rgba(219,54,82,0);
    -webkit-animation: breath 0.8s 3 ease-in-out;
    -moz-animation: breath 0.8s 3 ease-in-out;
    -o-animation: breath 0.8s 3 ease-in-out;
    -ms-animation: breath 0.8s 3 ease-in-out;
    animation: breath 0.8s 3 ease-in-out;
     top: 2px;
    left: 54px;
  }
  .yNavIndex .yMenuIndex .look_index_nav:hover a.look_index_nava .ico-dot{display:none;}
  @-webkit-keyframes breath{0%{box-shadow:0px 0px 0 rgba(219,54,82,0);}50%{box-shadow:0px 0px 5px rgba(219,54,82,1);}100%{box-shadow:0px 0px 0 rgba(219,54,82,0);}}@-moz-keyframes breath{0%{box-shadow:0px 0px 0 rgba(219,54,82,0);}50%{box-shadow:0px 0px 5px rgba(219,54,82,1);}100%{box-shadow:0px 0px 0 rgba(219,54,82,0);}}@-o-keyframes breath{0%{box-shadow:0px 0px 0 rgba(219,54,82,0);}50%{box-shadow:0px 0px 5px rgba(219,54,82,1);}100%{box-shadow:0px 0px 0 rgba(219,54,82,0);}}@-ms-keyframes breath{0%{box-shadow:0px 0px 0 rgba(219,54,82,0);}50%{box-shadow:0px 0px 5px rgba(219,54,82,1);}100%{box-shadow:0px 0px 0 rgba(219,54,82,0);}}@keyframes breath{0%{box-shadow:0px 0px 0 rgba(219,54,82,0);}50%{box-shadow:0px 0px 5px rgba(219,54,82,1);}100%{box-shadow:0px 0px 0 rgba(219,54,82,0);}}
</style>
<script language="javascript" type="text/javascript" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/wpa.php"></script>
</head>

<script type="text/javascript" src="<?php echo G_TEMPLATES_JS; ?>/jquery.cookie.js"></script>
    
</head>
<body>
<style>

@charset "utf-8";
html,body,h1,h2,h3,h4,h5,h6,hr,p,iframe,dl,dt,dd,ul,ol,li,pre,form,fieldset,button,input,textarea,th,td{
	margin:0;
	padding:0;
}

body{
	background-color:#FFF;
}

body,button,input,select,textarea,fieldset,label{
	font:12px/1.5 "\5FAE\8F6F\96C5\9ED1",Arial;
	color:#666;
}

h1,h2,h3,h4,h5,h6{
	font-size:100%;
	font-weight:normal;
}

ul,ol{
	list-style:none;
}

fieldset,img{
	border:0 none;
}

img{
	-ms-interpolation-mode:bicubic;
	color:#999;
}

cite,strong,em,i{
	font-style:normal;
	font-weight:normal;
}

table{
	border-collapse:collapse;
	border-spacing:0;
}

input,select,textarea,button{
	font-size:100%;
	-webkit-box-sizing:content-box;
	-moz-box-sizing:content-box;
	box-sizing:content-box;
}

button,input[type=button],input[type=submit]{
	cursor:pointer;
}

input[type=search]{
	-webkit-appearance:textfield;
}

textarea{
	overflow-y:auto;
	resize:vertical;
}

.clear,.clrfix{
	zoom:1;
}

.clear:after,.clrfix:after{
	content:' ';
	display:block;
	clear:both;
	height:0;
	visibility:hidden;
}

.hidden,.hide{
	display:none;
}

a{
	text-decoration:none;
	outline:none;
	blr:expression(this.onFocus=this.blur());
}

a:focus{
	outline:none;
	-moz-outline:none;
}

*html,*html body{
	background-image:url(about:blank);
	background-attachment:fixed;
}

.fl{
	float:left;
}

.fr{
	float:right;
}

.orange{
	color:#f60!important;
}

.gray3{
	color:#333;
}

.gray6{
	color:#666!important;
}

.gray9{
	color:#999;
}

.blue{
	color:#2af;
}

.f-mar-left{
	margin-left:10px!important;
}

body{
	min-width:1002px;
	-webkit-text-size-adjust:none;
	_background-image:url(about:blank);
	_background-attachment:fixed;
	*line-height:1.5;
}

.mlr5{
	margin:0 5px;
}

.ml10{
	margin-left:10px;
}

.Hicon,.F-msg-close,.U_sina s,.U_qq s,.U_wx s,.F-icon-guest s,.F-icon-gray s,.M-nav-help a s,.search_submit,.search_submit_hover,.m-app-dow-img,.u-banner-close,.F-number-l,.F-number-r,.F-bg,.F-android-img,.F-wx-img,.M-wx .F-txt b i,.F-security-img,.F-goods-img,.F-goods-arrow,.m-popup-close a,.u-popup-Tip s,.u-popup-Tip i,u-popup-Tip b,.f-user-qq,.f-pay-succeed,.f-pay-fail,.roll_close a{
	background:url(../images/header-icon.png?v=1120);
}

.orange_btn,.orange_bg_btn{
	background:#f60;
	color:#fff;
	font-size:16px;
	display:inline-block;
	border-radius:2px;
}

.orange_btn:hover{
	background:#f40;
	color:#fff;
}

.g-popup{
	margin:0 auto;
	z-index:99;
}

.g-buy-frame,.g-user-frame{
	position:relative;
}

.m-popup-buy{
	text-align:center;
	padding-top:30px;
	padding-bottom:30px;
}

.u-popup-remaining{
	font-size:14px;
	line-height:28px;
}

.u-popup-Tip{
	line-height:30px;
	height:30px;
}

.u-popup-balance{
	line-height:30px;
	font-size:14px;
}

.g-popup .orange_btn{
	line-height:36px;
	font-size:14px;
	padding:0 40px;
}

.g-popup .m-popup-close a{
	background-position:-15px -20px;
	width:9px;
	height:9px;
	display:inline-block;
	position:absolute;
	right:10px;
	top:10px;
}

.m-popup_buybtn span{
	color:#FFF001;
}

.u-popup-Tip s,.u-popup-Tip i{
	width:16px;
	height:16px;
	display:inline-block;
	vertical-align:-3px;
	margin-right:5px;
}

.u-popup-Tip s{
	background-position:-126px -274px;
}

.u-popup-Tip i{
	background-position:-154px -274px;
}

.u-popup-paytip{
	background:#FEFEE4;
	border:1px solid #F60;
	margin:0 62px;
	padding:5px 0;
}

.u-popup-paytip .u-popup-paymoney{
	font-size:16px;
	padding-bottom:4px;
}

.u-popup-paytip .u-popup-payRecharge{
	font-size:14px;
}

.u-popup-paytip .blue span{
	font-family:宋体;
}

.num_del,.num_add,.num_dig{
	width:28px;
	height:28px;
	overflow:hidden;
	display:inline-block;
	border:1px solid #cfcfcf;
	text-align:center;
	font-size:24px;
	color:#999;
	line-height:28px;
	vertical-align:middle;
	background:#f4f4f4;
}

.u-popup-number{
	width:220px;
	margin:0 auto;
}

.u-popup-number label,.u-popup-number a,.u-popup-number input{
	float:left;
	outline:0;
}

.u-popup-number label{
	line-height:30px;
}

.num_del{
	margin-left:5px;
}

.num_add{
	margin-right:5px;
}

.num_ban{
	color:#ccc;
	cursor:default;
}

.num_ban:hover{
	color:#ccc;
}

.num_dig{
	width:65px;
	background:#fff;
	line-height:28px;
	border-left:none;
	border-right:none;
	font-size:18px;
}

.g-pay-tip{
	position:relative;
	margin:35px auto 55px;
	width:300px;
}

div.pageDialogMain .g-pay-tip p{
	margin-left:60px;
	padding:0;
}

.g-pay-tip .f-pay-succeed,.g-pay-tip .f-pay-fail{
	width:42px;
	height:42px;
	display:inline-block;
	position:absolute;
	left:0;
	top:0;
	float:left;
}

.g-pay-tip .f-pay-succeed{
	background-position:-45px -306px;
}

.g-pay-tip .f-pay-fail{
	background-position:0 -306px;
}

.g-pay-tip .f-pay-tit{
	font-size:20px;
	height:30px;
}

.g-pay-tip .f-pay-btn{
	margin-top:48px;
}

.g-pay-tip p.gray9 a.gray6:hover{
	color:#f60!important;
	text-decoration:underline;
}

.g-submit{
	margin:65px 0;
}

.g-submit .f-submit-tit{
	text-align:center;
	font-size:16px;
	margin-bottom:15px;
}

.u-progress{
	width:200px;
	height:8px;
	overflow:hidden;
	border-radius:5px;
	box-shadow:inset 0 1px 1px rgba(0,0,0,0.2);
	background:#f7f7f7;
	margin:0 auto;
}

.u-progress .pgbar,.u-progress .pging{
	display:block;
	width:100%;
	height:100%;
}

.u-progress .pging{
	background:-webkit-gradient(linear,0% 0,100% 100%,from(rgba(0,0,0,0)),to(rgba(254,232,175,1)),color-stop(25%,rgba(0,0,0,0)),color-stop(25%,rgba(254,232,175,1)),color-stop(50%,rgba(254,232,175,1)),color-stop(50%,rgba(0,0,0,0)),color-stop(75%,rgba(0,0,0,0)),color-stop(75%,rgba(254,232,175,1)));
	background:-webkit-linear-gradient(-45deg,rgba(0,0,0,0) 0,rgba(0,0,0,0) 25%,rgba(254,232,175,1) 25%,rgba(254,232,175,1) 50%,rgba(0,0,0,0) 50%,rgba(0,0,0,0) 75%,rgba(254,232,175,1) 75%,rgba(254,232,175,1));
	background:-moz-linear-gradient(-45deg,rgba(0,0,0,0) 0,rgba(0,0,0,0) 25%,rgba(254,232,175,1) 25%,rgba(254,232,175,1) 50%,rgba(0,0,0,0) 50%,rgba(0,0,0,0) 75%,rgba(254,232,175,1) 75%,rgba(254,232,175,1));
	background:-ms-linear-gradient(-45deg,rgba(0,0,0,0) 0,rgba(0,0,0,0) 25%,rgba(254,232,175,1) 25%,rgba(254,232,175,1) 50%,rgba(0,0,0,0) 50%,rgba(0,0,0,0) 75%,rgba(254,232,175,1) 75%,rgba(254,232,175,1));
	background:linear-gradient(-45deg,rgba(0,0,0,0) 0,rgba(0,0,0,0) 25%,rgba(254,232,175,1) 25%,rgba(254,232,175,1) 50%,rgba(0,0,0,0) 50%,rgba(0,0,0,0) 75%,rgba(254,232,175,1) 75%,rgba(254,232,175,1));
	-webkit-background-size:10px 10px;
	-moz-background-size:10px 10px;
	-ms-background-size:10px 10px;
	background-size:10px 10px;
	-webkit-animation:pging 0.5s linear infinite;
	-moz-animation:pging 0.5s linear infinite;
	-ms-animation:pging 0.5s linear infinite;
	animation:pging 0.5s linear infinite;
}

@-webkit-keyframes pging{
	0%{
		background-position:0 0;
	}

	100%{
		background-position:10px 0;
	}

}

@-moz-keyframes pging{
	0%{
		background-position:0 0;
	}

	100%{
		background-position:10px 0;
	}

}

@-ms-keyframes pging{
	0%{
		background-position:0 0;
	}

	100%{
		background-position:10px 0;
	}

}

@keyframes pging{
	0%{
		background-position:0 0;
	}

	100%{
		background-position:10px 0;
	}

}

.u-progress-c3 .pgbar{
	background:#FF9D4B;
	background:-webkit-gradient(linear,0% 0,0% 100%,from(#FF9D4B),to(#FF9D4B));
	background:-webkit-linear-gradient(#FF9D4B,#FF9D4B);
	background:-moz-linear-gradient(#FF9D4B,#FF9D4B);
	background:-ms-linear-gradient(#FF9D4B,#FF9D4B);
	background:linear-gradient(#FF9D4B,#FF9D4B);
}

body.home .nav-main li.f-nav-home,body.lottery .nav-main li.f-nav-lottery,body.share .nav-main li.f-nav-share,body.group .nav-main li.f-nav-group,body.cooperation .nav-main li.f-nav-invite,body.helper .nav-main li.f-nav-guide,body.thanks .nav-main li.f-nav-thanks,body.limit .nav-main li.f-nav-limit{
	background:#f04900;
	line-height:40px;
}

.F_goods_rq,.F_goods_xp,.F_goods_tj,.F_goods_xg{
	background-image:url(../images/index-2014.png?v=150414);
	background-repeat:no-repeat;
}

.search a.seaIcon i,.m-menu-all h3 em,.nav-cart-btn i.f-cart-icon,a.u-cart s,.u-mui-tab li.f-cart a.u-menus i,.nav-main li.f-nav-thanks span,.u-shortcut .u-float-list i,.cartEmpty i,.g-toolbar li.u-arr .u-menu-hd{
	display:block;
	background-image:url(../images/head-2014.png?v=0415);
	background-repeat:no-repeat;
}

.m-ser li .u-icons,.g-special li em,.u-cartEmpty i,.m-cart-login li.other-login a b,.m-narrow-list .u-float-list i,a.delete-close:hover,.limitbuy-icon{
	display:block;
	background-image:url(../images/comm-2014.gif?v=150410);
	background-repeat:no-repeat;
}

.f-tran{
	font-family:"\5b8b\4f53";
}

.f-tran-prev{
	margin-right:5px;
}

.f-tran-next{
	margin-left:5px;
}

.w1190{
	clear:both;
	width:1190px;
	margin:0 auto;
}

.w1190:after{
	display:block;
	visibility:hidden;
	clear:both;
	height:0;
	overflow:hidden;
	content:'.';
}

a.u-now,a.u-cart{
	float:left;
	display:block;
	height:35px;
	line-height:35px;
	text-align:center;
	border-radius:2px;
}

a.u-now{
	float:left;
	width:136px;
	background:#f60;
	color:#fff;
	font-size:16px;
	margin:0 7px 0 31px;
	display:inline;
}

a.u-now:hover{
	background:#f40;
}

a.u-cart{
	width:60px;
	background:#ffac4a;
}

a.u-cart s{
	display:block;
	width:21px;
	height:27px;
	background-position:0 -70px;
	margin:4px auto;
}

a.u-cart:hover{
	background:#f92;
}

.g-progress{
	height:48px;
	margin:0 auto;
	overflow:hidden;
}

.g-progress dl.m-progress{
	width:216px;
	overflow:hidden;
}

.g-progress dl.m-progress dt{
	width:216px;
	height:6px;
	overflow:hidden;
	background:#ddd;
	margin-bottom:5px;
}

.g-progress dl.m-progress dt b{
	display:block;
	height:6px;
	filter:progid:DXImageTransform.Microsoft.Gradient(startColorStr='#ff934b',endColorStr='#ff6601',gradientType='1');
	background:-moz-linear-gradient(0deg,#ff934b,#ff6601);
	background:-webkit-gradient(linear,0% 0,100% 0,from(#ff934b),to(#ff6601));
	background:-ms-linear-gradient(left,#ff934b 0,#ff6601 100%);
	background:-o-linear-gradient(0deg,#ff934b,#ff6601);
}

.g-progress dl.m-progress dd{
	font-size:12px;
}

.g-progress dl.m-progress dd span{
	height:36px;
	color:#bbb!important;
	line-height:16px;
}

.g-progress dl.m-progress dd span.orange{
	width:33%;
}

.g-progress dl.m-progress dd span.gray6{
	width:34%;
	text-align:center;
}

.g-progress dl.m-progress dd span.blue{
	width:33%;
	text-align:right;
}

.g-progress dl.m-progress dd span em{
	display:block;
	font-size:14px;
}

.g-progress dl.m-progress dd span.orange em{
	color:#f60;
}

.g-progress dl.m-progress dd span.gray6 em{
	color:#666;
}

.g-progress dl.m-progress dd span.blue em{
	color:#2af;
}

.g-toolbar{
	width:100%;
	height:36px;
	border-bottom:1px solid #ddd;
	position:relative;
	z-index:99;
	background:#fff;
	-moz-box-shadow:1px 1px 1px #f7f7f7;
	-webkit-box-shadow:1px 1px 1px #f7f7f7;
	box-shadow:1px 1px 1px #f7f7f7;
}

.g-toolbar .w1190{
	margin:0 auto;
}

.g-toolbar li{
	float:left;
	height:36px;
	position:relative;
	z-index:0;
}

.g-toolbar li a{
	color:#666;
}

.g-toolbar li a:hover{
	color:#f60;
	text-decoration:underline;
}

.g-toolbar li .u-menu-hd{
	float:left;
	height:20px;
	line-height:18px;
	padding:8px 10px;
	position:relative;
	z-index:93;
}

.g-toolbar li .u-select{
	background:#fff;
	position:absolute;
	top:36px;
	left:0;
	z-index:90;
	border:1px solid #ddd;
	border-top:0 none;
	display:none;
	overflow:hidden;
}

.g-toolbar li .u-select span{
	display:block;
	padding-left:11px;
	text-align:left;
	margin-bottom:7px;
}

.g-toolbar li.f-gap s{
	width:0;
	height:12px;
	font-size:0;
	display:inline-block;
	border-left:1px solid #ddd;
	overflow:hidden;
	margin:12px 0;
}

.g-toolbar .f-top-arrow{
	position:absolute;
	top:6px;
	right:17px;
	display:block;
	cursor:pointer;
}

.g-toolbar .f-top-arrow cite,.g-toolbar .f-top-arrow b{
	font-size:17px;
	_font-size:8px;
	font-weight:bold;
	color:#666;
	top:0;
	*+top:0;
	top:0\0;
	position:absolute;
}

.g-toolbar .f-top-arrow b{
	top:-2px;
	*+top:-2px;
	top:-2px\0;
	color:#fff;
	font-family:inherit!important;
}

.g-toolbar li.u-arr-hover .f-top-arrow{
	top:9px;
	_top:8px;
}

.g-toolbar li.u-arr-hover .f-top-arrow cite{
	color:#f60;
}

.g-toolbar li.u-arr-hover .f-top-arrow b{
	top:2px;
	*+top:2px;
	top:2px\0;
}

.g-toolbar li.f-collect .u-menu-hd{
	padding:8px 10px 8px 0;
	_padding:9px 17px 7px 0;
}

.g-toolbar li.u-arr,.g-toolbar li.u-arr-1yyg,.g-toolbar li.u-arr-news{
	position:relative;
}

.g-toolbar li.u-arr .u-menu-hd{
	width:59px;
	padding:8px 12px 8px 27px;
	_padding:9px 12px 7px 27px;
	background-position:-41px 11px;
}

.g-toolbar li.u-arr .u-select{
	width:96px;
	height:96px;
	padding:5px 0 3px;
	text-align:center;
}

.g-toolbar li.u-arr .u-select a{
	line-height:20px;
	text-align:center;
}

.g-toolbar li.u-arr .u-select img{
	display:block;
	width:75px;
	height:75px;
	margin:0 auto 2px;
}

.g-toolbar li .u-menu-login{
	overflow:hidden;
}

.g-toolbar li .u-menu-login a{
	float:left;
}

.g-toolbar li .u-menu-login a.blue{
	color:#2af;
	margin-right:10px;
	position:relative;
	_top:1px;
}

.g-toolbar li .u-menu-login span{
	display:block;
	width:25px;
	height:25px;
	position:relative;
	top:-3px;
	margin-right:5px;
	overflow:hidden;
}

.g-toolbar li .u-menu-login span img{
	display:block;
	width:25px;
	height:25px;
	border-radius:25px;
	overflow:hidden;
}

.g-toolbar li .u-menu-login span s{
	display:block;
	width:25px;
	height:25px;
	background:url(http://skin.1yyg.com/images/top_head.png) no-repeat;
	position:absolute;
	top:0;
	left:0;
}

.g-toolbar li.u-arr-1yyg .u-menu-hd{
	width:77px;
}

.g-toolbar li.u-arr-1yyg .u-select{
	width:95px;
	height:77px;
	padding-top:3px;
}

.g-toolbar li.u-arr-news .u-menu-hd{
	width:35px;
	height:21px;
	margin-bottom:-1px;
}

.g-toolbar li.u-arr-news .u-menu-hd em{
	font-size:0;
	width:7px;
	height:7px;
	border-radius:7px;
	background:#f60;
	position:absolute;
	top:9px;
	right:21px;
	overflow:hidden;
}

.g-toolbar li.u-arr-hover .u-menu-hd em{
	right:20px;
}

.g-toolbar li.u-arr-news .u-select{
	width:87px;
	height:76px;
	padding-top:3px;
	border-top:1px solid #ddd;
}

.g-toolbar li.u-arr-news .u-select a em{
	display:inline-block;
	min-width:13px;
	height:15px;
	padding:0 1px;
	border-radius:15px;
	line-height:14px;
	text-align:center;
	color:#fff;
	background:#f60;
	margin-left:3px;
	position:relative;
	_top:1px;
}

.g-toolbar li.u-arr-news .u-select a em.three-digit{
	padding-left:2px;
	line-height:7px;
	top:-5px;
	*top:3px;
}

.g-toolbar li i{
	display:block;
	float:left;
	background-position:0 0;
	position:relative;
	top:-2px;
	left:-2px;
	_left:0;
}

.g-toolbar li.f-zxkf .u-menu-hd{
	padding:8px 0 8px 17px;
	overflow:hidden;
}

a.u-service i{
	display:block;
	float:left;
	width:24px;
	height:24px;
	cursor:pointer;
}

a.u-service:hover{
	text-decoration:underline;
}

a.u-service-on,a.u-service-on:hover{
	color:#f60!important;
}

a.u-service-off,a.u-service-off:hover{
	color:#666!important;
}

a.u-service-on i{
	background:url(../images/service-on-2014.gif) no-repeat;
}

a.u-service-off i{
	background:url(../images/service-off-2014.gif) no-repeat;
}

.g-toolbar li.u-arr-hover .u-menu-hd{
	padding:8px 11px 8px 26px;
	background-color:#fff;
	border-left:1px solid #ddd;
	border-right:1px solid #ddd;
	background-position:-42px -28px;
}

.g-toolbar li.u-arr-hover .u-menu-hd a{
	color:#f60;
}

.g-toolbar li.u-arr-1yyg.u-arr-hover .u-menu-hd,.g-toolbar li.u-arr-news.u-arr-hover .u-menu-hd{
	padding:8px 9px;
}

.g-toolbar ul.fl li.u-arr-hover .u-menu-hd{
	_padding:9px 9px 7px;
}

.g-toolbar li.u-arr-hover .u-select{
	display:block;
}

.g-header{
	clear:both;
	height:110px;
	background:#fff;
}

.logo_1yyg{
	width:260px;
	height:110px;
	background-repeat:no-repeat;
}

.logo_1yyg a.logo{
	float:left;
	display:block;
	width:122px;
	height:74px;
	background:url(../images/logo-2014.gif) no-repeat;
	margin: 30px -5px;
}

.logo_1yyg a.u-top-ad{
	float:left;
	display:block;
	width:100px;
	height:110px;
}

.search_cart_wrap{
	width:930px;
	height:110px;
	position:relative;
	z-index:0;
}

.number{
	width:380px;
	height:29px;
	margin-left:115px;
	text-align:center;
	padding-top:59px;
}

.number p{
	color:#666;
	font-size:14px;
	display:block;
	float:left;
}

.number ul{
	float:left;
	position:relative;
}

.number a{
	display:block;
	width:380px;
	height:29px;
	cursor:pointer;
}

.number a li{
	display:block;
	width:21px;
	color:#f60;
	position:relative;
}

.number li{
	float:left;
	display:block;
	font-size:24px;
	height:27px;
	line-height:27px;
	text-align:center;
	margin:0 2px;
	border-radius:1px;
	border:1px solid #ddd;
	overflow:hidden;
}

.number li.num{
	background:#fff;
}

.number li.nobor{
	width:10px;
	border:0 none;
}

.number li.gray6{
	width:56px;
	font-size:14px;
	line-height:29px;
	_line-height:31px;
}

.number li cite{
	display:block;
	width:21px;
	position:absolute;
	top:0;
	left:0;
	z-index:1;
}

.number li em{
	display:block;
	width:21px;
}

.number li i{
	width:196px;
	height:0;
	border-top:1px solid #ededed;
	position:absolute;
	top:13px;
	left:0;
	z-index:0;
}

.number li.u-secondary{
	width:40px;
	position:relative;
	text-align:left;
}

.number li.u-secondary b{
	display:block;
	width:7px;
	height:11px;
	background-position:-26px 0;
	position:absolute;
	top:9px;
	right:0;
}

.number li.u-secondary b{
	border-style:solid;
	border-width:4px 0 4px;
	border-color:#fff;
	border-left:4px solid rgb(102,102,102);
	width:0;
	height:0;
	font-size:0;
	line-height:0;
	position:absolute;
	left:33px;
	top:11px;
}

.number li.u-secondary b s{
	border-style:solid;
	_border-style:dashed;
	border-width:3px;
	border-color:transparent;
	border-left-width:0;
	border-left:3px solid #fff;
	width:0;
	height:0;
	font-size:0;
	line-height:0;
	position:absolute;
	top:-3px;
	left:-5px;
}

.search{
	width:367px;
	position:absolute;
	top:50px;
	right:0;
}

.search .form{
	float:left;
	border:1px solid #ccc;
	border-right:0 none;
	width:280px;
	height:36px;
	position:relative;
}

.search .form input{
	position:absolute;
	left:0;
	top:0;
	z-index:0;
	color:#bbb;
	width:145px;
	height:18px;
	line-height:18px;
	border:0 none;
	padding:9px 130px 9px 5px;
	outline:0;
}

.search .form span{
	height:36px;
	position:absolute;
	top:0;
	right:0;
	z-index:10;
}

.search .form span a{
	display:block;
	float:left;
	width:35px;
	height:20px;
	line-height:20px;
	background:#eee;
	color:#666;
	margin:8px 7px 0 0;
	display:inline;
	text-align:center;
	cursor:pointer;
}

.search .form a:hover{
	background:#ddd;
	color:#666;
}

.search a.seaIcon{
	display:block;
	float:left;
	width:70px;
	height:30px;
	background:#f60;
	padding-top:8px;
	cursor:pointer;
}

.search a.seaIcon:hover{
	background:#f40;
}

.search a.seaIcon i{
	display:block;
	width:21px;
	height:21px;
	background-position:0 0;
	margin:0 auto;
}

.g-nav{
	width:1190px;
	height:40px;
	line-height:40px;
	margin:0 auto;
	background:#f60;
	color:#fff;
}

.g-nav .w1190{
	position:relative;
	z-index:20;
}

.g-nav a{
	font-size:16px;
}

.m-menu{
	width:240px;
	height:40px;
	float:left;
	background:#2af;
	position:relative;
	z-index:60;
}

.m-menu-all{
	width:240px;
	position:absolute;
	left:0;
	top:0;
	z-index:20;
}

.m-menu-all h3 a{
	display:block;
	width:222px;
	height:40px;
	padding-left:18px;
	position:relative;
	z-index:5;
	color:#fff;
}

.m-menu-all h3 a:hover{
	color:#fff;
}

.m-menu-all h3 em{
	display:block;
	width:16px;
	height:10px;
	background-position:0 -25px;
	_background-position:0 -24px;
	position:absolute;
	right:16px;
	top:15px;
	overflow:hidden;
}

.m-all-sort{
	width:238px;
	height:438px;
	background:#fff;
	border:1px solid #21a5f7;
	border-top:0 none;
	position:absolute;
	left:0;
	top:40px;
	z-index:200;
	overflow:hidden;
	display:none;
}

.m-all-sort dl{
	clear:both;
	border-top:1px solid #e6e6e6;
	margin-top:-1px;
	padding:13px 0 18px;
	height:42px;
	line-height:25px;
	overflow:hidden;
}

.m-all-sort dl.hover{
	background:#fffdf0;
	width:238px;
	height:42px;
	padding:13px 0 18px;
	position:relative;
	z-index:10;
}

.m-all-sort dl.hover dt a,.m-all-sort dl.hover dt span{
	color:#f60;
}

.m-all-sort dl.hover i{
	background:url(../images/shadow-2014.gif) repeat-x;
	width:238px;
	padding:12px 0 18px;
	height:42px;
	height:3px;
	position:absolute;
	bottom:-30px;
	_bottom:-45px;
	left:0;
}

.m-all-sort dl a{
	color:#666;
}

.m-all-sort dl a:hover{
	color:#f60;
	text-decoration:underline;
}

.m-all-sort dt{
	padding-left:15px;
}

.m-all-sort dt a{
	font-size:16px;
	color:#333;
}

.m-all-sort dt span{
	margin:0 3px;
	color:#333;
	position:relative;
	top:-2px;
}

.m-all-sort dd a{
	margin-left:15px;
	font-size:12px;
}

.nav-main li{
	float:left;
}

.nav-main li a{
	display:block;
	padding:0 32px;
	color:#fff;
}

.nav-main li a:hover{
	background:#f04900;
	color:#fff;
}

.nav-main li.f-nav-home a{
	padding:0 31px 0 32px;
}

.nav-main li.f-nav-thanks{
	position:relative;
}

@-webkit-keyframes bounce-horizontal{
	0%,10%,20%,30%,40%,60%,70%,80%,100%{
		-webkit-transform:translateY(0);
	}

	50%{
		-webkit-transform:translateY(-1px);
	}

	90%{
		-webkit-transform:translateY(-1px);
	}

}

@keyframes bounce-horizontal{
	0%,10%,20%,30%,40%,60%,70%,80%,100%{
		transform:translateY(0);
	}

	50%{
		transform:translateY(-1px);
	}

	90%{
		transform:translateY(-1px);
	}

}

.nav-main li.f-nav-thanks span{
	display:block;
	background-position:0 -106px;
	width:20px;
	height:14px;
	position:absolute;
	top:2px;
	right:16px;
	-webkit-animation-name:bounce-horizontal;
	animation-name:bounce-horizontal;
	-webkit-animation-duration:1000ms;
	-ms-animation-duration:1000ms;
	animation-duration:1000ms;
	-webkit-animation-iteration-count:infinite;
	-ms-animation-iteration-count:infinite;
	animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-ms-animation-timing-function:ease-in-out;
	animation-timing-function:ease-in-out;
	-webkit-animation-delay:0s;
	-ms-animation-delay:0s;
	animation-delay:0s;
	-webkit-animation-play-state:running;
	-ms-animation-play-state:running;
	animation-play-state:running;
}

.nav-cart{
	width:135px;
	height:40px;
	background:#2af;
	position:relative;
	z-index:20;
}

.nav-cart-btn a{
	display:block;
	color:#fff;
	height:40px;
	line-height:40px;
	padding-left:42px;
	position:relative;
	cursor:pointer;
}

.nav-cart-btn a:hover{
	color:#fff;
	text-decoration:underline;
}

.nav-cart-btn i.f-cart-icon{
	display:block;
	width:21px;
	height:20px;
	float:left;
	background-position:0 -44px;
	position:absolute;
	top:10px;
	left:17px;
	display:inline;
}

.nav-cart-con{
	width:239px;
	height:500px;
	background:#fff;
	border:1px solid #2af;
	position:absolute;
	right:0;
	_right:-1px;
	z-index:20;
	font-size:12px;
	display:none;
	overflow:hidden;
}

.g-footer{
	clear:both;
	width:100%;
	border-top:1px solid #ddd;
	background:#fff;
	-moz-box-shadow:-1px -2px 1px #f7f7f7;
	-webkit-box-shadow:-1px -2px 1px #f7f7f7;
	box-shadow:-1px -2px 1px #f7f7f7;
}

.g-guide dl{
	float:left;
	width:120px;
	padding:30px 59px 25px;
}

.g-guide dt{
	font-size:20px;
	color:#333;
	padding-bottom:20px;
}

.g-guide dd{
	font-size:14px;
	line-height:23px;
}

.g-guide dd a{
	color:#999;
}

.g-guide dd a:hover{
	color:#f60;
	text-decoration:underline;
}

.g-service{
	clear:both;
	height:100px;
}

.m-ser{
	float:left;
	width:237px;
	height:98px;
	border:1px solid #ddd;
	margin-right:-1px;
	font-size:14px;
	color:#999;
}

.m-ser li{
	float:left;
}

.m-ser li .u-icons{
	display:block;
}

.m-ser li dd a{
	display:block;
	text-align:center;
	color:#fff;
	border-radius:2px;
}

.m-ser li i{
	float:left;
}

.m-ser dt{
	padding-bottom:6px;
}

.u-ser1{
	width:236px;
}

.u-ser1 ul{
	padding:11px 0 0 9px;
}

.u-ser1 dl{
	padding-left:19px;
}

.u-ser1 dt{
	padding-bottom:3px;
}

.u-ser1 li s{
	width:69px;
	height:78px;
	background-position:-61px 0;
}

.u-ser1 li dd b{
	width:96px;
	height:18px;
	background-position:-85px -86px;
}

.u-ser1 li dd a{
	width:110px;
	height:32px;
	line-height:32px;
	background:#f60;
	margin-top:5px;
}

.u-ser2 ul{
	padding:13px 0 0 12px;
}

.u-ser2 dl{
	padding-left:11px;
}

.u-ser2 li dt i{
	width:20px;
	height:16px;
	background-position:0 0;
	position:relative;
	top:1px;
	margin-right:3px;
}

.u-ser2 li dt a{
	color:#999;
}

.u-ser2 li dd b{
	width:112px;
	height:40px;
	background-position:0 -104px;
}

.u-ser2 li dd i{
	margin-right:3px;
	position:relative;
	top:1px;
}

.u-ser3 ul{
	padding-top:19px;
}

.u-ser3 dl{
	padding-left:8px;
}

.u-ser3 li s{
	width:72px;
	height:79px;
	background-position:-141px 0;
}

.u-ser3 li dd{
	font-size:24px;
}

.u-ser3 li dd span{
	width:35px;
	height:40px;
	line-height:40px;
	text-align:center;
	background:#f60;
	border-radius:2px;
	display:inline-block;
	color:#fff;
}

.u-ser3 li dd em{
	color:#f60;
}

.u-ser4 ul{
	padding-top:19px;
}

.u-ser4 dl{
	padding-left:8px;
}

.u-ser4 li s{
	width:72px;
	height:79px;
	background-position:-301px 0;
}

.u-ser4 li dd a{
	width:136px;
	height:39px;
	line-height:39px;
	background:#94d45b;
	font-size:18px;
}

.u-ser5 ul{
	padding-top:19px;
}

.u-ser5 dl{
	padding-left:8px;
}

.u-ser5 dt{
	padding-bottom:0;
}

.u-ser5 li s{
	width:80px;
	height:79px;
	background-position:-216px 0;
}

.u-ser5 li dd{
	color:#bbb;
	font-size:12px;
	line-height:18px;
}

.u-ser5 li dd.u-tel{
	font-size:20px;
	line-height:24px;
}

.u-ser5 li dd a{
	text-align:left;
	padding-top:5px;
}

.u-ser5 li dd a i{
	position:relative;
	top:-3px;
	margin-right:2px;
}

.g-special{
	clear:both;
	margin:15px 0;
	height:50px;
	padding:10px 0;
	border:1px solid #ddd;
	overflow:hidden;
}

.g-special li{
	float:left;
	width:273px;
	position:relative;
	padding-left:123px;
	height:50px;
}

.g-special li a{
	color:#bbb;
	cursor:pointer;
	display:block;
}

.g-special li em{
	display:block;
	width:50px;
	height:50px;
	position:absolute;
	left:68px;
	top:0;
}

.g-special li span{
	display:block;
	font-size:18px;
	color:#333;
	_padding-top:7px;
}

.g-special li em.u-spc-icon1{
	background-position:-199px -91px;
}

.g-special li em.u-spc-icon2{
	background-position:-253px -91px;
}

.g-special li em.u-spc-icon3{
	background-position:-308px -91px;
}

.g-copyrightCon{
	clear:both;
	background:#fff;
}

.g-links{
	text-align:center;
	padding:5px 0;
}

.g-links a{
	color:#666;
}

.g-links a:hover{
	color:#f60;
	text-decoration:underline;
}

.g-links s{
	border-left:1px solid #ddd;
	width:0;
	height:12px;
	margin:0 11px 0 15px;
	overflow:hidden;
	font-size:0;
	display:inline-block;
	position:relative;
	top:1px;
}

.g-copyright{
	text-align:center;
	color:#999;
}

.g-authentication{
	clear:both;
	text-align:center;
	padding:15px 0 8px;
}

.g-authentication a{
	background:url(../images/icon.png) no-repeat;
	width:90px;
	height:32px;
	display:inline-block;
	margin:0 2px;
}

.g-authentication a.fi_ectrustchina{
	background-position:0 0;
}

.g-authentication a.fi_315online{
	background-position:0 -32px;
}

.g-authentication a.fi_qh{
	background-position:0 -96px;
}

.g-authentication a.fi_cnnic{
	background-position:0 -64px;
}

.g-authentication a.fi_anxibao{
	background-position:-1px -128px;
}

.g-authentication a.fi_pingan{
	background-position:0 -160px;
}

.g-authentication a.fi_yangshi{
	background-position:0 -192px;
}

.g-suspension-float{
	width:34px;
	height:200px;
	position:fixed;
	right:0;
	z-index:20;
	bottom:10px;
	display:none;
}

*html .g-suspension-float{
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)-10));
	_bottom:auto;
	_position:absolute;
}

.g-suspension-float .m-floatCon{
	width:280px;
	position:absolute;
	right:-246px;
}

.m-floatCon .u-mid{
	width:34px;
	height:200px;
	display:block;
	position:absolute;
	top:0;
	left:0;
	z-index:11;
}

.u-mui-tab{
	width:34px;
	height:200px;
	position:absolute;
	top:0;
	right:0;
}

.u-mui-tab li{
	display:block;
	width:34px;
	float:left;
	position:relative;
}

.u-mui-tab li a.u-menus{
	width:34px;
	cursor:pointer;
}

.u-mui-tab li.f-both-top{
	height:20px;
}

.u-mui-tab li.f-both-top a.u-menus{
	height:20px;
	background-position:0 0;
}

.u-mui-tab li.f-cart{
	height:40px;
}

.u-mui-tab li.f-cart a.u-menus{
	height:40px;
	background:#999;
	position:relative;
}

.u-mui-tab li.f-cart a.u-menus:hover,.u-mui-tab li.f-cart a.current{
	background:#666;
}

.u-mui-tab li.f-cart a.u-menus i{
	width:21px;
	height:20px;
	background-position:0 -44px;
	position:absolute;
	top:14px;
	left:7px;
}

.u-mui-tab li.f-cart a.u-menus em{
	padding:0 1px;
	min-width:12px;
	height:14px;
	border-radius:14px;
	line-height:14px;
	text-align:center;
	color:#fff;
	background:#f60;
	position:absolute;
	top:3px;
	left:12px;
	_left:14px;
	font-size:10px;
}

.u-mui-tab li.f-customer{
	height:40px;
}

.u-mui-tab li.f-customer a.u-menus{
	height:40px;
	background:url(../images/service2-on-2014.gif?v=141125) no-repeat;
}

.u-mui-tab li.f-customer a.u-customer-off{
	background:url(../images/service2-off-2014.gif?v=141125) no-repeat;
}

.u-mui-tab li.f-customer a.u-menus:hover{
	background-position:-35px -48px;
}

.u-mui-tab li.f-edit{
	height:40px;
}

.u-mui-tab li.f-edit a.u-menus{
	display:block;
	height:40px;
	background-position:0 -88px;
}

.u-mui-tab li.f-edit a.u-menus:hover{
	height:40px;
	background-position:-35px -88px;
}

.u-mui-tab li.f-top{
	height:40px;
}

.u-mui-tab li.f-top a.u-menus{
	height:40px;
	background-position:0 -122px;
}

.u-mui-tab li.f-top a.u-menus:hover{
	background-position:-35px -122px;
}

.u-mui-tab li.f-both-bottom{
	height:20px;
}

.u-mui-tab li.f-both-bottom a.u-menus{
	height:20px;
	background-position:0 -162px;
}

.u-mui-tab a.u-menus,.u-mui-tab li.f-customer a.u-menus:hover,.u-mui-tab li.f-customer a.current{
	display:block;
	background-image:url(../images/float-2014.png?v=141124);
	background-repeat:no-repeat;
}

.u-mui-tab li a.u-menus span.f-fly-num{
	background:#f60;
	width:15px;
	height:15px;
	line-height:13px;
	text-align:left;
	color:#fff;
	border-radius:15px;
	letter-spacing:-2px;
	border:1px solid #f60;
	z-index:9999;
}

.g-suspension-change{
	height:160px;
}

.g-suspension-change .m-floatCon{
	height:160px;
}

.g-suspension-change .m-floatCon .u-mid{
	height:160px;
}

.g-suspension-change .m-floatCon .u-mui-tab{
	height:160px;
}

.g-suspension-change .u-mui-tab li{
	float:none;
}

.u-commodity{
	width:244px;
	height:340px;
	background:#fff;
	border:1px solid #bbb;
	position:absolute;
	bottom:-200px;
	right:0;
	z-index:10;
	overflow:hidden;
}

.u-commodity-list dl{
	clear:both;
	width:234px;
	height:51px;
	padding:8px 0 8px 10px;
	border-bottom:1px solid #eee;
	position:relative;
	overflow:hidden;
}

.u-commodity-list dl:hover,.u-commodity-list dl.hover{
	background:#f4f4f4;
}

.u-commodity-list dd span{
	float:left;
}

.u-commodity-list dd span img{
	display:block;
	width:50px;
	height:50px;
}

.u-commodity-list span.u-ygrc{
	width:140px;
	height:50px;
	overflow:hidden;
	margin:0 5px 0 10px;
	display:inline;
	color:#333;
	line-height:20px;
	padding-top:5px;
}

.u-commodity-list span.u-ygrc cite{
	display:block;
}

.f-seeAll-btn{
	clear:both;
	width:244px;
	height:22px;
	background:#eee;
}

.f-seeAll-btn a{
	display:block;
	width:243px;
	height:22px;
	line-height:21px;
	color:#666;
	text-align:center;
}

.f-seeAll-btn a:hover{
	color:#f60;
}

.f-seeAll-btn a i{
	padding-left:3px;
}

.f-settlement{
	height:50px;
	height:32px;
	padding:9px 10px;
}

.f-settlement p{
	line-height:18px;
	position:relative;
	top:-2px;
}

.f-settlement p span{
	font-size:14px;
}

.f-settlement p i{
	margin-left:2px;
}

.f-settlement a{
	display:block;
	width:80px;
	height:32px;
	line-height:32px;
	text-align:center;
	color:#fff;
	background:#f60;
	border-radius:2px;
	font-size:16px;
}

.f-settlement a:hover{
	background:#f40;
}

.u-instruction-arrow cite{
	border-style:solid;
	border-width:5px 0 5px;
	border-color:#666;
	border-right:5px solid rgb(102,102,102);
	width:0;
	height:0;
	font-size:0;
	line-height:0;
	position:absolute;
	right:0;
	top:14px;
}

.u-instruction-arrow cite em{
	border-style:solid;
	_border-style:dashed;
	border-width:5px;
	border-color:transparent;
	border-right-width:0;
	border-right:5px solid #fff;
	width:0;
	height:0;
	font-size:0;
	line-height:0;
	position:absolute;
	top:-5px;
	left:-3px;
}

.g-narrow-con{
	display:none;
}

.g-outer{
	position:fixed;
	_position:absolute;
	width:37px;
	z-index:99;
	top:0;
	right:0;
	_right:-1px;
	bottom:0;
	background:#c4bab3;
	display:none;
}

*html .g-outer{
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)-0));
	_bottom:auto;
	_position:absolute;
}

.g-status-standard{
	position:relative;
}

.m-banner-list{
	width:37px;
	height:100%;
	background:#c4bab3;
	display:block;
	position:relative;
	z-index:11;
}

.u-sentence{
	width:37px;
	height:180px;
	position:fixed;
	_position:absolute;
	right:0;
	_right:-1px;
	top:0;
}

.u-sentence span{
	display:block;
	background-image:url(../images/sentence.gif?v=0123);
	width:37px;
	height:180px;
}

.u-sentence cite{
	width:37px;
	overflow:hidden;
}

.u-sentence cite img{
	display:block;
}

.u-shortcut{
	width:37px;
	position:fixed;
	_position:absolute;
	right:0;
	_right:-1px;
	bottom:0;
}

.u-shortcut li{
	float:left;
	height:56px;
	border-top:1px solid #cdc2bb;
	position:relative;
}

.u-shortcut li .u-float-list a{
	color:#fff;
}

.u-shortcut li .u-float-list a:hover,.u-shortcut li.cart-hover .u-float-list a{
	background:#9f948d;
}

.u-shortcut li .u-float-list cite{
	background:#9f948d;
}

.u-float-list{
	display:block;
	width:37px;
	height:56px;
	_overflow:hidden;
}

.u-float-list a{
	display:block;
	height:56px;
	color:#fff;
	cursor:pointer;
}

.u-float-list i{
	display:block;
	margin:0 auto;
	background-repeat:no-repeat;
	position:relative;
	z-index:8;
}

.u-float-list cite{
	width:25px;
	height:32px;
	margin:0 auto;
	line-height:16px;
	display:block;
	padding-top:12px;
	_padding-top:13px;
	overflow:hidden;
	display:none;
	position:relative;
	z-index:9;
}

.u-shortcut li.f-shopping-cart{
	border-top:0 none;
}

.u-shortcut li.f-shopping-cart,.u-shortcut li.f-shopping-cart a{
	height:133px;
	position:relative;
}

.u-shortcut li.f-shopping-cart a,.u-shortcut li.f-shopping-cart a:hover{
	background:#f60;
}

.u-shortcut li.f-shopping-cart a i{
	display:block;
	width:21px;
	height:20px;
	background-position:0 -44px;
	position:absolute;
	top:30px;
	left:8px;
}

.u-shortcut li.f-shopping-cart a em{
	display:inline-block;
	min-width:12px;
	height:14px;
	padding:0 1px;
	border-radius:12px;
	text-align:center;
	line-height:13px;
	background:#fff;
	overflow:hidden;
	position:absolute;
	left:11px;
	top:16px;
	color:#f60;
	font-size:10px;
	border:2px solid #f40;
}

.u-shortcut li.f-shopping-cart a span{
	display:block;
	width:11px;
	position:absolute;
	top:55px;
	left:13px;
	font-size:14px;
}

.u-shortcut li.f-shopping-cart b.curr-arrow{
	border-color:#f60;
	border-left:4px solid rgb(238,238,238);
	top:62px;
}

.u-float-list strong.f-fly-num{
	background:#fff;
	width:15px;
	height:15px;
	line-height:13px;
	text-align:left;
	color:#f60;
	border-radius:15px;
	letter-spacing:-2px;
	z-index:9999;
}

.u-shortcut li.f-customer-service i{
	background-image:url(../images/customer-on.gif?v=0127);
	width:34px;
	height:40px;
	top:8px;
}

.u-shortcut li.f-customer-service a.z-customer-off i{
	background-image:url(../images/customer-off.gif?v=0126);
}

.u-shortcut li.f-client i{
	background-position:0 -142px;
	width:13px;
	height:20px;
	top:18px;
}

.u-shortcut li.f-weixin i{
	background-position:0 -166px;
	width:20px;
	height:16px;
	top:20px;
}

.u-shortcut li.f-feedback i{
	background-position:0 -186px;
	width:16px;
	height:16px;
	top:20px;
}

.u-shortcut li.f-back-to i{
	background-position:0 -206px;
	width:20px;
	height:15px;
	top:20px;
}

li.f-back-to a cite{
	padding-top:20px;
}

b.curr-arrow{
	border-style:solid;
	border-width:4px 0 4px 0;
	border-color:#9f948d;
	border-left:4px solid rgb(255,255,255);
	width:0;
	height:0;
	font-size:0;
	line-height:0;
	position:absolute;
	left:0;
	bottom:24px;
	z-index:5;
	display:none;
}

.u-activate{
	width:97px;
	height:113px;
	text-align:center;
	border:1px solid #c4bab3;
	border-right:0 none;
	background:#fff;
	position:absolute;
	bottom:-1px;
	right:37px;
	_right:36px;
	display:none;
}

.u-activate img{
	display:block;
	width:75px;
	height:106px;
	padding:9px 11px 0;
	width:75px;
	height:75px;
	margin-bottom:5px;
}

.u-activate a{
	color:#666;
}

.u-activate a:hover{
	color:#f60;
}

li.cart-hover .u-activate{
	display:block;
}

li.cart-hover .u-float-list i{
	display:none!important;
}

li.cart-hover .u-float-list cite{
	display:block;
}

li.cart-hover b.curr-arrow{
	display:block;
}

.u-shortcut li.f-checked b.curr-arrow{
	display:block;
}

.m-unfold-cart{
	width:240px;
	height:340px;
	background:#eee;
	border:1px solid #c4bab3;
	border-right:0 none;
	position:absolute;
	top:0;
	right:-241px;
	z-index:5;
	overflow:hidden;
	display:none;
}

.f-unfold-title{
	height:33px;
	overflow:hidden;
	display:none;
}

.f-unfold-title a{
	color:#666;
	cursor:pointer;
}

.f-unfold-title a:hover{
	color:#f60;
}

.f-unfold-title span{
	padding:7px 0 0 9px;
	font-weight:bold;
}

.f-unfold-title cite{
	padding:4px 6px 6px 0;
}

.f-unfold-title cite a{
	display:block;
	width:60px;
	height:22px;
	text-align:center;
	line-height:22px;
	border:1px solid #ddd;
	background:#fff;
}

.f-unfold-con{
	width:228px;
	padding:0 6px;
	position:relative;
}

.loading-2015{
	width:240px;
	height:50px;
	margin:0 auto;
}

.loading-2015 em{
	background:url(../images/goods_loading2.gif) no-repeat;
	width:50px;
	height:50px;
	margin:0 auto;
	display:block;
}

.cartEmpty{
	text-align:center;
	font-size:14px;
	height:89px;
	position:relative;
	color:#666;
	display:none;
}

.cartEmpty i{
	display:block;
	width:54px;
	height:53px;
	background-position:0 -228px;
	margin:0 auto 15px;
}

.scrollcontent{
	background:#fff;
	position:relative;
	overflow:hidden;
	box-shadow:0 1px 2px #ddd,1px 0 2px #ddd;
	display:none;
}

.scrollcontent .unfold-list{
	clear:both;
	width:228px;
	display:none;
}

.scrollcontent .unfold-list dl{
	clear:both;
	width:220px;
	height:60px;
	padding:8px 0 8px 10px;
	border-bottom:1px solid #eee;
	position:relative;
	overflow:hidden;
}

.scrollcontent .unfold-list dl:hover,.unfold-list dl.hover{
	background:#f7f7f7;
}

.scrollcontent .unfold-list dd{
	float:left;
}

.scrollcontent .unfold-list dd img{
	display:block;
	width:60px;
	height:60px;
}

.scrollcontent .unfold-list dd p{
	width:124px;
	height:60px;
	display:block;
	overflow:hidden;
}

.scrollcontent .unfold-list dd p.three-row{
	display:none;
}

.scrollcontent .unfold-list dd b{
	display:block;
	width:26px;
	height:15px;
	background-position:0 -33px;
	position:absolute;
	left:10px;
	top:8px;
}

.scrollcontent .unfold-list dd.z-ygrc{
	width:133px;
	height:60px;
	padding-top:7px;
	overflow:hidden;
	margin:0 5px;
	display:inline;
	color:#333;
	line-height:20px;
}

.scrollcontent .unfold-list dd.z-ygrc p{
	width:133px;
}

.scrollcontent .unfold-list dl.hover dd.z-ygrc{
	height:60px;
	padding-top:0;
}

.scrollcontent .unfold-list dl.hover p.two-row{
	display:none;
}

.scrollcontent .unfold-list dl.hover p.three-row{
	display:block;
}

.scrollcontent .unfold-list dd.z-ygrc span{
	display:block;
}

.scrollcontent .unfold-list dd.z-ygrc cite{
	display:block;
	color:#f60;
}

.scrollcontent .unfold-list dd.z-ygrc cite em{
	color:#666;
}

.scrollcontent .unfold-list dd.z-ygrc span.modify{
	width:87px;
	height:22px;
	background:#fff;
	border:1px solid #ccc;
	overflow:hidden;
}

.scrollcontent .unfold-list dd.z-ygrc span.modify a,.unfold-list dd.z-ygrc span.modify input{
	float:left;
	height:22px;
}

.scrollcontent .unfold-list dd.z-ygrc span.modify a{
	width:23px;
	text-align:center;
	font-size:20px;
	color:#666;
}

.scrollcontent .unfold-list dd.z-ygrc span.modify a:hover{
	color:#f60;
}

.scrollcontent .unfold-list dd.z-ygrc span.modify a.unclick,.scrollcontent .unfold-list dd.z-ygrc span.modify a.unclick:hover{
	color:#ccc;
	cursor:default;
}

.scrollcontent .unfold-list dd.z-ygrc input{
	display:block;
	width:39px;
	text-align:center;
	line-height:22px;
	border:0 none;
	border-left:1px solid #d2d2d2;
	border-right:1px solid #d2d2d2;
}

dd.z-close{
	position:absolute;
	right:20px;
	top:32px;
}

a.delete-close{
	display:block;
	background:url(../images/cart-close.png?v=141120) 2px 2px no-repeat;
	width:7px;
	height:7px;
	padding:2px;
	cursor:pointer;
	display:none;
}

a.delete-close:hover{
	background-position:-37px 0;
}

dl:hover dd a.delete-close,dl.hover dd a.delete-close{
	display:block;
}

.scrollcontent .iscroll-drap-parent{
	width:4px;
	position:absolute;
	top:2px;
	bottom:2px;
	right:0;
}

.scrollcontent .iscroll-drap-parent a{
	display:block;
	width:4px;
	background:#000;
	border-radius:2px;
	position:absolute;
	right:2px;
	cursor:pointer;
	opacity:0.2;
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=20);
}

.scrollcontent .iscroll-drap-parent a:hover{
	opacity:0.3;
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=30);
}

.f-unfold-pay{
	width:240px;
	padding-bottom:5px;
	font-size:14px;
	position:absolute;
	left:0;
	right:0;
	bottom:0;
	display:none;
}

.f-unfold-pay li.total-txt{
	height:24px;
	line-height:24px;
	margin:3px 0;
	font-size:14px;
	text-align:center;
}

.f-unfold-pay li.total-txt b{
	font-size:16px;
}

.f-unfold-pay li.total-txt em{
	margin:0 2px;
}

.f-unfold-pay li.accounts-btn a{
	display:block;
	width:220px;
	height:32px;
	line-height:32px;
	text-align:center;
	color:#fff;
	background:#f60;
	border-radius:2px;
	margin:0 auto;
}

.f-unfold-pay li.accounts-btn a:hover{
	background:#f40;
}

.m-cart-login{
	width:239px;
	height:227px;
	border:1px solid #c4bab3;
	position:absolute;
	top:0;
	_top:168px;
	right:37px;
	z-index:5;
	background:#fff;
	display:none;
}

.m-cart-login a.delete-close{
	display:block;
	position:absolute;
	top:5px;
	right:5px;
}

.g-outer{
	display:none;
}

.g-narrow-con{
	position:fixed;
	_position:absolute;
	width:37px;
	height:285px;
	z-index:99;
	bottom:8px;
	right:8px;
	_right:-1px;
	background:#fff;
}

*html .g-narrow-con{
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)-5));
	_bottom:auto;
	_position:absolute;
}

.m-narrow-list{
	width:37px;
	height:285px;
	border-bottom:1px solid #ddd;
}

.m-narrow-list li{
	float:left;
	width:37px;
	height:57px;
	position:relative;
}

.m-narrow-list li .u-float-list{
	width:37px;
	height:57px;
}

.m-narrow-list li .u-float-list a{
	width:35px;
	height:56px;
	border:1px solid #ddd;
	border-bottom:0 none;
	-webkit-transition:background-color 0.3s ease;
	-moz-transition:background-color 0.3s ease;
	-o-transition:background-color 0.3s ease;
	transition:background-color 0.3s ease;
}

.m-narrow-list li.cart-hover .u-float-list a{
	width:37px;
	height:57px;
	border:0 none;
	background:#f60;
}

.m-narrow-list li.f-customer-service i{
	background-image:url(../images/customer-on-gray.gif?v=0127);
	width:34px;
	height:40px;
	top:8px;
}

.m-narrow-list li.f-customer-service a.z-customer-off i{
	background-image:url(../images/customer-off-gray.gif?v=0126);
}

.m-narrow-list li.f-client i{
	background-position:-380px 0;
	width:13px;
	height:20px;
	top:18px;
}

.m-narrow-list li.f-weixin i{
	background-position:-380px -26px;
	width:20px;
	height:16px;
	top:20px;
}

.m-narrow-list li.f-feedback i{
	background-position:-380px -48px;
	width:16px;
	height:16px;
	top:20px;
}

.m-narrow-list li.f-back-to i{
	background-position:-380px -70px;
	width:20px;
	height:15px;
	top:20px;
}

.m-narrow-list li .u-float-list a cite{
	color:#fff;
}

.m-narrow-list li .activateCon{
	width:99px;
	height:113px;
	position:absolute;
	right:37px;
	bottom:-1px;
	display:none;
}

.m-narrow-list li .u-activate{
	border:1px solid #ddd;
	right:5px;
	bottom:0;
}

.m-narrow-list li b.curr-arrow{
	border-color:#fff;
	border-left:5px solid rgb(221,221,221);
	left:-5px;
	-webkit-transition-property:border-color;
	-webkit-transition-duration:3s;
	-webkit-transition-timing-function:ease;
}

.m-narrow-list li b.curr-arrow s{
	border-style:solid;
	_border-style:dashed;
	border-width:5px;
	border-color:transparent;
	border-left-width:0;
	border-left:5px solid #fff;
	width:0;
	height:0;
	font-size:0;
	line-height:0;
	position:absolute;
	top:-5px;
	right:-3px;
}

.m-narrow-list li.cart-hover .activateCon{
	display:block;
}

.g-main-con .g-loading-2014 i{
	display:block;
	background-image:url(../images/goods_loading.gif?v=141105);
	width:100px;
	height:100px;
	margin:100px auto;
}

.g-main-con .g-pagination{
	clear:both;
	text-align:center;
	font-size:14px;
	height:31px;
	padding-top:50px;
}

.g-main-con .g-pagination span{
	height:31px;
	line-height:31px;
	color:#999;
	margin:0 4px;
	padding:50px 0;
}

.g-main-con .g-pagination span a{
	display:inline-block;
	height:29px;
	line-height:29px;
	text-align:center;
	color:#999;
	padding:0 10px;
	border:1px solid #e6e6e6;
	cursor:pointer;
}

.g-main-con .g-pagination span a:hover{
	border:1px solid #f60;
	color:#f60;
}

.g-main-con .g-pagination span.f-noClick a{
	color:#cbcbcb;
	background:#f4f4f4;
	cursor:default;
}

.g-main-con .g-pagination span.f-noClick a:hover{
	color:#cbcbcb;
	border:1px solid #e6e6e6;
}

.g-main-con .g-pagination span.current a{
	background:#f60;
	border:1px solid #f60;
	color:#fff;
	font-weight:bold;
}

.g-main-con .g-pagination span em{
	margin:0 3px;
}

.g-main-con .g-pagination span input{
	border-width:1px;
	border-style:solid;
	border-color:#bfbfbf #e6e6e6 #e6e6e6 #bfbfbf;
	width:45px;
	height:29px;
	line-height:29px;
	text-align:center;
	margin-right:3px;
	background:#f9f9f9;
	color:#9d9d9d;
	position:relative;
	*top:5px;
}

.user_experience{
	width:34px;
	height:160px;
	position:fixed;
	right:0;
	z-index:20;
	display:none;
}

*html .user_experience{
	_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,286)||0)-(parseInt(this.currentStyle.marginBottom,286)||0)-286));
	_bottom:auto;
	_position:absolute;
}

.user_experience a{
	display:block;
	width:34px;
	height:160px;
	background-image:url(http://skin.1yyg.com/images/question.gif);
	background-repeat:no-repeat;
}

.banner-prompt{
	width:100%;
	height:35px;
	line-height:35px;
	border-bottom:1px solid #e9e9e9;
	color:#ff2929;
	background:#fff;
}

.banner-prompt span{
	font-size:14px;
}

.banner-prompt span a.ckxq{
	color:#ff2929;
	margin-left:15px;
	font-weight:bold;
}

.banner-prompt span a.ckxq:hover{
	text-decoration:underline;
}

.banner-prompt span a.close{
	display:block;
	cursor:pointer;
	background:url(../images/banner-close.gif?v=150210);
	width:15px;
	height:15px;
	position:relative;
	top:10px;
	_top:9px;
	overflow:hidden;
}

.logo_1yyg a.logo,a.delete-close,.g-toolbar li .u-menu-login span s{
	behavior:expression(this.src = this.src ? this.src:this.currentStyle.backgroundImage.split('"')[1],this.style.background = "none",this.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src="+this.src+",sizingMethod='crop')");
}

@media screen and (max-width:1190px){
	body{
		min-width:990px;
	}

	.w1190{
		width:990px;
	}

	.search_cart_wrap{
		width:730px;
	}

	.number{
		margin-left:15px;
	}

	.g-nav{
		width:100%;
	}

	.m-menu{
		float:left;
		width:198px;
	}

	.m-menu-all{
		width:198px;
		overflow:hidden;
	}

	.m-all-sort{
		width:196px;
	}

	.m-menu-all h3 a{
		width:180px;
	}

	.m-all-sort{
		width:196px;
	}

	.m-all-sort dl.hover{
		width:196px;
	}

	.m-all-sort dt{
		padding-left:10px;
	}

	.m-all-sort dd a{
		margin-left:10px;
	}

	.nav-main li a{
		padding:0 20px 0 21px;
	}

	.nav-main li.f-nav-home a{
		padding:0 21px 0 22px;
	}

	.nav-main li.f-nav-thanks span{
		right:3px;
	}

	.g-guide dl{
		padding:30px 39px 25px;
	}

	.g-service{
		height:98px;
		border:1px solid #ddd;
	}

	.m-ser{
		width:247px;
		border:0 none;
		border-left:1px solid #ddd;
		margin-left:-1px;
	}

	.u-ser1{
		display:none;
	}

	.g-special li{
		width:239px;
		padding-left:90px;
	}

	.g-special li em{
		left:35px;
	}

}

body.f-width-change .w1190{
	width:990px;
}

body.f-width-change .search_cart_wrap{
	width:730px;
}

body.f-width-change .number{
	margin-left:15px;
}

body.f-width-change .g-nav{
	width:100%;
}

body.f-width-change .m-menu{
	float:left;
	width:198px;
}

body.f-width-change .m-menu-all{
	width:198px;
	overflow:hidden;
}

body.f-width-change .m-all-sort{
	width:196px;
}

body.f-width-change .m-menu-all h3 a{
	width:180px;
}

body.f-width-change .m-all-sort{
	width:196px;
}

body.f-width-change .m-all-sort dl.hover{
	width:196px;
}

body.f-width-change .m-all-sort dt{
	padding-left:10px;
}

body.f-width-change .m-all-sort dd a{
	margin-left:10px;
}

body.f-width-change .nav-main li a{
	padding:0 20px 0 21px;
	display:block;
}

body.f-width-change .nav-main li.f-nav-home a{
	padding:0 21px 0 22px;
}

body.f-width-change .nav-main li.f-nav-thanks span{
	right:3px;
}

body.f-width-change .g-guide dl{
	padding:30px 39px 25px;
}

body.f-width-change .g-service{
	height:98px;
	border:1px solid #ddd;
}

body.f-width-change .m-ser{
	width:247px;
	border:0 none;
	border-left:1px solid #ddd;
	margin-left:-1px;
}

body.f-width-change .u-ser1{
	display:none;
}

body.f-width-change .g-special li{
	width:239px;
	padding-left:90px;
}

body.f-width-change .g-special li em{
	left:35px;
}

.g-toolbar li a.cctv-icon{
	display:block;
	padding-left:14px;
	text-decoration:none;
	line-height:36px;
}

.cctv-icon-img{
	vertical-align:middle;
	margin-top:-4px;
	*margin-top:-2px;
}

.g-toolbar li a.cctv-icon:hover{
	color:#333;
	text-decoration:none;
}

</style>
<body id="loadingPicBlock" class="home" rf="1" >
<SCRIPT language=javascript>
<!--
window.onerror=function(){return true;}
// -->
</SCRIPT>



<style>  
 .g-snow-con {
position: relative;
top: 130px;
z-index: 1001;
margin-bottom: -30px;
}
.g-snow {
background:none;
height: 30px;
_width: 1211px;
_margin: 0 auto;
}
.g-snow2 {
background:none;
height: 30px;
_width: 1012px;
_margin: 0 auto;
display: none;
} 
    .d {
 
 top: 0px;
 margin-top: 0px;
 padding-top:0px;
 margin-right: auto;
 margin-bottom: 0;
 margin-left: auto;
 background-color:#FFF;
 background-repeat: no-repeat;
 background-position: center top; 
} </style>

<!--自动置顶导航&GOTOP按钮
<style>
#goTopBtn {position: fixed;line-height:38px;width:38px;bottom:35px;height:38px;cursor:pointer;display:none;
background:url(<?php echo G_GLOBAL_STYLE; ?>/gotop/back_to_top_white.gif);}
</style>
<div id="goTopBtn" style=""></div>
<script type="text/javascript">
  $(window).scroll(function(){
           var sc=$(window).scrollTop();
           var rwidth=$(window).width()
          if(sc>150){
                $("#goTopBtn").css("display","block");
                $("#goTopBtn").css("left",(rwidth-138)+"px")
                $("#fixednav").css("position","fixed");
                $("#fixednav").css("top","0px");
                $("#fixednav").css("left","0px");
                $("#fixednav").css("right","0px");
                $("#fixednav").css("margin-left","auto");
                $("#fixednav").css("margin-right","auto");
                $("#fixednav").css("z-index","999");
                $("#fixednav").css("background","#fff");
                }else{
            $("#goTopBtn").css("display","none");
            $("#fixednav").css("position","relative");
                }
          })
            
      $("#goTopBtn").click(function(){
          var sc=$(window).scrollTop();
         $('body,html').animate({scrollTop:0},500);
          })        
</script>
自动置顶导航/-->

<div id="divSnow" class="g-snow-con clrfix">
        <div class="g-snow"></div>
        <div class="g-snow2"></div>
    </div><div class="d"><div>
    <div class="wrapper">
        <!--顶部广告-->
<?php $data=$this->DB()->GetList("select * from `@#_header`",array("type"=>1,"key"=>'',"cache"=>0)); ?>
<?php $ln=1;if(is_array($data)) foreach($data AS $head): ?>
<?php echo $head['html']; ?>
<?php  endforeach; $ln++; unset($ln); ?>
<!--顶部悬浮导航-->

<!--顶部悬浮导航/-->
        <!--顶部-->
 <div class="g-toolbar">
     <div class="w1190">
         <ul class="fl">
             <li>
                 <div class="u-menu-hd">
                     <a id="addSiteFavorite" href="javascript:;" title="收藏">收藏<?php echo _cfg("web_name_two"); ?></a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liMobile" class="u-arr">
                 <div class="u-menu-hd">
                     <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" title="手机版">手机<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
               <div class="u-select u-select-weix">
                     <p>
                         <a href="<?php echo G_WEB_PATH; ?>/?/go/index/app" target="_blank">
                             <img src="<?php echo G_WEB_PATH; ?>/statics/templates/quyu-1yygkuan/images/sjb.png" />
                             下载客户端
                         </a>
                     </p>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/group_qq" target="_blank" title="官方QQ群">官方QQ群</a>
                 </div>
             </li>
                   <li class="f-gap"><s></s></li>
              <li>
                 
             </li>
                      <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/single/renwu" target="_blank" title="任务中心">任务中心</a>
                 </div>
             </li>
              <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                    
                 </div>
             </li>
         </ul>
         <ul id="ulTopRight" class="fr">
         <?php if(get_user_arr()): ?>
<li>
<div class="u-menu-hd u-menu-login">
<a class="blue" title="<?php echo get_user_name(get_user_arr(),'username'); ?>" href="<?php echo WEB_PATH; ?>/member/home"><?php echo get_user_name(get_user_arr(),'username'); ?></a>
<a title="退出" href="<?php echo WEB_PATH; ?>/member/user/cook_end">[退出]</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>

<?php  else: ?>
<li id="logininfo">
<div class="u-menu-hd">
<a title="登录" href="<?php echo WEB_PATH; ?>/login">登录</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<li>
<div class="u-menu-hd">
<a title="注册" href="<?php echo WEB_PATH; ?>/register">注册</a>
</div>
</li>
<li class="f-gap">
<s></s>
</li>
<?php endif; ?>
<li id="liMember" class="u-arr">
<div class="u-menu-hd">
<a href="<?php echo WEB_PATH; ?>/member/home">我的<?php echo _cfg('web_name_two'); ?></a>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/userbuylist" title="购买记录"><?php echo _cfg('web_name_two'); ?>记录</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/orderlist" title="获得的商品">获得的商品</a></span>
                     <span><a href="<?php echo WEB_PATH; ?>/member/home/modify" title="个人设置">个人设置</a></span>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li id="liTopUMsg" class="u-arr" style="display: none;">
                 <div class="u-menu-hd">
                     <a href="#" title="消息">消息</a>
                     <h3 style="display: none;"></h3>
                     <div class="f-top-arrow"><cite>◆</cite><b>◆</b></div>
                 </div>
                 <div class="u-select u-select-my">
                     <span><a href="#" title="好友请求">好友请求</a></span>
                     <span><a href="#" title="系统消息">系统消息</a></span>
                     <span><a href="#" title="私信" class="f-msg">私信</a></span>
                 </div>
             </li>
             <li class="f-gap" style="display: none;"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/member/home/userrecharge" title="帮助">快速冲值</a>
                 </div>
             </li>
             <li>
                 <div class="u-menu-hd">
                     <a href="<?php echo WEB_PATH; ?>/help/1" title="帮助">帮助</a>
                 </div>
             </li>
             <li class="f-gap"><s></s></li>
             <li>
                 <div class="u-menu-hd">
                     <a id="btnTopQQ" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo _cfg('qq'); ?>&site=qq&menu=yes" title="在线客服" class="u-service-off u-service"><i></i>在线客服</a>
                 </div>
             </li>
         </ul>
     </div>
 </div><!--头部-->
 <div class="g-header" >
     <div class="w1190">
     
         <div class="logo_1yyg fl">
			  <a class="logo" href="<?php echo G_WEB_PATH; ?>/" title="<?php echo _cfg('web_name'); ?>">
					<img src="<?php echo G_UPLOAD_PATH; ?>/<?php echo Getlogo(); ?>"/>
				</a>
         </div>
         <div class="search_cart_wrap fr">
             <div class="number">
                 <a href="<?php echo WEB_PATH; ?>/buyrecord" target="_blank">
                      <ul id="ulHTotalBuy">
      <li class="nobor gray6" style="width: 56px;">累计参与</li>

                       <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num" style="display: none;"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
				<li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor">,</li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="num"><cite><em>0</em></cite><i></i></li>
                <li class="nobor gray6 u-secondary">人次<b><s></s></b></li>
			</ul>
                 </a>
             </div>

             <div class="search">
                 <div class="form">
                      <input id="txtSearch" type="text" value=""输入手机试试"" />
                     <span>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/苹果" target="_blank">苹果</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/电脑" target="_blank">电脑</a>
                         <a href="<?php echo WEB_PATH; ?>/s_tag/手机" target="_blank">手机</a>
                     </span>
                 </div>
                 <a id="butSearch" href="javascript:;" class="seaIcon" style="line-height:20px;font-size:18px;text-align:center;deceration:none;color:white;background:#FF4A00;">搜索</a>
             </div>
         </div>
     </div>
     <div id="navline"></div>
 </div>

<!-- 导航 start -->
 <?php 
    if($this->db){
      $cmodel=$this->db;
    }else{
      $cmodel=$mysql_model;
    }

    $two_cate_list = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `model` = '1' and `parentid` = '0' order by `order` DESC");
   ?>
            <div class="yNavIndex" id="fixednav">
                <div class="pullDown">
                    <h2 class="pullDownTitle">
                        <a href="<?php echo WEB_PATH; ?>/goods_list" class="pullDownTitle">
                            所有商品分类
                        </a>
                    </h2>
                    <ul class="pullDownList" style="display:block;">
                    <?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
                    <?php 
                      //$brand=$this->db->GetList("select id,cateid,name from `@#_brand` where `cateid` LIKE '%$catelist[cateid]%' order by `order` DESC");

                        $cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
                        //echo "select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC";
                      $i=$key+1;
                     ?>
                        <li class="">
                            <i class="listi<?php echo $i; ?>">
                            </i>
                            <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0"><?php echo $catelist['name']; ?></a>
                            <span>
                            </span>
                        </li>

                    <?php  endforeach; $ln++; unset($ln); ?>
							<li class="">
                            <i class="listi8">
                            </i>
                            <a href="<?php echo WEB_PATH; ?>/jf_goods_list">直购专区</a>
                            <span>
                            </span>
                        </li>
                    </ul>

                    <!-- 下拉详细列表具体分类 -->
                    <!-- <div class="yMenuListCon" style="display: none;">
                    <?php $ln=1; if(is_array($two_cate_list)) foreach($two_cate_list AS $key => $catelist): ?>
                      <?php 
                        //$brand=$this->db->GetList("select id,cateid,name from `@#_brand` where `cateid` LIKE '%$catelist[cateid]%' order by `order` DESC");
                    
                        $cate2 = $cmodel->GetList("select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC");
                        
                        //echo "select cateid,parentid,name from `@#_category` where `parentid` = '$catelist[cateid]' order by `order` DESC";
                    
                        $i=$key+1;
                       ?>
                    
                    
                    
                        <div class="yMenuListConin" style="display: none;">
                            <div class="yMenuLCinList">
                                <h3>
                                    <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0" class="yListName"
                                    style="background:url(http://www.yungouworld.com/statics/templates/yungou2/images/yListNameicon.png) no-repeat -25px -<?php echo $i*48+20; ?>px"><?php echo $catelist['name']; ?>
                                    </a>
                                    <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $catelist['cateid']; ?>_0_0" class="yListMore">
                                        更多 &gt;
                                    </a>
                                </h3>
                                <p>
                                    <?php 
                                      if(is_array($cate2)){
                                         foreach($cate2 AS $bval){
                                     ?>
                                    <a href="<?php echo WEB_PATH; ?>/goods_list/<?php echo $bval['cateid']; ?>_0_0">
                                    <?php echo $bval['name']; ?>
                                    </a>
                                    <?php 
                                       }}
                                     ?>
                                </p>
                            </div>
                        </div>
                      <?php  endforeach; $ln++; unset($ln); ?>
                    </div> -->
                </div>
                <ul class="yMenuIndex">
                    <ul>
					<div style="display:none;"><span id="sCartTotal"></div> 
                       <li class="f-nav-home"><a href="/">首页</a></li>
                        <?php echo Getheader('index'); ?>
                   </ul>
                    <li class="look_index_nav">
                        <a href="javascript:void(0)" target="_blank" class="look_index_nava">
                            发现
                            <i class="ico-dot">
                            </i>
                        </a>
                        <dl>
                            <dd>
                                <a href="<?php echo WEB_PATH; ?>/group" target="_blank">
                                    云购社圈
                                </a>
                            </dd>
                            <dd>
                                <a href="<?php echo WEB_PATH; ?>/single/newbie" target="_blank">
                                    新手指南
                                </a>
                            </dd>
                           
                        </dl>
                    </li>
                </ul>
            </div>
            <!-- 导航 end -->





<script>
            function delheader(id) {
                var Cartlist = $.cookie('Cartlist');
                var info = $.evalJSON(Cartlist);
                var num = $("#sCartTotal2").html() - 1;
                var sum = $("#sCartTotalM").html();
                info['MoenyCount'] = sum - info[id]['money'] * info[id]['num'];

                delete info[id];
                //$.cookie('Cartlist','',{path:'/'});
                $.cookie('Cartlist', $.toJSON(info), {
                    expires: 30,
                    path: '/'
                });
                $("#sCartTotalM").html(info['MoenyCount']);
                $('#sCartTotal2').html(num);
                $('#sCartTotal').text(num);
                $('#btnMyCart em').text(num);
                $("#mycartcur" + id).remove();
            }
            $(function() {
                $(".h_1yyg").mouseover(function() {
                    $(".h_1yyg_eject").show();
                });
                $(".h_1yyg").mouseout(function() {
                    $(".h_1yyg_eject").hide();
                });
                $(".h_news").mouseover(function() {
                    $(".h_news_down").show();
                });
                $(".h_news").mouseout(function() {
                    $(".h_news_down").hide();
                });
            });
			
	
																																																																																																																											
 
        </script>
<!-- 导航开始-->
        <div class="yBanner">

            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(85, 169, 255);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26894807158213.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword1.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/48856548325243.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/50965198325292.jpg">
                        </a>
                    </div>
                </div>
            </div>

            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(53, 54, 49);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/78194325316109.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword2.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/75984041325391.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/39096059325454.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: block; background: rgb(19, 108, 198);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/87562991158387.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword3.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/41404456325692.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/75908314325753.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(229, 215, 93);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/29244643158510.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword4.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/33304559326145.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/92906709326299.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(129, 223, 225);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/19415379159563.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword5.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/40675673326832.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26563635326891.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(60, 124, 234);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/54694884159697.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword6.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/32867424857794.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/24421870164827.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(235, 91, 150);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/16234858159837.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword7.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/17011445904788.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/21459137165323.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(246, 58, 59);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/82506764159978.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword8.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/40806048165567.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/70822734165505.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(224, 70, 72);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/30791556659384.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword9.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/56591094107643.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/67960452107695.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(247, 170, 62);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/25849099160386.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword10.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/38655367908227.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/15181703909275.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(212, 12, 84);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/88742630160606.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword11.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26802099892667.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/19936400892247.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList" style="display: none; background: rgb(214, 214, 216);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/80401650659594.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword12.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/26915107891532.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/82460701891580.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList" style="display: none; background: rgb(122, 255, 234);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/76671891160912.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword13.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/58591232874884.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/62235729893318.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList ybannerExposure" style="display: none; background: rgb(236, 65, 57);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/85751683161100.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword14.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/30369863166964.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/48410684167012.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="yBannerList" style="display: none; background: rgb(5, 5, 5);">
                <div class="yBannerListIn">
                    <a href="#" target="_blank">
                        <img class="ymainBanner" src="<?php echo G_GLOBAL_STYLE; ?>/newnav/17013426165330.jpg">
                        <span class="ytextBanner" style="background:url(<?php echo G_GLOBAL_STYLE; ?>/newnav/playword15.png)">
                        </span>
                    </a>
                    <div class="yBannerListInRight" target="_blank">
                        <a href="#">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/45807868891263.jpg">
                        </a>
                        <b class="yimaginaryLine">
                        </b>
                        <a href="#" target="_blank">
                            <img src="<?php echo G_GLOBAL_STYLE; ?>/newnav/96694456167508.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <script style="display: none;">
                $(function() {
                    $($(".pullDownList li")[0]).addClass("menuliselected");
                    $($(".yBannerList")[0]).addClass("ybannerExposure");
                    $($(".yBannerList")[0]).show().siblings().hide();
                })
            </script>

        </div>
<!-- banner end -->



 <!--所有商品下拉特效-->
   <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('/statics/templates/quyu-1yygkuan/js/Bottom2.js?v=' + GetVerNum());
 </script>
    <script>
        $(document).ready(function(){
                $("#divGoodsSortList").hover(function() {
                $(this).addClass("U-goods-hover").children("div.U-goods-class").show().prev().find("b").addClass("b_Triangle")
                }
                ,function() {
                    $(this).removeClass("U-goods-hover").children("div.U-goods-class").hide().prev().find("b").removeClass("b_Triangle")
                }
                ).find("dl").each(function() {
                    $(this).hover(function() {
                    $(this).addClass("U-list-hover")
                }
                ,function() {
                    $(this).removeClass("U-list-hover")
                }
                )});

        });
    </script>
    <script>
$(function(){
    $("#sCart,#liTopCart").hover(
        function(){
            $("#sCartlist,#sCartLoading").show();
            $("#sCartlist p,#sCartlist h3").hide();
            $("#sCart .mycartcur").remove();
            $("#sCartTotal2").html("");
            $("#sCartTotalM").html("");
            $.getJSON("<?php echo WEB_PATH; ?>/member/cart/cartheader/="+ new Date().getTime(),function(data){
                $("#sCart .mycartcur").remove();
                $("#sCartLoading").before(data.li);
                $("#sCartTotal2").html(data.num);
                $("#sCartTotalM").html(data.sum);

                $("#sCartLoading").hide();
                $("#sCartlist p,#sCartlist h3").show();
            });
        },
        function(){
            $("#sCartlist").hide();
        }
    );
    $("#sGotoCart").click(function(){
        window.location.href="<?php echo WEB_PATH; ?>/member/cart/cartlist";
    });
})
function delheader(id){
    var Cartlist = $.cookie('Cartlist');
    var info = $.evalJSON(Cartlist);
    var num=$("#sCartTotal2").html()-1;
    var sum=$("#sCartTotalM").html();
    info['MoenyCount'] = sum-info[id]['money']*info[id]['num'];

    delete info[id];
    //$.cookie('Cartlist','',{path:'/'});
    $.cookie('Cartlist',$.toJSON(info),{expires:30,path:'/'});
    $("#sCartTotalM").html(info['MoenyCount']);
    $('#sCartTotal2').html(num);
    $('#sCartTotal').text(num);
    $('#btnMyCart em').text(num);
    $("#mycartcur"+id).remove();
}
$(function(){
    $(".M-my-1yyg").mouseover(function(){
        $(this).addClass("menu-hd-hover");
    });
    $(".M-shop").mouseover(function(){
        $(this).addClass("menu-hd-hover");
    });
    $(".M-my-1yyg").mouseout(function(){
        $(this).removeClass("menu-hd-hover");
    });
    $(".M-shop").mouseout(function(){
        $(this).removeClass("menu-hd-hover");
    });
});
$(function(){
	$("#txtSearch").focus(function(){
		$("#txtSearch").css({background:"#FFFFCC"});
		var va1=$("#txtSearch").val();
		if(va1=='输入"汽车"试试'){
			$("#txtSearch").val("");
		}
	});
	$("#txtSearch").blur(function(){
		$("#txtSearch").css({background:"#FFF"});
		var va2=$("#txtSearch").val();
		if(va2==""){
			$("#txtSearch").val('输入"汽车"试试');
		}
	});
	$("#butSearch").click(function(){
		window.location.href="<?php echo WEB_PATH; ?>/s_tag/"+$("#txtSearch").val();
	});
});

var getAllNum = function(){
    var a = $("#spBuyCount");
    var b = a.text();
    $.ajax({
        url: "<?php echo WEB_PATH; ?>/api/wrenciajax/get",
        type:"POST",
        success: function(data){
            if(b == data){

            }else{
                a.css({
                    color:"white",background:"red"
                }).html(data);
                a.animate({
                    opacity:0.1
                }
                ,{
                    queue:false,duration:1000,complete:function(){
                        a.show().css({
                            color:"#22AAFF",background:"#F5F5F5",opacity:1
                        })
                    }
                })

            }
        }
    });
    //setTimeout(getAllNum,3000);
};
getAllNum();
</script>
 <script language="javascript" type="text/javascript">
     var Base = { head: document.getElementsByTagName("head")[0] || document.documentElement, Myload: function (B, A) { this.done = false; B.onload = B.onreadystatechange = function () { if (!this.done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete")) { this.done = true; A(); B.onload = B.onreadystatechange = null; if (this.head && B.parentNode) { this.head.removeChild(B) } } } }, getScript: function (A, C) { var B = function () { }; if (C != undefined) { B = C } var D = document.createElement("script"); D.setAttribute("language", "javascript"); D.setAttribute("type", "text/javascript"); D.setAttribute("src", A); this.head.appendChild(D); this.Myload(D, B) }, getStyle: function (A, CB) { var B = function () { }; if (CB != undefined) { B = CB } var C = document.createElement("link"); C.setAttribute("type", "text/css"); C.setAttribute("rel", "stylesheet"); C.setAttribute("href", A); this.head.appendChild(C); this.Myload(C, B) } }
     function GetVerNum() { var D = new Date(); return D.getFullYear().toString().substring(2, 4) + '.' + (D.getMonth() + 1) + '.' + D.getDate() + '.' + D.getHours() + '.' + (D.getMinutes() < 10 ? '0' : D.getMinutes().toString().substring(0, 1)) }
     Base.getScript('<?php echo G_TEMPLATES_JS; ?>/Bottom.js?v=' + GetVerNum());
 </script>
<!--end所有商品下拉特效-->
