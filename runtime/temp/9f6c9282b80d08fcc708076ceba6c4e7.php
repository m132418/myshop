<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:44:"./template/pc/default/user\order_detail.html";i:1490353006;s:40:"./template/pc/default/public\header.html";i:1490353006;s:44:"./template/pc/default/public\siteTopbar.html";i:1490353006;s:38:"./template/pc/default/public\kefu.html";i:1490353006;s:36:"./template/pc/default/user\menu.html";i:1490353006;s:41:"./template/pc/default/public\footer2.html";i:1490353006;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>订单详情-<?php echo $tpshop_config['shop_info_store_title']; ?></title>
    <meta http-equiv="keywords" content="<?php echo $tpshop_config['shop_info_store_keyword']; ?>" />
    <meta name="description" content="<?php echo $tpshop_config['shop_info_store_desc']; ?>" />
    <link rel="stylesheet" href="__STATIC__/css/index.css" type="text/css">
    <script src="__STATIC__/js/jquery-1.10.2.min.js"></script>
    <script src="__STATIC__/js/slider.js"></script>
</head>
<body>
<!--------头部开始-------------->
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
                <li class="t1font"><a href="javascript:void();">TPshop</a></li>
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
    <?php $pid =1;$ad_position = M("ad_position")->cache(true,TPSHOP_CACHE_TIME)->column("position_id,position_name,ad_width,ad_height","position_id");$result = M("ad")->where("pid=$pid  and enabled = 1 and start_time < 1491454800 and end_time > 1491454800 ")->order("orderby desc")->cache(true,TPSHOP_CACHE_TIME)->limit("1")->select();
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
        <div class="logo"><a href="/" title="TPshop"><img src="<?php echo $tpshop_config['shop_info_store_logo']; ?>" alt="TPshop"></a></div>
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
<!--------头部结束-------------->

<div class="layout ov-hi">
    <div class="breadcrumb-area">    
	    <?php if(is_array($navigate_user) || $navigate_user instanceof \think\Collection): if( count($navigate_user)==0 ) : echo "" ;else: foreach($navigate_user as $k=>$v): if($k != '首页'): ?> > <?php endif; ?>  
            <a href="<?php echo $v; ?>"><?php echo $k; ?></a> 
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
<div class="layout pa-to-10 fo-fa-ar">
    <!--菜单-->
    <div class="fl wi240 myimall">
    <div class="li-hi-20 ba-co-danhui">
        <div class="pa-28-0-22">        
            <a class="fo-si-18" href="<?php echo U('/Home/User'); ?>"><span>我的商城</span></a>
        </div>
        <div class="fuy-xim pa-bo-20">
            <ul>
                <li>
                    <h3><span>订单中心</span></h3>
                    <ol>
                        <li id="order_list"><a href="<?php echo U('Home/User/order_list'); ?>"><span>我的订单<!--<i class="w-i">1</i>--></span></a></li>
                        <li id="goods_collect"><a href="<?php echo U('Home/User/goods_collect'); ?>"><span>我的收藏</span></a></li>
                    </ol>
                </li>
                <li>
                    <h3><span>个人中心</span></h3>
                    <ol>
                        <li id="info"><a href="<?php echo U('Home/User/info'); ?>"><span>个人信息</span></a></li>
                        <li id="account"><a href="<?php echo U('Home/User/account'); ?>"><span>我的积分</span></a></li>
                        <li id="coupon"><a href="<?php echo U('Home/User/coupon'); ?>"><span>我的优惠券</span></a></li>
                        <li id="address_list"><a href="<?php echo U('Home/User/address_list'); ?>"><span>收货地址管理</span></a></li>
                        <li id="withdrawals"><a href="<?php echo U('Home/User/withdrawals'); ?>"><span>提现申请</span></a></li>
                        <li id="recharge"><a href="<?php echo U('Home/User/recharge'); ?>"><span>我的余额</span></a></li>                        
                    </ol>
                </li>
                <li>
                    <h3><span>社区中心</span></h3>
                    <ol>
                        <li id="comment"><a href="<?php echo U('Home/User/comment'); ?>"><span>商品评价</span></a></li>
                        <li id="message_notice"><a href="<?php echo U('Home/User/message_notice'); ?>"><span>消息通知</span></a></li>
                        <!--<li id="comment"><a href="<?php echo U('Home/User/return_goods_list'); ?>"><span>退换货</span></a></li>                        -->
                    </ol>
                </li>
            </ul>
        </div>
    </div>
