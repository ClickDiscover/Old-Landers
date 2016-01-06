<?php
  function viewday($day){
    date_default_timezone_set('Asia/Tokyo');
    setlocale(LC_TIME, "zh_CN");
    if( $day == -1 ){
      $string = '-1 day';
    }else{
      $string = $day.' day';
    }
    $time = strtotime($string);
    if( $day == 0 ){
      $time = time();
    }
    $month = date("m",$time);
    $month = sprintf("%1d", $month);
    $day = date("d",$time);
    $day = sprintf("%1d", $day);
    echo date("Y年".$month."月".$day,$time);
  }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0080)http://e071bb29299ee9ce1051-f0069243bdde6966caf95405b1ab1902.r2.cf6.rackcdn.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>高岡早紀の舞台裏での秘密のスキンケア – 彼女のアンチエイジングトリックが遂に明かされる！</title>
<link href="<?= $assets ?>/song_files/onlinetop.css" rel="stylesheet" type="text/css">
<link href="<?= $assets ?>/song_files/style.css" rel="stylesheet" type="text/css">

<style>
.exit-modal {
    height: 418px;
    top: 50%;
    left: 50% !important;
    margin: -250px 0 0 -354px;
    position: fixed;
    z-index: 1040;
    cursor: pointer;
}
</style>
</head>
<body>


<div style="clear:both"></div>
<div id="header2" class="hide-on-large-1">
	<div class="inner">

		<div class="section-col1">
			<a href="<?= $step1_link ?>">
			<img  alt="NHK ONLINE" src="<?= $assets ?>/song_files/header-images/s1.png">
			</a>
		</div>
		<div class="section-col2">
				<a href="<?= $step1_link ?>">
			<img  alt="NHK ONLINE" src="<?= $assets ?>/song_files/header-images/s2.png">
			</a>
		</div>
		<div class="section-col3">
			<a href="<?= $step1_link ?>">
			<img  alt="NHK ONLINE" src="<?= $assets ?>/song_files/header-images/s3.png">
			</a>
		</div>
		<div class="section-col4">
			<a href="<?= $step1_link ?>">
			<img  alt="NHK ONLINE" src="<?= $assets ?>/song_files/header-images/s4.png">
			</a>
		</div>
	</div>
