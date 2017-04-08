<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:45:"./template/pc/default/goods\integralMall.html";i:1491458439;s:40:"./template/pc/default/public\header.html";i:1491471355;s:44:"./template/pc/default/public\siteTopbar.html";i:1491472077;s:38:"./template/pc/default/public\kefu.html";i:1490353006;s:40:"./template/pc/default/public\footer.html";i:1491471567;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <meta http-equiv="Cache-control" content="public" max-age="no-cache" />
    <link rel="apple-touch-icon" sizes="114x114" href="http://static02.fn-mart.com/images/touch-icon-iphone-136.png" />
    <link rel="alternate" media="only screen and (max-width:640px)" href="http://m.aa.cn/category/C18973">
    <meta name="applicable-device" content="pc">
    <meta name="mobile-agent" content="format=html5;url=http://m.aa.cn/category/C18973">
    <title>商品列表-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta http-equiv="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
    <!--[if lte IE 9]>
    <script src="http://static02.fn-mart.com/js/html5.js"></script>
    <script src="http://static02.fn-mart.com/js/IE9.js"></script>
    <link rel="stylesheet" type="text/css" href="http://static02.fn-mart.com/css/ie.css"/>
    <![endif]-->
    <link rel="stylesheet" href="__STATIC__/css/integral.css">
    <link rel="stylesheet" href="__STATIC__/css/page.css">
    <style type="text/css">
        .num{bottom: 0 !important;}
    </style>
</head>
<body>
<script src="__PUBLIC__/js/jquery-1.10.2.min.js"></script>
<script src="__PUBLIC__/js/global.js"></script>
<!--最顶部-->
<link rel="stylesheet" href="__STATIC__/css/index.css" type="text/css">
<div class="site-topbar">
    <div class="layout">
        <div class="t1-l">
            <ul class="t1-l-ul">
                <li class="t1font"><a target="_blank" href="<?php echo U('/Home/Article/detail',array('article_id'=>22)); ?>">在线客服</a></li>
                <li class="t1img">&nbsp;</li>
               
                <li class="t1img">&nbsp;</li>
            </ul>
        </div>
        <div class="t1-r">
            <ul class="t1-r-ul islogin" style="display:none;">
                <li class="t1font"> <a href="<?php echo U('Home/User/index'); ?>" class="logon userinfo"></a></li>
                <li class="t1img"><a href="<?php echo U('Home/user/logout'); ?>">安全退出</a></li>                    
                <li class="t1img">&nbsp;</li>
                <li class="t1img">&nbsp;</li>                
                <li class="t1font"><a href="<?php echo U('Home/User/order_list'); ?>">我的订单</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="<?php echo U('Home/Cart/cart'); ?>">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li>                
            </ul>
            <ul class="t1-r-ul nologin" style="display:none;">
                <li class="t1font"><a href="<?php echo U('Home/user/login'); ?>">登录</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="<?php echo U('Home/Cart/cart'); ?>">购物车</a></li>
                <li class="t1img">&nbsp;</li>
                <li class="t1font"><a href="#">网站地图</a></li>
                <li class="t1img">&nbsp;</li> 
            </ul>
        </div>
    </div>
</div>

 <!--------在线客服-------------->
