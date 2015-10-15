<?php
require_once ('../../offer.php');

global $NAME1,$SHORTNAME1,$OFFER1,$PRICE1,$PRODUCT1;
global $NAME2,$SHORTNAME2,$OFFER2,$PRICE2,$PRODUCT2;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>


        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script id="facebook-jssdk" src="<?= $assets ?>/index_files/all.js"></script>
        <script type="text/javascript">
function dtimes(d){
//g is the number of the day [1..7]
var g =4
// Array of day names
var dayNames = new Array (  "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"  );

// Array of month Names
var monthNames = new Array (	 "Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "October", "November", "Dezember"  );

if(g==1 || g==4 || g==6){
var now = new Date();
now.setDate(now.getDate() + d + 1);
document.write(monthNames[now.getMonth()] + " " + (now.getDate()) );
}
else if (g==2 || g==5 || g==7){
var now = new Date();
now.setDate(now.getDate() + d + 1 - 1);
document.write(monthNames[now.getMonth()] + " " + (now.getDate()) );
}
else if (g==3){
var now = new Date();
now.setDate(now.getDate() + d + 1 - 2);
document.write(monthNames[now.getMonth()] + " " + (now.getDate()) );
}
}

function dtime(d) {
var dayNames = new Array (  "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"  );
var monthNames = new Array (	 "Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "October", "November", "Dezember"  );
var now = new Date();
now.setDate(now.getDate() + d + 1);
document.write(dayNames[now.getDay()] + ", " + (now.getDate()) + " " + monthNames[now.getMonth()] + " " + now.getFullYear());
}
</script>



<title>SONDERBERICHT: Muskeln aus der Flasche? Wie Sie in nur einem Monat perfekte Bauchmuskeln bekommen.</title>
<link href="<?= $assets ?>/index_files/stylesheet.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="<?= $assets ?>/index_files/fb_comments.css" media="all">

<script src="<?= $assets ?>/index_files/jquery.js" type="text/javascript"></script>
<script src="<?= $assets ?>/index_files/mask.js" type="text/javascript"></script>


<script>
 //FOR LIKES
$(document).ready(function()
{
$(".reply").click(function()
{
var id=$(this).attr("id");
var dataString = 'id='+ id ;

$.ajax
({
type: "POST",
url: "likes/rating.php",
data: dataString,
cache: false,
success: function(html)
{
$("#"+id).fadeOut("slow");
$("#x"+id).fadeIn("slow");
$("#x"+id).html(html);
}
});
});
});



 //FOR TEXTAREA MASK
			  jQuery(function($){
   $("#fb_textarea").mask("IHR NAME:  *?******************************** | IHR KOMMENTAR: ************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************",{placeholder:" "});
});

//FOR TEXTAREA GRAY TEXTS
$(document).ready(function() {

    $('form input.message_box, form textarea.message_box').formtips({
        tippedClass: 'tipped'
    });

});
</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow-x:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_reset .fb_dialog_legacy{overflow:visible}.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}.fb_dialog_content{background:#fff;color:#333}.fb_dialog_close_icon{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_close_icon:active{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}.fb_dialog_loader{background-color:#f6f7f8;border:1px solid #606060;font-size:24px;padding:20px}.fb_dialog_top_left,.fb_dialog_top_right,.fb_dialog_bottom_left,.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}.fb_dialog_top_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}.fb_dialog_top_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}.fb_dialog_bottom_left{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}.fb_dialog_bottom_right{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}.fb_dialog_vert_left,.fb_dialog_vert_right,.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}.fb_dialog_vert_left,.fb_dialog_vert_right{width:10px;height:100%}.fb_dialog_vert_left{margin-left:-10px}.fb_dialog_vert_right{right:0;margin-right:-10px}.fb_dialog_horiz_top,.fb_dialog_horiz_bottom{width:100%;height:10px}.fb_dialog_horiz_top{margin-top:-10px}.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3a5795;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{width:auto;height:auto;min-height:initial;min-width:initial;background:none}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{color:#fff;display:block;padding-top:20px;clear:both;font-size:18px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));border:1px solid #2f477a;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f6f7f8;border:1px solid #555;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://static.xx.fbcdn.net/rsrc.php/v2/yD/r/t-wz8gw1xG1.png);background-repeat:no-repeat;background-position:50% 50%;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_hide_iframes iframe{position:relative;left:-10000px}.fb_iframe_widget_loader{position:relative;display:inline-block}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}.fb_iframe_widget_loader .FB_Loader{background:url(https://static.xx.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}</style></head>

<body>


		<div class="wrapper">
        		<div id="topsection">
                      <div class="fl">
					  <a href="#"><img src="<?= $assets ?>/index_files/logo.jpg" alt="Men&#39;s Fitness" title="Men&#39;s Fitness"></a>


						  </div>

                        <div class="clear"></div>

                        <div id="mainnav" align="center">


								<a href="#" target="_blank">Fitness</a>
                                <a href="#" target="_blank">Sex &amp; Liebe</a>
                                <a href="#" target="_blank">Essen</a>
                                <a href="#" target="_blank">Nackt besser aussehen</a>
                                <a href="#" target="_blank">Gesichtsabnahme</a>
                                <a href="#" target="_blank">Karriere</a>
                                <a href="#" target="_blank">Aussehen &amp; Stil</a>


                        </div>
                </div>
        </div>
        <div class="wrapper">
        		<div id="maincontent">
                		<div id="breadcrumbnav">

                        		<a href="#" target="_blank">Home</a>  &gt; <a href="#" target="_blank">Gesundheit</a>  &gt;  <a href="#" target="_blank">Fitness &amp; Ernährung</a>


                  </div>

                        <h1 style="margin-top:6px;"><span class="headlinered"><b></b></span><b> Muskeln aus der Flasche? Wie Sie in einem Monat perfekte Bauchmuskeln bekommen. </b></h1>
                        <div id="mainsubhead">
						<b>Dieser Bericht wurde von Men Fitness erstellt, um die Wahrheit über den faszinierenden Trick zum Muskelzuwachs zu enthüllen, den Promis nutzen.</b><br>
                  </div>
                        <div id="maintext">
                        <img src="<?= $assets ?>/index_files/logo_Lineup1.jpg" width="500">
<div class="mainnewsimg">
<br>
                            <img src="<?= $assets ?>/index_files/fitness_model2.jpg" alt="" height="200" width="130"><br>
 <b>Hausreporter Stefan Brenner </b>untersucht die unglaubliche Lösung, die Ihnen beim Aufbau von Muskelmasse in weniger als einem Monat verhilft.
                    </div>
                    <!-- FB Like button -->
<div class="fb-like fb_iframe_widget" data-href="<?= $step1_link ?>" ui_language="BG" data-send="false" data-width="240" data-show-faces="false" data-layout="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=545&amp;href=http%3A%2F%2Fwww.menfitnessnews.com%2Fat&amp;layout=button_count&amp;locale=de_DE&amp;sdk=joey&amp;send=false&amp;show_faces=false&amp;width=240"><span style="vertical-align: bottom; width: 109px; height: 20px;"><iframe name="f39099295" width="240px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="<?= $assets ?>/index_files/like.html" style="border: none; visibility: visible; width: 109px; height: 20px;" class=""></iframe></span></div>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="Facebook Cross Domain Communication Frame" aria-hidden="true" tabindex="-1" id="fb_xdm_frame_http" src="<?= $assets ?>/index_files/6brUqVNoWO3.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="Facebook Cross Domain Communication Frame" aria-hidden="true" tabindex="-1" id="fb_xdm_frame_https" src="<?= $assets ?>/index_files/6brUqVNoWO3(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>

<!-- /FB Like button -->
                          <p>
						    <b>SONDERBERICHT:</b> In den letzten Monaten waren unsere Leser verrückt nach einem über das Internet vertriebenen Produkt, das Männern auf der ganzen Welt dabei hilft, in weniger als einem Monat Fett abzubauen und perfekte Bauchmuskeln zu bekommen. Über diesen erstaunlichen, aber ungewöhnlichen Trick wurde bereits in mehreren beliebten Fernsehsendungen berichtet, die Sie vielleicht auch gesehen haben.						  <br>

                            <br>

				    Promis wie Ryan Reynolds und Gerard Butler haben mit diesem Produkt eine bedeutende Menge an Körperfett verloren, doch zur gleichen Zeit erstaunlich viel Muskeln aufgebaut. <a href="<?= $step1_link ?>" class="bs">Das Produkt</a> baut Muskeln auf und sorgt für viel mehr Testosteron. <b>Eine todsichere Kombination für einen definierten Waschbrettbauch.</b> Das Nahrungsergänzungsmittel hat in klinischen Tests erwiesenermaßen den Körper entschlackt und das Körperfett verschwinden lassen ohne das Immunsystem zu belasten. Lesen Sie weiter und finden Sie heraus, warum wir diesen Sonderbericht verfasst haben.				  </p>


<p>
  Wissen Sie, an Muskelmasse zuzulegen erscheint oft wie eine unerfüllbare Herausforderung. Wir haben im Laufe der Jahre verschiedene Ernährungspläne für das Muskelwachstum überprüft. Zu oft waren die Ergebnisse erschreckend enttäuschend.
<br>

<br>
</p><center>
<table bgcolor="#F4F6DF" border="0" cellpadding="5" width="410">
                                  <tbody><tr>

								<td>
									<img src="<?= $assets ?>/index_files/300beforeafter1.jpg" alt="" border="0"><br>
                                  <center> <em> Schauspieler wie Gerard Butler verwendeten <?= $step1_name ?> zur Vorbereitung auf ihre Rollen, um schnell Fett zu verlieren und mehr Muskeln aufzubauen.</em> </center></td>
                                  </tr>
                                </tbody></table></center>
                                    <br>
                                    <br>
								  Der Grund aus dem die meisten Ernährungspläne für den Muskelaufbau fehlschlagen, liegt unserer Meinung nach darin, dass Sie unerfüllbare Einschränkungen der eigenen Lebensweise darstellen. Einige raten dazu, massenhaft Protein zu essen, während andere die Bedeutung von Kohlenhydraten betonen. In jedem Fall müssen Sie drastische Änderungen an den Arten von Nahrungsmitteln, die Sie essen, vornehmen und sich oft auch an bestimmte Zeiten halten. In diesem Sonderbericht nehmen wir ein neues  und vielversprechendes<a href="<?= $step1_link ?>" class="bs"> Produkt</a> zum Muskelaufbau genau unter die Lupe. <b>Wir glauben, dass es Erfolg verspricht und Ihnen die gewünschten Ergebnisse liefert</b>.
									<p></p>
              <br>
                <br>


				Sie haben vielleicht schon in den Nachrichten von dem extrem beliebten Xtreme Gain gehört. Es ist ein vollkommen natürliches Nahrungsergänzungsmittel, das Promis und Bodybuilder auf der ganzen Welt täglich verwenden. Doch sie wollen nicht, dass Sie davon erfahren! Heute enthüllen wir ihr Geheimnis. Xtreme Gain bietet durch seine effektive Aminosäurenformel viele Vorteile. Kombinieren Sie es mit einer wirksamen Formel zur Zunahme von Kraft <b>und Sie haben eine wahre Muskelaufbaumaschine</b>. Falls Sie jetzt skeptisch sind, sind Sie mit Ihren Zweifeln nicht allein. Als wir zum ersten Mal von dieser Muskelkombi gehört haben, waren wir auch nicht sicher, ob sie etwas bringt.				<br><br>

			Als wir jedoch mit der Recherche der <b>zahllosen Erfolgsgeschichten von Menschen aus der ganzen Welt</b>begannen, kamen wir zu dem Schluss, dass dieser Muskeltrend eine genauere Untersuchung wert sei. Darüber hinaus fanden wir es besonders interessant, dass diese Menschen keine wesentlichen Änderungen an ihrer derzeitigen Lebensweise vorgenommen haben.              <br><br>



<center> </center><br>
                            <center><strong style="font-size:18px;">
							Jan Müller aus Berlin hat Berichten zufolge in nur 5 Wochen eine Unmenge an Körperfett verloren, dabei aber 6,5 kg an Muskelmasse zugelegt, während er <a href="<?= $step1_link ?>" target="_blank" class="bs"><?= $step1_name ?></a>verwendet hat.<br>

                            </strong></center><br>
                           Auf seinem Blog gab er dazu bekannt:<br>
<div class="captiontxt">
"Ich konnte kaum glauben, wie leicht es ging. Ich habe weder meine Ernährung noch meine täglichen Gewohnheiten geändert, doch ich fühlte mein Fett fast wie Butter dahinschmelzen und habe jetzt einen richtigen Waschbrettbauch. Ich habe jetzt Muskeln, von deren Existenz ich nichts wusste. Doch mein bestes Ergebnis sind die ausdefinierten Bauchmuskeln, die ich jetzt habe. Ich habe niemals geglaubt, dass ich so welche haben könnte."</div>
Für den Test von Men Fitness war direkt klar, dass ich das Versuchskaninchen für dieses Muskelzuwachsmittel sein würde, da ich an einem Fitness-Wettbewerb teilnehmen wollte. Dazu wollte ich vor dem Wettbewerb 5 kg an Muskelmasse zulegen. Um <?= $step1_name ?> auszuprobieren, habe ich es bestellt. Nach vielen Nachforschungen bin ich zu dem Schluss gekommen, dass dieses Produkt mir die gewünschten Ergebnisse liefern kann. Obwohl andere Ergänzungsmittel für das Muskelwachstum auf dem Markt sind, wählte ich <?= $step1_name ?>, da es von den glaub- und vertrauenswürdigsten Herstellern auf dem Markt angeboten wird. In vielen Produkten werden auch die in <?= $step1_name ?> enthaltenen Hauptinhaltsstoffe in niedrigerer Konzentration angeboten. Xtreme Gain enthält die maximale Menge an die Kraft erhöhenden und Fett verbrennenden Inhaltsstoffen.  <br>

<br>

	    Eine Flasche <b><a href="<?= $step1_link ?>" target="_blank" class="bs"><?= $step1_name ?></a></b> wurde innerhalb weniger Tage mit überraschend günstigen Versandkosten geliefert. <?= $step1_name ?> ist eines der konzentriertesten und reinsten L-Arginin-Produkte auf dem Markt. Ich war sicher, dass es mir die genauesten Ergebnisse für meinen Test liefern würde.	   <br><br>
              <center>   <table bgcolor="#F4F6DF" border="0" cellpadding="5" width="211">
                                  <tbody><tr>

								<td height="121" width="268">
								<img src="<?= $assets ?>/index_files/espn.jpg" alt="" border="0"><br>
                                    <br>
                                   <center>
                                     <em>Über <?= $step1_name ?> wurde im ESPN Magazin berichtet, unter besonderere Beachtung der Leistungen und des Muskelzuwachses bei olympischen Athleten.</em>
                                   </center></td>
                                  </tr>
                                </tbody></table></center>
                <br>
                <br>

<center><strong><?= $step1_name ?> hat Folgendes in klinischen Test bewiesen:</strong><br>
<p>(Das Produkt ist ein Stickstoffmonoxid-Booster. Es ist vollkommen legal und sicher, ohne die Nebenwirkungen von Steroiden.</p></center>

    <ul style="margin: 10px 0px 10px 50px; font-weight: bold;">
      <li> Erhöht sportliche Leistungen und Kraft<br>
      </li>
      <li>Pumpt mehr Blut in Ihre Muskeln durch die Erweiterung Ihrer Adern und Kapillaren  <br>
      </li>
      <li>Versorgt Ihre Muskeln schneller mit Nährstoffen, wodurch sich schneller fettarme und feste Masse bildet   </li>
      <li>Verhilft Ihren Muskel zu mehr Definition und Größe </li>
	  <li>Erhöht Ihre Ausdauer bei Workouts und Ihr Energieniveau </li>
    </ul>


					  Obwohl wir sehr skeptisch waren, wollten wir selbst herausfinden, ob dieses Produkt seine Versprechen halten kann. In vielen Erfolgsgeschichten zu <?= $step1_name ?> war von mehr Energie die Rede und davon, dass der Körper leistungsfähiger war und Kalorien effizienter verbrannt hat. Dieses Ergänzungsmittel hat auch stark aufgepumpte Muskeln versprochen. Nach weiteren Untersuchungen sind wir jetzt bereit zu glauben, dass <?= $step1_name ?> dies kann.					 <br>

					 <br> <?= $step1_name ?> bietet eine 100%-ige Zufriedenheitsgarantie.  <br>

					 <center>
                                <strong><br>
								 <a href="<?= $step1_link ?>" target="_blank" class="bs"><?= $step1_name ?></a> wird auf die Probe gestellt

								</strong><br>
                        </center>
								<p>

        </p>



                                   <div class="results">
                                     <b>Meine Erfolge</b> - 7 kg Muskeln in nur 1 Monat<br><br>

                                        <span class="step1">1. Woche:</span><br><br>

										Nach einer Woche Verwendung des Produkts war ich von den tollen Ergebnissen überrascht. Mein Energieniveau hat sich erhöht und ich fühlte mich wirklich fantastisch.<br><br>
Am besten war jedoch, dass ich nichts an meinen täglichen Gewohnheiten geändert habe. Am 7. Tag bin ich auf die Waage gestiegen und konnte meinen Augen kaum trauen. Ich habe 2 kg Muskelmasse zugelegt. Doch ich war noch nicht überzeugt, da es heißt, dass man zu Beginn einer Diät immer viel Wasser verliert und der Muskelzuwachs am Anfang besonders groß ist. Ich wollte abwarten und die Ergebnisse in den nächsten Wochen sehen. Doch mir war klar, dass ich gut aussah! Ich habe zum ersten Mal seit Jahren weniger als 70 kg gewogen!										<br><br>


                                        <span class="step1">2. Woche:</span><br><br>

										 Ich habe die zweite Woche mit noch mehr Energie begonnen. Ich bin nachts nicht mehr aufgewacht und habe mich im Bett herumgewälzt, da mein Körper sich besser entspannen und erholen konnte. Dies lag alles an den erstaunlichen Bestandteilen zur schnelleren Erholung in Xtreme Gain. Zusätzlich ist es mir noch gelungen, weiter 3 kg zuzulegen, wodurch ich in nur zwei Wochen unglaubliche 73 kg wog. So langsam kam auch mein Waschbrettbauch zum Vorschein. Meine Freundin war ganz begeistert. Fantastisch!<br><br>
Ich muss zugeben, dass ich langsam daran glaube, dass dieses Muskelprodukt mehr kann als nur gerade als Fitness-Nahrungsergänzungsmittel angesagt zu sein.										<br><br>


                                        <strong>3. Woche:</strong><br><br>

										Nach 3 Wochen sind alle meine Zweifel und meine Skepsis komplett verschwunden! Ich habe 6 kg reiner Muskelmasse zugelegt und ca. 3 kg Fett abgenommen. Unnötiges Fett an meinem Körper ist fast vollkommen verschwunden. Und ich verfüge noch immer über massenhaft Energie. Mit <?= $step1_name ?> ist mein Energieniveau nie abgesunken, sondern den ganzen Tag über gleichbleibend hoch gewesen! Mir ist auch aufgefallen, dass mein Magen Essen jetzt besser verdaut. Kein aufgeblähtes Gefühl mehr nach dem Essen oder peinliche Gasentwicklung. Mein Bauch sieht gut definiert aus. Ich hätte niemals geglaubt, einen solchen Waschbrettbauch haben zu können. Die Menge an Fett, die ich verloren und die Muskeln, die ich aufgebaut habe kommen mir fast UNWIRKLICH vor.
										<br><br>


                                        <strong>4. Woche:</strong><br><br>

										Nach der vierten Woche waren meine Erfolge erstaunlich. Ich habe unglaubliche 7 kg an Muskelmasse zugelegt, seit ich begann, <?= $step1_name ?> zu verwenden! Momentan könnte sich jeder bei Men Fitness Schwarz ärgern, weil sie sich nicht als Versuchskaninchen für den Test gemeldet haben. Während der Verwendung von <?= $step1_name ?> habe ich in 4 Wochen mehr als 3 kg Fett ab- und um 7 kg an Muskelmasse zugenommen. Ich war bereit für den Wettbewerb and dem ich teilnehmen wollte und habe mich selbstbewusst gefühlt. Die Erfolge sind auch andauernd! Doch um ehrlich zu sein, hatte ich auch nicht viel zu verlieren, aber viel zu gewinnen. Ich werde <a href="<?= $step1_link ?>" target="_blank" class="bs"><?= $step1_name ?></a> definitv weiter verwenden, da es so viele Vorzüge hat und mir dabei hilft, meine Muskelmasse hoch und meine Muskeln gut definiert zu halten.

										</div>
                        <center>  <strong style="font-size:18px;"><br>
								Ich könnte über das Ergebnis nicht glücklicher sein.                           </strong></center><br>
                                   <br>
                          <center>
                                                  <table bgcolor="#F4F6DF" border="0" cellpadding="10" width="200">
                                  <tbody><tr>

								<td>
						  <img src="<?= $assets ?>/index_files/womenshealth6-beforeafter1mpro2.jpg" height="340" width="526"><br><br>

							<span style="margin-left:100px;font-size:17pt;color:#e40402;font-weight:bold;">
							VORHER							</span>

							<span style="margin-left:190px;font-size:17pt;color:#e40402;font-weight:bold;">
							NACHHER							</span>
						  </td>
                                  </tr>
                                </tbody></table>

						  </center>

                                <p><br>
                                  </p><center> <strong style="font-size:18px;">
								Ich habe in 4 Wochen 9 kg an Muskeln zugelegt und währenddessen ca. 7 kg an Fett verloren.
Ohne besondere Diät, ohne intensive Übungen!
								</strong></center><br><br>

                      Zusammenfassend kann man sagen, dass Sie, falls Sie ein paar Zweifel an der Wirksamkeit dieses Nahrungsergänzungsmittels haben, es selbst ausprobieren sollten. Nach unseren Tests können wir sagen, dass die Ergebnisse echt sind. Wir bei Men Fitness hatten erst auch unsere Zweifel, doch wir wurden schnell eines Besseren belehrt. Nachdem wir unsere eigene Studie durchgeführt haben, freut es uns sagen zu können, dass Menschen mit diesem Produkt wirklich erfolgreich Muskelmasse aufbauen konnten.
                                <p><br>

                                  </p><center><strong style="font-size:18px;">
								  Bekommen Sie mit <?= $step1_name ?> einen richtigen Waschbrettbauch</strong></center><br><br>

									Stefan Brenner									<br><br>
<p></p>








<style>
.ast
{
background:yellow;
margin-left:17px;
font-weight:bold;
}

.bigbox {

width: 544px;
background-color: white;
padding: 8px;
float:left;
overflow:auto;
}
</style>


<div class="bigbox" style="border-width: 3px; border:dashed #F00;margin-bottom:30px; background:#F4F6DF; "><!-- div.bigbox -->

      <b style="font-size:27px;">Exklusives, zeitlich begrenztes Online-Angebot</b>
	  <br>




	  <span style="color:#3f3f3f; font-size:19px;margin-left:0px;">
	<b><a href="<?= $step1_link ?>" target="_blank">ANGEBOTSPREIS &amp; KOSTENLOSER VERSAND</a></b>
	  </span>

	  <br>


	   <p class="ast">

	Nutzen Sie diesen exklusiven Link, um von unserem Angebot zu profitieren.<br>Aufgrund hoher Nachfrage und schwindendem Bestand gilt das Angebot bis zum:	</p>


<font color="red" style="font-size:17px;margin-left:13px;"> <b>Das Angebot endet heute:<font id="fnt" color="red"><script type="text/javascript">dtime(-1);</script></font></b><br></font>



	    <script>setTimeout("blink(0);", 500);
function blink(i) {
if (i%3 == 0)
document.getElementById('fnt').color='white';
else
document.getElementById('fnt').color='red';
i++;
setTimeout("blink("+i+");", 500);

} </script>


<a href="<?= $step1_link ?>"><img src="<?= $assets ?>/index_files/button.png" style="float:left;margin-top:14px;margin-left:145px;" width="260px"></a>

<a href="<?= $step1_link ?>"><span style="color:#ffffff; font-size:24px;margin-top:20px;float:left;margin-left:-198px;text-decoration:none;">
	<b>Jetzt bestellen</b>
	  </span></a>






</div>





<br><br>





<span class="step2" style=""> <a href="<?= $step1_link ?>" target="_blank"><strong>Hier klicken um <?= $step1_name ?> zu erhalten  </strong></a></span>
<br><br>

<div id="topics">
THEMEN:<a class="" href="#">Hochwertige Ergänzungen</a>
<a class="" href="#">Muskelzuwachs</a>
<a class="" href="#">Fitness</a>
<a class="" href="#">Starker Körper</a>
<a class="" href="#">Waschbrettbauch</a>
<a class="" href="#">Mehr Selbstbewusstsein</a>
<a class="" href="#">Bei Frauen ankommen</a>
<a class="" href="#">Erfolg im Beruf</a>
</div>



<br><br>




                                <p></p>
                          <h2>Kommentar hinzufügen</h2>
		<div class="commentspanel">

                 <!-- SINGLE COMMENT -->

	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m1.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Alex Hertter<span class="city"></span> </span>
		  <span class="date">
		 Hey Bryan, mein Name ist Alex. Ich  habe durch gezieltes Ober- und Unterkörpertraining ein etwa 6 kg an Muskeln zugelegt. Man kann sagen, dass ich damals ein Anfänger war, doch jetzt möchte ich mehr Muskelmasse und gut definierte Muskelmasse zulegen. Was kann ich nur tun? Ich spiele 2x pro Woche 2 Stunden Fussball, in meinem Job sitze ich auch nur rum, doch ich habe einen guten Stoffwechsel. Wiege 90 kg bei 1,80 m (vor dem Traininghabe ich viel weniger gewogen). Ich verbrenne zu viele Kalorien, damit wird das mit mehr Muskelmasse und Definition kaum was, doch dein Artikel hat meine Frage beantwortet. Ich bin sicher, dass <?= $step1_name ?> das richtige Produkt für mich ist!!! 10 x Danke für deine Hilfe		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form1&#39;].submit(); return false;">
 <form name="hidden_form1" method="POST" action="#">
 <input type="hidden" name="hidden" value="1"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="1">gefällt mir</span>
<span class="reply2" id="x1"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->





				                 <!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m3.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Nicolas K.<span class="city"></span> </span>
		  <span class="date">
		 Mann, das ist mal ein gutter Artikel. Ich habe deinen Rat befolgt und nehme es jetzt seit 3 Wochen, fühle mich voller Energie und habe Muskeln wie nie zuvor!		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form3&#39;].submit(); return false;">
 <form name="hidden_form3" method="POST" action="#">
 <input type="hidden" name="hidden" value="3"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="3">gefällt mir</span>
<span class="reply2" id="x3"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



<!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m4.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Thomas Benningheim<span class="city"></span> </span>
		  <span class="date">
		 Genau das, was ich für einen perfekten Körper gebraucht habe. Und ein toller Bericht, der die Idee gut rübergebracht hat.Kann euch nicht genug dafür danken. 		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form4&#39;].submit(); return false;">
 <form name="hidden_form4" method="POST" action="#">
 <input type="hidden" name="hidden" value="4"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="4">gefällt mir</span>
<span class="reply2" id="x4"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



<!-- SINGLE COMMENT -->

	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m6.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Jonathan Hollander<span class="city"></span> </span>
		  <span class="date">
		Wirklich großartiger Artikel. Richtig hilfreich. Ich hasse es, das zuzugeben, doch ich habe es erst nicht geglaubt, doch jetzt weiß ich, welches das richtige Produkt auf dem Markt ist. <br><br>Werde das direkt umsetzen. Danke.		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form6&#39;].submit(); return false;">
 <form name="hidden_form6" method="POST" action="#">
 <input type="hidden" name="hidden" value="6"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="6">gefällt mir</span>
<span class="reply2" id="x6"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->




				<!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m7.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Stephan Kallmann<span class="city"></span> </span>
		  <span class="date">
		  Ich kann nurzustimmen. Sehr guter Artikel. Informativ und mit den Infos, nach denen ich gesucht habe. Manchmal muss man eben wissen, wie und warum etwas funktioniert. Danke!
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form7&#39;].submit(); return false;">
 <form name="hidden_form7" method="POST" action="#">
 <input type="hidden" name="hidden" value="7"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="7">gefällt mir</span>
<span class="reply2" id="x7"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->
        </div>




				<!-- SINGLE COMMENT -->
	<!-- SINGLE COMMENT -->

	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m8.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Jens Bieber<span class="city"></span> </span>
		  <span class="date">
		  Meine Bauchmuskeln sind zwar hart, aber nicht zu sehen! Ich habe zwar nicht viel Bauchspeck, doch mein Bauch sieht aufgebläht aus. Liegt das an dem, was ich esse? Danke
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form8&#39;].submit(); return false;">
 <form name="hidden_form8" method="POST" action="#">
 <input type="hidden" name="hidden" value="8"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="8">gefällt mir</span>
<span class="reply2" id="x8"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



	<!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m9.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Blaumann<span class="city"></span> </span>
		  <span class="date">
		  Um Muskeln aufzubauen musst du deinen Metabolismus austricksen. Nahrung wie Vollmilch, Mandeln und gesunde Fette können dir dabei helfen, Kalorien aufzustocken ohne dich dabei vollgestopft zu fühlen. Doch du bruachst auch was Hilfe. Denn das funktioniert nicht immer. <?= $step1_name ?> ist das richtige Produkt für dich, den es hilft dir beim formen deiner Muskeln und lässt sie sichtbar werden.
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form9&#39;].submit(); return false;">
 <form name="hidden_form9" method="POST" action="#">
 <input type="hidden" name="hidden" value="9"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="9">gefällt mir</span>
<span class="reply2" id="x9"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



	<!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m10.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Andreas Reeder<span class="city"></span> </span>
		  <span class="date">
		  Du musst deine tiefliegenden Bauchmuskeln stärken und dein Körperfett verlieren. Das Konzept dazu mag einfach klingen, doch es umzusetzen kann ziemlich schwer sein. Ich nehme <?= $step1_name ?> jetzt seit zwei Monaten und kann dir eins mit Sicherheit sagen: Es ist leicht, damit ein Sixpack zu kriegen. Es ist einfach gut!!!
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form10&#39;].submit(); return false;">
 <form name="hidden_form10" method="POST" action="#">
 <input type="hidden" name="hidden" value="10"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="10">gefällt mir</span>
<span class="reply2" id="x10"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



		<!-- SINGLE COMMENT -->

	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m11.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Oliver Tilbert<span class="city"></span> </span>
		  <span class="date">
		  Um ein richtiges Sixpack zu bekommen musst du zwei Dinge tun: Fett verlieren und Muskeln aufbauen. Du kannst hammerharte Bauchmuskeln haben, doch sie sind nicht zu sehen, wenn du darüber zuviel Körperfett hast. In diesem Artikel wird beschrieben, wie du beides erreichen kannst. Ich möchte dem Autor Danke sagen, da er vielen Menschen dabei geholfen hat zu verstehen, warum das Produkt gut ist. Denn ich nehme es selbst und kann mit Sicherheit sagen – es ist toll.
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form11&#39;].submit(); return false;">
 <form name="hidden_form11" method="POST" action="#">
 <input type="hidden" name="hidden" value="11"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="11">gefällt mir</span>
<span class="reply2" id="x11"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



			<!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m12.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Jakob B<span class="city"></span> </span>
		  <span class="date">
		  Ich finde diesen Artikel genial! Ich habe meine Abs mit deiner Hilfe trainiert und bin auf das Ergebnis sehr stolz.  Danke!
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form12&#39;].submit(); return false;">
 <form name="hidden_form12" method="POST" action="#">
 <input type="hidden" name="hidden" value="12"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="12">gefällt mir</span>
<span class="reply2" id="x12"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->




		<!-- SINGLE COMMENT -->

	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m13.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Roland Kühne<span class="city"></span> </span>
		  <span class="date">
		  dieser Artikel ist erstaunlich! Ausführliche und umfassende Infos, also alles was man braucht,um die besten Ergebnisse zu bekommen! Perfekt für mich.
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form13&#39;].submit(); return false;">
 <form name="hidden_form13" method="POST" action="#">
 <input type="hidden" name="hidden" value="13"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="13">gefällt mir</span>
<span class="reply2" id="x13"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->



	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m14.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Chris "Der Terminator"<span class="city"></span> </span>
		  <span class="date">
		Keiner wird in nur einem Monat zum Bodybuilder. Findet euch damit ab.
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form14&#39;].submit(); return false;">
 <form name="hidden_form14" method="POST" action="#">
 <input type="hidden" name="hidden" value="14"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="14">gefällt mir</span>
<span class="reply2" id="x14"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m15.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Torben Peters<span class="city"></span> </span>
		  <span class="date">
		 ich bin 15 und wollte wissen, ob es für mich ok ist, das produkt zu nehmen?
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form15&#39;].submit(); return false;">
 <form name="hidden_form15" method="POST" action="#">
 <input type="hidden" name="hidden" value="15"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="15">gefällt mir</span>
<span class="reply2" id="x15"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m16.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Kevin Pfister <span class="city"></span> </span>
		  <span class="date">
		Was passiert, wenn man das Mittel nicht mehr nimmt? Habe gehört, das man danach schnell richtig fett wird...
		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form16&#39;].submit(); return false;">
 <form name="hidden_form16" method="POST" action="#">
 <input type="hidden" name="hidden" value="16"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="16">gefällt mir</span>
<span class="reply2" id="x16"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m17.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Phänomen Michi <span class="city"></span> </span>
		  <span class="date">
		 Oh Mann, wenn du lange Zeit trainiert hast – ob mit oder ohne Supplements – und dann damit plötzlich aufhörst wirst du immer fett. Das liegt daran, dass sich der Körper an kalorienreiches Essen gewöhnt und du das eben im Studio abarbeiten musst. Wenn du mit dem Training aufhörst und noch immer so viele Kalorien zu dir nimmst, wirst du halt FETT. Ganz gegal ob du ein Ergänzungsmittel genommen hast oder nicht. Hör einfach nicht auf zu trainieren!		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form17&#39;].submit(); return false;">
 <form name="hidden_form17" method="POST" action="#">
 <input type="hidden" name="hidden" value="17"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="17">gefällt mir</span>
<span class="reply2" id="x17"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box_reply">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m16.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Keith Pfister <span class="city"></span> </span>
		  <span class="date">
	Ja, du hast ja Recht. Hat jemand <?= $step1_name ?> probiert und dann damit aufgehört?		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form18&#39;].submit(); return false;">
 <form name="hidden_form18" method="POST" action="#">
 <input type="hidden" name="hidden" value="18"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="18">gefällt mir</span>
<span class="reply2" id="x18"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m19.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">David Arberg<span class="city"></span> </span>
		  <span class="date">
		Das Zeug ist cool!		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form19&#39;].submit(); return false;">
 <form name="hidden_form19" method="POST" action="#">
 <input type="hidden" name="hidden" value="19"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="19">gefällt mir</span>
<span class="reply2" id="x19"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m20.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Arne Jung<span class="city"></span> </span>
		  <span class="date">
		 100% positives Feedback von mir! Der Verkäufer ist ok, die Lieferung ist schnell und alles ist genau wie beschrieben gelaufen. Jetzt warte ich auf meine umwerfenden Ergebnisse.		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form20&#39;].submit(); return false;">
 <form name="hidden_form20" method="POST" action="#">
 <input type="hidden" name="hidden" value="20"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="20">gefällt mir</span>
<span class="reply2" id="x20"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m21.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Daniel Kippling<span class="city"></span> </span>
		  <span class="date">
		 Jamand hat hier nach dem richtigen Alter gefragt. Miner Meinung nach ist es ok,wenn man mit 15 oder 16 Nahrungsmittelergänzungen nimmt. Ich habe mit 14 damit angefangen. Doch es hat einen Haken: Als Teenager wächst man noch stark, egal was man isst. So ist das nun mal. Du kannst das Produkt nehmen, doch du wirst auch ohne zulegen. Liegt also an dir…		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form21&#39;].submit(); return false;">
 <form name="hidden_form21" method="POST" action="#">
 <input type="hidden" name="hidden" value="21"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="21">gefällt mir</span>

<span class="reply2" id="x21"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m22.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Avvo Gado<span class="city"></span> </span>
		  <span class="date">
		Das Mittel ist gut und mir vollkommen egal ob ihr es mögt oder nicht. Ich habe vor zwei Wochen bestellt und es kam genau nach einem Tag, superschnell. Ic habe es genommen und obwohl ich nicht ins Studio gehe, sondern nur im Park trainiere (Joggen und mit eigenem Gewicht), merke ich schon den Effekt und baue Muskeln auf. Ich verliere auch Fett. Unglaublich!		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form22&#39;].submit(); return false;">
 <form name="hidden_form22" method="POST" action="#">
 <input type="hidden" name="hidden" value="22"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="22">gefällt mir</span>
<span class="reply2" id="x22"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->


	<div class="fb_box">
        <div class="comment_top_box">
          <div class="comment_img"><img src="<?= $assets ?>/index_files/m23.jpg" alt=""></div>
          <div class="comment_detail"><span class="name">Max Dehler<span class="city"></span> </span>
		  <span class="date">
		 Weiß jemand ob ich es vor dem Training mit meinem Milchshake trinken kann? Ich trinke meinen Aubaudrink immer vor dem Training, deshalb denke ich es ist OK. Doch was meint ihr?		  </span>
 <a href="#" onclick="document.forms[&#39;hidden_form23&#39;].submit(); return false;">
 <form name="hidden_form23" method="POST" action="#">
 <input type="hidden" name="hidden" value="23"></form>
 <span class="reply3">Antworten</span></a> · <span class="reply" id="23">gefällt mir</span>
<span class="reply2" id="x23"></span>
 · <span class="reply" style="color: gray;"><script>dtimes(-2); </script></span>
</div></div></div>
		 		<!-- //SINGLE COMMENT -->

			<!-- FACEBOOK SHOW USERS COMMENTS -->
				  				<!-- //FACEBOOK SHOW USERS COMMENTS -->




					<!-- FACEBOOK COMMENT FORM -->
				   <div class="fb_box_com" id="add_comment">
			     <div class="comment_img"><img src="<?= $assets ?>/index_files/fb_face.gif" alt="" align="left">
				   <form action="<?= $step1_link ?>" method="post">
				 <textarea name="author" class="message_box tipped" id="fb_textarea"> </textarea>
				 </form></div>
			 <input value="Kommentar" type="submit" class="submit_box">

			 <div id="comment_here"> 	</div>
			 </div>
				<!-- //FACEBOOK COMMENT FORM -->


        </div>

                  </div>
                  <div id="rightcontent">
           		    <div class="righttxt">
						<img src="<?= $assets ?>/index_files/mhcover.jpg" height="294" width="216"><br>
                                		<br>
<b> Stefan Brenner </b>stellte vor Kurzem einen aufkommenden Muskel-Trend auf die Orobe. Wir wollten selbst sehen, was es mit dieser Ernährung auf sich hat. Stefan hat vier Wochen mit dem Test von <?= $step1_name ?>, dem neuesten Supermuskelprodukt aus den USA verbracht. Die Ergebnisse waren überraschend. <br><br>


<b>
  Jetzt <a href="<?= $step1_link ?>" target="_blank" class="bs"><?= $step1_name ?></a> kaufen!<br><br>

Kostenloser Versand!<br><br>

Wegen des großen Interesses sind die Mengen begrenzt! Jetzt bestellen!<br><br> Nutzen Sie unseren exklusiven Link, um kostenlosen Versand zu erhalten! <br><br> Die Mengen sind begrenzt.<br> Endet am <br>
 <script>setTimeout("blinks(0);", 500);
function blinks(i) {
if (i%3 == 0)
document.getElementById('gg').color='black';
else
document.getElementById('gg').color='red';
i++;
setTimeout("blinks("+i+");", 500);

} </script>

<font id="gg" color="black"><script>dtime(-1);</script></font>

</b>
                      </div>
                                <div class="whitespacer"></div>







                    <div class="righttxt">

                                		<strong>Was andere darüber sagen</strong><br>
                                        <div class="watotherssay"><br>
                                        <img src="<?= $assets ?>/index_files/ivan.jpg" width="216">
                                        		<div class="fl"></div>
                                                <div class="user"></div>
<div class="clear"></div>
Alle meine Freunde haben mir ständig erzählt, wie erstaunlich Xtreme Gain ist. Ich hatte seit der Grundschule Gewichtsprobleme. Sie können sich nicht vorstellen, wie verzweifelt ich so toll aussehen wollte, wie meine Freunde es jeden Sommer taten. Letztendlich habe ich <?= $step1_name ?> ausprobiert und ich kann Ihnen sagen, dass ich NIE WIEDER etwas anderes zum Muskelaufbau nehmen werde. Dieses Mittel ist unglaublich! Ich habe jetzt zum ersten Mal einen Waschbrettbauch!<br>
                                    <br>

                                                <div class="username">~ <b>Tobias</b> Berlin</div>
                                        </div>
                                        <div class="watotherssay">
                                        		<div class="fl"></div><br><img src="<?= $assets ?>/index_files/kosio.jpg" width="216">
                                                <div class="user"></div>
<div class="clear"></div>
						Als Vater von drei Kinder versuche ich täglich die Arbeit, die Kinder und die anderen Anforderungen des Lebens miteinander zu vereinbaren. Ich habe zugenommen, seit wir eine Familie gegründet haben, da ich einfach keine Zeit mehr habe. Egal wie sehr ich es auch versuchte, es blieb nie genug Zeit für das Fitness-Studio. Ein Freund von mir hat mir <?= $step1_name ?> geschenkt. Ich konnte es kaum glauben, als die Pfunde purzelten und ich dafür richtige Muskeln aufgebaut habe! Dank Xtreme Gain, es hat mein Leben verändert!<br><br>

                                                <div class="username">~ <b>Carsten</b> Braunschweig</div>
                                        </div>
                          </div>
                  </div>
                  <div id="adspanel">
<img src="<?= $assets ?>/index_files/relatedvideos.jpg" alt="">


<p><strong>Workouts sind wichtig für Ihre Gesundheit und Ernährung</strong></p>

<iframe style="float:center; margin-top:10px;" class="iframeI" width="150" height="130" src="http://www.youtube.com/embed/hlcQQdYSJgY?showinfo=0&autoplay=0"></iframe>

<iframe style="float:center; margin-top:10px;" width="150" height="130" src="http://www.youtube.com/embed/e6J9682Bo7I?showinfo=0&autoplay=0" frameborder="1" allowfullscreen=""></iframe>

<br>
(Zum Abspielen auf das Video klicken)<p class="rightpadding">Sit-ups und Crunches sind unverzichtbar für Ihren Wunsch-Waschbrettbauch. Doch neben den Übungen brauchen Sie auch ein gutes Nahrungsergänzungsmittel <a href="<?= $step1_link ?>" target="_blank">Hier klicken </a> um eine der momentan bestenMarken für Muskel-Nahrungsergänzungsmittel auszuprobieren.</p>

<p><span class="videotxt"><span class="rightpadding">

<script type="text/javascript">
function getVote(int)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("poll").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","poll_vote.php?vote="+int,true);
xmlhttp.send();
}
</script>

</span></span></p><div id="poll" style="background-color:#fff;padding:3px; padding-bottom:10px; font-family:Arial, Helvetica, sans-serif; font-size:14px; width:170px;">
<img src="<?= $assets ?>/index_files/poll.jpg"><p></p>
<strong><p style="color:#000;margin-top:-5px;margin-left:15px; font-size:14px;">Welche Sportlerin ist die sexyste? </p></strong>
<form>

<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<span style="color:#000;font-size:14px; font-family:&#39;Times New Roman&#39;, Times, serif;">Lolo Jones</span>
<br>
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
<span style="color:#000;font-size:14px; font-family:&#39;Times New Roman&#39;, Times, serif;">Lindsey Vonn</span>


<br>
<input type="radio" name="vote" value="2" onclick="getVote(this.value)">
<span style="color:#000;font-size:14px; font-family:&#39;Times New Roman&#39;, Times, serif;">Maria Sharapova</span>

<br>
<input type="radio" name="vote" value="3" onclick="getVote(this.value)">
<span style="color:#000;font-size:14px; font-family:&#39;Times New Roman&#39;, Times, serif;">Yelena Isinbayeva</span>

<br>
<input type="radio" name="vote" value="4" onclick="getVote(this.value)">
<span style="color:#000;font-size:14px; font-family:&#39;Times New Roman&#39;, Times, serif;">Federica Pellegrini</span>

</form>
</div>
 <p></p>
                  </div>
                        <div class="clear"></div>
                </div>


        <div class="wrapper">

        		<div id="footer">
       		    <span class="headlinered"></span></div><div id="mainnav" align="center">
                       <a href="#" target="_blank">Fitness</a>
                                <a href="#" target="_blank">Sex &amp; Liebe</a>
                                <a href="#" target="_blank">Essen</a>
                                <a href="#" target="_blank">Nackt besser aussehen</a>
                                <a href="#" target="_blank">Gesichtsabnahme</a>
                                <a href="#" target="_blank">Karriere</a>
                                <a href="#" target="_blank">Aussehen &amp; Stil</a>
                        </div>

        </div>





</body></html>
