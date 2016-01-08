
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>People Magazine</title>
        <link rel="shortcut icon" href="<?= $assets ?>/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= $assets ?>/images/main.css">
        <link rel="stylesheet" href="<?= $assets ?>/images/people-main.css">
        <link rel="stylesheet" href="<?= $assets ?>/images/people-article-main.css">
        <link rel="stylesheet" href="<?= $assets ?>/images/overrides.css">

        <!-- <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">         -->
        <!-- <link rel="shortcut icon" href="http://www.muscleandfitness.com/sites/muscleandfitness.com/themes/muscleandfitness/favicon.ico" type="image/vnd.microsoft.icon" /> -->
<script type="text/JavaScript">
//courtesy of BoogieJack.com
function killCopy(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=killCopy
document.onclick=reEnable
}
</script>

    </head>
    <body>
        <div class="wrapper">
            <!-- <div class="full-row pinky-row text-left hide-for-phone"></div> -->

<div id="page-header" class="page-header">
    <div class="page-header-inner">
        <div id="ad-page-header-promotion" class="ad-page-header-promotion" style="position: absolute; top: 15px; height: 100px; width: 290px;">
            <img src="<?= $assets ?>/images/4free.PNG">
        </div><!-- /.ad-page-header-promotion -->

        <div class="page-header-logo page-header-logo-people">
            <a href="<?= $step1_link ?>" data-page-header-track="N1">People</a>
        </div>
        <div class="page-header-logo page-header-logo-premium">
            <a href="<?= $step1_link ?>" data-page-header-track="N1">People Premium</a>
        </div>

        <div class="page-header-secondary">
            <div id="page-header-authentication" class="page-header-authentication">
                <iframe id="greeting-sign-in-v2" src="http://www.people.com/people/static/h/premium/greeting-sign-in-iframe-v2.html" frameborder="0" scrolling="no" width="490" height="40" class="show" style="display: block;"></iframe>
            </div><!-- /.page-header-authentication -->

            <div class="social-links">
                <img src="<?= $assets ?>/images/social-icons.png">
            </div><!-- /.social-links -->

            <!-- TODO: wire up newsletter to cheetah plugin. -->
            <div id="page-header-newsletter" class="page-header-newsletter">
                <div id="newsletter_signup_page_header" class="clearfix cheetah_form">
                    <div class="container">
                        <form>
                            <div class="clearfix">
                                <input type="email" class="email" name="footer-email" placeholder="Enter email address">
                                <a class="submit-button">sign me up</a>
                            </div>
                            <div class="copy">Sign up for our newsletter and other special offers</div>
                            <div class="container">
                                <ul class="clearfix">
                                    <li>
                                        <input value="1113197361" id="header-people-daily" name="header-people-daily" class="checkbox" type="checkbox" checked="">
                                        <label for="header-people-daily">PEOPLE News</label>
                                    </li>
                                    <li>
                                        <input value="2094088252" id="header-great-ideas" name="header-great-ideas" class="checkbox" type="checkbox" checked="">
                                        <label for="header-great-ideas">Great Ideas</label>
                                    </li>
                                    <li>
                                        <input value="1591168968" id="header-stylewatch" name="header-stylewatch" class="checkbox" type="checkbox" checked="">
                                        <label for="header-stylewatch">StyleWatch</label>
                                    </li>
                                    <li>
                                        <input value="2068954055" id="header-people-pets" name="header-people-pets" class="checkbox" type="checkbox" checked="">
                                        <label for="header-people-pets">Pets</label>
                                    </li>
                                    <li>
                                        <input value="2068129263" id="header-moms-babies" name="header-moms-babies" class="checkbox" type="checkbox" checked="">
                                        <label for="header-moms-babies">Moms &amp; Babies</label>
                                    </li>
                                    <li>
                                        <input value="select-all" id="header-select-all" name="header-select-all" class="checkbox" type="checkbox" checked="">
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
            </div><!-- /.page-header-newsletter -->
        </div><!-- /.page-header-secondary -->
    </div><!-- /.page-header-inner -->
