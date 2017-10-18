<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<!DOCTYPE html>
<html lang="zh-CN">
  
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon">
    <link rel="bookmark" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico" type="image/x-icon">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>我的Galgame资源发布站 - 忧郁的弟弟</title>
    <meta content="汉化galgame分享站" name="description">
    <meta content="mygalgame,galgame,忧郁的弟弟,我的galgame,汉化硬盘版,汉化,galgame下载,游戏下载,gal下载" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="dns-prefetch" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <link rel="stylesheet" id="abc_style-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-style-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" id="fontawesome-style-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="mystyle-css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/myblog.css" type="text/css" media="all">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/push.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/hm.js"></script>
    <script type="text/javascript">/*From Ajax Edit Comments*/
      if (typeof(ajaxurl) == 'undefined') {
        var ajaxurl = '<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/admin-ajax.php';
      }
      </script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.icheck.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/myblog.js"></script>
    <script type="text/javascript">/* <![CDATA[ */
      var favorites_data = {
        "ajaxurl": "https:\/\/www.mygalgame.com\/wp-admin\/admin-ajax.php",
        "nonce": "7bd0633d1a",
        "favorite": "\u6536\u85cf\u6587\u7ae0 <i class=\"sf-icon-star-empty\"><\/i>",
        "favorited": "\u53d6\u6d88\u6536\u85cf <i class=\"sf-icon-star-full\"><\/i>",
        "includecount": "1",
        "indicate_loading": "",
        "loading_text": "Loading",
        "loading_image": "<img src=\"https:\/\/www.mygalgame.com\/wp-content\/plugins\/favorites\/assets\/images\/loading.gif\" class=\"simplefavorites-loading\" aria-hidden=\"true\" \/>",
        "loading_image_active": "<img src=\"https:\/\/www.mygalgame.com\/wp-content\/plugins\/favorites\/assets\/images\/loading.gif\" class=\"simplefavorites-loading\" aria-hidden=\"true\" \/>",
        "loading_image_preload": "",
        "cache_enabled": "1",
        "button_options": {
          "button_type": "custom",
          "custom_colors": false,
          "box_shadow": false,
          "include_count": true,
          "default": {
            "background_default": false,
            "border_default": false,
            "text_default": false,
            "icon_default": false,
            "count_default": false
          },
          "active": {
            "background_active": false,
            "border_active": false,
            "text_active": false,
            "icon_active": false,
            "count_active": false
          }
        },
        "authentication_modal_content": "<p>Please login to add favorites.<\/p><p><a href=\"#\" data-favorites-modal-close>Dismiss this notice<\/a><\/p>",
        "authentication_redirect": "",
        "dev_mode": "",
        "logged_in": "1",
        "user_id": "59331",
        "authentication_redirect_url": "https:\/\/www.mygalgame.com\/wp-login.php"
      };
      /* ]]> */
      </script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/favorites.min.js"></script>
    <link rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <style type="text/css">.cb-slideshow li:nth-child(1) span { background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgw1fakyl4uo8tj31hc11o11f.jpg);}.cb-slideshow li:nth-child(2) span { background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgw1fajzlsm8b7j31g40z6the.jpg);}.cb-slideshow li:nth-child(3) span { background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgw1faoij4lh1gj31hc0u0dks.jpg);}.cb-slideshow li:nth-child(4) span { background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgw1fam24b9exaj31hc0uu433.jpg);}.cb-slideshow li:nth-child(5) span { background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgw1fakyqfv3z9j31hc0yyn8e.jpg);}.cb-slideshow li:nth-child(6) span { background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgw1faoisdt01kj31hc0u0439.jpg);}</style></head>
  
  <body class="home blog logged-in" ondragstart="return false" aos-easing="ease-out-back" aos-duration="1000" aos-delay="0">
    <section class="hidden-xs">
      <ul class="cb-slideshow">
        <li>
          <span>苟利</span></li>
        <li>
          <span>国家</span></li>
        <li>
          <span>生死以</span></li>
        <li>
          <span>岂能</span></li>
        <li>
          <span>祸福</span></li>
        <li>
          <span>趋避之</span></li>
      </ul>
    </section>
    <div class="GalMenu GalDropDown">
      <div class="circle" id="gal">
        <div class="ring">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" class="menuItem" style="left: 50%; top: 15%;">首页</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>page/2/" title="" class="menuItem" style="left: 80.3109%; top: 32.5%;">下一页</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>message.html" title="" class="menuItem" style="left: 80.3109%; top: 67.5%;">留言版</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>?orderby=views" title="" class="menuItem" style="left: 50%; top: 85%;">热门排行</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>gengxinrizhi.html" title="" class="menuItem" style="left: 19.6891%; top: 67.5%;">更新日志</a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" class="menuItem" style="left: 19.6891%; top: 32.5%;">上一页</a></div>
        <audio id="audio" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/mygalgame/ui/audio/oni.mp3"></audio>
      </div>
    </div>
    <div id="overlay" class="magnify">
      <div class="large"></div>
      <img class="small" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rpic.png" width="1920"></div>
    <header id="zan-header" class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="navbar-brand"></div>
          </a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="fa fa-reorder fa-lg"></span>
          </button>
        </div>
        <div class="navbar-collapse bs-navbar-collapse collapse">
          <ul id="menu-caidan" class="nav navbar-nav">
            <li id="menu-item-43" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-43">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <i class="fa fa-home"></i>首页</a>
            </li>
            <li id="menu-item-5731" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5731">
              <a>
                <i class="fa fa-star"></i>汉化硬盘版</a>
              <ul class="dropdown-menu">
                <li id="menu-item-76" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-76">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/19/">拼音首字母1~9</a></li>
                <li id="menu-item-5709" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5709">
                  <a>拼音首字母A~H</a>
                  <ul class="dropdown-menu">
                    <li id="menu-item-77" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-77">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/a/">A</a></li>
                    <li id="menu-item-78" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-78">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/b/">B</a></li>
                    <li id="menu-item-79" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-79">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/c/">C</a></li>
                    <li id="menu-item-80" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-80">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/d/">D</a></li>
                    <li id="menu-item-81" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-81">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/e/">E</a></li>
                    <li id="menu-item-82" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-82">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/f/">F</a></li>
                    <li id="menu-item-83" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-83">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/g/">G</a></li>
                    <li id="menu-item-84" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-84">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/ah/h/">H</a></li>
                  </ul>
                </li>
                <li id="menu-item-5710" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5710">
                  <a>拼音首字母I~P</a>
                  <ul class="dropdown-menu">
                    <li id="menu-item-85" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-85">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/i/">I</a></li>
                    <li id="menu-item-86" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-86">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/j/">J</a></li>
                    <li id="menu-item-87" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-87">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/k/">K</a></li>
                    <li id="menu-item-88" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-88">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/l/">L</a></li>
                    <li id="menu-item-89" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-89">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/m/">M</a></li>
                    <li id="menu-item-90" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-90">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/n/">N</a></li>
                    <li id="menu-item-91" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-91">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/o/">O</a></li>
                    <li id="menu-item-92" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-92">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dip/p/">P</a></li>
                  </ul>
                </li>
                <li id="menu-item-5711" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5711">
                  <a>拼音首字母Q~Z</a>
                  <ul class="dropdown-menu">
                    <li id="menu-item-93" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-93">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/q/">Q</a></li>
                    <li id="menu-item-94" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-94">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/r/">R</a></li>
                    <li id="menu-item-95" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-95">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/s/">S</a></li>
                    <li id="menu-item-96" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-96">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/t/">T</a></li>
                    <li id="menu-item-97" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-97">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/u/">U</a></li>
                    <li id="menu-item-98" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-98">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/v/">V</a></li>
                    <li id="menu-item-99" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-99">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/w/">W</a></li>
                    <li id="menu-item-100" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-100">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/x/">X</a></li>
                    <li id="menu-item-101" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-101">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/y/">Y</a></li>
                    <li id="menu-item-102" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-102">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e6%8b%bc%e9%9f%b3%e9%a6%96%e5%ad%97%e6%af%8dqz/z/">Z</a></li>
                  </ul>
                </li>
                <li id="menu-item-180" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-180">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>category/%e6%b1%89%e5%8c%96%e7%a1%ac%e7%9b%98%e7%89%88/%e5%85%b6%e5%ae%83/">其它</a></li>
              </ul>
            </li>
            <li id="menu-item-2359" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2359">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>guanyuruoganzhuyishixiangxinrenbidu.html">
                <i class="fa fa-book"></i>新人必读</a>
            </li>
            <li id="menu-item-5708" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5708">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>guanyujieyadexiangguanshuoming.html">
                <i class="fa fa-book"></i>解压必读</a>
            </li>
            <li id="menu-item-5745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5745">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>wenzhangshoucang.html">
                <i class="fa fa-heart"></i>收藏夹</a>
            </li>
            <li id="menu-item-316" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-316">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>message.html">
                <i class="fa fa-comments"></i>留言板</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <div id="zan-bodyer">
      <div class="container">
        <div class="row">
          <div id="mainstay" class="col-md-8">
            <!-- 公告 -->
            <div class="well mybody2">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <b>
                <font color="#FF0000">资源已停止更新，有问题看顶部必读 16.09.17
                  <br>冒个泡，要继续潜水去了（谁说我分了的拖出去砍了，晚晚在摸着女友大腿看着你们） 17.08.05</font></b>
              <br>
              <br>网站所有的背景图 http://pan.baidu.com/s/1boG27lP 提取码:pics</div>
            <!-- 公告结束 -->
            <!-- 内容主体 -->

            <div id="article-list">
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
              <div class="article well clearfix mybody3 aos-init" aos="flip-up">
                <div class="data-article hidden-xs">
                  <span class="month"><?php the_time('m'); ?>月</span>
                  <span class="day"><?php the_time('d'); ?></span></div>
                <!-- 大型设备文章属性 -->
                <section class="hidden-xs">
                  <div class="title-article">
                    <h1>
                      <a href="<?php the_permalink(); ?>" target="_blank">
                        <span class="animated_h1"><?php the_title();?></span>
                        <br>
                        <span class="label label-info" style="font-size:13px;"></span>
                      </a>
                    </h1>
                  </div>
                  <div class="tag-article">
                    <span class="label label-zan">
                      <i class="fa fa-tags"></i>
                      <?php wp_tag_cloud(the_ID()); ?></span>
                    <span class="label label-zan">
                      <i class="fa fa-eye"></i>44,161 ℃</span>
                    <span class="label label-zan">
                      <i class="fa fa-comments"></i>
                      <a href="<?php the_permalink(); ?>"><?php echo get_comments_number();?></a></span>
                  </div>
                  <div class="alert alert-zan mybody3">
                    <p style="text-align: center;">
                      <a href="<?php the_permalink(); ?>" target="_blank"></a>
                    </p>
                    <div class="ih-item square effect bottom_to_top">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>huaworkspring.html" target="_blank">
                        <div class="img">
                          <?php the_post_thumbnail( array(250,251) );?></div>
                        <div class="info">
                          <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)), 0, 666); ?></p>
                        </div>
                      </a>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>huaworkspring.html" target="_blank"></a>
                    <p>
                    </p>
                  </div>
                </section>
                <!-- 大型设备文章属性结束 -->
                <!-- 小型设备文章属性 -->
                <section class="visible-xs">
                  <div class="title-article">
                    <center>
                      <h4>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>huaworkspring.html">
                          <span class="animated_h1">花咲workspring！</span>
                          <br>
                          <span class="label label-info" style="font-size:11px;"></span>
                        </a>
                      </h4>
                    </center>
                  </div>
                  <p>
                  </p>
                  <center>
                    <i class="fa fa-calendar"></i>2017-08-19</center>
                  <p>
                  </p>
                  <p>
                  </p>
                  <center>
                    <i class="fa fa-tags"></i>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e7%ba%af%e7%88%b1/" rel="tag">纯爱</a>
                    <i class="fa fa-eye"></i>44,161 ℃</center>
                  <p>
                  </p>
                  <div class="alert alert-zan mybody3">
                    <p style="text-align: center;">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>huaworkspring.html" title="花咲workspring！">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/005ODKsIgy1fioal24tg3j30zm0krgqp.jpg" alt="花咲workspring！"></a>
                    </p>
                  </div>
                  <div class="alert alert-zan">游戏截图&nbsp;&nbsp;&nbsp;&nbsp;游戏简介春日烂漫。于相遇和恋爱中悄然躁动的这个世间。对于世间那玫瑰色氛围完全不在意呢。今日也一如往常地、在怠惰之路上一往无前的主人公・花咲游真。虽然今天也想继续吊儿郎当地度过……「欢迎来到幽灵部！从今...</div>
                  <a class="btn btn-danger pull-right read-more btn-block" href="<?php echo esc_url( home_url( '/' ) ); ?>huaworkspring.html" title="详细阅读 花咲workspring！">阅读全文
                    <span class="badge">80</span></a>
                </section>
                <!-- 小型设备文章属性结束 --></div>
