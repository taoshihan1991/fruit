<?php defined('InShopNC') or exit('Access Invalid!');?>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/qtip/jquery.qtip.min.js"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_goods.css" rel="stylesheet" type="text/css">
<style type="text/css">
.ncs-goods-picture .levelB, .ncs-goods-picture .levelC {
cursor: url(<?php echo SHOP_TEMPLATES_URL;
?>/images/shop/zoom.cur), pointer;
}
.ncs-goods-picture .levelD {
cursor: url(<?php echo SHOP_TEMPLATES_URL;
?>/images/shop/hand.cur), move\9;
}
</style>



<!-- [详情页box] -->
<div class="wrap" id="content">
<div class="wrap-s flt">
<div id="Ranks-265" class="siderank box1">
 <h3>热销商品</h3>
 <div class="body">
  <ul class="clearfix ranklist">
      <?php if(is_array($output['hot_sales']) && !empty($output['hot_sales'])){?>
      <?php foreach($output['hot_sales'] as $key=>$val){?>
        <li class="item l<?php echo $key+1;?> <?php if($key==0){?>selected<?php }?>">
      <div class="gname"><span class="hl"><?php echo $key+1;?></span><h6><a  target="_blank" href="<?php echo urlShop('goods', 'index',array('goods_id'=>$val['goods_id']));?>"><?php echo $val['goods_name']?></a></h6></div>   
      <div class="rank-box clearfix">
        <div class="im"><a target="_blank" href="<?php echo urlShop('goods', 'index',array('goods_id'=>$val['goods_id']));?>"><img src="<?php echo thumb($val, 240);?>" alt="<?php echo $val['goods_name']?>" width="90" height="90"></a></div>
        <ul class="p"><li><span class="price1">￥<?php echo $val['goods_price']?></span></li><li>市场价：<span class="mktprice1">￥<?php echo $val['goods_marketprice']?></span></li></ul>           
      </div>    
     </li>
     <?php }}?>
    
      </ul>
  </div>
</div>

<div id="Ranks-266" class="siderank box1">
 <h3>热门收藏</h3>
 <div class="body">
  <ul class="clearfix ranklist">
      <?php if(is_array($output['hot_collect']) && !empty($output['hot_collect'])){?>
      <?php foreach($output['hot_collect'] as $key=>$val){?>
        <li class="item l<?php echo $key+1;?> <?php if($key==0){?>selected<?php }?>">
      <div class="gname"><span class="hl"><?php echo $key+1;?></span><h6><a  target="_blank" href="<?php echo urlShop('goods', 'index',array('goods_id'=>$val['goods_id']));?>"><?php echo $val['goods_name']?></a></h6></div>   
      <div class="rank-box clearfix">
        <div class="im"><a target="_blank" href="<?php echo urlShop('goods', 'index',array('goods_id'=>$val['goods_id']));?>"><img src="<?php echo thumb($val, 240);?>" alt="<?php echo $val['goods_name']?>" width="90" height="90"></a></div>
        <ul class="p"><li><span class="price1">￥<?php echo $val['goods_price']?></span></li><li>市场价：<span class="mktprice1">￥<?php echo $val['goods_marketprice']?></span></li></ul>           
      </div>    
     </li>
     <?php }}?>
      </ul>
  </div>
</div>

</div>
<div class="wrap-m frt"><div id="main" class="clearfix">
  <!-- 商品详情 -->
  <div class="page-maincontent">
    <div id="product_container" class="product-container clearfix">
      <!-- 标题简介 -->
      <div class="product-titles">
      <h2><?php echo $output['goods']['goods_name']; ?></h2>
      </div>

  <div class="product-side">
    <!-- 商品相册 -->

