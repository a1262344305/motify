<?php    
   /**  
    * Link   
    * @package custom   
    */    
$this->need('header.php');?>   

<div class="page-main" id="main">
    <article class="post">
        <h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
		<span class="type">PAGE</span>
		</h1>
        <div class="post-content links">
     
		    <?php $this->content(); ?>
		
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
