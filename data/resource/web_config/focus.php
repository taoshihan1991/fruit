<?php defined('InShopNC') or exit('Access Invalid!');?>

  <ul id="fullScreenSlides" class="full-screen-slides">
          <?php if (is_array($output['code_screen_list']['code_info']) && !empty($output['code_screen_list']['code_info'])) { ?>
          <?php foreach ($output['code_screen_list']['code_info'] as $key => $val) { ?>
          <?php if (is_array($val) && !empty($val)) { ?>
          <li style="background: <?php echo $val['color'];?> url('<?php echo UPLOAD_SITE_URL.'/'.$val['pic_img'];?>') no-repeat center top">
            <a href="<?php echo $val['pic_url'];?>" target="_blank" title="<?php echo $val['pic_name'];?>">&nbsp;</a></li>
          <?php } ?>
          <?php } ?>
          <?php } ?>
    
  </ul>
  <div class="jfocus-trigeminy">
    <ul>
          <?php if (is_array($output['code_focus_list']['code_info']) && !empty($output['code_focus_list']['code_info'])) { ?>
          <?php foreach ($output['code_focus_list']['code_info'] as $key => $val) { ?>
          <li>
              <?php if (!empty($val['pic_list']) && is_array($val['pic_list'])) { ?>
              <?php foreach($val['pic_list'] as $k => $v) { ?>
            <a href="<?php echo $v['pic_url'];?>" target="_blank" title="<?php echo $v['pic_name'];?>"><img src="<?php echo UPLOAD_SITE_URL.'/'.$v['pic_img'];?>" alt="<?php echo $v['pic_name'];?>"></a>
              <?php } ?>
              <?php } ?>
          </li>
          <?php } ?>
          <?php } ?>
    </ul>
  </div>

                         
                
            <div class="register">
                <div class="login">
                    <div class="register_logo"><img src="<?php echo SHOP_TEMPLATES_URL;?>/css/myg/images/home_search/regieter_logo.jpg"/></div>
                    <div class="register_infor">
                        <a href="#">供应商免费注册</a>
                        <span>药厂或授权产品总代理</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="login">
                    <div class="register_logo"><img src="<?php echo SHOP_TEMPLATES_URL;?>/css/myg/images/home_search/regieter_logo_s.jpg"/></div>
                    <div class="register_infor">
                        <a href="#">分销商免费注册</a>
                        <span>市县级分销商或零售商</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="new_pro">
                    <div class="blk_01" id="tuqu">
                        <div class="bc">
                            <div class="tit tit_02"><h2><a target="_blank" href="#">新品首发</a></h2></div>
                            <!--视频焦点图start-->
                            <div class="slide_box3">
                                <div class="slide3" id="slide_06">

                                    <div class="item">
                                        <a target="_blank" href="#">
                                            <img width="110px" height="120px" src="" alt="可点击左右焦点切换滚动图文JS特效" title="可点击左右焦点切换滚动图文JS特效" />
                                        </a>
                                        <h4 class="tit_03"><a href="#" target="_blank">div+CSS+JS可点击左右焦点切换滚动图文特效</a></h4>
                                    </div>
                                    <div class="item">
                                        <a target="_blank" href="#">
                                            <img  width="110px" height="120px" src="" alt="" title="" />
                                        </a>
                                        <h4 class="tit_03"><a href="#" target="_blank">盘点世界罕见蜘蛛：身体结构精巧纤美</a></h4>
                                    </div>
                                    <div class="item">
                                        <a target="_blank" href="#">
                                            <img  width="110px" height="120px" src="" alt="" title="" />
                                        </a>
                                        <h4 class="tit_03"><a href="#" target="_blank">台湾大熊猫产雌性幼仔：体重已增一倍</a></h4>
                                    </div>
                                    <div class="item">
                                        <a target="_blank" href="#">
                                            <img  width="110px" height="120px" src="" alt="" title="" />
                                        </a>
                                        <h4 class="tit_03"><a href="#" target="_blank">克隆羊多莉之父称复活猛犸有望实现</a></h4>
                                    </div>

                                </div>
                                <div class="slide_btn2 mg0 clearfix">
                                    <span id="btn_prev6" class="btn_prevOff2" onmouseover="this.className='btn_prevOn2'" onmouseout="this.className='btn_prevOff2'">上一个</span>
                                    <div class="slide_dot2 clearfix" id="slide_dot6"></div>
                                    <span id="btn_next6" class="btn_nextOff2" onmouseover="this.className='btn_nextOn2'" onmouseout="this.className='btn_nextOff2'">下一个</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
          