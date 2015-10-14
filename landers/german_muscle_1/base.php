
<!DOCTYPE html>
<html class="ui-mobile" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <title>Men's Life &amp; Health - Das #1 Online Magazin für Männerthemen, Gesundheit und Training</title>
        <link href="<?= $assets ?>/index_files/css.css" rel="stylesheet" type="text/css">
        <!-- disable iPhone inital scale -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <!-- main css -->
        <link href="<?= $assets ?>/index_files/style2.css" rel="stylesheet" type="text/css">
        <!-- media queries css -->
        <link href="<?= $assets ?>/index_files/media-queries3.css" rel="stylesheet" type="text/css">
        <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
        <!-- css3-mediaqueries.js for IE less than 9 -->
        <!--[if lt IE 9]>
<script src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

        <!-- jq mobile css -->
        <link rel="stylesheet" href="<?= $assets ?>/index_files/jquery.css">
        <link rel="stylesheet" href="<?= $assets ?>/index_files/jqm-demos.css">
        <link rel="stylesheet" href="<?= $assets ?>/index_files/font-awesome2.css">
        <!-- Google Fonts css -->
        <link href="<?= $assets ?>/index_files/css_002.css" rel="stylesheet" type="text/css">
        <!-- Jquery Mobile Menu -->
        <script src="<?= $assets ?>/index_files/jquery3.js"></script>
        <script src="<?= $assets ?>/index_files/index3.htm"></script>
        <script src="<?= $assets ?>/index_files/jquery_002.js"></script>
        <!-- SlidesJS Required: Link to jQuery -->
        <script src="<?= $assets ?>/index_files/jquery-1.js"></script>
        <!-- End SlidesJS Required -->
        <!-- SlidesJS Required: Link to jquery.slides.js -->
        <script src="<?= $assets ?>/index_files/jquery.js"></script>
        <!-- End SlidesJS Required -->
        <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
        <script>
            $.noConflict();
            jQuery(function() {
                jQuery('#slides').slidesjs({
                    width: 582,
                    height: 400,
                    navigation: true,
                    hoverPause: true,
                    play: {
                        active: true,
                        auto: true,
                        interval: 6900,
                    }
                });
            });
        </script>
        <!-- End SlidesJS Required -->
        <style>
            body {
            }
            #slides {
                display: none
            }
            #slides .slidesjs-navigation {
                margin-top:3px;
            }
            #slides .slidesjs-previous {
                margin-right: 5px;
                float: left;
                position:absolute;
                top:50%;
                left:0;
                z-index:999;
            }
            #slides .slidesjs-next {
                margin-right: 5px;
                float: left;
                position:absolute;
                top:50%;
                right:0;
                z-index:999;
            }
            .slidesjs-pagination {
                margin: 6px 0 0;
                float: right;
                list-style: none;
                position:absolute;
                top:88%;
                left:45%;
                z-index:998;
            }
            .slidesjs-pagination li {
                float: left;
                margin: 0 1px;
            }
            .slidesjs-pagination li a {
                display: block;
                width: 13px;
                height: 0;
                padding-top: 13px;
                background-image: url("files/pagination.png");
                background-position: 0 0;
                float: left;
                overflow: hidden;
            }
            .slidesjs-pagination li a.active, .slidesjs-pagination li a:hover.active {
                background-position: 0 -13px
            }
            .slidesjs-pagination li a:hover {
                background-position: 0 -26px
            }
            #slides a:link, #slides a:visited {
                color: #333
            }
            #slides a:hover, #slides a:active {
                color: #9e2020
            }
            .navbar {
                overflow: hidden
            }
            .slides-stop {
                display:none !important;
            }
            .slides-play {
                display:none;
            }
        </style>
        <!-- End SlidesJS Optional-->
        <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
        <style>
            #slides {
                display: none;
                position:relative;
            }
            .container {
                margin: 0 auto;
                margin-top:58px;
            }
            /* For tablets & smart phones */
            .container {
                width: 582px
            }
            @media (max-width: 767px) {
                .container {
                    width: auto;
                    margin-top:20px;
                }
            }
            @media (max-width: 690px) {
                .container {
                    margin-top:20px;
                    width: auto;
                }
                .slidesjs-pagination {
                    margin: 6px 0 0;
                    float: right;
                    list-style: none;
                    position:absolute;
                    top:83%;
                    left:69%;
                    z-index:998;
                }
            }
            /* For smartphones */
            @media (max-width: 480px) {
                .container {
                    width: auto;
                    margin-top:20px;
                }
                .slidesjs-pagination {
                    margin: 6px 0 0;
                    float: right;
                    list-style: none;
                    position:absolute;
                    top:80%;
                    left:67%;
                    z-index:998;
                }
            }

            /* For smaller displays like laptops */
            @media (min-width: 768px) and (max-width: 979px) {
                .container {
                    width: auto;
                    margin-top:30px;
                }
            }
            For larger displays @media (min-width: 980px) {
                .container {
                    width: 582px;
                    margin-top:32px;
                }
            }
        </style>
        <style>
            /* - - > Controls the PANEL MENU css <- - */
            /* Adjust the width of the left reveal menu
            Copy all CSS from jquery.mobile.panel.css and delete the properties other than width, left, right and transform.
            Then delete the selectors/rules for display modes (reveal/push/overlay) and the position (left/right) that you don't use.
            If you don't use fixed toolbars on your page you can delete those selectors as well.
            Narrow the scope of the selectors to prevent other panels being affected by the overrides. */
            #demo-page #left-panel.ui-panel {
                width: 15em;
            }
            #demo-page #left-panel.ui-panel-closed {
                width: 0;
            }
            #demo-page .ui-panel-position-left.ui-panel-display-reveal {
                left: 0;
            }
            #demo-page .ui-panel-content-wrap-position-left.ui-panel-content-wrap-open, .ui-panel-dismiss-position-left.ui-panel-dismiss-open {
                left: 15em;
                right: -15em;
            }
            #demo-page .ui-panel-animate.ui-panel-content-wrap-position-left.ui-panel-content-wrap-open.ui-panel-content-wrap-display-reveal {
                left: 0;
                right: 0;
                -webkit-transform: translate3d(15em, 0, 0);
                -moz-transform: translate3d(15em, 0, 0);
                transform: translate3d(15em, 0, 0);
            }
            /* Combined listview collapsible menu. */
            /* Unset negative margin bottom on the listviews. */
            #left-panel .ui-panel-inner > .ui-listview {
                margin-bottom: 0;
            }
            /* Unset top and bottom margin on collapsible set. */
            #left-panel .ui-collapsible-set {
                margin: 0;
            }
            /* The first collapsible contains the collapsible set. Make it fit exactly in the collapsible content. */
            #left-panel .ui-panel-inner > .ui-collapsible > .ui-collapsible-content {
                padding-top: 0;
                padding-bottom: 0;
                border-bottom: none;
            }
            /* Remove border top if a collapsible comes after a listview. */
            #left-panel .ui-panel-inner > .ui-collapsible > .ui-collapsible-heading .ui-btn, #left-panel .ui-collapsible.ui-first-child .ui-collapsible-heading .ui-btn {
                border-top: none;
            }
            /* Give the first collapsible heading the same padding, i.e. same height, as the list items. */
            #left-panel .ui-collapsible-heading .ui-btn-inner {
                padding: .7em 40px .7em 15px;
            }
            /* Give the other collapsible headings the same padding and font-size as the list divider. */
            #left-panel .ui-collapsible-set .ui-collapsible-heading .ui-btn-inner {
                padding: .5em 40px .5em 15px;
                font-size: 14px;
            }
            /* Styling of the close button in both panels. */
            #demo-page .ui-panel-inner > .ui-listview .ui-first-child {
                background: #eee;
            }
            /* Reveal menu shadow on top of the list items */
            #demo-page .ui-panel-display-reveal {
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
            }
            #demo-page .ui-panel-content-wrap-position-left {
                -webkit-box-shadow: -5px 0px 5px rgba(0, 0, 0, .15);
                -moz-box-shadow: -5px 0px 5px rgba(0, 0, 0, .15);
                box-shadow: -5px 0px 5px rgba(0, 0, 0, .15);
            }
            /* Use the ui-body class of your page theme (ui-body-d in this demo) to set a background image.
            This class will be added to the content wrapper, while the page itself gets the same background
            as the panel before opening the panel. */
            #demo-page .ui-body-d {
                background-image: url();
                background-repeat: repeat-x;
                background-position: left bottom;
            }
            /*Fix for issue with buttons and form elements
            if CSS columns are used on a page with a panel.*/
            .article a.ui-btn {
                -webkit-transform: translate3d(0, 0, 0);
            }
        </style>



        <style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow-x:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
            .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
            .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>
    <body class="ui-mobile-viewport ui-overlay-c">
        <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="Facebook Cross Domain Communication Frame" aria-hidden="true" tabindex="-1" id="fb_xdm_frame_http" src="<?= $assets ?>/index_files/6brUqVNoWO3.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="Facebook Cross Domain Communication Frame" aria-hidden="true" tabindex="-1" id="fb_xdm_frame_https" src="<?= $assets ?>/index_files/6brUqVNoWO3(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
        <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.4";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <!-- header  -  Here goes the Mobile Menu button-->
        <div style="min-height: 967px;" tabindex="0" data-url="demo-intro" data-role="page" class="jqm-demos ui-page ui-body-c ui-page-panel ui-page-active" id="demo-intro">
            <div class="ui-panel-content-wrap ui-body-c ui-panel-animate ui-panel-content-wrap-closed"><div role="banner" data-role="header" class="jqm-header ui-header ui-bar-a"> <a title="Navigation" data-theme="a" data-wrapperels="span" data-iconshadow="true" data-shadow="true" data-corners="true" href="<?= $step1_link ?>" target="_blank" class="jqm-navmenu-link ui-btn-left ui-btn ui-btn-up-a ui-shadow ui-btn-corner-all ui-btn-icon-notext" data-icon="bars" data-iconpos="notext"><span class="ui-btn-inner"><span class="ui-btn-text">Navigation</span><span class="ui-icon ui-icon-bars ui-icon-shadow">&nbsp;</span></span></a> </div><div role="main" data-role="content" class="jqm-content ui-content">
                <div id="topQuote" style="display: none;">
                    <div id="pagewrap">Das #1 Online Magazin für Männerthemen, Gesundheit und Training</div>
                </div>
                <header id="header">
                    <div class="pagewrap">
                        <div class="spaceHeader"></div>
                        <a class="ui-link" href="<?= $step1_link ?>">
                            <h1 id="site-logo"></h1>
                        </a>
                        <nav>
                            <ul id="main-nav" class="clearfix">
                                <div class="pagewrap">
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Fitness </a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Sex &amp; Liebe</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Ernährung</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Body Shaping</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Abnehmen</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Gesundheit</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Yoga</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Style</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Alltag</a></li>
                                    <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Fitness Guru</a></li>
                                </div>
                            </ul>
                            <!-- /#main-nav -->
                        </nav>
                        <div id="socialMain">
                            <div id="log"><span class="blue">anmelden </span>| kein Mitglied? <span class="blue">jetzt registrieren </span></div>
                            <section id="suscribe"> <span class="suscribe_left"></span> <span class="redbg"><span class="heavy">Nur 1,99€ / Ausgabe</span>  </span> <span class="suscribe_right"></span>
                                <div class="clear"></div>
                            </section>
                            <section id="socialIcons">
                                <div id="fb-root"></div>
                                <div class="fb"></div>
                                <div class="pi"></div>
                                <div class="tw"></div>
                                <div class="go"></div>
                                <div class="clear"></div>
                                <p>
                                </p><div class="fb-like fb_iframe_widget" data-href="#" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=63&amp;href=http%3A%2F%2Fwww.menshealth24.net%2F&amp;layout=button_count&amp;locale=de_DE&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 158px; height: 20px;"><iframe name="f2c66aa258" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="<?= $assets ?>/index_files/like.html" style="border: none; visibility: visible; width: 158px; height: 20px;" class=""></iframe></span></div>
                            </section>
                            <div class="clear"></div>
                            <!--<div id="second-menu">Free MH Newsletter   |   Mh Store  |   RSS  |   Sitemap   |  Help   |  Privacy</div>-->
                        </div>
                        <div class="clear"></div>
                        <h2 class="logo_tag">anzeige</h2>
                        <div class="clear"></div>
                    </div>
                </header>
                <!-- /#header -->
                <section id="shadowWrap">
                    <!-- /#slider -->
                    <!-- /#content -->
                    <div id="pagewrap">
                        <div id="content">
                            <div id="breadcrumbs"> <a href="<?= $step1_link ?>" target="_blank" class="bread1 ui-link" id="">HOME &gt;</a><a href="<?= $step1_link ?>" target="_blank" class="bread1 ui-link" id=""> Gesundheit &gt;</a><a href="<?= $step1_link ?>" target="_blank" class="bread2 ui-link"> Sport &amp; Ernährung</a> </div>
                            <section class="SectionTitle"></section>
                            <article class="post clearfix">
                                <header class="">
                                    <p class="post-meta">
                                        <time class="post-date" datetime="2013-08-19" pubdate="">
                                            <script>
                                                var mydate=new Date()
                                                var year=mydate.getYear()
                                                if (year < 1000)
                                                    year+=1900
                                                    var day=mydate.getDay()
                                                    var month=mydate.getMonth()
                                                    var daym=mydate.getDate()
                                                    if (daym<10)
                                                        daym="0"+daym
                                                        var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                        var montharray=new
                                                        Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                        document.write(""+daym+" "+montharray[month]+", "+year+"")

                                            </script>
                                        </time>
                                        <em>in</em> <a href="<?= $step1_link ?>" target="_blank" style="text-transform:uppercase; text-decoration:none;" class="category ui-link">Sport</a></p>

                                    <div>
                                    </div>
                                    <div class="clear"></div>
                                    <h1 class="section-title"><span class="higlight"><u>EXKLUSIV BERICHT:</u></span>
                                        <br>
                                        Diese zwei pflanzliche Produkte sollen EXPLOSIVEN Muskelaufbau bewirken - Stars nutzen es bereits!</h1>
                                    <h3 class="section-sub">Dieser Bericht wurde von Men's Life &amp; Health erstellt, um die Wahrheit über eine sensationelle Methode zum Muskelaufbau aufzudecken &gt;&gt;</h3>
                                </header>
                                <figure class="section-image">
                                    <!-- Section Image **725px** x preferably 300px-->
                                    <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/index_files/img_seen.jpg" style="border:none;" height="64" width="676"></a> </figure>
                                <figure class="section-image2">
                                    <!-- Section Image **725px** x preferably 300px-->
                                    <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/index_files/img_seen480.jpg" style="border:none;" height="64" width="480"></a> </figure>
                                <div class="clear"></div>
                                <figure class="post-image" id="left"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/index_files/img_joe.jpg" height="429" width="276"></a>
                                    <figcaption class="joe">
                                        <span>
                                            <span class="offerSub">Unser Reporter Bryan Stevens</span> hat eine neue Methode für wirkungsvollen
                                            Muskelaufbau getestet, die in den USA schon lange für Furore sorgt.
                                        </span></figcaption>
                                </figure>
                                <p class="first-paragraf">Unser Reporter <b>Bryan Stevens</b> untersucht eine bisher nur dem Militär und Hollywood Stars bekannte Methode für wirkungsvollen
                                    Muskelaufbau, die in den USA und jetzt auch in Europa rasch an Popularität gewinnt. Lesen Sie hier von seinen sensationellen Ergebnissen für den Aufbau unglaublicher
                                    Muskelmasse in weniger als 1 Monat.
                                </p><div class="divider"></div>
                                <p></p>
                                <p><b>(ML&amp;H)</b> - In den vergangenen Monaten waren unsere Leser ganz verrückt wegen zwei Aufsehen erregender Internet-Produkte, die die Männer weltweit in weniger als 1 Monat beim
                                    Abnehmen und bei der Bauchmuskel-Definition unterstützen. Dieser faszinierende und ungewöhnliche 2 Phasen-Trick wurde schon in vielen bekannten TV-Sendungen gezeigt, die Sie wahrscheinlich
                                    auch schon gesehen haben. </p>

                                <p>Ursprünglich vom amerikanischen Militär für ihre Spezialeinheiten entwickelt, wurde die Kombination seither von Stars wie Dwayne "The Rock" Johnson und Gerald Butler verwendet, um in
                                    kürzester Zeit erhebliche Mengen Körperfett gegen eine beachtliche Menge an Muskelmasse einzutauschen - nur mit diesen 2 Diätkur-Produkten. Das erste ist ein Muskel-Aufbauer und der zweite
                                    ist ein Fatburner. Es ist die Killer-Kombi, um wahnsinnig drahtig und muskulös zu werden. Die zwei Nahrungsergänzungsmittel haben eine klinisch erwiesene entschlackende Wirkung und lassen
                                    Körperfett schmelzen, ohne Ihrem Immunsystem zu schaden. Aber was noch besser ist: diese Mittel bauen auf gesunde Weise natürlich aussehende Muskeln auf. Zu schön, um wahr zu sein?
                                    Dann lesen Sie weiter, und finden Sie heraus, warum wir diesen Spezialbericht geschrieben haben.</p>
                                <section class="widget clearfix" id="mobilePromo">
                                    <h4 class="widgettitle" style="letter-spacing:2px; margin-left:-18px;">Thema des Artikels</h4>
                                    <span class="easier">Es war nie leichter, seinen Traumkörper zu erreichen, dank dieser zwei Proukte:</span>
                                    <ul class="reviews">
                                        <li>
                                            <figure class="product-review" style="margin-top:-5px;"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $step1_image ?>"></a>
                                                <div class="">
                                                    <div class="clickOffer"> <span class="clickTxt mobileLink"><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><b><?= $step1_name ?>.</b></a></span></div>
                                                </div>
                                                <div class="sealStep" id="seal1"></div>
                                                <div class="clear"></div>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="product-review" style="margin-top:-5px;"> <a class="ui-link" href="<?= $step2_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $step2_image ?>"></a>
                                                <div class="">
                                                    <div class="clickOffer"> <span class="clickTxt mobileLink"><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><b><?= $step2_name ?>.</b></a></span></div>
                                                </div>
                                                <div class="sealStep" id="seal2"></div>
                                                <div class="clear"></div>
                                            </figure>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                    <div class="deadline">Einführungsangebot: Eine Flasche gratis erhältlich bis: <span class="red">
                                        <script>
                                            var mydate=new Date()
                                            var year=mydate.getYear()
                                            if (year < 1000)
                                                year+=1900
                                                var day=mydate.getDay()
                                                var month=mydate.getMonth()
                                                var daym=mydate.getDate()
                                                if (daym<10)
                                                    daym="0"+daym
                                                    var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                    var montharray=new
                                                    Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                    document.write(""+daym+" "+montharray[month]+", "+year+"")

                                        </script>
                                        </span>.</div>
                                </section>
                                <p>Wie wir alle wissen, scheint es oft eine unmögliche Herausforderung zu sein, Muskeln aufzubauen. Wir haben über die Jahre zahlreiche Muskelaufbaumethoden ausgewertet.
                                    Allzu häufig sind die Ergebnisse nur bescheiden bis schmerzlich enttäuschend. Der Grund dafür, warum die meisten Muskel-Diäten scheitern, ist aus unserer Sicht, dass sie
                                    unrealistische Einschränkungen Ihrer Lebensweise erfordern. Einige plädieren dafür, tonnenweise Proteine oder Kohlenhydrate zu essen. In jedem Fall wird von Ihnen erwartet,
                                    Ihre Essgewohnheiten und die Auswahl Ihrer Lebensmittel drastisch zu ändern. In diesem Spezialbericht nehmen wir einen brandaktuellen und vielversprechenden Muskelaufbau-Trend
                                    unter die Lupe, von dem wir glauben, dass er einen absoluten Durchbruch bedeutet, ohne dafür den Geldbeutel zu plündern.</p>

                                <section class="article-quote" id="left">"Das Geheimnis der Stars, durch das jeder einen muskulösen Körper bekommen kann"</section>

                                <p>Das Produkt, von dem wir sprechen, ist <span class="prolink"><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a></span>.
                                    Vielleicht haben Sie davon bereits in den Nachrichten gehört. Die chemische Struktur von <?= $step1_name ?> wurde in den frühen 2000er Jahren von US-amerikanischen Wissenschaftlern als
                                    Mittel zur Unterstützung der nationalen Spezialeinheiten und zur Steigerung ihrer Kraft und Ausdauer entwickelt. Seine Existenz wurde erst vor kurzem bekannt und seitdem explodieren die Verkaufszahlen.

                                    <br>
                                    <br>
                                </p>
                                <div class="container">
                                    <img src="<?= $assets ?>/index_files/img_hjackman.jpg" height="400" width="582"><div style="position: relative; left: 0px; width: 582px; height: 18px;"><a href="<?= $step1_link ?>" target="_blank" class="ui-link"> </a></div><a href="<?= $step1_link ?>" target="_blank" class="ui-link">
                                    </a></div><a href="<?= $step1_link ?>" target="_blank" class="ui-link">
                                </a><div class="yellowcaption"><a href="<?= $step1_link ?>" target="_blank" class="ui-link">Promis nutzen bereits Muskel Ergänzungsmittel wie <span class="prolink"></span></a><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a> und
                                <span class="prolink"><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a></span>, um überschüssiges Körperfett zu verlieren und Action Star-Muskeln zu bekommen.
                                <div class="yellowtab"></div>
                                </div>
                                <div class="column" id="right"> <b>Thomas Bredow aus Berlin berichtet, dass er eine Menge Fett verloren und 7,8 kg Muskeln in nur 5 Wochen aufgebaut hat, während er
                                    jeden Tag eine Kapsel <?= $step1_name ?> und 1 Kapsel <?= $step2_name ?> als kombinierte Muskelaufbaukur einnahm. </b><br>
                                    In seinem Blog schreibt er: <br>
                                    <br>
                                    <span class="testimonialblock">"Ich konnte nicht glauben, wie einfach es war. Ich habe meine Ernährung oder tägliche Routine nicht umgestellt, aber das Fett ist geschmolzen wie
                                        Butter in der Sonne &amp; ich bin echt kernig geworden. Jetzt habe ich Muskeln an Stellen, von denen ich vorher nicht mal wusste, dass sie existieren! Mein Favorit ist das neue Sixpack,
                                        das ich jetzt habe. Hätte nie gedacht, dass ich sowas jemals bekomme."</span> </div>

                                <p>Es ist eine vollständig organische Nahrungsergänzung, die von Prominenten &amp; Bodybuildern rund um die Welt als Geheimtipp verwendet wird. Diejenigen, die das Ergänzungsmittel
                                    <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a> benutzen, profitieren vor allem von dem hohen Gehalt an Antioxidantien, die den Muskeln helfen, sich rasch
                                    zu regenerieren und schneller zu wachsen als je zuvor. Kombiniert mit einem leistungsstarken Booster wie <a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a> schaffen
                                    Sie sich eine Muskelaufbau-Maschine. Falls Sie skeptisch sind, sind Sie damit nicht allein. Als wir zum ersten Mal von dieser Muskel-Kombi hörten, gingen sofort unsere Alarmglocken für
                                    Trend-Muskelpräparate an.

                                </p><figure class="post-image" id="left"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/index_files/img_espn.jpg" height="315" width="272"></a>
                                <figcaption class="espn">Muscle ZX 90 &amp; <?= $step2_name ?> wurden im ESPN-Magazin vorgestellt, wobei die Leistung olympischer Athleten und die Muskelzunahme beleuchtet wurde. </figcaption>
                                </figure>

                                <p>
                                    Doch als wir die unzähligen Erfolgs- geschichten von Menschen aus der ganzen Welt zu untersuchen begannen, beschlossen wir, dass dieser Muskelaufbau-Trend auf jeden Fall eine genauere
                                    Prüfung wert ist. Außerdem war es für uns von besonderem Interesse, da all diese Leute ihren jeweiligen Lebensstil nicht wesentlich verändert hatten.</p>
                                <p>
                                    Für den Test von Men's Life &amp; Health wurde ich zum Versuchskaninchen für diese Diät, da ich an einem Fitness-Wettkampf teilnehmen wollte. Vor dem Wettkampf wollte ich ein paar Kilo
                                    Muskeln zulegen. Um die <span class="prolink"><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a></span> - und <span class="prolink"><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a></span>
                                    -Diät auszuprobieren, habe ich zwei Produkte bestellt. Nach viel Recherche habe ich ein Fläschchen <?= $step1_name ?> bestellt und ein zusätzliches Fläschchen kostenlos dazu bekommen. Obwohl es viele ähnliche Präparate gibt habe ich mich dafür entschieden, da es sich dabei um eines der etabliertesten Produkte am
                                    Markt handelt. Zudem ist die Konzentration der für den Muskelaufbau hilfreichen Substanzen in minderwertigen Produkten oft sehr gering, in <?= $step1_name ?> entspricht die Konzentration jedoch den
                                    vorgegebenen Standardwerten.</p>

                                <p>
                                    Die Probepackung <?= $step1_name ?> wurde innerhalb von wenigen Tagen und überraschend kostengünstig geliefert. <?= $step1_name ?> ist eines der hochkonzentriertesten und gleichzeitig reinsten
                                    Argininprodukte auf dem Markt. In der Redaktion waren wir alle der Meinung, dass es für meinen Test die besten Resultate bringen würde.</p>

                                <div class="articleGraph">Es wurde klinisch bestätigt, dass <span class="graphTitle"><u><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a></u> folgende Eigenschaften hat:</span>
                                    (Das ist der erste Schritt im Programm. Dieses Produkt ist ein Hemodilator um natürlich aussehende Muskeln aufzubauen. Es ist legal und sicher. Es gibt keine Nebenwirkungen wie es bei
                                    Steroiden oft der Fall ist.)

                                    <ul class="prove">
                                        <li>Es verbessert die Leistungsfähigkeit und Power des Körpers </li>
                                        <li>Es pumpt sehr viel mehr Blut in die Muskeln indem es Venen und Kapillargefäße erweitert </li>
                                        <li>Es leitet Nährstoffe schneller zu den Muskeln weiter. Das Wachstum fester, natürlicher Muskeln wird dadurch beschleunigt </li>
                                        <li>Es hilft, die Muskeln zu formen und zu vergrößern </li>
                                        <li>Hat sogar positive sexuelle Nebenwirkungen, was eine klasse Begleiterscheinung ist!
                                            (Ich mach keine Scherze, sogar mein Lieblingsmuskel scheint größer zu sein. Wahrscheinlich wegen der erweiterten Blutgefäße) </li>
                                    </ul>
                                </div>
                                <p><br>
                                    Obwohl wir ziemlich skeptisch waren, wollten wir herausfinden, ob das Produkt halten kann was es verspricht. Die meisten der Erfolgsgeschichten berichten von einer Kombination von
                                    <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a> mit einem <a class="ui-link" href="<?= $step2_link ?>" target="_blank">Mittel zur Fettverbrennung</a> um den maximalen Muskelzuwachs zu erreichen. Die Idee hinter der Kombination
                                    der beiden Produkte ist es Gewichtsverlust und höhere Vitalität zu erreichen; das Mittel zur Fettverbrennung macht genau das. Es hilft überschüssiges Körperfett zu verlieren und
                                    Kalorien besser zu verbrennen. Nach längerer Suche haben wir uns hier für <a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a> entschieden.



                                </p><div class="articleGraph">Es wurde klinisch bewiesen, dass <span class="graphTitle"><u><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a></u> folgende Eigenschaften hat:</span>
                                (Das ist das Mittel zur Fettverbrennung. Wichtig ist, <?= $step1_name ?> am Morgen und <?= $step2_name ?> am Abend einzunehmen, dadurch stellen sich Ergebnisse noch schneller ein.)

                                <ul class="prove">
                                    <li>Es hilft mehr Kalorien zu verbrennen </li>
                                    <li>Es hilft Muskeln vor freien Radikalen zu schützen </li>
                                    <li>Mehr Antioxidantien als Granatäpfel und Heidelbeeren </li>
                                    <li>Es erhöht die Vitalität und bekämpft Müdigkeit </li>
                                    <li>Es hilft Kalorien auch beim Ausruhen zu verbrennen </li>
                                    <li>Es hilft schlanker auszusehen </li>
                                    <li>Steigert den Stoffwechsel </li>
                                    <li>Beseitigt aufgeblähtes "aufgedunsenes" Aussehen  </li>
                                    <li>Es hilft die Muskeln zu formen </li>
                                    <li>Es verbessert die sexuelle Leistungsfähigkeit </li>
                                </ul>
                                </div>
                                <p><br>
                                    Sowohl <span class="prolink"><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a></span> als auch
                                    <span class="prolink"><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a></span> wurde innerhalb von 4 Tagen nach Bestellung des Probepakets geliefert.<br>
                                </p>
                                <p>
                                </p><center>
                                <b>1. Nehmen Sie eine Kapsel  <?= $step1_name ?> pro Tag (morgens)<br>
                                    2. Nehmen Sie eine Kapsel <?= $step2_name ?> pro Tag (abends)<br>
                                    <br>
                                    <br>
                                </b>
                                </center>
                                <p></p>
                                <section id="results">
                                    <div class="resultsTitle">Meine Ergebnisse- 9,5 kg Muskeln in nur 1 Monat </div>
                                    <span class="resultsSub"><img src="<?= $assets ?>/index_files/bulletCheck.png" style="border:none !important;" height="15" width="18">Woche 1</span>
                                    <p> Nachdem ich beide Muskel-Diätprodukte eine Woche lang eingenommen hatte, war ich über die dramatischen Ergebnisse überrascht. Mein Energielevel war höher und ich war noch
                                        nicht mal hungrig. Ein Nebeneffekt des L-Arginin ist seine appetitzügelnde Wirkung. </p>

                                    <p>Das beste war, dass ich nichts an meinem täglichen Tagesablauf ändern musste. Tag 7 maß ich nach und traute meinen Augen kaum: Ich hatte bereits 2 kg mehr an Muskelmasse.
                                        Doch ich war noch nicht überzeugt da man am Beginn eines Programms immer viel Wasser verliert und Anfangs ist es relativ einfach, Muskeln aufzubauen. Ich wollte die weiteren Wochen
                                        abwarten, doch ich war positiv gestimmt und wog das erste Mal seit Jahren über 80 kg!</p>

                                    <span class="resultsSub"><img src="<?= $assets ?>/index_files/bulletCheck.png" style="border:none !important;" height="15" width="18">Woche 2</span>
                                    <p> Nach 2 Wochen in denen ich beide Produkte verwendete, verbesserte sich mein Energielevel weiter und ich schlief besser als zuvor. Weil sich mein Körper in der Nacht voll entspannen
                                        konnte, wachte ich nicht mehr mitten in der Nacht auf oder brauchte ewig um einzuschlafen (ich führe das auf die erfolgreiche Entschlackung meines Körpers zurück). Außerdem kamen 2,5 kg
                                        Muskelmasse hinzu, also gesamt schon 4,5 kg in 2 Wochen. Weiters begann sich mein Bauch mehr und mehr in einen Six-Pack zu verwandeln, meine Freundin konnte es nicht glauben. </p>

                                    <span class="resultsSub"><img src="<?= $assets ?>/index_files/bulletCheck.png" style="border:none !important;" height="15" width="18">Woche 3 </span>
                                    <p>Nach 3 Wochen waren alle meine Vorurteile und Zweifel wie weggeblasen. Ich habe 6,5 kg an Muskelmasse zugelegt und gleichzeitig 2,5 kg Fettgewebe abgebaut. Mein Schwimmreifen ist
                                        so gut wie weg. Und das beste, ich fühle mich immer noch vital und fit. Es ist bei anderen Programmen oft so, dass man sich um die dritte Woche herum schlapp und energielos fühlt. Bei
                                        dem <?= $step1_name ?> und <?= $step2_name ?> Programm jedoch bleibt mein Energielevel konstant hoch. Meinen Mittagsschlaf um 3 nachmittags benötige ich nicht mehr. Auch meine Verdauung funktioniert
                                        sehr viel besser, keine Spur mehr von unangenehmen und oft peinlichen Blähungen. Mein Körper ist richtiggehend gestählt, ich hätte mir nie träumen lassen jemals einen Six-Pack zu haben,
                                        diese beiden Produkte sind einfach der Wahnsinn.</p>

                                    <span class="resultsSub"><img src="<?= $assets ?>/index_files/bulletCheck.png" style="border:none !important;" height="15" width="18">Woche 4 </span>
                                    <p>Meine Resultate nach Woche 4 waren unglaublich. Ich konnte ganze 7,5 kg an Muskelmasse zulegen seit ich mit dem <?= $step1_name ?> und <?= $step2_name ?> Programm begonnen habe. Jeder in der
                                        Men's Life &amp; Health Redaktion ärgert sich darüber, sich nicht selbst als Versuchskaninchen für den Test zur Verfügung gestellt zu haben. Dank <?= $step1_name ?> und <?= $step2_name ?> verlor ich gleichzeitig
                                        4 kg Körperfett und war bereit für meinen Wettkampf. Die Ergebnisse sind gleichbleibend gut. Jedoch muss ich sagen, dass es bei mir jetzt nicht mehr viel Körperfett zu verlieren gibt
                                        und meine Muskeln haben auch eine gute Größe erreicht. Ich werde jedoch weiterhin <?= $step1_name ?> einnehmen, da es wirklich gut für den Muskelaufbau ist und es mir hilft, mein jetziges
                                        Muskelvolumen zu halten. </p>
                                </section>
                                <figure class="final-img" id="none"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/index_files/img_result.jpg" style="border:none !important;" height="559" width="700"></a>
                                    <div class="resultsfig">User Bilder </div>
                                    <figcaption class="redcaption">"Ich habe 9,2 kg Muskeln in 4 Wochen aufgebaut und <br>8,5 kg Fett verloren - ohne spezielle Diät, ohne <br>intensives Training."
                                        <div class="yellowtab"></div>
                                    </figcaption>
                                </figure>
                                <p><br>
                                    <br>
                                    <b>Abschließend</b> bleibt noch zu sagen, falls Sie immer noch an diesem Programm zweifeln, müssen Sie es einfach selbst ausprobieren. Aus unserem eigenen Test wissen wir, dass es funktioniert. Auch wir in der Redaktion von Men's Health hatten anfangs unsere Zweifel, doch wir wurden schnell eines Besseren belehrt. Nach unserem Selbstversuch freuen wir uns umso mehr mit denjenigen, die mit diesem Programm Erfolg haben. </p>
                                <p>Erreichen Sie Ihr Idealgewicht mit <span class="prolink"><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a></span> und <span class="prolink"><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a></span>.<br>
                                </p>
                                <!--<p class="signature">By<br>
<b>Bryan Stevens</b></p>-->
                                <div class="clear"></div>
                            </article>
                            <section id="offer">
                                <div class="warning"><span class="higlight"><u>WICHTIG:</u></span> *Verwenden Sie beide Produkte, wenn Sie Ergebnisse wie die oben genannten erzielen möchten! Nur mit einem Produkt allein
                                    kann nicht das gleiche Resultat erreicht werden...</div>
                                <div class="titleBanner"><span class="yellow">EXKLUSIVES</span> Angebot für unsere Leser</div>
                                <span class="limited">Angebot gültig, solange der Vorrat reicht <span class="red">(Vorrat an Gratis-Proben begrenzt)</span></span> <span class="deadline"><span class="red">
                                <script>
                                    var mydate=new Date()
                                    var year=mydate.getYear()
                                    if (year < 1000)
                                        year+=1900
                                        var day=mydate.getDay()
                                        var month=mydate.getMonth()
                                        var daym=mydate.getDate()
                                        if (daym<10)
                                            daym="0"+daym
                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                            var montharray=new
                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                </script>
                                </span>&nbsp;Noch&nbsp;sind&nbsp;Gratisproben&nbsp;erhältlich.&nbsp;Bestellen&nbsp;Sie&nbsp;jetzt!</span>
                                <div class="product1">
                                    <div class="step2">Schritt 1:
                                        <figure class="steps"> <img src="<?= $assets ?>/index_files/step_arrow.png" style="border:none !important;" height="79" width="60"> </figure>
                                    </div>
                                    <div class="offerBox"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank">
                                        <div class="claimBtn">
                                            <!--<span class="claim">Click NOW<br>to CLAIM a</span>-->
                                            <span class="package">Erhalten Sie<span class="lora"> eine Flasche</span> gratis!</span>
                                            <div class="clear"></div>
                                        </div>
                                        </a> <span class="Alert">Nutzen Sie unseren Link, um das exklusive <?= $step1_name ?>-Angebot in Anspruch zu nehmen!
                                        <div class="alertArrow"></div>
                                        </span>
                                        <div class="badge"></div>
                                    </div>
                                    <a class="ui-link" href="<?= $step1_link ?>" target="_blank">
                                        <figure class="productPic">
                                            <!--Product IMAGE 140x240px-->
                                            <img src="<?= $step1_image ?>" style="border:none !important; " height="374" width="200"></figure>
                                    </a>
                                    <div class="clear"></div>
                                </div>
                                <div class="space"></div>
                                <div class="product2">
                                    <div class="step2">Schritt 2:
                                        <figure class="steps"> <img src="<?= $assets ?>/index_files/step_arrow.png" style="border:none !important;" height="79" width="60"> </figure>
                                    </div>
                                    <div class="offerBox"><a class="ui-link" href="<?= $step2_link ?>" target="_blank">
                                        <div class="claimBtn">
                                            <!--<span class="claim">Click NOW<br>
to CLAIM a</span>-->
                                            <span class="package">Erhalten Sie<span class="lora"> eine Flasche</span> gratis!</span>
                                            <div class="clear"></div>
                                        </div>
                                        </a> <span class="Alert">Nutzen Sie unseren Link, um das exklusive <?= $step2_name ?>-Angebot in Anspruch zu nehmen!
                                        <div class="alertArrow"></div>
                                        </span>
                                        <div class="badge"></div>
                                    </div>
                                    <figure class="productPic">
                                        <!--Product IMAGE 140x240px-->
                                        <a class="ui-link" href="<?= $step2_link ?>" target="_blank"><img src="<?= $step2_image ?>" style="border:none !important;" height="374" width="200"></a></figure>
                                    <div class="clear"></div>
                                </div>
                                <div class="titleBanner2"><span class="yellow">Vergessen</span> Sie nicht <u>beide</u> Produkte für optimale Resultate zu nutzen</div>
                            </section>
                            <section id="comments">
                                <div class="divisionBar"></div>
                                <section class="SectionTitle">Kommentare </section>
                                <h4>Kommentar verfassen <br>
                                </h4>
                                <form>
                                    <p>
                                        <label class="commentlabel">Name </label>
                                    </p><div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c"><div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c"><input class="dataInput ui-input-text ui-body-c" type="text"></div></div>
                                    <p></p>
                                    <p>
                                        <label class="commentlabel">Email</label>
                                    </p><div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c"><div class="ui-input-text ui-shadow-inset ui-corner-all ui-btn-shadow ui-body-c"><input class="dataInput ui-input-text ui-body-c" type="text"></div></div>
                                    <p></p>
                                    <label class="commentlabel">Kommentar</label>
                                    <textarea class="commentBox ui-input-text ui-body-c ui-corner-all ui-shadow-inset"></textarea>
                                    <div class="btn">Senden </div>
                                </form>
                                <ul class="commentlist">
                                    <li> <img src="<?= $assets ?>/index_files/1.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Daniel</cite>
                                            <p>Meine Freunde und ich haben schon lange darauf gewartet, dass das <?= $step1_name ?> &amp; <?= $step2_name ?> Programm endlich in die Schlagzeilen kommt. Wir 5 haben alle das
                                                Programm durchgemacht und sowohl eine Menge Muskelmasse aufgebaut als auch viel Fett verloren. Diese Methode ist wirklich unglaublich und hat unser Leben von Grund auf verändert.
                                                Ich kann allen nur raten diese Chance zu nutzen!</p>
                                        </div>
                                        <ul>
                                            <li> <img src="<?= $assets ?>/index_files/2.jpg" height="60" width="60">
                                                <div class="comment-text">
                                                    <div class="comment-date">
                                                        <script>
                                                            var mydate=new Date()
                                                            var year=mydate.getYear()
                                                            if (year < 1000)
                                                                year+=1900
                                                                var day=mydate.getDay()
                                                                var month=mydate.getMonth()
                                                                var daym=mydate.getDate()
                                                                if (daym<10)
                                                                    daym="0"+daym
                                                                    var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                                    var montharray=new
                                                                    Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                                    document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                        </script>
                                                    </div>
                                                    <cite>Kommentar von Michael</cite>
                                                    <p>ich habe von den produkten im fernsehen erfahren, aber ich wusste nicht, wo ich sie bestellen kann. dass ihr diese angebote für uns gefunden habt ist großartig, da
                                                        ich nicht für etwas viel geld ausgeben möchte von dem ich nicht weiß, ob es funktioniert. allerdings nehme ich die produkte jetzt den 2. monat und ich bin absolut begeistert!
                                                        danke für diesen artikel!</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/1x.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Tom</cite>
                                            <p>Ich habe mein Vorhaben Gewicht zu verlieren jetzt schon 2 Monate aufgeschoben, jetzt werd ich aber damit beginnen. Ich habe die Probepackungen schon bestellt und bin auf dem
                                                weg ins Fitnessstudio. ;) Danke an Men's Life&amp;Health für den Motivationsschub! mfg Tom </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/4.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Micha</cite>
                                            <p>ich habe auch aus dem Fernsehen von diesem Programm erfahren und mir gedacht, dieses Programm sollte für Männer die Gewicht verlieren wollen SOGAR NOCH BESSER FUNKTIONIEREN!
                                                Ich werde das Angebot auf jeden Fall nutzen bevor es abläuft. Danke für den tollen Artikel, ich bin sehr begeistert! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/6.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Lars</cite>
                                            <p>In der letzten Zeit habe ich wirklich viel über dieses <?= $step1_name ?> gehört... Überall wo ich hinschaue sehe oder höre ich davon... Auf einer Messe habe ich eine Testpackung
                                                bekommen und ich muss sagen, es schmeckt echt gut. Ich habe gleich 2 Packungen gekauft und werde es auf jeden Fall auch testen. Danke für die Links!!! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/5.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Martin</cite>
                                            <p>Mein Bruder hatte schon von klein auf Gewichtsprobleme. Der Arzt meinte, wir müssen uns unbedingt nach einer guten Diät umschauen damit er so um die 50 kg an Körperfett
                                                verliert, ich hoffe das hier ist die Antwort. Danke Men's Life&amp;Health! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/7.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Megdad</cite>
                                            <p> Wie gut hat dieses Programm bei euch funktioniert? Ich möchte einige Kilos verlieren, damit ich mich im Sommer ins Freibad wagen kann. Habe das Produkt schon geordert </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/10.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Richard</cite>
                                            <p> Meine Frau und ich müssen beide Gewicht verlieren weil wir uns bald mit Familienmitgliedern treffen werden, die wir seit über 25 Jahren nicht gesehen haben (und nicht die dicke
                                                Tante und der dicke Onkel sein wollen). Wir haben die Produkte für mich schon bestellt und ich werde es ausprobieren. Drückt mir die Daumen!  </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/9.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Stefan</cite>
                                            <p>Ich hab schon viel von dieser Diät gehört. Mein bester Freund hat neulich von diesem Muskelaufbauprogramm erzählt und dass einer seiner Freunde damit in nur 15 Tagen 6 kg Muskelmasse
                                                zugelegt hat. Ich werde das auf jetzt jeden Fall auch mal probieren! </p>
                                        </div>
                                        <ul>
                                            <li> <img src="<?= $assets ?>/index_files/3.jpg" height="60" width="60">
                                                <div class="comment-text">
                                                    <div class="comment-date">
                                                        <script>
                                                            var mydate=new Date()
                                                            var year=mydate.getYear()
                                                            if (year < 1000)
                                                                year+=1900
                                                                var day=mydate.getDay()
                                                                var month=mydate.getMonth()
                                                                var daym=mydate.getDate()
                                                                if (daym<10)
                                                                    daym="0"+daym
                                                                    var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                                    var montharray=new
                                                                    Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                                    document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                        </script>
                                                    </div>
                                                    <cite>Kommentar von David</cite>
                                                    <p>Yes! Endlich ein Programm von dem ich mir viel verspreche. Ich habe schon bestellt und werde berichten! </p>
                                                </div>
                                            </li>
                                            <li> <img src="<?= $assets ?>/index_files/1x.jpg" height="60" width="60">
                                                <div class="comment-text">
                                                    <div class="comment-date">
                                                        <script>
                                                            var mydate=new Date()
                                                            var year=mydate.getYear()
                                                            if (year < 1000)
                                                                year+=1900
                                                                var day=mydate.getDay()
                                                                var month=mydate.getMonth()
                                                                var daym=mydate.getDate()
                                                                if (daym<10)
                                                                    daym="0"+daym
                                                                    var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                                    var montharray=new
                                                                    Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                                    document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                        </script>
                                                    </div>
                                                    <cite>Kommentar von Paul</cite>
                                                    <p>Diese Produkte sind der Wahnsinn! Mein Kumpel Dino hat mit diesem Programm schon enorm viel abgenommen und hat jetzt einen super Körper. Ich habs nicht glauben können,
                                                        weshalb ich selbst angefangen hab nachzuforschen und bin dabei auf diesen Artikel gestoßen. Unglaublich, dass es hier sogar Probepackungen gibt. Dino hat glaub ich über 500€
                                                        ausgegeben und war trotzdem begeistert... was er wohl sagen wird, wenn ich ihm erzähle, dass er das alles für unter 10€ hätte haben können..! (So wie ich)! :D Danke Mann!!! </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>


                                    <li> <img src="<?= $assets ?>/index_files/8.jpg" height="60" width="60">
                                        <div class="comment-text"> <cite>Kommentar von Anna</cite>
                                            <p> Mein Freund verwendet das Zeug und - glaubt mir - es wirkt enorm gut. Männer, tut was für eure Ladies!  </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/11.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Thomas</cite>
                                            <p>Ein Freund von mir hat das Programm mit <?= $step1_name ?> gemacht und mir vor ca. 3 Wochen empfohlen. Ich habe mir die Produkte bestellt und innerhalb von 3 Tagen bekommen
                                                (leider mit vollen Versandkosten). Die Ergebnisse bisher sind echt der Hammer und ich bin schon gespannt was Woche 3 und 4 bringen </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/12.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Pascal</cite>
                                            <p> Scheint so, als ob die Gutscheine noch gültig sind, also bestellen solange es noch geht! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/13.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Rainer</cite>
                                            <p>Das ist mein Produkt! Ich habe damit vor einem Monat begonnen und schon 8 kg an Muskelmasse zugenommen. Das hier hat mein Leben echt sehr verändert (ich war immer dünn wie eine
                                                Bohnenstange) und ich kann <?= $step1_name ?> nur weiterempfehlen! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/14.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Gero</cite>
                                            <p> Ich hab mir vor einer Woche eine Probepackung zukommen lassen und muss sagen, Kompliment an den netten Kundenservice, ich werde weiterhin bei euch bestellen.
                                                Ja, und das Programm funktioniert sensationell gut :) </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/15.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>


                                            <cite>Kommentar von Dominik</cite>
                                            <p>Habs vor 5 Tagen bestellt und heute per Post bekommen. Ich werde euch über meine Fortschritte auf dem Laufenden halten. Cooler Artikel übrigens! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/16.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Alex</cite>
                                            <p> Danke an Men's Life&amp;Health für diesen Bericht. Ich habe in der Werbung oft von diesem Programm gehört, jedoch nie den Mut gehabt es zu probieren. Danke! </p>
                                        </div>
                                    </li>
                                    <li> <img src="<?= $assets ?>/index_files/1x.jpg" height="60" width="60">
                                        <div class="comment-text">
                                            <div class="comment-date">
                                                <script>
                                                    var mydate=new Date()
                                                    var year=mydate.getYear()
                                                    if (year < 1000)
                                                        year+=1900
                                                        var day=mydate.getDay()
                                                        var month=mydate.getMonth()
                                                        var daym=mydate.getDate()
                                                        if (daym<10)
                                                            daym="0"+daym
                                                            var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                            var montharray=new
                                                            Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                            document.write(""+daym+" "+montharray[month]+", "+year+"")

                                                </script>
                                            </div>
                                            <cite>Kommentar von Lukas</cite>
                                            <p>Danke für die Arbeit alle Hersteller dieser Produkte durchzuarbeiten, viele der angebotenen Produkte sind reine Abzocke. Ich habe genau diese Produkte bestellt die hier angegeben
                                                werden und kann es nicht erwarten sie zu testen.</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="divisionBar"></div>
                                <span style="color:red; text-transform:uppercase; font-size:16px"><strong>Ende des Men's Life &amp; Health Exklusivberichts</strong></span> </section>
                            <p><a href="#" target="blank" class="ui-link">KONTAKT</a>   |   <a href="#" target="blank" class="ui-link">AGB</a>   |   <a href="http://buypremiumqualitymusclesupplement.com/de/besondere_2/privacy.html?subid=0" target="blank" class="ui-link">DATENSCHUTZ</a></p>

                            <!-- /.post -->
                        </div>
                        <!-- /#content -->
                        <aside id="sidebar">
                            <section class="specialBox">
                                <div class="specialTitle">Spezialangebot
                                    <div class="tab"></div>
                                </div>
                                <div class="offerPic"> <img src="<?= $assets ?>/index_files/cover.png" style="border:none;" height="310" width="230"> <span class="offerTxt">
                                    <div class="bullet"><img src="<?= $assets ?>/index_files/img_arrow.png" style="border:none !important;" height="19" width="19"></div>
                                    <span class="offerSub">In dieser Ausgabe ML&amp;H</span> &gt;&gt; Diese Monatsausgabe enthält das <b>Angebot</b>. Es ist zeitlich und mengenmäßig begrenzt!</span>
                                    <div class="clear"></div>
                                </div>
                                <div class="clickOffer"><img src="<?= $assets ?>/index_files/arrow_offer.png" style="margin-bottom:-4px;" height="20" width="19"><span class="offerStep">Schritt 1: </span> <span class="clickTxt"><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Klicken Sie hier, um eine Flasche <b><?= $step1_name ?></b> zu bestellen</a></span></div>
                                <div class="Alert2"><span style="background-color:#FFFF1F;">Nutzen Sie unseren Link, um das exklusive <?= $step1_name ?>-Angebot in Anspruch zu nehmen!</span></div>
                                <div class="clickOffer"><img src="<?= $assets ?>/index_files/arrow_offer.png" style="margin-bottom:-4px;" height="20" width="19"><span class="offerStep">Schritt 2: </span> <span class="clickTxt"><a class="ui-link" href="<?= $step2_link ?>" target="_blank">Klicken Sie hier, um eine Flasche <b><?= $step2_name ?>.</b> zu bestellen</a></span></div>
                                <div class="Alert2"><span style="background-color:#FFFF1F; padding:1px;">Nutzen Sie unseren Link, um das exklusive <?= $step2_name ?>-Angebot in Anspruch zu nehmen!</span></div>
                                <div class="divider2"></div>
                                <div class="note">*Hinweis: Nutzen Sie <u>beide Produkte</u> um ähnliche Ergebnisse zu erzielen</div>
                                <div class="expire">Die Probepackungen sind limitiert. <br>
                                    Das Angebot endet <b>
                                    <script>
                                        var mydate=new Date()
                                        var year=mydate.getYear()
                                        if (year < 1000)
                                            year+=1900
                                            var day=mydate.getDay()
                                            var month=mydate.getMonth()
                                            var daym=mydate.getDate()
                                            if (daym<10)
                                                daym="0"+daym
                                                var dayarray=new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag")
                                                var montharray=new
                                                Array("Januar","Februar","März","April","Mai","Juni","Juli","August","September","Oktober","November","Dezember")
                                                document.write(""+daym+" "+montharray[month]+", "+year+"")

                                    </script>
                                    </b></div>
                            </section>
                            <section class="widget clearfix">
                                <h4 class="widgettitle">Ähnliche Videos </h4>
                                <ul class="vid">
                                    <li>
                                        <figure class="product-review"><span class="vidTitle">Video-Archiv </span> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/vid1.jpg" style="width:auto; margin:0;" height="101" width="181"></a>
                                            <figcaption>Personal Training ist sehr teuer. Deshalb empfehlen wir Ihnen, <?= $step1_name ?> und <?= $step2_name ?> einzunehmen und so Ihren Muskelaufbau auf erschwingliche Weise zu ergänzen.</figcaption>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="product-review"><span class="vidTitle">Video-Archiv</span> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/vid2.jpg" style="width:auto; margin:0;" height="101" width="181"></a>
                                            <figcaption>Übungen und gezieltes Training sind essenziell, um das Sixpack zu bekommen, von dem Sie schon immer träumen. Übungen wie diese und eine guten Ernährung bringen
                                                Sie ans Ziel!</figcaption>
                                        </figure>
                                    </li>
                                </ul>
                            </section>
                            <section class="widget clearfix">
                                <h4 class="widgettitle" style="letter-spacing:4px;">Die Produkte im Detail</h4>
                                <span class="easier">Muskeln aufbauen war nie leichter:
                                    :</span>
                                <ul class="reviews">
                                    <li>
                                        <figure class="product-review"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $step1_image ?>" height="374" width="200"></a>
                                            <div class="">
                                                <div class="clickMinioffer"> <span class="clickTxt"><a class="ui-link" href="<?= $step1_link ?>" target="_blank"><b><?= $step1_name ?></b></a></span></div>
                                                <div class="Alert3">Nutzen Sie unseren Link, um das exklusive <?= $step1_name ?>-Angebot in Anspruch zu nehmen!</div>
                                            </div>
                                            <div class="clear"></div>
                                        </figure>
                                    </li>
                                    <li>
                                        <figure class="product-review"> <a class="ui-link" href="<?= $step2_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $step2_image ?>" height="374" width="200"></a>
                                            <div class="">
                                                <div class="clickMinioffer"> <span class="clickTxt"><a class="ui-link" href="<?= $step2_link ?>" target="_blank"><b><?= $step2_name ?></b></a></span></div>
                                                <div class="Alert3">Nutzen Sie unseren Link, um das exklusive <?= $step2_name ?>-Angebot in Anspruch zu nehmen!</div>
                                            </div>
                                            <div class="clear"></div>
                                        </figure>
                                    </li>
                                </ul>
                            </section>
                            <!-- /.widget -->
                            <section class="widget">
                                <h4 class="widgettitle">Lesermeinungen</h4>
                                <ul class="popular">
                                    <li>
                                        <h3 class="testimonial">
                                            "Alle meine Freunde erzählten mir davon, wie toll dieses <?= $step1_name ?> ist. Ich habe seit der 10. Klasse Gewichtsprobleme, Sie können sich vorstellen, wie verzweifelt ich mir gewünscht habe,
                                            endlich so auszusehen und mich zu fühlen wie meine Freunde jeden Sommer. Schließlich habe ich <?= $step1_name ?> probiert und kann Ihnen sagen, ich werde NIE mehr eine andere
                                            Muskel-Nahrungsergänzung nehmen! Dieses Zeug ist unglaublich! Ich habe jetzt zum ersten Mal ein Sixpack!"
                                        </h3>
                                        <p class="read">~ Johannes A., <span class="thin">Stuttgart</span></p>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <h3 class="testimonial">
                                            "Als 2-facher Vater jongliere ich täglich mit Arbeit, Kindern und anderem Stress. Ich habe Übergewicht, seit ich eine Familie gegründet habe, denn es fehlt einfach die Zeit, egal wie
                                            sehr ich mich bemühte, es war einfach nie genug Zeit, um ins Fitnesscenter zu gehen. Ein Freund von mir brachte mir <?= $step1_name ?> mit - und ich konnte kaum glauben, als die Kilos zu purzeln
                                            begannen und ich richtig massive Muskeln bekommen hab! Danke, <?= $step1_name ?> - ein echter Lebensretter!"
                                        </h3>
                                        <p class="read">~ Wolfgang L., <span class="thin">Leipzig</span></p>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                                <div class="more"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;">Weitere Lesermeinungen &gt;&gt;</a></div>
                            </section>
                            <!-- /.widget -->
                            <section class="widget clearfix">
                                <h4 class="widgettitle">Tipps von ML&amp;H </h4>
                                <ul class="advice">
                                    <li>
                                        <figure class="advicePic"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/img_advice1.jpg" height="60" width="60"></a></figure>
                                        <h2 class="widget-title"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;">Übungen, die Sie am besten ignorieren </a></h2>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/img_advice2.jpg" height="60" width="60"></a></figure>
                                        <h2 class="widget-title"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;">Einfacher Muskelaufbau </a></h2>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/img_advice3.jpg" height="60" width="60"></a></figure>
                                        <h2 class="widget-title"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;">Zwei schnelle Wege, um überschüssige Pfunde loszuwerden </a></h2>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/img_advice4.jpg" height="60" width="60"></a></figure>
                                        <h2 class="widget-title"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;">Ist mehr Schlaf am Wochenende wirklich hilfreich? </a></h2>
                                        <div class="clear"></div>
                                    </li>
                                    <li>
                                        <figure class="advicePic"> <a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"><img src="<?= $assets ?>/index_files/img_advice5.jpg" height="60" width="60"></a></figure>
                                        <h2 class="widget-title"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;">Finden Sie sich nicht mit Falten ab </a></h2>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                            </section>
                        </aside>
                        <!-- /#sidebar -->
                    </div>
                </section>
                <!-- /#pagewrap -->
                <footer id="footer">
                    <nav>
                        <ul id="main-nav" class="clearfix">
                            <div class="pagewrap">
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Fitness </a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Sex &amp; Liebe</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Ernährung</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Body Shaping</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Abnehmen</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Gesundheit</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Yoga</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Style</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Alltag</a></li>
                                <li><a class="ui-link" href="<?= $step1_link ?>" target="_blank">Fitness Guru</a></li>
                            </div>
                        </ul>
                        <!-- /#main-nav -->
                    </nav>
                    <div class="pagewrap">
                        <div class="footer-col1">
                            <div id="footer-logo"><a class="ui-link" href="<?= $step1_link ?>" target="_blank" style="text-decoration:none;"></a> </div>
                        </div>
                        <div class="footer-col2">
                            <div>
                                <section id="socialIcons">
                                    <div class="fb"></div>
                                    <div class="pi"></div>
                                    <div class="tw"></div>
                                    <div class="go"></div>
                                    <div class="clear"></div>
                                </section>
                                <div class="secondNav"> </div>
                                <div class="copy">© Men’s Life and Health LLC. Tous droits réservés 2014 </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </footer>
                <!-- /#footer -->
                </div></div>
            <!-- /header -->
            <!-- content -->

            <!-- /content -->
            <div data-role="panel" class="jqm-nav-panel jqm-navmenu-panel ui-panel ui-panel-position-left ui-panel-display-reveal ui-panel-closed ui-body-c ui-panel-animate" data-position="left" data-display="reveal" data-theme="c">
                <div class="ui-panel-inner"><ul data-role="listview" data-theme="d" data-divider-theme="d" data-icon="false" data-global-nav="demos" class="jqm-list ui-listview">
                    <li class="ui-li ui-li-divider ui-bar-d ui-first-child" role="heading" data-role="list-divider">On herLife&amp;Health</li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Home</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Fitness</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Sex &amp; Love</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Food</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Look Better Naked</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Weight Loss</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Health</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Yoga</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Beauty &amp; Style</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Life</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Fit Coach</a></div></div></li>
                    <li class="ui-li ui-li-divider ui-bar-d" role="heading" data-role="list-divider">Men's Life &amp; Health Social</li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false" data-section="" data-filtertext=""><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Facebook</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false" data-section="" data-filtertext=""><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank" data-ajax="false">YouTube</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false" data-section="" data-filtertext=""><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank" data-ajax="false">Twitter</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false" data-section="" data-filtertext=""><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank" data-ajax="false">Google +</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false" data-section="" data-filtertext=""><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Facebook</a></div></div></li>
                    <li class="ui-li ui-li-divider ui-bar-d" role="heading" data-role="list-divider">Site Navigation</li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">About</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Privacy</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Services</a></div></div></li>
                    <li class="ui-btn ui-btn-up-d ui-btn-icon-right ui-li-has-arrow ui-li ui-li-static ui-last-child" data-theme="d" data-iconpos="right" data-icon="false" data-wrapperels="div" data-iconshadow="true" data-shadow="false" data-corners="false"><div class="ui-btn-inner ui-li ui-li-static ui-btn-up-d"><div class="ui-btn-text"><a class="ui-link-inherit" href="<?= $step1_link ?>" target="_blank">Contact</a></div></div></li>
                    </ul></div>
            </div>
            <!-- /panel -->
            </body>
        </html>
