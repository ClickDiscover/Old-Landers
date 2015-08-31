<?php 
if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');

// Optional include in rotator V2
// include dirname(__DIR__) . "/vars.php";
$assets .= '/';

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
    <meta name="description" content="Womans Health" />
    <meta name="author" content="">
    <meta name="keywords" content="" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <script>
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = '<?= $assets ?>/v2/bootstrap.min.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>  
    <script>
      var cb = function() {
        var l = document.createElement('link'); l.rel = 'stylesheet';
        l.href = '<?= $assets ?>css/main.v2.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    <style>
      .img-responsive { max-width: 90%}
    </style>
    
   
</head>
  <body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
    <div class="facebook-exclusive">
	<span id="bluebar">Exclusive Free Offer for  Facebook Visitors Below</span>
</div>
  <section class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><img src="<?= $assets ?>img/logo.png" class="center-block img-responsive"></div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row headline">
	  <ul class="breadcrumb">
        <li>Home / </li>
        <li>Health / </li>
        <li class="active">Fitness &amp; Nutrition</li>
        <div class="clearfix"></div>
      </ul>
        <div class="col-sm-12">
          <h1><strong class="text-pink"><span>BREAKING:</span></strong><b> New &quot;Skinny Pill&quot; Has Menopausal Women Dropping Weight Fast</b>		  </h1>
          <div class="full-width-image">
		  <img src="<?= $assets ?>img/img-w6.jpg">
		  </div>
          <div class="gap20"></div>
          <div class="datebar">
            <em>by Karen Parkers</em> <i class="fa fa-clock-o"></i> <span class="current-date"></span>
            
		</div>
	  <div class="social">
        <a href="<?= $step1_link ?>"><img src="<?= $assets ?>img/social.png" class=""></a>
      </div>
          <h4><strong>Article Summary</strong></h4>
          <ul>
          <li>Doctors have discovered that women who maintain a healthy weight live longer and have fewer health problems.</li>
          <li>Dolores, 52, used an all-natural fruit extract called <a href="<?= $step1_link ?>"><?= $step1_name ?></a> and is now thinner than she’s been in decades.</li>
          <li>Besides weight loss, <a href="<?= $step1_link ?>">
<?= $step1_name ?></a> has many additional health benefits for ‘older’ ladies.</li>
          </ul>

          <p><strong class="text-pink">(Women's Health)</strong> - Dr. Leon Samuels of Los Angeles is a world-recognized expert in women's health. He’s worked with thousands of women on issues related to weight loss, nutrition and overall quality of life. Until recently, Dr. Samuels' advice to women who are struggling with weight was to eat right and exercise.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <img src="<?= $assets ?>img/img-1.jpg" class="img-responsive center-block img-thumbnail" ><div class="gap20"></div>
        </div>
        
        <div class="col-sm-6">
          <p>However, many women have mobility issues. This often makes normal exercises difficult to perform. Also, many older women have specific nutritional needs. So going on a variety of diets can lead to health problems. While most people want to lose weight without diet or exercise, for older ladies this is often a requirement to live a longer and happier life.</p>
        </div>
      </div>
      
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-sm-push-7">
          
          <img src="<?= $assets ?>img/img-2.jpg" class="img-responsive center-block img-thumbnail">
          
        </div>
        <div class="col-sm-7 col-sm-pull-5">
        <div class="gap20"></div>
        <p>There is a weight-loss “secret” which more and more doctors are recommending for their female patients who wish to lose weight. Many celebrities have talked about this <a href="<?= $step1_link ?>"> &quot;Skinny Pill”</a> in interviews. Recently, talk hostl, Kelly Clarkson, said this secret was the reason she lost weight in time for her last performance.</p>
          <p>We say it's a secret but, in reality, this weight-loss cure has been around for thousands of years. It's a fruit called <a href="<?= $step1_link ?>"><?= $step1_name ?></a>. </p>
          <p><strong>If you're interested in losing weight without diet or exercise, <a href="<?= $step1_link ?>"><?= $step1_name ?></a> taken with a cleanse such as <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> is something you need to know more about.</strong></p>


        </div>
      </div>
      
    </div>
  </section>
 
  <section class="padding-tb-40 pinkbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <h3><strong>The Science behind<a href="<?= $step1_link ?>"> <?= $step1_name ?></a></strong></h3>
          <p><?= $step1_name ?> is a small fruit which looks a bit like a tiny pumpkin. Found in Asia, Australia, Polynesia and parts of Africa, this fruit has long been used by native people because of its amazing and diversified health properties. </p>

          <div class="benefits">
            <h3><strong><a href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> has been scientifically proven to:</h3>
            <ul>
              <li>Burn fat by naturally boosting your metabolism</li>
              <li>Remove unwanted cellulite, belly fat and arm fat</li>
              <li>Increase your energy levels during the day</li>
              <li>Increase the quality of your sleep during the night</li>
            </ul>
          </div>
          <p>Here at Women’s Health, we were amazed to learn about how effective<a href="<?= $step1_link ?>"> <?= $step1_name ?></a> paired with <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> are when used for weight loss. But we noticed something else remarkable. <strong>Many of the problems <a href="<?= $step1_link ?>"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> treat are problems associated with menopause.</strong></p>
          <p>Menopausal women often experience hot flashes, decreased energy levels, restlessness when sleeping and mood changes. <a href="<?= $step1_link ?>"><?= $step1_name ?></a> combined with <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> treat every one of these symptoms. Even better, <?= $step1_name ?> and <?= $step2_name ?> are both completely natural and safe.</p> 
		  <img src="<?= $assets ?>img/meno2.jpg" class="img-responsive center-block img-thumbnail">
          <p>If you’re a woman experiencing menopause, <a href="<?= $step1_link ?>"><?= $step1_name ?> </a> combined with <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> can help lessen the symptoms – and even prevent some of them from occurring in the first place.</p>
          <div class="benefits">
            <h3><strong>For Women Undergoing Menopause,<a href="<?= $step1_link ?>"> <?= $step1_name ?>:</a></strong></h3>
            <ul>
              <li>Results in <strong>natural weight loss</strong> with no diet or exercise</li>
              <li>Reduces or even eliminates hot flashes</li>
              <li>Improves and stabilizes mood</li>
              <li>Improves duration and quality of sleep</li>
            </ul>
          </div>

          <h3><strong>How to Find <a href="<?= $step1_link ?>"><?= $step1_name ?></a></strong></h3>

          <p>The <?= $step1_name ?> fruit can be a bit difficult to get ahold of. Fortunately, <a href="<?= $step1_link ?>"><?= $step1_name ?> extract</a> works just as well – if not better – than the fruit itself. An extract captures the nutrients and powers of the fruit in an easy-to-use form which you take once or twice a day. There are many options available but after doing our research we recommend <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a>.</p>
          <img src="<?= $step1_image ?>" class="img-responsive center-block">
          <p><a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> offers all of the benefits of the fruit itself with none of the hassles associated with eating fruit daily. This extract is created in a high quality laboratory under the supervision of chemists and nutritionists.</p>

          <p>Before we tried this product ourselves, we checked through all the scientific literature available. Here’s a summary of what we found:</p>

       </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-20 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4 class="text-center text-pink"><strong>Featured In</strong></h4>
          <img src="<?= $assets ?>img/img-seen.jpg" class="img-responsive center-block">
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h4><strong><a href="<?= $step1_link ?>" class="step-link"> <?= $step1_name ?></a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> Clinical Studies:</strong></h4>
          <ul>
          <li>The health journal Lipids in Health &amp; Disease published the results of a study which showed that subjects who took <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> daily lost an average of 19.3 pounds in four weeks. Subjects did not change their diet or exercise habits during the study.</li>

          <li>These products contain <b>no toxins, artificial chemicals or stimulants</b>. They are both 100% natural.</li>

          <li>Studies show that <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> mixed with <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> increases metabolism. In turn, the increased metabolic functions increase weight loss by more than 640%.</li>

          <li>When using <a href="<?= $step1_link ?>" class="step-link"> <?= $step1_name ?></a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> studies show a 39% <b>reduction in cholesterol</b> along with a two-inch average reduction in belly fat over four weeks.</li> 

          <li>Subject in the study who took <a href="<?= $step1_link ?>"><?= $step1_name ?></a> combined with <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> lost an average of 17 pounds more than study participants who were given a placebo. </li>

          <li>Additional studies show that participants who took <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> had a 49% reduction in fat loss and a reduction of body weight of up to 4.6%.</li> 
          </ul>

          <p>Of course, we’d never recommend a <a href="<?= $step1_link ?>">product</a> without firsthand knowledge. This is why we’d like to introduce our readers to Dolores Williams.</p>

          <h4><strong>Dolores Williams, 52, Lost 21 Pounds in 30 Days. Here’s How She Did It and How You Can, Too!</strong></h4>

          <p>When we were asking our staff is they knew any women who might be willing to test out <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> for our report, almost immediately our associate editor Christina Williams raised her hand.</p>

          <p>“My mother is 52 years old and just last week her doctor told she needed to lose weight as soon as possible,” said Ashley. “The problem is a heart condition keeps her from doing any strenuous exercise. She’s been looking for a way to stay out of the gym but also drop the pounds.”</p>
          <p>Ashley’s mom, Dolores, seemed like the perfect candidate to give us a completely honest report of her experiences. When we approached her, she was thrilled to try it out. And, as we quickly learned, she wasn’t the type of person to hold back her opinion.</p>
          
        <h3 class="text-center"><strong>Dolores' Complete Weight-Loss Report</strong></h3><div class="gap20"></div>

        <p>Hi everyone!</p>
        <p>My first step was to order the products directly from the website. With their money-back guarantee, I had nothing to worry about.</p>
        <p>My bottle of <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> arrived in 3 days with no problems, and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> came 1 day after that.</p>
        <p>Instructions were simple. I took one pill of each product every morning and night for 30 days. My complete journal is below:</p> 

        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2><strong class="text-pink">Week One</strong></h2>
          <p>After one week on the diet using <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a>, I was surprised at the dramatic results. My energy level was up, and I wasn’t even hungry. </p>
          <p>Apparently, this is a side effect of the garcinia cambogia and HCA present in <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a>, which help curb the appetite.</p> 
          <p>I honestly felt fantastic. And I didn’t even change anything about my daily routine. On Day 7 I got on the scale and had to do a double-take. I had lost 7-lbs, really?! But skeptical me, I still wasn’t convinced as they say you lose a lot of water at the beginning of any diet. I wanted to take a “wait & see” approach. But it sure was looking up! I now weighed under 140-lbs. for the first time since my 20’s.</p>
        </div>
		<div class="col-sm-6">
          <div class="gap20"></div>
          <img src="<?= $assets ?>img/img-w1.jpg" class="img-responsive center-block img-round">
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row"> 		
		<div class="col-sm-6">
          <div class="gap20"></div>
          <h2><strong class="text-pink">Week Two</strong></h2>
          <p>After two weeks of using <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a>, I started the week off with even more energy and was actually sleeping more soundly than before. I was no longer waking up during the night and tossing and turning because my body was actually able to relax (I believe this is a result of getting rid of the toxins). Plus I still managed to lose another 5-lbs, putting me at an unbelievable 12-lbs of weight loss, in just 2 weeks.I must admit that I’m starting to believe that this diet is more than just a gimmick. </p>
        </div>
		<div class="col-sm-6">
		    <div class="gap20"></div>
            <img src="<?= $assets ?>img/img-w2.jpg" class="img-responsive center-block img-round">	
			<div class="gap20"></div>
        </div>	 
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="gap20"></div>
          <h2><strong class="text-pink">Week Four</strong></h2>
          <p>After the fourth week, my final results were shocking. I lost an unbelievable 21-lbs since starting the <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> diet! Actually everyone at Women’s Health is kicking themselves for not having volunteered to be the guinea pig. Using the <?= $step1_name ?> and <?= $step2_name ?> diet in week 4 I lost 4 more pounds. But to be honest I really didn’t have much more left to lose. I am definitely going to continue taking <?= $step1_name ?> and <?= $step2_name ?> afterwards because it has so many antioxidants and vitamins that it makes my skin look unbelievable. A pretty sweet side-effect.“I couldn’t be any happier with the results. I Lost 21-lbs in 4 Weeks, No Special Diet, No Intense Exercise”</p>
        </div>
		<div class="col-sm-6">
		  <div class="gap20"></div>
          <img src="<?= $assets ?>img/img-w3.jpg" class="img-responsive center-block img-round">
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
        <div class="col-sm-3"><div class="gap20"></div>
        </div>
        <div class="col-sm-3"><div class="gap20"></div>
        </div>
        <div class="col-sm-6">
          <p><strong>Conclusion:</strong> <a href="<?= $step1_link ?>"><?= $step1_name ?> </a> combined with <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> is an effective and safe way for women to lose weight. You’ll drop pounds quickly which, in turn, will improve basically all areas of your overall health. As an unexpected side effect, <?= $step1_name ?> taken with <?= $step2_name ?> is also extremely effective at managing and reducing the symptoms of menopause.</p> 
          <p>No matter what your age is, it’s never too late to be trim and healthy – everyone should consider adding <a href="<?= $step1_link ?>"><?= $step1_name ?> </a> and <a href="<?= $step2_link ?>"> <?= $step2_name ?></a> to your diet today. We absolutely recommend it to our readers!</p>
            <img src="<?= $assets ?>img/img-c1.jpg" class="img-responsive center-block img-thumbnail"></span></p>
            <p><img src="<?= $assets ?>img/img-c2.jpg" class="img-responsive center-block img-thumbnail"></span></p>    
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h4 class="text-center"><strong class="text-blue">Limited Time Offer for Facebook Readers</strong></h4>
            <p class="text-left"><strong>TIME-SENSITIVE DEAL:</strong> For only a very short time, Facebook fans have access to a special deal. A thirty day supply will be sent to you risk-free. You only need to pay shipping. If the product doesn’t live up to your expectations, you can return the unused portion for a full refund. </p>
			<a href="<?= $step1_link ?>"><h5 class="text-center pillstep">HURRY: Only 8 Trials Remaining</h5></a>
            <div class="whitebg">
              <div class="row">
                  <div class="col-sm-5">
                    <img src="<?= $step1_image ?>" class="img-responsive center-block">
                  </div>
				  
                  <div class="col-sm-7">
                  <br>
                  <h4 class="text-center">Click here to get a Risk-Free Trial of <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a></h4>
                  <a href="<?= $step1_link ?>" class="cta step-link">Try Sample Today</a>
                  <p class="text-center"><small>Use this exclusive link and pay just $5.95 for Shipping and Handling</small></p>
                  <p class="text-center"><small><strong>DISCLAIMER:</strong> I used this product during my 4-week Experiment to achieve my results.</small></p>
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
              <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>img/blank-picture.jpg" class="img-responsive center-block"></div>
              <div class="col-xs-9 col-sm-10"><textarea class="form-control" placeholder="Write a comment..."></textarea><button class="uibutton confirm pull-right">Comment</button></div>
            </div>

            <div id="comments">
              <h5><a href="#">Recent Facebook Comments</a></h5>

              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>img/c1.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a href="#">Lana Rodgers Watson</a></strong></p>
                  <p>Exercise is one of my least favorite activities. I was so amazed when the pounds started just melting off after just two weeks of using this <?= $step1_name ?> supplement. Works great with no working out!</p>
                  <div class="comment-meta"><a href="#">Reply</a> &bull; 13 &bull; <a href="#">Like</a> &bull; <abbr title="Comment">12 minutes ago</abbr></div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>img/c2.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a href="#">Mary Jackson</a></strong></p>
                  <p>After breaking my leg, I simply couldn’t exercise like I used to. I had to do something to fight off unwanted weight gain. My sister swore by <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> so I decided to give it a try. I lost weight quickly and without any problems. Just don’t tell my sister I said she was right all along :)</p>
                  <div class="comment-meta"><a href="#">Reply</a> &bull; 6 &bull; <a href="#">Like</a> &bull; <abbr title="Comment">13 minutes ago</abbr></div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>img/c3.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a href="#">Molly Reynolds</a></strong></p>
                  <p>I’ve always struggled with my weight. But after two months of regular <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> usage, my weight problems are a thing of the past! Plus I’m filled with energy all day long!</p>
                  <div class="comment-meta"><a href="#">Reply</a> &bull; 19 &bull; <a href="#">Like</a> &bull; <abbr title="Comment">46 minutes ago</abbr></div>
                  
                </div>
              </div>
              <hr>
             
             
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>img/c5.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a href="#">Regina White</a></strong></p>
                  <p>Thank you <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a>! My belly is flat, my arms are toned and I look fantastic.</p>
                  <div class="comment-meta"><a href="#">Reply</a> &bull; 53 &bull; <a href="#">Like</a> &bull; <abbr title="Comment">about an hour ago</abbr></div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2"><img src="<?= $assets ?>img/c8.jpg" class="img-responsive center-block"></div>
                <div class="col-xs-9 col-sm-10">
                  <p><strong><a href="#">Tanya Gonzales</a></strong></p>
                  <p>I lost 12 pounds in just three weeks! Works great so far. Excited to see how much more weight I’ll lose.</p>
                  <div class="comment-meta"><a href="#">Reply</a> &bull; 3 &bull; <a href="#">Like</a> &bull; <abbr title="Comment">1 hour ago</abbr></div>
                </div>
              </div>
              
              <hr>
            <div>
          </div>  
          <div class="col-md-3"></div>
          
          
          
        </dffffiv>
      </div>
  </section>
  <section class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><img src="<?= $assets ?>img/logo.png" class="center-block img-responsive"></div>
      </div>
    </div>
  </section>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?= $assets ?>js/jquery-1.11.3.min.js"><\/script>')</script> 
  <script src="<?= $assets ?>js/bootstrap.min.js"></script>
  <script src="<?= $assets ?>js/date.js"></script>
  <script src="<?= $assets ?>js/modernizr-2.8.3.min.js"></script>
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="<?= $assets ?>css/font-awesome.min.css">
  
<?= $scripts ?>
</body>
</html>
