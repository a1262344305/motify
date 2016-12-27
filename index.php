<?php
/**
 * at the beginning of the heart 
 * 
 * @package Motify
 * @author Klose
 * @version 1.0
 * @link http://sb.dog
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="post-list" id="main">
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
<div class="page-number">
<?php $this->pageLink('<span>上一页</span>'); ?>
<?php $this->pageLink('<span>下一页</span>','next'); ?>
</div>
</div><!-- end #main-->
<?php $this->need('footer.php'); ?>
