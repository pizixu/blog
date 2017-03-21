<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController{
    public function index(){
    	$article=M('article')->find(I('id'));
    	$this->assign('article',$article);
    	$this->cate($cate_id['catename']);
    	$this->other(I('id'));
        $this->display();
    }
    public function cate($cateid){
    	$cate_id=D('cate')->find($cateid);
    	$this->assign('catename',$cate_id['catename']);
    }
    public function other($id){
    	$article=M('article');
    	$articles=$article->find($id);
    	$cateid=$articles['cateid'];
    	$pres=$article->where('id<'.$id)->where(array('cateid'=>$cateid))->order('id desc')->find();
    	$nexts=$article->where('id>'.$id)->where(array('cateid'=>$cateid))->order('id asc')->find();
    	$this->assign('pres',$pres);
    	$this->assign('nexts',$nexts);
    }
 
}