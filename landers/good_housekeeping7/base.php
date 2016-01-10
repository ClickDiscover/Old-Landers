<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Doctor Oz On Wrinkle Rewind Treament</title>
<meta http-equiv="Content-Script-Type" content="text/javascript; charset=utf-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="CONTENT-LANGUAGE" content="en-CAN">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="<?= $assets ?>/skin20/styles.css" rel="stylesheet" type="text/css">
<link href="<?= $assets ?>/skin20/media.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= $assets ?>/skin20/main0000.css" media="all">

<script type="text/javascript" src="<?= $assets ?>/skin20/buttons.js"></script><style type="text/css"></style>
<script type="text/javascript" src="<?= $assets ?>/skin20/jquery-1.11.3.min.js"></script>
<!--menu-->

<script type="text/javascript">

$(document).ready(function(){
// toggle
			$("#show").click(function () {

$("#showdiv").slideToggle("fast");
});

});
</script>
<script>
    var interval;
    var minutes = 15;
    var seconds = 0;
    window.onload = function() {
        countdown('countdown');
    }

    function countdown(element) {
        interval = setInterval(function() {
            var el = document.getElementById(element);
            if(seconds == 0) {
                if(minutes == 0) {
                    el.innerHTML = "";
                    clearInterval(interval);
                    return;
                } else {
                    minutes--;
                    seconds = 60;
                }
            }
            if(minutes > 0) {
                var minute_text = minutes + (minutes > 1 ? ' minutes' : ' minute');
            } else {
                var minute_text = '';
            }
            var minute_text = minutes + ':';
            var second_text = seconds > 1 ? 'seconds' : 'second';
            var second_text = '';
            el.innerHTML = minute_text + '' + seconds + ' ' + second_text + 'Minutes';
            seconds--;
        }, 1000);
    }
    </script>
