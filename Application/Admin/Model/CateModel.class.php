<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {
       protected $_validate = array(    
        array('catename','require','栏目名称不能为空',1,'regex',3),//默认情况下用正则进行验证 
        array('catename','','栏目名称不能重复!',1,'unique',3), // 在新增的时候验证catename字段是否唯一 
      );  
}