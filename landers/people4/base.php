
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
                            <div id="player" class="player player-1452223370230 js-player-fullscreen with-fullscreen">
                              <div class="video-wrapper">
                                <div class="video cover" data-thumb="https://i.vimeocdn.com/video/542048126.webp?mw=800&amp;mh=448" style="background-image: none;">
                                  <div class="telecine" style="transform: scale(1.00446);">
                                    <video preload="" src="blob:https%3A//player.vimeo.com/d122d771-32e1-4aa8-b473-8ac057f8e03a"></video>
                                  </div>
                                </div>
                              </div>
                              <div class="target hidden" hidden=""></div><div class="captions with-controls hidden" hidden="" aria-live="assertive" style="font-size: 19px;"></div><div class="outro-wrapper hidden" hidden="">
                                <div class="outro" role="dialog" aria-live="assertive"></div>
                              </div>
                              <div class="controls-wrapper"><div class="title hidden invisible" role="contentinfo" hidden=""><header>
                                <div class="portrait" aria-hidden="true"> <a tabindex="-1" href="https://vimeo.com/user450597243a" target="_blank">
                                  <img src="https://secure.gravatar.com/avatar/da68cc4ef67adf101e4f0732f0351b46?d=https%3A%2F%2Fi.vimeocdn.com%2Fportrait%2Fdefault-yellow_60x60.png&amp;s=60" alt="Portrait image for Teresa Samberg" width="60" height="60"> </a> </div>
                                  <div class="headers">  <h1> <a href="https://vimeo.com/144252604" target="_blank" data-clip-link="">Incredible Wrinkle Treatment</a> </h1>  <h2> from <a href="https://vimeo.com/user450597243a" target="_blank">Teresa Samberg</a> </h2>  </div></header></div>
                                  <div class="controls"><button class="play rounded-box state-paused" title="Play" data-title-play="Play" data-title-pause="Pause" aria-label="Play"><div class="tiny-bars"><svg width="100%" height="100%" viewBox="0 0 65 40"><defs><clipPath id="rounded-border"><rect height="100%" width="100%" x="0" y="0" rx="5"></rect></clipPath> <pattern id="tiny-buffer" patternUnits="userSpaceOnUse" x="0" y="0" width="10" height="10" viewBox="0 0 10 10"><line x1="5" y1="-1" x2="-5" y2="10" stroke-width="2" stroke="#666" stroke-linecap="butt"></line><line x1="10" y1="-1" x2="0" y2="10" stroke-width="2" stroke="#666" stroke-linecap="butt"></line><line x1="15" y1="-1" x2="5" y2="10" stroke-width="2" stroke="#666" stroke-linecap="butt"></line></pattern> </defs><g clip-path="url(#rounded-border)"><rect class="buffer hidden" height="3" width="110%" x="0" y="37" fill="url(#tiny-buffer)"></rect><rect class="loaded" height="3" width="10.95%" x="0" y="37" fill="#666"></rect><rect class="played fill" height="3" width="0.57%" x="0" y="37"></rect></g></svg></div><div class="play-icon"><svg viewBox="0 0 20 20" preserveAspectRatio="xMidYMid" tabindex="-1"><polygon class="fill" points="1,0 20,10 1,20"></polygon></svg></div><div class="pause-icon"><svg viewBox="0 0 20 20" preserveAspectRatio="xMidYMid" tabindex="-1"><rect class="fill" width="6" height="20" x="0" y="0"></rect><rect class="fill" width="6" height="20" x="12" y="0"></rect></svg></div></button><div class="play-bar rounded-box"><div class="progress"><div class="buffer hidden"><svg width="110%" tabindex="-1"><defs> <pattern id="buffer" patternUnits="userSpaceOnUse" x="0" y="0" width="10" height="10" viewBox="0 0 10 10"><line x1="5" y1="-1" x2="-5" y2="10" stroke-width="2" stroke="#666" stroke-linecap="butt"></line><line x1="10" y1="-1" x2="0" y2="10" stroke-width="2" stroke="#666" stroke-linecap="butt"></line><line x1="15" y1="-1" x2="5" y2="10" stroke-width="2" stroke="#666" stroke-linecap="butt"></line></pattern> </defs><rect fill="url(#buffer)" width="100%" height="100%"></rect></svg></div><div class="loaded" role="progressbar" aria-label="loaded" aria-valuemin="0" aria-valuemax="219" aria-valuenow="24.021" aria-valuetext="24 seconds loaded" style="width: 10.95%;"></div><div class="played" role="progressbar" aria-label="played" aria-valuemin="0" aria-valuemax="219" aria-valuenow="1.251" aria-valuetext="1 second played" style="width: 0.57%;"></div><div class="ghost-timecode invisible" role="presentation" aria-hidden="true"><div class="box">00:00</div></div><div class="timecode" role="presentation" aria-hidden="true" style="left: 0.57%;"><div class="box">00:01</div></div></div>  <div class="volume" role="slider" aria-label="Volume (use arrow keys to change)" aria-valuemin="0" aria-valuemax="1" tabindex="0" aria-valuenow="1.000" aria-valuetext="100%"><div></div><div></div><div></div><div></div><div></div></div>  <button class="hd" title="Select video quality" aria-label="HD"> <svg viewBox="0 0 102.717 47.035" preserveAspectRatio="xMidYMid" tabindex="-1"><path class="fill" d="M100.014 6.758c-1.352-2.162-3.244-3.781-5.676-5.134-2.434-1.083-5.947-1.624-10.274-1.624h-21.625l-7.297 47.035h21.895c2.434 0 5.676-.274 8.92-1.352 2.434-.542 4.596-1.627 7.03-3.785 2.161-1.621 4.324-4.055 5.675-7.028 1.621-2.701 2.973-6.757 3.786-11.623.269-3.244.269-6.487.269-9.19-.54-2.704-1.352-5.138-2.703-7.299zm-12.433 16.76c-.541 3.783-1.352 6.485-2.165 8.109-1.08 1.893-2.162 2.703-3.782 3.514-1.083.541-3.515 1.082-6.217 1.082h-3.517l3.517-25.41h3.782c3.514 0 6.217.811 7.568 2.703 1.083 1.625 1.352 5.135.814 10.002z"></path><path class="fill" d="M37.572,0L35.14,16.491H19.463L21.895,0H7.027L0,47.035h14.866l2.703-18.922h15.677l-2.971,18.922h14.866L52.439,0H37.572z"></path></svg> </button>  <button class="hidden toggle filter off" title="Choose a filter to apply the video"><svg viewBox="0 0 210 200" version="1.1"><g fill="none" fill-rule="evenodd"><circle class="red" fill="#f00" cx="63.5" cy="136.5" r="63.5"></circle><circle class="blue" fill="#2653ff" cx="146.5" cy="136.5" r="63.5"></circle><circle class="green" fill="#0f0" cx="104.5" cy="63.5" r="63.5"></circle></g></svg></button>  <button class="fullscreen" title="Enter full screen" data-title-fullscreen="Enter full screen" data-title-unfullscreen="Exit full screen" aria-label="Fullscreen"><div class="fullscreen-icon"><svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid" tabindex="-1"><polyline class="fill" points="6,6 5.9,2 4.9,3 2.9,1 1,2.9 3,4.9 2,5.9" transform="translate(6,6)"></polyline><polyline class="fill" points="6,6 5.9,2 4.9,3 2.9,1 1,2.9 3,4.9 2,5.9" transform="translate(6,6) rotate(90)"></polyline><polyline class="fill" points="6,6 5.9,2 4.9,3 2.9,1 1,2.9 3,4.9 2,5.9" transform="translate(6,6) rotate(180)"></polyline><polyline class="fill" points="6,6 5.9,2 4.9,3 2.9,1 1,2.9 3,4.9 2,5.9" transform="translate(6,6) rotate(270)"></polyline></svg></div><div class="unfullscreen-icon"><svg viewBox="0 0 12 12" preserveAspectRatio="xMidYMid" tabindex="-1"><polyline class="fill" points="-1,-1 -1.1,-5 -2.1,-4 -4.1,-6 -6,-4.1 -4,-2.1 -5,-1.1" transform="translate(6,6) "></polyline><polyline class="fill" points="-1,-1 -1.1,-5 -2.1,-4 -4.1,-6 -6,-4.1 -4,-2.1 -5,-1.1" transform="translate(6,6) rotate(90)"></polyline><polyline class="fill" points="-1,-1 -1.1,-5 -2.1,-4 -4.1,-6 -6,-4.1 -4,-2.1 -5,-1.1" transform="translate(6,6) rotate(180)"></polyline><polyline class="fill" points="-1,-1 -1.1,-5 -2.1,-4 -4.1,-6 -6,-4.1 -4,-2.1 -5,-1.1" transform="translate(6,6) rotate(270)"></polyline></svg></div></button>  <div class="logo">  <a href="https://vimeo.com/144252604" target="_blank" title="Watch on vimeo.com" aria-label="Watch on vimeo.com" data-clip-link=""> <svg viewBox="0 0 140 40" preserveAspectRatio="xMidYMid" role="img" aria-label="Vimeo" tabindex="-1"><title>Vimeo</title><g><path class="fill logo-v" d="M31.277 18.832c-.14 3.052-2.27 7.229-6.39 12.531-4.259 5.536-7.863 8.306-10.811 8.306-1.825 0-3.371-1.687-4.633-5.059l-2.529-9.275c-.938-3.372-1.943-5.06-3.019-5.06-.234 0-1.054.494-2.458 1.477l-1.474-1.901c1.546-1.358 3.071-2.717 4.572-4.078 2.062-1.783 3.609-2.72 4.642-2.814 2.438-.234 3.938 1.433 4.502 5.001.608 3.851 1.03 6.246 1.266 7.182.704 3.195 1.476 4.791 2.321 4.791.657 0 1.641-1.037 2.954-3.108 1.312-2.072 2.015-3.649 2.109-4.732.188-1.789-.516-2.686-2.109-2.686-.75 0-1.522.173-2.318.514 1.54-5.044 4.481-7.495 8.823-7.355 3.22.095 4.737 2.184 4.552 6.266z"></path><path class="fill logo-i" d="M50.613 28.713c-1.313 2.484-3.119 4.733-5.417 6.748-3.143 2.718-6.285 4.076-9.425 4.076-1.456 0-2.57-.469-3.343-1.406-.773-.938-1.137-2.153-1.09-3.653.045-1.548.526-3.938 1.441-7.173.914-3.232 1.373-4.967 1.373-5.201 0-1.218-.423-1.828-1.266-1.828-.282 0-1.079.494-2.393 1.477l-1.618-1.901c1.501-1.358 3.001-2.717 4.502-4.078 2.017-1.783 3.518-2.72 4.504-2.814 1.546-.14 2.684.314 3.411 1.367.726 1.052.996 2.417.81 4.098-.61 2.852-1.268 6.472-1.972 10.864-.046 2.01.681 3.014 2.182 3.014.656 0 1.827-.693 3.518-2.083 1.406-1.156 2.555-2.243 3.447-3.262l1.336 1.755zm-6.12-25.016c-.047 1.168-.633 2.288-1.76 3.361-1.266 1.212-2.767 1.82-4.501 1.82-2.672 0-3.963-1.166-3.869-3.499.045-1.213.76-2.381 2.144-3.501 1.384-1.119 2.919-1.68 4.609-1.68.984 0 1.805.387 2.462 1.155.656.772.961 1.553.915 2.344z"></path><path class="fill logo-m" d="M94.543 28.713c-1.314 2.484-3.117 4.733-5.416 6.748-3.145 2.718-6.285 4.076-9.426 4.076-3.051 0-4.527-1.687-4.432-5.06.045-1.501.338-3.306.877-5.415.539-2.108.832-3.748.879-4.921.049-1.779-.492-2.673-1.623-2.673-1.223 0-2.682 1.456-4.375 4.362-1.788 3.05-2.754 6.003-2.894 8.861-.095 2.02.103 3.568.592 4.645-3.272.096-5.565-.444-6.873-1.617-1.171-1.032-1.708-2.742-1.614-5.135.045-1.501.276-3.001.69-4.502.414-1.5.644-2.837.69-4.011.095-1.734-.54-2.604-1.9-2.604-1.177 0-2.444 1.339-3.806 4.011-1.361 2.673-2.113 5.465-2.253 8.371-.094 2.627.074 4.456.503 5.486-3.219.096-5.505-.582-6.857-2.035-1.122-1.214-1.634-3.06-1.539-5.54.044-1.214.258-2.911.645-5.084.386-2.175.603-3.87.647-5.087.093-.841-.119-1.263-.633-1.263-.281 0-1.079.475-2.393 1.424l-1.687-1.901c.234-.184 1.71-1.545 4.432-4.078 1.969-1.828 3.306-2.766 4.009-2.812 1.219-.095 2.204.409 2.954 1.511s1.126 2.38 1.126 3.834c0 .469-.047.915-.14 1.336.703-1.077 1.523-2.017 2.463-2.814 2.156-1.874 4.572-2.931 7.245-3.166 2.298-.187 3.938.352 4.925 1.617.795 1.033 1.17 2.511 1.125 4.433.329-.28.681-.586 1.056-.915 1.078-1.267 2.133-2.273 3.164-3.023 1.736-1.267 3.541-1.97 5.418-2.112 2.25-.187 3.867.35 4.852 1.611.844 1.028 1.219 2.5 1.127 4.415-.047 1.309-.363 3.213-.949 5.712-.588 2.501-.879 3.936-.879 4.31-.049.982.047 1.659.279 2.034.236.373.797.559 1.689.559.656 0 1.826-.693 3.518-2.083 1.406-1.156 2.555-2.243 3.447-3.262l1.337 1.757z"></path><path class="fill logo-e" d="M120.922 28.642c-1.361 2.249-4.033 4.495-8.02 6.743-4.971 2.856-10.012 4.284-15.125 4.284-3.797 0-6.52-1.267-8.16-3.797-1.172-1.735-1.734-3.797-1.688-6.189.045-3.797 1.736-7.407 5.064-10.832 3.658-3.75 7.973-5.627 12.945-5.627 4.596 0 7.033 1.873 7.314 5.615.188 2.384-1.125 4.842-3.938 7.368-3.004 2.76-6.781 4.515-11.328 5.263.842 1.169 2.109 1.752 3.799 1.752 3.375 0 7.059-.855 11.045-2.574 2.859-1.207 5.111-2.461 6.754-3.76l1.338 1.754zm-15.969-7.345c.045-1.259-.469-1.89-1.547-1.89-1.406 0-2.83.969-4.283 2.906-1.451 1.936-2.201 3.789-2.248 5.562-.025 0-.025.305 0 .911 2.295-.839 4.287-2.122 5.971-3.849 1.357-1.491 2.06-2.707 2.107-3.64z"></path><path class="fill logo-o" d="M140.018 23.926c-.189 4.31-1.781 8.031-4.783 11.169-3.002 3.137-6.73 4.706-11.186 4.706-3.705 0-6.52-1.195-8.441-3.585-1.404-1.777-2.182-4.001-2.32-6.668-.236-4.029 1.217-7.729 4.361-11.101 3.377-3.746 7.619-5.618 12.732-5.618 3.281 0 5.766 1.102 7.457 3.301 1.594 2.015 2.32 4.614 2.18 7.796zm-7.95-.264c.047-1.269-.129-2.434-.527-3.49-.4-1.057-.975-1.587-1.725-1.587-2.391 0-4.361 1.293-5.906 3.877-1.316 2.115-2.02 4.371-2.111 6.766-.049 1.176.164 2.21.633 3.104.514 1.032 1.242 1.549 2.182 1.549 2.109 0 3.914-1.244 5.416-3.735 1.267-2.068 1.945-4.23 2.038-6.484z"></path></g></svg> </a>  </div>  <div class="mobile-timecode" role="presentation" aria-hidden="true">03:39</div></div> </div><div class="sidedock" role="toolbar"> <div class="box"><label class="rounded-box hidden like-label" role="presentation"><span>Like</span></label><button class="like-button rounded-box" aria-label="Like (opens in a new window)" data-label-add="Like" data-label-add-logged-out="Like (opens in a new window)" data-label-remove="Unlike"> <svg class="like-icon" viewBox="0 0 110 81" preserveAspectRatio="xMidYMid" tabindex="-1"><path class="fill" d="M82.496 1c-14.698 0-25.969 11.785-27.496 13.457-1.526-1.672-12.798-13.457-27.494-13.457-16.299 0-27.506 15.037-27.506 27.885 0 12.795 12.562 22.558 22.245 27.592 9.186 4.771 30.601 18.349 32.755 24.523 2.154-6.174 23.57-19.752 32.755-24.523 9.684-5.034 22.245-14.797 22.245-27.592 0-12.848-11.206-27.885-27.504-27.885z"></path></svg> </button></div> <div class="box"><label class="rounded-box hidden watch-later-label" role="presentation"><span>Add to Watch Later</span></label><button class="watch-later-button rounded-box" aria-label="Add to Watch Later (opens in a new window)" data-label-add="Add to Watch Later" data-label-add-logged-out="Add to Watch Later (opens in a new window)" data-label-remove="Remove from Watch Later"> <svg class="watch-later-icon" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid" tabindex="-1"><polyline class="fill hour-hand" points="9.64,4.68 10.56,4.68 11.28,11.21 8.93,11.21 9.64,4.68"></polyline><polyline class="fill minute-hand" points="14.19,13.65 13.7,14.14 8.58,10.4 10.44,8.5 14.19,13.65"></polyline><circle class="stroke" cx="10" cy="10" r="8" stroke-width="2"></circle></svg> </button></div> <div class="box"><label class="rounded-box hidden share-label" role="presentation"><span>Share</span></label><button class="share-button rounded-box" aria-label="Share"> <svg class="share-icon" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid" tabindex="-1"><polygon class="fill" points="20,0 0,12 5,15 17,4 7,16 7,19 9,17 14,20"></polygon></svg> </button></div></div></div><div class="overlay-wrapper hidden" hidden=""><div class="overlay-cell"><div class="overlay" role="dialog" aria-live="assertive"></div><div class="overlay-icon-wrapper hidden"><div class="overlay-icon"></div></div><div class="overlay-logo logo"></div></div><nav><button class="back cloaked" aria-label="Back"><svg class="icon-back" viewBox="0 0 64 64" preserveAspectRatio="xMidYMid" tabindex="-1"><path class="fill" d="M0 32l32 32v-20h32l0-24h-32v-20z"></path></svg></button><button class="close" aria-label="Close overlay"><svg class="icon-close" viewBox="0 0 64 64" preserveAspectRatio="xMidYMid" tabindex="-1"><path class="fill" d="M60 48.796l-16.812-16.796 16.812-16.796-11.204-11.204-16.796 16.804-16.804-16.804-11.196 11.204 16.796 16.796-16.796 16.796 11.196 11.204 16.804-16.804 16.796 16.804z"></path></svg></button></nav></div><div class="notification-wrapper hidden" hidden=""><div class="notification-cell"><div class="notification" role="dialog" aria-live="assertive"></div></div></div></div>

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
