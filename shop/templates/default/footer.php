<?php defined('InShopNC') or exit('Access Invalid!');?>
<div id="footer" class="footer">
<div class="foot">
      <div class="pageFooter">
 
      <div class="right">
        <?php if(!empty($output['bottomArticle'])){foreach($output['bottomArticle'] as $v){if($v['ac_id']!=9){?>
        <ul>
          <li class="title"><?php echo $v['ac_name']?></li>
          <?php if(!empty($v['list'])){foreach($v['list'] as $row){?>
          <li><a rel="nofollow" href="<?php echo urlShop('article','show',array('article_id'=>$row['article_id']))?>" target="_blank"><?php echo $row['article_title']?></a></li>
          <?php }}?>
        </ul>
        <?php }}}?>
      </div>
      <div class="left">
        <div class="f_wx">
          <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/mobile.jpg"/>
          <p>四季果园手机版</p>
        </div>
        <div class="f_ios">
          <img src="<?php echo SHOP_TEMPLATES_URL;?>/images/weixin.jpg"/>
          <p>请关注我们的微信</p>
        </div>
      </div>
    </div>
    <div class="clear"></div>


    </div>   
    <div class="bottom">
      <div class="siteinfo">
        <p>
          <?php if(!empty($output['nav_list']) && is_array($output['nav_list'])){foreach($output['nav_list'] as $v){if($v['nav_location']==2){?>
          <span><a rel="nofollow" href="<?php echo $v['nav_url'];?>" target="_blank"><?php echo $v['nav_title'];?></a></span>
          <?php }}}?>
        <span>Copyright© 四季果园 sjfruit.com 版权所有</span></p>
        <p><span>鲁公网安备11010502026831号</span><span><a class="beian" rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn">鲁ICP证150325号</a></span><span>食品流通许可证SP1101131210068671(1-1)号</span><span><a class="beian" rel="nofollow" target="_blank" href="">企业营业执照</a></span></p>
      </div>
    </div>
</div>

<?php //echo getChat($layout);?>

<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo RESOURCE_SITE_URL;?>/js/jquery.mousewheel.js"></script>
<script language="javascript">
$(function(){
	// Membership card
	$('[nctype="mcard"]').membershipCard({type:'shop'});
});
</script>