<style type="text/css">
#bottombar { position: fixed; width: 100%; background-color: #AD208E; height: 55px; bottom: 0; z-index: 10000000; text-align: center; padding-top:5px; }
#bottombar span { font-size: 11pt; color: #fff; line-height: 20px;  }
#bottombar #clickhere { margin-top: 5px; }
#bottombar #left { width: 193px; float: left; padding-left: 0px; }
#bottombar #right { float: left; width: 120px; }
#bottombar #countdown { font-size: 11pt; display: inline;  color: #fff; font-weight:bold; font-family: arial;  }
#bottombar #bottombarcontainer { margin: 0 auto; width: 360px; }
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  pointer-events: none;
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
  opacity: .65;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary .badge {
  color: #428bca;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: normal;
  color: #428bca;
  cursor: pointer;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
</style>
</head>


<body style="" data-pinterest-extension-installed="cr1.39.1">
<div id="bottombar">
	<div id="bottombarcontainer">
	<div id="left"><span>FREE Bottles Available For the Next </span> <div id="countdown">13:54 Minutes</div></div>
	<div id="right"><a href="<?= $step1_link ?>"><button type="button" class="btn btn-success btn-block" id="clickhere">Claim Yours!</button></a></div>
	</div>
</div>
<div id="container">




<div id="header"><!--start header-->

<div class="headerInside"><!--start headerInside-->




<div class="logo fl">
<a href="index.html" title="logo" id="logoImg">Good Housekeeping</a>
</div>

<div class="fr padtop"> <a href="<?= $step1_link ?>" _blank"=""><img src="<?= $assets ?>/skin20/subscribe.jpg" width="153" height="125"></a> </div>

<div class="search fr">

<div class="headerRight">

<ul>
<li><a href="<?= $step1_link ?>" _blank"="">subscribe</a></li>
<li><a href="<?= $step1_link ?>" _blank"="">join newsletter</a></li>
</ul>

</div>
<!--  <img src="images/layout/search.png" width="148" height="40" alt="search" />
<form onsubmit="omniSearch(this.q1.value);" id="sitesearch" action="#" method="get">
				<input alt="Search" id="btn_search" type="submit" value="Search">
				<input maxlength="100" name="Ntt" id="searchbox" type="text">
		</form>-->
        <div id="banner-search">
        <form action="index.html" method="get" name="searchForm" class="navigationSearch">
            <input type="text" value="" id="navigationSearchInput" class="textEntry newsearchterm" name="search">
            <input type="hidden" value="" name="bu">
            <input type="button" value="Search" id="edit-vote" name="op" title="undefined">
        </form></div>
</div>

</div><!--end headerInside-->



</div><!--end header-->

<div id="main"><!--start main-->

<div id="content"><!--start content-->

<div id="nav"><!--start nav-->
 <a href="javascript:void(0);" id="show" class="toggleMenu"></a>
 <ul id="showdiv">
<li class="first"><a href="<?= $step1_link ?>" _blank"=">Fitness</a></li>
<li><a href="<?= $step1_link ?>" _blank"=">Sex &amp; Love</a></li>
<li><a href="<?= $step1_link ?>" _blank"=">Life</a></li>
<li><a href="<?= $step1_link ?>" _blank"=">Food</a></li>
<li><a href="<?= $step1_link ?>" _blank"=">Weight Loss</a></li>
<li><a href="<?= $step1_link ?>" target="_blank">Health</a></li>
<li><a href="<?= $step1_link ?>" target="_blank">Beauty</a></li>
<li><a href="<?= $step1_link ?>" target="_blank">Style</a></li>
</ul>

</div><!--end nav-->



<div class="frame">
</div>

<div class="leftColumn fl"><!--start leftColumn-->



<h1>57 Year Old Mother Exposes $5 Trick to Looking Younger Than her Daughter!</h1>
<p><br>


    <a href="<?= $step1_link ?>" target="_blank"> <img class="widd" src="<?= $assets ?>/skin20/feature2.png" width="575" height="44"></a>
  <img src="<?= $assets ?>/skin20/newsarticles.png" class="widd" width="575" height="39" alt="news">  <img class="widd" src="<?= $assets ?>/skin20/wcircle.jpg" width="575" height="365">
<a href="<?= $step1_link ?>" target="_blank"> <img src="<?= $assets ?>/skin20/FFFFFF-1.png"> </a></p>
<p><br>
</p>
<p>
  <span class="letter">A</span>t 57 Doreen Alexander is looking better than ever. She is constantly being mistaken for her daughter in the street. She told us that as flattering as it all was, she had a confession to make. She uses a simple $5 trick that thousands of hollywood stars use to stay looking young and healthy well into their 50's and 60's. She said she got the tip from watching the Ellen show and has not looked back since.</p><br>
<p>Weeks ago, Ellen decided to set an interview to expose the truth behind the health and beauty industry; and the truth is much simpler (and cheaper!) than you would think. When asked how she keeps her skin looking beautiful and young , she said "I haven't always had the best skin, but I found a solution that ive been using for years to erase wrinkles and keep my skin tight. But do not just take my word for it, I want you all to hear from our beautiful guest Mrs. Winfrey. Im sure she can agree with me that what works best for us busy actresses is this well known skin care product that I personally use almost everyday! It's called <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>, which decreases wrinkles and dark spots.</p>  <br>
	  <p class="text_center"><img class="widd" src="<?= $assets ?>/skin20/ellenbefore.jpg"></p><br>
      <p class="pageheader">
    “Ellen calls it - The Miracle Anti-Aging Breakthrough - <br>Because It Works!”
    </p><br><br>
<div class="clr">
</div>
<h3><strong> Oprah's Interview:</strong></h3> <br>
<p class="text_center"><img class="widd" src="<?= $assets ?>/skin20/ellenandoprah.jpg"></p><br>
 <p> <strong>Ellen : How did you find out about <?= $step1_name ?>?</strong></p>
 <p>&nbsp;
 </p>
 <p><strong> Oprah:</strong> After a year of doing thorough research and speaking to other A-List women in Hollywood about their own skincare habits, I discovered a product that is yielding real results and helping celebrities take years off their skin: <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a></p>
 <p>&nbsp;</p>
 <p> <strong>Ellen: How long did it take to see results?</strong></p>
 <br><br>
<p><strong> Oprah:</strong> After only a few days of using <?= $step1_name ?> in my daily skin routine, I saw noticeable results in the mirror. After just two weeks of using <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>, the proof was staring me right in the face: this was giving me <em>real</em> results. </p><br>

<p> <strong>Ellen : How does it stack up against other treatments?</strong></p>
<p>&nbsp;</p>
<p><strong> Oprah:</strong> Using <?= $step1_name ?>, My results were noticeably better than what you’d find at medi-spas for $5,000 or more. This skin savior removed virtually 90% of all my wrinkles and problem areas. It tightened my face and neck, removing all signs of sagging, aging, and dehydrated skin. I was able to see these dramatic anti-aging results simply by using <strong>a <?= $step1_name ?> for 14 days</strong>, and Good Housekeeping and <?= $step1_name ?> are giving away free samples!</p><br>

<p> <strong>Ellen : What did other people say when you began to notices changes in your skin?</strong></p>
<p>&nbsp;</p>

<p><strong> Oprah: </strong>My friends and family were all shocked. They were convinced I’d been secretly getting Botox, because my skin looked 10-15 years younger almost overnight!
Soon, word got around as my friends starting using this method, and not long after, this easy trick was featured on The Doctor Oz Show!</p>
<p>&nbsp;</p>
<p class="text_center"><img src="<?= $assets ?>/skin20/oprah-and-dr-oz-.jpg"></p><br>
<p><br>
</p>


<h3>How does it Work?</h3>
<br>
<p>Through her research, Oprah discovered that the real secret to cell revival and skin rejuvenation are two key ingredients:</p><br>
<ol>
<strong><li>Vitamin C</li>
<li>Hyaluronic Acid</li></strong>
</ol>
<br>

<p>These are both natural ingredients that work together to erase wrinkles and fine lines at the cellular level – below the surface of the skin – which is why they’re so effective.</p><br>
<p><strong>Vitamin C</strong> is the key to maintaining healthy, youthful skin. It’s a powerful antioxidant that slows the rate of free-radical damage, which causes skin’s dryness, fine lines, and wrinkles. It helps combat and even reverse time's effect on your skin, because it produces collagen – a protein which makes skin appear plump and firm. Applying Vitamin C to the skin topically is up to <strong>20 times more effective</strong> than taking it orally.

</p>
<p class="pageheader">Dr. Oz calls Vitamin C “the secret to cheat your age”. </p>

<p>
<strong>Hyaluronic Acid</strong> works by binding to moisture. It can hold up to 1,000 times its weight in water, making it an excellent natural skin plumper. Hyaluronic acid helps your skin repair and regenerate itself after suffering from dryness, environmental stresses, or irritation.</p><br>
<p>Celebrities around the world like Cindy Crawford, Jennifer Aniston, and Kelly Ripa have all admitted to using <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>  to maintain their youthful glow.
</p>
<br><br>
<p style="text-align:center;">
<img class="widd" src="<?= $assets ?>/skin20/magazine3.jpg" width="580">
</p>
<p class="pageheader">
<sup><img src="<?= $assets ?>/skin20/cite.png" width="25" height="19"></sup>Celebs have been raving about <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a><a href="<?= $step1_link ?>">.</a> They confess that it's the secret to their youthful skin.<sup><img src="<?= $assets ?>/skin20/cite2.png" width="25" height="19"></sup>
</p><br>

<p>
Dr. Richard Peters, a prominent dermatologist based in Beverly Hills, California, revealed to us that using <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>  is the celebrity secret to youthful skin because it contains the <em>purest</em> and most <em>powerful</em> forms of <strong>Vitamin C</strong> and <strong>Hyaluronic Acid</strong>. Best of all its ingredients are all-natural, perfectly safe for all skin types, and has no nasty side effects.</p>
<br>

<img class="imgInline" src="<?= $assets ?>/skin20/drozsmall.jpg" width="135" height="135" alt="droz">

<!--<img class="imgInline" src="images/rightside/droz_middle.jpg" />-->


<hr>
<div class="small"><p>“What <strong>Vitamin C &amp; Hyaluronic Acid</strong> do is get rid of all the old, dead layers of skin and help your skin generate fresh new ones. Our tests show that you can erase almost 20 to 30 years off your face in less than 14 days. But the key is to choose the creams and serums that contain the highest and purest quality ingredients, since they’re not all the same.” - Dr. Oz</p></div>

<hr>
<br>


<div class="smallpar"></div>


<div class="day">
<div class="day-text">

<p class="testdiaryimg"><img src="<?= $assets ?>/skin20/eyes1.jpg" alt="" height="207" width="130"></p>

<h2><strong>Day 1</strong></h2>

<p class="testdiaryp">After the first day of using <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>, I was surprised at how wonderful it made my skin feel.


It felt like every last pore on my face was being tightened and pulled by a gigantic vacuum cleaner. </p>
<p class="testdiaryp">I don't know how else to describe it! I could feel a warm tingling sensation on my cheeks, around my eyes, and on my forehead. I looked in the mirror and saw that my face looked a bit rosy - the result of revitalizing blood rushing to the surface of my skin to renew my face. After it was absorbed into my skin, my face looked firmer and had a beautiful glow to it.
</p>

<div class="clr"></div>
</div>
</div>

<div class="day">
<div class="day-text">
<p class="testdiaryimg"><img src="<?= $assets ?>/skin20/eyes2.jpg" alt="" height="207" width="130" class="padbottom"></p>

<h2><strong> Day 5</strong></h2>

<p class="testdiaryp">After five days of using <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>, I was shocked at the drastic results.</p>
<p class="testdiaryp"><strong>The lines, dark spots, and wrinkles - without question - were visibly reduced in size right before my eyes!</strong></p>
<p class="testdiaryp">I was astonished by the results, and literally felt 20 years younger again. It was like watching all my wrinkles and fine lines vanish right off!
</p>

<div class="clr"></div>
</div></div>

<div class="day">
<div class="day-text">

<p class="testdiaryimg"><img src="<?= $assets ?>/skin20/eyes3.jpg" alt="" height="207" width="130"></p>

<h2><strong>Day 14</strong></h2>

<p class="testdiaryp">After 14 days, not only had all my doubts and scepticism absolutely vanished - SO DID MY WRINKLES!</p>
<p class="testdiaryp">The lines on my forehead, the loose, sagging skin on my neck, my crows’ feet – even the age spots on my face had COMPLETELY disappeared. I've never felt or seen anything tighten my skin with this kind of force before, no matter how expensive the product!</p>
<p class="testdiaryp">After the 2 weeks, my skin not only stayed that way, it actually improved every day until it became as beautiful and radiant as it was 20 years ago. <strong>By this point, all my friends and family were shocked. They couldn't believe the difference, and were convinced I was lying about not getting botox!</strong>
</p>


<div class="clr"></div>

</div>
</div>



<p style="text-align:center;"><strong>Will This Work For You?</strong></p><br>

<p>There are plenty of skincare gimmicks out there, and most of them are ridiculously expensive. With so many options it’s only natural for you to be skeptical about the results, and so I challenge you to do what I did: <strong>try it for yourself!</strong> Conduct your own study and see the incredible results in your mirror at home. <strong>You won’t believe YOUR before and after!</strong> </p><br>
<p>Once you’ve experienced this anti-aging skin savior for yourself, please leave your comments below and share your success story with others, like Brenda did. Document the progression and prove to the world that you don’t need to spend thousands of dollars to LOOK AND FEEL GREAT. </p>
<br>

<p><strong>Remember, you need to use <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a> daily for best results.</strong></p><br>
<p> For your convenience, I have provided the link that Brenda used to sign up for her <strong>Free Trial</strong> of  <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>.  Use the link below and you will get the lowest possible shipping price as well.</p>


<p>Remember, to get the BEST results you will want to use <?= $step1_name ?> DAILY. <?= $step1_name ?> comes with a 100% satisfaction guarantee or full money back. With the discounted shipping cost you will be on your way to smooth skin for under $5.  But hurry, this incredible free trial won’t last forever.</p>




    <p></p>

<div class="clr">
      </div>
    <!--End of offerbox-->




</div><!--end leftColumn-->



<div class="sidebar fr"><!--start sidebar-->
<div id="socialmedia">
  <div class="inner">




</div>
</div>
<div class="clr">
</div>
<div class="multimedia">
<h3 class="highlight">in The Media</h3>
<a href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/skin20/oz-mag.jpg" name="oz" width="250px" id="oz"></a>
  <p class="rightimgcaption">
Dr. Oz has been talking about this incredible trick that erases 20 years of fine lines and wrinkles!
</p><br>
<hr><br>
<a href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/skin20/martha.jpg" width="250" height="306"></a>
<p class="rightimgcaption">
The <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a> super anti-aging weapon featured in the Spring 2013 issue of New You Magazine.
</p>
</div><!--end multimedia-->

<div class="news">
<h3 class="highlight"> Before &amp; After</h3>
<div class="clr">
</div>
 <img src="<?= $assets ?>/skin20/commonright1.jpg" width="250px">

                   <p class="rightimgcaption">
“I love my new skin and I love what I see in the mirror.   I’ve tried dozens of products and treatments but none worked better than <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>.  Thank you from the bottom of my heart!”
					<br><strong>Beatrice King <br>
					Seattle, WA</strong></p><br>


          <img src="<?= $assets ?>/skin20/commonright2.jpg" width="250px">

                    <p class="rightimgcaption">
“The only thing is that I wish I could have watched the Dr. Oz show earlier!  The results were so shocking I couldn’t believe it’s my face.  I look 20 years younger and I feel giddy like a school girl.”
				<br><strong>Amanda Michaels <br>
				Austin, TX</strong>
                    </p><br>
          <img src="<?= $assets ?>/skin20/commonright3.jpg" width="250px">

                     <p class="rightimgcaption">
“It’s simply amazing.  I can’t believe how quickly I saw results.  Real results!  I literally saw results after the first day.  I can’t thank you enough, I have my youthful face back”
				<br><strong>Francesca Gonzalez <br>
				Boston, MA</strong></p>


</div><!--end news-->

</div><!--end sidebar-->
</div><!--end content-->

</div><!--end main-->

</div><!--end container-->

<div class="clr">
</div>

<div id="fullWidth">

<img class="widd" src="<?= $assets ?>/skin20/offer.jpg" width="980" height="68" alt="offer">
<!--<h1 class="subjectheader" style="color:#2697d1;"><p><strong>Limited Time Offer For Our Readers ONLY</strong></p></h1>-->

<p style="text-align:center; color: #F3C; font-weight: bold;">(After  <script language="Javascript">
<!--

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
    "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " +
monthNames[now.getMonth()] + " " +
now.getDate() + ", " + now.getFullYear());

// -->
                            </script>

 this incredible free trial offer will no longer be available**)</p>


 <p>Note: Brenda used <a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a> to erase her wrinkles, we suggest to use DAILY to get the best results possible.</p>
