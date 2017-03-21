<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model {
       protected $_validate = array(    
        array('title','require','标题名称不能为空',1,'regex',3),//默认情况下用正则进行验证 
        array('catename','','所属栏目不得为空!',1,'unique',3), // 在新增的时候验证catename字段是否唯一 
        array('content','','内容不得为空!',1,'unique',3), 
      );  
}