<?php
 /**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 16.12.2015
 * Time: 11:54
 */

$content='};</script><!-- This site is optimized with the Sterc seoPro plugin 1.0.3 - http://www.sterc.nl/modx/seopro --><link rel="stylesheet" href="/assets/components/msearch2/css/web/default.css" type="text/css" /><script type="text/javascript">if (typeof mse2Config == "undefined") {mse2Config = {"cssUrl":"\/assets\/components\/msearch2\/css\/web\/","jsUrl":"\/assets\/components\/msearch2\/js\/web\/","actionUrl":"\/assets\/components\/msearch2\/action.php"};} if (typeof mse2FormConfig == "undefined") {mse2FormConfig = {};} mse2FormConfig["b2b5547e837b0831793914cacbcbe8c224c9cded"] = {"autocomplete":"results","queryVar":"query","minQuery":3,"pageId":151};</script></head> <body class="full-intro background-dark background--dark template-blog"><!-- Preloader --><section id="preloader"> <div class="loader" id="loader"><div class="loader-img"></div> </div></section><!-- End Preloader --><!-- Sidemenu --><section class="side-menu cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right"> <a class="menu-close toggle-menu menu-right push-body"><i class="ion ion-android-close"></i></a> <ul class=""><li class="first"><a href="/services/" >Услуги</a></li><li><a href="/portfolio/" >Портфолио</a></li><li><a href="/lab/" >Лаборатория Web-мастера</a></li><li><a href="/modx-club" >Клуб MODX</a></li><li><a href="/blog/" >Блог</a></li><li class="last"><a href="/bookmarks" >Закладки</a></li></ul></section><!--End Sidemenu --><!-- Search menu Top --><section class=" top-search-bar cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top"> <div class="container"> <div class="search-wraper"> <form data-key="b2b5547e837b0831793914cacbcbe8c224c9cded" action="/search" method="get" class="msearch2" id="mse2_form"> <input type="text" class="input-sm form-full" placeholder="Поиск по сайту..." id="fast-search-input" name="query" value="" /> <a class="search-bar-icon"><i class="fa fa-search"></i></a> <a class="bar-close toggle-menu menu-top push-body"><i class="ion ion-android-close"></i></a></form></div> </div></section><!--End Search menu Top --> <!-- Site Wraper --><div class="wrapper"> <!-- HEADER --><header class="header"> <div class="container"><!-- logo --><div class=""> <a href="/" title="На главную | Web-разработчик Илья Ершов"><div class="logo logo-small mt"></div> </a></div><!--End logo--><!-- Rightside Menu (Search, Cart, Bart icon) --><div class="side-menu-btn"> <ul><!-- Search Icon --><li class="">';

print $content."\n\n\n";

$content=preg_replace('/\<!--.*--\>/U','',$content);

print $content;
