<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/ykj/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/ykj/Application/Admin/Public/css/main.css"/>
    <script type="text/javascript" src="http://127.0.0.1/ykj/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>head</title>
</head>
<body>
    <div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员:<?php echo $_SESSION['username']; ?></a></li>
                <li><a href="/ykj/index.php/Admin/admin/edit/id/<?php echo $_SESSION['id']; ?>">修改密码</a></li>
                <li><a href="/ykj/index.php/Admin/admin/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>left</title>
</head>
<body>
    <div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/ykj/index.php/Admin/Article/lst"><i class="icon-font">&#xe008;</i>文章管理</a></li>
                        <li><a href="/ykj/index.php/Admin/Cate/lst"><i class="icon-font">&#xe005;</i>分类管理</a></li>
                        <li><a href="/ykj/index.php/Admin/Link/lst"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                        <li><a href="/ykj/index.php/Admin/Admin/lst"><i class="icon-font">&#xe006;</i>管理员管理</a></li>
                    </ul>
                </li>             
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>

<div class="container clearfix">
  
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">管理员管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="/ykj/index.php/Admin/Admin/sort">
                <div class="result-title">
                    <div class="result-list">
                        <a href="/ykj/index.php/Admin/Admin/add"><i class="icon-font"></i>新增管理员</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i></a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>                          
                            <th>ID</th>
                            <th>管理员名称</th>
                             <th>管理员密码</th>                          
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>                             
                            <td width="4%"><?php echo ($vo["id"]); ?></td>
                            <td title="<?php echo ($vo["username"]); ?>"><a target="_blank" href="#" title="发哥经典"><?php echo ($vo["username"]); ?></a>
                            <td title="<?php echo ($vo["password"]); ?>"><a target="_blank" href="#" title="发哥经典"><?php echo ($vo["password"]); ?></a>
                            <td width="10%">
                                <a class="link-update" onclick="return confirm('确定要修改该管理员嘛?')" href="/ykj/index.php/Admin/Admin/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
                                <?php if($vo{'id'} != 1): ?><a class="link-del" onclick="return confirm('确定要删除该管理员嘛?')" href="/ykj/index.php/Admin/Admin/del/id/<?php echo ($vo["id"]); ?>">删除</a><?php endif; ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                   <div class="list-page"><?php echo ($page); ?></div> 
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>