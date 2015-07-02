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
<div id="product_album" class="product-album">
  <div class="product-album-preview clearfix">
    <div class="product-album-pic" style="width:300px;height:300px;line-height:298px;*font-size:270px;">
      <a href="http://www.guolehui.com.cn/public/images/48/c2/f0/6cfd976101e93d7b3f9fd8bcd451bb9030ecdd3e.jpg?1434640282#h" class="album-preview-container" id="op_product_zoom"><img src="http://www.guolehui.com.cn/public/images/e9/70/33/5c3f675040e8e9a8edcf97b20dabf84da316c2ae.jpg?1431183135#h" alt="" class="small-pic"><div class="album-zooms-handle"></div></a>
    </div>
    <img class="loading" app="b2c" src="http://www.guolehui.com.cn/public/app/b2c/statics/images/loading.gif" alt="正在加载大图..." style="display:none;">    <div class="product-album-zoom"></div>
      <div class="loading" style="visibility: hidden; left: 90px; top: 138px;"><img alt="loading..." src="http://www.guolehui.com.cn/public/app/b2c/statics/images/loading.gif"> 正在加载大图...</div></div>
  <div class="product-album-thumb product-album-thumb-bottom">
    <div class="flip prev forward over"><a href="javascript:void(0);" class="icon">4</a></div>
    <div class="thumbnail-list" style="width:268px;">
      <ul class="clearfix" style="width: 216px;">
                  <li class="">
            <div class="arrow arrow-top"><i class="below"></i></div>
            <div class="thumbnail"><a href="http://www.guolehui.com.cn/public/images/48/c2/f0/6cfd976101e93d7b3f9fd8bcd451bb9030ecdd3e.jpg?1434640282#h" rel="op_product_zoom" rev="http://www.guolehui.com.cn/public/images/84/94/79/7d50400ac2de4cc4a728e5663284edca0fecfad4.jpg?1434640282#h"><img src="http://www.guolehui.com.cn/public/images/df/da/48/68eeebf09f3672356df019a3a81cd8f4aca62876.jpg?1434640282#h" alt="" width="60" height="60"></a></div>
          </li>
                    <li class="">
            <div class="arrow arrow-top"><i class="below"></i></div>
            <div class="thumbnail"><a href="http://www.guolehui.com.cn/public/images/12/24/1a/e98b479f1fdf3d5df57b5126135ae84565557d9a.jpg?1431184381#h" rel="op_product_zoom" rev="http://www.guolehui.com.cn/public/images/b6/db/66/da4c9a068106e66ac3aae4a1faad97e12cff7b1f.jpg?1431184381#h"><img src="http://www.guolehui.com.cn/public/images/fa/c2/7f/b17a656e9fbcab55658b21b586535bcbd9c59f2a.jpg?1431184381#h" alt="" width="60" height="60"></a></div>
          </li>
                    <li class="active">
            <div class="arrow arrow-top"><i class="below"></i></div>
            <div class="thumbnail"><a href="http://www.guolehui.com.cn/public/images/c9/eb/a1/101e3f407fe424fff7b18291ee329447ed05a302.jpg?1431183135#h" rel="op_product_zoom" rev="http://www.guolehui.com.cn/public/images/e9/70/33/5c3f675040e8e9a8edcf97b20dabf84da316c2ae.jpg?1431183135#h"><img src="http://www.guolehui.com.cn/public/images/24/0b/89/c2dcd53e3bc3054c153f55bbb373e1f1c58de7b5.jpg?1431183135#h" alt="" width="60" height="60"></a></div>
          </li>
                </ul>
    </div>
    <div class="flip next backward over"><a href="javascript:void(0);" class="icon">5</a></div>
  </div>
