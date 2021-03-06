<?php

function themeConfig($form) {
    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, NULL, _t('首页图片标语文字'), _t('在这里文字，用于在首页中图片的文字显示'));
    $form->addInput($slogan);

    $billboard = new Typecho_Widget_Helper_Form_Element_Text('billboard', NULL, NULL, _t('首页图片路径'), _t('首页大图片的路径'));
    $form->addInput($billboard);

    $navpng = new Typecho_Widget_Helper_Form_Element_Text('navpng', NULL, NULL, _t('导航图片路径'), _t('首页导航图片的路径'));
    $form->addInput($navpng);

    $dynamicpng = new Typecho_Widget_Helper_Form_Element_Text('dynamicpng', NULL, NULL, _t('动态banner图片路径'), _t('动态banner图片路径'));
    $form->addInput($dynamicpng);

    // $advertisepng = new Typecho_Widget_Helper_Form_Element_Text('advertisepng', NULL, NULL, _t('广告主banner图片路径'), _t('广告主banner图片路径'));
    // $form->addInput($advertisepng);

    // $devpng = new Typecho_Widget_Helper_Form_Element_Text('devpng', NULL, NULL, _t('开发者banner图片路径'), _t('开发者banner图片路径'));
    // $form->addInput($devpng);

    // $webpng = new Typecho_Widget_Helper_Form_Element_Text('webpng', NULL, NULL, _t('网站主banner图片路径'), _t('网站主banner图片路径'));
    // $form->addInput($webpng);

    // $aboutpng = new Typecho_Widget_Helper_Form_Element_Text('aboutpng', NULL, NULL, _t('关于banner图片路径'), _t('关于banner图片路径'));
    // $form->addInput($aboutpng);

    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, NULL, _t('标题栏和书签栏Icon'), _t('在这里填入一个图片URL地址, 作为标题栏和书签栏Icon, 默认不显示'));
    $form->addInput($siteIcon);

    $miibeian = new Typecho_Widget_Helper_Form_Element_Text('miibeian', NULL, _t('粤ICP备14072384号-2'), _t('备案号'), _t('在这里填入天朝备案号，不显示则留空'));
    $form->addInput($miibeian);

    // $banner = new Typecho_Widget_Helper_Form_Element_File('banner', )

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', array(
        'ShowSearch' => _t('显示搜索框'),
        'ShowRecentPosts' => _t('显示最新文章'),
        'ShowRecentComments' => _t('显示最近回复'),
        'ShowTags' => _t('显示标签'),
        'ShowArchive' => _t('显示归档'),
        'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowFriend', 'ShowOther'), _t('侧边栏显示'));
    $form->addInput($sidebarBlock->multiMode());

    $misc = new Typecho_Widget_Helper_Form_Element_Checkbox('misc', array(
        'ShowLogin' => _t('前台显示登录入口'),
        'ShowLoadTime' => _t('页脚显示加载耗时')
        ),
    array('ShowLogin'), _t('杂项'));
    $form->addInput($misc->multiMode());
}

function timer_start() {
    global $timestart;
    $mtime = explode( ' ', microtime() );
    $timestart = $mtime[1] + $mtime[0];
    return true;
}
timer_start();

function timer_stop( $display = 0, $precision = 3 ) {
    global $timestart, $timeend;
    $mtime = explode( ' ', microtime() );
    $timeend = $mtime[1] + $mtime[0];
    $timetotal = $timeend - $timestart;
    $r = number_format( $timetotal, $precision );
    if ( $display )
    echo $r;
    return $r;
}