</div>
<div id="menuGlobal">
<ul class="inner">
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h30">ニュース/報道</a>
<div id="pulldown1" style="display: none;" class="hideok">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h31"><img width="26" height="17" alt="写真：NHK NEWS WEB" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_newsweb.jpg">NHK NEWS WEB</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h32"><img width="26" height="17" alt="写真：おはよう日本" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_ohayou_3.jpg">おはよう日本</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h40"><img width="26" height="17" alt="写真：ニュース&#12288;シブ5時" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_news5.jpg">ニュース&#12288;シブ5時</a></li>
<li class="item4"><a href="<?= $step1_link ?>" class="" id="h33"><img width="26" height="17" alt="写真：ニュース7" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_news7_02.jpg">ニュース7</a></li>
<li class="item5"><a href="<?= $step1_link ?>" class="" id="h34"><img width="26" height="17" alt="写真：クローズアップ現代" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_news_gendai_2013.jpg">クローズアップ現代</a></li>
<li class="item6"><a href="<?= $step1_link ?>" class="" id="h35"><img width="26" height="17" alt="写真：ニュースウオッチ9" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_news_nw9_3.jpg">ニュースウオッチ9</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「ニュース/報道」番組一覧はこちら</a></p>
</div>
</li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h36">スポーツ</a>
<div id="pulldown2" style="display: none;" class="hideok">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h37"><img width="26" height="17" alt="写真：スポーツオンライン" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_sports.jpg">スポーツオンライン</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「スポーツ」番組一覧はこちら</a></p>
</div>
</li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h41">情報/ワイドショー</a>
<div id="pulldown3" style="display: none;" class="hideok">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h42"><img width="26" height="17" alt="写真：あさイチ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_info_asaichi_02.jpg">あさイチ</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h43"><img width="26" height="17" alt="写真：ためしてガッテン" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_info_gatten_3.jpg">ためしてガッテン</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「情報/ワイドショー」番組一覧はこちら</a></p>
</div>
</li>
<li class="item4"><a href="<?= $step1_link ?>" class="" id="h45">ドラマ</a>
<div id="pulldown4" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h46"><img width="26" height="17" alt="写真：NHKドラマ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_drama2.jpg">NHKドラマ</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h47"><img width="26" height="17" alt="写真：海外ドラマ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_drama_kaigai2.jpg">海外ドラマ</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h48"><img width="26" height="17" alt="写真：花燃ゆ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_drama_hanamoyu2.jpg">花燃ゆ</a></li>
<li class="item4"><a href="<?= $step1_link ?>" class="" id="h49"><img width="26" height="17" alt="写真：まれ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_drama_mare.jpg">まれ</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「ドラマ」番組一覧はこちら</a></p>
</div>
</li>
<li class="item5"><a href="<?= $step1_link ?>" class="" id="h51">音楽</a>
<div id="pulldown5" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h53"><img width="26" height="17" alt="写真：NHKクラシック" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_music_classic_.jpg">NHKクラシック</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h54"><img width="26" height="17" alt="写真：SONGS" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_music_songs.jpg">SONGS</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h58"><img width="26" height="17" alt="写真：MUSIC JAPAN" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_music_mj_4.jpg">MUSIC JAPAN</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「音楽」番組一覧はこちら</a></p>
</div>
</li>
<li class="item6"><a href="<?= $step1_link ?>" class="" id="h55">バラエティ</a>
<div id="pulldown6" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h56"><img width="26" height="17" alt="写真：ケータイ大喜利" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_variety_o-giri.jpg">ケータイ大喜利</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h57"><img width="26" height="17" alt="写真：探検バクモン" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_variety_bakumon_.jpg">探検バクモン</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h58"><img width="26" height="17" alt="写真：ブラタモリ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_variety_buratamori.jpg">ブラタモリ</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「バラエティ」番組一覧はこちら</a></p>
</div>
</li>
<li class="item7"><a href="<?= $step1_link ?>" class="" id="h61">映画</a>
<div id="pulldown7" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h62"><img width="26" height="17" alt="写真：プレミアムシネマ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_movie_t_cinema2.jpg">プレミアムシネマ</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「映画」番組一覧はこちら</a></p>
</div>
</li>
<li class="item8"><a href="<?= $step1_link ?>" class="" id="h65">アニメ/特撮</a>
<div id="pulldown8" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h66"><img width="26" height="17" alt="写真：アニメワールド" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_anime.jpg">アニメワールド</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「アニメ/特撮」番組一覧はこちら</a></p>
</div>
</li>
<li class="item9"><a href="<?= $step1_link ?>" class="" id="h70">ドキュメンタリー/教養</a>
<div id="pulldown9" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h71"><img width="26" height="17" alt="写真：もっとNHKドキュメンタリー" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_documentary_docudocu_2.jpg">もっとNHKドキュメンタリー</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h72"><img width="26" height="17" alt="写真：NHKスペシャル" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_documentary_special_02.jpg">NHKスペシャル</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h73"><img width="26" height="17" alt="写真：ETV特集" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_documentary_etv21c_3.jpg">ETV特集</a></li>
<li class="item4"><a href="<?= $step1_link ?>" class="" id="h74"><img width="26" height="17" alt="写真：BS世界のドキュメンタリー" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_documentary_wdoc_02.jpg">BS世界のドキュメンタリー</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「ドキュメンタリー/教養」番組一覧はこちら</a></p>
</div>
</li>
<li class="item10"><a href="<?= $step1_link ?>" class="" id="h75">劇場/公演</a>
<div id="pulldown10" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h76"><img width="26" height="17" alt="写真：プレミアムシアター" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_theater_premium.jpg">プレミアムシアター</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「劇場/公演」番組一覧はこちら</a></p>
</div>
</li>
<li class="item11"><a href="<?= $step1_link ?>" class="" id="h80">趣味/教育</a>
<div id="pulldown11" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h81"><img width="26" height="17" alt="写真：くらしのパートナー" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_education_kurashi_2.jpg">くらしのパートナー</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h82"><img width="26" height="17" alt="NHK for School" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_education_school_2.jpg">NHK for School</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「趣味/教育」番組一覧はこちら</a></p>
</div>
</li>
<li class="item12"><a href="<?= $step1_link ?>" class="" id="h85">福祉</a>
<div id="pulldown12" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h86"><img width="26" height="17" alt="写真：ハートネット" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_fukushi_heart-net_3.jpg">ハートネット</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h87"><img width="26" height="17" alt="写真：手話ニュース" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_fukushi_shuwa.jpg">手話ニュース</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h88"><img width="26" height="17" alt="写真：バリバラ" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_fukushi_baribara.jpg">バリバラ</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「福祉」番組一覧はこちら</a></p>
</div>
</li>
<li class="item13"><a href="<?= $step1_link ?>" class="" id="h90">キッズ</a>
<div id="pulldown13" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h91"><img width="26" height="17" alt="写真：キッズワールド" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_children_kids.jpg">キッズワールド</a></li>
<li class="item2"><a href="<?= $step1_link ?>" class="" id="h92"><img width="26" height="17" alt="Let's 天才てれびくん" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_children_tvkun2.jpg">Let's 天才てれびくん</a></li>
<li class="item3"><a href="<?= $step1_link ?>" class="" id="h93"><img width="26" height="17" alt="ビットワールド" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_children_bitworld.jpg">ビットワールド</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「キッズ」番組一覧はこちら</a></p>
</div>
</li>
<li class="item14"><a href="<?= $step1_link ?>" class="" id="h95">語学</a>
<div id="pulldown14" style="display: none;">
<ul>
<li class="item1"><a href="<?= $step1_link ?>" class="" id="h96"><img width="26" height="17" alt="写真：NHKゴガク" src="https://s3.amazonaws.com/topmenu/1403_img/pulldown/ph_gogaku_gogaku2.jpg">NHKゴガク</a></li>
</ul>
<p class="more"><a href="<?= $step1_link ?>">「語学」番組一覧はこちら</a></p>
</div>
</li>
</ul>
</div>

<div style="clear:both;"> </div>

<div class="cenbg">
<p class="toptitle">高岡早紀の舞台裏での秘密のスキンケア – 彼女のアンチエイジングトリックが遂に明かされる！</p>
<!--cenfl-->
<div class="cenfl">
	<div class="featured news-page">特集：</div>
	<div class="news-icon">
		<img src="<?= $assets ?>/song_files/newsicon.png">

    <iframe width="575" height="345" src="https://www.youtube.com/embed/5JmYKs2FiLU?autoplay=0" frameborder="0" allowfullscreen></iframe>
    <p>
    <em><strong>あなたの目前で彼女の目の下のたるみが消えます! 動画の2:40に進んで驚異的な変化をご覧ください! あっ.</strong></em>
    </p>
	</div>


<br>
<img src="<?= $assets ?>/song_files/ggzj.jpg" width="575" class="padding">
<p>
  <em><strong>高岡早紀がスキンケア業界を永久に変えるシワ取りスキンソリューションを明かしました</strong> </em></p><br>
<p>
最近のTVインタビューで、高岡早紀が43歳とは思えないすべすべ肌の秘密を明かしました。高価なボトックスと整形手術のおかげと思われていましたが、高岡早紀の若々しい外見は実際にはこの非常にシンプルで驚くほど効果的なスキンケア製品の賜物でした。 </p><br>
<p>高岡早紀が「深いシワをたった2週間で消す」と言ったように本当に効くのでしょうか？私達もあなたと同じように思っていました – 有名人を使った宣伝だと。そこで私達はこの製品が派手な宣伝通りであるか否か、他のユーザーも調べてみました。そして普通の主婦、鳥越敦子さんの信じられないようなストーリーを耳にしたのでした。
 </p>  <br>
	  <p class="text_center"><img src="<?= $assets ?>/song_files/xqjrz.jpg"></p><br>
      <p class="pageheader">
    "小泉今日子も2014年に<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>の熱心なユーザーになりました。"
    </p><br>