</div>
    <!-- 分享推荐 -->
    <div class="share-recommend" id="share_recommend">
    <!-- share -->
  <span class="share pop-wrapper">
    <button type="button" class="btn btn-rounded action-handle "><span><span><i class="icon icon-share">X</i><i class="text">分享</i><i class="icon arrow">7</i></span></span></button>
    <div class="pop-body" style="display: none;">
      <div class="share-mini">
                <a href="http://shuo.douban.com/!service/share?href=http%3A%2F%2Fwww.guolehui.com.cn%2Fproduct-929.html&amp;image=http%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F6a%2F6b%2Fcd%2Fa97f3e3c99888afd98096e2226c51979a646db51.jpg%3F1434640282%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F23%2F48%2F47%2F6e6b74c6d62a1e40717af7b1a2fc7bad8a0d2572.jpg%3F1431184381%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F18%2Fda%2F20%2F0cdf78bba5d4ecce8cd94e384466cc72214059af.jpg%3F1431183135%23h&amp;name=%E3%80%90%E6%9E%9C%E4%B9%90%E6%B1%87%E7%A9%BA%E8%BF%90%E5%88%B0%E8%B4%A7%EF%BC%9B30mm%E4%BC%98%E8%B4%A8%E7%BE%8E%E5%9B%BD%E6%A8%B1%E6%A1%83%2F%E8%BD%A6%E5%8E%98%E5%AD%90%E3%80%90%E7%89%B9%E4%BB%B7%E3%80%91%E3%80%91%EF%BC%8C%E9%94%80%E5%94%AE%E4%BB%B7155.000%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA+%E6%9E%9C%E4%B9%90%E6%B1%87%E2%80%94%E4%B8%AD%E9%AB%98%E7%AB%AF%E9%B2%9C%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E6%B0%B4%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E8%BF%9B%E5%8F%A3%E6%B0%B4%E6%9E%9C%E7%BD%91%EF%BC%8C%E5%85%A8%E5%9B%BD%E6%B0%B4%E6%9E%9C%E9%85%8D%E9%80%81%EF%BC%89&amp;" target="_blank" class="douban"><i class="icon"></i>豆瓣网</a>
                <a href="http://www.kaixin001.com/rest/records.php?flag=1&amp;style=11&amp;url=http%3A%2F%2Fwww.guolehui.com.cn%2Fproduct-929.html&amp;pic=http%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F6a%2F6b%2Fcd%2Fa97f3e3c99888afd98096e2226c51979a646db51.jpg%3F1434640282%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F23%2F48%2F47%2F6e6b74c6d62a1e40717af7b1a2fc7bad8a0d2572.jpg%3F1431184381%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F18%2Fda%2F20%2F0cdf78bba5d4ecce8cd94e384466cc72214059af.jpg%3F1431183135%23h&amp;content=%E3%80%90%E6%9E%9C%E4%B9%90%E6%B1%87%E7%A9%BA%E8%BF%90%E5%88%B0%E8%B4%A7%EF%BC%9B30mm%E4%BC%98%E8%B4%A8%E7%BE%8E%E5%9B%BD%E6%A8%B1%E6%A1%83%2F%E8%BD%A6%E5%8E%98%E5%AD%90%E3%80%90%E7%89%B9%E4%BB%B7%E3%80%91%E3%80%91%EF%BC%8C%E9%94%80%E5%94%AE%E4%BB%B7155.000%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA+%E6%9E%9C%E4%B9%90%E6%B1%87%E2%80%94%E4%B8%AD%E9%AB%98%E7%AB%AF%E9%B2%9C%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E6%B0%B4%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E8%BF%9B%E5%8F%A3%E6%B0%B4%E6%9E%9C%E7%BD%91%EF%BC%8C%E5%85%A8%E5%9B%BD%E6%B0%B4%E6%9E%9C%E9%85%8D%E9%80%81%EF%BC%89&amp;" target="_blank" class="kaixin001"><i class="icon"></i>开心网</a>
                <a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http%3A%2F%2Fwww.guolehui.com.cn%2Fproduct-929.html&amp;title=%E3%80%90%E6%9E%9C%E4%B9%90%E6%B1%87%E7%A9%BA%E8%BF%90%E5%88%B0%E8%B4%A7%EF%BC%9B30mm%E4%BC%98%E8%B4%A8%E7%BE%8E%E5%9B%BD%E6%A8%B1%E6%A1%83%2F%E8%BD%A6%E5%8E%98%E5%AD%90%E3%80%90%E7%89%B9%E4%BB%B7%E3%80%91%E3%80%91%EF%BC%8C%E9%94%80%E5%94%AE%E4%BB%B7155.000%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA+%E6%9E%9C%E4%B9%90%E6%B1%87%E2%80%94%E4%B8%AD%E9%AB%98%E7%AB%AF%E9%B2%9C%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E6%B0%B4%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E8%BF%9B%E5%8F%A3%E6%B0%B4%E6%9E%9C%E7%BD%91%EF%BC%8C%E5%85%A8%E5%9B%BD%E6%B0%B4%E6%9E%9C%E9%85%8D%E9%80%81%EF%BC%89&amp;pics=http%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F6a%2F6b%2Fcd%2Fa97f3e3c99888afd98096e2226c51979a646db51.jpg%3F1434640282%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F23%2F48%2F47%2F6e6b74c6d62a1e40717af7b1a2fc7bad8a0d2572.jpg%3F1431184381%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F18%2Fda%2F20%2F0cdf78bba5d4ecce8cd94e384466cc72214059af.jpg%3F1431183135%23h&amp;" target="_blank" class="qzone"><i class="icon"></i>QQ空间</a>
                <a href="http://widget.renren.com/dialog/share?resourceUrl=http%3A%2F%2Fwww.guolehui.com.cn%2Fproduct-929.html&amp;pic=http%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F6a%2F6b%2Fcd%2Fa97f3e3c99888afd98096e2226c51979a646db51.jpg%3F1434640282%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F23%2F48%2F47%2F6e6b74c6d62a1e40717af7b1a2fc7bad8a0d2572.jpg%3F1431184381%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F18%2Fda%2F20%2F0cdf78bba5d4ecce8cd94e384466cc72214059af.jpg%3F1431183135%23h&amp;title=%E3%80%90%E6%9E%9C%E4%B9%90%E6%B1%87%E7%A9%BA%E8%BF%90%E5%88%B0%E8%B4%A7%EF%BC%9B30mm%E4%BC%98%E8%B4%A8%E7%BE%8E%E5%9B%BD%E6%A8%B1%E6%A1%83%2F%E8%BD%A6%E5%8E%98%E5%AD%90%E3%80%90%E7%89%B9%E4%BB%B7%E3%80%91%E3%80%91%EF%BC%8C%E9%94%80%E5%94%AE%E4%BB%B7155.000%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA+%E6%9E%9C%E4%B9%90%E6%B1%87%E2%80%94%E4%B8%AD%E9%AB%98%E7%AB%AF%E9%B2%9C%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E6%B0%B4%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E8%BF%9B%E5%8F%A3%E6%B0%B4%E6%9E%9C%E7%BD%91%EF%BC%8C%E5%85%A8%E5%9B%BD%E6%B0%B4%E6%9E%9C%E9%85%8D%E9%80%81%EF%BC%89&amp;" target="_blank" class="renren"><i class="icon"></i>人人网</a>
                <a href="http://service.weibo.com/share/share.php?srcUrl=http%3A%2F%2Fwww.guolehui.com.cn%2Fproduct-929.html&amp;pic=http%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F6a%2F6b%2Fcd%2Fa97f3e3c99888afd98096e2226c51979a646db51.jpg%3F1434640282%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F23%2F48%2F47%2F6e6b74c6d62a1e40717af7b1a2fc7bad8a0d2572.jpg%3F1431184381%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F18%2Fda%2F20%2F0cdf78bba5d4ecce8cd94e384466cc72214059af.jpg%3F1431183135%23h&amp;title=%E3%80%90%E6%9E%9C%E4%B9%90%E6%B1%87%E7%A9%BA%E8%BF%90%E5%88%B0%E8%B4%A7%EF%BC%9B30mm%E4%BC%98%E8%B4%A8%E7%BE%8E%E5%9B%BD%E6%A8%B1%E6%A1%83%2F%E8%BD%A6%E5%8E%98%E5%AD%90%E3%80%90%E7%89%B9%E4%BB%B7%E3%80%91%E3%80%91%EF%BC%8C%E9%94%80%E5%94%AE%E4%BB%B7155.000%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA+%E6%9E%9C%E4%B9%90%E6%B1%87%E2%80%94%E4%B8%AD%E9%AB%98%E7%AB%AF%E9%B2%9C%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E6%B0%B4%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E8%BF%9B%E5%8F%A3%E6%B0%B4%E6%9E%9C%E7%BD%91%EF%BC%8C%E5%85%A8%E5%9B%BD%E6%B0%B4%E6%9E%9C%E9%85%8D%E9%80%81%EF%BC%89&amp;appkey=h&amp;" target="_blank" class="sina"><i class="icon"></i>新浪微博</a>
                <a href="http://share.v.t.qq.com/index.php?c=share&amp;a=index&amp;site=http%3A%2F%2Fwww.guolehui.com.cn%2Fproduct-929.html&amp;pic=http%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F6a%2F6b%2Fcd%2Fa97f3e3c99888afd98096e2226c51979a646db51.jpg%3F1434640282%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F23%2F48%2F47%2F6e6b74c6d62a1e40717af7b1a2fc7bad8a0d2572.jpg%3F1431184381%23h%2Chttp%3A%2F%2Fwww.guolehui.com.cn%2Fpublic%2Fimages%2F18%2Fda%2F20%2F0cdf78bba5d4ecce8cd94e384466cc72214059af.jpg%3F1431183135%23h&amp;title=%E3%80%90%E6%9E%9C%E4%B9%90%E6%B1%87%E7%A9%BA%E8%BF%90%E5%88%B0%E8%B4%A7%EF%BC%9B30mm%E4%BC%98%E8%B4%A8%E7%BE%8E%E5%9B%BD%E6%A8%B1%E6%A1%83%2F%E8%BD%A6%E5%8E%98%E5%AD%90%E3%80%90%E7%89%B9%E4%BB%B7%E3%80%91%E3%80%91%EF%BC%8C%E9%94%80%E5%94%AE%E4%BB%B7155.000%EF%BC%88%E5%88%86%E4%BA%AB%E8%87%AA+%E6%9E%9C%E4%B9%90%E6%B1%87%E2%80%94%E4%B8%AD%E9%AB%98%E7%AB%AF%E9%B2%9C%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E6%B0%B4%E6%9E%9C%E7%BD%91%E8%B4%AD%EF%BC%8C%E8%BF%9B%E5%8F%A3%E6%B0%B4%E6%9E%9C%E7%BD%91%EF%BC%8C%E5%85%A8%E5%9B%BD%E6%B0%B4%E6%9E%9C%E9%85%8D%E9%80%81%EF%BC%89&amp;appkey=h&amp;" target="_blank" class="tencent"><i class="icon"></i>腾讯微博</a>
              </div>
    </div>
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
                    <td ><?php echo $output['commonInfo']['transport_title']?></td>
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


