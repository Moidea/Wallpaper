<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

/** 输出文章图片数组 */ 
function getImgs($widget){
	$content = $widget->text;
	preg_match_all("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $widget->content, $match);  //通过正则式获取图片地址
	$imgs=array();
	$count=count($match[1]);
	for($i=0;$i<$count;$i++){
		if(!empty($match[0][$i])){
			$imgs[$i]=$match[1][$i];
		}
	}
	return $imgs;
}

// 分类文章数量控制 
function themeInit($archive) { 
    if ($archive->is('index')) { 
        $archive->parameter->pageSize = 16; // 自定义条数 
    } else if ($archive->is('category', 'qinglv')) {
		$archive->parameter->pageSize = 10; // 自定义条数
	} else if ($archive->is('category', 'touxiang')) {
		$archive->parameter->pageSize = 20; // 自定义条数
	} else if ($archive->is('category', 'style')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	}
}