<p>東京に住む3児の母、鳥越敦子さん53歳は小さな知恵と工夫で不必要な健康リスクを避け多額の医療費を節約した最適例です。 </p><br>
<p>ほとんどの女性と同じく、敦子さんもよくあるセレブのお墨付きアンチエイジング「奇跡のクリーム」を毎日試す経済的余裕は無く、ましてや整形手術やフェイスリフトなどの高価な選択的医療処置に散財することなどなおさらでした。 </p><br>
<p>この簡単なトリックを試すまで、彼女は毎日ほぼ1時間かけて6種類以上の製品を使って様々なスキンケアを試しましたが、実に残念な結果しか得られませんでした。各製品にはシワを消して若々しいお肌を取り戻すことを約束致します、と大々的に述べられていましたが、敦子さんが一語一句全ての使用方法に従ってみたところ、何も実際の成果は得られませんでした。
</p><br>
<p>がっかりした敦子さんは多額のローンを組んでボトックス注射をすることや、リスキーで非常に高価なフェイスリフトをすることさえも考えました。しかし高い料金（50万円-200万円以上）と修正不可能な失敗例の恐ろしい話を聞き、美容整形は求めているソリューションではないと考え直しました。敦子さんは本当に効果があり金銭的に大きな負担を強いない、安全で良心的な料金のアンチエイジングソリューションを見つけようと決めました。
</p><br>
<div class="clr">
</div>
<h3>敦子さんのソリューション：</h3> <br>
 <p> 1年間に渡る調査と他の女性のスキンケア習慣に関する聞き込みを行い、敦子さんは2つの製品が本当に効果があり女性の肌を何年も若返らせるのに役立つことが分かりました。それが<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>でした。</p><br>
<p>それらの各製品が個々に効果的であると証明された一方で、敦子さんは偶然スキンケア業界全体に革命を起こすかもしれない発見をしました。彼女はそれらを一緒に使ったのです。</p><br>
<p>毎日のお肌の手入れで両製品を一緒に使ってわずか数日後、彼女は鏡の中の明らかな変化に気付きました。<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を共に使ってわずか2週間後、彼女の顔の変化は疑いの余地がないものとなりました：それは本当の結果を彼女に与えたのです。 </p><br>
<p>2つの製品を共に使うことで、敦子さんの結果は50万円以上の美容整形で得られる以上に明らかに良くなりました。この組み合わせによって、全ての問題があった部分とシワが実際に90%も消えたのです。顔と首が引き締まり、全ての肌のたわみ、老化と乾燥肌が消えました。敦子さんはこれらの劇的なアンチエイジング効果を<strong>両方の製品をわずか14日間</strong>使っただけで得られたのです。</p><br>
<p>彼女の友達、夫と家族全員が驚きました。ほとんど一晩で彼女の肌が20歳も若返ったように見えたので、密かにボトックスをしたのだと皆思っていました。彼女の友達たちが敦子さんの方法を使い始め、すぐに噂が広がり、ドクターオズショーで彼女の簡単な2つの製品のトリックが特集されるまで、さほど時間を要しませんでした。</p><br>
<p>敦子さんと同じ驚きのストーリーを持つ女性は今や何百人にもなりました。この方法を使うことで、彼女はお肌から20数年もの痕跡を効率的に消しました。それは彼女の人生を変え、彼女の周りの人々のみならず、全く知らない人までも驚かせました。</p><br>

<h3>効果の秘密は？</h3>
<br>
<p>研究を通じて敦子さんは細胞の回復と肌の若返りの本当の秘密には2つの鍵となる成分があることを発見しました：</p><br>
<ol>
<strong><li>ビタミンC</li>
<li>ヒアルロン酸</li></strong>
</ol>
<br>

<p>これらは自然成分で、共に作用することでシワを細胞レベル、つまり肌の表面下で消すので、非常に効果的なのです。</p><br>
<p><strong>ビタミンC</strong>は健康で若々しい肌を保つために重要です。その強力な酸化防止力は、肌の乾燥とシワを生じさせる活性酸素による損傷の速度を抑えます。それはコラーゲン – 引き締まった肌にするタンパク質 - を作り出すため、時間が肌に与える影響も抑え逆に回復までさせます。ビタミンCを局部的に肌に塗ることは経口服用するより<strong>20倍以上効果があり</strong>ます。
</p>
<p class="pageheader">オズ博士はビタミンCを「年齢を誤魔化す秘密」だと言っています。 </p>

<p>
<strong>ヒアルロン酸</strong>は水分を保つ作用があります。それはその体積の1,000倍もの水分を保つことができ、優れた自然の肌の保湿剤になります。乾燥、環境的ストレスや刺激を受けた後、ヒアルロン酸は肌の修復と再生を促します。</p><br>
<p>シンディー・クロフォード、ジェニファー・アニストンとケリー・リッパなどの世界中のセレブは皆<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を使って若々しさを保っています。
</p>
<br><br>
<p style="text-align:center;">
<img class="respon-img" src="<?= $assets ?>/song_files/magazine4.jpg" width="580">
</p>
<p class="pageheader">
<sup><img src="<?= $assets ?>/song_files/cite.png" width="25" height="19"></sup>セレブ達の間では<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>の話題で持ちきりです。彼女たちはそれが若々しい肌の秘密であると告白しています。<sup><img src="<?= $assets ?>/song_files/cite2.png" width="25" height="19"></sup>
</p><br>

<p>
カリフォルニア、ビバリーヒルズの皮膚学者、リチャード・ピーターズ博士は、<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>両方に最も純粋で強力な形態のビタミンCとヒアルロン酸が含まれているため、それらを共に使うことが若々しい肌の誰もが知っている秘密であると明らかにしました。とりわけ素晴らしいことは、全ての製品が自然成分から作られていることで、全ての種類の肌に対して完全に安全で、悪い副作用もありません。</p>
<br>

<img class="imgInline" src="<?= $assets ?>/song_files/drozsmall.jpg" width="135" height="135" alt="droz">

