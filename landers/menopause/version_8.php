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
        l.href = '<?= $assets ?>css/bootstrap.min.css';
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
        l.href = '<?= $assets ?>css/main.css';
        var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(cb);
      else window.addEventListener('load', cb);
    </script>
    <style>
      .img-responsive { max-width: 100%}
    </style>


</head>
  <body>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <section class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 center-block">
          <span class="col-lg-offset-3 col-lg-1">
            <img src="<?= $assets ?>img/logo_base.png" class="center-block img-responsive">
          </span>
          <span class="col-lg-5">
              <h1 class="text-center logo-text center-block">Women's Health Tips</h1>
          </span>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row headline">
        <div class="col-sm-12">
          <?= $this->variant($v, 'headlines') ?>
		  <div class="full-width-image">
		  <img src="<?= $assets ?>img/img-w6.jpg">
		  </div>
          <div class="gap20"></div>
          <div class="datebar">
            <em>by Karen Parkers</em> <i class="fa fa-clock-o"></i> <span class="current-date"></span>
            <img src="<?= $assets ?>img/social.png" class="pull-right hidden-xs">
          </div>

          <h4><strong>Article Summary</strong></h4>
          <ul>
          <li>Women over the age of 40 can drop weight, improve their mood and sleep better at night. </li>
          <li> The all-natural fruit extract <a href="<?= $step1_link ?>"><?= $step1_name ?></a> allows women to keep their diets while losing weight. </li>
          <li>This &quot;Menopause Slim-Down&quot; is  available to facebook users for one day only for <?= $geo->money(5, 0) ?>. </li>
          </ul>

          <div class="gap20"></div>
          <p><strong class="text-pink">(Women's Health)</strong> - Since the beginning of the year, our readers have been going crazy over a new <a href="<?= $step1_link ?>">"Skinny Pill"</a> that is sweeping the nation and helping people from all walks of life transform their bodies quickly and safely - a product that has been so successful, many weight-loss doctors and plastic surgeons now want to see it banned.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <img src="<?= $assets ?>img/img-1.jpg" class="img-responsive center-block img-thumbnail" ><div class="gap20"></div>
        </div>

        <div class="col-sm-6">
          <div class="gap20"></div>
          <p>They are making accusations that it causes people to get lean too quickly and should be regulated, despite the fact that it&rsquo;s clinically proven to be safe and has none of the dangerous side effects that prescription diet pills have.</p>
          <p>Since the products were recently featured on an episode of The Dr. Oz Show, we have been getting 1000&rsquo;s of daily letters from our readers, begging us for more information and asking us how they can get their hands on this new fat-burning supplement. Surprisingly, many people who struggle daily with their weight have yet to hear about this powerful option.</p>
          <p>In a recent exclusive interview with Women&rsquo;s Health, movie star Scarlett Johansson credits the product with helping her lose nearly <?= $geo->weight(22) ?> of body fat in preparation for her role as the &lsquo;Black Widow&rsquo; in The Avengers. Dozens of other celebrities like Jennifer Hudson, Christina Aguilera, Sandra Bullock and Kelly Osborne have all lost weight and transformed their bodies using this controversial pill. Even Men have gotten in on the weight-loss action and used the same product to make some drastic physical transformations.</p>
        </div>
      </div>
      <div class="gap20"></div>

    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-sm-push-7">
          <div class="gap20"></div>
          <img src="<?= $assets ?>img/img-2.jpg" class="img-responsive center-block img-thumbnail">

        </div>
        <div class="col-sm-7 col-sm-pull-5">
        <div class="gap20"></div>
        <p>The product we're talking about is called <a href="<?= $step1_link ?>"><?= $step1_name ?></a>. You may have seen it in the news, on TV, or trending online as the safe and powerful "secret diet trick&rdquo; being used by models, celebrities and regular folk all across <?= $geo->name() ?> . <a href="<?= $step1_link ?>"><?= $step1_name ?></a>'s high anti-oxidant content and powerful fat burning properties make it a belly busting machine. Combine it with the detoxifying, cleansing and additional weight loss effect of a <a href="<?= $step2_link ?>"><?= $step2_name ?></a> and you see why this deserves a Special Report. But maybe the most important part is that <?= $step1_name ?> is finally available nationwide WITHOUT a prescription.</p>
          <p><strong>If you're interested in losing weight without diet or exercise, <a href="<?= $step1_link ?>"><?= $step1_name ?></a> is something you need to know more about.</strong></p>


        </div>
      </div>

    </div>
  </section>




  <section class="padding-tb-40 pinkbar">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <p>&nbsp;</p>
          <p>If you&rsquo;re feeling skeptical right now, you&rsquo;re not alone. We here at Women&rsquo;s Health have seen many promising products come and go over the last 18 years. When we first learned about &lsquo;yet another&rsquo; fat-burning/body-firming product our fad radar went off right away. Even after pouring through mountains of research. While I had an educated opinion, I still had no personal proof that <a href="<?= $step1_link ?>"><?= $step1_name ?></a> option was worth the time. So, with my editors blessing, I decided to go out and put the product to the test myself. What better way to find out the truth than to conduct my own study?</p>
          <p>We know that the thought of losing your excess fat often feels like an impossible challenge. We&rsquo;ve evaluated numerous fat-loss programs and it seems like everything, too demanding or doesn&rsquo;t work as claimed. The reason why most programs fail is because they impose unrealistic restrictions on your daily life.</p>
          <p>In this special report, I explain exactly how I tested the product and show you the surprising results I achieved. Today, I&rsquo;m leaking the secret to what, we here at Women&rsquo;s Health, call &ldquo;quite possibly the most effective female physique transformation stack the world has ever seen&rdquo;. I&rsquo;ll show you how you too can get a leaner, slimmer sexier body quickly and safely without having to use illegal drugs or paying <?= $geo->money(1000) ?>'s for surgery.</p>
          <h3><strong>The Science behind<a href="<?= $step1_link ?>"> <?= $step1_name ?></a></strong></h3>
          <p><a href="<?= $step1_link ?>"><?= $step1_name ?></a> is a small fruit which looks a bit like a tiny pumpkin. Found in Asia, Australia, Polynesia and parts of Africa, this fruit has long been used by native people because of its amazing and diversified health properties. </p>

          <div class="benefits">
            <h3><strong><a href="<?= $step1_link ?>"><?= $step1_name ?></a></strong> has been scientifically proven to:</h3>
            <ul>
              <li>Burn fat by naturally boosting your metabolism</li>
              <li>Remove unwanted cellulite, belly fat and arm fat</li>
              <li>Increase your energy levels during the day</li>
              <li>Increase the quality of your sleep during the night</li>
            </ul>
          </div>
          <p>Here at Women’s Health, we were amazed to learn about how effective<a href="<?= $step1_link ?>"> <?= $step1_name ?></a> is when used for weight loss. But we noticed something else remarkable - <strong>many of the problems <a href="<?= $step1_link ?>"><?= $step1_name ?></a> treats are problems associated with menopause.</strong></p>
          <p>Menopausal women often experience hot flashes, decreased energy levels, restlessness when sleeping and mood changes. <a href="<?= $step1_link ?>"><?= $step1_name ?></a> treats every one of these symptoms. Even better, <?= $step1_name ?> is completely natural and safe.</p>
          <p>If you’re a woman experiencing menopause, <a href="<?= $step1_link ?>"><?= $step1_name ?> </a>can help lessen the symptoms – and even prevent some of them from occurring in the first place.</p>
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

          <p>The <?= $step1_name ?> fruit can be a bit difficult to get ahold of. Fortunately, <a href="<?= $step1_link ?>"><?= $step1_name ?></a> extract works just as well – if not better – than the fruit itself. An extract captures the nutrients and powers of the fruit in an easy-to-use form which you take once or twice a day. There are many options available but after doing our research we recommend <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a>.</p>

          <?= $step1_name ?> offers all of the benefits of the Garcinia Cambogia fruit, without the hassle of eating and obtaining the fruit from Asia, Africa, or Australia. This extract is created in a high quality laboratory under the supervision of chemists and nutritionists.</p>

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
          <h4><strong><a href="<?= $step1_link ?>" class="step-link"> <?= $step1_name ?></a> Clinical Studies</strong></h4>
          <ul>
          <li>The health journal Lipids in Health &amp; Disease  showed that subjects who took <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> lost an average of <?= $geo->weight(19.3) ?> in four weeks. Subjects did not change their diet or exercise habits during the study.</li>

          <li><?= $step1_name ?> contains <b>no toxins, artificial chemicals or stimulants</b>. It is 100% natural.</li>

          <li>Studies show <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> increases metabolism. In turn, the increased metabolic functions increase weight loss by more than 640%.</li>

          <li>Studies also show a 39% <b>reduction in cholesterol</b> along with a <?= $geo->weight(2) ?> average reduction in belly fat over four weeks.</li>

          <li>Subject in the study who took <?= $step1_name ?> lost an average of <?= $geo->weight(17) ?> more than study participants who were given a placebo. </li>

          <li>Additional studies show that participants who took <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?> </a> had a 49% reduction in fat loss and a reduction of body weight of up to 4.6%.</li>
          </ul>

          <p>Of course, we’d never recommend <?= $step1_name ?> without firsthand knowledge. This is why we’d like to introduce our readers to Dolores Williams.</p>

          <h4><strong>Dolores Williams, 52, Lost <?= $geo->weight(21) ?> in 30 Days. Here’s How She Did It and How You Can, Too!</strong></h4>

          <p>When we were asking our staff if they knew any women who might be willing to test out <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> for our report, almost immediately our associate editor Christina Williams raised her hand.</p>

          <p>“My mother is 52 years old and just last week her doctor told she needed to lose weight as soon as possible,” said Ashley. “The problem is a heart condition that keeps her from doing any strenuous exercise. She’s been looking for a way to stay out of the gym but also drop the <?= $geo->unit('weight') ?>.”</p>
          <p>Ashley’s mom, Dolores, seemed like the perfect candidate to give us an honest report of her experiences. When we approached her, she was thrilled to try it out. And, as we quickly learned, she wasn’t the type of person to hold back her opinion.</p>
          <div class="gap20"></div>
        <h3 class="text-center"><strong>Dolores' Complete Weight-Loss Report</strong></h3><div class="gap20"></div>

        <p>Hi everyone!</p>
        <p>My first step was to order the products directly from the website. With their money-back guarantee, I had nothing to worry about.</p>
        <p>My bottle of <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a> arrived in four days with no problems.</p>
        <p>Instructions were simple. I took one pill in the morning and another pill in the evening. My complete journal is below:</p>

        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">

      <div class="row">
        <div class="col-sm-6">
        <div class="gap20"></div>
          <img src="<?= $assets ?>img/img-w1.jpg" class="img-responsive center-block img-round">
        </div>
        <div class="col-sm-6">
          <h2><strong class="text-pink">Week One</strong></h2>
          <p>My doctor just told me I was fat. Well, he didn’t say it so directly – he went on about my BMI and where I fit in on the obesity scale – but I knew what he meant. I was at least <?= $geo->weight(15) ?> overweight.</p>
          <p>Going to the gym just isn’t a part of my lifestyle. I have a bad ticker and bad knees. So I needed something which would help me stop being fat, but which didn’t require diet or exercise. When my daughter suggested <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a>, I was intrigued.</p>
          <p>I took one pill daily for the first week. Right away, I noticed an increase in energy. That was great, but what I really wanted was weight loss. Well, within the first week, I dropped <?= $geo->weight(7) ?>. But was it just water weight?</p>
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="gap40"></div>
          <h2><strong class="text-pink">Week Two</strong></h2>
          <p>Those first <?= $geo->weight(7) ?>weren't just water weight! By the end of week two, I lost an additional <?= $geo->weight(5) ?>. I didn't have to change my diet or routine in any way. I was now down a total of <?= $geo->weight(12) ?>. Trust me, I’d never lie to the readers of Women's Health. After all, my daughter works there! </p>

        </div>
        <div class="col-sm-6">
            <img src="<?= $assets ?>img/img-w2.jpg" class="img-responsive center-block img-round">
        </div>
      </div>
    </div>
  </section>
  <section class="padding-tb-40 graybar">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img src="<?= $assets ?>img/img-w3.jpg" class="img-responsive center-block img-round">
        </div>
        <div class="col-sm-6">
          <div class="gap40"></div>
          <h2><strong class="text-pink">Week Four</strong></h2>
          <p>My doctor was completely surprised – in a good way! I lost <?= $geo->weight(21) ?> in just one month. And I didn’t change my lifestyle in any way except with the addition of <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a>.</p> <p>In just one month, I lost enough weight that my doctor no longer considers my weight a risk factor. Here’s to the long life ahead of me!</p>
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
            <img src="<?= $assets ?>img/img-c1.jpg" class="img-responsive center-block img-thumbnail"><div class="gap20"></div>
        </div>
        <div class="col-sm-3">
            <img src="<?= $assets ?>img/img-c2.jpg" class="img-responsive center-block img-thumbnail"><div class="gap20"></div>
        </div>
        <div class="col-sm-6">
        <p><strong>The Results of Our Investigation:</strong> <a href="<?= $step1_link ?>"><?= $step1_name ?> extract</a> is an effective and safe way for women to lose weight. You’ll drop <?= $geo->unit('weight') ?> quickly which, in turn, will improve all areas of your overall health. As an unexpected side effect,
            <?= $step1_name ?> extract is also extremely effective at managing and reducing the symptoms of menopause.</p>
            <p>No matter what your age is, it’s never too late to be trim and healthy – and <a href="<?= $step1_link ?>"><?= $step1_name ?> </a> is a great solution. We absolutely recommend it to our readers!</p>
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
            <p class="text-center"><strong>TIME-SENSITIVE DEAL:</strong> For only a very short time, Facebook fans have access to a special deal. A thirty day supply will be sent to you risk-free. You only need to pay shipping. If the product doesn’t live up to your expectations, you can return the unused portion for a full refund. </p>

            <div class="whitebg">
              <div class="row">
                  <div class="col-sm-5">
                    <img src="<?= $step1_image ?>" class="img-responsive center-block">
                  </div>
                  <div class="col-sm-7">
                  <h5 class="text-center pillstep">HURRY: Only 8 Trials Remaining</h5><br>
                  <h4 class="text-center">Click here to get a Risk-Free Trial of <a href="<?= $step1_link ?>" class="step-link"><?= $step1_name ?></a></h4>
                  <a href="<?= $step1_link ?>" class="cta step-link">Try Sample Today</a>
                  <p class="text-center"><small>Use this exclusive link and pay just <?= $geo->money(5.95) ?> for Shipping and Handling</small></p>
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
                  <p>Exercise is one of my least favorite activities. I was so amazed when the <?= $geo->unit('weight') ?> started just melting off after just two weeks of using this <?= $step1_name ?> supplement. Works great with no working out!</p>
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
                  <p>I lost <?= $geo->weight(12) ?> in just three weeks! Works great so far. Excited to see how much more weight I’ll lose.</p>
                  <div class="comment-meta"><a href="#">Reply</a> &bull; 3 &bull; <a href="#">Like</a> &bull; <abbr title="Comment">1 hour ago</abbr></div>
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
 <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<?= $scripts ?>

</body>
</html>