<div id="product_notify" class="product-notify" style="display:none;">
  <p class="desc">该货品暂时缺货，请在下面输入您的邮箱地址或手机号码，当我们有现货供应时，我们会发送邮件通知您！</p>
  <form class="form" method="post" action="/product-toNotify.html">
    <input type="hidden" name="item[0][goods_id]" value="257">
    <input type="hidden" name="item[0][product_id]" value="929">
    <ul>
      <li class="form-item">
        <label for="" class="form-label">邮箱地址：</label>
        <span class="form-act">
          <input class="x-input" type="text" name="email" id="dom_el_2bf2490" size="30" vtype="required&amp;&amp;email">        </span>
      </li>
      <li class="form-item">
        <label for="" class="form-label">手机号码：</label>
        <span class="form-act">
          <input class="x-input" type="text" name="cellphone" id="dom_el_2bf2491" size="30" vtype="required">        </span>
      </li>
      <li class="form-item form-item-last">
        <label for="" class="form-label"></label>
        <span class="form-act">
          <button type="submit" class="btn btn-caution" rel="_request"><span><span>提交</span></span></button>        </span>
      </li>
    </ul>
  </form>
</div>

    <div class="album-zooms-container" style="width: 450px; height: 450px; left: -10000px; top: 314px; visibility: hidden;"><img src="http://www.guolehui.com.cn/public/images/c9/eb/a1/101e3f407fe424fff7b18291ee329447ed05a302.jpg?1431183135#h" style="left: 0px; top: 0px; visibility: visible;"></div><img src="http://www.guolehui.com.cn/public/images/48/c2/f0/6cfd976101e93d7b3f9fd8bcd451bb9030ecdd3e.jpg?1434640282#h" class="album-big-image"><img src="http://www.guolehui.com.cn/public/images/84/94/79/7d50400ac2de4cc4a728e5663284edca0fecfad4.jpg?1434640282#h" class="album-mid-image"><img src="http://www.guolehui.com.cn/public/images/12/24/1a/e98b479f1fdf3d5df57b5126135ae84565557d9a.jpg?1431184381#h" class="album-big-image"><img src="http://www.guolehui.com.cn/public/images/b6/db/66/da4c9a068106e66ac3aae4a1faad97e12cff7b1f.jpg?1431184381#h" class="album-mid-image"><img src="http://www.guolehui.com.cn/public/images/c9/eb/a1/101e3f407fe424fff7b18291ee329447ed05a302.jpg?1431183135#h" class="album-big-image"><img src="http://www.guolehui.com.cn/public/images/e9/70/33/5c3f675040e8e9a8edcf97b20dabf84da316c2ae.jpg?1431183135#h" class="album-mid-image"></div>

    <!-- 配件套餐 -->
    
    <div class="product-tags clearfix"><h2 class="tags-hd active"><a href="#detail">商品详情</a></h2><h2 class="tags-hd tag-comment"><a href="#recomment">商品评论</a></h2><h2 class="tags-hd tag-consult"><a href="#consult">商品咨询</a></h2></div><div id="product_section">
      <div id="product_detail" class="product-section product-detail">
        
        <div class="product-attributes">
  <ul class="clearfix">
    <li>品牌：<a href="/brand.html"></a></li>
    <li>所属分类：美国水果</li>
      </ul>