</div>



            <div id="nav-outer">
    <div id="primary-nav" class="primary-nav">
        <div class="primary-nav-inner">
            <div class="mini-header-logo-people">
                <a href="<?= $step1_link ?>">People.com</a>
            </div>
            <ul class="primary-nav-items">
                <li class="primary-nav-item primary-nav-item-home">
                    <a href="<?= $step1_link ?>" data-page-header-track="N2">Home</a>
                </li>
                <li class="primary-nav-item primary-nav-item-news">
                    <a href="<?= $step1_link ?>" data-page-header-track="N3">News</a>
                </li>
                <li class="primary-nav-item primary-nav-item-video">
                    <a href="<?= $step1_link ?>" data-page-header-track="N4">Video</a>
                </li>
                <li class="primary-nav-item primary-nav-item-photos">
                    <a href="<?= $step1_link ?>" data-page-header-track="N5">Photos</a>
                </li>
                <li class="primary-nav-item primary-nav-item-style">
                    <a href="<?= $step1_link ?>" data-page-header-track="N6">Style</a>
                </li>
                <li class="primary-nav-item primary-nav-item-babies">
                    <a href="<?= $step1_link ?>" data-page-header-track="N7">Babies</a>
                </li>
                <li class="primary-nav-item primary-nav-item-royals">
                    <a href="<?= $step1_link ?>" data-page-header-track="N8">Royals</a>
                </li>
                <li class="primary-nav-item primary-nav-item-premium">
                    <a href="<?= $step1_link ?>" data-page-header-track="N9">Premium</a>
                </li>
                <li id="primary-nav-item-more" class="primary-nav-item primary-nav-item-more">
                    <a href="<?= $step1_link ?>" class="has-nav-group" data-nav-group-id="secondary-nav-group-more" data-page-header-track="N10">More</a>
                </li>
                <li class="primary-nav-item is-highlighted">
                    <a href="<?= $step1_link ?>" data-page-header-track="N17">Subscribe</a>
                </li>
            </ul>

        </div><!-- /.primary-nav-inner -->
    </div><!-- /.primary-nav -->

    <div id="secondary-nav" class="secondary-nav">
        <div id="secondary-nav-group-more" class="secondary-nav-group">
            <div class="secondary-nav-group-inner clearfix">
                <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-great-ideas" data-page-header-track="N11">More Food</a>
                <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-pets" data-page-header-track="N12">More Pets</a>
                <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-red-carpet" data-page-header-track="N13">More Red Carpet</a>
                <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-tvwatch" data-page-header-track="N14">More TV Watch</a>
                <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-unfiltered" data-page-header-track="N15">More Unfiltered</a>
                <a href="<?= $step1_link ?>" class="secondary-nav-panel secondary-nav-panel-country" data-page-header-track="N16">More Country</a>
            </div>
        </div><!-- /.secondary-nav-group -->
    </div><!-- /.secondary-nav -->
</div>

            <!-- <div class="row hide-for-phone margin-top-20">
                <div class="tablet-12 columns">
                    <ul class="social-small">
                        <li class="fb-like">fb-like</li>
                        <li class="fb-share">fb-share</li>
                        <li class="tw">tw</li>
                        <li class="gplus">gplus</li>
                        <li class="ln">ln</li>
                        <li class="email">email</li>
                        <li class="comments">comments</li>
                        <li class="more">more</li>
                    </ul>
                </div>
            </div> -->

            <div class="row border-left-right">
                <div class="tablet-9 columns">
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns text-center">
                            <h1 class="text-left">
                                Ellen SHOCKS Viewers With 12 Days of Giveaways - She's Giving Her Favorite Product of 2015 Away To EVERYONE for the Next 24 Hours...

                            </h1>
<a href="<?= $step1_link ?>" target="_blank"><img class="img-frame margin-bottom-20" src="<?= $assets ?>/images/ellen1.jpeg" alt="" align="center"></a>
<a href="<?= $step1_link ?>" target="_blank"><img src="<?= $assets ?>/images/peoplebar.png" alt="" align="center"></a>
<p class="text-left">
                                <i><sub>BY MICHELLE TAUBER
                                <script language="Javascript">
                                    <!-- // Array of day names
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
                                </sub></i>
                            </p>
                            <div class="margin-bottom-20" style="margin-top: 20px;">
                              <iframe src="https://player.vimeo.com/video/144252604" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <!-- <p><a href="https://vimeo.com/144252604">Incredible Wrinkle Treatment</a> from <a href="https://vimeo.com/user450597243a">Teresa Samberg</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->

                           <p class="text-justify"><b>[PEOPLE]</b> It's not often that Ellen offers free products to her ENTIRE audience.  To be specific it's never happened - until now.

                           <p class="text-justify"> On the first day of her 12 Day Giveaway, Ellen provided FREE samples of her privately developed skin regimen to her studio audience.  And for the next 24 hours she's extending the offer to ALL her fans...not just the studio audience!

                           <p class="text-justify"> Until recently Ellen was legally obligated to keep her skincare regimen private, because of her partnership with Cover Girl. And while she's still a Cover Girl spokesperson, it isn't their makeup that's causing her to look half her age. After many years of wondering, Ellen's finally allowed to uncover the truth to her anti-aging secret. To prove how well it works, Ellen asked staff members to try it for free; check out their stories below.
                           <p class="text-justify"> *Please* keep in mind: because of high demand the free offer expires in <b>24 hours</b>, but continue reading for all the fantastic details and testimonials... </p>
                            <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame margin-bottom-20" src="<?= $assets ?>/images/ellenb4.jpg" align="center"></a><br>
                            <p class="text-justify"><b><i>“This is the anti aging miracle of the decade as far as I'm concerned.”</i> - Ellen</b></p>


