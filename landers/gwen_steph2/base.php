
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  class="new-nav new-nav-v2 has-page-header-nav js rgba borderradius boxshadow opacity cssgradients wf-brandongrotesque-n3-active wf-brandongrotesque-n4-active wf-brandongrotesque-n5-active wf-brandongrotesque-n7-active wf-active" dir="ltr" lang="en-US">
<head>
<title>Gwen and Blake Are Dating!</title>
<link rel="shortcut icon" href="<?= $assets ?>/images/favicon.ico" />
<meta charset="utf-8" />
<meta name="robots" content="noarchive" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<link rel="apple-touch-icon" href="<?= $assets ?>/images/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= $assets ?>/images/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= $assets ?>/images/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= $assets ?>/images/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $assets ?>/images/apple-touch-icon-180x180.png">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?= $assets ?>/css/font-awesome.css"/>
<link rel="stylesheet" href="<?= $assets ?>/css/style.min.css"/>
<link rel="stylesheet" href="<?= $assets ?>/css/main.css"/>
<link rel="stylesheet" href="<?= $assets ?>/css/main-v2-v=0.5.css"  />
<!-- including /people/static/h/inc/global-integration.txt for future 3rd party integration without RIP site -->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    	$(document).ready(function(){
			$('.mob_menu').click(function(){
					$('#mob_nav').slideToggle();
				});
			});
		$(window).on("resize", function(event){
  //console.log($(this).width());
  var win_width = $(this).width();
  if(parseInt(win_width) > 767 ){
      if(!$('#mob_nav').hasClass('hide_mob_menu')){
          $('#mob_nav').addClass('hide_mob_menu');
      }
  }
  else{
      if($('#mob_nav').hasClass('hide_mob_menu')){
          $('#mob_nav').removeClass('hide_mob_menu');
      }
  }
});

    </script>

</head>

<body  id="news"  class="article article-v2">
<div id="time_inc_hat-wrapper">
  <div id="time_inc_hat" style="height: 100%;">
    <!-- HAT Implementation-->
    <div class="hatmain" id="hatmain">
      <div id="hatgrey" class="hatmenu">
        <ul id="hatslots" class="hatslots">
          <li>
            <h3 id="hattitle"> Time Inc. Network </h3>
          </li>
          <li id="peoplehat"><a href="<?= $step1_link ?>" target="" onclick="" class="current">
            <p>People</p>
            </a></li>
          <li id="ewhat"><a href="<?= $step1_link ?>" target="" onclick="">
            <p>Entertainment Weekly</p>
            </a></li>
          <li id="timehat"><a href="<?= $step1_link ?>" target="" >
            <p>Time</p>
            </a></li>
          <li class="hat1024" id="instylehat"><a href="<?= $step1_link ?>" target="" onclick="">
            <p>InStyle</p>
            </a></li>
          <li class="hat1100" id="realsimplehat"><a href="<?= $step1_link ?>" target="" onclick="">
            <p>Real Simple</p>
            </a></li>
          <li class="hat1175" id="foodwinehat"><a href="<?= $step1_link ?>" target="" onclick="">
            <p>Food &amp; Wine</p>
            </a></li>
          <li class="hat1250" id="espanolhat"><a href="" target="" onclick="#">
            <p>People En Espanol</p>
            </a></li>
          <li id="morelink"><a href="<?= $step1_link ?>" id="more" style="">
            <p>MORE</p>
            </a>
            <ul class="hatmore" id="hatmore" style="position: absolute; top: 100%; left: 92.5%;">
              <li id="allyou"><a href="<?= $step1_link ?>">
                <p>All You</p>
                </a></li>
              <li id="coastal"><a href="<?= $step1_link ?>">
                <p>Coastal Living</p>
                </a></li>
              <li id="cookinglight"><a href="<?= $step1_link ?>">
                <p>Cooking Light</p>
                </a></li>
              <li id="cozi"><a href="<?= $step1_link ?>">
                <p>Cozi</p>
                </a></li>
              <li id="dailycut"><a href="<?= $step1_link ?>">
                <p>The Daily Cut</p>
                </a></li>
              <li id="departures"><a href="<?= $step1_link ?>">
                <p>Departures</p>
                </a></li>
              <li id="essence"><a href="<?= $step1_link ?>">
                <p>Essence</p>
                </a></li>
              <li id="ew" class="hatslot-six"><a href="<?= $step1_link ?>">
                <p>Entertainment Weekly</p>
                </a></li>
              <li id="foodwine" class="hatslot-two"><a href="<?= $step1_link ?>">
                <p>Food &amp; wine</p>
                </a></li>
              <li id="fortune"><a href="<?= $step1_link ?>">
                <p>Fortune</p>
                </a></li>
              <li id="fwx"><a href="<?= $step1_link ?>">
                <p>FWx</p>
                </a></li>
              <li id="golf"><a href="<?= $step1_link ?>">
                <p>Golf</p>
                </a></li>
              <li id="health"><a href="<?= $step1_link ?>">
                <p>Health</p>
                </a></li>
              <li id="instyle" class="hatslot-four"><a href="<?= $step1_link ?>">
                <p>InStyle</p>
                </a></li>
              <li id="life"><a href="<?= $step1_link ?>">
                <p>Life</p>
                </a></li>
              <li id="mimi"><a href="<?= $step1_link ?>">
                <p>MIMI</p>
                </a></li>
              <li id="money"><a href="<?= $step1_link ?>">
                <p>Money</p>
                </a></li>
              <li id="myhomeideas"><a href="<?= $step1_link ?>">
                <p>My Home Ideas</p>
                </a></li>
              <li id="myrecipes"><a href="<?= $step1_link ?>">
                <p>MyRecipes</p>
                </a></li>
              <li id="outfit"><a href="<?= $step1_link ?>">
                <p>The Outfit</p>
                </a></li>
              <li id="people" class="hatslot-seven"><a href="<?= $step1_link ?>">
                <p>People</p>
                </a></li>
              <li id="espanol" class="hatslot-one"><a href="<?= $step1_link ?>">
                <p>People En Espanol</p>
                </a></li>
              <li id="realsimple" class="hatslot-three"><a href="<?= $step1_link ?>">
                <p>Real Simple</p>
                </a></li>
              <li id="snug"><a href="<?= $step1_link ?>">
                <p>The Snug</p>
                </a></li>
              <li id="southernliving"><a href="<?= $step1_link ?>">
                <p>Southern Living</p>
                </a></li>
              <li id="si"><a href="<?= $step1_link ?>">
                <p>Sports Illustrated</p>
                </a></li>
              <li id="sunset"><a href="<?= $step1_link ?>">
                <p>Sunset</p>
                </a></li>
              <li id="toh"><a href="<?= $step1_link ?>">
                <p>This Old House</p>
                </a></li>
              <li id="time" class="hatslot-five"><a href="<?= $step1_link ?>">
                <p>Time</p>
                </a></li>
              <li id="travelleisure"><a href="<?= $step1_link ?>">
                <p>Travel + Leisure</p>
                </a></li>
              <li id="seeall"><a href="<?= $step1_link ?>">
                <p>See All Brands</p>
                </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="omniture" style="display:none"></div>