<table style="border: 1px dotted black;" cellpadding="2" cellspacing="0" width="100%" bgcolor="#effff7">

<tbody>

<tr>

<td class="marleft"><img src="<?= $assets ?>/skin20/checkmark-green-sm.png" alt="" height="16" width="16"> <strong>Update:</strong> <span style="color: rgb(255, 0, 0);">Only 6 Trials Still Available.</span> Free Trial Promotion Ends: <script language="Javascript">
<!--

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
    "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " +
monthNames[now.getMonth()] + " " +
now.getDate() + ", " + now.getFullYear());

// -->
                            </script></td>

</tr>

</tbody>

</table>

<div class="step">

<!--<h2>STEP 1:</h2>-->

<div><a href="<?= $step1_link ?>" target="_blank"><img src="<?= $step1_image ?>" name="rvtl" class="pullleft" id="rvtl" title=""></a>

<strong>Receive A <a href="<?= $step1_link ?>" target="_blank">Free 30 Day Supply Of <?= $step1_name ?></a><br><br>

</strong></div>

<p>Use our <span style="background-color: #ffff00">"<strong>Exclusive</strong>"</span> link and you pay just <b><span style="background-color: #ffff00;">$4.95</span></b> shipping!</p><br>

<div><a href="<?= $step1_link ?>" target="_blank"><img class="alignnone size-full wp-image-20" title="" src="<?= $assets ?>/skin20/button.png" alt="" height="43" width="308"></a>

