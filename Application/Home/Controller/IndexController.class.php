<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$article=M('article');
    	$count= $article->count();
    	$Page= new \Think\Page($count,2);
    	$show= $Page->show();
    	$list = $article->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);
    	$this->assign('page',$show);
        $this->display();
    }
 
}