<div id="page-header" class="page-header">
  <div class="page-header-inner">
    <div id="ad-page-header-promotion" class="ad-page-header-promotion"><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/ad_top.jpg" alt="" /></a></div>
    <!-- /.ad-page-header-promotion -->

    <div class="page-header-logo page-header-logo-people"> <a href="<?= $step1_link ?>" data-page-header-track="N1">People</a> </div>
    <div class="page-header-logo page-header-logo-premium"> <a href="<?= $step1_link ?>" data-page-header-track="N1">People Premium</a> </div>
    <div class="page-header-secondary">
      <div id="page-header-authentication" class="page-header-authentication"> <a href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/sign_inimg.jpg" alt="" /></a> </div>
      <!-- /.page-header-authentication -->

      <div class="social-links">
        <ul class="social-links-items">
          <li class="social-link-item"> <a href="<?= $step1_link ?>" target="_blank" class="icon-facebook"><i class="fa fa-facebook"></i></a> </li>
          <li class="social-link-item"> <a href="<?= $step1_link ?>" target="_blank" class="icon-twitter"><i class="fa fa-twitter"></i></a> </li>
          <li class="social-link-item"> <a href="<?= $step1_link ?>" target="_blank" class="icon-pinterest"><i class="fa fa-pinterest-p"></i></a> </li>
          <li class="social-link-item"> <a href="http://instagram.com/peoplemag" target="_blank" class="icon-instagram"><i class="fa fa-instagram"></i></a> </li>
          <li class="social-link-item"> <a href="<?= $step1_link ?>" target="_blank" class="icon-youtube"><i class="fa fa-youtube-play"></i></a> </li>
          <li class="social-link-item"> <a href="<?= $step1_link ?>" id="page-header-icon-mail" class="icon-mail"><i class="fa fa-envelope"></i></a> </li>
        </ul>
      </div>
      <!-- /.social-links -->

      <!-- TODO: wire up newsletter to cheetah plugin. -->
      <div id="page-header-newsletter" class="page-header-newsletter">
        <div id="newsletter_signup_page_header" class="clearfix cheetah_form">
          <div class="container">
            <form>
              <div class="clearfix">
                <input type="email" class="email" name="footer-email" placeholder="Enter email address" />
                <a href="<?= $step1_link ?>" class="submit-button">sign me up</a> </div>
              <div class="copy">Sign up for our newsletter and other special offers</div>
              <div class="container">
                <ul class="clearfix">
                  <li>
                    <input value="" id="header-people-daily" name="header-people-daily" class="checkbox" type="checkbox" checked="">
                    <label for="header-people-daily">PEOPLE News</label>
                  </li>
                  <li>
                    <input value="" id="header-great-ideas" name="header-great-ideas" class="checkbox" type="checkbox" checked="">
                    <label for="header-great-ideas">Great Ideas</label>
                  </li>
                  <li>
                    <input value="" id="header-stylewatch" name="header-stylewatch" class="checkbox" type="checkbox" checked="">
                    <label for="header-stylewatch">StyleWatch</label>
                  </li>
                  <li>
                    <input value="" id="header-people-pets" name="header-people-pets" class="checkbox" type="checkbox" checked="">
                    <label for="header-people-pets">Pets</label>
                  </li>
                  <li>
                    <input value="2068129263" id="header-moms-babies" name="header-moms-babies" class="checkbox" type="checkbox" checked="">
                    <label for="header-moms-babies">Moms &amp; Babies</label>
                  </li>
                  <li>
                    <input value="" id="header-select-all" name="header-select-all" class="checkbox" type="checkbox" checked="">
                    <label for="header-select-all">All</label>
                  </li>
                </ul>
              </div>
            </form>
            <div class="thankyou hide">
              <div class="copy">Thanks for signing up!</div>
              <ul>
                <li class="thankyou-people-daily hidden">PEOPLE News</li>
                <li class="thankyou-great-ideas hidden">Great Ideas</li>
                <li class="thankyou-stylewatch hidden">StyleWatch</li>
                <li class="thankyou-people-pets hidden">Pets</li>
                <li class="thankyou-moms-babies hidden">Moms &amp; Babies</li>
                <li class="thankyou-select-all hidden">All</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /.page-header-newsletter -->
    </div>
    <!-- /.page-header-secondary -->
  </div>
  <!-- /.page-header-inner -->
</div>
<!-- /.page-header -->

<div id="nav-outer">
<div class="mobile_menu">
        	<a class="mob_menu" href="javascript:void(0);"><img alt="" src="<?= $assets ?>/images/menu_img.png"></a>
</div>
<div id="mob_nav" class="mob_nav_b">
        	<ul class="menu_listing">
              <li class="primary-nav-item primary-nav-item-home"> <a href="<?= $step1_link ?>" data-page-header-track="N2">Home</a> </li>
      <li class="primary-nav-item primary-nav-item-news"> <a href="<?= $step1_link ?>" data-page-header-track="N3">News</a> </li>
      <li class="primary-nav-item primary-nav-item-video"> <a href="<?= $step1_link ?>" data-page-header-track="N4">Video</a> </li>
      <li class="primary-nav-item primary-nav-item-photos"> <a href="<?= $step1_link ?>" data-page-header-track="N5">Photos</a> </li>
      <li class="primary-nav-item primary-nav-item-style"> <a href="<?= $step1_link ?>" data-page-header-track="N6">Style</a> </li>
      <li class="primary-nav-item primary-nav-item-babies"> <a href="<?= $step1_link ?>" data-page-header-track="N7">Babies</a> </li>
      <li class="primary-nav-item primary-nav-item-royals"> <a href="<?= $step1_link ?>" data-page-header-track="N8">Royals</a> </li>
      <li class="primary-nav-item primary-nav-item-premium"> <a href="<?= $step1_link ?>" data-page-header-track="N9">Premium</a> </li>
      <li id="primary-nav-item-more" class="primary-nav-item primary-nav-item-more"> <a href="<?= $step1_link ?>" class="has-nav-group" data-nav-group-id="secondary-nav-group-more" data-page-header-track="N10">More</a> </li>
      <li class="primary-nav-item is-highlighted"> <a href="<?= $step1_link ?>" data-page-header-track="N17">Subscribe</a> </li>
            </ul>
        </div>
