<?php
/**
 * 默认展示页面
 *
 *
 *
 * @copyright  Copyright (c) 2007-2013 ShopNC Inc. (http://www.shopnc.net)
 * @license    http://www.shopnc.net
 * @link       http://www.shopnc.net
 * @since      File available since Release v1.1
 */
defined('InShopNC') or exit('Access Invalid!');
class groupControl extends BaseHomeControl{
	public function indexOp(){

		Tpl::showpage('group');
	}


}
