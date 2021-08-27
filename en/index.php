<?php session_start();

include "../lang_detection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo$translation["$current_lang-title"];?></title>
    <meta name="description" content="Watch your favorite TV show online, on Miraculous.TO!">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="/fr/assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background: #f7f7f7;color: rgb(0,0,0);">

    <?php include "../menu.php"?>

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-family: MyriadProBold;font-size: 40px;"><?php echo$translation["$current_lang-latest_episodes"];?><br></h1>
				
<?php
$sql = "SELECT * FROM zymqacog_episodes ORDER BY add_time DESC LIMIT 2";

$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
	$s_nr = $zeile['s_nr'];
	$ep_nr = $zeile['ep_nr'];
	$thumbnail = $zeile['thumbnail'];
	$title_en = $zeile['title_en'];
	$title_fr = $zeile['title_fr'];

    if($current_lang == "fr"){$opposite_lang = "en";}else{$opposite_lang = "fr";}
	if(${"title_"."$current_lang"} == ""){$title_ep = ${"title_"."$opposite_lang"};}else{$title_ep = ${"title_"."$current_lang"};}

	echo "
				<a href='watch?s=$s_nr&e=$ep_nr'>
                    <div data-bss-hover-animate='pulse' style='position: relative;text-align: center;color: white;margin-bottom: 15px;'>
                        <h1 class='ep_card_title'>$title_ep</h1><img style='background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),url($thumbnail) center/cover;!important' class='ep_card_img'/>
                    </div>
                </a>";
}
 
mysqli_free_result( $db_erg );
?>

            </div>
            <div class="col-md-6">
                <h1 style="font-family: MyriadProBold;font-size: 40px;"><?php echo$translation["$current_lang-livestream"];?><br></h1><style>
.twitch .twitch-video {
  padding-top: 56.25%;
  position: relative;
  height: 0;
}

.twitch .twitch-video iframe {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
}
</style>

<div class="twitch" style="background-color: black;">
  <div class="twitch-video">
    <iframe
      src="https://player.twitch.tv/?channel=MiraculousTO&parent=miraculous.to&parent=www.miraculous.to&autoplay=true"
      frameborder="0"
      scrolling="no"
      allowfullscreen="true"
      height="100%"
      width="100%">
    </iframe>
  </div>
            </div>
        </div>
    </div>
	
    <div class="container" style="margin-top: 20px; padding: 0;">
        <div class="row">
            <div class="col" style="padding: 0;">
                <div>
                    <ul class="nav nav-tabs" role="tablist" id="fullepisodes">
					    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-0"><?php echo$translation["$current_lang-season"];?> 2</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-1"><?php echo$translation["$current_lang-season"];?> 3</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-2"><?php echo$translation["$current_lang-season"];?> 4</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3"><?php echo$translation["$current_lang-specials"];?></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" role="tabpanel" id="tab-0">
<div class="wrapper">
<div class='cards_wrap'>
  
<?php
$sql = "SELECT * FROM zymqacog_episodes WHERE s_nr LIKE '2' ORDER BY ep_nr ASC";

$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
	$s_nr = $zeile['s_nr'];
	$ep_nr = $zeile['ep_nr'];
	$thumbnail = $zeile['thumbnail'];
	$title_en = $zeile['title_en'];
	$title_fr = $zeile['title_fr'];

    if($current_lang == "fr"){$opposite_lang = "en";}else{$opposite_lang = "fr";}
	if(${"title_"."$current_lang"} == ""){$title_ep = ${"title_"."$opposite_lang"};}else{$title_ep = ${"title_"."$current_lang"};}

	echo "

    <div class='card_item'>
      <a href='watch?s=$s_nr&e=$ep_nr'><div data-bss-hover-animate='pulse' class='card_inner'>
        <div class='card_top'>
          <img class='cards_img' src='$thumbnail' alt='car' />
        </div>
        <div class='card_bottom'>
          <div class='card_category'>
            $title_ep 
          </div>
        </div>
      </div></a>
    </div>";
}
 
mysqli_free_result( $db_erg );
?>
</div>
</div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-1">
<div class="wrapper">
<div class='cards_wrap'>
  
