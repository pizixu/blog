<?php
namespace Home\Model;
use Think\Model;
class CommonModel extends Model {
    	public function nav(){
		$cate=M('cate');
		$cateres=$cate->order('sort')->select();
		$this->assign('cateres',$cateres);
	}
}