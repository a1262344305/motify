<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
	<link rel='dns-prefetch' href='//cdn.staticfile.org' />
	<link rel='dns-prefetch' href='//o4jiepyc4.qnssl.com' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('/img/favicon.ico'); ?>" />
	<script src="//cdn.staticfile.org/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php $this->options->themeUrl('/js/app.js'); ?>"></script> 
	<?php endif; ?>
    <?php $this->header(); ?>
</head>
<body>
<div class="search-main">
<form id="search" method="post" action="./" role="search">
<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" autocomplete="off"/>
</form></div>
<header class="header">
<div class="blog-info container">
<a href="<?php $this->options->siteUrl(); ?>"><h2><?php $this->options->title() ?></h2></a>
<p>Stay hungry. Stay foolish.</p>
</div>
</header>
<a class="menuToggle">Menu</a>
<div class="toolbar container">
<nav class="nav">
<ul>
 <li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a></li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
					<li><a href="#" class="search-on">
                    <div class="search-icon"></div>
                    <span class="search-input">SEARCH</span>
                    </a></li>
					</ul>
</nav>
</div>
<div class="body container">