<!--<img class="imgInline" src="usskin3/rightside/droz_middle.jpg" />-->


<hr>
<div class="small"><p>「ビタミンCとヒアルロン酸の働きは、全ての古い死んだ肌の層を取り除くことで、肌が新しい層を生成するのに役立ちます。我々のテストでは14日未満でほぼ20から30年分の痕跡を取り除けることを示しています。しかし、クリームと美容液は全て同じではないので、重要なのは最も純度とクオリティーが高い成分が含まれているものを選ぶことです。 - オズ博士</p></div>

<hr>
<br>



<h1 class="subjectheader">敦子さんのストーリと14日間の細胞回復結果：</h1>

<p style="text-align:center;" class="pn"><img src="<?= $assets ?>/song_files/goo.jpg" width="450"></p><br>

<p class="celebcaption">
<sup><img src="<?= $assets ?>/song_files/cite.png" width="25" height="15"></sup>鳥越敦子さんのビフォー、アフター画像。右の画像は<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を使ってからわずか14日後に撮られたものです。<sup><img src="<?= $assets ?>/song_files/cite2.png" width="25" height="15"></sup>
</p>
<br><br>


<strong>
<h2>“使用方法は？”</h2></strong><br>
<div class="smallpar">
<p>「トリックは<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を組み合わせることです。これら２つの製品両方に高濃度の純粋なビタミンCとヒアルロン酸が適切に濃縮されています。さらにそれらには全ての種類の酸化防止成分、ダーマキシル（フェイスリフト成分としても知られる）と呼ばれる成分とエスターC（ビタミンCの活性アンチエイジング化合物）も含まれています。使用方法は簡単ですが正確さが必要です：手順により効果が大幅に異なるため、正確な手順に従うことが重要です。就寝前に洗顔して乾かした後、少量の<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>を顔と首に塗って、<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を目の周りに軽くパットします。ほぼ一晩で効果が見えますが、14日後には文字通り驚くような結果が出ます。まるで20年前の私みたいに見えました！」 - 敦子</p>
</div>


<div class="day">
<div class="day-text">

<p class="testdiaryimg"><img src="<?= $assets ?>/song_files/eyes1.jpg" alt="" height="207" width="130"></p>

<h2><strong>1日目</strong></h2>

<p class="testdiaryp"><a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を一緒に使った初日に、肌の感じが素晴らしくなったのに驚きました。巨大な掃除機によって顔の全ての毛穴の隅々まで引き締められたような感じでした。 </p><p class="testdiaryp">他に表現のしようがありません！頬と目の周りとおでこに暖かいジンジンするような感じがしました。鏡を見たら顔が少し赤くなっていました – 顔の表皮の血流が活性化された結果です。皮膚に両方の製品が吸収された後、私の顔は引き締まって美しい輝きがありました。
</p>

<div class="clr"></div>
</div>
</div>

<div class="day">
<div class="day-text">
<p class="testdiaryimg"><img src="<?= $assets ?>/song_files/eyes2.jpg" alt="" height="207" width="130" class="padbottom"></p>

<h2><strong>5日目</strong></h2>

<p class="testdiaryp"><a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>を使って5日後、劇的な効果に驚きました。</p>
<p class="testdiaryp"><strong>シワ、ヒダとシミが疑う余地もなく目に見えて減りました！</strong></p>
<p class="testdiaryp">その効果に驚き、文字通り20年若返りました。全てのシワとヒダが消えていくのをまさに目の当たりにしました！
</p>

<div class="clr"></div>
</div></div>

<div class="day">
<div class="day-text">

<p class="testdiaryimg"><img src="<?= $assets ?>/song_files/eyes3.jpg" alt="" height="207" width="130"></p>

<h2><strong>14日目</strong></h2>

<p class="testdiaryp">14日後、全ての疑いが無くなっただけでなく、全てのシワも無くなりました！</p>
<p class="testdiaryp">おでこのシワ、たるみ、たわんだ首の皮膚、目尻の小じわ、さらには顔のシミまでもが完全に消えました。製品の値段に関わらず、いままでこんな勢いで肌を引き締めてくれるものは見たことも感じたこともありませんでした！</p>
<p class="testdiaryp">2週間後、肌はその状態を保ちながら、20年前と同じ美しさと輝きになるまで毎日実際に良くなりました。この時点で友達と家族全員が驚きました。その違いを信じられず、私が密かにボトックスをしてると信じ込んでいました。
</p>


<div class="clr"></div>

</div>

</div>




<br>
<p style="text-align:center;"><strong>あなたにも効果がありますか？</strong></p><br>

<p>他にも数々のスキンケアトリックがありますが、ほとんどのものが恐ろしく高価です。その他数々の製品がある中で、その効果に疑問を持つのはごく自然なことです。だからこそ私がしたことを試してみてください：ご自身で試してください！ご自身で調査して家の鏡で信じられないような結果を見てください。信じられないようなビフォーとアフターになります！ </p><br>
<p>一度ご自身でこのアンチエイジングスキン対策を体験したら、下にコメントを残して成功ストーリーを敦子さんのように他の人達と共有してください。お肌の改善を文書にして、素晴らしい外見と感覚を得るために数十万円も使う必要が無いことを証明してください。 </p>
<br>

<p><strong>最良の結果を得るためには<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>両方を一緒に使用する必要がある点に留意してください。</strong></p><br>
<p> 便宜を図るため、敦子さんがサインアップして<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>アンチエイジングトリートメントと<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>のディスカウントを受けたリンクを提供します。下のリンクを使うと配送料も最も安くなります。</p>

<p>繰り返しますが、最良の結果を得るためには必ず両方の製品を一緒に使ってください。両方のクリームには100%満足保証または現金全額払い戻し保証が付いています。送料割引で4千円程度でスムーズなお肌になれます。でも急いでください、これらの素晴らしいボトルはいつまでもありません。</p>

</div>
<!--cenfr-->
<div class="cenfr">



	<div class="cenfr02">各種メディア</div>
	<div class="cenfr03"><img src="<?= $assets ?>/song_files/oz-mag1.png" name="oz" width="250px" id="oz"></div>
	<div class="cenfr04">20年ものシワとたるみを消す信じられないようなこのトリックについてオズ博士が話しています。