<!-- [图片放大镜] -->
                <link href="<?php echo SHOP_TEMPLATES_URL;?>/css/magiczoom/magiczoom.css" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/css/magiczoom/magiczoomplus.js"></script>
                <div class="goodsDetailFocus">
                    <div class="midPic">
                      <a class="MagicZoomPlus" id="big-pic" href="<?php echo $output['pictureList'][0]['big']?>" rel="hint-text:;">
                      <img src="<?php echo $output['pictureList'][0]['middle']?>" alt=""></a>
                    </div>
                    <div class="smallPic">
                        <?php if (!empty($output['pictureList'])) {?>
                        <?php
                        foreach($output['pictureList'] as $k=>$v){?>
                        <a href="<?php echo $v['middle']?>" rel="zoom-id:big-pic" rev="<?php echo $v['middle']?>" >
                        <img src="<?php echo $v['small']?>" alt="" /></a>
                        <?php }}?>
                    </div>
                </div>
 <!-- [//图片放大镜] -->


    

    <!-- 分享推荐 -->
    <div class="share-recommend" id="share_recommend">
    <!-- share -->
  <span class="share pop-wrapper">
    <a href="javascript:void(0);" nc_type="sharegoods" data-param='{"gid":"<?php echo $output['goods']['goods_id'];?>"}' class="btn btn-rounded action-handle "><span><span><i class="icon icon-share">X</i><i class="text">分享</i></span></span></a>
  </span>
    <!-- recommend -->
  <span class="recommend pop-wrapper">
    <button type="button" class="btn btn-rounded action-handle "><span><span><i class="icon icon-recommend">@</i><i class="text">推荐</i><i class="icon arrow">7</i></span></span></button>
    <div class="pop-body" style="display: none;">
      <div class="pop-title">
          <h3>将商品推荐给好友</h3>
        <div class="close"><button type="button" class="btn pop-close icon">×</button></div>
      </div>
      <div class="pop-content">
                <div class="notice">您还没有登录，请先            <a href="/passport-login.html" class="lnklike">登录</a> 或            <a href="/passport-signup.html" class="lnklike">注册</a> 后推荐给好友。</div>
                <!-- <form action="" method="post"> -->
          <ul class="form" id="op_recommend_form">
            <li class="form-item">
            <label for="" class="form-label">发件人：</label>
            <span class="form-act"><i class="not-login">(登录后显示)</i></span>
            </li>
            <li class="form-item">
            <label for="" class="form-label">收件人：</label>
              <span class="form-act"><textarea name="email" id="" cols="30" rows="3" placeholder="填写多个地址请用逗号“,”隔开。" vtype="required&amp;&amp;emaillist" data-caution="请填写正确邮箱地址" disabled=""></textarea></span>
            </li>
            <li class="form-item">
            <label for="" class="form-label">内容：</label>
              <span class="form-act"><textarea name="content" id="" cols="30" rows="6" vtype="required" data-caution="请填写邮件内容" disabled=""></textarea></span>
            </li>
            <li class="form-item form-item-last">
              <label for="" class="form-label"></label>
              <span class="form-act">
                <a class="btn btn-caution disabled" rel="_request" href="/product-recommend-257-929.html" data-ajax-config="{method:'post',data:$('op_recommend_form').toQueryString(),onSuccess:function(rs){notice.success('邮件发送成功，可继续推荐给好友', $('op_recommend_form'), 'before');}}"><span><span>发送</span></span></a>
              </span>
            </li>
          </ul>
        <!-- </form> -->
      </div>
    </div>
  </span>
    <!-- favarite -->
  <a href="/passport-login.html" class="btn btn-rounded btn-addfav"><span><span><i class="icon icon-fav">.</i><i class="text">收藏</i></span></span></a>
  </div>
  </div>
  <div class="product-main">
    <!-- 商品基本信息 -->
    <div id="product_information" class="product-information">
      <!--商品价格 and 商品评分-->
      <div class="product-concerns">
    <ul>
      <li class="item">
      <span class="label">销售价：</span>
        <span class="detail">
            <b class="price"><ins class="action-price">￥<?php echo $output['goods']['goods_price'];?></ins></b>
            <i class="minor"><span class="action-saveprice">(节省￥<?php echo $output['goods']['goods_marketprice']-$output['goods']['goods_price'];?>)</span></i>        </span>
      </li>
            <li class="item">
      <span class="label">市场价：</span>
        <span class="detail">
          <i class="minor"><del class="action-mktprice">￥<?php echo $output['goods']['goods_marketprice'];?></del></i>
        </span>
      </li>
                        
          </ul>
</div>
      <!-- 赠品和促销 -->
            <!-- 扩展属性 -->
          <div class="product-params">
            <table width="100%">
              <tbody>
                <tr>
                      <td class="label"><div class="text-nowrap">货品编号：</div></td>
                      <td width="90%"><?php echo $output['commonInfo']['goods_serial']?></td>
                </tr>
                <tr>
                    <td class="label"><div class="text-nowrap">配送范围：</div></td>
                    <td >山东 <?php echo $_COOKIE['city_name']." ".$_COOKIE['area_name'];?></td>
                </tr>
                <tr>
                    <td class="label"><div class="text-nowrap">理赔保障：</div></td>
                    <td width="45%">签收当日有效</td>
                </tr>
              </tbody>
            </table>
          </div>

          <p style="font-weight:bold;">近期销量<span style="color:red;"><?php echo $output['goods']['goods_salenum']; ?></span>份</p>
          <!-- 购买区 -->
          <div class="product-buy">
        <!-- 商品规格 -->
        <div id="product_spec" class="product-spec">
        <ul class="spec-area">

     
          <?php if (is_array($output['goods']['spec_name'])) { ?>
          <?php foreach ($output['goods']['spec_name'] as $key => $val) {?>
          <li class="spec-item">
            <span class="item-label"><i><?php echo $val;?></i>：</span>
            <span class="item-content">
            <ul class="clearfix">
            <?php if (is_array($output['goods']['spec_value'][$key]) and !empty($output['goods']['spec_value'][$key])) {?>
            <?php foreach($output['goods']['spec_value'][$key] as $k => $v) {?>
                <li class="spec-attr <?php if (isset($output['goods']['goods_spec'][$k])) {echo 'selected';}?>" data-param="{valid:<?php echo $k;?>}"><a href="javascript:void(0);"><span><?php echo $v;?></span><i></i></a></li>
            <?php }?>
            <?php }?>
            </ul>
            </span>
          </li>
          <?php }}?>


                  </ul>
      </span>
    </li>
      </ul>
</div>
        <div class="product-action">
          <ul>
            <!--商品库存-->
            <li class="product-buy-quantity">
  <label class="item-label" for="for_quantity_input" nctype="goods_stock">数量：</label>
  <span class="item-content"><span class="p-quantity"><a href="javascript:void(0);" class="decrease">-</a><input type="text" id="quantity" value="1" min="1" max="99983"><a href="javascript:void(0);" class="increase">+</a></span> <span class="p-store hide"></span><input type="hidden" name="stock" value="99983"></span>
</li>

            <!--购买按钮-->
            <li class="product-buy-action">
              <a nctype="addcart_submit" class="btn btn-major btn-huge action-addtocart" rel="_request"><span><span>加入购物车</span></span></a>
            </li>
           <!-- S 加入购物车弹出提示框 -->
          <div class="ncs-cart-popup">
            <dl>
              <dt><?php echo $lang['goods_index_cart_success'];?><a title="<?php echo $lang['goods_index_close'];?>" onClick="$('.ncs-cart-popup').css({'display':'none'});">X</a></dt>
              <dd><?php echo $lang['goods_index_cart_have'];?> <strong id="bold_num"></strong> <?php echo $lang['goods_index_number_of_goods'];?> <?php echo $lang['goods_index_total_price'];?><?php echo $lang['nc_colon'];?><em id="bold_mly" class="saleP"></em></dd>
              <dd class="btns"><a href="javascript:void(0);" class="ncs-btn-mini ncs-btn-green" onClick="location.href='<?php echo SHOP_SITE_URL.DS?>index.php?act=cart'"><?php echo $lang['goods_index_view_cart'];?></a> <a href="javascript:void(0);" class="ncs-btn-mini" value="" onClick="$('.ncs-cart-popup').css({'display':'none'});"><?php echo $lang['goods_index_continue_shopping'];?></a></dd>
            </dl>
          </div>
          <!-- E 加入购物车弹出提示框 -->

          </ul>
        </div>
      </div>
    </div>
  </div>




    <div class="clear"></div>

   

   <div class="ncs-goods-main" id="main-nav-holder">
      <div class="ncs-promotion" style="display: none;">
        <div class="ncs-goods-title-nav">
          <ul>
            <li class="current"><a href="javascript:void(0);">优惠套装</a></li>
          </ul>
        </div>
        <div class="ncs-goods-info-content"><!--S 组合销售 -->
          <div class="ncs-bundling" id="nc-bundling"> </div>
          <!--E 组合销售 --></div>
      </div>
      <nav class="tabbar pngFix" id="main-nav">
        <div class="ncs-goods-title-nav">
          <ul id="categorymenu">
            <li class="current"><a id="tabGoodsIntro" href="#content"><?php echo $lang['goods_index_goods_info'];?></a></li>
            <li><a id="tabGoodsRate" href="#content"><?php echo $lang['goods_index_evaluation'];?></a></li>
            <li><a id="tabGoodsTraded" href="#content"><?php echo $lang['goods_index_sold_record'];?></a></li>
            <li><a id="tabGuestbook" href="#content"><?php echo $lang['goods_index_goods_consult'];?></a></li>
          </ul>
        </div>
      </nav>
      <div class="ncs-intro">
        <div class="content bd" id="ncGoodsIntro"> 
          
          <!--S 满就送 -->
          <?php if($output['mansong_info']) { ?>
          <div class="nc-mansong">
            <div class="nc-mansong-ico"></div>
            <dl class="nc-mansong-content">
              <dt><?php echo $output['mansong_info']['mansong_name'];?>
                <time>( <?php echo $lang['nc_promotion_time'];?><?php echo $lang['nc_colon'];?><?php echo date('Y/m/d',$output['mansong_info']['start_time']).'--'.date('Y/m/d',$output['mansong_info']['end_time']);?> )</time>
              </dt>
              <dd>
                <?php foreach($output['mansong_info']['rules'] as $rule) { ?>
                <span><?php echo $lang['nc_man'];?><em><?php echo ncPriceFormat($rule['price']);?></em><?php echo $lang['nc_yuan'];?>
                <?php if(!empty($rule['discount'])) { ?>
                ， <?php echo $lang['nc_reduce'];?><i><?php echo ncPriceFormat($rule['discount']);?></i><?php echo $lang['nc_yuan'];?>
                <?php } ?>
                <?php if(!empty($rule['goods_id'])) { ?>
                ， <?php echo $lang['nc_gift'];?> <a href="<?php echo $rule['goods_url'];?>" title="<?php echo $rule['mansong_goods_name'];?>" target="_blank"> <img src="<?php echo cthumb($rule['goods_image'], 60);?>" alt="<?php echo $rule['mansong_goods_name'];?>"> </a>&nbsp;。
                <?php } ?>
                </span>
                <?php } ?>
              </dd>
              <dd class="nc-mansong-remark"><?php echo $output['mansong_info']['remark'];?></dd>
            </dl>
          </div>
          <?php } ?>
          <!--E 满就送 -->
          <?php if(is_array($output['goods']['goods_attr']) || isset($output['goods']['brand_name'])){?>
          <ul class="nc-goods-sort">
            <li>商家货号：<?php echo $output['goods']['goods_serial'];?></li>
            <?php if(isset($output['goods']['brand_name'])){echo '<li>'.$lang['goods_index_brand'].$lang['nc_colon'].$output['goods']['brand_name'].'</li>';}?>
            <?php if(is_array($output['goods']['goods_attr']) && !empty($output['goods']['goods_attr'])){?>
            <?php foreach ($output['goods']['goods_attr'] as $val){ $val= array_values($val);echo '<li>'.$val[0].$lang['nc_colon'].$val[1].'</li>'; }?>
            <?php }?>
          </ul>
          <?php }?>
          <div class="ncs-goods-info-content">
            <?php if (isset($output['plate_array'][1])) {?>
            <div class="top-template"><?php echo $output['plate_array'][1][0]['plate_content']?></div>
            <?php }?>
            <div class="default"><?php echo $output['goods']['goods_body']; ?></div>
            <?php if (isset($output['plate_array'][0])) {?>
            <div class="bottom-template"><?php echo $output['plate_array'][0][0]['plate_content']?></div>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="ncs-comment">
        <div class="ncs-goods-title-bar hd">
          <h4><a href="javascript:void(0);"><?php echo $lang['goods_index_evaluation'];?></a></h4>
        </div>
        
        <div class="ncs-goods-info-content bd" id="ncGoodsRate">
            <div class="top">
                <div class="rate">
                    <p><strong><?php echo $output['goods_evaluate_info']['good_percent'];?></strong><sub>%</sub>好评</p>
              <span>共有<?php echo $output['goods_evaluate_info']['all'];?>人参与评分</span></div>
            <div class="percent">
              <dl>
                <dt>好评<em>(<?php echo $output['goods_evaluate_info']['good_percent'];?>%)</em></dt>
                <dd><i style="width: <?php echo $output['goods_evaluate_info']['good_percent'];?>%"></i></dd>
              </dl>
              <dl>
                <dt>中评<em>(<?php echo $output['goods_evaluate_info']['normal_percent'];?>%)</em></dt>
                <dd><i style="width: <?php echo $output['goods_evaluate_info']['normal_percent'];?>%"></i></dd>
              </dl>
              <dl>
                <dt>差评<em>(<?php echo $output['goods_evaluate_info']['bad_percent'];?>%)</em></dt>
                <dd><i style="width: <?php echo $output['goods_evaluate_info']['bad_percent'];?>%"></i></dd>
              </dl>
            </div>
            <div class="btns"><span>您可对已购商品进行评价</span>
              <p><a href="<?php echo urlShop('member_order', 'index');?>" class="ncs-btn ncs-btn-red" target="_blank"><i class="icon-comment-alt"></i>评价商品</a></p>
            </div>
          </div>
          <div class="ncs-goods-title-nav">
        <ul id="comment_tab">
            <li data-type="all" class="current"><a href="javascript:void(0);"><?php echo $lang['goods_index_evaluation'];?>(<?php echo $output['goods_evaluate_info']['all'];?>)</a></li>
            <li data-type="1"><a href="javascript:void(0);">好评(<?php echo $output['goods_evaluate_info']['good'];?>)</a></li>
            <li data-type="2"><a href="javascript:void(0);">中评(<?php echo $output['goods_evaluate_info']['normal'];?>)</a></li> 
            <li data-type="3"><a href="javascript:void(0);">差评(<?php echo $output['goods_evaluate_info']['bad'];?>)</a></li>
        </ul></div>
          <!-- 商品评价内容部分 -->
          <div id="goodseval" class="ncs-commend-main"></div>
        </div>
      </div>
      <div class="ncg-salelog">
        <div class="ncs-goods-title-bar hd">
         <h4><a href="javascript:void(0);"><?php echo $lang['goods_index_sold_record'];?></a></h4>
        </div>
        <div class="ncs-goods-info-content bd" id="ncGoodsTraded">
          <div class="top">
           
          </div>
          <!-- 成交记录内容部分 -->
          <div id="salelog_demo" class="ncs-loading"> </div>
        </div>
      </div>
      <div class="ncs-consult">
        <div class="ncs-goods-title-bar hd">
          <h4><a href="javascript:void(0);"><?php echo $lang['goods_index_goods_consult'];?></a></h4>
        </div>
        <div class="ncs-goods-info-content bd" id="ncGuestbook"> 
          <!-- 咨询留言内容部分 -->
          <div class="ncs-guestbook">
            <div id="cosulting_demo" class="ncs-loading"> </div>
          </div>
        </div>
      </div>
      <?php if(!empty($output['goods_commend']) && is_array($output['goods_commend']) && count($output['goods_commend'])>1){?>
      <div class="ncs-recommend">
        <div class="title">
          <h4><?php echo $lang['goods_index_goods_commend'];?></h4>
        </div>
        <div class="content">
          <ul>
            <?php foreach($output['goods_commend'] as $goods_commend){?>
            <?php if($output['goods']['goods_id'] != $goods_commend['goods_id']){?>
            <li>
              <dl>
                <dt class="goods-name"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_commend['goods_id']));?>" target="_blank" title="<?php echo $goods_commend['goods_jingle'];?>"><?php echo $goods_commend['goods_name'];?><em><?php echo $goods_commend['goods_jingle'];?></em></a></dt>
                <dd class="goods-pic"><a href="<?php echo urlShop('goods', 'index', array('goods_id' => $goods_commend['goods_id']));?>" target="_blank" title="<?php echo $goods_commend['goods_jingle'];?>"><img src="<?php echo thumb($goods_commend, 240);?>" alt="<?php echo $goods_commend['goods_name'];?>"/></a></dd>
                <dd class="goods-price"><?php echo $lang['currency'];?><?php echo $goods_commend['goods_price'];?></dd>
              </dl>
            </li>
            <?php }?>
            <?php }?>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      <?php }?>
    </div>


    <!-- 配件套餐 -->
    





      </div>
         
    </div>
  </div>
