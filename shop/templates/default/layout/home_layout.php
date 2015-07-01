<?php defined('InShopNC') or exit('Access Invalid!');?>
<!doctype html>
<html lang="zh">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>">
<title><?php echo $output['html_title'];?></title>
<meta name="keywords" content="<?php echo $output['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $output['seo_description']; ?>" />
<meta name="author" content="">
<meta name="copyright" content="">
<?php echo html_entity_decode($GLOBALS['setting_config']['qq_appcode'],ENT_QUOTES); ?><?php echo html_entity_decode($GLOBALS['setting_config']['sina_appcode'],ENT_QUOTES); ?><?php echo html_entity_decode($GLOBALS['setting_config']['share_qqzone_appcode'],ENT_QUOTES); ?><?php echo html_entity_decode($GLOBALS['setting_config']['share_sinaweibo_appcode'],ENT_QUOTES); ?>
<style type="text/css">
body {
_behavior: url(<?php echo SHOP_TEMPLATES_URL;
?>/css/csshover.htc);
}
</style>
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/base.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_header.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/home_login.css" rel="stylesheet" type="text/css">
<link href="<?php echo SHOP_RESOURCE_SITE_URL;?>/font/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo SHOP_RESOURCE_SITE_URL;?>/font/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?php echo RESOURCE_SITE_URL;?>/js/html5shiv.js"></script>
      <script src="<?php echo RESOURCE_SITE_URL;?>/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>
<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->
<script>
var COOKIE_PRE = '<?php echo COOKIE_PRE;?>';var _CHARSET = '<?php echo strtolower(CHARSET);?>';var SITEURL = '<?php echo SHOP_SITE_URL;?>';var SHOP_SITE_URL = '<?php echo SHOP_SITE_URL;?>';var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';var RESOURCE_SITE_URL = '<?php echo RESOURCE_SITE_URL;?>';var SHOP_TEMPLATES_URL = '<?php echo SHOP_TEMPLATES_URL;?>';
</script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/common.js" charset="utf-8"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery-ui/jquery.ui.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.validation.min.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.masonry.js"></script>
<script src="<?php echo RESOURCE_SITE_URL;?>/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>

<!-- [扩展js和css] -->
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/basic.min.css" rel="stylesheet" media="screen, projection" />
<link href="<?php echo SHOP_TEMPLATES_URL;?>/css/goodsplace.css" rel="stylesheet" media="screen, projection" />
<link rel="stylesheet"  href="<?php echo SHOP_TEMPLATES_URL;?>/css/base-extend.css" />
<link rel="stylesheet"  href="<?php echo SHOP_TEMPLATES_URL;?>/css/extend.css" />
<script src="<?php echo SHOP_TEMPLATES_URL;?>/js/jquery.SuperSlide.2.1.1.js"></script>

<!-- [//扩展js和css] -->

</head>
<body>

<?php require_once template('layout/layout_top');?>

<div class="header" id="header">
  <div class="menu-column wrap">
    <div class="m-text frt"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/phone.png"/></div>
    <h1 class="logo FFfix flt"><a href="./"><img alt="四季果园" src="<?php echo SHOP_TEMPLATES_URL;?>/images/logo.png" border="0"/></a></h1>
    <div class="eara_list flt"> <div class="now-region-div">配送至：<span class="now_region">优鲜达>></span>
    <img class="region-jiao" src="<?php echo SHOP_TEMPLATES_URL;?>/images/jiao.jpg" width="11" height="11">
    <div class="province-reach">
        <ul class="ul-area1">
            <li>
                <p class="area02">
                            <div class="region-div">
                                <a href="javascript:void(0);" data-child='childregion_104' class="area_child">安徽</a>
                                <div class="childregion_104 childregion">
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">合肥市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">安庆市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">蚌埠市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">亳州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">巢湖市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">池州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">滁州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">阜阳市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">淮北市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">淮南市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">黄山市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">六安市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">马鞍山市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">宿州市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">铜陵市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">芜湖市</a></div>
                                                                            <div class="region-div"><a href="javascript:void(0);" style="margin:0 1px;">宣城市</a></div>
                                                                        <div style="clear: both;"></div>
                                </div>
                            </div>
                                        </p>
            </li>
        </ul>
    </div>
</div>
<script>
    (function(){
        jQuery('.region-div a').click(function(){
            if(!$(this).hasClass('area_child')){
                jQuery('.now_region').set('html',$(this).get('html'));
                jQuery('.childregion').hide();
                jQuery('.province-reach').hide();
            }
        });
        jQuery('.area_child').click(function(){
            jQuery('.childregion').hide();
            jQuery('.'+$(this).get('data-child')).show();
        });
        jQuery('.now-region-div').mouseover(function(){
            jQuery('.province-reach').show();
        });
        jQuery('.now-region-div').mouseout(function(){
            jQuery('.province-reach').hide();
        });
    })();
</script>
</div>
        <div class="search flt"> 
            <form action="<?php echo SHOP_SITE_URL;?>" method="post" class="SearchBar searchBar_">
              <input name="act" id="search_act" value="search" type="hidden">
            <table cellpadding="0" cellspacing="0">
              <tr>
                <td class="search_label">
                <input name="keyword" size="12" type="text" value="四季果园-见证每个果实的重量" onfocus="this.value=(this.value=='四季果园-见证每个果实的重量')?'':this.value;" onblur="this.value=(this.value=='')?'四季果园-见证每个果实的重量':this.value;" class="inputstyle keywords" autocompleter="associate_autocomplete_goods:name,goods_id" ac_options="{}" />
                </td>
                <td><input type="submit" value="搜索" class="btn_search" onfocus='this.blur();'/></td>
              </tr>
            </table>
          </form>         
          <div class="search-words"><ul class="urllist"><li class="first"><a href="" target="_blank">新西兰奇异果</a></li></ul></div>
        </div>

    </div>
    <div class="nav-column" id="nav">
            <div class="wrap clr">
              <div class="all-category flt" id="all-category">
                  <div class="category-handle cat-popup" id="category_handle">
                      <a href="/gallery.html?scontent=n," target="_blank">全部商品</a>
                  </div>
              
              </div>
              <div class="nav flt">
                <ul class="MenuList MenuList_194 clearfix">
                  <li><a  href="" >首页</a></li>
                  <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
                  <?php foreach($output['nav_list'] as $nav){?>
                  <?php if($nav['nav_location'] == '1'){?>
                    <li><a  href="<?php echo $nav['nav_url']?>" target="_blank"><?php echo $nav['nav_title'];?></a></li>
                  <?php }?>
                  <?php }}?>
                 
                </ul>
              </div>
               <ul class="category-list">
                  <li class="category-item">
                      <a href="" class="indexCateDoor">基础展示</a>
                  </li>
                  <li class="category-item">
                      <a href="" class="indexCateDoor">种植联盟</a>
                  </li>
                      <li class="category-item">
                      <a href="" class="indexCateDoor">质量认证</a>
                  </li>
                  <li class="category-item">
                      <a href="" class="indexCateDoor">线下门店</a>
                  </li>
              
                  <li class="category-item current">
                      <a href="" class="indexCateDoor">发布公告</a>
                  </li>
              </ul>
          </div>
        </div>
    </div>
</div>





<?php //include template('home/cur_local');?>
<?php require_once($tpl_file);?>
<?php require_once template('footer');?>
</body>
</html>