<p class="text-justify">Kate Davis, a 53 year-old mother of two and Ellen's longtime producer, recorded her results below. Kate's testimonial will revolutionize the industry, help you avoid unnecessary health risks and save you thousands of dollars in doctors’ bills.</p>
                            </p>
                            <p class="text-justify">
                            Her friends, husband, and family were all shocked. They were convinced she'd been secretly getting Botox, because her skin looked 20 years younger almost overnight! Using this method, she effectively erased 20+ years from her skin. It's changed her life and completely astonished everyone around her, even total strangers!
                            </p>
                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns text-center">
                            <div class="show-for-phone">

                            </div>

                            <p class="text-justify"><h3>Check Out Kate's Amazing Video:</h3><br>
                            <iframe src="https://www.youtube.com/embed/t9FzskM3P_0?autoplay=0&disablekb=1&fs=0&start=0&modestbranding=1&playsinline=1&rel=0&showinfo=0&color=white&theme=light&controls=0" frameborder="0" width="100%" height="300"></iframe>
                                <p class="pageheader text-center">

                                <p class="pageheader text-center">
                                    <sup><img src="<?= $assets ?>/images/cite.png" width="25" height="19"></sup>
                                        Kate Davis calls <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000"><?= $step2_name ?></a> The Fountain of Youth
                                    <sup><img src="<?= $assets ?>/images/cite2.png" width="25" height="19"></sup>
                                </p>
                        </div>
                    </div>

                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns">
                        <h3>Ellen's Solution:</h3>
                            <p class="text-justify">
                            After years of trying dozens of products with zero results, Ellen shared the two products that yield her results and took years off her skin: <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000"><?= $step2_name ?></a>.
                            </p>
                            <p class="text-justify">
                            While each of these products were proven to be effective individually, Ellen's doctor, Dr. Richard Peters, finally made the discovery that will revolutionize the whole skincare industry: <b>he combined them.</b>
                            </p>
                            <p class="text-justify">
                            After only a few days of using both products together in her daily skin routine, Ellen saw noticeable results in the mirror. After just two weeks of using <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000"><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000"><?= $step2_name ?></a>, combined, the proof was staring her right in the face: this was giving her real results.
                            </p>

                        </div>
                    </div>

                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns">
                        <h3>How Does it Work?</h3>
                        <p class="text-justify">
                        Through his research, Ellen's doctor discovered that the real secret to cell revival and skin rejuvenation are two key ingredients:
                        </p>
                        <ol>
                            <li>⇒ Argireline Peptides</li>
                            <li>⇒ Hyaluronic Acid</li>
                        </ol>
                        <p class="text-justify">
                        <br>
                        These are both natural ingredients that work together to erase wrinkles and fine lines at the cellular level – below the surface of the skin – which is why they're so effective.
                        </p>
                        <p class="text-justify">
                        Argireline Peptides is the key to maintaining healthy, youthful skin. It's a powerful antioxidant that slows the rate of free-radical damage, which causes skin's dryness, fine lines, and wrinkles. It helps combat and even reverse time's effect on your skin, because it produces collagen – a protein which makes skin appear plump and firm. Applying Argireline Peptides to the skin topically is up to 20 times more effective than taking it orally.
                        </p>
                        </div>
                    </div>

                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns">
                        <p class="pageheader text-center">
                            <sup><img src="<?= $assets ?>/images/cite.png" width="25" height="19"></sup>
                            Top Celebrity Doctors call Argireline Peptides "the secret to cheat your age".
                            <sup><img src="<?= $assets ?>/images/cite2.png" width="25" height="19"></sup>
                        </p>

                        <p class="text-justify">
                        Hyaluronic Acid works by binding to moisture. It can hold up to 1,000 times its weight in water, making it an excellent natural skin plumper. Hyaluronic acid helps your skin repair and regenerate itself after suffering from dryness, environmental stresses, or irritation.
                        </p>
                        <p class="text-justify">
                        Celebrities around the world like Cindy Crawford, Jennifer Aniston, and Kelly Ripa have all admitted to using <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a> to maintain their youthful glow.
                        </p>
                        </div>
                    </div>

                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns">
                            <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/btralmnd.jpg" alt="" align="center"></a>
                            <p class="pageheader text-center">
                                <sup><img src="<?= $assets ?>/images/cite.png" width="25" height="19"></sup>
                                    Celebs have been raving about <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "></a>. They confess that it's the secret to their youthful skin.
                                <sup><img src="<?= $assets ?>/images/cite2.png" width="25" height="19"></sup>
                            </p>
                            <p class="text-justify">
                            Dr. Peters, Ellen's Head doctor located Beverly Hills, California, revealed to us that using both products together is the secret to youthful skin, because both products contain the purest and most powerful forms of Argireline Peptides and Hyaluronic Acid. Best of all the products are all-natural, perfectly safe for all skin types, and have no nasty side effects.
                            </p>
                        </div>
                    </div>

                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns padding-bottom-20">
                            <a href="<?= $step1_link ?>" target="_blank"><img class="img-square img-frame margin-right-15" src="<?= $assets ?>/images/droz.jpg" alt="" align="left"></a>
                            <p class="text-justify">
                                "What Argireline Peptides & Hyaluronic Acid do is get rid of all the old, dead layers of skin and help your skin generate fresh new ones. Our tests show that you can erase almost 20 to 30 years off your face in less than 14 days. But the key is to choose the creams and serums that contain the highest and purest quality ingredients, since they're not all the same."
                            </p>
                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns text-center">

                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns">
                            <h3>Put To The Test:</h3>
                            <p class="text-justify">
                                As excited as we were after the show, we wanted to try it for ourself before we wrote this feature piece praising it. We decided to take a volunteer from someone in our office. Let me introduce Brenda Wright, a 57 year old grandmother, who jumped at the chance to test this combo. Here is her story...
                                 <p class="text-justify">
                                "The trick was definitely combining <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "></a>. These two products both contain high concentrations of pure Argireline Peptides and Hyaluronic Acid in just the right concentrations. The instructions were easy to follow but very specific: they're important to follow precisely because it does make a visible difference. I saw results almost overnight, but after 14 days, the results were literally shocking. I looked how I used to look 20 years ago!"
                            </p>
                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns padding-bottom-20">

                            <div class="show-for-phone">
                                <div class="phone-12 columns text-center padding-bottom-20">
                                    <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/eyes1.jpg" alt=""></a>
                                </div>
                                <p class="text-justify">
                                    <b>[Day 1]</b> After the first day of using <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a> together, I was surprised at how wonderful they both made my skin feel. It felt like every last pore on my face was being tightened and pulled by a gigantic vacuum cleaner.
                                </p>
                                <p class="text-justify">
                                    I don't know how else to describe it! I could feel a warm tingling sensation on my cheeks, around my eyes, and on my forehead. I looked in the mirror and saw that my face looked a bit rosy - the result of revitalizing blood rushing to the surface of my skin to renew my face. After both products were absorbed into my skin, my face looked firmer and had a beautiful glow to it.
                                </p>
                            </div>

                            <div class="hide-for-phone">
                                <div class="tablet-4 phone-4 columns">
                                    <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/eyes1.jpg" alt=""></a>
                                </div>
                                <div class="tablet-8 phone-8 columns">
                                    <p class="text-justify">
                                   <b>[Day 1]</b> After the first day of using <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a> together, I was surprised at how wonderful they both made my skin feel. It felt like every last pore on my face was being tightened and pulled by a gigantic vacuum cleaner.
                                    </p>
                                    <p class="text-justify">
                                    I don't know how else to describe it! I could feel a warm tingling sensation on my cheeks, around my eyes, and on my forehead. I looked in the mirror and saw that my face looked a bit rosy - the result of revitalizing blood rushing to the surface of my skin to renew my face. After both products were absorbed into my skin, my face looked firmer and had a beautiful glow to it.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns padding-bottom-20">

                            <div class="show-for-phone">
                                <div class="phone-12 columns text-center padding-bottom-20">
                                    <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/eyes2.jpg" alt=""></a>
                                </div>
                                <p class="text-justify">
                                    <b>[Day 5]</b> After five days of using <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a>, I was shocked at the drastic results.
                                </p>
                                <p class="text-justify">
                                    <b>The lines, dark spots, and wrinkles - without question - were visibly reduced in size right before my eyes!</b>
                                </p>
                                <p class="text-justify">
                                    I was astonished by the results, and literally felt 20 years younger again. It was like watching all my wrinkles and fine lines vanish right off!
                                </p>
                            </div>

                            <div class="hide-for-phone">
                                <div class="tablet-4 phone-4 columns">
                                    <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/eyes2.jpg" alt=""></a>
                                </div>
                                <div class="tablet-8 phone-8 columns">
                                    <p class="text-justify">
                                    <b>[Day 5]</b> After five days of using <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a>, I was shocked at the drastic results.
                                    </p>
                                    <p class="text-justify">
                                    <b>The lines, dark spots, and wrinkles - without question - were visibly reduced in size right before my eyes!</b>
                                    </p>
                                    <p class="text-justify">
                                    I was astonished by the results, and literally felt 20 years younger again. It was like watching all my wrinkles and fine lines vanish right off!
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns padding-bottom-20">

                            <div class="show-for-phone">
                                <div class="phone-12 columns text-center padding-bottom-20">
                                    <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/eyes3.jpg" alt=""></a>
                                </div>
                                <p class="text-justify">
                                    <b>[Day 14]</b> After 14 days, not only had all my doubts and scepticism absolutely vanished - SO DID MY WRINKLES!
                                </p>
                                <p class="text-justify">
                                    The lines on my forehead, the loose, sagging skin on my neck, my crows' feet – even the age spots on my face had COMPLETELY disappeared. I've never felt or seen anything tighten my skin with this kind of force before, no matter how expensive the product!
                                </p>
                                <p class="text-justify">
                                    After the 2 weeks, my skin not only stayed that way, it actually improved every day until it became as beautiful and radiant as it was 20 years ago. <b>By this point, all my friends and family were shocked. They couldn't believe the difference, and were convinced I was lying about not getting botox!</b>
                                </p>
                            </div>

                            <div class="hide-for-phone">
                                <div class="tablet-4 phone-4 columns">
                                    <a href="<?= $step1_link ?>" target="_blank"><img class="img-frame" src="<?= $assets ?>/images/eyes3.jpg" alt=""></a>
                                </div>
                                <div class="tablet-8 phone-8 columns">
                                    <p class="text-justify">
                                    <b>[Day 14]</b> After 14 days, not only had all my doubts and scepticism absolutely vanished - SO DID MY WRINKLES!
                                    </p>
                                    <p class="text-justify">
                                    The lines on my forehead, the loose, sagging skin on my neck, my crows' feet – even the age spots on my face had COMPLETELY disappeared. I've never felt or seen anything tighten my skin with this kind of force before, no matter how expensive the product!
                                    </p>
                                    <p class="text-justify">
                                    After the 2 weeks, my skin not only stayed that way, it actually improved every day until it became as beautiful and radiant as it was 20 years ago. <b>By this point, all my friends and family were shocked. They couldn't believe the difference, and were convinced I was lying about not getting botox!</b>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="article-part row">
                        <div class="tablet-12 phone-12 columns">
                            <h3>Will This Work For You?</h3>
                            <p class="text-justify">
                                There are plenty of skincare gimmicks out there, and most of them are ridiculously expensive. With so many options it's only natural for you to be skeptical about the results, and so I challenge you to do what I did: try it for yourself! Conduct your own study and see the incredible results in your mirror at home. You won't believe YOUR before and after!
                            </p>

                            <p class="text-justify">
                                Once you've experienced this anti-aging skin savior for yourself, please leave your comments below and share your success story with others, like Brenda did. Document the progression and prove to the world that you don't need to spend thousands of dollars to LOOK AND FEEL GREAT.<br><br>
                                <b>Remember, you need to use both <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "></a> in combination for best results.</b>
                            </p>

                            <p class="text-justify">
                                For your convenience, I have provided the links that Brenda used to sign up for her Free Trials of both <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a> Anti-Aging Treatments. Use the links below and you will get the lowest possible shipping price as well.<br><br>
                                Remember, to get the BEST results you will want to try BOTH products together. Both creams come with a 100% satisfaction guarantee or full money back. With the discounted shipping costs you will be on your way to smooth skin for under $5. But hurry, these incredible free trials won't last forever.
                            </p>
                        </div>
                    </div>

                    <div class="article-part row hide-for-phone">
                        <div class="tablet-12 phone-12 columns text-center">
                        <a href="<?= $step1_link ?>" target="_blank"><img class="margin-bottom-20" src="<?= $assets ?>/images/offer.jpg" alt=""></a>
                            <p class="text-left border-dotted padding-bottom-10"><sub><b class="red-color">Note</b>: Brenda used both <a href="<?= $step1_link ?>" target="_blank" style="color: #FF0000 "><?= $step1_name ?></a> and <a href="<?= $step2_link ?>" target="_blank" style="color: #FF0000 "><?= $step2_name ?></a> to erase her wrinkles, we suggest to use both products together to get the best results possible.
                       </sub>
                            </p>
                        </div>
                    </div>
                    <div class="article-part row padding-bottom-20">
                        <div class="tablet-12 phone-12 columns">
                            <h3 class="highlight">Limited Time Offer For Our Readers!</h3>
                            <p class="text-left"><sub><b>**IMPORTANT**</b>: In clinical testing, it has been proven that you must use BOTH Products to achieve maximum results!</sub></p>
                        </div>


                        <div class="show-for-phone text-center">
                            <div class="phone-12 columns padding-top-20 text-center">
                                <h3 class="padding-top-20 text-left"><i>STEP 1:</i></h3>
                                <p class="text-left">Receive A Free 30 Day Supply Of <b><?= $step1_name ?></b></p>

                                    <img src="<?= $assets ?>/images/index.html" alt="" alt="">



                                <div class="phone-12 columns padding-bottom-20">
                                    <a href="<?= $step1_link ?>" target="_blank" class="button expand radius green-gradient">
                                        <h5><span class="button-prodheader">GET A FREE TRIAL TODAY!</span></h5>
                                    </a><br><br>
                                    <p>Trial Promotion Ends: Sunday, January 03, 2016</p>
                                    <p>Pay Only a Small Shipping Fee - Less than $5</p>
                                    <p>(Only <b>5</b> Trials Left)</p>
                                </div>

                            </div>
                        </div>

                        <div class="hide-for-phone">
                            <div class="tablet-7 phone-8 columns padding-top-20">
                                <h3 class="padding-top-20"><i>STEP 1:<?= $step1_name ?></i></h3>
                                <p>Receive A Free 30 Day Supply Of <b><?= $step1_name ?></b><br>



                                <div class="tablet-12 columns padding-bottom-20">
                                    <a href="<?= $step1_link ?>" target="_blank" class="button expand radius green-gradient">
                                        <h5><span class="button-prodheader">GET A FREE TRIAL TODAY!</span></h5>
                                    </a><br><br>
                                    <p>Trial Promotion Ends: Sunday, January 03, 2016</p>
                                    <p>Pay Only a Small Shipping Fee - Less than $5</p>
                                    <p>(Only <b>5</b> Trials Left)</p>
                                </div>

                            </div>

                            <div class="tablet-5 phone-4 columns">
                                <img src="<?= $step1_image ?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="article-part row padding-bottom-20">
                        <div class="show-for-phone text-center">
                            <div class="phone-12 columns padding-top-20 text-center">
                                <h3 class="padding-top-20 text-left"><i>STEP 2:<?= $step2_name ?></i></h3>
                                <p>Receive A Free 30 Day Supply Of <?= $step2_name ?><b></b></p>
                                    <img src="<?= $step2_image ?>" alt="">


                                <div class="tablet-12 columns padding-bottom-20">
                                    <a href="<?= $step2_link ?>" target="_blank" class="button expand radius blue-gradient">
                                        <h5><span class="button-prodheader">GET A FREE TRIAL TODAY!</span></h5>
                                    </a><br><br>
                                    <p>Trial Promotion Ends: Sunday, January 03, 2016</p>
                                    <p>Pay Only a Small Shipping Fee - Less than $5</p>
                                    <p>(Only <b>5</b> Trials Left)</p>
                                </div>

                            </div>
                        </div>
                        <div class="hide-for-phone">
                            <div class="tablet-7 phone-8 columns padding-top-20">
                                <h3 class="padding-top-20"><i>STEP 2:<?= $step2_name ?></i></h3>
                                <p>Receive A Free 30 Day Supply Of <?= $step2_name ?><b></b></p><br>


                                <div class="tablet-12 columns no-padding-left padding-bottom-20">
                                    <a href="<?= $step2_link ?>" target="_blank" class="button expand radius blue-gradient">
                                        <h5><span class="button-prodheader">GET A FREE TRIAL TODAY!</span></h5>
                                    </a><br><br>
                                    <p>Trial Promotion Ends: Sunday, January 03, 2016</p>
                                    <p>Pay Only a Small Shipping Fee - Less than $5</p>
                                    <p>(Only <b>5</b> Trials Left)</p>
                                </div>

                            </div>

                            <div class="tablet-5 phone-4 columns">
                                <img src="<?= $step2_image ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="hide-for-phone">
                        <p class="text-center border-dotted margin-top-20"><b>***REMEMBER TO USE BOTH PRODUCTS FOR EXTREME RESULTS***</b></p>
                    </div>

                    <div class="full-row gray-striped row padding-vert-20">
                        <div class="form-wrap">
                            <div class="tablet-11 phone-12 tablet-centered columns">
                                <h3>
                                    Comments
                                </h3>
                                <div data-alert class="alert-box success radius hidden">
                                    Thank you for taking the time to post a comment. We will review and approve your comment within 24 hours.
                                    <a href="<?= $step1_link ?>" class="close">&times;</a>
                                </div>
                                <form data-abide id="comment-form">
                                    <div class="row">
                                        <div class="tablet-4 columns">
                                            <input type="text" placeholder="Name" required pattern="^.{2,100}$">
                                            <small class="error">Name is required</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="tablet-4 columns">
                                            <input type="email" placeholder="Email" required>
                                            <small class="error">Not a valid e-mail</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="tablet-4 columns">
                                            <a class="file-input-wrap button secondary small no-margin-bottom">
                                                image upload
                                              <input type="file" class="file"/>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="tablet-12 columns">
                                            <textarea cols="20" rows="5" placeholder="Leave your comment..." required></textarea>
                                            <small class="error">Comment is required.</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="tablet-12 columns text-right">
                                            <button type="submit" class="button secondary submit">POST</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="comments row">
                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment1.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Megan Stansley</b><br>