<?php
$sql = "SELECT * FROM zymqacog_episodes WHERE s_nr LIKE '3' ORDER BY ep_nr ASC";

$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
	$s_nr = $zeile['s_nr'];
	$ep_nr = $zeile['ep_nr'];
	$thumbnail = $zeile['thumbnail'];
	$title_en = $zeile['title_en'];
	$title_fr = $zeile['title_fr'];

    if($current_lang == "fr"){$opposite_lang = "en";}else{$opposite_lang = "fr";}
	if(${"title_"."$current_lang"} == ""){$title_ep = ${"title_"."$opposite_lang"};}else{$title_ep = ${"title_"."$current_lang"};}

	echo "

    <div class='card_item'>
      <a href='watch?s=$s_nr&e=$ep_nr'><div data-bss-hover-animate='pulse' class='card_inner'>
        <div class='card_top'>
          <img class='cards_img' src='$thumbnail' alt='car' />
        </div>
        <div class='card_bottom'>
          <div class='card_category'>
            $title_ep 
          </div>
        </div>
      </div></a>
    </div>";
}
 
mysqli_free_result( $db_erg );
?>
</div>
</div>
                        </div>
                        <div class="tab-pane active" role="tabpanel" id="tab-2">
<div class="wrapper">
<div class='cards_wrap'>
  
<?php
$sql = "SELECT * FROM zymqacog_episodes WHERE s_nr LIKE '4' ORDER BY ep_nr ASC";

$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
	$s_nr = $zeile['s_nr'];
	$ep_nr = $zeile['ep_nr'];
	$thumbnail = $zeile['thumbnail'];
	$title_en = $zeile['title_en'];
	$title_fr = $zeile['title_fr'];

    if($current_lang == "fr"){$opposite_lang = "en";}else{$opposite_lang = "fr";}
	if(${"title_"."$current_lang"} == ""){$title_ep = ${"title_"."$opposite_lang"};}else{$title_ep = ${"title_"."$current_lang"};}

	echo "

    <div class='card_item'>
      <a href='watch?s=$s_nr&e=$ep_nr'><div data-bss-hover-animate='pulse' class='card_inner'>
        <div class='card_top'>
          <img class='cards_img' src='$thumbnail' alt='car' />
        </div>
        <div class='card_bottom'>
          <div class='card_category'>
            $title_ep 
          </div>
        </div>
      </div></a>
    </div>";
}
 
mysqli_free_result( $db_erg );
?>
</div>
</div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
<div class="wrapper">
<div class='cards_wrap'>
  
<?php
$sql = "SELECT * FROM zymqacog_episodes WHERE s_nr LIKE '0' ORDER BY ep_nr ASC";

$db_erg = mysqli_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}
while ($zeile = mysqli_fetch_array( $db_erg, MYSQLI_ASSOC))
{
	$s_nr = $zeile['s_nr'];
	$ep_nr = $zeile['ep_nr'];
	$thumbnail = $zeile['thumbnail'];
	$title_en = $zeile['title_en'];
	$title_fr = $zeile['title_fr'];

    if($current_lang == "fr"){$opposite_lang = "en";}else{$opposite_lang = "fr";}
	if(${"title_"."$current_lang"} == ""){$title_ep = ${"title_"."$opposite_lang"};}else{$title_ep = ${"title_"."$current_lang"};}

	echo "

    <div class='card_item'> 
      <a href='watch?s=$s_nr&e=$ep_nr'><div data-bss-hover-animate='pulse' class='card_inner'>
        <div class='card_top'>
          <img class='cards_img' src='$thumbnail' alt='car' />
        </div>
        <div class='card_bottom'>
          <div class='card_category'>
            $title_ep 
          </div>
        </div>
      </div></a>
    </div>";
}
 
mysqli_free_result( $db_erg );
?>
</div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>
    <script src="/fr/assets/js/script.min.js"></script>
	<?php if($_COOKIE["safe"]=="yes" OR $mode_safe == "yes"){}else
	    {
		echo"<script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://iclickcdn.com/tag.min.js',4077934,document.body||document.documentElement)</script>";
		}
	?>
</body>

</html>