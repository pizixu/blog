<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController {
    public function lst(){
        $admin=D('admin');
        $count=$admin->count();
        $Page=new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(2);
        $show= $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性;
        $list = $admin->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集;
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
     public function add(){
    	$admin=D('admin');
		 if(IS_POST){
    	 $data['username']=I('username');
         $data['password']=md5(I('password'));
     	 if($admin->create($data)){ 
     	 if($admin->add()){
     	 	$this->success('添加管理员成功',U('lst'));
     	}else{
     		$this->error('添加管理员失败');
     	}
        }else{
     		$this->error($admin->getError());
     	}  
     	return;        
	}
	$this->display();
}
     public function edit(){
     	$admin=D('admin');
     	if(IS_POST){
     	$data['id']=I('id');
        $data['username']=I('username');
        $admin_s=$admin->find($data['id']);
        $password=$admin_s['password'];
        if($password){
            $data['password']=md5(I('password'));
        }else{
            $data['password']=$password;
        }
     	if($admin->create($data)){
     		$save=$admin->save();
     		if($save!==false){
     		$this->success('修改管理员成功!',U('lst'));
     		}else{
     		$this->error('修改管理员失败!');
     		}

     	}else{
     		$this->error($admin->getError());
     	}
     	return;
     	}
     	$admins=$admin->find(I('id'));
     	$this->assign('admins',$admins);
        $this->display();
    }
     public function del($id){
     	$admin=D('admin');
        if($id==1){
         $this->error('超级管理员不能删除!');
        }else{
        if($admin->delete($id)){
            $this->success('删除管理员成功!',U('lst'),3);
        }else{
            $this->error('删除管理员失败!');
        }
        }      
    }
    public function logout(){
        session(null);
        $this->success('退出成功,跳转中....',U('Login/index'),3);
    }
}