</div>
	<div class="cenfr03"><img src="<?= $assets ?>/song_files/martha.jpg" width="250" height="306"></div>
	<div class="cenfr04"><p>
<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>のスーパーアンチエイジングコンボが2014年春のNew Youマガジンで特集されました。
</p></div>
	<br>
<br>

 <aside id="right-sidebar">
		<div class="block block-nodeblock" id="block-nodeblock-30837">
          <h1 class="specialoffer">SPECIAL OFFER</h1>

          <div class="content">
            <div class="node brightcove-video" id="node-30837">
              <div class="content special-content">

                <div class="field field-text field-field-brightcove-dek">
                  <div class="field-items">

                      <h3>
                      <a ng-href="<?= $step1_link ?>" target="_blank" class="ng-binding" href="<?= $step1_link ?>">ベラヴェイ</a><br> を今すぐご注文ください！</h3>
                      <p>割引が適用される「特別」リ <br>ンクをご利用ください。</p>
                      <p><a ng-href="<?= $step1_link ?>" target="_blank" href="<?= $step1_link ?>"><img alt="ベラヴェイ" src="<?= $step1_image ?>"></a></p>
                      <p><a class="buy-btn" ng-href="<?= $step1_link ?>" target="_blank" href="<?= $step1_link ?>">今すぐご注文！</a></p>

                      <h3><a ng-href="<?= $step2_link ?>" target="_blank" class="ng-binding" href="<?= $step2_link ?>">フィトセラミド</a><br> を今すぐご注文ください！</h3>
                      <p>割引が適用される「特別」リ <br>ンクをご利用ください。</p>
                      <a ng-href="<?= $step2_link ?>" target="_blank" href="<?= $step2_link ?>"><figure class="<?= $step2_name ?>-bottle"></figure></a>
                      <a class="buy-btn" ng-href="<?= $step2_link ?>" target="_blank" href="<?= $step2_link ?>">今すぐご注文！</a>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="clearfix"></div>

        </div>
	</aside>

	<div class="cenfr02">ビフォー&amp;アフター</div>
	<div class="cenfr03"><img src="<?= $assets ?>/song_files/cs1.jpg" width="250px"></div>
	<div class="cenfr04">
<p>
「新しいお肌が大好きで鏡の中の私が大好きです。数々の製品とトリートメントを試してきましたが、どれも<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>以上の効果はありませんでした。心の底から感謝！」
					<br><strong>伊藤由記 <br> 茨城県 古河市</strong>
          </p>
		  </div>
	<div class="cenfr03"><img src="<?= $assets ?>/song_files/cs2.jpg" width="250px"></div>
	<div class="cenfr04"><p>
「もっと早くオズ博士のショーを見ていたらよかったなと思います！結果は衝撃的で私の顔が信じられません。20歳若く見え、気分も女子学生みたいに軽やかです。」
				<br><strong>蘇秀敏 <br>京都府 宇治市</strong>
                    </p></div>
	<div class="cenfr03"><img src="<?= $assets ?>/song_files/cs3.jpg" width="250px"></div>
	<div class="cenfr04">
<p>
「ただ驚きです。こんな早く効果が見れるなんて信じられません。効き目は本物です！文字通り最初の日に効果が見えました。お礼の言いようがありません、若々しい顔を取り戻しました」
				<br><strong>岩元菜緒 <br>東京都 墨田区</strong>
          </p></div>

</div>

</div>

<div class="cenbg2">
<img src="<?= $assets ?>/song_files/offer.jpg" class="respon-img" width="980" height="68" alt="offer">
<p style="text-align:center; color: #F3C; font-weight: bold;">（<script language="javascript">
var dayNames = new Array("日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日");
var now = new Date();
var dayOfTheWeek = now.getDay();
now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);
document.write(now.getFullYear() + "年" + (now.getMonth()+1) + "月" + now.getDate() + "日" + dayNames[(now.getDay())])
</script><?php viewday(0); ?>日火曜日以降、これらの素晴らしい製品は手に入りません**）</p>
<p>メモ：敦子さんは<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>両方を使ってシワを消しました。両製品を一緒に使って出来る限り最良の結果を得ることを推奨します。</p>
<table style="border: 1px dotted black;" cellpadding="2" cellspacing="0" width="100%" bgcolor="#effff7">
<tbody>
<tr>
<td class="marleft"><img src="<?= $assets ?>/song_files/checkmark-green-sm.png" alt="" height="16" width="16"> <strong>情報更新：</strong> <span style="color: rgb(255, 0, 0);">在庫あとわずか6本。プロモーション終了日：<script language="javascript">
var dayNames = new Array("日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日");
var now = new Date();
var dayOfTheWeek = now.getDay();
now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);
document.write(now.getFullYear() + "年" + (now.getMonth()+1) + "月" + now.getDate() + "日" + dayNames[(now.getDay())])
</script><?php viewday(0); ?>日火曜日 </span></td>
</tr>
</tbody>
</table>


<div class="step">
<div class="step-item">
	<a href="<?= $step1_link ?>" target="_blank">
		<img src="<?= $step1_image ?>" class="pullleft" title="">
	</a>
	<strong>
		<a href="<?= $step1_link ?>" target="_blank">あなただけの<?= $step1_name ?>ボトルを今すぐ入手しましょう</a>
		<br><br>
	</strong>
</div>
<p>“ここだけ”リンクを使うと21000円がわずか5597円に！</p>
<br>
<div><a class="btn-a" href="<?= $step1_link ?>" target="_blank">
	<img class="alignnone size-full wp-image-20" title="" src="<?= $assets ?>/song_files/button.png" alt="" height="43" width="308"></a>
<a href="<?= $step1_link ?>" class="offercaution" target="_blank">
 （在庫わずか3本）</a></div>
<br>
<strong>プロモーション終了日：</strong> <script language="javascript">
var dayNames = new Array("日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日");
var now = new Date();
var dayOfTheWeek = now.getDay();
now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);
document.write(now.getFullYear() + "年" + (now.getMonth()+1) + "月" + now.getDate() + "日" + dayNames[(now.getDay())])
</script><?php viewday(0); ?>日火曜日
<div class="clr"></div>
</div>

