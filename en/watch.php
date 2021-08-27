<?php session_start();

include "../lang_detection.php";

$s = $_GET['s'];
$e = $_GET['e'];

$sql = "SELECT * FROM zymqacog_episodes WHERE s_nr = $s AND ep_nr = $e LIMIT 1";

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
	$url_en = $zeile['url_en'];
	$url_fr = $zeile['url_fr'];

    if($current_lang == "fr"){$opposite_lang = "en";}else{$opposite_lang = "fr";}
	if(${"title_"."$current_lang"} == ""){$title_ep = ${"title_"."$opposite_lang"};}else{$title_ep = ${"title_"."$current_lang"};}
	if(${"url_"."$current_lang"} == ""){$url_ep = ${"url_"."$opposite_lang"};}else{$url_ep = ${"url_"."$current_lang"};}
}
 
mysqli_free_result( $db_erg );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo$translation["$current_lang-title_watch_1"]; echo" $title_ep ";  echo$translation["$current_lang-title_watch_2"];?></title>
    <meta name="description" content="Watch your favorite TV show online, on Miraculous.TO!">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="/fr/assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body style="background: #f7f7f7;color: rgb(0,0,0);">

    <?php include "../menu.php"?>

    <div class="container" style="margin-top: 60px;max-width: 1140px;">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-family: MyriadProBold;"><?php echo$title_ep;?></h1><video width="100%" controls="" style="border-radius:10px" poster="<?php echo$thumbnail;?>">
                    <source src="<?php echo$url_ep;?>" type="video/mp4">
                </video>
				<a href="<?php echo$url_ep;?>"><button class="navbar-toggler"style="background: #2b9dff;width: 100%;"><h3 style="color: white;font-size: 22px;margin: 5px;margin-bottom: 7px;">DOWNLOAD EPISODE</h3></button></a>
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