<?php endwhile; endif?>           
            </div>
            <!-- 内容主体结束 -->
            <!-- 分页 -->
            <div id="zan-page" class="clearfix">
              <ul class="pagination pagination-zan pull-right">
<?php the_posts_pagination( array(
'mid_size' => 3,
'prev_text' =>'上一页',
'next_text' =>'下一页',
'before_page_number' => '<span class="meta-nav screen-reader-text">第 </span>',
'after_page_number' => '<span class="meta-nav screen-reader-text"> 页</span>',
) ); ?>
              </ul>
            </div>
            <!-- 分页结束 --></div>
          <aside class="col-md-4" id="sidebar">
            <aside id="zan_search-7">
              <div class="search aos-init aos-animate" aos="fade-up" aos-duration="2000">
                <form class="form-inline clearfix" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input class="form-control" type="text" name="s" id="s" placeholder="网站不能右键复制粘贴？">
                  <button type="submit" class="btn btn-danger btn-small" name="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </aside>
<?php if(is_user_logged_in()){ ?>
            <aside id="zan_login-5">
              <div class="panel panel-zan aos-init aos-animate" aos="flip-right" aos-duration="3000">
                <div class="panel-heading">
                  <i class="fa fa-quote-left"></i>欢迎！
                  <i class="fa fa-quote-right"></i></div>
                <div class="login-panel text-center">
                  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="54" height="54" alt="" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 photo avatar-default">
                  <a class="user-name" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-admin/">parse</a>
                  <a class="btn btn-inverse-primary" href="<?php echo home_url(); ?>/wp-login.php?action=logout&_wpnonce=eb7aca6993&redirect_to=<?php echo home_url(); ?>" title="退出登录">退出登录</a></div>
              </div>
            </aside>
<?php }else{ ?>
            <aside id="zan_login-5">
              <div class="panel panel-zan aos-init aos-animate" aos="flip-right" aos-duration="3000">
                <div class="panel-heading">请登录</div>
                <form class="login-form clearfix" action="<?php echo home_url(); ?>/wp-login.php?redirect_to=<?php echo home_url(); ?>" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input class="form-control" type="text" name="log" id="log" value="" size="20" data-form-un="1506980766306.6365"></div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-lock"></i>
                      </div>
                      <input class="form-control" type="password" name="pwd" id="pwd" size="20" data-form-pw="1506980766306.6365"></div>
                  </div>
                  <p>
                    <label for="rememberme">
                      <input name="rememberme" type="checkbox" id="rememberme" value="forever">记住我的登录信息</label>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-login.php?action=lostpassword" title=" Password Lost and Found" style="color: #3d4450;float:right;font-weight:bold;padding:2px;">忘记密码？</a></p>
                  <button class="btn btn-inverse-primary pull-left" type="submit" name="submit" data-form-sbm="1506980766306.6365">登录</button>
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-login.php?action=register" class="btn btn-inverse-primary pull-right">注册</a></form>
              </div>
            </aside>
<?php } ?>
            <aside id="zan_latest_comments-8">
              <div class="panel panel2 panel-zan hidden-xs aos-init aos-animate" aos="fade-up" aos-duration="2000">
                <div class="panel-heading">
                  <i class="fa fa-comments"></i>最新评论
                  <i class="fa fa-times-circle panel-remove"></i>
                  <i class="fa fa-chevron-circle-up panel-toggle"></i>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="40" height="40" alt="" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 photo avatar-default"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>message.html/comment-page-142/#comment-25848" class="hint--left hint--rounded" data-hint2="《留言版》 parse：">
                      <span class="comment-log">弟弟，我很喜欢你的网站的模版，很想要这个wordpress的模版，请问能收费转让给我这...</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="40" height="40" alt="" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 photo avatar-default"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>dark-blue.html/comment-page-1/#comment-25847" class="hint--left hint--rounded" data-hint2="《Dark Blue》 凡翼：">
                      <span class="comment-log">我还是第一次玩游戏玩到心跳不受控制，不是兴奋的而是恶心到了！现在想起来还会不...</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="40" height="40" alt="" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 photo avatar-default"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>guanyuruoganzhuyishixiangxinrenbidu.html/comment-page-11/#comment-25846" class="hint--left hint--rounded" data-hint2="《关于若干注意事项（新人必读）》 fengbohao456：">
                      <span class="comment-log">网站都要关了才来 49年入国军系列 :001:</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="40" height="40" alt="" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 photo avatar-default"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>guanyuruoganzhuyishixiangxinrenbidu.html/comment-page-11/#comment-25845" class="hint--left hint--rounded" data-hint2="《关于若干注意事项（新人必读）》 1606833007：">
                      <span class="comment-log">卧槽，要入坑了，要入坑了，有点激动 :022:</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2017100211145665.jpg" width="40" height="35" alt="雾雨魔梨沙DAZE" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 alignnone photo"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>eden.html/comment-page-2/#comment-25844" class="hint--left hint--rounded" data-hint2="《eden*》 雾雨魔梨沙DAZE：">
                      <span class="comment-log">晚安，sion :025:</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="40" height="40" alt="" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 photo avatar-default"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>dark-blue.html/comment-page-1/#comment-25843" class="hint--left hint--rounded" data-hint2="《Dark Blue》 fengbohao456：">
                      <span class="comment-log">......好可怕的样子</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2015121908514728.jpg" width="40" height="40" alt="" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 photo avatar-default"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>white-album2%e7%99%bd%e8%89%b2%e7%9b%b8%e7%b0%bf2-mini-after-story.html/comment-page-1/#comment-25842" class="hint--left hint--rounded" data-hint2="《WHITE ALBUM2(白色相簿2) Mini After Story》 fengbohao456：">
                      <span class="comment-log">baoqian jiedao了</span></a>
                  </li>
                  <li class="list-group-item">
                    <span class="author-avatar">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/2016071502221274.jpg" width="40" height="28" alt="破晓的胧月" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 alignnone photo"></span>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>white-album2%e7%99%bd%e8%89%b2%e7%9b%b8%e7%b0%bf2-mini-after-story.html/comment-page-1/#comment-25841" class="hint--left hint--rounded" data-hint2="《WHITE ALBUM2(白色相簿2) Mini After Story》 破晓的胧月：">
                      <span class="comment-log">这首《届かない恋》我送给上面的和下面的朋友 :001: :001: :001:</span></a>
                  </li>
                </ul>
              </div>
            </aside>
            <aside id="zan_rand_posts-12">
              <div class="panel panel2 panel-zan recent hidden-xs aos-init" aos="fade-up" aos-duration="2000">
                <div class="panel-heading">
                  <i class="fa fa-refresh"></i>随机文章
                  <i class="fa fa-times-circle panel-remove"></i>
                  <i class="fa fa-chevron-circle-up panel-toggle"></i>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e3%81%ae%e3%81%ae%e3%81%a8%e6%9a%ae%e3%82%89%e3%81%9d%ef%bc%81.html">ののと暮らそ！（和坑娘同居！）</a></span>
                    <span class="badge">11,793 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>rewrite.html">Rewrite</a></span>
                    <span class="badge">25,558 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e5%a6%bb%e8%89%b2%e5%b0%91%e5%a5%b3.html">妻色少女</a></span>
                    <span class="badge">90,235 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e6%81%8b%e9%aa%91%e5%a3%ab-purely%e2%98%86kiss.html">恋骑士 Purely☆Kiss</a></span>
                    <span class="badge">35,195 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>qingsebaobei2.html">青涩宝贝2</a></span>
                    <span class="badge">9,275 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>qiuzhihuiyi5zhongduandejiaopian.html">秋之回忆5中断的胶片</a></span>
                    <span class="badge">6,982 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>one-more-chance.html">One More Chance</a></span>
                    <span class="badge">12,212 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e8%bf%91%e6%9c%88%e5%b0%91%e5%a5%b3%e7%9a%84%e7%a4%bc%e4%bb%aa.html">近月少女的礼仪</a></span>
                    <span class="badge">70,564 ℃</span></li>
                </ul>
              </div>
            </aside>
            <aside id="zan_hotest_posts-4">
              <div class="panel panel2 panel-zan hot hidden-xs aos-init" aos="fade-up" aos-duration="2000">
                <div class="panel-heading">
                  <i class="fa fa-fire"></i>最热文章
                  <i class="fa fa-times-circle panel-remove"></i>
                  <i class="fa fa-chevron-circle-up panel-toggle"></i>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e9%98%b3%e5%85%89%e4%b8%8b%e7%9a%84%e7%9c%9f%e5%ae%9e.html" title="阳光下的真实">阳光下的真实</a></span>
                    <span class="badge">855,829 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>guanyujieyadexiangguanshuoming.html" title="关于解压的相关说明（解压必读）">关于解压的相关说明（解压必读）</a></span>
                    <span class="badge">741,109 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>gengxinrizhi.html" title="详细更新日志Ver.2">详细更新日志Ver.2</a></span>
                    <span class="badge">602,018 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>renqiguanliyuan12.html" title="人妻管理员（妻管员）1&amp;2">人妻管理员（妻管员）1&amp;2</a></span>
                    <span class="badge">479,720 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>guanyuruoganzhuyishixiangxinrenbidu.html" title="关于若干注意事项（新人必读）">关于若干注意事项（新人必读）</a></span>
                    <span class="badge">459,642 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>shaonvlilunjiqizhoubian-ecole-de-paris.html" title="少女理论及其周边 -Ecole de Paris-">少女理论及其周边 -Ecole de Paris-</a></span>
                    <span class="badge">285,411 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e8%87%aa%e9%97%ad%e5%a6%b9%e5%a6%b9%e7%9a%84%e9%87%8d%e7%94%9f%e8%b0%83%e6%95%99.html" title="自闭妹妹的重生调教">自闭妹妹的重生调教</a></span>
                    <span class="badge">270,640 ℃</span></li>
                  <li class="list-group-item">
                    <span class="post-title">
                      <a href="<?php echo esc_url( home_url( '/' ) ); ?>%e3%82%82%e3%82%82%e3%81%84%e3%82%8d%e6%80%a7%e7%99%96%e9%96%8b%e6%94%be%e5%ae%a3%e8%a8%80.html" title="ももいろ性癖開放宣言">ももいろ性癖開放宣言</a></span>
                    <span class="badge">232,307 ℃</span></li>
                </ul>
              </div>
            </aside>
            <aside id="zan_sets-10">
              <div class="panel panel-zan hidden-xs aos-init" aos="fade-up" aos-duration="2000">
                <ul class="nav nav-pills pills-zan">
                  <li>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#sidebar-tags" data-toggle="tab">热门标签</a></li>
                  <li class="active">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#sidebar-links" data-toggle="tab">友情链接</a></li>
                </ul>
                <div class="tab-content">
                  <div class="cloud-tags tab-pane nav bs-sidenav fade" id="sidebar-tags">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/alcot%e7%a4%be/" class="tag-cloud-link tag-link-91 tag-link-position-1" style="font-size: 9.1550802139037pt;" aria-label="ALcot社 (5个项目)">ALcot社</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/alcot%e8%9c%82%e5%b7%a2%e7%a4%be/" class="tag-cloud-link tag-link-96 tag-link-position-2" style="font-size: 8.6417112299465pt;" aria-label="ALcot蜂巢社 (4个项目)">ALcot蜂巢社</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/alicesoft/" class="tag-cloud-link tag-link-95 tag-link-position-3" style="font-size: 12.042780748663pt;" aria-label="AliceSoft (16个项目)">AliceSoft</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/elf/" class="tag-cloud-link tag-link-98 tag-link-position-4" style="font-size: 8.6417112299465pt;" aria-label="elf (4个项目)">elf</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/eushully/" class="tag-cloud-link tag-link-103 tag-link-position-5" style="font-size: 10.245989304813pt;" aria-label="Eushully(E社) (8个项目)">Eushully(E社)</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/loli/" class="tag-cloud-link tag-link-68 tag-link-position-6" style="font-size: 13.903743315508pt;" aria-label="LOLI (32个项目)">LOLI</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/minori/" class="tag-cloud-link tag-link-97 tag-link-position-7" style="font-size: 10.566844919786pt;" aria-label="minori (9个项目)">minori</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/nitro%e7%a4%be/" class="tag-cloud-link tag-link-93 tag-link-position-8" style="font-size: 12.363636363636pt;" aria-label="Nitro+社 (18个项目)">Nitro+社</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/ntr/" class="tag-cloud-link tag-link-61 tag-link-position-9" style="font-size: 10.823529411765pt;" aria-label="NTR (10个项目)">NTR</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e4%bc%aa%e5%a8%98/" class="tag-cloud-link tag-link-82 tag-link-position-10" style="font-size: 12.491978609626pt;" aria-label="伪娘 (19个项目)">伪娘</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e5%87%8c%e8%be%b1/" class="tag-cloud-link tag-link-87 tag-link-position-11" style="font-size: 9.1550802139037pt;" aria-label="凌辱 (5个项目)">凌辱</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e5%96%9c%e5%89%a7/" class="tag-cloud-link tag-link-73 tag-link-position-12" style="font-size: 12.491978609626pt;" aria-label="喜剧 (19个项目)">喜剧</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e5%a6%b9%e7%b3%bb/" class="tag-cloud-link tag-link-84 tag-link-position-13" style="font-size: 13.967914438503pt;" aria-label="妹系 (33个项目)">妹系</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e5%a7%90%e7%b3%bb/" class="tag-cloud-link tag-link-85 tag-link-position-14" style="font-size: 10.245989304813pt;" aria-label="姐系 (8个项目)">姐系</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e6%82%ac%e7%96%91/" class="tag-cloud-link tag-link-72 tag-link-position-15" style="font-size: 12.491978609626pt;" aria-label="悬疑 (19个项目)">悬疑</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e6%8b%94%e4%bd%9c/" class="tag-cloud-link tag-link-90 tag-link-position-16" style="font-size: 16.342245989305pt;" aria-label="拔作 (78个项目)">拔作</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e6%97%a5%e5%b8%b8/" class="tag-cloud-link tag-link-92 tag-link-position-17" style="font-size: 8pt;" aria-label="日常 (3个项目)">日常</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e6%9f%9a%e5%ad%90%e7%a4%be/" class="tag-cloud-link tag-link-104 tag-link-position-18" style="font-size: 9.9251336898396pt;" aria-label="柚子社 (7个项目)">柚子社</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e7%80%ac%e6%88%b8%e5%8f%a3%e5%bb%89%e4%b9%9f/" class="tag-cloud-link tag-link-100 tag-link-position-19" style="font-size: 8.6417112299465pt;" aria-label="瀬戸口廉也 (4个项目)">瀬戸口廉也</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e7%89%87%e5%b2%a1%e3%81%a8%e3%82%82/" class="tag-cloud-link tag-link-99 tag-link-position-20" style="font-size: 10.245989304813pt;" aria-label="片岡とも (8个项目)">片岡とも</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e7%8c%8e%e5%a5%87/" class="tag-cloud-link tag-link-60 tag-link-position-21" style="font-size: 11.272727272727pt;" aria-label="猎奇 (12个项目)">猎奇</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e7%99%be%e5%90%88/" class="tag-cloud-link tag-link-74 tag-link-position-22" style="font-size: 11.080213903743pt;" aria-label="百合 (11个项目)">百合</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e7%ba%af%e7%88%b1/" class="tag-cloud-link tag-link-55 tag-link-position-23" style="font-size: 20pt;" aria-label="纯爱 (292个项目)">纯爱</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e8%87%b4%e9%83%81/" class="tag-cloud-link tag-link-89 tag-link-position-24" style="font-size: 9.1550802139037pt;" aria-label="致郁 (5个项目)">致郁</a>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>tag/%e8%bd%af%e6%88%bf%e5%ad%90/" class="tag-cloud-link tag-link-102 tag-link-position-25" style="font-size: 10.566844919786pt;" aria-label="软房子 (9个项目)">软房子</a></div>
                  <div class="tab-pane active nav bs-sidenav fade in" id="sidebar-links">
                    <li>
                      <a href="http://kdays.net/days/" title="Galgame综合向论坛" target="_blank">KDays Forum</a></li>
                    <li>
                      <a href="http://www.gal123.com/" title="绅士导航♂" target="_blank">绅士导航♂</a></li>
                    <li>
                      <a href="http://www.moe123.com/" title="萌导航" target="_blank">萌导航</a></li>
                  </div>
                </div>
              </div>
            </aside>
          </aside>
        </div>
      </div>
    </div>

    <footer id="zan-footer">
      <div class="container">© 2014-2017 忧郁的弟弟 .Powered by WordPress. Theme By 忧郁的弟弟 |
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap.html" target="_blank">站点地图</a>
         <script>var _hmt = _hmt || []; (function() {
             var hm = document.createElement("script");
             hm.src = "https://hm.baidu.com/hm.js?adcc4ec4333e6dc2eb154cc6d7e91846";
             var s = document.getElementsByTagName("script")[0];
             s.parentNode.insertBefore(hm, s)
           })();</script>
         <script>(function() {
             var bp = document.createElement('script');
             var curProtocol = window.location.protocol.split(':')[0];
             if (curProtocol === 'https') {
               bp.src = 'https://zz.bdstatic.com/linksubmit/push.js'
             } else {
               bp.src = 'http://push.zhanzhang.baidu.com/push.js'
             }
             var s = document.getElementsByTagName("script")[0];
             s.parentNode.insertBefore(bp, s)
           })();</script>
      </div>
    </footer>
    <div id="zan-gotop">
      <i class="fa fa-angle-up"></i>
    </div>
    <div class="advanced-browser-check" style="display:none;" data-url="{&quot;abc_url&quot;:&quot;https:\/\/www.mygalgame.com\/wp-admin\/admin-ajax.php&quot;}"></div>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/myblog_bd.js"></script>
    <canvas width="1920" height="969" style="position: fixed; top: 0px; left: 0px; pointer-events: none; z-index: 888;"></canvas>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/myblog_min.js"></script>
    // <script type="text/javascript">var smiley = jQuery("#smilelink");
    //   clone = smiley.clone();
    //   comment = jQuery("#comment");
    //   smiley.remove();
    //   comment.before(smiley);
    //   function grin(a) {
    //     var b;
    //     a = ' ' + a + ' ';
    //     if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
    //       b = document.getElementById('comment')
    //     } else {
    //       return false
    //     }
    //     if (document.selection) {
    //       b.focus();
    //       sel = document.selection.createRange();
    //       sel.text = a;
    //       b.focus()
    //     } else if (b.selectionStart || b.selectionStart == '0') {
    //       var c = b.selectionStart;
    //       var d = b.selectionEnd;
    //       var e = d;
    //       b.value = b.value.substring(0, c) + a + b.value.substring(d, b.value.length);
    //       e += a.length;
    //       b.focus();
    //       b.selectionStart = e;
    //       b.selectionEnd = e
    //     } else {
    //       b.value += a;
    //       b.focus()
    //     }
    //   }</script>
    // <script type="text/javascript">if (window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x64\x6f\x6d\x61\x69\x6e"] != "\x6d\x79\x67\x61\x6c\x67\x61\x6d\x65\x2e\x63\x6f\x6d" && window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x64\x6f\x6d\x61\x69\x6e"] != "\x77\x77\x77\x2e\x6d\x79\x67\x61\x6c\x67\x61\x6d\x65\x2e\x63\x6f\x6d") {
    //     window["\x6c\x6f\x63\x61\x74\x69\x6f\x6e"]["\x68\x72\x65\x66"] = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x6d\x79\x67\x61\x6c\x67\x61\x6d\x65\x2e\x63\x6f\x6d\x2f\x3f\x67\x6f\x66\x64\x3d" + window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x64\x6f\x6d\x61\x69\x6e"];
    //   }</script>
    <!--压缩前: 74856 bytes; 压缩后: 67799 bytes; 已压缩：9.43% by 忧郁的弟弟--></body>

</html>