<style>
*{margin:0;padding:0;list-style:none;border:none;}
body{font-size:12px;}
a{color:#666;text-decoration:none;}
/*客服代码部分*/
.qqserver .qqserver-header:after,.qqserver .qqserver-header:before,.qqserver li a:after,.qqserver li a:before{display:table;content:' '}
.qqserver .qqserver-header:after,.qqserver li a:after{clear:both}
.qqserver .qqserver-header,.qqserver li a,.tabs,.user-main,.view-category,.view-category-list>li{*zoom:1}
.qqserver{position:fixed;top:50%;right:0;height:209px;margin-top:-104px}
.qqserver.unfold .qqserver-body{right:0;z-index:100;}
.qqserver .qqserver-body{position:absolute;right:-144px;width:122px;height:183px;padding:12px 10px;-webkit-transition:.3s cubic-bezier(.19,1,.22,1);-o-transition:.3s cubic-bezier(.19,1,.22,1);transition:.3s cubic-bezier(.19,1,.22,1);border:1px solid #e63547;border-radius:4px;background:#f4f7fa}
.qqserver .qqserver_fold{position:absolute;right:0;padding:14px 7px;cursor:pointer;border-top-left-radius:4px;border-bottom-left-radius:4px;background:#e63547}
.qqserver .qqserver-header{padding-bottom:10px;padding-left:6px;border-bottom:1px dashed #d1d4cc}
.qqserver .qqserver-header *{float:left}
.qqserver .qqserver_arrow{margin-top:-1px;margin-left:7px;cursor:pointer}
.qqserver li{margin-top:6px}
.qqserver li a{display:block;padding:6px 12px 4px}
.qqserver li a div{font-size:14px;float:left;margin-right:11px;color:#697466}
.qqserver li a span{font-size:12px;line-height:18px;float:left;text-indent:4px;color:#fff}
.qqserver li a span.qqserver-service-alert{font-weight:400;display:block}
.qqserver li a:hover{text-decoration:none;border-radius:4px;background:#eaebe9}
.qqserver li a:hover div{color:#e63547}
.qqserver .qqserver-footer{margin-top:10px;padding-top:14px;padding-bottom:14px;padding-left:11px;border-top:1px dashed #d1d4cc}
.qqserver .qqserver-footer .text-primary{color:#e63547;font-size:14px;}
.qqserver .qqserver_icon-alert{display:inline-block;margin-right:10px;vertical-align:-3px;*display:inline;*zoom:1;*vertical-align:-1px}
.qqserver-header div{width:90px;height:18px;background-image:url(__STATIC__/images/lanren.png);background-position:-419px -80px}
.qqserver_icon-alert{width:16px;height:14px;background-image:url(__STATIC__/images/lanren.png);background-position:-595px -85px}
.qqserver li a span{width:30px;height:23px;background-image:url(__STATIC__/images/lanren.png);background-position:-265px 0}
.qqserver li a .qqserver-service-alert{width:30px;height:22px;background-image:url(__STATIC__/images/lanren.png);background-position:-342px 0}
.qqserver_fold div{width:26px;height:132px;background-image:url(__STATIC__/images/lanren.png);background-position:0 0}
.qqserver_fold:hover div{width:26px;height:132px;background-image:url(__STATIC__/images/lanren.png);background-position:-27px 0}
.qqserver_arrow{width:18px;height:18px;background-image:url(__STATIC__/images/lanren.png);background-position:-435px 0}
.qqserver_arrow:hover{width:18px;height:18px;background-image:url(__STATIC__/images/lanren.png);background-position:-435px -38px}
</style>
<!-- 代码部分begin -->
<div class="qqserver">
  <div class="qqserver_fold">
    <div></div>
  </div>
  <div class="qqserver-body" style="display: block;">
    <div class="qqserver-header">
      <div></div>
      <span class="qqserver_arrow"></span> </div>
    <ul>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>琳琳</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq2']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>客服咨询</div>
        <span>云云</span> </a> </li>
      <li> <a title="点击这里给我发消息" href="tencent://message/?uin=<?php echo $tpshop_config['shop_info_qq3']; ?>&amp;Site=TPshop商城&amp;Menu=yes" target="_blank">
        <div>技术咨询</div>
        <span class="qqserver-service-alert">TPshop</span> </a> </li>
    </ul>
    <div class="qqserver-footer"><span class="qqserver_icon-alert"></span><a class="text-primary" href="javascript:;">大家都在说</a> </div>
  </div>
</div>
<!--<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>-->
<script>
$(function(){
	var $qqServer = $('.qqserver');
	var $qqserverFold = $('.qqserver_fold');
	var $qqserverUnfold = $('.qqserver_arrow');
	$qqserverFold.click(function(){
		$qqserverFold.hide();
		$qqServer.addClass('unfold');
	});
	$qqserverUnfold.click(function(){
		$qqServer.removeClass('unfold');
		$qqserverFold.show();
	});
	//窗体宽度小鱼1024像素时不显示客服QQ
	function resizeQQserver(){
		$qqServer[document.documentElement.clientWidth < 1024 ? 'hide':'show']();
	}
	$(window).bind("load resize",function(){
		resizeQQserver();
	});
});
</script>
<!-- 代码部分end -->
 <!--------在线客服-------------->

<!--顶部banner开始-->    
<?php if(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME == 'home/Index/index' && $_COOKIE["top-banner"] == null){ ?>
<div class="top-banner" id="top-banner-block">
    <div class="top-banner-max">
    <!---广告 select * from __PREFIX__ad where position_id = 1 limit 1-->
    <?php $pid =1;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1491523200 and end_time > 1491523200 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
if(!in_array($pid,array_keys($ad_position)) && $pid)
{
  M("ad_position")->insert(array(
         "position_id"=>$pid,
         "position_name"=>CONTROLLER_NAME."页面自动增加广告位 $pid ",
         "is_open"=>1,
         "position_desc"=>CONTROLLER_NAME."页面",
  ));
  delFile(RUNTIME_PATH); // 删除缓存  
}


$c = 1- count($result); //  如果要求数量 和实际数量不一样 并且编辑模式
if($c > 0 && I("get.edit_ad"))
{
    for($i = 0; $i < $c; $i++) // 还没有添加广告的时候
    {
      $result[] = array(
          "ad_code" => "/public/images/not_adv.jpg",
          "ad_link" => "/index.php?m=Admin&c=Ad&a=ad&pid=$pid",
          "title"   =>"暂无广告图片",
          "not_adv" => 1,
          "target" => 0,
      );  
    }
}
foreach($result as $key=>$v):       
    
    $v[position] = $ad_position[$v[pid]]; 
    if(I("get.edit_ad") && $v[not_adv] == 0 )
    {
        $v[style] = "filter:alpha(opacity=50); -moz-opacity:0.5; -khtml-opacity: 0.5; opacity: 0.5"; // 广告半透明的样式
        $v[ad_link] = "/index.php?m=Admin&c=Ad&a=ad&act=edit&ad_id=$v[ad_id]";        
        $v[title] = $ad_position[$v[pid]][position_name]."===".$v[ad_name];
        $v[target] = 0;
    }
    ?>
    <a href="<?php echo $v['ad_link']; ?>" <?php if($v['target'] == 1): ?>target="_blank"<?php endif; ?>> <img src="<?php echo $v[ad_code]; ?>"  title="<?php echo $v[title]; ?>" style="<?php echo $v[style]; ?>"/></a>    
    <a class="button-top-banner-close" href="javascript:;" title="关闭" id="top-banner-min-close" onClick="javascript:$('#top-banner-block').hide();">－</a>
    <?php endforeach; ?> 
   </div>
</div>
<?php 
		setcookie("top-banner", "1", time()+ 3600); // 弹过窗的 不在弹窗
	} 
?>
<!--顶部banner结束-->    

<header>
    
    <div class="layout">
    
    <!--logo开始-->
       <!--  <div class="logo"><a href="/" title="TPshop"><img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>" alt="TPshop"></a></div> -->
    <!--logo结束-->
    
    <!-- 搜索开始-->
        <div class="searchBar">
            <div class="searchBar-form">
                <form name="sourch_form" id="sourch_form" method="post" action="<?php echo U("/Home/Goods/search"); ?>">
                    <input type="text" class="text" name="q" id="q" value="<?php echo I('q'); ?>"  placeholder="  搜索关键字"/>
                    <input type="button" class="button" value="搜索" onclick="if($.trim($('#q').val()) != '') $('#sourch_form').submit();"/>
                </form>
            </div>
            <div class="searchBar-hot">
                <b>热门搜索</b>
               	<?php if(is_array($tpshop_config['hot_keywords']) || $tpshop_config['hot_keywords'] instanceof \think\Collection): if( count($tpshop_config['hot_keywords'])==0 ) : echo "" ;else: foreach($tpshop_config['hot_keywords'] as $k=>$wd): ?>
        			<a target="_blank" href="<?php echo U('Home/Goods/search',array('q'=>$wd)); ?>" <?php if($k == 0): ?>class="ht"<?php endif; ?>><?php echo $wd; ?></a>
        		<?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <!-- 搜索结束-->
        
        <div class="ri-mall">
            <div class="my-mall">
            <!---我的商城-开始 -->
                <div class="mall">
                    <div class="le"><a href="<?php echo U('/Home/User'); ?>" >我的商城</a></div> 
                </div>
                <!---我的商城-结束 -->
            </div>
            <div class="my-mall" id="header_cart_list">
                <!---购物车-开始 -->
                <div class="micart">
                    <div class="le les">
                    	<a href="<?php echo U('Home/Cart/cart'); ?>" >我的购物车
                            <span class="shopping-num"><em id="cart_quantity"></em><b></b></span>
                        </a>                       
                    </div>
                    
                    <div class="ri ris" style="display:">
                       <?php if(count($cartList) == 0): ?>
                            <div class="micart-about">
                                <span class="micart-xg">您的购物车是空的，赶紧选购吧！</span>
                            </div>
                        <?php endif; ?>
                        <div class="commod">
                        <ul>
                        <?php if(is_array($cartList) || $cartList instanceof \think\Collection): if( count($cartList)==0 ) : echo "" ;else: foreach($cartList as $k=>$v): ?>
                            <li class="goods">
                                <div>
                                    <div class="p-img">
                                        <a href="">
                                            <img src="<?php echo goods_thum_images($v['goods_id'],428,428); ?>" alt="">
                                        </a>
                                     </div>
                                     <div class="p-name">
                                        <a href="">
                                            <span class="p-slogan"><?php echo $v[goods_name]; ?></span>
                                            <span class="p-promotions hide"></span>
                                        </a>
                                     </div>
                                     <div class="p-status">
                                        <div class="p-price">
                                            <b>¥&nbsp;<?php echo $v[goods_price]; ?></b>
                                            <em>x</em>
                                            <span><?php echo $v[goods_num]; ?></span>
                                        </div>
                                        <div class="p-tags"></div>
                                     </div>
                                     <!--
                                     <a href="" class="icon-minicart-del" title="删除">删除</a>
                                       -->
                                </div>
                            </li>
                         <?php endforeach; endif; else: echo "" ;endif; ?>   							
                        </ul>
                        </div>
                        <div class="settle">
                            <p>共<em><?php echo $cart_total_price[anum]; ?></em>件商品，金额合计<b>¥&nbsp;<?php echo $cart_total_price[total_fee]; ?></b></p>
                            <a class="js-button" href="<?php echo U('Home/Cart/cart'); ?>">去结算</a>
                        </div>
                    </div>
                </div>
                <!---购物车-结束 -->
                
            </div>
        </div>
        <div class="qr-code">
            <img src="__STATIC__/images/qrcode_vmall_app01.png" alt="二维码" />
            <p>扫一扫</p>
        </div>
    </div>
</header>
   <!-- 导航-开始-->
   
   
   	<div class="navigation">
    	<div class="layout">
        	<!--全部商品-开始-->
        	<div class="allgoods">
            	<div class="goods_num"><h2>全部商品</h2><i class="trinagle"></i></div>
            	<div class="list" <?php if(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME == 'home/Index/index') echo 'style="display:block;"'; ?> >
                   <ul class="list_ul"> 
                       <?php if(is_array($goods_category_tree) || $goods_category_tree instanceof \think\Collection): if( count($goods_category_tree)==0 ) : echo "" ;else: foreach($goods_category_tree as $k=>$v): if($v[level] == 1): ?>                       
                                <li class="list-li">
                                    <div class="list_a">
                                        <h3><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v[id])); ?>"><span><?php echo $v['name']; ?></span></a></h3>
                                        <p> <!--$v[id][name] 数组中括号 里面的 id name 不能有 引号 sql 参数 必须双引号-->
	                                       <?php $index = '1'; if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): if($index++ > 3) break; ?>
                                           	 	<a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2['name']; ?></a>
                                             <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </p>
                                    </div>
                                    <div class="list_b">
                                        <div class="list_bigfl">
	                                       <?php $index = '1'; if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): if($index++ > 6) break; ?>
                                                    <a class="list_big_o ma-le-30" href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2['name']; ?><i>＞</i></a>
                                               <?php endif; endforeach; endif; else: echo "" ;endif; ?>                                                                                    
                                        </div>
                                        <div class="subitems">                                        
                                           <?php if(is_array($v[tmenu]) || $v[tmenu] instanceof \think\Collection): if( count($v[tmenu])==0 ) : echo "" ;else: foreach($v[tmenu] as $k2=>$v2): if($v2[parent_id] == $v[id]): ?>
                                                    <dl class="ma-to-20 cl-bo">
                                                        <dt class="bigheader wh-sp"><a href="<?php echo U('Home/Goods/goodsList',array('id'=>$v2[id])); ?>"><?php echo $v2['name']; ?></a><i>＞</i></dt>
                                                        <dd class="ma-le-100">
                                                           <?php if(is_array($v2[sub_menu]) || $v2[sub_menu] instanceof \think\Collection): if( count($v2[sub_menu])==0 ) : echo "" ;else: foreach($v2[sub_menu] as $k3=>$v3): if($v3[parent_id] == $v2[id]): ?>                                                           
	                                                            <a class="hover-r ma-le-10 ma-bo-10 pa-le-10 bo-le-hui fl wh-sp" href="<?php echo U('Home/Goods/goodsList',array('id'=>$v3[id])); ?>"><?php echo $v3['name']; ?></a>
                                                              <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                        </dd>
                                                    </dl>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>
                                    <i class="list_img"></i>
                                </li>
                            <?php endif; endforeach; endif; else: echo "" ;endif; ?>	
                	</ul>
                </div>
            </div>
            <!--全部商品-结束-->
            
            <div class="ongoods">
            	<ul class="navlist">
            		<li class="homepage"><a href="/"><span>首页</span></a></li>
                    <?php
                                   
                                $md5_key = md5("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("SELECT * FROM `__PREFIX__navigation` where is_show = 1 ORDER BY `sort` DESC"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
            			<li class="page"><a href="<?php echo $v[url]; ?>" <?php if($v[is_new] == 1): ?>target="_blank" <?php endif; ?><span><?php echo $v[name]; ?></span></a></li>
					<?php endforeach; ?> 
            	</ul>
            </div>
        </div>
    </div>
   <!-- 导航-结束-->
<script>
$(function(){
    var active_li = '<?php echo $active; ?>';
    if(active_li){
        $('li').remove('curr-res');
        $('#'+active_li).addClass('curr-res');
    }
   	
    var uname= getCookie('uname');
    if(uname == ''){
    	$('.islogin').remove();
    	$('.nologin').show();
    }else{
    	$('.nologin').remove();
    	$('.islogin').show();
    	$('.userinfo').html(decodeURIComponent(uname));
    }
    get_cart_num();
})



function get_cart_num(){
	  var cart_cn = getCookie('cn');
	  if(cart_cn == ''){
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
				cart_cn = getCookie('cn');		
				$('#cart_quantity').html(cart_cn);
			}
		});	
	  }
	  $('#cart_quantity').html(cart_cn);
}
/**
* 鼠标移动端到头部购物车上面 就ajax 加载
*/
// 鼠标是否移动到了上方
var header_cart_list_over = 0; 
$("#header_cart_list > .micart > .les").hover(function(){	 
       if(header_cart_list_over == 1) 
			return false;	
        header_cart_list_over = 1; 
		$.ajax({
			type : "GET",
			url:"/index.php?m=Home&c=Cart&a=header_cart_list",//+tab,
			success: function(data){								 
			 	$("#header_cart_list > .micart > .ris").html(data);	
			 	get_cart_num();
			}
		});			
}).mouseout(function(){
	
	 (typeof(t) == "undefined") || clearTimeout(t); 	 
	 t = setTimeout(function () { 
			header_cart_list_over = 0; /// 标识鼠标已经离开
		}, 1000);		
});
</script>
<div class="content">
    	<div class="main">
        	<div class="exchange">
                <ul id="cate_ul">
                    <li <?php if(\think\Request::instance()->get('id') == ''): ?>class="travel"<?php endif; ?> id="cate">
                        <a href="<?php echo U('Home/Goods/integralMall'); ?>">全部分类</a>
                    </li>
                    <?php if(is_array($goods_category) || $goods_category instanceof \think\Collection): $i = 0; $__LIST__ = $goods_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gc): $mod = ($i % 2 );++$i;?>
                        <li <?php if(\think\Request::instance()->param('id') == $gc['id']): ?>class="travel"<?php endif; ?>>
                            <a href="<?php echo U('Home/Goods/integralMall',array('id'=>$gc['id'])); ?>"><?php echo $gc['name']; ?></a>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                 </ul>
            </div>
            <div class="bdnr">
            	<div class="jffw">
                    <div id="range" style="display:inline-block;">
                        积分范围：
                        <input type="text" class="bt_" name="minValue" id="minValue" value="<?php echo \think\Request::instance()->param('minValue'); ?>"> -
                        <input type="text" class="bt_" name="maxValue" id="maxValue" value="<?php echo \think\Request::instance()->param('maxValue'); ?>">
                        <button type="button" id="selectBtn" onclick="search();"><i class="icon-key"></i>查找</button>
                    </div>
                    兑换方式：
                    <select style=" padding:0 5px;" name="brandType" id="brandType">
                         <option value="0">全部</option>
                         <option value="1" <?php if(\think\Request::instance()->param('brandType') == 1): ?>selected="selected"<?php endif; ?>>积分+金额</option>
                         <option value="2" <?php if(\think\Request::instance()->param('brandType') == 2): ?>selected="selected"<?php endif; ?>>全积分</option>
                    </select>　　
                    <input name="is_new" type="checkbox" <?php if(\think\Request::instance()->param('is_new') == 1): ?>checked="checked"<?php endif; ?> value="1" id="is_new"> 新品　　
                    <input name="exchange" type="checkbox" <?php if(\think\Request::instance()->param('exchange') == 1): ?>checked="checked"<?php endif; ?> value="" id="exchange"> 我能兑换的商品　　
                    <!--<input name="" type="checkbox" value="" id="memberShip"> 会员专享-->
                    <input name="cat_id" id="cat_id" value="<?php echo \think\Request::instance()->param('id'); ?>" type="hidden" />　
                    <div class="ysp" id="totlePage">共<?php echo $goods_list_count; ?>个商品
                        <a class="prepage" href="javascript:void(0);" onclick="prePagination();">&lt;</a> 
                        <span><em id="pageIndex"><?php echo $nowPage; ?></em>/<em id="pageCount"><?php echo $totalPages; ?></em></span>
                        <a class="nextpage" href="javascript:void(0);" onclick="nextPagination();">&gt;</a>
                    </div>
                </div>
                <div class="jfxq">
                	<ul id="goods_ul">
                        <?php if(is_array($goods_list) || $goods_list instanceof \think\Collection): $i = 0; $__LIST__ = $goods_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goods): $mod = ($i % 2 );++$i;?>
                    	<div id="jfdhsp">
                            <li>
                                <p class="p1">
                                    <a target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">
                                        <img src="<?php echo goods_thum_images($goods['goods_id'],200,200); ?>">
                                    </a>
                                </p>
                                <p class="p2">
                                    <a target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>"><?php echo $goods['goods_name']; ?></a>
                                </p>
                                <p class="p4">
                                  <span class="lx3">¥</span>
                                    <span class="lx1"><?php echo $goods['shop_price']-$goods['exchange_integral']/$point_rate; ?></span>
                                    <span class="lx4">+</span>
                                    <span class="lx1"><?php echo $goods['exchange_integral']; ?></span>
                                    <span class="lx4">积分</span>
                                  <a target="_blank" href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$goods['goods_id'])); ?>">立即兑换</a>
                                </p>
                            </li>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="djs">
					<?php echo $page; ?>
               </div>
            </div>
        </div>
    </div>