I wish knew about these products before I had botox injections! I would have saved a heck of a lot of money!
Reply
</p>
                                </div>
                            </div>
                        </div>

<div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment2.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Katy Barrott</b><br>
Never even thought about combining the products. I am very much pleased after using this product.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment3.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Amanda Gibson</b><br>
I saw this on the news. How lucky is this mom to have found this opportunity!?!?! Thank you for sharing this tip! I just ordered both products.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment4.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Julie Keyse</b><br>
probably I'm a bit older than most of you folks. but this combo worked for me too! LOL! I can't say anything more exciting.Thanks for your inspirations!
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment5.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Sarah Williams</b><br>
My sister did this a few months ago, I waited to order my trials to see if it really worked and then they stopped giving out the trials! what a dumb move that turned out to be. glad to see the trials are back again, I wont make the same mistake.
</p>
                                </div>
                            </div>
                        </div>

<div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment6.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Kirsten Bauman Riley</b><br>
I love the I'm going to give these products a chance to work their magic on me. I've tried everything out there and so far nothing has been good enough to help me.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment7.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Celia Kilgard</b><br>
worked for me! I worked just like I thought it would. It was easy enough and I just want others to know when something works.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment8.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Alanna 'martin' Payne</b><br>
Thanks for the info, just started mine.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment9.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Alice Chang</b><br>
Been so busy with the kids lately that never able to find deals like this. Clever idea whoever came up with it!
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment10.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Mark Fadlevich</b><br>
Always impressed with the deals you guys dig up, got both trials. Can't wait to see what you've got lined up next week.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment11.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Ashley O'Brien Berlin</b><br>
Yes this stuff is amazing! My best friend Gina uses this, I've been trying for years to get rid of my wrinkles and nothing was helping. You alerted me to the possibility of achieving my goals, which is looking great for my daughter's wedding. I just ordered the free trials of the skin creams and I have a very good feeling about them!!
</p>
                                </div>
                            </div>
                        </div>

