<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if(($this->category == 'zhuanti')):?>
	<?php $this->need('post-zhuanti.php'); ?>			
<?php else : ?>
	<?php $this->need('post-default.php'); ?>
<?php endif; ?>