</div>

</div></div>

<form id="buynow_form" method="post" action="<?php echo SHOP_SITE_URL;?>/index.php">
  <input id="act" name="act" type="hidden" value="buy" />
  <input id="op" name="op" type="hidden" value="buy_step1" />
  <input id="cart_id" name="cart_id[]" type="hidden"/>
</form>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.charCount.js"></script> 
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.ajaxContent.pack.js" type="text/javascript"></script> 
<script src="<?php echo RESOURCE_SITE_URL;?>/js/sns.js" type="text/javascript" charset="utf-8"></script> 
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.F_slider.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/waypoints.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.raty/jquery.raty.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.nyroModal/custom.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.poshytip.min.js" charset="utf-8"></script>
<link href="<?php echo RESOURCE_SITE_URL;?>/js/jquery.nyroModal/styles/nyroModal.css" rel="stylesheet" type="text/css" id="cssfile2" />

<script>
    //收藏分享处下拉操作
    jQuery.divselect = function(divselectid,inputselectid) {
      var inputselect = $(inputselectid);
      $(divselectid).mouseover(function(){
          var ul = $(divselectid+" ul");
          ul.slideDown("fast");
          if(ul.css("display")=="none"){
              ul.slideDown("fast");
          }
      });
      $(divselectid).live('mouseleave',function(){
          $(divselectid+" ul").hide();
      });
    };
