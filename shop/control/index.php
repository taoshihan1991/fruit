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
class indexControl extends BaseHomeControl{
	public function indexOp(){
		Language::read('home_index_index');
		Tpl::output('index_sign','index');

		//团购专区
		Language::read('member_groupbuy');
        $model_groupbuy = Model('groupbuy');
        $group_list = $model_groupbuy->getGroupbuyCommendedList(array(), null, '', '*', 4);
		Tpl::output('group_list', $group_list);

		//限时折扣
        $model_xianshi_goods = Model('p_xianshi_goods');
        $xianshi_item = $model_xianshi_goods->getXianshiGoodsCommendList(4);
		Tpl::output('xianshi_item', $xianshi_item);

		//板块信息
		$model_web_config = Model('web_config');
		$web_html = $model_web_config->getWebHtml('index');
		Tpl::output('web_html',$web_html);

		// 1F 鲜果区楼层数据
		$goods_class = H('goods_class');
		$floor1Goods=$this->getGoodsByLevelPid($goods_class,1057);
		Tpl::output('floor1Goods',$floor1Goods);
		// 2F 
		$floor2Goods=$this->getGoodsByLevelPid($goods_class,1058);
		Tpl::output('floor2Goods',$floor2Goods);
		// 3F 
	 	$floor3Goods=$this->getGoodsByLevelPid($goods_class,1059);
		Tpl::output('floor3Goods',$floor3Goods);
		// 4F 
		$floor4Goods=$this->getGoodsByLevelPid($goods_class,1060);
		Tpl::output('floor4Goods',$floor4Goods);
		// 5F 
		$floor5Goods=$this->getGoodsByLevelPid($goods_class,1061);
		Tpl::output('floor5Goods',$floor5Goods);
		$this->getBottomArticle();

		Model('seo')->type('index')->show();
		Tpl::showpage('index');
	}
	/**
	* 按楼层组装数据
	* @return 分配变量
	*/
	public function getBottomArticle(){
		$model_ac=Model('article_class');
		$model_article=Model('article');
		$classList=$model_ac->getClassList(array());
		$result=array();
		foreach($classList as $v){
			$list=$model_article->getArticleList(array('ac_id'=>$v['ac_id'],'field'=>'article_title,article_id'),5);
			$temp=array();
			$temp['ac_name']=$v['ac_name'];
			$temp['list']=$list;
			$result[]=$temp;
		}
		Tpl::output('bottomArticle',$result);
	}
	/**
	* 按楼层组装数据
	* @return 分配变量
	*/
	public function getGoodsByLevelPid($goods_class,$pid){
		$categoryTab=array();
		$i=0;
		foreach($goods_class as $k=>$v){
			if($v['gc_parent_id']==$pid){
				$i++;
				$categoryTab[]=$v;
				if($i>=9) break;
			}
		}
		
		foreach($categoryTab as $k=>$v){
			if(isset($v['gc_id'])){
				$list=$this->getDataByCate($v['child'].','.$v['gc_id'],10,360);
			}else{
				$list=$this->getDataByCate($v['child'],8,360);
			}
			
			$categoryTab[$k]['goods']=$list;
		}
		
		return $categoryTab;
	}
	/**
	* 按分类取商品
	* @return array
	*/
	public function getDataByCate($cate,$limit,$pic_type='360'){
		$goods_model=Model('goods');
		$condition=array(
			'goods.goods_state'=>1,
			'goods.gc_id'=>array('in',$cate)
		);

		$list=array();
		$list=$goods_model->table('goods,goods_attr_index,attribute_value')
						  ->where($condition)
						  ->join('left')->on('goods.goods_id=goods_attr_index.goods_id,goods_attr_index.attr_value_id=attribute_value.attr_value_id')
						  ->order('goods.goods_addtime desc')->limit($limit)->select();
		foreach($list as $k=>$v){
			$list[$k]['pic']=thumb($v,$pic_type);
			$list[$k]['url']=urlShop('goods', 'index', array('goods_id' => $v['goods_id']));
		}
		return $list;
	}
	//json输出商品分类
	public function josn_classOp() {
		/**
		 * 实例化商品分类模型
		 */
		$model_class		= Model('goods_class');
		$goods_class		= $model_class->getClassList(array('gc_parent_id'=>intval($_GET['gc_id']),'order'=>'gc_parent_id asc,gc_sort asc,gc_id asc'));
		$array				= array();
		if(is_array($goods_class) and count($goods_class)>0) {
			foreach ($goods_class as $val) {
				$array[$val['gc_id']] = array('gc_id'=>$val['gc_id'],'gc_name'=>htmlspecialchars($val['gc_name']),'gc_parent_id'=>$val['gc_parent_id'],'gc_sort'=>$val['gc_sort']);
			}
		}
		/**
		 * 转码
		 */
		if (strtoupper(CHARSET) == 'GBK'){
			$array = Language::getUTF8(array_values($array));//网站GBK使用编码时,转换为UTF-8,防止json输出汉字问题
		} else {
			$array = array_values($array);
		}
		echo $_GET['callback'].'('.json_encode($array).')';
	}

	//判断是否登录
	public function loginOp(){
		echo ($_SESSION['is_login'] == '1')? '1':'0';
	}

	/**
	 * 头部最近浏览的商品
	 */
	public function viewed_infoOp(){
	    $info = array();
		if ($_SESSION['is_login'] == '1') {
		    $member_id = $_SESSION['member_id'];
		    $info['m_id'] = $member_id;
		    if (C('voucher_allow') == 1) {
		        $time_to = time();//当前日期
    		    $info['voucher'] = Model()->table('voucher')->where(array('voucher_owner_id'=> $member_id,'voucher_state'=> 1,
    		    'voucher_start_date'=> array('elt',$time_to),'voucher_end_date'=> array('egt',$time_to)))->count();
		    }
    		$time_to = strtotime(date('Y-m-d'));//当前日期
    		$time_from = date('Y-m-d',($time_to-60*60*24*7));//7天前
		    $info['consult'] = Model()->table('consult')->where(array('member_id'=> $member_id,
		    'consult_reply_time'=> array(array('gt',strtotime($time_from)),array('lt',$time_to+60*60*24),'and')))->count();
		}
	    $model_goods = Model('goods');
		$goods_list = $model_goods->getViewedGoodsList();
		if(is_array($goods_list) && !empty($goods_list)) {
		    $viewed_goods = array();
		    foreach ($goods_list as $key => $val) {
		        $goods_id = $val['goods_id'];
		        $val['url'] = urlShop('goods', 'index', array('goods_id' => $goods_id));
		        $val['goods_image'] = thumb($val, 60);
		        $viewed_goods[$goods_id] = $val;
		    }
		    $info['viewed_goods'] = $viewed_goods;
		}
		if (strtoupper(CHARSET) == 'GBK'){
			$info = Language::getUTF8($info);
		}
		echo json_encode($info);
	}
}
