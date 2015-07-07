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


</head>
<body>

<?php require_once template('layout/layout_top');?>

<div class="header" id="header">
  <div class="menu-column wrap">
    <div class="m-text frt"><img src="<?php echo SHOP_TEMPLATES_URL;?>/images/phone.png"/></div>
    <h1 class="logo FFfix flt"><a href="./"><img alt="四季果园" src="<?php echo SHOP_TEMPLATES_URL;?>/images/logo.png" border="0"/></a></h1>
    <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/logo_text.jpg" class="logoText flt">

    <div class="eara_list flt"> <div class="now-region-div">配送至：<span class="now_region"><?php if($_COOKIE['area_name']){echo $_COOKIE['area_name'];}else{?>优鲜达>><?php }?></span>
    <img class="region-jiao" src="<?php echo SHOP_TEMPLATES_URL;?>/images/jiao.jpg" width="11" height="11">
    <div class="province-reach">
        <ul class="ul-area1">
            <li>
                <p class="area02">
                 
                    <?php
                    $area_array=$output['area_array'];
                    if(empty($area_array)) require_once(BASE_DATA_PATH.'/area/area.php');
                    $area_model=Model('area');
                    ?>
                    <?php if(!empty($area_array)){foreach($area_array as $p_k=>$p){
                      if($p['area_parent_id']==15){?>
                    <div class="region-div">
                    <a href="javascript:void(0);" data-child='childregion_<?php echo $p_k;?>' class="area_child" data-cityid=<?php echo $p_k;?>><?php echo $p['area_name']?></a>
                    <div class="childregion_<?php echo $p_k;?> childregion">
                      <?php 
                      $cityList=$area_model->getAreaList(array('area_parent_id'=>$p_k));
                      foreach($cityList as $c_k=>$c){?>
                      <div class="region-div"><a href="javascript:void(0);" class="regionBtn" data-areaid=<?php echo $c['area_id']?>><?php echo $c['area_name']?></a></div>
                      <?php }?>
                      <div style="clear: both;"></div>
                    </div>
                    </div>
                    <?php }}}?>
                  
                </p>
            </li>
        </ul>
    </div>
</div>
<script>
    (function(){

        jQuery('.now-region-div').mouseover(function(){
            jQuery('.province-reach').show();
        });
        jQuery('.now-region-div').mouseout(function(){
            jQuery('.province-reach').hide();
        });
        jQuery('.area_child').click(function(){
          jQuery('.childregion').hide();
          var ch=jQuery(this).attr('data-child');
          jQuery('.'+ch).show();
          jQuery.cookie('city_name',jQuery(this).text());
          jQuery.cookie('city_id',jQuery(this).attr('data-cityid'));
        });
        jQuery('.regionBtn').click(function(){
          jQuery('.now_region').text(jQuery(this).text());
          jQuery.cookie('area_id',jQuery(this).attr('data-areaid'));
          jQuery.cookie('area_name',jQuery(this).text());
          document.location.reload();
        });


    })();
</script>
</div>
        <div class="search flt"> 
            <form action="<?php echo SHOP_SITE_URL;?>?act=search" method="get" class="SearchBar searchBar_">
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
          <div class="search-words"><ul class="urllist"><li class="first">
          <?php if(is_array($output['hot_search']) && !empty($output['hot_search'])) { foreach($output['hot_search'] as $val) { ?>
              <a href="<?php echo urlShop('search', 'index', array('keyword' => $val));?>"><?php echo $val; ?></a>
              <?php } }?></li></ul></div>
        </div>

    </div>
    <div class="nav-column" id="nav">
            <div class="wrap clr">
         
              <div class="nav flt">
                <ul class="MenuList MenuList_194 clearfix">
                  <li class="cur"><a  href="<?php echo SHOP_SITE_URL;?>" >首页</a></li>

                  <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){?>
                  <?php foreach($output['nav_list'] as $nav){?>
                  <?php if($nav['nav_location'] == '1'){?>
                    <li><a  href="<?php echo $nav['nav_url']?>" target="_blank"><?php echo $nav['nav_title'];?></a></li>
                  <?php }?>
                  <?php }}?>
                 
                </ul>
              </div>
             
          </div>
        </div>
    </div>
</div>





<?php include template('home/cur_local');?>
<?php require_once($tpl_file);?>
<?php require_once template('footer');?>
</body>
</html>