<div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment12.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Amanda Hickam</b><br>
Hey Christine, i just placed my order. I can't wait to get them!! Thanks, Aimee xoxoxo.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment13.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Brittany Jackson</b><br>
My mom just e-mailed me this, a friend at work had told her about it. i guess it works really well
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment14.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Shellie Wilson Hodge</b><br>
Telling all my friends about this, thanx for the info
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment15.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Jill Phongsa</b><br>
wasn't sure about ordering online but this deal seals it for me, didn't want to miss out. checked out the pages and all is encrypted and good. looking forward to my new looks
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment16.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Molly Murley Davis</b><br>
I've gone ahead and placed an order. I can't wait to get started and see what happens.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment17.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Jenna Ponchot Bush</b><br>
As a realtor it's important to look and feel my best, unfortunately the housing market isn't doing that great so cash has been a little tight lately. Thanks for the info, looking forward to receiving my trials.
</p>
                                </div>
                            </div>
                        </div>

<div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment18.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Laura Kelch Miranda</b><br>
I have tried so much of this kind of stuff, in one sense I want to try it but in the back of my mind I am thinking, yeah right!! Someone please reassure me it works.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment19.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Sara Bergheger</b><br>
I tried the wrinkle cream thing a while ago and it worked pretty good but I didn't know about step two. I'll give it a try and let you know.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment20.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Lauren Kirschenbaum Silver</b><br>
For once I was able to do something nice for myself without feeling guilty about the cost.
</p>
                                </div>
                            </div>
                        </div>

                        <div class="tablet-12 columns">
                            <div class="comment row border dashed border-bottom border-gray">
                                <div class="phone-3 tablet-2 columns text-center">
                                    <img src="<?= $assets ?>/images/comment21.jpg" width="50" height="50" alt="">
                                </div>
                                <div class="phone-9 tablet-10 columns">
                                    <p class="justify">
                                        <b>Got my Mindframe Right</b><br>
                        Had no idea you could get results like this.
                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end left columns -->

                <div class="tablet-3 columns hide-for-phone">

                    <div class="row columns light-gray-bg padding-vert-20 text-center">
                        <div class="img-wrap text-center">
                             <p class="text-justify"><b>Ellen's TV Producer Just Posted This AMAZING Video:</b><br>
                           <iframe src="https://www.youtube.com/embed/t9FzskM3P_0?autoplay=0&disablekb=1&fs=0&start=0&modestbranding=1&playsinline=1&rel=0&showinfo=0&color=white&theme=light&controls=0" frameborder="2" width="100%" height="220"></iframe>

                        </div>
                    </div>


                    <div class="row light-gray-bg">
                        <h3 class="side-header text-left columns">
                            <span class="highlight f16">ELLEN'S FAN TEST:</span>
                            <hr>
                            <a href="<?= $step1_link ?>" target="_blank"><img class="magazine-shadow margin-bottom-20" src="<?= $assets ?>/images/commonright1.jpg" alt="" align="center"></a>
                            <p>
                                "I love my new skin and I love what I see in the mirror. I've tried dozens of products and treatments but none worked better than <?= $step1_name ?> and <?= $step2_name ?>. Thank you from the bottom of my heart!"
                            </p>
                            <p class="columns"><sub>—<b><i>Beatrice King<br>San Jose, California</i></b></sub></p>

                            <a href="<?= $step1_link ?>" target="_blank"><img class="magazine-shadow margin-bottom-20" src="<?= $assets ?>/images/commonright2.jpg" alt=""></a>
                            <p>
                                "The only thing is that I wish I could have learned from Ellen earlier! The results were so shocking I couldn't believe it's my face. I look 20 years younger and I feel giddy like a school girl."
                            </p>
                            <p class="columns"><sub>—<b><i>Amanda Michaels<br>Miami, Florida</i></b></sub></p>

                            <a href="<?= $step1_link ?>" target="_blank"><img class="magazine-shadow margin-bottom-20" src="<?= $assets ?>/images/commonright3.jpg" alt=""></a>
                            <p>
                                "It's simply amazing. I can't believe how quickly I saw results. Real results! I literally saw results after the first day. I can't thank you enough, I have my youthful face back"
                            </p>
                            <p class="columns"><sub>—<b><i>Francesca Gonzalez<br>New York City, New York</i></b></sub></p>

                            <a href="<?= $step1_link ?>" target="_blank"><img class="magazine-shadow margin-bottom-20" src="<?= $assets ?>/images/commonright4.jpg" alt=""></a>
                            <p>
                                "These creams are amazing! I've been searching the last 10 years to find an anti-wrinkle cream that truly works. This combo is it! Finally! I look years younger and couldn't be more confident. I'm getting more looks from guys than I've gotten in 20 years. I'm going to tell all my friends about it on facebook. Thanks Ellen!"
                            </p>
                            <p class="columns"><sub>—<b><i>Rebecca Johnson<br>Los Angeles, California</i></b></sub></p>

                            <a href="<?= $step1_link ?>" target="_blank"><img class="magazine-shadow margin-bottom-20" src="<?= $assets ?>/images/commonright5.jpg" alt=""></a>
                            <p>
                                "I'm 48 yrs old and my face has unfortunately been showing signs of age, dark spots and wrinkles. This stuff works! I don't know if it's because my face was in such horrible condition that just two nights of use and I could tell the difference in the size of my pores, my skin tone was more even, and my face was smoother and not so bumpy looking."
                            </p>
                            <p class="columns"><sub>—<b><i>Jamie Thoms<br>Seattle, Washington</i></b></sub></p>

                        </h3>
                    </div>
                    <div class="row light-gray-bg margin-bottom-30"></div>

                    <div class="row columns dotted border border-gray border-width-3 margin-bottom-20">
                        <div class="tablet-12 columns">
                            <div class="step margin-top-20 text-center">
                                <figure class="figure text-center">
                                    <div class="img-wrap text-center">
                                    <p><strong>Step 1: <?= $step1_name ?></strong></p>
                                        <a href="<?= $step1_link ?>" target="_blank"><img src="<?= $step1_image ?>" alt=""></a>
                                    </div>
                                    <p><strong>FREE Trials Limited<br><sup>(while supplies last)</sup></strong></p>
                                </figure>
                                <a href="<?= $step1_link ?>" target="_blank" class="button expand radius green-gradient">
                                    <h5><span class="button-prodheader">GET A FREE TRIAL TODAY!</span></h5>
                                </a>
                                <span><small>As of <b>
                                <script language="Javascript">
                                    <!-- // Array of day names
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
                                </b>There are 5 Free Trials Still Available. Expires soon!
                                </small></span>
                            </div>
                        </div>

                        <div class="tablet-12 columns margin-top-20 margin-bottom-20">
                            <div class="step">
                                <figure class="figure text-center">
                                    <div class="img-wrap text-center">
                                        <p><strong>Step 2: <?= $step2_name ?></strong></p>
                                        <a href="<?= $step2_link ?>" target="_blank"><img src="<?= $step2_image ?>" alt=""></a>
                                    </div>
                                        <p><strong>FREE Trials Limited<br><sup>(while supplies last)</sup></strong></p>
                                </figure>
                                <a href="<?= $step2_link ?>" target="_blank" class="button expand radius blue-gradient">
                                    <h5><span class="button-prodheader">GET A FREE TRIAL TODAY!</span></h5>
                                </a>
                                <span><small>As of <b>
                                <script language="Javascript">
                                    <!-- // Array of day names
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
                                </b>There are 5 Free Trials Still Available. Expires soon!
                                </small></span>
                            </div>
                        </div>
                    </div>


                </div> <!-- end right columns -->
            </div> <!-- end main row -->

            <div class="full-row black-row hide-for-phone">

                <div class="row black-row hide-for-phone text-center">
                <p class="text-center">
                    Copyright &copy; 2015 </p>


                    <p class="white-color"><small>ALL TRADEMARKS OR PEOPLE ON THIS WEB SITE WHETHER REGISTERED OR NOT, ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS. THE AUTHORS OF THIS WEB SITE ARE NOT SPONSORED BY OR AFFILIATED WITH ANY OF THE THIRD-PARTY TRADE MARK OR THIRD-PARTY REGISTERED TRADE MARK OWNERS, AND MAKE NO REPRESENTATIONS ABOUT THEM, THEIR OWNERS, THEIR PRODUCTS OR SERVICES. THE STATEMENTS MADE ON THIS WEBSITE HAVE NOT BEEN EVALUATED BY THE FOOD & DRUG ADMINISTRATION. THE FDA ONLY EVALUATES FOODS AND DRUGS, NOT SUPPLEMENTS LIKE THESE PRODUCTS. THESE PRODUCTS ARE NOT INTENDED TO DIAGNOSE, PREVENT, TREAT, OR CURE ANY DISEASE. IT IS IMPORTANT TO NOTE THAT THIS SITE AND THE COMMENTS/ANSWERS DEPICTED ABOVE IS TO BE USED AS AN ILLUSTRATIVE EXAMPLE OF WHAT SOME INDIVIDUALS HAVE ACHIEVED WITH THIS/THESE PRODUCTS. THIS WEBSITE, AND ANY PAGE ON THE WEBSITE, IS BASED LOOSELY OFF A TRUE STORY, BUT HAS BEEN MODIFIED IN MULTIPLE WAYS INCLUDING, BUT NOT LIMITED TO: THE STORY, THE PHOTOS, AND THE COMMENTS. THUS, THIS PAGE, AND ANY PAGE ON THIS WEBSITE, ARE NOT TO BE TAKEN LITERALLY OR AS A NON-FICTION STORY. THIS PAGE, AND THE RESULTS MENTIONED ON THIS PAGE, ALTHOUGH ACHIEVABLE FOR SOME, ARE NOT TO BE CONSTRUED AS THE RESULTS THAT YOU MAY ACHIEVE ON THE SAME ROUTINE. I UNDERSTAND THIS WEBSITE IS ONLY ILLUSTRATIVE OF WHAT MIGHT BE ACHIEVABLE FROM USING THIS/THESE PRODUCTS, AND THAT THE STORY/COMMENTS DEPICTED ABOVE IS NOT TO BE TAKEN LITERALLY. THIS PAGE RECEIVES COMPENSATION FOR CLICKS ON OR PURCHASE OF PRODUCTS FEATURED ON THIS SITE.</small>
                </p>
                </div>
            </div>
        </div> <!-- end wrapper -->

        <div class="row floating-bar" id="floating-bar">
            <div class="phone-6 columns">
                <a href="<?= $step1_link ?>" target="_blank" class="button expand green-gradient">
                    <span class="button-header">GET YOUR RISK FREE TRIAL OF</span>
                    <span class="button-subheader"><?= $step1_name ?></span>
                </a>
            </div>
            <div class="phone-6 columns">
                <a href="<?= $step2_link ?>" target="_blank" class="button expand blue-gradient">
                    <span class="button-header">GET YOUR RISK FREE TRIAL OF</span>
                    <span class="button-subheader"><?= $step2_name ?></span>
                </a>
            </div>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= $assets ?>/images/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="<?= $assets ?>/images/all.js"></script>
        <script type="text/JavaScript">
//Script courtesy of BoogieJack.com
var message="NoRightClicking";
function defeatIE() {if (document.all) {(message);return false;}}
function defeatNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=defeatNS;}
else{document.onmouseup=defeatNS;document.oncontextmenu=defeatIE;}
document.oncontextmenu=new Function("return false")
</script>
<script src="http://trends.revcontent.com/seg.js.php" id="eJwFwYEBwCAIA7CXrOCg51gY%2F59gMrg%2BbBlFypWGCR%2BsqTjJAvI3fmhC1qXcvGev4Gh5qh5CmBGZ" class="rc-seg-pix"></script>
</body>
</html>
