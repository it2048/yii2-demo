<?php
use \bower\markdown;
$url = sprintf('%s%s/theme/%s/',Yii::$app->request->hostInfo,Yii::$app->request->baseUrl,Yii::$app->params['theme']); ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GitBlog文档</title>
    <meta name="keywords" content="gitblog,markdown,blog,php,github,GitBlog文档">
    <meta name="description" content="GitBlog是一个简单易用的Markdown博客系统,这是GitBlog的官方文档.">
    <link rel="stylesheet" href="<?=$url;?>assets/plugins/bootstrap/css/bootstrap.min.css?ver=<?=Yii::$app->params['version']?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=$url;?>assets/plugins/font-awesome/css/font-awesome.min.css?ver=<?=Yii::$app->params['version']?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=$url;?>css/style.css?ver=<?=Yii::$app->params['version']?>" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=$url;?>css/customizer.css?ver=<?=Yii::$app->params['version']?>" type="text/css" media="all" />
</head>

<body class="home blog wide">
<?php $this->beginBody() ?>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="main-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="site-branding col-md-4">
                    <h1 class="site-title"><a href="http://gitblogdoc.sinaapp.com" rel="home">GitBlog文档</a></h1>
                    <span class="site-description">gitblog使用手册</span>
                </div>
                <!-- .site-branding -->
            </div>
        </div>
    </header>		    <div id="content">
        <?= $content ?>
        <div class="quest-row site-content">
            <div class="container">
                <div class="row">
                    <div id="primary" class="content-area col-md-9">
                        <div id="main" class="site-main" role="main">
                            <article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/welcome.html" rel="bookmark">欢迎使用GitBlog</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-08-01</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>GitBlog是一个简单易用的Markdown博客系统，它不需要数据库，没有管理后台功能，更新博客只需要添加你写好的Markdown文件即可。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/welcome.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/install.html" rel="bookmark">GitBlog安装</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-30</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>这是Giblog的一个简单安装教程，如果你熟悉PHP或Web开发，这对你来说一定非常简单。本教程只针对Linux+Nginx环境，对于使用Apache的用户请参考Apache配置章节。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/install.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/struct.html" rel="bookmark">GitBlog目录结构</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-29</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>GitBlog采用流行的PHP框架CodeIgniter开发，只是我对一些目录进行了重命名。如果你熟悉CodeIgniter框架，那你一定不会陌生。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/struct.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/config.html" rel="bookmark">GitBlog配置</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-28</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>这是Giblog的一个简单安装教程，如果你熟悉PHP或Web开发，这对你来说一定非常简单。本教程只针对Linux+Nginx环境，对于使用Apache的用户配置参考网上其他资料。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/config.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/edit.html" rel="bookmark">编写GitBlog博客</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-27</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>一篇GitBlog就是一个markdown文件，GitBlog使用解析markdown文件为html展示在网页上。所有的博客markdown文件必须放在posts文件夹里。后缀名只可以是xx.md或者xx.markdown。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/edit.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/other-func.html" rel="bookmark">GitBlog评论，订阅，统计等功能</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-26</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>GitBlog支持评论，订阅，百度统计相关功能，这些功能可由conf.yaml配置开启或关闭，评论采用多说评论框，统计采用百度统计。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/other-func.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/cache.html" rel="bookmark">GitBlog的缓存机制</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-25</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>由于GitBlog没有数据库，是依靠解析posts文件夹中的markdown文件来展示表客数据的。通常我们写好一篇博客以后，对其进行修改的频率并不高。GitBlog没必要每次访问页面时，都去解析markdown文件。基于这个理由，GitBlog对数据进行了缓存，GitBlog的缓存有三个层面的实现。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/cache.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/export.html" rel="bookmark">GitBlog全站静态导出</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-24</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>GitBlog支持把整个博客网站导出为静态HTML文件，这样导出整个网站后，可以把它上传到网站空间，以静态形式访问，导出的后的网站结构和运行在PHP环境中一样。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/export.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/theme.html" rel="bookmark">GitBlog主题制作</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-23</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>此文档编写中...如果你想制作主题可以先参考源码包中现有主题，GitBlog主题模板采用<a href="http://twig.sensiolabs.org/">Twig</a>引擎，你可以通过官方文档学习模板语法</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/theme.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/apache.html" rel="bookmark">在Apache上运行GitBlog</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-22</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>GitBlog在Aapche上运行需要开启Aapche Rewrite模块以支持GitBlog的伪静态URL。并且要配置.htaccess文件可用，然后在.htaccess文件中配置Rewriter规则。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/apache.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/nginx.html" rel="bookmark">在Nginx上运行GitBlog</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-22</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>如果你自己拥有服务器或者云平台提供的云主机，我推荐你使用Linux+<a href="http://nginx.org/">Nginx</a>来运行GitBlog，如果你目前只有Apache环境也是可以的。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/nginx.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/sae.html" rel="bookmark">在新浪SAE上运行GitBlog</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-21</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>GitBlog支持在新浪SAE云平台上运行。SAE是Sina App Engine的简称，是新浪研发中心推出的国内首个公有云计算平台，支持PHP，MySQL，Memcached，Mail，TaskQueue，RDC（关系型数据库集群）等服务。SAE通过实名认证及开发者认证，每个月送大量云豆，对于一般的博客站点云豆完全够用，也就是说用SAE搭建博客完全免费，不需要支付费用。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/sae.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/github-pages.html" rel="bookmark">使用GitBlog和Github Pages搭建博客</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-20</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>如果你没有主机，也不想使用SAE，只有Github账号，你想用GitBlog搭建自己的博客系统也是可以简单地做到的，<a href="https://pages.github.com/">Github pages</a>允许你基于Github分库建立一个站点。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/github-pages.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/update.html" rel="bookmark">Gitblog升级</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-18</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>使用Gitblog老版本的用户可以在官网或者Gitbub上下载最新的Gitblog包进行升级，本文针对Gitblog升级的一些注意事项进行说明。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/update.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											        	<article class="post hentry">
                                <header class="entry-header">
                                    <h1 class="post-title"><a href="/blog/gitblog/wordpress.html" rel="bookmark">从wordpress导入</a></h1>
                                    <div class="entry-meta">
                                        <time class="post-date"><i class="fa fa-clock-o"></i>2015-07-17</time>
                                        <span class="seperator">/</span>
                                        <span><i class="fa fa-user"></i> jockchou</span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->	<div class="entry-content">
                                    <p>
                                    <p>Gitblog从2.1版本开始支持从wordpress导入到Gitblog的功能，方便wordpress使用者快速转移博客到Gitblog。</p>
                                    </p>
                                </div><!-- .entry-content -->	<footer class="entry-footer">
                                    <ul class="post-categories">

                                        <li><a href="/category/107260689.html" rel="category">GitBlog</a></li>
                                    </ul>

                                    <ul class="post-tags">
                                        <li><a href="/tags/107260689.html" rel="tag">GitBlog</a></li>
                                    </ul>

                                    <div class="read-more">
                                        <a href="/blog/gitblog/wordpress.html">阅读全文<i class="fa fa-angle-double-right "></i></a>
                                    </div>
                                </footer><!-- .entry-footer --></article><!-- #post-## -->				        					        											</div>
                        <!-- #main -->
                    </div>
                    <div id="secondary" class="widget-area main-sidebar col-md-3" role="complementary">
                        <aside class="widget widget_categories sidebar-widget clearfix">
                            <h3 class="widget-title">分类目录</h3>
                            <ul>
                                <li class="cat-item"><a href="/category/107260689.html" >GitBlog</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_archive sidebar-widget clearfix">
                            <h3 class="widget-title">文章归档</h3>
                            <ul>
                                <li><a href="/archive/201508.html">2015-08</a></li>
                                <li><a href="/archive/201507.html">2015-07</a></li>
                            </ul>
                        </aside>	<aside class="widget widget_recent_entries sidebar-widget clearfix">
                            <h3 class="widget-title">近期文章</h3>
                            <ul>
                                <li><a href="/blog/welcome.html">欢迎使用GitBlog</a></li>
                                <li><a href="/blog/gitblog/install.html">GitBlog安装</a></li>
                                <li><a href="/blog/gitblog/struct.html">GitBlog目录结构</a></li>
                                <li><a href="/blog/gitblog/config.html">GitBlog配置</a></li>
                                <li><a href="/blog/gitblog/edit.html">编写GitBlog博客</a></li>
                                <li><a href="/blog/gitblog/other-func.html">GitBlog评论，订阅，统计等功能</a></li>
                                <li><a href="/blog/gitblog/cache.html">GitBlog的缓存机制</a></li>
                                <li><a href="/blog/gitblog/export.html">GitBlog全站静态导出</a></li>
                                <li><a href="/blog/gitblog/theme.html">GitBlog主题制作</a></li>
                                <li><a href="/blog/gitblog/apache.html">在Apache上运行GitBlog</a></li>
                                <li><a href="/blog/gitblog/nginx.html">在Nginx上运行GitBlog</a></li>
                                <li><a href="/blog/gitblog/sae.html">在新浪SAE上运行GitBlog</a></li>
                                <li><a href="/blog/gitblog/github-pages.html">使用GitBlog和Github Pages搭建博客</a></li>
                                <li><a href="/blog/gitblog/update.html">Gitblog升级</a></li>
                                <li><a href="/blog/gitblog/wordpress.html">从wordpress导入</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_tag_cloud sidebar-widget clearfix">
                            <h3 class="widget-title">标签</h3>
                            <div class="tagcloud">
                                <a href="/tags/107260689.html"  title="GitBlog" >GitBlog</a>
                            </div>
                        </aside>
                        <aside class="widget widget_text sidebar-widget clearfix">
                            <h3 class="widget-title">简介</h3>
                            <div class="textwidget">
                                <p>GitBlog是一个简单易用的Markdown博客系统，这是GitBlog的官方文档.</p>
                            </div>
                        </aside>
                    </div><!-- #secondary -->			</div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .quest-row -->
    </div><!-- #content -->		    <footer id="colophon" class="copyright quest-row" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright-text">
                    <a href="https://github.com/jockchou/gitblog">Proudly powered by Gitblog</a>
                </div>
                <div class="col-md-6 social-icon-container clearfix">
                    <ul></ul>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>	</div><!-- #page -->
<a href="#0" class="cd-top"><i class="fa fa-angle-up"></i></a>


<script type="text/javascript" src="<?=$url;?>assets/plugins/modernizr/modernizr.custom.js?ver=1.0"></script>
<script type="text/javascript" src="<?=$url;?>js/jquery/jquery.js?ver=1.11.2"></script>
<script type="text/javascript" src="<?=$url;?>js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
<script type="text/javascript" src="<?=$url;?>assets/plugins/bootstrap/js/bootstrap.min.js?ver=1.0"></script>
<script type="text/javascript" src="<?=$url;?>assets/plugins/wow/wow.js?ver=1.0"></script>
<script type="text/javascript" src="<?=$url;?>assets/plugins/colorbox/jquery.colorbox-min.js?ver=1.0"></script>
<script type="text/javascript" src="<?=$url;?>assets/js/quest.js?ver=1.0"></script>

<link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/8.6/styles/default.min.css">
<script src="http://cdn.bootcss.com/highlight.js/8.6/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>