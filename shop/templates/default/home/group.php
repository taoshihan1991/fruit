<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>四季果园-采购</title>
    <link type="text/css" rel="stylesheet" href="<?php echo SHOP_TEMPLATES_URL;?>/group/css/purchase.css">
</head>
<body>
<div class="container">
    <div class="banner"><img src="<?php echo SHOP_TEMPLATES_URL;?>/group/images/banner_purchase.jpg"></div>
    <div class="activity_box">
        <div class="activity">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/images/activity.jpg">
        </div>
        <div class="grouptitle">填写以下信息，我们会尽快与您联系</div>
        <form>
            <label for="name">联系人:</label>
            <input type="text" id="name" class="fill_box">

            <div class="clear"></div>
            <label for="phone">联系电话:</label>
            <input type="text" id="phone" class="fill_box">

            <div class="clear"></div>
            <span class="warn">为了保障您的利益，请填写有效联系电话</span>
            <label for="company">公司名称:</label>
            <input type="text" id="company" class="fill_box">

            <div class="clear"></div>
            <label for="need">公司名称：</label>
            <textarea id="need"></textarea>
            <div class="clear"></div>
            <label for="text">验证码：</label>
            <input type="text" id="text"class="fill_box">
            <span class="text_pic"><img src="<?php echo SHOP_TEMPLATES_URL;?>/group/images/test_pic.jpg"></span>
            <div class="clear"></div>
        </form>
        <div class="group_purchase">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/images/group_avtivity.jpg">
        </div>
        <div class="service">
            <img src="<?php echo SHOP_TEMPLATES_URL;?>/group/images/service.jpg">
        </div>
    </div>
</div>
</body>
</html>