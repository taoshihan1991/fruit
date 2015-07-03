<?php defined('InShopNC') or exit('Access Invalid!');?>

<!-- [扩展js和css] -->
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/basic.min.css" rel="stylesheet" media="screen, projection" />
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/goodsplace.css" rel="stylesheet" media="screen, projection" />
<link rel="stylesheet"  href="<?php echo SHOP_TEMPLATES_URL;?>/css/base-extend.css" />
<link rel="stylesheet"  href="<?php echo SHOP_TEMPLATES_URL;?>/css/extend.css" />
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/jquery.SuperSlide.2.1.1.js"></script>
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/extend.js"></script>
<!-- [//扩展js和css] -->

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>


<!-- [最顶部] -->
  <div class="topbar" id="topbar">
      <div class="wrap">    
          <ul class="quick-menu frt">
               <li class="cart-menu"><div class="head-cart"><a href="<?php echo SHOP_SITE_URL;?>/index.php?act=cart" class="minicart-text">购物车<b class="op-cart-number"><?php echo $output['cart_goods_num'];?></b>件  </a></div>
              </li>
               <li><a rel="nofollow" target="_top" href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_order">我的订单</a></li>           
               <li><span class="line">|</span></li> 
               <li><a rel="nofollow" target="_top" href="<?php echo SHOP_SITE_URL;?>/index.php?act=member_favorites&op=fglist">我的收藏</a></li>        
               <li><span class="line">|</span></li>
               <li><a href="<?php echo urlShop('article', 'article', array('ac_id' => 2));?>" target="_self">帮助中心</a></li>       
          </ul>   
            <ul class="topbar-left"> 
              <li class="to-home"><a href="./" target="_self">返回首页</a></li>
              <li class="add-fav"><a href="javascript:void(0);" onclick="">收藏本站</a></li>            
              <li class="login flt">
              <?php if($_SESSION['is_login'] != '1'){?>
              <span id="loginBar_191" style="" class="ie-bug">
              Hi，欢迎来到四季果园！<a href="<?php echo urlShop('login');?>">请登录</a><a href="<?php echo urlShop('login','register');?>">免费注册</a></span>
              <?}else{?>
              <span id="memberBar_191">
                  Hi，<span id="uname_191"></span>！<a href="<?php echo urlShop('member_snsindex');?>">会员中心</a><a href="<?php echo urlShop('login','logout');?>">退出</a>
              </span>
              <?php }?>
              </li>
            </ul>
      </div>
  </div>
<!-- [//最顶部] -->