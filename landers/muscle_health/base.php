



=



<?php
if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Muscle &amp; Health</title>
    <meta name="description" content="Muscle and Health" />
    <meta name="author" content="Muscle and Health">
    <meta name="keywords" content="Muscle, Health, Fitness" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?= $assets ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/main.css">
    <link rel="stylesheet" href="<?= $assets ?>/css/media.css">
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <?php
    $step1_link ='http://google.com';
    $assets = '';
    $step1_name = 'PRODUCT1';
    $step1_image = 'http://static1.squarespace.com/static/54cfb281e4b0f7ee4c646797/55a56091e4b01f72a1ce9648/55ad8413e4b0fae1c07ca686/1437510671280/?format=1500w';

    $step2_link ='http://google.com';
    $step2_name = 'PRODUCT2';
    $step2_image = 'http://i00.i.aliimg.com/photo/v30/126431776_1/Gold_Standard_Sports_Nutrition_Supplement_Whey_Protein.jpg';
    ?>


  </head>
  <body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->


<section class="logowrap">
  <div class="container">
  <div class="row">
    <div class="col-md-3 text-center"><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/brand.jpg" class="logo"></a></div>
    <div class="col-md-9 hidden-xs">
      <div class="topnav">
       <a href="<?= $step1_link ?>" class="current bleft"><img src="<?= $assets ?>/img/top-1.jpg"> FITNESS</a><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/top-2.jpg"> FOOD</a><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/top-3.jpg"> WEIGHTLOSS</a><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/top-4.jpg"> YOGA</a><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/top-5.jpg"> LIFE</a><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/top-6.jpg"> LOOK BETTER</a>
       </div>
      <div class="lowernav">
        <a href="<?= $step1_link ?>">GET ABS IN 7 DAYS</a>
        <a href="<?= $step1_link ?>">ULTIMATE ATHLETE</a>
        <a href="<?= $step1_link ?>">FIT</a>
        <a href="<?= $step1_link ?>">SUMMER</a>
        <a href="<?= $step1_link ?>">SUBSCRIBE</a>
        <a href="<?= $step1_link ?>">SHOWCASE </a>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="navwrap">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"><h2 class="sr-only">Navigation</h2>
        <nav role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-top-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars"></i>
              </button>
              <a href="<?= $step1_link ?>" class="nav-brand visible-xs">MENU</a>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse text-center-sm" id="nav-top-collapse">
              <ul class="nav navbar-nav">

                <li><a href="<?= $step1_link ?>">BUILD PERFECTLY RIPPED MUSCLES</a></li>
                <li class="divider-vertical"></li>
                <li><a href="<?= $step1_link ?>">PERSONAL TRAINER</a></li>
                <li class="divider-vertical"></li>
                <li><a href="<?= $step1_link ?>">WINE</a></li>
                <li class="divider-vertical"></li>
                <li><a href="<?= $step1_link ?>">STREAMING WORKOUTS</a></li>
                <li class="divider-vertical"></li>
                <li><a href="<?= $step1_link ?>">NEWSLETTERS</a></li>
                <li class="divider-vertical"></li>
                <li><a href="<?= $step1_link ?>">COVER STORY </a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-sm-12"><hr></div>
    </div>
    <div class="row">
      <div class="col-md-8">

        <h1><font color ="red">TOP CELEBRITY GOSSIP:</font>JUSTIN BIEBERS PERSONAL TRAINER, PATRICK NILSSON EXPOSES 2-STEP SHORTCUT TO HIS SHOCKING BODY TRANSFORMATION</h1>
        <h4 class="sub">This report was created by Muscle & Health to expose the truth behind celebrity diets.</h4>
        <p><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/justinbr.png" class="img-responsive"></a></p>

        <div class="row">
          <div class="col-xs-2 col-sm-1">
            <img src="<?= $assets ?>/img/social-float.jpg">
          </div>
          <div class="col-xs-10 col-sm-11">
            <hr class="thick">
            <div class="author">
              BY ALEX GORDON
            </div>
            <hr>
            <p><em>Staff reporter Alex Gordon investigates a new muscle solution that is quickly gaining popularity among Hollywood trainers and their clientele.</em></p>
            <hr>

          </div>
        </div>

        <p><span>(M&H)</span> - Our readers are often curious how Hollywood stars manage to keep themselves in such amazing shape while maintaining such busy lifestyles and often partying like rockstars.  So this past month, staff reporter Alex Gordon and I flew out to Los Angeles to try to find out if there was a “secret of the stars.”</p>

		<p>After having the good fortune of speaking with A-list actors like, Dwayne “The Rock” Johnson, Chris Pratt and Justin Bieber , we are excited to report on two new, very unique products that came up in nearly every conversation.  Whether talking about building muscle or cutting excess fat, almost every A-list star has reportedly added these two supplements to their daily regimen.</p>

		<p>The first supplement is <a href="<?= $step1_link ?>"><?= $step1_name ?></a> -  <i>“Monster Pills”</i> as the actors commonly refer to them. They are reportedly helping men put on up to 8 pounds of muscle per week, with little to no change to their daily routines. The second supplement, <a href="<?= $step2_link ?>"><?= $step2_name ?></a>, is used to help boost testosterone levels and burn fat while you sleep.</p>

        <p>At Muscle & Health we know that putting on muscle often feels like an impossible challenge.  We've evaluated numerous fad muscle programs and the two things they always have in common is a high price tag and disappointing results. The reason why most programs fail is because they impose unrealistic restrictions they place on your daily life. Some tell you to eat tons of protein while others emphasize the importance of carbohydrates - all these varying opinions often leave you confused. In any case, you have to make drastic changes to your regular diet. In this special report, we take an in-depth look at a new and promising trend that we think is easy to use and yields real results.</p>

        <hr>
        <p class="fs18">Hollywood elite use <a href="<?= $step1_link ?>"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>"><?= $step2_name ?></a> to lose excess body fat while gaining action star muscle.</p>
        <p></a><a href="<?= $step1_link ?>"><p align="center"><img src="<?= $assets ?>/img/chris-pratt-banner.png" class="img-responsive"></a></p>


        <hr class="thick">

        <p><?= $step1_name ?>'s high anti-oxidant content and powerful strength gaining properties make it a muscle-building machine. Combine <?= $step1_name ?> with <?= $step2_name ?> and you've can achieve the holy grail of muscle gains with simultaneous fat losses.</p>

        <p>If you're feeling skeptical right now, you're not alone. When we first learned about this fat-burning/muscle-building combo our fad radar went off right away. But despite our initial doubts about <a href="<?= $step1_link ?>"><?= $step1_name ?></a>, the countless success stories reported in Hollywood made us take a second look at this trend. What particularly interested us was the fact that people saw results without significant changes to diet or lifestyle.</p>

        <p>At Muscle & Health, we decided to try <a href="<?= $step1_link ?>"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>"><?= $step2_name ?></a> for ourselves. For the test, I wanted to be the guinea pig because I was training to be in a fitness competition and needed to slim down while simultaneously building lean muscle. After further research into the manufacturer I was confident that these supplements were safe and contained especially high concentrations of the proprietary muscle building formula. To finally get my hands on <a href="<?= $step1_link ?>"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>"><?= $step2_name ?></a> stack, I ordered free trials of both products. Everyone at Muscle & Health was incredibly excited about these products and eagerly awaiting my results.</p>

        <hr>
        <p>The free trial bottle of <?= $step1_name ?> arrived in a few days-all I paid was a few dollars for shipping and handling.</p>

        <div class="proof">
          <p><b><a href="<?= $step1_link ?>"><?= $step1_name ?></a></b> has been clinically proven to:<br>(This is the first step in the process. This one is the hemo-dilator that builds lean muscle. It's completely legal, safe, and has none of the bad steroid-like effects.)</p>
          <ul>
            <li><b>Enhance athletic performance and strength</b></li>
            <li><b>Pump more blood into muscles by expanding veins and capillaries</b></li>
            <li><b>Deliver nutrients to muscles at a faster rate, which quickly builds lean, solid mass</b></li>
            <li><b>Give muscles more definition and size</b></li>
            <li><b>Have positive sexual side effects</b></li>
          </ul>
        </div>

        <p>Although we maintained a healthy level of skepticism we could not wait to find out for ourselves if these supplements could do everything they claimed. The combination of <?= $step1_name ?> with <?= $step2_name ?> was a common thread among success stories we had heard. The idea is that <?= $step1_name ?> will boost your energy levels throughout the day and act as a hemo-dilator, allowing more blood flow and nutrient to get to your muscles. <?= $step2_name ?> will shred the hard to lose fat by boosting testosterone levels and allowing your body to burn calories more efficiently.</p>

        <div class="proof">
          <p><b><a href="<?= $step2_link ?>"><?= $step2_name ?></a></b> has been clinically proven to: <br> (This is the second step in the process. This one is the natural testosterone booster - it helps cuts down fat while helping build lean muscle mass. It's completely legal, safe, and has none of the bad steroid-like effects.)</p>
          <ul>
            <li><b>Increase the number of calories burned - even when you're resting</b></li>
            <li><b>Boost energy and fight fatigue</b></li>
            <li><b>Give muscles shape and definition</b></li>
            <li><b>Get rid of the bloated "puffy" look</b></li>
            <li><b>Naturally increase testosterone</b></li>
          </ul>
        </div>

        <p>To test out the products, I took one <?= $step1_name ?> pill every morning and one <?= $step2_name ?> pill every evening for 4 weeks.</p>

        <hr class="thick">
        <p><strong class="fs24">THESE WERE MY RESULTS - 15 LBS OF MUSCLE IN JUST 1 MONTH:</strong></p>
        <hr class="thick">

        <div class="weeks">
          <div class="row">
            <div class="col-sm-4 text-center">
              <a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/week-1.jpg" width="130"></a>
            </div>
            <div class="col-sm-8">
              <p><strong>WEEK 1:</strong>
              <p>After 1 week on the new routine, I was surprised by how fast and dramatic the effects were. My energy level was up and I wasn't as hungry as usual. The appetite curbing was a welcome side effect of the amino acids in <?= $step2_name ?>. I felt fantastic and best of all, I didn't have to change anything about my daily routine.</p>
              <p>On Day 7, I got on the scale and used a caliper to check my body fat. I couldn't believe my eyes--I had gained 4 lbs of lean muscle mass in my first week!</p>

              <p>But still I wasn't completely convinced. I know that in the beginning of many muscle programs, you lose a lot of water weight without producing a lasting effect on actual body composition. I wanted to see if I could continue to gain this much muscle in upcoming weeks. But I was certainly excited-I now weighed under 200 lbs for the first time in years!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 text-center">
              <a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/week-2.jpg" width="130"></a>
            </div>
            <div class="col-sm-8">
              <p><strong>WEEK 2:</strong>
              <p>After 2 weeks of using both supplements I had more energy and focus than ever. The detoxifying properties of <?= $step1_name ?> were allowing me to sleep through through the night, every night - maximizing recovery time and growth for my muscles. I also managed to lose another 6 lbs of fat, and started to see the outline of my 6-pack coming back, something my girlfriend obviously loved. After just 14 days I was feeling quite confident that these products were the real deal.</p>
            </div>
          </div><br><br>
          <div class="row">
            <div class="col-sm-4 text-center">
              <a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/week-3.jpg" width="130"></a>
            </div>
            <div class="col-sm-8">
              <p><strong>WEEK 3:</strong>
              <p>After 3 weeks, all my doubts and skepticisms had vanished! I had gained 12 lbs of lean muscle and had lost a total of 14 lbs of fat. All the fat on the sides of my stomach was completely gone and my 6-pack was becoming even more defined. These products are just amazing. Gaining this much muscle while simultaneously losing fat felt completely unreal!</p>
              <p>I maintained my sky-high energy levels as well. Usually around the third week of other programs I would start to run out of steam and start gaining back some of the weight which I later learned was simply the water weight I had lost in the first place.</p>

              <p>But with <?= $step1_name ?> and <?= $step2_name ?> my energy levels didn't dip. Instead, they remained steady throughout the day!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 text-center">
              <a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/week-4.jpg" width="130"></a>
            </div><br>
            <div class="col-sm-8">
              <p><strong>WEEK 4:</strong>
              <p>By the end of the month, I was completely shocked by my results. I gained an unbelievable 16 lbs of lean muscle mass since starting the <?= $step1_name ?> and <?= $step2_name ?> routine! Everyone at Muscle & Health has been scouring the net to get their hands on free trials of these products now. In week 4 I lost 6 more lbs of fat, putting my body fat percentage into the single digits! I was ready and confident for the fitness competition. I am definitely going to continue taking <?= $step1_name ?> and <?= $step2_name ?> because they produce consistent, amazing results.</p>
            </div>
          </div>
        </div><br><br>

        <h2 class="text-upper">"I couldn't be any happier with the results. <a href="<?= $step1_link ?>"><u>I gained 16 lbs of muscle in 4 weeks.</a></u> No Special Diet, No Intense Exercise."</h2><br>
        <p><center><a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/threestep1.png" class="img-responsive"></a></center></p><br>
        <h2><strong class="text-red">IMPORTANT:</strong> <em>*We have tested both products together, so It is important that you use Step 1 and Step 2 in this method to achieve similar results.</em></h2>
        <div class="yellowbox">EXCLUSIVE FOR OUR READERS ONLY!</div>
        <hr>
        <p class="fs18 text-center">WHILE SUPPLIES LAST (free trials limited)<br>
          As of <span class="current-date"></span> there are still free trials available. Act Fast!</p>
        <hr>

        <div class="upsell">
          <div class="row">
            <div class="col-sm-3 text-center">
              <a href="<?= $step1_link ?>"><img src="<?= $step1_image ?>"></a>
            </div>
            <div class="col-sm-9 rightupsell text-center">
              <div><h3><i class="fa fa-check-square-o"></i> STEP 1:</h3>
              <a href="<?= $step1_link ?>"><img src="<?= $assets ?>/img/cta-btn.png"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="upsell">
          <div class="row">
            <div class="col-sm-3 text-center">
              <a href="<?= $step1_link ?>"><img src="<?= $step2_image ?>"></a>
            </div>
            <div class="col-sm-9 rightupsell text-center">
              <div><h3><i class="fa fa-check-square-o"></i> STEP 2:</h3>
              <a href="<?= $step2_link ?>"><img src="<?= $assets ?>/img/cta-btn.png"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="yellowbox2"><span>REMEMBER</span> TO USE BOTH PRODUCTS<br>FOR EXTREME RESULTS</div>

      </div>
      <div class="col-md-4 aside">
        <div class="mailinglist">
         <h4>Our Mailing List</h4>
         <p></p>
          <form>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Email Address">
          </div>
          <button class="btn btn-red">Subscribe</button>
          </form>
        </div>



        <div class="asidewrap">
          <h4>REVIEWED IN THIS ARTICLE</h4>
          <p>With these two products getting ripped has never been easier:</p>
          <div class="row text-center">
            <div class="col-xs-6">
              <span class="imgwrap"><a href="<?= $step1_link ?>"><img src="<?= $step1_image ?>" height="150"></a></span>
              <a href="<?= $step1_link ?>" class="aside-cta"><?= $step1_name ?><br></a>
            </div>
            <div class="col-xs-6">
              <span class="imgwrap"><a href="<?= $step2_link ?>"><img src="<?= $step2_image ?>" height="150"></a></span>
              <a href="<?= $step2_link ?>" class="aside-cta"><?= $step2_name ?><br></a>
            </div>
          </div>
          <div class="limited">
            For limited time get a FREE trial bottle. Offer valid as of <span class="current-date"></span>
          </div>
          <div class="yellownote">
            *NOTE: You must use both products to achieve the same results.
          </div>
        </div>

        <div class="asidewrap bggray">
          <h4>FEATURED IN</h4>
          <p class="text-center"><img src="<?= $assets ?>/img/biebermh1.png" class="img-re img"></p>
          <p>This killer combo has been featured in countless magazines such as Muscle & Fitness and Men’s Health. Use our exclusive links to get massive savings on <?= $step1_name ?> and <?= $step2_name ?> today!</p>
          <p class="text-center"><img src="<?= $assets ?>/img/chris-pratt-cover.png" class="img-re img"></p>
          <p><strong class="text-red">*NOTE:</strong> You must use this product as directed to achieve the same results. This Exclusive Offer is Limited Due to Overwhelming Demand. Expires on <span class="current-date"></span></p>
        </div>

        <div class="asidewrap inverse">
          <h4>READER'S REVIEWS</h4>
          <p>I've been seeing <?= $step1_name ?> all over also. I even heard my best friend talking about this muscle supplements a few days ago since one of his friends put on like 13 lbs of muscle in the first 15 days! I definitely have to try this.</p>
          <p><em>– Stephen M., Allendale, NJ</em></p>
          <hr class="thick">
          <p>"As a father of 3, I juggle work, kids, and all of life's other stresses on a daily basis. I've had extra weight on me ever since I started having a family due to having no time, but no matter how hard I tried there was just never enough time to get out to the gym. A friend of mine bought me <span><?= $step1_name ?></span> &amp; <span><?= $step2_name ?></span> - I couldn't believe it when I started dropping the pounds & putting on serious lean muscle! Thanks for this post – it was a life-saver! </p>
          <p><em>– Kyle J., Houston, TX</em></p>

        </div>

        <div class="asidewrap bggray">
          <h4>REAL RESULTs</h4>
          <p class="text-center"><img src="<?= $assets ?>/img/aside-result-1.jpg" class="img-re img"></p>
          <p class="aside-caption"><b>Derek Manchester, 24</b></p>
          <p class="text-center"><img src="<?= $assets ?>/img/aside-result-2.jpg" class="img-re img"></p>
          <p class="aside-caption"><b>Andrew Scott, 36</b></p>
          <p class="text-center"><img src="<?= $assets ?>/img/aside-result-3.jpg" class="img-re img"></p>
          <p class="aside-caption"><b>Elijah Farrow, 29</b></p>
          <p class="text-center"><img src="<?= $assets ?>/img/aside-result-4.jpg" class="img-re img"></p>
          <p class="aside-caption"><b>Walter Foster, 55</b></p>


        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="comments">
          <div class="divider"></div>
          <div class="comments-header">
           <h4 class="ch">COMMENTS</h4>
           <div class="row">
             <div class="col-sm-2 col-xs-3 text-center"><img src="<?= $assets ?>/img/comments-x.jpg">
             </div>
             <div class="col-sm-10 col-xs-9">
              <div class="form-group">
                <textarea  class="form-control" placeholder=""></textarea>
              </div>
             </div>
           </div>
          </div>
          <!-- ADD/ EDIT / REMOVE COMMENTS on /js/comments.js file -->
          <div class="commentbox">
          </div>


        </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
  </div>
</section>



<section class="bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-3 text-center">
        <img src="<?= $assets ?>/img/footer-0.jpg" class="img-re">
      </div>
      <div class="col-md-9 text-center">
         <div class="row">
           <div class="col-sm-3"><img src="<?= $assets ?>/img/footer-1.jpg" class="img-re"><p>8 ways to fuel your workout</p></div>
           <div class="col-sm-3"><img src="<?= $assets ?>/img/footer-2.jpg" class="img-re"><p>8 ways to fuel your workout</p></div>
           <div class="col-sm-3"><img src="<?= $assets ?>/img/footer-3.jpg" class="img-re"><p>8 ways to fuel your workout</p></div>
           <div class="col-sm-3"><img src="<?= $assets ?>/img/footer-4.jpg" class="img-re"><p>8 ways to fuel your workout</p></div>
         </div>
      </div>
    </div>
  </div>
</section>
<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p><img src="<?= $assets ?>/img/brand-footer.jpg"></p>
        Copyright &copy; 2014 Muscle and health. All rights reserved.
      </div>
    </div>
  </div>
</section>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="http://www.musclehealth-mag.com/af/t-90/mh/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
  <script src="<?= $assets ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?= $assets ?>/js/date.js"></script>
  <script src="<?= $assets ?>/js/comments.js"></script>
  </body>
</html>