</div>
<div class="detail-content">
  <div><img src="http://mall.guolehui.com.cn/public/images/e7/c3/22/6ed5c87aee29c633f0f40b1a7a471fd61b52a763.jpg?1433060724#w">
<img src="http://mall.guolehui.com.cn/public/images/09/4f/26/48b9f3a66ca301086a1c5bae5a8dce63c34af784.jpg?1433060733#w">
<img src="http://mall.guolehui.com.cn/public/images/7a/13/9d/b391c36f2f1612ed0177aa75ae2c28f9158a0a18.jpg?1433060748#w">
<img src="http://mall.guolehui.com.cn/public/images/11/45/59/6affdaffdd176051e6b6d0926b260f1db2011cc3.jpg?1433060756#w">
<img src="http://mall.guolehui.com.cn/public/images/80/cf/1d/6ed0b7db8bda8a2b705d083fea286dc5d7d191d1.jpg?1433060769#w">
<img src="http://mall.guolehui.com.cn/public/images/1f/44/77/07ae38b1a2b7bb893e7b7e131c8a80716c3d8f74.jpg?1433060778#w"></div>
</div>

<div id="product_comment_init" class="product-comment " data-sync-type="product_comment_init"><div id="product_comment_init" class="mod" data-sync-type="product_comment_init">
  <div class="mod-title">
    <h2>商品评论</h2>
  </div>
  <div class="mod-content">
    <div class="comment-list">
      <table class="product-score">
  <tbody>
    <tr>
            <td class="score-total">
        <span class="label">商品评分</span>
        <span class="values">
          <em class="stars stars-45">
            <span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span>
          </em>
          <b class="score">4.5</b>
          <span class="total"><b class="total-count">473</b>人评分</span>
        </span>
      </td>
      <td>
        <ul class="scores-list">
                    <li class="scores-item">
          <span class="label">配送速度</span>
          <em class="stars stars-45">
            <span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span>
          </em>
          <b class="score">4.5</b>
          </li>
                    <li class="scores-item">
          <span class="label">新鲜度</span>
          <em class="stars stars-45">
            <span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span>
          </em>
          <b class="score">4.5</b>
          </li>
                    <li class="scores-item">
          <span class="label">口感</span>
          <em class="stars stars-45">
            <span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span>
          </em>
          <b class="score">4.5</b>
          </li>
                  </ul>
      </td>
            <td>
        <p class="desc"><i></i></p>
        <a href="/member-nodiscuss.html" class="btn btn-simple"><span><span>我要评论</span></span></a>
        <p class="desc"></p>
      </td>
    </tr>
  </tbody>
