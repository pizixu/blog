<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->nav();
		$this->link();
		$this->news();
	}
	public function nav(){
		$cate=M('cate');
		$cateres=$cate->order('sort')->select();
		$this->assign('cateres',$cateres);
	}
	public function link(){
		$link=M('link');
		$linkres=$link->order('sort')->select();
		$this->assign('linkres',$linkres);
	}
	public function news(){
		$artres=M('article')->limit(5)->select();
		$this->assign('artres',$artres);
	}
}
 