<div class="clear"></div>

<div class="<?= $step2_link ?>">
<div class="step">
<div><a href="<?= $step2_link ?>" target="_blank"><img src="<?= $step2_image ?>" name="equinox" class="pullleft" id="equinox" title=""></a><strong><a href="<?= $step2_link ?>" target="_blank">あなただけの<?= $step2_name ?>ボトルを今すぐ入手しましょう</a><br><br>
</strong></div>
<p>“ここだけ”リンクを使うと21000円がわずか4997円に！</p>
<br>
<div><a href="<?= $step2_link ?>" class="btn-a" target="_blank"><img class="alignnone size-full wp-image-20" title="" src="<?= $assets ?>/song_files/button.png" alt="" height="43" width="308"></a>
<a href="<?= $step2_link ?>" class="offercaution" target="_blank">
  （在庫わずか3本） </a></div><br>
 <strong>プロモーション終了日：</strong> <script language="javascript">
var dayNames = new Array("日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日");
var now = new Date();
var dayOfTheWeek = now.getDay();
now.setTime(now.getTime() - 0 * 24 * 60 * 60 * 1000);
document.write(now.getFullYear() + "年" + (now.getMonth()+1) + "月" + now.getDate() + "日" + dayNames[(now.getDay())])
</script><?php viewday(0); ?>日火曜日
<div class="clr"></div>


</div>
</div>



<div class="fbcomments">
	<div class="fbcomments_top">
		<div class="fbcomments_topfl">最近のFacebookへのコメント</div>
		<div class="fbcomments_topfr"><a href="<?= $step1_link ?>">コメントする</a></div>
	</div>
	<div class="fbcomments_cen">
		<div class="fbcomments_cenfl"><img src="<?= $assets ?>/song_files/0000.jpg"></div>
		<div class="fbcomments_cenfr"><input type="text" placeholder="コメントする..." class="glbComentarios"></div>
	</div>
	<div class="fbcomments_list">
	  <ul>
	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a1.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">金沢 さつき</a><span>13 minutes ago</span></div>
			   <div class="postContent">
                    少し前にこのコンボを産経で見てコンボをまだ使い続けています。約6週間製品を使っています（<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>が先に到着し、<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>は数日待つ必要がありました）。率直に言って、これは信じられません、凄いとしか言いようがありません。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">6</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a2.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">鉾立由紀</a></div>
			   <div class="postContent">
                    私の友達が使っていて3週間前に勧められました。製品を注文して3日以内に受け取りました（割引価格は得られませんでしたが）。結果は驚きで、3、4週間後どうなってるか見るのが待ちきれません。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">19</a><a href="<?= $step1_link ?>" class="post_d">2</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a3.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">長瀬葉弓</a><span>52 minutes ago</span></div>
			   <div class="postContent">
                    現在3週間アンチエイジング製品を使っていて、本当に5歳若返りました！このママほどの効果はありませんでしたが、1回あたり500円程度なら納得です！目尻の小じわとほうれい線が毎日どんどん消えています。これを伝えてくれて有難う！
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">13</a><a href="<?= $step1_link ?>" class="post_d">2</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a4.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">真由渕上</a><span>about an hour ago</span></div>
			   <div class="postContent">
                    製品を組み合わせることなど決して考えつきませんでした。この製品を使ってみてとても満足しています。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">53</a><a href="<?= $step1_link ?>" class="post_d">2</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a5.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">松下 コマリ</a><span>1 hour ago</span></div>
			   <div class="postContent">
                    これをニュースで見ました。このママはそんなチャンスを発見して実にラッキー！？！？ですね。この情報を伝えてくれて有難う！両製品を今注文しました。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">3</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a6.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">杉原杏璃</a><span>2 hours ago</span></div>
			   <div class="postContent">
                    多分他の人達より年を取っていますが、この組み合わせは私にも効果がありました！笑！本当に興奮しています。ひらめきを有難う！
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">7</a><a href="<?= $step1_link ?>" class="post_d">2</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a7.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">森下悠里</a><span>2 hours ago</span></div>
			   <div class="postContent">
                    私の姐が数カ月前にこれを試しました。本当に効くのか見るためにボトルの注文を待っていたらディスカウントが無くなってしまいました！何て残念な、と思ってたら再びディスカウントになって嬉しくなりました。もう同じ過ちは犯しません。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">12</a><a href="<?= $step1_link ?>" class="post_d">5</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a8.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">水輝 せりな</a><span> 2 hours ago</span></div>
			   <div class="postContent">
                    私にもこれらの製品の魔法が効くか試すのが楽しみです。今まで全てのものを試しましたが、どれも効果がありませんでした。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">30</a><a href="<?= $step1_link ?>" class="post_d">3</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a9.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">服部玲奈</a><span>2 hours ago</span></div>
			   <div class="postContent">
                   私にも効きました！思った通りの効果がありました。とても簡単で他の人にも是非知らせたいと思います。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">53</a><a href="<?= $step1_link ?>" class="post_d">6</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a10.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">鈴木聡子</a><span>2 hours ago</span></div>
			   <div class="postContent">
                    情報を有難う、今始めたばかりです。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">16</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a11.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">山村 貞子</a><span>2 hours ago</span></div>
			   <div class="postContent">
                    最近子供の世話でとても忙しくて、こんなお得な話を見つけられませんでした。そんなアイデアを思いつくなんてとても賢明ですね！
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">2</a><a href="<?= $step1_link ?>" class="post_d">0</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a12.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">岸明日香</a><span>2 hours ago</span></div>
			   <div class="postContent">
                    よくこんなお得な情報を見つけてくれるなあ、といつも感心しています、両製品を買いました。来週どんなことを知らせてくれるか待ちきれません。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">11</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a13.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">まなずきん</a><span>2 hours ago</span></div>
			   <div class="postContent">
                    これは凄い製品です！親友の舞子がこれを使っています。長年私はシワを取る努力をしていましたが、どれも役に立ちませんでした。私の念願を叶えてくれるチャンスを与えてくれました、それは私の娘の結婚式にピッタリ合いそうです。スキンクリームを今注文しました。何だかとっても良い予感がしています！！
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">33</a><a href="<?= $step1_link ?>" class="post_d">2</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a14.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">鈴木サミー</a><span>3 hours ago</span></div>
			   <div class="postContent">
                    こんにちは敦子さん、今注文しました。届くのが待ち遠しいです！！ありがとうございます、奈美恵xoxoxo。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">23</a><a href="<?= $step1_link ?>" class="post_d">3</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a15.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">児玉 歩</a><span>3 hours ago</span></div>
			   <div class="postContent">
                    母が丁度これをメールしてきました、職場の友達がそれについて話してました。とても良く効くと思います。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">6</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a16.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">春子ジエシカ</a><span>3 hours ago</span></div>
			   <div class="postContent">
                    これを友人全員に知らせます、情報ありがとう。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">2</a><a href="<?= $step1_link ?>" class="post_d">0</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a17.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">傅萱</a><span>4 hours ago</span></div>
			   <div class="postContent">
                    オンラインで注文するのに躊躇してましたが、このお得な情報でその迷いが消えました。本当に見逃せなかったのです。支払いページは全て暗号化されていて良かったです。新しい私になるのが楽しみです。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">17</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a23.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">ほんじゃね</a><span>6 hours ago</span></div>
			   <div class="postContent">
                    先に注文しました。始めてどうなるのか見るのを待ちきれません。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">8</a><a href="<?= $step1_link ?>" class="post_d">6</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a18.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">吉田起代子</a><span>8 hours ago</span></div>
			   <div class="postContent">
                    不動産業者としてベストな外見と感じが重要ですが、残念なことに家屋市場はさほど好調ではなく最近財布の紐が固くなりました。情報を有難う、ボトルを受け取るのを楽しみにしています。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">20</a><a href="<?= $step1_link ?>" class="post_d">2</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a19.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">紅屋 ママ</a><span>8 hours ago</span></div>
			   <div class="postContent">
                    この種の製品を山ほど試してきました。これを試してみたい一方で、心の何処かでまだ踏ん切りが付かないでいます。どなたかそれが本当に効くと安心させてください。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">10</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a20.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">駒澤愛子</a><span>8 hours ago</span></div>
			   <div class="postContent">
                    シワ取りクリームを前に試してとても効きましたが、2番目の方法は知りませんでした。それを試してみてお知らせします。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">13</a><a href="<?= $step1_link ?>" class="post_d">5</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a21.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">安藤 みきこ</a><span>8 hours ago</span></div>
			   <div class="postContent">
                    今度ばかりは価格に後ろめたさを感じず私自身に何か良いことをすることが出来ました。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">3</a><a href="<?= $step1_link ?>" class="post_d">1</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	    <li>
		<a class="postActor" target="_blank" href="<?= $step1_link ?>"><img class="img" img="" src="<?= $assets ?>/song_files/a22.jpg" width="50" alt=""></a>
		<div class="fbContent">
			<div class="postContainer">

			   <div class="stat_elem"><a class="profileName" target="_blank" href="<?= $step1_link ?>">佐藤優海</a><span>9 hours ago</span></div>
			   <div class="postContent">
                    こんなに効果があるなんて思ってもみませんでした。
               </div>
			   <div class="postRed"><a href="<?= $step1_link ?>" class="post_u">19</a><a href="<?= $step1_link ?>" class="post_d">6</a><a href="<?= $step1_link ?>" class="post_re">Reply</a></div>
            </div>
		</div>
		</li>

	  </ul>
	</div>