$(function(){
    // 加入购物车
    $('a[nctype="addcart_submit"]').click(function(){
        addcart(<?php echo $output['goods']['goods_id'];?>, checkQuantity());
    });
    // 立即购买
    $('a[nctype="buynow_submit"]').click(function(){
        buynow(<?php echo $output['goods']['goods_id']?>,checkQuantity());
    });

    //浮动导航  waypoints.js
    $('#main-nav').waypoint(function(event, direction) {
        $(this).parent().parent().parent().toggleClass('sticky', direction === "down");
        event.stopPropagation();
    });

    // 分享收藏下拉操作
    $.divselect("#handle-l");
    $.divselect("#handle-r");

});

function checkSpec() {
    var spec_param = <?php echo $output['spec_list'];?>;
    var spec = new Array();
    $('#product_spec').find('.selected').each(function(){
        var data_str = ''; eval('data_str =' + $(this).attr('data-param'));
        spec.push(data_str.valid);
    });
    spec1 = spec.sort(function(a,b){
        return a-b;
    });
    var spec_sign = spec1.join('|');
    $.each(spec_param, function(i, n){
        if (n.sign == spec_sign) {
            window.location.href = n.url;
        }
    });
}

// 验证购买数量
function checkQuantity(){
    var quantity = parseInt($("#quantity").val());
    if (quantity < 1) {
        alert("<?php echo $lang['goods_index_pleaseaddnum'];?>");
        $("#quantity").val('1');
        return false;
    }
    return quantity;
}