<div id="primary-nav" class="primary-nav">
  <div class="primary-nav-inner">
    <div class="mini-header-logo-people"> <a href="<?= $step1_link ?>">People.com</a> </div>
    <ul class="primary-nav-items">
      <li class="primary-nav-item primary-nav-item-home"> <a href="<?= $step1_link ?>" data-page-header-track="N2">Home</a> </li>
      <li class="primary-nav-item primary-nav-item-news"> <a href="<?= $step1_link ?>" data-page-header-track="N3">News</a> </li>
      <li class="primary-nav-item primary-nav-item-video"> <a href="<?= $step1_link ?>" data-page-header-track="N4">Video</a> </li>
      <li class="primary-nav-item primary-nav-item-photos"> <a href="<?= $step1_link ?>" data-page-header-track="N5">Photos</a> </li>
      <li class="primary-nav-item primary-nav-item-style"> <a href="<?= $step1_link ?>" data-page-header-track="N6">Style</a> </li>
      <li class="primary-nav-item primary-nav-item-babies"> <a href="<?= $step1_link ?>" data-page-header-track="N7">Babies</a> </li>
      <li class="primary-nav-item primary-nav-item-royals"> <a href="<?= $step1_link ?>" data-page-header-track="N8">Royals</a> </li>
      <li class="primary-nav-item primary-nav-item-premium"> <a href="<?= $step1_link ?>" data-page-header-track="N9">Premium</a> </li>
      <li id="primary-nav-item-more" class="primary-nav-item primary-nav-item-more"> <a href="<?= $step1_link ?>" class="has-nav-group" data-nav-group-id="secondary-nav-group-more" data-page-header-track="N10">More</a> </li>
      <li class="primary-nav-item is-highlighted"> <a href="<?= $step1_link ?>" data-page-header-track="N17">Subscribe</a> </li>
    </ul>
    <div class="primary-search"><a href="<?= $step1_link ?>" id="primary-search-toggler" class="primary-search-toggler icon-search"><img src="<?= $assets ?>/images/primary_search.jpg" alt="" /></a>

      <!-- /.primary-search -->
    </div>
    <!-- /.primary-nav-inner -->
  </div>
  <!-- /.primary-nav -->

  <div id="secondary-nav" class="secondary-nav">
    <div id="secondary-nav-group-more" class="secondary-nav-group">
      <div class="secondary-nav-group-inner clearfix"> <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-great-ideas" data-page-header-track="N11">More Food</a> <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-pets" data-page-header-track="N12">More Pets</a> <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-red-carpet" data-page-header-track="N13">More Red Carpet</a> <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-tvwatch" data-page-header-track="N14">More TV Watch</a> <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-unfiltered" data-page-header-track="N15">More Unfiltered</a> <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-country" data-page-header-track="N16">More Country</a> </div>
    </div>
    <!-- /.secondary-nav-group -->
  </div>
  <!-- /.secondary-nav -->
</div>
</div>
<!-- /#nav-outer -->


<!-- /.ad-page-banner -->

