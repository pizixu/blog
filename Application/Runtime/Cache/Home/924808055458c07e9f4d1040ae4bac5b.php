<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="applicable-device" content="pc">
<meta http-equiv="Cache-Control" content="no-transform" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" media="screen" href="/ykj/Public/style/style.css"/>
<link rel="shortcut icon" href="http://yispace.net/wp-content/themes/weiweiqi/img/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="意空间阅读 RSS Feed" href="http://yispace.net/feed"/>
<title>美文网_美文欣赏_经典美文_美文美句摘抄_意空间阅读网</title><meta name="keywords" content="意空间,美文阅读,情感美文,励志生活,生活感悟" />
<meta name="description" content="意空间阅读网分享美文网，美文欣赏，经典美文，美文美句摘抄，奉献青春励志人生哲理文章故事阅读，励志的文章大全，青春励志语录名言，提升思想意境，阅读改变思想。" />

<!-- 百度统计 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?99c2c06a529fc4c8787deb597141fe76";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body class="home blog">
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>head</title>
</head>
<body>
	<div class="topbar">
	<div class="inner">
		<h1 class="logo"><a href="http://yispace.net" title="意空间阅读网_美文网_美文欣赏_经典美文_美文美句摘抄">意空间阅读网</a></h1>
		<ul class="nav">
			<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($current == $vo[id]): ?>class="current-menu-item"<?php endif; ?>><a href="/ykj/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</div>
</body>
</html>
<div class="wrapper">
	<div class="content">


	
	<!-- 分享代码 --><div class="baidufenxiang" style="overflow:auto;margin-bottom:10px"><!-- Baidu Button BEGIN -->
<div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
<a class="bds_bdhome"></a>
<a class="bds_renren"></a>
<a class="bds_kaixin001"></a>
<a class="bds_douban"></a>
<a class="bds_youdao"></a>
<a class="bds_sqq"></a>
<a class="bds_hi"></a>
<a class="bds_baidu"></a>
<a class="bds_qq"></a>
<a class="bds_tqq"></a>
<a class="bds_tsina"></a>
<a class="bds_qzone"></a>
<a class="bds_mshare"></a>
<span class="bds_more"></span>
<a class="shareCount"></a>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=53164" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
<!-- Baidu Button END --></div><!-- 分享代码 -->
	
<ul class="excerpt thumb">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a href="/ykj/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" class="pic"><img src="/ykj/Public/Uploads/<?php echo (date("Y-m-d",$vo["time"])); ?>/<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>" /></a>			<h2 class="excerpt-tit">
				<a href="/ykj/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
			</h2>
			<p class="excerpt-desc"><?php echo ($vo["desc"]); ?>.....</p>

			<div class="excerpt-time"><?php echo (date("Y-m-d",$vo["time"])); ?></div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>

<div class="paging"><?php echo ($page); ?></div>

</div>
<div class="sidebar">
	<ul class="mypages">
		<li><a rel="nofollow" target="_blank" class="my-a my-tqq" href="http://t.qq.com/weibogo2010"><span><strong>腾讯微博</strong></span>腾讯微博 &raquo;</a></li>
		<li><a rel="nofollow" target="_blank" class="my-a my-weibo" href="http://weibo.com/534260789"><span><strong>新浪微博</strong></span>新浪微博 &raquo;</a></li>
		<li><a rel="nofollow" target="_blank" class="my-a my-feed" href="http://mail.qq.com/cgi-bin/bookcol?colid=20296"><span><strong>订阅本站</strong></span>订阅本站 &raquo;</a></li>
		<li><a rel="nofollow" target="_blank" class="my-a my-theme" href="http://172108624.qzone.qq.com"><span><strong>腾讯博客</strong></span>腾讯博客 &raquo;</a></li>
	</ul>
	<div class="widget widget_text">			<div class="textwidget"><div style="margin-bottom: 5px;margin-top: 5px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div></div>
		</div><div class="widget widget_categories"><h3 class="widget-tit">文章分类</h3>		
		<ul>
		<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cat-item cat-item-4846 current-cat"><a href="/ykj/index.php/Home/Cate/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
</div><div class="widget widget_text">			<div class="textwidget"><div style="margin-bottom: 15px;margin-top: 15px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 
</div></div>
		</div>		<div class="widget widget_recent_entries">		<h3 class="widget-tit">最新发表</h3>		<ul>
		<?php if(is_array($artres)): $i = 0; $__LIST__ = $artres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
				<a href="/ykj/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
		</div>		<div class="widget widget_text">			 
		</div><div class="widget widget_links"><h3 class="widget-tit">友情链接</h3>
	<ul class='xoxo blogroll'>
	<?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>" rel="friend" target="_blank"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
</div>
</div>
<div class="footer">
	<div class="inner">
		<div class="manage">
			<a href="http://yispace.net/copyright">站内导航</a>  | 主编 QQ：172108624		</div>		
		<div class="copyright">
			<a href="http://yispace.net">意空间阅读网</a>，版权所有！ &copy; 2017 <img src="http://www.weiweiqi.com/wp-content/themes/weiweiqi/img/beian.png" /> <a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=43010202000139">湘公网安备43010202000139号</a> <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn">湘ICP备13010121号-3</a>
		</div>
	</div>
</div>
<script src="/ykj/Public/style/jquery.min.js"></script> 


<!-- 百度自动推送 -->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>

<!-- Dynamic page generated in 0.893 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2017-01-18 12:06:24 -->

<!-- super cache -->