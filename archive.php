<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


        <?php if ($this->have()): ?>
<div class="tip">
		<h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
            </div>
      <?php endif; ?>

    <div class="archive-main" id="main">
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
			 <article class="post">
			<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<div class="post-meta">
			<time><?php $this->date('Y-m-d H:i'); ?></time>
			</div>
            <div class="post-content">
    			<?php $this->excerpt(180,'...'); ?>
            </div>
			 <p itemprop="keywords" class="post-tags"><?php $this->tags('', true, ''); ?></p>
        </article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <div class="tip tip-404">
                <h3 class="archive-title"><?php _e('没有找到内容'); ?></h3>
              </div>
            </article>
        <?php endif; ?>

<div class="page-number">
<?php $this->pageLink('<span>上一页</span>'); ?>
<?php $this->pageLink('<span>下一页</span>','next'); ?>
</div>
    </div><!-- end #main -->

	<?php $this->need('footer.php'); ?>
