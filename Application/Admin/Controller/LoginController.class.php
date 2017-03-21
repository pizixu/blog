<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
     public function index(){
    $admin=D('admin');
    if(IS_POST){
        if($admin->create($_POST,4)){
            if($admin->login()){
                $this->success('登录成功,跳转中....',U('Index/index'),3);
            }else{
                $this->error('用户名或密码错误!');
            }

        }else{
            $this->error($admin->getError());
        }
        return;
    }
    if(session('id')){
       $this->error('你已登录该系统,请勿重复登录!',U('Index/index'),3);
    }else{
       $this->display('login'); 
    }
    
 }
        
        public function verifyImg(){
        $config=array(
            'imageH'    =>  30,               // 验证码图片高度
            'imageW'    =>  100,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
            'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
            'useCurve'  =>  true,            // 是否画混淆曲线
            'fontSize'  =>  15,              // 验证码字体大小(px)
            'useNoise'  =>  true,            // 是否添加杂点
            );
        $obj=new \Think\Verify($config);
        $obj->entry();
    }

        
    }

/*   public function index(){
    $admin=D('admin');
    if(IS_POST){
      
       
        if($admin->create($_POST,4)){
            if($admin->login()){
                  $info1=$admin->create($_POST);
        var_dump($info1);
         exit;
                $this->success('登录成功,跳转中....',U('Index/index'),3);
            }else{
                $this->error('用户名或密码错误!');
            }

        }else{
            $this->error($admin->getError());
        }
        return;
    }
    $this->display('login');
   }*/
