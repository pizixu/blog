<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel  {
     public $viewFields = array( 
     	'article'=>array('time','id','title','pic','_type'=>'LEFT'),
     	'cate'=>array('catename','_on'=>'Article.cateid=Cate.id'),

        );
}