</table>
<div class="title">共<i>473</i> 个评论。
    <a href="javascript:void(0);" onclick="$$('.product-tags .tag-comment').fireEvent('click');window.fireEvent('scroll');location.href='#product_comment';">查看全部评论 »</a>
  </div>
<div class="action-content-list">
  <ul class="content">
        <li class="comment-item">
      <input type="hidden" name="id" value="5068">
      <div class="member">
        <div class="member-avatar">
          <img src="http://www.guolehui.com.cn/public/app/b2c/statics/sprites/default-avatar.png" alt="">        </div>
        <div class="member-info">
          <div class="level"></div>
          <div class="username">小***妈</div>
        </div>
      </div>
      <div class="member-discuss">
                <div class="point point-left"><i class="below"></i><i class="above"></i></div>
        <div class="discuss-label"><span class="stars stars-50"><span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span></span><span class="time">15-06-22 17:58</span></div>
                <p class="discuss-content">已经买了两次了</p>
              </div>
    </li>
        <li class="comment-item">
      <input type="hidden" name="id" value="5067">
      <div class="member">
        <div class="member-avatar">
          <img src="http://www.guolehui.com.cn/public/app/b2c/statics/sprites/default-avatar.png" alt="">        </div>
        <div class="member-info">
          <div class="level"></div>
          <div class="username">小***妈</div>
        </div>
      </div>
      <div class="member-discuss">
                <div class="point point-left"><i class="below"></i><i class="above"></i></div>
        <div class="discuss-label"><span class="stars stars-50"><span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span></span><span class="time">15-06-22 17:54</span></div>
                <p class="discuss-content">第三次购买了。</p>
              </div>
    </li>
        <li class="comment-item">
      <input type="hidden" name="id" value="5061">
      <div class="member">
        <div class="member-avatar">
          <img src="http://www.guolehui.com.cn/public/app/b2c/statics/sprites/default-avatar.png" alt="">        </div>
        <div class="member-info">
          <div class="level"></div>
          <div class="username">张***生</div>
        </div>
      </div>
      <div class="member-discuss">
                <div class="point point-left"><i class="below"></i><i class="above"></i></div>
        <div class="discuss-label"><span class="stars stars-40"><span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span></span><span class="time">15-06-21 14:16</span></div>
                <p class="discuss-content">东西很好！物流这次有点不理想，但是卖家做出了很好的调整，很好，我兑现我的承诺，这家店值得信赖！</p>
              </div>
    </li>
        <li class="comment-item">
      <input type="hidden" name="id" value="5062">
      <div class="member">
        <div class="member-avatar">
          <img src="http://www.guolehui.com.cn/public/app/b2c/statics/sprites/default-avatar.png" alt="">        </div>
        <div class="member-info">
          <div class="level"></div>
          <div class="username">小***妈</div>
        </div>
      </div>
      <div class="member-discuss">
                <div class="point point-left"><i class="below"></i><i class="above"></i></div>
        <div class="discuss-label"><span class="stars stars-50"><span class="below"><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i><i class="icon star">/</i></span><span class="above"><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i><i class="icon star">.</i></span></span><span class="time">15-06-21 11:26</span></div>
                <p class="discuss-content">非常好。昨天中午下单，今天一早就到了。</p>
              </div>
    </li>
      </ul>
  </div>
