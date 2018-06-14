<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl(); ?>css/normalize.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl(); ?>css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl(); ?>css/style.css">
	

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>	
	<div class="scroll">	
		<header>
			<div class="search"></div>
			
			<?php if($this->is('index')): ?>
			<!-- Swiper -->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide-center"><a href="#"><img src="<?php $this->options->themeUrl(); ?>img/top_hero_conc_2017.jpg" ></a></div>
					<div class="swiper-slide"><a href="#"><img src="<?php $this->options->themeUrl(); ?>img/top_hero_cs_2017.jpg" ></a></div>
					<div class="swiper-slide"><a href="#"><img src="<?php $this->options->themeUrl(); ?>img/top_hero_cw_im17.jpg" ></a></div>
					<div class="swiper-slide"><a href="#"><img src="<?php $this->options->themeUrl(); ?>img/top_hero_hakko.jpg" ></a></div>
					<div class="swiper-slide"><a href="#"><img src="<?php $this->options->themeUrl(); ?>img/top_hero_karadacalpis_im02.jpg" ></a></div>	
				</div>        
			</div>
			<!-- Swiper JS -->
			<script src="<?php $this->options->themeUrl(); ?>js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
		autoplay:3000,
		speed:1000,
		autoplayDisableOnInteraction : false,
		loop:true,
		centeredSlides : true,
		slidesPerView:2,
		onInit:function(swiper){
			swiper.slides[2].className="swiper-slide swiper-slide-active";//第一次打开不要动画
			}//,
			//breakpoints: { 
            //    668: {
            //        slidesPerView: 1,
            //     }
			// }
		});
  </script>
  
	<?php endif; ?>
	<nav>
	<div class="nav">
	    <li>
	    	<a href="<?php $this->options->siteUrl(); ?>category/qinglv/" style="background-image: linear-gradient( 135deg, #ff006a 10%, #ec17bf 100%);">
	    		情侣壁纸	
	    	</a>
	    </li>
		<li>
		    <a href="<?php $this->options->siteUrl(); ?>category/touxiang/" style="background-image: linear-gradient( 135deg, #ff0909 10%, #f9ca46 100%);">
		    	情侣头像	
		    </a>
	    </li>
		<li style="display:none;">
	    	<a href="<?php $this->options->siteUrl(); ?>category/zhuanti/" style="background-image: linear-gradient( 135deg, #3769c0 10%, #31acdc 100%);">
	    		内部专题	
	    	</a>
	    </li>
		
		<li>
	    	<a href="<?php $this->options->siteUrl(); ?>category/egao/" style="background-image: linear-gradient( 135deg, #0fef69 10%, #31dca5 100%);">
	    		恶搞壁纸	
	    	</a>
	    </li>
		
		<li style="display:none;">
		    <a href="<?php $this->options->siteUrl(); ?>category/wenzi/" style="background-image: linear-gradient( 135deg, #17222b 10%, #53423b 100%);">
		    	文字壁纸	
		    </a>
	    </li>		
	    
		<li>
		    <a href="<?php $this->options->siteUrl(); ?>category/luanqi/" style="background-image: linear-gradient( 135deg, #a25e19 10%, #e9da99 100%);">
		    	其它壁纸	
		    </a>
	    </li>
			
		<li style="display:none;">
		    <a href="<?php $this->options->siteUrl(); ?>category/dirty/" style="background-image: linear-gradient( 135deg, #2a4c72 10%, #b5f4fb 100%);">
		    	污污壁纸	
		    </a>
	    </li>	
			
		<li>
		    <a href="https://www.nihaowua.com/" target="_blank" style="background: #ffec00;">
		    	你好污啊	
		    </a>
	    </li>
		
		<li>
		    <a href="https://www.wubiaoqing.com/" target="_blank" style="background: #cd2828;">
		    	污表情	
		    </a>
	    </li>
	</div>
	</nav>
	<div style="padding: 10px;margin: 10px;border-radius: 3px;background: #eee;font-size: 14px;text-shadow: 0 1px 1px #fff;">使用方法：找到你喜欢的图片长按该图片然后选择保存图片或者发送给朋友选择对方的微信号，保存下来即为高清图片</div>
      </header>
  
  <div class="content" style="background:#fbfbfb;">
