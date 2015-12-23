
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1" />
<meta name="author" content="FamousThemes" />
<meta name="description" content="Get in the spotlight" />
<meta name="keywords" content="premium css templates, premium wordpress themes, famous themes, themeforest" />
<title>Get Skin Tips</title>
<link rel="stylesheet" type="text/css" media="all" href="<?= $assets ?>/css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Dosis:200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?= $assets ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<!-- jQuery -->
<script type="text/javascript" src="<?= $assets ?>/js/jquery.min.js"></script>
<!-- Twitter Feed -->
<script type="text/javascript" src="<?= $assets ?>/js/twitter/jquery.tweet.js" charset="utf-8"></script>
<!-- Flickr Feed -->
<script src="<?= $assets ?>/js/jflickrfeed.min.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="<?= $assets ?>/js/custom.quicksand.js"></script>
<script src="<?= $assets ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="<?= $assets ?>/js/menu.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
  $(window).load(function() {
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});

  });
  jQuery(function($){
	$(".tweet").tweet({
	  modpath: 'js/twitter/',
	  join_text: "auto",
	  username: "famousthemes",
	  count: 1,
	  auto_join_text_default: "we said,",
	  auto_join_text_ed: "we",
	  auto_join_text_ing: "we were",
	  auto_join_text_reply: "we replied",
	  auto_join_text_url: "we were checking out",
	  loading_text: "loading tweets..."
	});
	$('#basicuse').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '31408169@N04'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
  });
</script>

</head>
<body>
<div id="main_container">

    <div class="header" style="height: 146px; padding-top: 0px;">
    <div class="logo" style="padding-bottom: 0px; padding-top: 34px;"><h1><a href="<?= $step1_link ?>">Get&nbsp<span>Skin&nbsp</span><span>Tips</span></a></h1></div>

	<a class="show_menu" href="#">menu</a>
    <a class="hide_menu" href="#">close menu</a>
    <div class="menu" style="padding-top: 23px;">
        <ul id="main_menu">
        	<li><a class="selected" href="<?= $step1_link ?>">Home</a></li>
            <li><a href="<?= $step1_link ?>">About us</a></li>
            <li><a href="<?= $step1_link ?>">Product</a></li>
            <li><a href="<?= $step1_link ?>">Gallery</a></li>
            <li><a href="<?= $step1_link ?>">Blog</a></li>
            <li><a href="<?= $step1_link ?>">Contact</a></li>
        </ul>
     </div>

    </div>

    <div id="page_content">
        <div class="right_content">
            <h2><a href="<?= $step1_link ?>"><?= $step1_name ?></a></h2>
            <p><img src="<?= $step1_image ?>" width="300px" hight="auto" align="left" /><br><br><br> This incredibly soft, enveloping creme is the perfect complement to the <?= $step2_name ?>, providing skin with a boost of nutrition and maximum filling ability. Apply generously over the face and neck, massaging with circular motions from the center of the face out toward the temples. Smooth over the forehead in fan movement. </p>
            <div class="post_comments">Price : <a href="#">$125</a></div><br/><br/>
            <div class="post_comments">Quantity &nbsp;:&nbsp; <input type='text' name='qt' placeholder='1' width='60px'>&nbsp;&nbsp;<br/><a href="<?= $step1_link ?>" class="read_more">Order Now</a></div>
        </div><!--end of right content-->


       <!-------------------------------------start of sidebar---------------------------------->
        <div class="sidebar">

        <h2>Blog <span>categories</span></h2>
        <ul class="list">
        <li><a href="<?= $step1_link ?>">Basics Skin Care Tips</a></li>
        <li><a href="<?= $step1_link ?>">Skin Care and Sun Protection</a></li>
        <li><a href="<?= $step1_link ?>">Facts About Skin - Skincare and Facts</a></li>
        <li><a href="<?= $step1_link ?>">Why Taking Good Care of your Skin is so Important</a></li>

        </ul>


        <h2>Recent <span>comments</span></h2>

        <div class="post">
            <div class="post_thumb_small"><a href="<?= $step1_link ?>"><img src="<?= $step1_image ?>" alt="" title="" /></a></div>
            <div class="post_right_small">
            <h2><a href="<?= $step1_link ?>"><?= $step1_name ?></a></h2>

            </div>
        </div>
        <div class="post">
            <div class="post_thumb_small"><a href="<?= $step1_link ?>"><img src="<?= $step2_image ?>" alt="" title="" /></a></div>
            <div class="post_right_small">
            <h2><a href="<?= $step2_link ?>"><?= $step2_name ?></a></h2>

            </div>
        </div>


        <div class="sidebar_full">


        </div>


        </div>       <!-------------------------------------start of sidebar---------------------------------->




    <div class="clear"></div>
    </div>




   <div class="footer">
       <div class="footer_text">
      Get Skin Tips |  © 2015 All Rights Reserved

       </div>
       <div class="footer_menu">
           <ul>
           <li class="selected"><a href="<?= $step1_link ?>">Home</a></li>
           <li><a href="<?= $step1_link ?>">Privacy Policy</a></li>
           <li><a href="<?= $step1_link ?>">Terms & Conditions</a></li>
           <li><a href="<?= $step1_link ?>">Contact</a></li>
           </ul>
       </div>
       <div class="clear"></div>

   </div>
  <!--%revlpy-->

<script type="text/javascript">
var clicky_site_ids = clicky_site_ids || [];
clicky_site_ids.push(100775155);
(function() {
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//static.getclicky.com/js';
  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
})();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100775155ns.gif" /></p></noscript>

</div>
<script type="text/javascript">
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
</script>
</body>
</html>