<!--回复-->
<div class="post-reply action-post-reply hide">
  <form action="/comment-toReply.html" method="post" class="action-code-form">
    <input type="hidden" name="id">
    <input type="hidden" name="product_id" value="">
    <ul>
            <li class="form-item">
      <div class="form-act-wide no-permission">
        <textarea class="action-filled-textarea" name="comment" id="" cols="30" rows="10" disabled="" vtype="required" data-caution="请填写回复内容，最多1000字" placeholder="请填写评论内容，最多1000字"></textarea>
                <div class="mini-mask">没有开启回复功能!</div>
                <div class="clearfix">
          <div class="word-count"><i class="current">0</i>/<i class="word-limit">1000</i></div>
          <div class="sub-label"></div>
        </div>
      </div>
      </li>
            <li class="form-item form-item-last">
      <span class="form-act"><button type="submit" class="btn btn-simple action-submit-reply" rel="_request" disabled="disabled"><span><span>提交回复</span></span></button><a href="javascript:void(0);" class="btn-close action-close-reply">取消回复</a></span>
      </li>
    </ul>
  </form>
</div>

    </div>
  </div>
</div>

</div>
<div id="product_consult_init" class="product-consult " data-sync-type="product_consult_init"><div class="mod">
  <div class="mod-title"><h2>商品咨询</h2></div>
  <div class="consult-title">
  <button type="button" class="btn btn-simple" onclick="$$('.product-tags .tag-consult').fireEvent('click');window.fireEvent('scroll');location.href='#post_consult';"><span><span>我要咨询</span></span></button>  <em>请<a href="/passport-login.html">登录</a>后再咨询,如果您不是会员请<a href="/passport-signup.html">注册</a>!</em>