// 规格页面跳转
// function 

// 立即购买js
function buynow(goods_id,quantity){
<?php if ($_SESSION['is_login'] !== '1'){?>
  login_dialog();
<?php }else{?>
    if (!quantity) {
        return;
    }
    $("#cart_id").val(goods_id+'|'+quantity);
    $("#buynow_form").submit();
<?php }?>
}
$(function(){
    //选择地区查看运费
    $('#transport_pannel>a').click(function(){
      var id = $(this).attr('nctype');
      if (id=='undefined') return false;
      var _self = this,tpl_id = '<?php echo $output['goods']['transport_id'];?>';
      var url = 'index.php?act=goods&op=calc&rand='+Math.random();
      $('#transport_price').css('display','none');
      $('#loading_price').css('display','');
      $.getJSON(url, {'id':id,'tid':tpl_id}, function(data){
        if (data == null) return false;
          if(data != 'undefined') {$('#nc_kd').html(data);}else{$('#nc_kd').html('');}
          $('#transport_price').css('display','');
        $('#loading_price').css('display','none');
          $('#ncrecive').html($(_self).html());
      });
    });
    <?php if($output['goods']['goods_show'] == '1'){?>
    $("#nc-bundling").load('index.php?act=goods&op=get_bundling&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>', function(){
        if($(this).html() != '') {
            $(this).parents('.ncs-promotion:first').show();
        }
    });
    <?php }?>
    $("#salelog_demo").load('index.php?act=goods&op=salelog&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>', function(){
        // Membership card
        $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
    });
  $("#cosulting_demo").load('index.php?act=goods&op=cosulting&goods_id=<?php echo $output['goods']['goods_id'];?>&store_id=<?php echo $output['goods']['store_id'];?>', function(){
    // Membership card
    $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
  });
});