<div class="footer">
    <div class="layout quality layer">
        <ul class="footer_quality">
            <li><i></i>品质保证</li>
            <li  class="f2"><i></i>7天退换 15天换货</li>
            <li  class="f3"><i></i>100元起免运费</li>
            <li  class="f4"><i></i>448家维修网点 全国联保</li>
        </ul>
    </div>
    <div class="helpful layout">
    <?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2");
                                $result_name = $sql_result_v = S("sql_".$md5_key);
                                if(empty($sql_result_v))
                                {                            
                                    $result_name = $sql_result_v = \think\Db::query("select * from `__PREFIX__article_cat` where parent_id = 2"); 
                                    S("sql_".$md5_key,$sql_result_v,31104000);
                                }    
                              foreach($sql_result_v as $k=>$v): ?>
            <dl <?php if($k != 0): ?>class="jszc"<?php endif; ?> >
                <dt><?php echo $v[cat_name]; ?></dt>
                <dd>
                    <ol>
                    	<?php
                                   
                                $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id] and is_open=1");
                                $result_name = $sql_result_v2 = S("sql_".$md5_key);
                                if(empty($sql_result_v2))
                                {                            
                                    $result_name = $sql_result_v2 = \think\Db::query("select * from `__PREFIX__article` where cat_id = $v[cat_id] and is_open=1"); 
                                    S("sql_".$md5_key,$sql_result_v2,31104000);
                                }    
                              foreach($sql_result_v2 as $k2=>$v2): ?>
                        <li><a href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id])); ?>" target="_blank"><?php echo $v2[title]; ?></a></li>
					 	<?php endforeach; ?>                        
                    </ol>
                </dd>
            </dl>
 	<?php endforeach; ?>
     </div>
     <div class="keep-on-record">
        <p>
        Copyright © 2016-2025 <?php echo $tpshop_config['shop_info_store_name']; ?>  版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?>
        
       
        </p>
     </div>
 </div>
 