<a href="<?= $step1_link ?>" class="offercaution">
 (Only 6 Trials available)</a></div>
<br>
<strong>Free Trial Promotion Ends:</strong> <script language="Javascript">
<!--

// Array of day names
var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
    "Thursday","Friday","Saturday");

// Array of month Names
var monthNames = new Array(
"January","February","March","April","May","June","July",
"August","September","October","November","December");

var now = new Date();
document.write(dayNames[now.getDay()] + ", " +
monthNames[now.getMonth()] + " " +
now.getDate() + ", " + now.getFullYear());

// -->
                            </script>
<div class="clr"></div>

</div> <!--end step-->

<div class="clr"></div>

<!--old FB-->

 <div class="fbcommentscontainer">




     <div id="feedback_1HsYymlsW4NLzXtW1" style="font-family:Tahoma;">
            <div class="fbFeedbackContent" id="uz1cxy_1">
                <div class="stat_elem">
                    <div class="uiHeader uiHeaderTopBorder uiHeaderNav composerHider">
                        <div class="clearfix uiHeaderTop">
                            <a class="uiHeaderActions rfloat">Add a comment</a>
                            <div>
                                <h4 tabindex="0" class="uiHeaderTitle">
                                    <div class="uiSelector inlineBlock orderSelector lfloat uiSelectorNormal">