/** goods.php **/
$(function(){ 
  // 商品内容部分折叠收起侧边栏控制
  $('#fold').click(function(){
      $('.ncs-goods-layout').toggleClass('expanded');
  });
  // 商品内容介绍Tab样式切换控制
  $('#categorymenu').find("li").click(function(){
    $('#categorymenu').find("li").removeClass('current');
    $(this).addClass('current');
  });
  // 商品详情默认情况下显示全部
  $('#tabGoodsIntro').click(function(){
    $('.bd').css('display','');
    $('.hd').css('display',''); 
  });
  // 点击评价隐藏其他以及其标题栏
  $('#tabGoodsRate').click(function(){
    $('.bd').css('display','none');
    $('#ncGoodsRate').css('display','');
    $('.hd').css('display','none');
  });
  // 点击成交隐藏其他以及其标题
  $('#tabGoodsTraded').click(function(){
    $('.bd').css('display','none');
    $('#ncGoodsTraded').css('display','');
    $('.hd').css('display','none');
  });
  // 点击咨询隐藏其他以及其标题
  $('#tabGuestbook').click(function(){
    $('.bd').css('display','none');
    $('#ncGuestbook').css('display','');
    $('.hd').css('display','none');
  });
  //商品排行Tab切换
  $(".ncs-top-tab > li > a").mouseover(function(e) {
    if (e.target == this) {
      var tabs = $(this).parent().parent().children("li");
      var panels = $(this).parent().parent().parent().children(".ncs-top-panel");
      var index = $.inArray(this, $(this).parent().parent().find("a"));
      if (panels.eq(index)[0]) {
        tabs.removeClass("current ").eq(index).addClass("current ");
        panels.addClass("hide").eq(index).removeClass("hide");
      }
    }
  });
  //信用评价动态评分打分人次Tab切换
  $(".ncs-rate-tab > li > a").mouseover(function(e) {
    if (e.target == this) {
      var tabs = $(this).parent().parent().children("li");
      var panels = $(this).parent().parent().parent().children(".ncs-rate-panel");
      var index = $.inArray(this, $(this).parent().parent().find("a"));
      if (panels.eq(index)[0]) {
        tabs.removeClass("current ").eq(index).addClass("current ");
        panels.addClass("hide").eq(index).removeClass("hide");
      }
    }
  });
    
//触及显示缩略图 
  $('.goods-pic > .thumb').hover(
    function(){
      $(this).next().css('display','block');
    },
    function(){
      $(this).next().css('display','none');
    }
  );
  
  /* 商品购买数量增减js */
  // 增加
  $('.increase').click(function(){

    num = parseInt($('#quantity').val());

      <?php if (!empty($output['goods']['upper_limit'])) {?>
      max = <?php echo $output['goods']['upper_limit'];?>;
      if(num >= max){
          alert('最多限购'+max+'件');
          return false;
      }
      <?php } ?>
    $('#quantity').val(num+1);
  });
  //减少
  $('.decrease').click(function(){
    num = parseInt($('#quantity').val());
    if(num > 1){
      $('#quantity').val(num-1);
    }
  });
  
  // 搜索价格不能填写非数字。
  var re = /^[1-9]+[0-9]*(\.\d*)?$|^0(\.\d*)?$/;
  $('input[name="start_price"]').change(function(){
    if(!re.test($(this).val())){
      $(this).val('');
    }
  });
  $('input[name="end_price"]').change(function(){
    if(!re.test($(this).val())){
      $(this).val('');
    }
  });
});

