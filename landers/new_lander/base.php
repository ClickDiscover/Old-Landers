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
    <title>Womens Health</title>
    <meta name="description" content="Vivo Greens" />
    <meta name="author" content="">
    <meta name="keywords" content="" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="<?= $assets ?>/css/all.css">
    <script src="<?= $assets ?>/js/modernizr-2.8.3.min.js"></script>
    
   
</head>
  <body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <section class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><img src="<?= $assets ?>/img/logo.png" class="center-block img-responsive"></div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row headline">
        <div class="col-sm-12">
        <h1><strong class="text-pink">Breaking:</strong> Controversial <?= $geo->money(5, 0) ?> 'Skinny Pill' Hits The <?= $geo->pronoun() ?> Market.</h1>
          <h4>Think Diet Pills Don't Work? Here's One That Doctors Say May Actually Deliver.</h4>
          <div class="datebar">
            <em>by Amanda Michaels</em> <i class="fa fa-clock-o"></i> <span class="current-date"></span>
            <a href="<?= $step1_link ?>">
                <img src="<?= $assets ?>/img/social.png" class="pull-right hidden-xs">
            </a>
          </div>
          <p>
              <a href="<?= $step1_link ?>">
                <img src="<?= $assets ?>/img/img-1.jpg" class="img-responsive center-block img-thumbnail">
              </a>
          </p>
          <div class="gap20"></div>
          <p><strong class="text-pink">(Women's Health)</strong> - Since the beginning of the year, our readers have been going crazy over a new "Skinny Pill" that is sweeping the nation and helping people from all walks of life transform their bodies quickly and safely - a product that has been so successful, many weight-loss doctors and plastic surgeons now want to see it banned.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
        <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-2a.jpg" class="img-responsive center-block img-thumbnail" ><div class="gap20"></div>
        </a>
        </div>
        <div class="col-sm-3">
        <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-2b.jpg" class="img-responsive center-block img-thumbnail" ><div class="gap20"></div>
        </a>
        </div>
        <div class="col-sm-6">
          <p>Since the products were recently featured on an episode of The Dr. Oz Show, we have been getting 1000’s of daily letters from our readers, begging us for more information and asking us how they can get their hands on this new fat-burning supplement.</p> 

          <p>Surprisingly, many people who struggle daily with their weight have yet to hear about this powerful option.</p>
          <p>In a recent exclusive interview with Women’s Health, movie star <?= $geo->v('celeb1', 'Scarlett Johansson') ?> credits the product with helping her lose nearly <?= $geo->weight(22) ?> of body fat in preparation for her role as the ‘Black Widow’ in The Avengers. </p>
        </div>
      </div>
      <div class="gap20"></div>
      <div class="row">
        <div class="col-sm-12">
        <p>Dozens of other celebrities like Jennifer Hudson, Christina Aguilera, Sandra Bullock and Kelly Osborne have all lost weight and transformed their bodies using this controversial pill. Even Men have gotten in on the weight-loss action and used the same product to make some drastic physical transformations.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <div class="gap40"></div>
          <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-3.jpg" class="img-responsive center-block img-thumbnail">
          </a>
          <p class="text-center"><strong><em>“I love my new body and I love what I see in the mirror. I’ve tried dozens of products and treatments but none worked better than <span class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></span>. Thank you from the bottom of my heart!”</em></strong></p>
        </div>
        <div class="col-sm-7">
          <p>The product we're talking about is called <strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong>. You may have seen it in the news, on TV, or trending online as the safe and powerful "secret diet trick” being used by models, celebrities and regular folk all across America. <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a>’s high anti-oxidant content and powerful fat burning properties make it a belly busting machine. Combine it with the detoxifying, cleansing and additional weight loss effect of a <strong class="text-pink"><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong> and you see why this deserves a Special Report. But maybe the most important part is that <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> is finally available nationwide WITHOUT a prescription.</p>

          <p>The second way, the most important way, is it slows the release of sugar into the blood stream. So when you don’t have sugar building up in the blood stream, you don’t have fat building up because sugar turns to fat. When the two are combined together, you get this synergistic effect that basically burns and blocks and stops fat, but it also is natural and safe.”</p>

          <p>According to <strong>Dr Julie Chen</strong> (A guest host on the Dr. Oz episode where <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> was featured) the product works in more than one way, “The first way is it goes in and causes the body to burn glucose, or sugar, and burn fat, mainly in the liver&hellip;</p>


        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 pinkbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p>
          <a href="<?= $step1_link ?>">
            <img src="<?= $assets ?>/img/img-4.jpg" class="img-responsive center-block img-thumbnail">
          </a>
          </p>
          <p>If you’re feeling skeptical right now, you’re not alone. We here at Women’s Health have seen many promising products come and go over the last 18 years. When we first learned about ‘yet another’ fat-burning/body-firming product our fad radar went off right away. Even after pouring through mountains of research. While I had an educated opinion, I still had no personal proof that the <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> option was worth the time. So, with my editors blessing, I decided to go out and put the product to the test myself. What better way to find out the truth than to conduct my own study?</p>

          <p>We know that the thought of losing your excess fat often feels like an impossible challenge. We’ve evaluated numerous fat-loss programs and it seems like everything, too demanding or doesn’t work as claimed. The reason why most programs fail is because they impose unrealistic restrictions on your daily life.</p>


        </div>
      </div>
    </div>
  </section>

  <section class="padding-tb-50">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <p>Despite our reservations about <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a>, the countless success stories that have poured into our office showed that ordinary people around the world were able to make incredible changes to their bodies without drastic changes. These people saw results without having to significantly change their lifestyles or eating habits.</p>
          <blockquote class="text-pink">It’s simply amazing. I can’t believe how quickly I saw results. Real results! I literally saw results after the first day. I can’t thank you enough, I have my youthful figure back</blockquote>
        </div>
        <div class="col-sm-5">
          <p>
          <a href="<?= $step1_link ?>">
            <img src="<?= $assets ?>/img/img-5.jpg" class="img-responsive center-block img-thumbnail">
          </a>
         </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
        <p>In this special report, I explain exactly how I tested the product and show you the surprising results I achieved. Today, I’m leaking the secret to what, we here at Women’s Health, call “quite possibly the most effective female physique transformation stack the world has ever seen”. I’ll show you how you too can get a leaner, slimmer sexier body quickly and safely without having to use illegal drugs or paying <?= $geo->money(1000, 0) ?>’s for surgery.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="padding-tb-40 pinkbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="gap20"></div>
          <p>At first, I only wanted to try <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> since losing fat was my main goal. However, the pharmaceutical company behind the product advised us that the amino acid boosting, digestive cleansing and detoxifying effect of a Cleanse such as <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a> combined with <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> would create a synergistic effect and actually lead to a 2X increase in fat loss versus using <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> alone. So after reviewing the literature, going through most of the success stories and speaking with the our internal medical staff here at Women’s Health, we came to the decision that I would achieve maximum results using both products together, as they were intended.</p>

          <div class="benefits">
            <h3><strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> Clinical Studies</h3>
            <ul>
            <li>In a study published in the journal Lipids in Health & Disease, subjects taking <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> lost an average of <?= $geo->weight(19.3) ?> in 28 days (4 weeks) without any changes to their diet or exercise.</li>

              <li><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> contains no stimulants, no artificial chemicals and is 100% Natural.</li>

              <li><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> has been found to increase metabolism, boosting weight loss by more than 640%.</li>

              <li>Studies have shown a 39% reduction in cholesterol and an average <?= $geo->length(2, 'inch') ?> reduction in belly fat within 28 days (4 weeks)</li>
            </ul>
          </div>

          <div class="benefits">
            <h3>The Proof is in the Real-World Results</h3>
            <ul>
               <li>Subjects lost more weight – an average of <?= $geo->weight(17) ?> – while supplementing with <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a> compared to a placebo.</li>
               <li>On average, subjects experienced a 7.2% reduction in body weight while using <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a> </li>
               <li>Subjects also experienced a 16% reduction in body fat with <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a>.</li>
               <li>When <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> was combined with <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a>, the subjects saw an additional 49% reduction in fat loss along with a further 4.6% reduction in overall bodyweight. </li>
               <li>The combination of <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> with <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a>, led to an incredible 37.6% acceleration in desired positive results.</li>
               <li>Subjects did not change their diets while on the study however were all physically active and exercised at least once per week.</li>

            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-20 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4 class="text-center text-pink"><strong>Featured In</strong></h4>
          <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-seen.jpg" class="img-responsive center-block">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p>So I went ahead, visited the <strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> &amp; <strong class="text-pink"><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong> website, and ordered my Risk Free Trial of the products. They both arrived within 4 days. Each bottle held a month’s worth of pills which worked out perfectly as I would be following the supplement routine for 4 weeks and documenting my progress along the way.</p>
          <p><strong>The product dosage was:</strong></p>
          <h4 class="pillstep">1. Take One <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> pill every morning</h4>
          <h4 class="pillstep">2. Take One <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a> pill in the evening before bed</h4>
          <h1 class="text-center"><strong>The results shocked everyone here at <span class="text-pink">Women’s Health</span> (including myself)&hellip;</strong></h1>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-w1.jpg" class="img-responsive center-block img-round">
        </a>
        </div>
        <div class="col-sm-6">
          <p>After one week on the diet using <strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> &amp; <strong class="text-pink"><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong> I was surprised at the dramatic results. My energy level was up, and I wasn’t even hungry. Apparently, this is a side effect of the garcinia cambogia and HCA present in <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a>, which help curb the appetite.</p>
          <p>I honestly felt fantastic. And I didn’t even change anything about my daily routine. On Day 7 I got on the scale and had to do a double-take. I had lost <?= $geo->weight(7) ?>, really?! But skeptical me, I still wasn’t convinced as they say you lose a lot of water at the beginning of any diet. I wanted to take a "wait &amp; see" approach. But it sure was looking up! I now weighed under <?= $geo->weight(130) ?>. for the first time since my 20’s.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        <p>After two weeks of using <strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> and <strong class="text-pink"><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong>, I started the week off with even more energy and was actually sleeping more soundly than before. I was no longer waking up during the night and tossing and turning because my body was actually able to relax (I believe this is a result of getting rid of the toxins). Plus I still managed to lose another <?= $geo->weight(5) ?>, putting me at an unbelievable <?= $geo->weight(12) ?> of weight loss, in just 2 weeks.</p>
          <p class="text-center"><strong class="text-pink">I must admit that I’m starting to believe that this diet is more than just a gimmick.</strong></p>
        </div>
        <div class="col-sm-6">
        <a href="<?= $step1_link ?>">
            <img src="<?= $assets ?>/img/img-w2.jpg" class="img-responsive center-block img-round">
        </a>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
        <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-w3.jpg" class="img-responsive center-block img-round">
        </a>
        </div>
        <div class="col-sm-6">
        <p>After 3 weeks all my doubts and skepticism had absolutely vanished! I am down, 2 full dress sizes, after losing another <?= $geo->weight(5) ?>. And I still have a ton of energy. Quite often, around the third week of other diets, you tend to run out of steam.</p> 

          <p>But with the <strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> &amp; <strong class="text-pink"><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong>, my energy levels don’t dip, but remain steady throughout the day. I no longer need that cat nap around 3pm in the afternoon! And I am even noticing that my stomach is digesting food so much better. No bloating or embarrassing gas after I eat!</p>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p>After the fourth week, my final results were shocking. I lost an unbelievable <?= $geo->weight(21) ?> since starting the <strong class="text-pink"><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> &amp; <strong class="text-pink"><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong> diet! Actually everyone at Women’s Health is kicking themselves for not having volunteered to be the guinea pig. Using the <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> &amp; <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a> in week 4 I lost 2 more pounds. But to be honest I really didn’t have much more left to lose.</p> 

          <p>I am definitely going to continue taking the <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> afterwards because it has so many antioxidants and vitamins that it makes my skin look unbelievable. A pretty sweet side-effect.</p>
          <p class="text-center"><strong class="text-pink">“I couldn’t be any happier with the results.I Lost <?= $geo->weight(21) ?> in 4 Weeks, No Special Diet, No Intense Exercise”</strong></p>
        </div>
        <div class="col-sm-6">
        <a href="<?= $step1_link ?>">
          <img src="<?= $assets ?>/img/img-w4.jpg" class="img-responsive center-block img-round">
        </a>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 pinkbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <h2 class="text-center"><strong>CONCLUSION</strong></h2>
            <div class="gap20"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
            <a href="<?= $step1_link ?>">
                <img src="<?= $assets ?>/img/img-c1.jpg" class="img-responsive center-block img-thumbnail"><div class="gap20"></div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="<?= $step1_link ?>">
                <img src="<?= $assets ?>/img/img-c2.jpg" class="img-responsive center-block img-thumbnail"><div class="gap20"></div>
            </a>
        </div>
        <div class="col-sm-6">
            <p>Like us, here at Women’s Health, you might be a little doubtful about the effects of this diet, but you need to try it for yourself; the results are real. From my own experiment I can tell you that the results are real. After conducting this personal study we are pleased to see that people really are finding success with it (myself included). And you have nothing to lose.</p> 

            <p>We are confident that you too can reach your weight loss goals with <a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a> and <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a>.</p>
            <h4><strong>Good luck with your own Journey!</strong></h4>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h4 class="text-center"><strong class="text-green">Limited Time Offer for Facebook Readers</strong></h4>
            <p class="text-center"><strong>SPECIAL OFFER:</strong> For a limited time, the makers of <strong><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> have offered our readers a risk-free 30-day trial of their amazing "skinny pill". They even decided to throw in a <strong>30-day bottle of <a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong> into the promo and really accelerate the positive effect. This amazing offer will NOT last so Order Your Trial Today!</p>

            <div class="whitebg">
              <div class="row">
                  <div class="col-sm-5">
                      <a href="<?= $step1_link ?>">
                          <img src="<?= $step1_image ?>" class="img-responsive center-block">
                      </a>
                  </div>
                  <div class="col-sm-7">
                  <h5 class="text-center pillstep">HURRY: Only 8 Trials Remaining</h5><br>
                  <h4 class="text-center">Click here to get a Risk-Free Trial of <strong><a class="step-link" href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> &amp; <strong><a class="step-link" href="<?= $step2_link ?>"><?= $step2_name ?></a></strong></h4>
                  <a class="step-link" href="<?= $step1_link ?>" class="cta">Try Sample Today</a>
                  <p class="text-center"><small>Use this exclusive link and pay just $5.95 for Shipping and Handling</small></p>
                  <p class="text-center"><small><strong>DISCLAIMER:</strong> I used BOTH products during my 4-week Experiment to achieve my results.</small></p>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
        
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-xs-12"><h5><strong>Add Comment</strong></h5></div> 
              <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>/img/blank-picture.jpg" class="img-responsive center-block"></div>
              <div class="col-xs-9 col-sm-10"><textarea class="form-control" placeholder="Write a comment..."></textarea><button class="uibutton confirm pull-right">Comment</button></div>
            </div>

            <div id="comments">
              <h5><a class="step-link" href="<?= $step1_link ?>">Recent Facebook Comments</a></h5>

              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>/img/c1.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a class="step-link" href="<?= $step1_link ?>">Lauren Kirschen Silver</a></strong></p>
                  <p>For once I was able to do something nice for my self without feeling guilty about the cost.</p>
                  <div class="comment-meta"><a class="step-link" href="<?= $step1_link ?>">Reply</a> &bull; 13 &bull; <a class="step-link" href="<?= $step1_link ?>">Like</a> &bull; <abbr title="Comment">12 minutes ago</abbr></div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>/img/c2.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a class="step-link" href="<?= $step1_link ?>">Laura Miranda</a></strong></p>
                  <p>I have tried so much of this kind of stuff, in one sense I want to try it but in the back of my mind I am thinking, yeah right!! Someone please reassure me it works.</p>
                  <div class="comment-meta"><a class="step-link" href="<?= $step1_link ?>">Reply</a> &bull; 6 &bull; <a class="step-link" href="<?= $step1_link ?>">Like</a> &bull; <abbr title="Comment">13 minutes ago</abbr></div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>/img/c3.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a class="step-link" href="<?= $step1_link ?>">Jenna Bush</a></strong></p>
                  <p>As a realtor it's important to look ans feel my best, unfortunately the housing market isn't doing that great so cash has been a little tight lately. Thanks for the info, looking forward to receiving my trials</p>
                  <div class="comment-meta"><a class="step-link" href="<?= $step1_link ?>">Reply</a> &bull; 19 &bull; <a class="step-link" href="<?= $step1_link ?>">Like</a> &bull; <abbr title="Comment">46 minutes ago</abbr></div>
                  
                </div>
              </div>
              <hr>
             
             
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>/img/c5.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a class="step-link" href="<?= $step1_link ?>">Molly Davis</a></strong></p>
                  <p>I've gone ahead and placed an order. I can't wait to get started and see what happens.</p>
                  <div class="comment-meta"><a class="step-link" href="<?= $step1_link ?>">Reply</a> &bull; 53 &bull; <a class="step-link" href="<?= $step1_link ?>">Like</a> &bull; <abbr title="Comment">about an hour ago</abbr></div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>/img/c8.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a class="step-link" href="<?= $step1_link ?>">Jill Phongsa</a></strong></p>
                  <p>wasn't sure about ordering online but this deal seals it for me, didn't want to miss out, checked out the pages and all is encrypted and good. looking foreard to my new looks</p>
                  <div class="comment-meta"><a class="step-link" href="<?= $step1_link ?>">Reply</a> &bull; 3 &bull; <a class="step-link" href="<?= $step1_link ?>">Like</a> &bull; <abbr title="Comment">1 hour ago</abbr></div>
                </div>
              </div>
              
              <hr>
            <div>
          </div>  
          <div class="col-md-3"></div>
          
          
          
        </div>
      </div>
  </section>
  <section class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><img src="<?= $assets ?>/img/logo.png" class="center-block img-responsive"></div>
      </div>
    </div>
  </section>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?= $assets ?>/js/jquery-1.11.3.min.js"><\/script>')</script> 
  <script src="<?= $assets ?>/js/bootstrap.min.js"></script>
  <script src="<?= $assets ?>/js/date.js"></script>

<?= $scripts ?>
</body>
</html>