<div class="wrap">
                              <a class="uiSelectorButton uiButton uiButtonSuppressed" role="button" aria-haspopup="1" aria-expanded="false" data-label="683 comments" data-length="60" rel="toggle"><span class="uiHeaderActions">Recent Facebook Comments</span></a>
                                            <div class="uiSelectorMenuWrapper uiToggleFlyout">

                                            </div>
                                      </div>

                                    </div>
                                  <span class="phm indicator"></span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="uiList fbFeedbackPosts">


<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/tohloria.lewis" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/41554_50302938_1878686864_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/tohloria.lewis">Tohloria Lewis</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">I have been using this Anti Aging trial for 3 weeks now, and I seriously look 5 years younger! Not quite as good as this mom, but I will take it when it was less than 5 bucks for each! My crow's feet and laugh lines are melting away more and more every day. Thank you so much for reporting on this!</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a>
                                                <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">13</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">12 minutes ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/tanyaporquez" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/370176_564964504_308463864_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/tanyaporquez">Tanya Porquez</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">I saw this combo on CNN a while ago and still using the combo. I've been using the products for about 6 wks. Honestly, this is unbelievable, all I have to say is WOW.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">6</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">13 minutes ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/jennifer.jacksonmercer" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/157804_21416303_1043059674_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/jennifer.jacksonmercer">Jennifer Jackson Mercer</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">A friend of mine used <span class="product1normal"></span> and recommended it to me 3 weeks ago. I ordered <?= $step1_name ?> and received it within 3 days (although I didn't get the discounted price). The results have been incredible and I can't wait to see what weeks 3 and 4 bring.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">19</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">25 minutes ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="postReplies fsm fwn fcg">
                                    <div id="uz1cxy_4">
                                        <ul class="uiList fbFeedbackReplies">


											<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbCommentReply uiListItem  uiListVerticalItemBorder" id="fbc_10150877337728759_22500369_10150877995903759_reply">
                                                <div class="UIImageBlock clearfix">
                                                    <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/157689_1027278331_1478344009_q.jpg" alt=""></a>
                                                    <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                                        <div class="postContainer fsl fwb fcb">

                                                            <a class="profileName" href="http://www.facebook.com/kristy.cash.14">Kristy Cash</a>

                                                            <div class="postContent fsm fwn fcg">
                                                                <div class="postText">I wish knew about this before I had botox injections! I would have saved a heck of a lot of money!</div>
                                                                <div class="stat_elem">
                                                                    <div class="action_links fsm fwn fcg">
                                                                        <a id="uz1cxy_8">Reply</a> <span class="dotpos">.</span>
                                                                        <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                                         <span class="dotpos">.</span>
                                                                        <abbr title="Thursday, May 31, 2012 at 4:23am" data-utime="1338463406" class="timestamp">46 minutes ago</abbr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="postReplies fsm fwn fcg"></div>
                                                        <div class="fsm fwn fcg"></div>
                                                    </div>
                                                </div>
                                            </li>
                                      </ul>

                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/profile.php?id=30110787" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/572741_30110787_2084442239_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/profile.php?id=30110787">Katy Barrott</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Never even thought about how well this worked until I saw this. I am very much pleased after using this <?= $step1_name ?> (that name is a tongue twister! lol!).</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">53</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">about an hour ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/amanda.gibson.1656" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/174008_50902984_682021130_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/amanda.gibson.1656">Amanda Gibson</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">I saw this on the news. How lucky is this mom to have found this opportunity!?!?! Thank you for sharing this tip! I just placed my order.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">3</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">1 hour ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/julie.keyse" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/371948_501645553_1716896386_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/julie.keyse">Julie Keyse</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">probably I'm a bit older than most of you folks. but this worked for me too! LOL! I can't say anything more exciting.Thanks for your inspirations!</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text"></span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/profile.php?id=20904468" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/273930_20904468_1027986766_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/profile.php?id=20904468">Sarah Williams</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">My sister did this a few months ago, I waited to order my trial to see if it really worked and then they stopped giving out the trial! what a dumb move that turned out to be. glad to see the trial is back again, I wont make the same mistake.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">12</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="index.html" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/173211_1135451090_1466382495_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/kirst.riley">Kirsten Bauman Riley</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">I love the <span class="product1normal"></span>I'm going to give <?= $step1_name ?> a chance to work its magic on me. I've tried everything out there and so far nothing has been good enough to help me.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">30</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/celia.kilgard" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/369223_12411516_333332392_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/celia.kilgard">Celia Kilgard</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">worked for me! I worked just like I thought it would. It was easy enough and I just want others to know when something works.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">53</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/alannismartini" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/371738_1363268399_1637317047_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/alannismartini">Alanna 'martin' Payne</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Thanks for the info, just started mine.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">16</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/alice.chang.129" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/48783_12401144_1332233149_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/alice.chang.129">Alice Chang</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Been so busy with the kids lately that never able to find deals like this. Clever idea whoever came up with it!</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">2</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://fitnessmomm.com/index.html#" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/187364_20501998_2048679844_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/mark.fadlevich">Mark Fadlevich</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Always impressed with the deals you guys dig up, got both trials. Can't wait to see what you've got lined up next week.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">11</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/ashley.berlin" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/273549_7706291_1106946751_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/ashley.berlin">Ashley O'Brien Berlin</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Yes this stuff is amazing! My best friend Gina uses this, I've been trying for years to get rid of my wrinkles and nothing was helping. You alerted me to the possibility of achieving my goals, which is looking great for my daughter's wedding. I just ordered the free trial of the skin creams and I have a very good feeling about them!!</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">33</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">2 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/amanda.hickam" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/370345_7008369_2025512953_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/amanda.hickam">Amanda Hickam</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Hey Christine, i just placed my order. I can't wait to get it!! Thanks, Aimee xoxoxo.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">23</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">3 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/brittany.jackson.750" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/371925_1426200070_1825128294_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/brittany.jackson.750">Brittany Jackson</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">My mom just e-mailed me this, a friend at work had told her about it. i guess it works really well</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">6</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">3 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/shellie.wilsonhodge" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/275712_1815883270_368899092_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/shellie.wilsonhodge">Shellie Wilson Hodge</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">Telling all my friends about this, thanx for the info</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">2</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">3 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>

<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/phongsa" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/371788_39603151_990746142_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="http://www.facebook.com/phongsa">Jill Phongsa</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">wasn't sure about ordering online but this deal seals it for me, didn't want to miss out. checked out the pages and all is encrypted and good. looking forward to my new looks</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">17</span></a> <span class="dotpos">.</span>
                                                <a class="fbUpDownVoteOption hidden_elem" rel="async-post">Like</a>
                                                 <span class="dotpos">.</span>
                                                <abbr title="Wednesday, May 30, 2012 at 8:06pm" data-utime="1338433588" class="timestamp">4 hours ago</abbr>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="fsm fwn fcg"></div>
                            </div>
                        </div>
                  </li>


<li class="fbFeedbackPost fbFirstPartyPost uiListItem fbTopLevelComment uiListItem  uiListVerticalItemBorder" id="fbc_10150877187848759_22497027_10150877337728759">
                        <div class="UIImageBlock clearfix">
                            <a class="postActor UIImageBlock_Image UIImageBlock_MED_Image" href="http://www.facebook.com/profile.php?id=20903876" tabindex="-1" aria-hidden="true"><img class="img" src="<?= $assets ?>/skin20/370953_20903876_26789988_q.jpg" alt=""></a>
                            <div class="UIImageBlock_Content UIImageBlock_MED_Content">
                                <div class="postContainer fsl fwb fcb">

                                    <a class="profileName" href="index.html">Molly Murley Davis</a>

                                    <div class="postContent fsm fwn fcg">
                                        <div class="postText">I've gone ahead and placed an order. I can't wait to get started and see what happens.</div>
                                        <div class="stat_elem">
                                            <div class="action_links fsm fwn fcg">
                                                <a id="uz1cxy_5">Reply</a> <span class="dotpos">.</span>
                                                <a class="uiBlingBox postBlingBox" data-ft="{&quot;tn&quot;:&quot;O&quot;}"><i class="img sp_comments sx_comments_like"></i><span class="text">8</span></a> <span class="dotpos">.</span>
            </div></div></div></div></div></div></li></ul></div></div></div></div><div style="display:none;">
</div>
</body></html>
