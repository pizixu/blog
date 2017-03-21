<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function lst(){
        $article=D('ArticleView');
        $count=$article->count();
        $Page=new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2);
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性;
        $list = $article->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集;
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
     public function add(){
       	$article=D('article');
		 if(IS_POST){
    	 $data['title']=I('title');
         $data['desc']=I('desc');
         $data['cateid']=I('cateid');
         $data['content']=I('content');
         $data['time']=time();
         if($_FILES['pic']['tmp_name'] !=''){
            $upload =new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath='./Public/Uploads/'; // 设置附件上传目录
            $upload->rootPath='./';
            // 上传文件
            $info=$upload->uploadOne($_FILES['pic']);
            if(!$info) {// 上传错误提示错误信息             
                $this->error($upload->getError());
                }else{// 上传成功
                    $data['pic']=$info['savePath'].$info['savename'];
                        }
                    }

                                  
     	 //if($article->create($data))
     	 if($article->add($data)){
     	 	$this->success('添加文章成功',U('lst'));
     	}else{
     		$this->error('添加文章失败');
     	}
  /*      else{
     		$this->error($article->getError());
     	} */ 
     	return;        
	}
    $cateres=D('cate')->select();
    $this->assign('cateres',$cateres);
	$this->display();
}

     public function edit(){
     	$article=D('article');
     	   if(IS_POST){
         $data['title']=I('title');
         $data['desc']=I('desc');
         $data['cateid']=I('cateid');
         $data['content']=I('content');
         $data['id']=I('id');
         if($_FILES['pic']['tmp_name'] !=''){
            $upload =new \Think\Upload();// 实例化上传类
            $upload->maxSize=3145728 ;// 设置附件上传大小
            $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->savePath='./Public/Uploads/'; // 设置附件上传目录
            $upload->rootPath='./';
            // 上传文件
            $info=$upload->uploadOne($_FILES['pic']);
            if(!$info) {// 上传错误提示错误信息             
                $this->error($upload->getError());
                }else{// 上传成功
                    $data['pic']=$info['savePath'].$info['savename'];
                        }
                    }
               
                      
         //if($article->create($data))
         if($article->save($data)){
            $this->success('修改文章成功',U('lst'));
        }else{
            $this->error('修改文章失败');
        }
  /*      else{
            $this->error($article->getError());
        } */ 
        return;        
    }
     	$articles=$article->find(I('id'));
     	$this->assign('articles',$articles);
        $cateres=D('cate')->select();
        $this->assign('cateres',$cateres);
        $this->display();
    }
     public function del($id){
     	$article=D('article');
     	if($article->delete($id)){
     		$this->success('删除文章成功!',U('lst'));
     	}else{
     		$this->error('删除文章失败!');
     	}
      
    }
        public function sort(){
        $article=D('article');
        foreach ($_POST as $id => $sort) {
        	$article->where(array('id'=>$id))->setField('sort',$sort);
        }
        $this->success('排序成功!',U('lst'));
        //$this->display();
    }
}