</div>

</div>





<div class="cenfr hide-on-large">

  <div class="cenfr02">各種メディア</div>
  <div class="cenfr03"><img src="<?= $assets ?>/song_files/oz-mag1.png" name="oz" width="250px" id="oz"></div>
  <div class="cenfr04">20年ものシワとたるみを消す信じられないようなこのトリックについてオズ博士が話しています。
</div>
  <div class="cenfr03"><img src="<?= $assets ?>/song_files/martha.jpg" width="250" height="306"></div>
  <div class="cenfr04"><p>
<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>のスーパーアンチエイジングコンボが2014年春のNew Youマガジンで特集されました。
</p></div>
  <br>
<br>
 <aside id="right-sidebar">
		<div class="block block-nodeblock" id="block-nodeblock-30837">
          <h1 class="specialoffer">SPECIAL OFFER</h1>

          <div class="content">
            <div class="node brightcove-video" id="node-30837">
              <div class="content special-content">

                <div class="field field-text field-field-brightcove-dek">
                  <div class="field-items">

                      <h3>
                      <a ng-href="<?= $step1_link ?>" target="_blank" class="ng-binding" href="<?= $step1_link ?>">ベラヴェイ</a><br> を今すぐご注文ください！</h3>
                      <p>割引が適用される「特別」リ <br>ンクをご利用ください。</p>
                      <p><a ng-href="<?= $step1_link ?>" target="_blank" href="<?= $step1_link ?>"><img alt="ベラヴェイ" src="<?= $step1_image ?>"></a></p>
                      <p><a class="buy-btn" ng-href="<?= $step1_link ?>" target="_blank" href="<?= $step1_link ?>">今すぐご注文！</a></p>

                      <h3><a ng-href="<?= $step2_link ?>" target="_blank" class="ng-binding" href="<?= $step2_link ?>">フィトセラミド</a><br> を今すぐご注文ください！</h3>
                      <p>割引が適用される「特別」リ <br>ンクをご利用ください。</p>
                      <a ng-href="<?= $step2_link ?>" target="_blank" href="<?= $step2_link ?>"><figure class="phyto-bottle"></figure></a>
                      <a class="buy-btn" ng-href="<?= $step2_link ?>" target="_blank" href="<?= $step2_link ?>">今すぐご注文！</a>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="clearfix"></div>

        </div>
	</aside>
  <div class="cenfr02">ビフォー&amp;アフター</div>
  <div class="cenfr03"><img src="<?= $assets ?>/song_files/cs1.jpg" width="250px"></div>
  <div class="cenfr04">