</div>

    <!--菜单-->
    <div class="fr wi940">
        <div class="he50 wddd">
            <div class="fl ddd-h2">
                <h2><span>我的订单</span></h2>
            </div>
        </div>
        <div class="cancel-order-detail-state">
            <!-- 20141223-订单进度-start -->

            <div class="order-state-progress">
            	<ol style="margin-left:0;">
                        <li class="first completed">
                            <s></s>
                            <dl>
                                <dt>提交订单</dt>                                
                                <dd>
                                    <p><?php echo date('Y-m-d',$order_info['add_time']); ?></p>
                                    <p><?php echo date('H:i:s',$order_info['add_time']); ?></p>
                                </dd>                                                              
                            </dl>
                        </li>
                        <li class="<?php if($order_info[pay_time] > 0): ?>current<?php endif; ?>">
                            <s></s>
                            <dl>
                                <dt>付款成功</dt>
                                <?php if($order_info[pay_time] > 0): ?>
                                <dd>
                                    <p><?php echo date('Y-m-d',$order_info['pay_time']); ?></p>
                                    <p><?php echo date('H:i:s',$order_info['pay_time']); ?></p>
                                </dd>
                                <?php endif; ?>
                                
                            </dl>
                        </li>
                        <li class="<?php if($order_info[shipping_time] > 0): ?>current<?php endif; ?>">
                            <s></s>
                            <dl>
                                <dt>卖家发货</dt>
                                <?php if($order_info[shipping_time] > 0): ?>
                                <dd>
                                    <p><?php echo date('Y-m-d',$order_info['shipping_time']); ?></p>
                                    <p><?php echo date('H:i:s',$order_info['shipping_time']); ?></p>
                                </dd>
                                <?php endif; ?>
                            </dl>
                        </li>
                        <li class="<?php if($order_info[shipping_time] > 0): ?>current<?php endif; ?>">
                            <s></s>
                            <dl>
                                <dt>等待收货</dt>
                                <?php if($order_info[shipping_time] > 0): ?>
                                <dd>
                                    <p><?php echo date('Y-m-d',$order_info['shipping_time']); ?></p>
                                    <p><?php echo date('H:i:s',$order_info['shipping_time']); ?></p>
                                </dd>
	                            <?php endif; ?>
                            </dl>
                        </li>
                        <li class="<?php if($order_info[confirm_time] > 0): ?>current<?php endif; ?>">
                            <s></s>
                            <dl>
                                <dt>完成</dt>
                                <?php if($order_info[confirm_time] > 0): ?>                         
                                <dd>
                                    <p><?php echo date('Y-m-d',$order_info['confirm_time']); ?></p>
                                    <p><?php echo date('H:i:s',$order_info['confirm_time']); ?></p>
                                </dd>
                                <?php endif; ?>
                            </dl>
                        </li>
                    </ol>
            </div>
            <!-- 20141223-订单进度-end -->
        </div>
        <!-- 订单处理信息-start -->
        <div class="o-info o-inff">
            <div class="fl">
                <span class=" ma-ri-15 fo-si-16">订单处理信息</span>
            </div>
        </div>
        <div class="wddd-js ov-in">
            <div class="list-group-title">
                <table class="merge-tab" border="0" cellpadding="0" cellspacing="0">
                    <thead>
                    <tr>
                        <th class=" wi169" style="border-left:0">处理时间</th>
                        <th class="">处理信息</th>
                        <!-- <th class=" wi178" style="border-right:0">操作人</th> -->
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="merge-list">
                <div class="ma-0--1">
                    <div class="o-pro">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <?php if(is_array($order_action) || $order_action instanceof \think\Collection): $i = 0; $__LIST__ = $order_action;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$action): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td class="col-pro-info  bo-les te-al wi169 sdesd co-red"><?php echo date('Y-m-d H:i',$action['log_time']); ?></td>
                                    <td class="te-al-le bo-les co-red te-al"><?php echo $action['action_note']; ?></td>
                                    <!-- <td rowspan="1" class="wi178 bo-les"><?php echo $action['action_user']; ?></td>-->
                                </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- 订单处理信息-end-->
        <!-- 物流信息 start-->
        <?php if($order_info['shipping_status'] == 1): ?>
            <div class="o-info o-inff">
                <div class="fl">
                    <span class=" ma-ri-15 fo-si-16">物流信息</span>
                </div>
            </div>
            <div class="order-track">
                <div class="track-list">
                    <ul id="express_info">
                    </ul>
                </div>
            </div>
            <script>
                queryExpress();
                function queryExpress()
                {
                    var shipping_code = "<?php echo $order_info['shipping_code']; ?>";
                    var invoice_no = "<?php echo $order_info['invoice_no']; ?>";
                    $.ajax({
                        type : "GET",
                        dataType: "json",
                        url:"/index.php?m=Home&c=Api&a=queryExpress&shipping_code="+shipping_code+"&invoice_no="+invoice_no,//+tab,
                        success: function(data){
                            var html = '';
                            if(data.status == 200){
                                $.each(data.data, function(i,n){
                                    if(i == 0){
                                        html += "<li class='first'><i class='node-icon'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
                                    }else{
                                        html += "<li><i class='node-icon'></i><span class='time'>"+n.time+"</span><span class='txt'>"+n.context+"</span></li>";
                                    }
                                });
                            }else{
                                html += "<li class='first'><i class='node-icon'></i><span class='txt'>"+data.message+"</span></li>";
                            }
                            $("#express_info").html(html);
                        }
                    });
                }
            </script>
        <?php endif; ?>
        <!-- 物流信息 end-->
        <!-- 收货信息-start -->
        <div class="order-detail-receive">
            <div class="o-info o-inff">
                <div class="fl">
                    <span class=" ma-ri-15 fo-si-16">收货信息</span>
                </div>
            </div>
            <div class="b">
                <div class="form-info-panels">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <th>姓名：</th>
                            <td><?php echo $order_info['consignee']; ?></td>
                        </tr>
                        <tr>
                            <th>收货地址：</th>
                            <td><?php echo $region_list[$order_info['province']]['name']; ?>，<?php echo $region_list[$order_info['city']]['name']; ?>，
                                <?php echo $region_list[$order_info['district']]['name']; ?>，<?php echo $order_info['address']; ?></td>
                        </tr>
                        <tr>
                            <th>联系电话：</th>
                            <td><?php echo $order_info['mobile']; ?></td>
                        </tr>
                        <tr>
                            <th>配送方式：</th>
                            <td><?php echo $order_info['shipping_name']; ?></td>
                        </tr>
                        <tr>
                            <th>快递单号：</th>
                            <td><?php echo $order_info['invoice_no']; ?> <a href="http://www.kuaidi100.com/" target="_blank">(点击查询)</a> </td>
                        </tr>
                        <tr>
                            <th>发票信息：</th>
                            <td><?php echo $order_info['invoice_title']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- 收货信息-end -->
        <!-- 商品清单-start -->
        <div class="o-info o-inff pi">
            <div class="fl">
                <span class=" ma-ri-15 fo-si-16">订单号: <a href="javascript:void(0);"><?php echo $order_info['order_sn']; ?></a></span>
            </div>
        </div>
        <div class="list-group-title">
            <table class="merge-tab" border="0" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th class="col-pro">商品</th>
                    <th class="col-price">单价/元</th>
                    <th class="col-price">会员价</th>                    
                    <th class="col-quty">数量</th>
                    <th class="col-pay">小计/元</th>
                    <th class="col-operate">状态</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="merge-list">
            <div class="ma-0--1">
                <div class="o-pro">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <?php if(is_array($order_info['goods_list']) || $order_info['goods_list'] instanceof \think\Collection): $i = 0; $__LIST__ = $order_info['goods_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i;?>
                            <tr>
                                <td class="col-pro-img">
                                    <p>
                                        <a href="<?php echo U('Goods/goodsInfo',array('id'=>$good[goods_id])); ?>" target="_blank">
                                            <img alt="<?php echo $good['goods_name']; ?>" src="<?php echo goods_thum_images($good['goods_id'],78,78); ?>">
                                        </a>
                                    </p>
                                </td>
                                <td class="col-pro-info te-al-le"><p class="p-name"><a title="" target="_blank" href="<?php echo U('Goods/goodsInfo',array('id'=>$good[goods_id])); ?>"><?php echo $good['goods_name']; ?></a></p></td>
                                <td class="col-price"><em>¥</em><span><?php echo $good['goods_price']; ?></span></td>
                                <td class="col-price"><em>¥</em><span><?php echo $good['member_goods_price']; ?></span></td>                                
                                <td class="col-quty"><?php echo $good['goods_num']; ?></td>
                                <td rowspan="1" class="col-pay"><p><em>¥</em><span><?php echo $good['member_goods_price'] * $good['goods_num']; ?></span></p></td>
                                <td rowspan="1" class="col-operate">                                    
                                    <?php if(($order_info[return_btn] == 1) and ($good[is_send] == 1)): ?>                                    
                                        <p class="p-link"><a style="color:#999;" href="<?php echo U('Home/User/return_goods',array('order_id'=>$order_info['order_id'],'order_sn'=>$order_info['order_sn'],'goods_id'=>$good['goods_id'],'spec_key'=>$good['spec_key'])); ?>">申请退款</a></p>    
                                    <?php endif; if(($order_info['comment_btn'] == 1) and ($good['is_comment'] == 0)): ?>
                                        <p class="p-link"><a href="<?php echo U('Home/User/comment'); ?>" target="_blank"><span>评价</span></a></p>
                                    <?php endif; ?>                                    
                                </td>
                            </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="fr wcnhy">
                <div class="fzoubddv" style="background-color:#FFF">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td class="tal">商品总金额：</td>
                            <td class="tar">&nbsp;¥&nbsp;
                                <em id="order-cost-area"><?php echo $order_info['goods_price']; ?></em>
                            </td>
                        </tr>
                        <tr>
                            <td class="tal">运费：</td>
                            <td class="tar">&nbsp;¥&nbsp;
                                <em id="order-deliveryCharge"><?php echo $order_info['shipping_price']; ?></em>
                            </td>
                        </tr>
                        <tr>
                            <td class="tal">积分：</td>
                            <td class="tar">-&nbsp;¥&nbsp;
                                <em><span id="oreder-huaban-num"><?php echo $order_info['integral_money']; ?></span> </em>
                            </td>
                        </tr>
                        <tr>
                            <td class="tal">使用优惠券：</td>
                            <td class="tar">-&nbsp;¥&nbsp;
                                <em><span id="order-couponDiscount"><?php echo $order_info['coupon_price']; ?></span> </em>
                            </td>
                        </tr>

                        <tr>
                            <td class="tal">余额
                            </td>
                            <td class="tar">-&nbsp;¥&nbsp;<em><?php echo $order_info['user_money']; ?></em>
                            </td>
                        </tr>
                        <tr>
                            <td class="tal">优惠活动
                            </td>
                            <td class="tar">-&nbsp;¥&nbsp;<em><?php echo $order_info['order_prom_amount']; ?></em>
                            </td>
                        </tr>
                        <!-- 预售商品 start -->
                        <?php if($order_info['order_prom_type'] == 4 AND $order_info['paid_money'] > 0): if($order_info['pay_status'] == 1): ?>
                                <tr>
                                    <td class="tal">已付尾款：</td>
                                    <td class="tar">&nbsp;¥&nbsp;
                                        <em><?php echo $order_info['order_amount']; ?></em>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td class="tal">已付订金：</td>
                                <td class="tar">-&nbsp;¥&nbsp;
                                    <em><span><?php echo $order_info['paid_money']; ?></span> </em>
                                </td>
                            </tr>
                            <tr>
                                <td class="tal">发货时间：</td>
                                <td class="tar">
                                    <?php echo $order_info['pre_sell_deliver_goods']; ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <!-- 预售商品 end -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="order-action-area te-al-ri cl-bo">
                <div class="woypdbe sc-acti-list" style="background-color:#f5f5f5; padding:10px 0 20px 0">
                    <span class="p-subtotal-price">合计1（含运费）：<b>¥&nbsp;&nbsp;<span class="vab" id="payableTotal"><?php echo $order_info['order_amount']; ?></span></b></span>
                </div>
            </div>
            <div class="woypdbe sc-acti-list pa-to-20">
                <?php if($order_info['cancel_btn'] == 1): ?><a class="Sub-orders gwc-qjs" onClick="cancel_order(<?php echo $order_info['order_id']; ?>)"><span>取消订单</span></a><?php endif; if($order_info['pay_btn'] == 1): ?><a class="Sub-orders gwc-qjs" href="<?php echo U('/Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>"><span>立即支付</span></a><?php endif; if($order_info['receive_btn'] == 1): ?><a class="Sub-orders gwc-qjs" onClick=" if(confirm('你确定收到货了吗?')) location.href='<?php echo U('Home/User/order_confirm',array('id'=>$order_info['order_id'])); ?>'"><span>收货确认</span></a><?php endif; if($order_info['order_prom_type'] == 4 AND $order_info['pay_status'] == 2 AND $order_info['pre_sell_is_finished'] == 1 AND (time() >= $order_info['pre_sell_retainage_start'] AND time() <= $order_info['pre_sell_retainage_end'])): ?>
                    <a class="Sub-orders gwc-qjs" href="<?php echo U('/Home/Cart/cart4',array('order_id'=>$order_info[order_id])); ?>"><span>支付尾款</span></a>
                <?php endif; ?>
            </div>
        </div>
        <!-- 商品清单-end -->
    </div>
</div>
<div class="he80"></div>
<!--------footer-开始-------------->
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
        <dl>
            <dt>帮助中心</dt>
            <dd>
                <ol>
                    <li><a href="">购物指南</a></li>
                    <li><a href="">配送方式</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">常见问题</a></li>
                </ol>
            </dd>
        </dl>
        <dl class="shfw">
            <dt>售后服务</dt>
            <dd>
                <ol>
                    <li><a href="">保修政策</a></li>
                    <li><a href="">退换货政策</a></li>
                    <li><a href="">退换货流程</a></li>
                    <li><a href="">手机寄修服务</a></li>
                </ol>
            </dd>
        </dl>
        <dl class="__PUBLIC__/default/jszc">
            <dt>技术支持</dt>
            <dd>
                <ol>
                    <li><a href="">售后网点</a></li>
                    <li><a href="">常见问题</a></li>
                    <li><a href="">产品手册</a></li>
                    <li><a href="">软件下载</a></li>
                </ol>
            </dd>
        </dl>
        <dl class="gysc">
            <dt>关于商城</dt>
            <dd>
                <ol>
                    <li><a href="">公司介绍</a></li>
                    <li><a href="">商城简介</a></li>
                    <li><a href="">联系客服</a></li>
                </ol>
            </dd>
        </dl>
        <dl class="gzwm">
            <dt>关注我们</dt>
            <dd>
                <ol>
                    <li><a href="">新浪微博</a></li>
                    <li><a href="">腾讯微博</a></li>
                    <li><a href="">花粉社区</a></li>
                    <li><a href="">商城手机版</a></li>
                </ol>
            </dd>
        </dl>
    </div>
    <div class="keep-on-record">
        <p>Copyright © 2016-2025 <?php echo $tpshop_config['shop_info_store_name']; ?>  版权所有 保留一切权利 备案号:<?php echo $tpshop_config['shop_info_record_no']; ?></p>
    </div>
</div>

<!--------footer-结束-------------->

</body>
<script>
    /*$(function () {
     $("#h-s").click(function () {
     $('.ec-ta-x').css('left','124px');
     $('.ec-ta-x').css('width','110px');
     $(this).addClass("cullent");
     $('#q-s').removeClass("cullent");
     });
     });
     */
</script>

<script>
    $(function () {
        $("#h-s").mouseover(function () {
            $('.ec-ta-x').css('left','124px');
            $('.ec-ta-x').css('width','110px');
            $(this).addClass("cullent");
        });
        $("#h-s").mouseout(function () {
            $('.ec-ta-x').css('left','0px');
            $('.ec-ta-x').css('width','124px');
            $(this).removeClass("cullent");
        });
    });
    $(function () {
        $("#q-s").mouseover(function () {
            $('.ec-ta-x').css('left','0px');
            $(this).addClass("cullent");
        });
        $("#q-s").mouseout(function () {
            $('.ec-ta-x').css('left','0px');
        });
    });
    //取消订单
    function cancel_order(id){
        if(!confirm("确定取消订单?"))
            return false;
        location.href = "/index.php?m=Home&c=User&a=cancel_order&id="+id;
    }
</script>
</html>