</div>
<div class="consult-content" id="consult_content_init">
  <!---->

<ul class="tabs clearfix switchable-triggerBox">
  <li class="active"><a class="action-consult-trigger" href="/comment-ajax_type_ask-257.html">全部咨询(0)</a></li>
    <li><a class="action-consult-trigger" href="/comment-ajax_type_ask-257-1.html">商品咨询(0)</a></li>
    <li><a class="action-consult-trigger" href="/comment-ajax_type_ask-257-2.html">配送咨询(0)</a></li>
    <li><a class="action-consult-trigger" href="/comment-ajax_type_ask-257-3.html">售后咨询(0)</a></li>
  </ul>

<div class="action-content-list switchable-panel">
  <div class="no-message">如果您对本商品有什么问题,请提问咨询!</div>  <ul class="consult-list">
      </ul>

  </div>
<div class="action-content-list switchable-panel" style="display:none;">
</div>
<div class="action-content-list switchable-panel" style="display:none;">
</div>
<div class="action-content-list switchable-panel" style="display:none;">
</div>


</div>

<!-- 咨询回复/评论回复 -->
<div class="post-answer action-post-reply hide">
  <form action="/comment-toReply.html" method="post" class="action-code-form">
    <input type="hidden" name="id">
    <ul>
            <li class="form-item">
      <div class="form-act-wide no-permission">
        <textarea class="action-filled-textarea" name="comment" id="" cols="30" rows="10" disabled="" vtype="required" data-caution="请填写回复内容，最多1000字" placeholder="欢迎发表回复，最多1000字。"></textarea>
                <div class="mini-mask">请<a href="/passport-login.html">登录</a>后再咨询,如果您不是会员请<a href="/passport-signup.html">注册</a>!</div>
                <div class="clearfix">
          <div class="word-count"><i class="current">0</i>/<i class="word-limit">1000</i></div>
          <div class="sub-label"></div>
        </div>
      </div>
      </li>
      <li class="form-item">
                <label for="" class="form-label">联系方式：</label><span class="form-act"><input type="text" vtype="required" name="contact" id="" disabled=""> <span class="sub-label">可以是电话、email、qq等</span></span>
              </li>
            <li class="form-item">
      <span class="form-act"><button type="submit" class="btn btn-simple action-submit-reply" disabled="disabled" rel="_request"><span><span>提交回复</span></span></button><a href="" class="btn-close action-close-reply">取消回复</a></span>
      </li>
    </ul>
  </form>
</div>
  
</div>
</div>
      </div>
            <div id="product_comment" class="product-section product-comment" data-sync-type="product_comment" style="display:none;">
        
      </div>
            <div id="product_consult" class="product-section product-consult" data-sync-type="product_consult" style="display:none;">
          
      </div>
            <div id="product_related" class="product-related" data-widget-type="Switchable" data-sync-type="product_related">
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

