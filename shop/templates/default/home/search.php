<?php defined('InShopNC') or exit('Access Invalid!');?>
<script src="<?php echo SHOP_RESOURCE_SITE_URL.'/js/search_goods.js';?>"></script>
<script src="<?php echo RESOURCE_SITE_URL.'/js/class_area_array.js';?>"></script>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/layout.css" rel="stylesheet" type="text/css">



<!-- 列表页box -->
<div class="wrap" id="content">
    <div class="w162 flt">
      <div class="sidecat">
        <div class="GoodsCategoryWrap">
            <ul class="show-all">

                <li><i class="tree-parent tree-parent-collapsed"></i><a href="<?php echo urlShop('search', 'index', array('cate_id' => $value['gc_id']));?>" <?php if ($value['gc_id'] == $_GET['cate_id']) {?>class="selected"<?php }?>><?php echo $value['gc_name']?></a>
                  <?php if (!empty($value['class2'])) {?>
                  <ul>
                    <?php foreach ($value['class2'] as $val) {?>
                    <li><i class="tree-parent tree-parent-collapsed"></i><a href="<?php echo urlShop('search', 'index', array('cate_id' => $val['gc_id']));?>" <?php if ($val['gc_id'] == $_GET['cate_id']) {?>class="selected"<?php }?>><?php echo $val['gc_name']?></a>
                      <?php if (!empty($val['class3'])) {?>
                      <ul>
                        <?php foreach ($val['class3'] as $v) {?>
                        <li class="tree-parent tree-parent-collapsed"><i></i><a href="<?php echo urlShop('search', 'index', array('cate_id' => $v['gc_id']));?>" <?php if ($v['gc_id'] == $_GET['cate_id']) {?>class="selected"<?php }?>><?php echo $v['gc_name']?></a></li>
                        <?php }?>
                      </ul>
                      <?php }?>
                    </li>
                    <?php }?>
                  </ul>
                  <?php }?>
                </li>
                
                <?php if(!empty($output['goods_class_array'])){foreach ($output['goods_class_array'] as $value) {?>
                <li>
                <h4 class="e-cat-depth-0"><a href="<?php echo urlShop('search','index',array('cate_id'=>$value['gc_id']))?>" class="depth-0"><?php echo $value['gc_name']?> &gt;&gt;</a></h4>
                <ul class="cat-down">
                    <?php if(!empty($value['class2'])){foreach ($value['class2'] as $v) {?>
                    <li class="e-cat-depth-1">
                       <a href="<?php echo urlShop('search','index',array('cate_id'=>$v['gc_id']))?>" class="depth-1"><?php echo $v['gc_name']?></a>
                    </li>
                    <?php }}?>   
                </ul>
                </li>
                <?php }}?>
            </ul>
        </div>
      </div>
    </div>
