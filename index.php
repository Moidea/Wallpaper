<?php
/**
 * 基于Typecho的头像壁纸展示站手机版
 * 
 * @package Wallpaper
 * @author Roogle
 * @version 1.2
 * @link https://www.moidea.info
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="avatar box">
	<h1>情侣头像</h1>
	<ul>
		<?php $this->widget('Widget_Archive@avatar', 'pageSize=12&type=category', 'mid=6')->to($avatar); ?>
		<?php while($avatar->next()){ 
				$imgs = getImgs($avatar); 
				$nums = count($imgs); 
				for ($i  =  0 ;  $i  <  $nums ;  $i ++){ ?>
			<li><img class="thumb" src="<?php echo $imgs[$i]; ?>" alt="<?php $avatar->title() ?>"></li>
		<?php } } ?>
	</ul>
</div>

<div class="gallery box">
	<h1>情侣壁纸</h1>
	<ul>
		<?php $this->widget('Widget_Archive@bizhi', 'pageSize=6&type=category', 'mid=1')->to($bizhi); ?>
		<?php while($bizhi->next()){ 
				$imgs = getImgs($bizhi); 
				$nums = count($imgs); 
				for ($i  =  0 ;  $i  <  $nums ;  $i ++){ ?>
			<li><img class="thumb" src="<?php echo $imgs[$i]; ?>" alt="<?php $bizhi->title() ?>"></li>
		<?php } } ?>
	</ul>
</div>

<?php $this->need('footer.php'); ?>
