<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<?php $totalpages=ceil($this->getTotal() / $this->parameter->pageSize); ?>
<?php if(($this->category == 'touxiang')): //情侣头像分类?>
<div class="avatar box">
	<ul>
	<?php if ($this->have()): ?>
    <?php while($this->next()){
		$imgs = getImgs($this); 
		$nums = count($imgs); 
		for ($i  =  0 ;  $i  <  $nums ;  $i ++){ ?>
		<li><img class="thumb" src="<?php echo $imgs[$i]; ?>" alt="<?php $this->title() ?>"></li>
	<?php } } ?>
	<?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>
	</ul>
</div>
<?php elseif(($this->category == 'qinglv')) : //情侣壁纸分类?>
<div class="gallery box">
	<ul>
	<?php if ($this->have()): ?>
    <?php while($this->next()){
		$imgs = getImgs($this); 
		$nums = count($imgs); 
		for ($i  =  0 ;  $i  <  $nums ;  $i ++){ ?>
		<li><img class="thumb" src="<?php echo $imgs[$i]; ?>" alt="<?php $this->title() ?>"></li>
	<?php } } ?>
	<?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>
	</ul>
</div>
<?php else : //其它分类?>
<div class="gallery box default">
	<ul>
	<?php if ($this->have()): ?>
    <?php while($this->next()){
		$imgs = getImgs($this);  ?>
		<li><img class="thumb" src="<?php echo $imgs[0]; ?>" alt="<?php $this->title() ?>"></li>
	<?php } ?>
	<?php else: ?>
        <article class="post">
            <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
        </article>
    <?php endif; ?>
	</ul>
</div>

<?php endif; ?>
<div class="pager">
	<?php $this->pageLink('<span>上一页</span>');?>
	<a class="nav_pagenum"><span><?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> / <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?></span></a>	
	<?php $this->pageLink('<span>下一页</span>','next');?>
</div>

<?php $this->need('footer.php'); ?>