<p>
「新しいお肌が大好きで鏡の中の私が大好きです。数々の製品とトリートメントを試してきましたが、どれも<a href="<?= $step1_link ?>" target="_blank"><?= $step1_name ?></a>と<a href="<?= $step2_link ?>" target="_blank"><?= $step2_name ?></a>以上の効果はありませんでした。心の底から感謝！」
          <br><strong>伊藤由記 <br> 茨城県 古河市</strong>
          </p>
      </div>
  <div class="cenfr03"><img src="<?= $assets ?>/song_files/cs2.jpg" width="250px"></div>
  <div class="cenfr04"><p>
「もっと早くオズ博士のショーを見ていたらよかったなと思います！結果は衝撃的で私の顔が信じられません。20歳若く見え、気分も女子学生みたいに軽やかです。」
        <br><strong>蘇秀敏 <br>京都府 宇治市</strong>
                    </p></div>
  <div class="cenfr03"><img src="<?= $assets ?>/song_files/cs3.jpg" width="250px"></div>
  <div class="cenfr04">
<p>
「ただ驚きです。こんな早く効果が見れるなんて信じられません。効き目は本物です！文字通り最初の日に効果が見えました。お礼の言いようがありません、若々しい顔を取り戻しました」
        <br><strong>岩元菜緒 <br>東京都 墨田区</strong>
          </p></div>

</div>

<div class="pattern2" id="nol_footer">
   <div style="max-width:980px;margin:auto;" id="nol_footerInner">
      <table class="nol_table">
         <tbody>
            <tr>
               <td>
                  <p class="nol_footerLogo"><a href="http://www.nhk.or.jp/" data-role="none"><img width="68" src="https://www.nhk.or.jp/common/res/img/logo_footer_sp.png" alt="日本放送協会"></a></p>
                  <p class="nol_copyright"><span class="nol_copy"><img width="310" id="nol_copyA" src="https://www.nhk.or.jp/common/res/img/logo_footer_copy.png" alt="Copyright NHK(Japan Broadcasting Corporation) All rights reserved. このページは受信料で制作しています。"><img width="223" id="nol_copyB" src="https://www.nhk.or.jp/common/res/img/logo_footer_copy_sp.png" alt="Copyright NHK(Japan Broadcasting Corporation) All rights reserved. このページは受信料で制作しています。"></span></p>
                  <p class="nol_link"><a href="http://www.nhk.or.jp/css/" target="_blank" class="nol_link0" data-role="none">ご意見・お問い合わせ</a>&#12288;<a target="_blank" class="nol_link1" href="http://www.nhk.or.jp/privacy/" data-role="none">NHKにおける個人情報保護について</a>&#12288;<a target="_blank" class="nol_link2" href="http://www3.nhk.or.jp/toppage/nhk_info/copyright.html" data-role="none">放送番組と著作権</a>&#12288;<a target="_blank" class="nol_link3" href="http://nhk.jp/rules" data-role="none">NHKインターネットサービス利用規約</a></p>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
</div>

<style type="text/css">
	#exitToShow {
		height: 20px;
	}
	#exitToShow1 {
		height: 100%;
	}
</style>

<div class="exit-modal" ng-show="m.exitmodal" style="display:none;">

	<div class="modal-body" >
    <a ng-click="exitTo()" id="exitToShow">
      <figure class="exit-banner"></figure>
    </a>
    <a href="index.html#" id="exitToShow1"></a>
  </div>
</div>
<div style="display:none;" class="modal-backdrop in" ng-show="m.exitmodal"></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!--script>
function setPop(e){if(e)setTimeout("window.onbeforeunload = PopIt",e);else window.onbeforeunload=PopIt}function ExitPop(e,t,n){affkit.redirect_to=e;affkit.pop_message=unescape(t);affkit.enable_delay=n;setPop(n)}function PopIt(){if(affkit.redirect_to)setTimeout(function(){window.location.href=affkit.redirect_to},100);window.onbeforeunload=UnPopIt;return affkit.pop_message}function UnPopIt(){}var affkit={};jQuery(document).ready(function(e){e("a").click(function(){if(e(this).attr("target")!="_blank"&&!e(this).hasClass("allow-popup")&&e(this).attr("href").substring(0,1)!="#")window.onbeforeunload=UnPopIt})})
</script-->
<!-- <script>
window.onbeforeunload = showbanner;
function showbanner(e){
	var msg = 'ベラヴェイの特別販売の特典を本当ご利用したくありませんか。' + '\n';
		msg += '\n';
		msg += ' 期間限定 - 送料無料のチャンスを入手してください。'+ '\n';
		msg += '\n';
		msg += 'あなたがこの驚くべき成分があなたにもたらす成果を見ることができるように送料100%当社負担でご提供します。'+ '\n';
		msg += '\n';
		msg += 'クーポンを有効にするには以下の*キャンセル*又は*留まる*をクリックしてください。'+ '\n';

	if (!e) e = window.event;
		e.cancelBubble = true;
		e.returnValue = '';

    if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }

    jQuery('.exit-modal').show();
	jQuery('.modal-backdrop').show();

    if (navigator.userAgent.indexOf("Firefox") > -1) {
		alert(msg);
	}



	 if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }
	return msg;
}
jQuery( document ).ready( function(){
	jQuery('#exitToShow').on('click',function(){
		jQuery('.exit-modal').hide();
		jQuery('.modal-backdrop').hide();
	});
	jQuery('.exit-modal').on('click',function(){
		window.open(
		  'http://go.loneforce.com/click/1',
		  '_blank' // <- This is what makes it open in a new window.
);
	});
});

</script> -->
<!--script type="text/javascript">ExitPop('#','WAIT%21%20-%20This%20Course%20Is%20Already%2067%25%20Off%20But%20We%27ll%20Give%20You%20Our%20FINAL%20Offer%20Of%20%24347%20PLUS%20There%20Is%20A%20Money%20Back%20Guarantee%21%0A',1)</script-->
</body></html>
