<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="post-main" id="main">
    <article class="post">
        <h1 class="post-title"><?php $this->title() ?></h1>
			<div class="post-meta">
			<time><?php $this->date('Y-m-d H:i'); ?></time>
			</div>
 
        </ul>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
       		 <p class="post-tags"><?php $this->tags('', true, ''); ?></p>
		<div class="Qrcode">
		<a href="javascript:;" id="mClick" class="off_QR">
		
		<img src="//pan.baidu.com/share/qrcode?w=180&amp;h=180&amp;url=<?php $this->permalink() ?>">
       </a>
	   </div>
    </article>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