/* add cart */
function addcart(goods_id, quantity)
{
  if (!quantity) return false;
    var url = 'index.php?act=cart&op=add';
    $.getJSON(url, {'goods_id':goods_id, 'quantity':quantity}, function(data){
      if(data != null){
        if (data.state)
            {
                $('#bold_num').html(data.num);
                $('#bold_mly').html(price_format(data.amount));
                $('.ncs-cart-popup').fadeIn('fast');
//                 setTimeout(slideUp_fn, 5000);
                // 头部加载购物车信息
                load_cart_information();
            }
            else
            {
                alert(data.msg);
            }
      }
    });
}
// 显示举报下拉链接
$(document).ready(function() {
  $(".ncs-inform").hover(function() {
    $(this).addClass("hover");
  },
  function() {
    $(this).removeClass("hover");
  });
})

//评价列表
$(document).ready(function(){
    $('#comment_tab').on('click', 'li', function() {
        $('#comment_tab li').removeClass('current');
        $(this).addClass('current');
        load_goodseval($(this).attr('data-type'));
    });

    load_goodseval('all');

    function load_goodseval(type) {
        var url = '<?php echo urlShop('goods', 'comments', array('goods_id' => $output['goods']['goods_id']));?>';
        url += '&type=' + type;
        $("#goodseval").load(url, function(){
            $(this).find('[nctype="mcard"]').membershipCard({type:'shop'});
        });
    }
});
</script> 

