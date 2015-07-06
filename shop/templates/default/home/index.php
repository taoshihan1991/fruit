<?php defined('InShopNC') or exit('Access Invalid!');?>
<!-- [扩展js和css] -->

<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/moo.min.js"></script>
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/shop.min.js"></script>
<script type="text/javascript">jQuery.noConflict();</script>
<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/js/moo.min.js"></script>
<script type="text/javascript" src="<?php echo SHOP_TEMPLATES_URL;?>/js/switch.js"></script>
<!-- [//扩展js和css] -->

<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/index.css" rel="stylesheet" type="text/css">
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/ie6.js" charset="utf-8"></script>
<![endif]-->
<style type="text/css">
.category-list { display: block !important;}
</style>
  <div class="clear"></div>


<!-- [banner大图轮播] -->
                  <div id="indexBanner" class="indexBanner">
                      <div class="hd">
                          <ul><li>1</li><li>2</li><li>3</li></ul>
                      </div>
                      <div class="bd">
                          <ul>
                              <li><a href="" target="_blank"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/banner1.jpg" /></a></li>
                              <li><a href="" target="_blank"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/banner2.jpg" /></a></li>
                              <li><a href="" target="_blank"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/banner1.jpg" /></a></li>
                          </ul>
                      </div>

                      <!-- 下面是前/后按钮代码，如果不需要删除即可 -->
                      <div class="pageBtn">
                        <a class="prev" href="javascript:void(0)"></a>
                        <a class="next" href="javascript:void(0)"></a>
                      </div>
                      
                  </div>
                  <script type="text/javascript">
                  jQuery(".indexBanner").slide({mainCell:".bd ul",autoPlay:true});
                  </script>
<!-- [//banner大图轮播] -->
<div class="content wrap" id="content">

   <div class="floor floor3">
        <div class="hd">
            <span id="f3" class="fgoto"></span><h3 class="fl">1F 鲜果区</h3>
            <div class="f-link fr">
            <ul class="urllist"><li class="first last"><a href="" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
            <div class="l-column fl">
<div class="ex-slide1-box">
  <div id="ex_slide_236" class="ex-slide1">
    <ol class="switchable-content clearfix">
                      <li class="switchable-panel">
                  <a href="http://www.guolehui.com.cn/gallery-48.html" title="" >
                        <img src="http://mall.guolehui.com.cn/public/images/d8/17/7c/27be6709fc639915b5cec874278cfd98ead487b8.jpg?1421201249#h" width="240px" height="520px" alt="" />
                  </a>
          </li>
                      <li class="switchable-panel">
                  <a href="http://www.guolehui.com.cn/product-676.html" title="" >
                        <img src="http://mall.guolehui.com.cn/public/images/96/cf/24/ea16295e81a5cb8d11ce036a50ade7a8ca9f1214.jpg?1413358520#h" width="240px" height="520px" alt="" />
                  </a>
          </li>
                      <li class="switchable-panel">
                  <a href="http://mall.guolehui.com.cn/product-965.html" title="" >
                        <img src="http://mall.guolehui.com.cn/public/images/8d/5b/d2/fd1d50f9af2e4612ff0904fbbb88252f68e1425f.jpg?1413358617#h" width="240px" height="520px" alt="" />
                  </a>
          </li>
              </ol>
        <ul class="switchable-triggerBox slide-trigger">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_236',{
        effect:'fade',
        autoplay:true,
        interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
                <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                          <?php if(!empty($output['floor1Goods'])){foreach($output['floor1Goods'] as $cate){?>
                            <li><span><?php echo $cate['gc_name']?></span><i></i></li>
                          <?php }}?>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <?php if(!empty($output['floor1Goods'])){foreach($output['floor1Goods'] as $cate){?>
                            <li class="gb-item">  
                                <ul class="goods-column clr">
                                  <?php if(!empty($cate['goods'])){foreach($cate['goods'] as $v){?>
                                <li class="goods-list">
                                <div class="goodpic"><a target="_blank" href="<?php echo $v['url']?>"><img src="<?php echo $v['pic']?>" alt="<?php echo $v['goods_name']?>" width="160" height="160"/></a>
                                </div>
                                <div class="info">
                                  <h6><a target="_blank" href="<?php echo $v['url']?>"><?php echo $v['goods_name']?></a></h6>
                                <div class="attribute">
                                  <p>品种:<?php $arr=unserialize($v['goods_spec']);$k=key($arr);echo $arr[$k];?></p>
                                  <p>产地:<?php echo $v['attr_value_name']?></p>
                                </div>
                                <ul>       
                                  <li class="price1">￥<?php echo $v['goods_price']?></li>
                                </ul>
          
                                  <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="<?php echo $v['url']?>">加入购物车</a>    
                              </div>
                             </li><?php }}?>
                            </ul>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>               
            </div>
        </div>
    </div> 



    <div class="floor floor2">
      <div class="hd"><span id="f2" class="fgoto"></span><h3 class="fl">2F 干果区</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="http://www.guolehui.com.cn/gallery-46.html" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_235" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-642.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/28/66/27/cdb4358b21e1837c0204bcf46564e50251b8592e.jpg?1429026190#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-571.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/9c/21/60/85d204982b084294d1a27fe1af0c79518b130563.jpg?1429026688#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-676.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/d5/db/38/5842924aa93f3140d3fb51126c0b9b6ada1631b0.jpg?1421123040#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_235',{
        effect:'fade',
        autoplay:true,
    interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                          <?php if(!empty($output['floor2Goods'])){foreach($output['floor2Goods'] as $cate){?>
                            <li><span><?php echo $cate['gc_name']?></span><i></i></li>
                          <?php }}?>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                       <ul class="goods-body">
                            <?php if(!empty($output['floor2Goods'])){foreach($output['floor2Goods'] as $cate){?>
                            <li class="gb-item">  
                                <ul class="goods-column clr">
                                  <?php if(!empty($cate['goods'])){foreach($cate['goods'] as $v){?>
                                <li class="goods-list">
                                <div class="goodpic"><a target="_blank" href=""><img src="<?php echo $v['pic']?>" alt="<?php echo $v['goods_name']?>" width="160" height="160"/></a>
                                </div>
                                <div class="info">
                                  <h6><a target="_blank" href="<?php echo $v['url']?>"><?php echo $v['goods_name']?></a></h6>
                                <div class="attribute">
                                  <p>产地:山东 配送:青岛</p>
                                  <p>品种:樱桃</p>
                                 
                                </div>
                                <ul>       
                                  <li class="price1">￥<?php echo $v['goods_price']?></li>
                                </ul>
          
                                  <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="<?php echo $v['url']?>">加入购物车</a>    
                              </div>
                             </li><?php }}?>
                            </ul>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>            
            </div>
        </div>
    </div>    

    <div class="floor floor3">
      <div class="hd"><span id="f3" class="fgoto"></span><h3 class="fl">3F 礼品区</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="http://www.guolehui.com.cn/gallery-47.html" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_236" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/gallery-48.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/d8/17/7c/27be6709fc639915b5cec874278cfd98ead487b8.jpg?1421201249#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-676.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/96/cf/24/ea16295e81a5cb8d11ce036a50ade7a8ca9f1214.jpg?1413358520#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/product-965.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/8d/5b/d2/fd1d50f9af2e4612ff0904fbbb88252f68e1425f.jpg?1413358617#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_236',{
        effect:'fade',
        autoplay:true,
    interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                          <?php if(!empty($output['floor3Goods'])){foreach($output['floor3Goods'] as $cate){?>
                            <li><span><?php echo $cate['gc_name']?></span><i></i></li>
                          <?php }}?>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <?php if(!empty($output['floor2Goods'])){foreach($output['floor2Goods'] as $cate){?>
                            <li class="gb-item">  
                                <ul class="goods-column clr">
                                  <?php if(!empty($cate['goods'])){foreach($cate['goods'] as $v){?>
                                <li class="goods-list">
                                <div class="goodpic"><a target="_blank" href=""><img src="<?php echo $v['pic']?>" alt="<?php echo $v['goods_name']?>" width="160" height="160"/></a>
                                </div>
                                <div class="info">
                                  <h6><a target="_blank" href="<?php echo $v['url']?>"><?php echo $v['goods_name']?></a></h6>
                                <div class="attribute">
                                  <p>产地:山东 配送:青岛</p>
                                  <p>品种:樱桃</p>
                                 
                                </div>
                                <ul>       
                                  <li class="price1">￥<?php echo $v['goods_price']?></li>
                                </ul>
          
                                  <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="<?php echo $v['url']?>">加入购物车</a>    
                              </div>
                             </li><?php }}?>
                            </ul>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>               
            </div>
        </div>
    </div> 

    <div class="floor floor4">
      <div class="hd"><span id="f4" class="fgoto"></span><h3 class="fl">4F 套餐</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_237" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/gallery-63.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/fd/27/43/699e8e9101b14a2f5ae93ad8b6f7b9bd755bde51.jpg?1413381517#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/gallery-49.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/56/8c/86/2a6587aa69415a0c74fb8658e16c84dd81bb7281.jpg?1417938658#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/05/08/49/c70086304f46cce869095b79b0065f60a2927d97.jpg?1413504320#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_237',{
        effect:'fade',
        autoplay:true,
    interval:5000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                            <?php if(!empty($output['floor4Goods'])){foreach($output['floor4Goods'] as $cate){?>
                            <li><span><?php echo $cate['gc_name']?></span><i></i></li>
                          <?php }}?>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <?php if(!empty($output['floor2Goods'])){foreach($output['floor2Goods'] as $cate){?>
                            <li class="gb-item">  
                                <ul class="goods-column clr">
                                  <?php if(!empty($cate['goods'])){foreach($cate['goods'] as $v){?>
                                <li class="goods-list">
                                <div class="goodpic"><a target="_blank" href=""><img src="<?php echo $v['pic']?>" alt="<?php echo $v['goods_name']?>" width="160" height="160"/></a>
                                </div>
                                <div class="info">
                                  <h6><a target="_blank" href="<?php echo $v['url']?>"><?php echo $v['goods_name']?></a></h6>
                                <div class="attribute">
                                  <p>产地:山东 配送:青岛</p>
                                  <p>品种:樱桃</p>
                                 
                                </div>
                                <ul>       
                                  <li class="price1">￥<?php echo $v['goods_price']?></li>
                                </ul>
          
                                  <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="<?php echo $v['url']?>">加入购物车</a>    
                              </div>
                             </li><?php }}?>
                            </ul>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
    </div>

        <div class="floor floor3">
      <div class="hd"><span id="f3" class="fgoto"></span><h3 class="fl">5F 团购</h3><div class="f-link fr"><ul class="urllist"><li class="first last"><a href="http://www.guolehui.com.cn/gallery-47.html" target="_blank">更多</a></li></ul></div></div>
        <div class="bd clr">
          <div class="l-column fl">
              
<div class="ex-slide1-box" style="width:240px;height:520px;">
  <div id="ex_slide_236" class="ex-slide1">
    <ol class="switchable-content clearfix">
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/gallery-48.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/d8/17/7c/27be6709fc639915b5cec874278cfd98ead487b8.jpg?1421201249#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://www.guolehui.com.cn/product-676.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/96/cf/24/ea16295e81a5cb8d11ce036a50ade7a8ca9f1214.jpg?1413358520#h" width="240px" height="520px" alt="" />
          </a>
      </li>
              <li class="switchable-panel">
          <a href="http://mall.guolehui.com.cn/product-965.html" title="" >
            <img src="http://mall.guolehui.com.cn/public/images/8d/5b/d2/fd1d50f9af2e4612ff0904fbbb88252f68e1425f.jpg?1413358617#h" width="240px" height="520px" alt="" />
          </a>
      </li>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <li>1</li>
              <li>2</li>
              <li>3</li>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_236',{
        effect:'fade',
        autoplay:true,
    interval:3000
    });
</script>
            </div>
            <div class="r-column fr">
              <div class="goods-column Auto_Widget" data-widget-type="Switchable" data-widget-config="{eventType:'mouse',content:'.goods-body-column',activeClass:'oactive',panels:'.gb-item',triggersBox:'.goods-tab',autoplay:false,duration:350,islazyload:true,circular:false,effect:'scrolly',activeIndex:0}">
                    <div class="goods-tab-column">
                        <ul class="goods-tab">
                          <?php if(!empty($output['floor5Goods'])){foreach($output['floor5Goods'] as $cate){?>
                            <li><span><?php echo $cate['gc_name']?></span><i></i></li>
                          <?php }}?>
                        </ul>
                        <div class="goods-pic"></div>
                    </div>
                    <div class="goods-body-column">
                        <ul class="goods-body">
                            <?php if(!empty($output['floor5Goods'])){foreach($output['floor5Goods'] as $cate){?>
                            <li class="gb-item">  
                                <ul class="goods-column clr">
                                  <?php if(!empty($cate['goods'])){foreach($cate['goods'] as $v){?>
                                <li class="goods-list">
                                <div class="goodpic"><a target="_blank" href=""><img src="<?php echo $v['pic']?>" alt="<?php echo $v['goods_name']?>" width="160" height="160"/></a>
                                </div>
                                <div class="info">
                                  <h6><a target="_blank" href="<?php echo $v['url']?>"><?php echo $v['goods_name']?></a></h6>
                                <div class="attribute">
                                  <p>产地:山东 配送:青岛</p>
                                  <p>品种:樱桃</p>
                                 
                                </div>
                                <ul>       
                                  <li class="price1">￥<?php echo $v['goods_price']?></li>
                                </ul>
          
                                  <a class="addcart-btn listact f-addcart" target="_dialog_minicart" href="<?php echo $v['url']?>">加入购物车</a>    
                              </div>
                             </li><?php }}?>
                            </ul>
                            </li>
                            <?php }}?>
                        </ul>
                    </div>
                </div>               
            </div>
        </div>
    </div> 



    <div class="floor-show"><a href="">     
        <img src='<?php echo SHOP_TEMPLATES_URL;?>/images/footertop.jpg' alt="" width='1190'/></a>
    </div>
    
    
   </div> 

    
    </div>
    
    
    
    
    

</div>




