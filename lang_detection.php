<?php
error_reporting(0);
ini_set('display_errors', 0);


$db_link = mysqli_connect ("witch-endlessmission.lima-db.de:3306","USER380615","C!7!SyzLyZh62Ra","db_380615_1");
mysqli_set_charset( $db_link, 'utf8');

$folder = getcwd();
$current_lang = substr($folder, strrpos($folder, '/') + 1);

include "../lang.php";
$direct_link = '"//chooxaur.com/4/4154888"';
$direct_link_code = "target='_blank' onclick='setTimeout(function(){window.location.replace($direct_link);}, 500);'";


//Detect Browser Language
function getPreferredLanguage(){
 
	$acceptedLanguages = @explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
	$preferredLanguage = null;
	$maxWeight = 0.0;
 
	foreach((array)$acceptedLanguages as $acceptedLanguage){
 
		$weight = (float)@substr(explode(';', $acceptedLanguage)[1], 2);
		if(!$weight){$weight = 1.0;}
 
		if($weight > $maxWeight){
			$preferredLanguage =  substr($acceptedLanguage, 0, 2);
			$maxWeight = $weight;
		}
	}
 
	return $preferredLanguage;
}
$language = getPreferredLanguage();
if($language=="fr"){$language_re = "fr";}else{$language_re = "en";}


//FIRST USER EXPERIENCE
if($_COOKIE["mode_check"] == "yes")
{
  $mode = $_GET['m'];
  if($mode=="s")
  {
	  setcookie("safe", "yes", time()+600, "/");
	  setcookie("mode_check", "yes","9919797499", "/");
	  $mode_safe = "yes";
  }	
}
else
{
  setcookie("safe", "yes", time()+600, "/");
  setcookie("mode_check", "yes","9919797499", "/");
  $mode_safe = "yes";
}
?>