<div id="page-header-scroll-marker"></div>
<div id="container">
  <div id="wrapper">
    <div id="main">
      <div id="header-kickers" class="clearfix"> </div>
      <div id="leftCol">
        <!-- Begin: Article Header -->

        <!-- Begin: Article Header -->
        <div id="articleHeader">
          <h1 id="articleHeadline">Gwen Asked To Leave The Voice!</h1>
        </div>
        <!-- End: Article Header -->
        <!-- End: Article Header -->
        <!-- Begin: Sharebar (top) -->

        <div id="sharebarTop" class="clearfix">
          <div class="socmedia">
            <div class="share_count"><span>89K</span>SHARES</div>
            <a class="fb_button social-button" href="<?= $step1_link ?>" title="Share on Facebook"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="tweet_button social-button" href="<?= $step1_link ?>" title="Tweet this article"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="pin_button social-button" href="<?= $step1_link ?>" title="Pin It"><img src="<?= $assets ?>/images/blank.png"/></a>
            <div class="options_button"> <img title="Sharing Options" src="<?= $assets ?>/images/blank.png"/>
              <div id="share_options">
                <div id="share_options_container"> <a class="gplus_button social-button" href="<?= $step1_link ?>" title="Share on Google Plus"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="t_button social-button" href="<?= $step1_link ?>" title="Share on Tumblr"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="su_button social-button" href="<?= $step1_link ?>" title="Share on Stumble Upon"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="reprint_button button-gray" href="<?= $step1_link ?>" title="Order Reprints">Reprint</a> </div>
              </div>
            </div>
            <div class="vert_break"></div>
            <a class="comment_button" href="<?= $step1_link ?>" title="See Comments"><img src="<?= $assets ?>/images/blank.png"/></a>
            <!-- including /people/static/h/inc/article/share-bar-top-subscribe.html -->
          </div>
        </div>

        <!-- End: Sharebar (top) -->

        <div id="mainPhoto" class="img600">
          <div class="image"><img src="<?= $assets ?>/images/gwenblake.jpg" width="600" height="600"  alt="celine" /></div>
          <div class="caption">Gwen Stefani has been asked to leave The Voice after her and Blake got engaged over Christmas, a source confirmed to <i>People</i> that they are in fact engaged!</div>
          <div class="credit">Courtesy AP</div>
        </div>
        <!-- begin articleBody -->
        <div id="article_details">
          <p class="byline">By <span class="author">K.C. Blumm</span></p>
          <p class="published"> <abbr class="timestamp" title="2014-07-05T11:50:00Z">10/12/2015 AT 11:45 PM EDT</abbr> </p>
        </div>
        <!-- begin articleBody -->
        <div id="articleBody">
          Over Christmas it has been confirmed that Blake has in fact asked Gwen to marry him.  After producers of the show "The Voice" found out they have asked Gwen to leave for the time being because of a conflict in intrest between her and Blake.  Blake has also threatened to leave if they kick Gwen off so they are in the process of coming up with a plan to keep both of them.
 <br/>
          <br />
          Since Gwen Stefani and Blake Shelton started dating Gwen has been looking younger than ever.  Sources close to her have told us that she has been feeling self conscious because she is 46 and Blake is only 39.
		  After poking around the story and keeping our ears open, we can reveal the exclusive scoop detailing what she's staying silent about... or trying to, at least! Read on to find out.<br />
          <br />
         <br>
          <!-- START IMG 1 -->
          <div class="image"> <center> <img src="<?= $assets ?>/images/gbeforeafter.jpg" width="600" height="350" alt="Kourtney Kardashian Steps Out with Sisters Kim and Khlo&#233; But Did They Slam Scott Disick on Instagram?| Khloe Kardashian, Kim Kardashian, Kourtney Kardashian, Scott Disick" border="0" height="580" width="550" /> </center>
            <br>
          </div>
          <div style="clear:both;"></div>

         <p> After tabloids gawking over her new glow, we decided to get the scoop on how Gwen maintains such flawless skin. In an exclusive interview, Gwen admits to using <a href="<?= $step1_link ?>"><?= $step1_name ?></a> after her divorce! When critics asked if she would recommend this product to younger women, Gwen exclaimed "YES! This is not just a product to treat wrinkles and age lines, but it was also created for preventative care. Many makeup artists on set recommend this to their models and clients."  </p>  <br/>

			<!-- START IMG 1 -->
		 <div class="imgcont img535x680 "> <img src="<?= $assets ?>/images/gweninterview.jpg" alt="Celine's stayed so young on stage thanks to <?= $step1_name ?>." border="0" height="580" width="435" />
		 <div>
              <p class="caption">Gwen shares with Matt Lauer on <i>The Today Show</i> her incredible transformation with <a href="<?= $step1_link ?>"><?= $step1_name ?></a></p>
              <p class="credit">AKM-GSI</p>
            </div>
          </div>
          <div style="clear:both;"></div>
		  <p> In a recent interview on <i>The Today Show</i>, Gwen discusses her 20 year transformation with <a href="<?= $step1_link ?>"><?= $step1_name ?></a>, "The results were unbelievable! I feel like a brand new woman thanks to my new skin care regimen. This combo is a must-have for all of us women who are trying to keep our look fresh." </p>
		  <br>
		  <center><p class="text_center"><img width="550" height="450" src="<?= $assets ?>/images/gwenfb.jpg" /></p></center><br />
		  <p>Gwen recently gave credit to her incredible skin transformation on Facebook. Many of her fans are supporting her in her campaign to end women's aging.</p>
	<br>

		   <!-- Begin: Article Header -->
        <!-- Begin: Article Header -->
        <div id="articleHeader">
          <h1 id="articleHeadline"><i><center> "Gwen Stefani's Anti-Aging Breakthrough <a href="<?= $step1_link ?>"><?= $step1_name ?></a> combined" </center> </i></h1>
		  <br>
        </div>
        <!-- End: Article Header -->
        <!-- End: Article Header -->
		<!-- START IMG 1 -->
		<div class="image"><img src="<?= $assets ?>/images/gwenwr1.jpg" width="625" height="325"  alt="celine" /></div>
					<br />
						<!-- Begin: Article Header -->
				<div id="articleHeader">
				<h1 id="articleHeadline"> <center>      Will This Work For You?</center></h1>
					</div>
					<!-- End: Article Header -->
		<p>There are plenty of skincare gimmicks out there, and most of them are ridiculously expensive...As Gwen calls them 'A Skin Care Disaster'! With so many options it’s only natural for you to be sceptical about the results, and so we challenge you to <strong>try it for yourself!</strong> Conduct your own study and see the incredible results in your mirror at home. <strong>You won’t believe YOUR before and after!</strong></p>
		<br>
		<p>Once you’ve experienced this anti-aging skin saviour for yourself, please leave your comments below and share your success story with others, like Gwen has shared with you. Document the progression and prove to the world that you don’t need to spend thousands of dollars to LOOK AND FEEL GREAT. For your convenience, we have provided the links courtesy <i>People</i> for you to enjoy <strong>Free Samples</strong> of <a href="<?= $step1_link ?>"><?= $step1_name ?></a>.</p>
		<br>
		<p>Gwen Stefani wants her readers to be reassured that <strong>both serum and crème come with a 100% satisfaction guarantee</strong>. With the discounted shipping costs you will be on your way to smooth skin for under $5. But hurry, these incredible Free trials don’t last forever.<strong>Use the links below for FREE SAMPLE BOTTLES and you will get the lowest possible shipping price as well.</strong></p>




        <div id="the-latest">
          <div id="articleHeader">
				<h1 id="articleHeadline"> <center>      Just For You!</center></h1>
					</div>
					<br>
          <div class="row clearfix">
            <div class="step-bg" >
              <div class="imgcont">
                 <div class="new_step1">
                    <div class="new_step1_left">
                    <div class="new_step1_left1">
                      <img src="<?= $step1_image ?>" width="150" height="200" class="img-responsive rev" />
                      </div>
                    </div>
                    <div class="new_step1_right">
                      <div class="new_step1_right1">Step 1</div>
                      <div class="new_step1_right2">Get A Free Bottle of <?= $step1_name ?></div>
                      <div class="new_step1_right3">Offer Ends Today! Click Here!</div>
                      <div class="new_step1_right4"><a href="<?= $step1_link ?>" class="link1" target="_blank"><img src="<?= $assets ?>/images/new_trial_bott.png" alt="" /></a></div>
                    </div>
                    <div class="clear"></div>
                 </div>
              </div>

            </div>
            <div class="step-bg" data-aid="20936185">
              <div class="imgcont">
                  </div>

            </div>
          </div>
        </div>

        <div class="side_block show_mobile">
            <div class="side_title"><img src="<?= $assets ?>/images/just_for_h.jpg" alt="" /></div>
            <div class="side_img">
            <div class="new_step2">
                    <div class="new_step2_left"><img src="<?= $assets ?>/images/wrinkle-rewind-bottle.png" alt="" /></div>
                    <div class="new_step2_left1"><?= $step1_name ?> - Limited Time Offer Trial Bottle!</div>
                    <div class="new_step2_left2"><a href="<?= $step1_link ?>" class="link1" target="_blank"><img src="<?= $assets ?>/images/new_trial_bott.png" alt="" /></a></div>
                 </div>

            </div>

            <br />
            <div class="side_img">
            </div>

          </div>

        <div id="sharebarBottom" class="clearfix">
          <div class="socmedia clearfix">
            <div class="text">
              <p class="header">Share this story:</p>
            </div>
            <a class="fb_button social-button" href="<?= $step1_link ?>" title="Share on Facebook"><img src="<?= $assets ?>/images/blank.png"></a> <a class="tweet_button social-button" href="<?= $step1_link ?>" title="Tweet this article"><img src="<?= $assets ?>/images/blank.png"></a> </div>
          <div id="userReaction" class="clearfix">
            <div class="text clearfix">
              <p class="header">Your reaction:</p>
              <p class="totalvotes"></p>
            </div>
            <div class="emotes">
              <ul>
                <li class="wow">
                  <label><span class="emote-image">Wow</span> <span class="count"></span></label>
                </li>
                <li class="funny">
                  <label><span class="emote-image">Funny</span> <span class="count"></span></label>
                </li>
                <li class="love">
                  <label><span class="emote-image">Love</span> <span class="count"></span></label>
                </li>
                <li class="sad">
                  <label><span class="emote-image">Sad</span> <span class="count"></span></label>
                </li>
                <li class="angry">
                  <label><span class="emote-image">Angry</span> <span class="count"></span></label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End: Sharebar (bottom) -->
        <!-- Begin: Recent News -->
        <!--[if IE 5]> Vignette StoryServer 6.0 Wed Jul 08 02:09:31 2015 <![endif]-->

        <div id="disqusArea">
          <div id="disqus_thread">
              <div class="fotter_area">
                <div class="fotter_area_top">
                    <div class="fotter_area_top1">
                      <div class="fotter_area_top1_text">139 comments</div>
                      <div class="fotter_area_top1_text2">People</div>
                      <div class="fotter_area_top1_text3">
                      <img src="<?= $assets ?>/images/new_round_img.png" alt="" />
                      <div class="fotter_area_top1_text4"><a href="<?= $step1_link ?>">Login</a></div>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="fotter_area_top2">
                      <div class="fotter_area_top2_text1">
                      <img src="<?= $assets ?>/images/new_re_icon.png" alt="" />
                      <div class="fotter_area_top2_text2"><a href="<?= $step1_link ?>">Recommend</a></div>
                      </div>
                       <div class="fotter_area_top2_txt">
                       <div class="fotter_area_top2_txt1">
                       <img src="<?= $assets ?>/images/new_sha_icon.png" alt="" /></div>
                      <div class="fotter_area_top2_txt2"><a href="<?= $step1_link ?>">Share</a></div>
                      </div>

                      <div class="fotter_area_top2_right">
                       Sort by Best
                      </div>
                      <div class="clear"></div>
                       </div>

                    </div>
                    <div class="f_mid_l_r"><div class="fotter_area_mid">
                       <div class="fotter_area_mid_left">
                       <img src="<?= $assets ?>/images/new_com_img.png" alt="" /></div>
                       </div>
                       <div class="fotter_area_mid_right">
                       <input type="text" placeholder="Join the discussion…" />
                       </div></div>
                       <div class="clear"></div>


                       <div class="comment_area">
                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_icon1.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">Tanya</div>
                       <div class="time_comment"> 28 minutes ago</div>
                       </div>
                       <div class="mid_right_comment">
                       Gwen<3!! I can't believe we're using the same products! I feel terribly sorry for you and the kids but i'm glad you were able to keep your beauty through what your husband did to you!!! I have been using this Anti Aging trial for 3 weeks now, and I seriously look 5 years younger! Not quite as good as Gwen, but I will take it when it was less than 5 bucks for each! My crow's feet and laugh lines are melting away more and more every day. Thank you so much for reporting on this! WE LOVE YOU Gwen!!!!
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow">1</div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>

                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_icon1.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">vc</div>
                       <div class="time_comment"> 36 minutes ago</div>
                       </div>
                       <div class="mid_right_comment">
                       I saw this combo on CNN a while ago and still using the combo. I've been using the products for about 6 wks. Honestly, this is unbelievable, all I have to say is WOW Gwen is totally right! Already have my two best friends hooked on the products and they put in their order today
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>

                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_person_img.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">Laura Gwen Mattson</div>
                       <div class="time_comment"> 39 minutes ago</div>
                       </div>
                       <div class="mid_right_comment">
                       Gosh I went through something similar with my ex! And Gwen is right, this product works! A friend of mine used Wrinkle Rewind and recommended it to me 3 weeks ago. I ordered the product and received them within 3 days I think (although I didn't get the free trail offers). The results have been incredible and I can't wait to see what weeks 3 and 4 bring.
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>

                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_icon1.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">Carrie</div>
                       <div class="time_comment"> an hour ago</div>
                       </div>
                       <div class="mid_right_comment">
                       Never even thought about combining the products. Vit C and Hyaluronic Acid, it works great for Gwen Stefani, I've done my research, Thanks for the free samples guys. I'll make sure I leave my results. Good luck with you and the kids Gwen!
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       <div class="clear"></div>
                       <div class="sub_comment">
                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_person_img.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">Laura Gwen Mattson</div>
                       <div class="sub_person">Carrie</div>
                       <div class="time_comment"> 39 minutes ago</div>
                       </div>
                       <div class="mid_right_comment">
                       I saw <?= $step1_name ?> on the news. Thank you for sharing this tip! I just ordered both products.
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>
                       </div>
                       </div>

                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_icon1.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">QDpie109</div>
                       <div class="time_comment"> an hour ago</div>
                       </div>
                       <div class="mid_right_comment">
                       probably I'm a bit older than most of you folks. but this combo actually worked for me too! LOL! I wasn't expecting it to but I'm happy. I can't say anything more exciting.Thanks for your inspirations! Gwen you look better than ever, your husband is going to miss what he had!
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow">1</div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>

                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_icon1.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">guest</div>
                       <div class="time_comment"> an hour ago</div>
                       </div>
                       <div class="mid_right_comment">
                       Ordered both
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow">1</div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>

                       <div class="comment_01">
                       <div class="left_comment_01">
                       <img src="<?= $assets ?>/images/comment_p2.jpg" alt="" />
                       </div>
                       <div class="right_comment_01">
                       <div class="top_right_comment">
                       <div class="name_comment">Aussie cathie</div>
                       <div class="time_comment"> an hour ago</div>
                       </div>
                       <div class="mid_right_comment">
                       My sister went through a nasty divorce, suffered from bad aging, and she did this a few months ago, I waited to order my trials to see if it really worked and then they stopped giving out the trials! what a dumb move that turned out to be. glad to see the trials are back again, I wont make the same mistake.
                       </div>
                       <div class="bot_right_comment">
                       <a href="<?= $step1_link ?>"><div class="up_arrow">1</div></a>
                       <a href="<?= $step1_link ?>"><div class="down_arrow"></div></a>
                       <a href="<?= $step1_link ?>"><div class="reply_comment">Reply</div></a>
                      <a href="<?= $step1_link ?>"> <div class="share_comment">Share</div></a>
                       </div>
                       </div>
                       </div>

                       </div>


                    </div>
                </div>
              </div>

          </div>
        </div>


        <div id="right-rail">
        <div class="custom_sidebar">
          <div class="side_block">
            <div class="side_title"><img src="<?= $assets ?>/images/img_latest_h.jpg" alt="" /></div>
            <div class="side_img"><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/gwenmag.jpg" width="300" height="400" alt="" /></a></div>
            <div class="side_cont">
              <p><a href="<?= $step1_link ?>">Gwen is looking better than ever. Sources Say, "She has regained her confidence with her new look!"</a></p>
            </div>
          </div>
          <div class="side_block">
            <div class="side_title"><img src="<?= $assets ?>/images/img_latest_h.jpg" alt="" /></div>
            <div class="side_img"><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/gwenmag2.jpg" width="300" height="400" alt="" /></a></div>
            <div class="side_cont">
              <p><a href="<?= $step1_link ?>">"I thank everyone who has supported me through this chapter of my life and special thanks to <a href="<?= $step1_link ?>"><?= $step1_name ?></a>. My fans have always been by my side. I'm blessed!" -Gwen</a></p>
            </div>
			<br>
			<div class="side_img"><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/voice.jpg" width="300" height="230" alt="" /></a></div>
			<div class="side_cont">
              <p><a href="<?= $step1_link ?>">The Bombshell Beauty continues to show off her flawless skin on the set of the Voice!</a></p>
          </div>
		  <div class="side_img"><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/gwen-mag3.jpg" width="350" height="230" alt="" /></a></div>
          <div class="side_block" id="fix_sidebar">
            <div class="side_title"><img src="<?= $assets ?>/images/just_for_h.jpg" alt="" /></div>
            <div class="side_img">
            <div class="new_step2">
                    <div class="new_step2_left"><img src="<?= $step1_image ?>" width="150" height="200" class="imgresponsive rev"/></div>
                    <div class="new_step2_left1"><?= $step1_name ?> - Limited Time Offer Trial Bottle!</div>
                    <div class="new_step2_left2"><a href="<?= $step1_link ?>" class="link1" target="_blank"><img src="<?= $assets ?>/images/new_trial_bott.png" alt="" /></a></div>
                 </div>

            </div>

            <br />
            <div class="side_img">
            </div>

          </div>
        </div>
        <div id="rail-social-module" class="property-people selected-newsletter" data-source="inarticle_peday_rightrail" data-fsub="1113197361">
          <header>
            <div class="property-logo"></div>
            <nav class="clearfix">
              <button class="social-button facebook_button" 	data-option="facebook"	 title="Facebook"></button>
              <button class="social-button twitter_button" 	data-option="twitter"	 title="Twitter"></button>
              <button class="social-button pinterest_button" 	data-option="pinterest"	 title="Pinterest"></button>
              <button class="social-button instagram_button" 	data-option="instagram"	 title="Instagram"></button>
              <button class="social-button newsletter_button" data-option="newsletter" title="Email"></button>
            </nav>
          </header>
          <div class="arrow-bar"></div>
          <footer class="panels">
            <div class="panel facebook_panel">
              <div class="follow-copy">Follow us on Facebook:</div>
              <div class="social-widget">
                <div class="fb-like" data-href="#" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
              </div>
            </div>
            <div class="panel twitter_panel">
              <div class="follow-copy">Follow us on Twitter:</div>
              <div class="social-widget">
                <div class="twitterFix"> <a href="<?= $step1_link ?>" class="twitter-follow-button" data-show-count="true" data-lang="en" data-show-screen-name="false">Follow</a> </div>
              </div>
            </div>
            <div class="panel pinterest_panel">
              <div class="follow-copy">Follow us on Pinterest:</div>
              <div class="social-widget"> <a title="Pinterest" data-pin-do="buttonFollow" href="http://www.pinterest.com/people" target="_blank"> PEOPLE Magazine<b></b><i></i> </a> </div>
            </div>
            <div class="panel instagram_panel">
              <div class="follow-copy">Follow us on Instagram:</div>
              <div class="social-widget"> <a title="Instagram" href="http://instagram.com/peoplemag" target="_blank"> <img src="<?= $assets ?>/images/blank.png" alt="Instagram"/> </a> </div>
            </div>
            <div class="panel newsletter_panel cheetah_form">
              <div class="container">
                <form>
                  <div class="copy">Sign up for our newsletter and other special offers</div>
                  <div class="clearfix">
                    <input type="email" class="email" placeholder="Enter email address" name="footer-email"/>
                    <a class="submit-button button button-blue">go</a> </div>
                </form>
                <div class="thankyou hide">
                  <div class="copy">Thanks for signing up!</div>
                </div>
              </div>
            </div>
          </footer>
        </div>
        <!-- ***-- End: rightRailVideoHTML --*** -->

        <!-- ***-- End: cmAdBottomHTML --*** -->
        <!--[if IE 5]> Vignette StoryServer 6.0 Tue Sep 02 14:23:04 2014 <![endif]-->

        <div id="just-for-you">
          <h2>Just for You</h2>
          <ul>
            <li> <a href="<?= $step1_link ?>">Why Maksim Chmerkovskiy and Kirstie Alley Aren't Speaking</a> </li>
            <li> <a href="<?= $step1_link ?>">Chris Pratt Flashed Amy Poehler?! Hear His Take &#8211; And See Her Reaction</a> </li>
            <li> <a href="<?= $step1_link ?>"><em>The Bachelorette</em>'s Andi & Josh Are Moving In Together</a> </li>
          </ul>
        </div>
        <!-- ***-- End: justForYouHTML --*** -->
      </div>

        <!-- End: Disqus -->
      </div>


    </div>

      <div class="clear"></div>
  </div>
  <!-- END wrapper -->
  <div id="footer" class="footer-v2">
    <!-- Footer V2 CM Ad FED SSI: /people/static/h/inc/footer/cmad-v2.html -->
    <div class="footer-cmad"> </div>

    <!-- Footer V2 Links FED SSI: /people/static/h/inc/footer/footer-links-v2.html -->
    <div id="footer-v2-links">
      <div class="footer-list-wrapper">
        <h3 class="footer-list-header header-subscribe">Subscribe</h3>
        <ul class="footer-list footer-list-subscribe">
          <li> <a target="_blank" class="sub-print" href="<?= $step1_link ?>">Print Magazine</a> </li>
          <li> <a target="_blank" class="sub-access" href="<?= $step1_link ?>">All Access</a> </li>
          <li> <a target="_blank" class="sub-digital" href="<?= $step1_link ?>">Digital Plus</a> </li>
          <li> <a target="_blank" class="sub-vip" href="<?= $step1_link ?>">V.I.P.</a> </li>
          <li> <a target="_blank" class="sub-buy-box" href="<?= $step1_link ?>">Buy a Gift Box</a> </li>
          <li> <a target="_blank" class="sub-give" href="<?= $step1_link ?>">Give a Gift</a> </li>
          <li> <a target="_blank" class="sub-buy-issue" href="<?= $step1_link ?>">Buy Current Issue</a> </li>
          <li> <a target="_blank" class="sub-cust-svc" href="<?= $step1_link ?>">Customer Service</a> </li>
        </ul>
        <h3 class="footer-list-header header-advertise">Advertise With Us</h3>
        <ul class="footer-list footer-list-advertise">
          <li> <a target="_blank" class="adv-online" href="<?= $step1_link ?>">Online</a> and <a target="_blank" class="adv-magazine" href="<?= $step1_link ?>static/mediakit/">Magazine</a> </li>
        </ul>
      </div>
      <div class="footer-list-wrapper">
        <h3 class="footer-list-header header-learn-more">Learn More</h3>
        <ul class="footer-list footer-list-learn">
          <li> <a class="learn-sweeps" href="<?= $step1_link ?>">Sweepstakes</a> </li>
          <li> <a class="learn-apps" href="<?= $step1_link ?>">Mobile Apps</a> </li>
          <li> <a class="learn-premium" href="<?= $step1_link ?>">People Premium</a> </li>
          <li> <a class="learn-rss" href="<?= $step1_link ?>">RSS</a> </li>
          <li> <a class="learn-sitemap" href="<?= $step1_link ?>">Sitemap</a> </li>
          <li> <a class="learn-contact" href="<?= $step1_link ?>">Contact Us</a> </li>
          <li> <a class="learn-privacy" target="_blank" href="<?= $step1_link ?>">Privacy Policy</a> </li>
          <li> <a class="learn-california" target="_blank" href="<?= $step1_link ?>">Your California Privacy Rights</a> </li>
          <li> <a class="learn-tos" target="_blank" href="<?= $step1_link ?>">Terms of Service</a> </li>
          <li> <a class="learn-choices" target="_blank" href="<?= $step1_link ?>">Ad Choices</a> </li>
          <li> <a class="learn-celebs" href="<?= $step1_link ?>celebrities">Celebrities</a> </li>
        </ul>
      </div>
      <div class="footer-list-wrapper footer-social-wrapper">
        <h3 class="footer-list-header header-connect">Connect</h3>
        <ul class="footer-list footer-list-social">
          <li> <a target="_blank" class="footer-list-fb" href="<?= $step1_link ?>"><span></span>Facebook</a> </li>
          <li> <a target="_blank" class="footer-list-twitter" href="<?= $step1_link ?>"><span></span>Twitter</a> </li>
          <li> <a target="_blank" class="footer-list-plus" href="<?= $step1_link ?>"><span></span>Google Plus</a> </li>
          <li> <a target="_blank" class="footer-list-instagram" href="<?= $step1_link ?>"><span></span>Instagram</a> </li>
          <li> <a target="_blank" class="footer-list-pinterest" href="<?= $step1_link ?>"><span></span>Pinterest</a> </li>
          <li> <a target="_blank" class="footer-list-tumblr" href="<?= $step1_link ?>"><span></span>Tumblr</a> </li>
          <li> <a target="_blank" class="footer-list-foursquare" href="<?= $step1_link ?>"><span></span>Foursquare</a> </li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <!-- Footer V2 Newsletter FED SSI: /people/static/h/inc/footer/footer-v2-newsletter.html -->
    <div id="footer-v2-newsletter">
      <div id="newsletter_signup_footer_2" class="clearfix cheetah_form">
        <div class="container">
          <form id="newsletter-footer-form" name="newsletter-footer-form" action="http://ebm.cheetahmail.com/r/regf2" target="footer-submitiframe" method="post">
            <input type="hidden" name="aid" value="1078530696" />
            <input type="hidden" name="n" value="53" />
            <input type="hidden" name="PEOPLE_SOURCE" value="footer_newsletter_form" />
            <div class="copy">Sign up for our newsletter and other special offers</div>
            <div class="container">
              <ul class="clearfix">
                <li>
                  <input value="1113197361" id="footer-people-daily" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-people-daily">People News</label>
                </li>
                <li>
                  <input value="2094088252" id="footer-great-ideas" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-great-ideas">Great Ideas</label>
                </li>
                <li>
                  <input value="2096770716" id="footer-red-carpet" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-red-carpet">Red Carpet</label>
                </li>
                <li>
                  <input value="2097095387" id="footer-true-crime" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-true-crime">True Crime</label>
                </li>
                <li>
                  <input value="1591168968" id="footer-stylewatch" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-stylewatch">StyleWatch</label>
                </li>
                <li>
                  <input value="2095348458" id="footer-country" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-country">Country</label>
                </li>
                <li>
                  <input value="2068129263" id="footer-moms-babies" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-moms-babies">Moms &amp; Babies</label>
                </li>
                <li>
                  <input value="2068954055" id="footer-people-pets" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-people-pets">Pets</label>
                </li>
                <li>
                  <input value="2097094732" id="footer-royals" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-royals">The Royals</label>
                </li>
                <li>
                  <input value="2097213713" id="footer-giveaways" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-giveaways">Giveaways</label>
                </li>
                <li>
                  <input value="2097082335|2096806353" id="footer-tv-watch" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-tv-watch">TV Watch</label>
                </li>

                <!-- Selecting TV Watch will automatically check add these newsletters -->
                <li class="tv-subs">
                  <input value="2097082335" id="footer-duggars" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-duggars">The Duggars</label>
                </li>
                <li class="tv-subs">
                  <input value="2096806353" id="footer-bachelor" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-bachelor">The Bachelor</label>
                </li>
                <!-- End: TV Watch subs -->

                <li>
                  <input value="" id="footer-select-all" name="sub" class="checkbox" type="checkbox" checked="" />
                  <label for="footer-select-all">All</label>
                </li>
              </ul>
            </div>
            <div class="clearfix">
              <div class="footer-newsletter-error"></div>
              <input id="footer-newsletter-email" type="text" class="email placeholder" name="email" value="Enter email address" onfocus="if(this.value == 'Enter email address') { this.value = ''; }" />
              <input class="submit-button" type="submit" name="submit" value="Sign Me Up" onclick="showThankYou()" />
            </div>
          </form>
          <iframe id="footer-submitiframe" name="footer-submitiframe" border="0" frameborder="0" height="0"></iframe>
          <div class="thankyou hide">
            <div class="copy">Thanks for signing up!</div>
            <ul>
              <li class="thankyou-people-daily hidden">People News</li>
              <li class="thankyou-great-ideas hidden">Great Ideas</li>
              <li class="thankyou-red-carpet hidden">Red Carpet</li>
              <li class="thankyou-true-crime hidden">True Crime</li>
              <li class="thankyou-stylewatch hidden">StyleWatch</li>
              <li class="thankyou-country hidden">Country</li>
              <li class="thankyou-moms-babies hidden">Moms &amp; Babies</li>
              <li class="thankyou-people-pets hidden">Pets</li>
              <li class="thankyou-royals hidden">The Royals</li>
              <li class="thankyou-giveaways hidden">Giveaways</li>
              <li class="thankyou-tv-watch hidden">TV Watch</li>
              <li class="thankyou-select-all hidden">All</li>
            </ul>
          </div>
          <p class="see-all-link"><a class="see-all" href="<?= $step1_link ?>">See all newsletters</a></p>
        </div>
      </div>
    </div>
    <div class="clear"></div>

    <!-- Footer V2 Copyright FED SSI: /people/static/h/inc/footer/copyright-v2.html -->
    <div class="copyright-wrapper">
      <p class="copyright">Copyright &#169; 2015 Time Inc. All rights reserved. Reproduction in whole or in part without permission is prohibited.</p>
    </div>

    <!-- Footer V2 End FED SSI: /people/static/h/inc/footer/end-v2.html -->

    <!-- Gutter Social Sticky -->
    <div id="social_sticky" class="hide">
      <div id="gutter"> <a class="ssg-fb" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="ssg-twitter" href="<?= $step1_link ?>"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="ssg-instagram" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="ssg-newsletter" href="javascript:return false;"><img src="<?= $assets ?>/images/blank.png"/></a> <a class="ssg-subscribe" href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/images/blank.png"/></a> </div>
      <div id="ssg_newsletter_popup" class="hide cheetah-form">
        <div class="container">
          <form>
            Sign up for our daily newsletter and other special offers.
            <fieldset>
              <input class="email" type="email" value="Enter Your Email Address" name="email"/>
              <a class="submit-button"><img src="<?= $assets ?>/images/blank.png"/></a>
            </fieldset>
            <ul class="clearfix hide">
              Choose your newsletters
              <li>
                <input value="1113197361" id="people-daily" name="people-daily" class="checkbox" type="checkbox" checked/>
                <label for="people-daily">PEOPLE Daily</label>
              </li>
              <li>
                <input value="2094088252" id="great-ideas" name="great-ideas" class="checkbox" type="checkbox" checked/>
                <label for="great-ideas">Great Ideas</label>
              </li>
              <li>
                <input value="1591168968" id="stylewatch" name="stylewatch" class="checkbox" type="checkbox" checked/>
                <label for="stylewatch">StyleWatch</label>
              </li>
              <li>
                <input value="2068954055" id="people-pets" name="people-pets" class="checkbox" type="checkbox" checked/>
                <label for="people-pets">Pets</label>
              </li>
              <li>
                <input value="2068129263" id="moms-babies" name="moms-babies" class="checkbox" type="checkbox" checked/>
                <label for="moms-babies">Moms and Babies</label>
              </li>
            </ul>
          </form>
          <div class="thankyou hide"> <strong>Thank you for signing up!</strong> <span>Your request may take up to one week to be processed.</span>
            <form>
              <ul class="clearfix">
              </ul>
            </form>
          </div>
          <a class="see-more" href="<?= $step1_link ?>static/h/preference-center/pc-default.html">see all newsletters</a> </div>
        <div class="subscribe-trigger"></div>
      </div>
    </div>
    <!-- END Gutter Social Sticky -->

  </div>
  <!-- END footer -->
  <br />
  <br />
</div>
<!-- END content -->

<!-- including /people/static/h/inc/global/ppl-remarketing-tags.txt -->
<!-- Google Code for People Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->

<!-- Floating Header FED SSI: /people/static/h/inc/navigation/floating-header.html -->
<!-- (Empty, except for "clear" div.) -->
<div class="clear"></div>
<!-- END floating-header -->
<!-- <script src="base64.js"></script> -->
<script src="<?= $assets ?>/jquery.sticky-sidebar-scroll.js"></script>


</body>
</html>
