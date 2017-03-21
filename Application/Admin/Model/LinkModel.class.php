<?php
namespace Admin\Model;
use Think\Model;
class LinkModel extends Model {
       protected $_validate = array(    
        array('title','require','链接名称不能为空',1,'regex',3),//默认情况下用正则进行验证 
        array('url','','链接地址不得为空!',1,'unique',3), // 在新增的时候验证catename字段是否唯一 
        array('title','','链接名称不能重复!',1,'unique',3), 
      );  
}