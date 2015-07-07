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
                          <ul>
                            <?php if(!empty($output['buyBannerList'])){foreach($output['buyBannerList'] as $k=>$v){?>
                            <li><?php echo $k+1;?></li>
                            <?php }}?>
                          </ul>
                      </div>
                      <div class="bd">
                          <ul>
                            <?php if(!empty($output['buyBannerList'])){foreach($output['buyBannerList'] as $v){?>
                              <li><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a></li>
                            <?php }}?>
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
<div class="banner-pic wrap">
    <?php if(!empty($output['bannerAdList'])){foreach($output['bannerAdList'] as $v){?>
    <a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a>
    <?php }}?>

    <div class="noticeNews">
      <p class="noticeTitle"><span>活动公告</span></p>
      <div class="noticeList">
      <?php if(!empty($output['noticeList'])){foreach($output['noticeList'] as $v){?>
      <a href="<?php echo urlShop('article','show',array('article_id'=>$v['article_id']));?>"><?php echo $v['article_title'];?></a>
      <?php }}?>

      </div>
    </div>
</div>

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
      <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $v){?>
                              <li><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a></li>
      <?php }}?>
         
              </ol>
        <ul class="switchable-triggerBox slide-trigger">
                       <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $k=>$v){?>
                            <li><?php echo $k+1;?></li>
                            <?php }}?>
                   
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
              
<div class="ex-slide1-box">
  <div id="ex_slide_235" class="ex-slide1">
    <ol class="switchable-content clearfix">
          <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $v){?>
                              <li><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a></li>
      <?php }}?>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
             <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $k=>$v){?>
                            <li><?php echo $k+1;?></li>
                            <?php }}?>
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
              
<div class="ex-slide1-box">
  <div id="ex_slide_237" class="ex-slide1">
    <ol class="switchable-content clearfix">
      <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $v){?>
                              <li><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a></li>
      <?php }}?>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
           <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $k=>$v){?>
                            <li><?php echo $k+1;?></li>
                            <?php }}?>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_237',{
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
              
<div class="ex-slide1-box">
  <div id="ex_slide_238" class="ex-slide1">
    <ol class="switchable-content clearfix">
       <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $v){?>
                              <li><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a></li>
      <?php }}?>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
              <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $k=>$v){?>
                            <li><?php echo $k+1;?></li>
                            <?php }}?>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_238',{
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
              
<div class="ex-slide1-box">
  <div id="ex_slide_239" class="ex-slide1">
    <ol class="switchable-content clearfix">
  <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $v){?>
                              <li><a href="<?php echo $v['url']?>" target="_blank"><img src="<?php echo $v['pic']?>" /></a></li>
      <?php }}?>
          </ol>
    <ul class="switchable-triggerBox slide-trigger">
        <?php if(!empty($output['floor1Ad'])){foreach($output['floor1Ad'] as $k=>$v){?>
                            <li><?php echo $k+1;?></li>
                            <?php }}?>
          </ul>
  </div>
</div>
<script>
    new Switchable('ex_slide_239',{
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