<div class="w1020 frt">
  <div id="main" class="clearfix">
  <!-- 商品列表开始 -->
  <div class="page-maincontent">
        <!-- 筛选区 -->
        <?php if(!empty($output['attr_array']) && is_array($output['attr_array'])){?>
        <div class="list-right-nav">
                    <ul>
                      <?php if(isset($output['checked_attr']) && is_array($output['checked_attr'])){?>
                      <li class="nch-module-filter">您以选择:
                      <?php foreach ($output['checked_attr'] as $val){?>
                      <span class="selected" nctype="span_filter"><?php echo $val['attr_name'].':<em>'.$val['attr_value_name'].'</em>'?><i data-uri="<?php echo removeParam(array('a_id' => $val['attr_value_id']));?>">X</i></span>
                      <?php }?>
                      </li><?php }?>

                      
                      <?php foreach ($output['attr_array'] as $key=>$val){?>
                      <li><?php echo $val['name'].$lang['nc_colon'];?>
                             <?php 
                             if($output['checked_attr']){
                                foreach($output['checked_attr'] as $tK=>$t){
                                  if($tK==$key){$flag=true;}
                                }
                            }
                            ?>
                             <a <?if (!$output['checked_attr']||!$flag){?>class="now-ss"<?php }?> href="<?php echo replaceParam(array('a_id' => $a_id));?>">不限</a>
                            <?php foreach ($val['value'] as $k=>$v){?>
                            <a  <?php if($output['checked_attr'][$key]){$temp=$output['checked_attr'][$key];if(in_array($v['attr_value_id'], $temp)){?>class="now-ss"<?php }}?> href="<?php $a_id = (($_GET['a_id'] != '' && $_GET['a_id'] != 0)?$_GET['a_id'].'_'.$k:$k); echo replaceParam(array('a_id' => $a_id));?>"><?php echo $v['attr_value_name'];?></a>
                            <?php }?>
                      </li>
                      <?php }?> 
                    </ul>
               </div>
          <?php }?> 
        <!-- //筛选区 -->
    <!-- 排序状态条 -->
    <div id="gallery_sortbar" class="gallery-sortbar clearfix">
      <div class="gallery-sort">
        <a href="<?php echo dropParam(array('order', 'key'));?>" class="action-sort <?php if($_GET['key']==0){?>active<?php }?>"><em>默认</em></a>
        <a class="action-sort<?php if($_GET['key']==3) echo " active";?>" href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '3') ? replaceParam(array('key' => '3', 'order' => '1')):replaceParam(array('key' => '3', 'order' => '2')); ?>" ><em>价格<span class="icon desc">*</span></em></a>
        <a class="action-sort<?php if($_GET['key']==1) echo " active";?>" href="<?php echo ($_GET['order'] == '2' && $_GET['key'] == '1') ? replaceParam(array('key' => '1', 'order' => '1')):replaceParam(array('key' => '1', 'order' => '2')); ?>"><em>销量<span class="icon">*</span></em></a>
      </div>


          
          </div>
           <?php if(empty($output['goods_list'])){?>
           <p>暂时没有数据</p>
           <?php }?>
          <?php if(!empty($output['goods_list'])){?>
    <div id="gallery_show" class="gallery-show">
      <div class="gallery-grid">
        <ul class="clearfix">
          <?php foreach($output['goods_list'] as $value){?>
              <li class="goods-item first">
                  <div class="goods-pic">
                        <a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>"><img class="action-goods-img" alt="<?php echo $value['goods_name'];?>" src="<?php echo thumb($value, 360);?>"></a>
                    </div>
                  <div class="goods-info">
                        <h3 class="goods-name"><a href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>"><?php echo $value['goods_name'];?></a></h3>
                        <div class="attribute">
                          <p>产地:<?php echo $value['attribute']?></p>
                          <p>品种:<?php $temp= $value['spec'];echo $temp[key($temp)]?></p>
                  </div>

            <div class="goods-action">
              <div class="goods-buy">
                  <a class="btn btn-major action-addtocart" href="<?php echo urlShop('goods','index',array('goods_id'=>$value['goods_id']));?>" target="_dialog_minicart"><span><span>加入购物车</span></span></a>
              </div>
            </div>  
            <div class="goods-price"><ins class="price">￥<?php echo $value['goods_price'];?></ins></div>
          </li>
          <?php }?>
        </ul>
      </div>
      <div class="pageview"><?php echo $output['show_page']; ?></div>    
      <?php }?>
</div>
   
  </div>

</div>
</div>

</div>

<!-- //列表页box -->















<script src="<?php echo RESOURCE_SITE_URL;?>/js/waypoints.js"></script>
<script src="<?php echo SHOP_RESOURCE_SITE_URL;?>/js/search_category_menu.js"></script>
<script type="text/javascript">
var defaultSmallGoodsImage = '<?php echo defaultGoodsImage(240);?>';
var defaultTinyGoodsImage = '<?php echo defaultGoodsImage(60);?>';

$(function(){
    $('#files').tree({
        expanded: 'li:lt(2)'
    });

    //浮动导航  waypoints.js
    $('#main-nav-holder').waypoint(function(event, direction) {
        $(this).parent().toggleClass('sticky', direction === "down");
        event.stopPropagation();
    });
	// 单行显示更多
	$('span[nc_type="show"]').click(function(){
		s = $(this).parents('dd').prev().find('li[nc_type="none"]');
		if(s.css('display') == 'none'){
			s.show();
			$(this).html('<i class="icon-angle-up"></i><?php echo $lang['goods_class_index_retract'];?>');
		}else{
			s.hide();
			$(this).html('<i class="icon-angle-down"></i><?php echo $lang['goods_class_index_more'];?>');
		}
	});

	<?php if(isset($_GET['area_id']) && intval($_GET['area_id']) > 0){?>
	// 选择地区后的地区显示
	$('[nc_type="area_name"]').html(nc_class_a[<?php echo intval($_GET['area_id']);?>]);
	<?php }?>

	<?php if(isset($_GET['cate_id']) && intval($_GET['cate_id']) > 0){?>
	// 推荐商品异步显示
    $('div[nctype="booth_goods"]').load('<?php echo urlShop('search', 'get_booth_goods', array('cate_id' => $_GET['cate_id']))?>', function(){
        $(this).show();
    });
	<?php }?>
});
</script>