<script>
    $(document).ready(function(){
        //切换兑换方式
        $('#brandType').change(function(){
            search();
        });
        //选中新品
        $("#is_new").bind("click", function () {
            search();
        });
        //用户能买的商品
        $("#exchange").bind("click", function () {
            search();
        });
    })

    //搜索
    function search() {
        var minValue = parseInt($('#minValue').val());//积分起始范围
        var maxValue = parseInt($('#maxValue').val());//积分截止范围
        var cat_id = $('#cat_id').val();//商品分类id
        var brandType = $('#brandType').find("option:selected").val();
        var url = "/index.php?m=Home&c=goods&a=integralMall";

        if($('#minValue').val() != ''){
            if(!isPositiveNum(minValue)){
                layer.alert('范围有误', {icon: 2});
                return false;
            }else{
                url += "&minValue="+minValue;
            }
        }

        if($('#maxValue').val() != ''){
            if(!isPositiveNum(maxValue)){
                layer.alert('范围有误', {icon: 2});
                return false;
            }else{
                url += "&maxValue="+maxValue;
            }
        }

        if($('#minValue').val() != '' && $('#maxValue').val() != '' && maxValue < minValue){
            layer.alert('范围有误', {icon: 2});
            return false;
        }

        if(cat_id!=0 && cat_id!=''){
            url += "&id="+cat_id;
        }

        if(brandType!=''){
            url += "&brandType="+brandType;
        }

        if($("#is_new").is(":checked")){
            url += "&is_new="+1;
        }
        if($("#exchange").is(":checked")){
            url += "&exchange="+1;
        }

        window.location.href=url;
    }

    //检查是否为正整数
    function isPositiveNum(s)
    {
        var re = /^\d+$/;
        return re.test(s);
    }

</script>
</body>
</html>
