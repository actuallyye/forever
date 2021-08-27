    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="box-shadow: 0px 0px 15px rgba(0,0,0,0.30196078431372547);">
        <div class="container"><a class="navbar-brand" href="./"><img src="https://miraculousladybug.bss.design/assets/img/Miraculous_logo1.png" height="50px"/></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1" style="background: #ff2b2b;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(0,0,0);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="font-family: MyriadProBold;"><a class="nav-link" href="./#fullepisodes" style="font-family: MyriadProBold;"><?php echo$translation["$current_lang-full_episodes"];?></a></li>
                    <li class="nav-item" style="font-family: MyriadProBold;"><a class="nav-link" href="https://discord.gg/FAj5aDDQSz" style="font-family: MyriadProBold;" target="_blank"><?php echo$translation["$current_lang-discord"];?></a></li>
					<li class="nav-item" style="font-family: MyriadProBold;"><a class="nav-link" href="https://bunnystream.net/shows" style="font-family: MyriadProBold;" target="_blank"><?php echo$translation["$current_lang-instagram"];?></a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JLG966S1L8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JLG966S1L8');
</script>
<style>
.ep_card_title{text-transform: uppercase;}
</style>
<?php
    //Geoblock INSIDE FR
	$fake_id = rand(100000000,999999999);
	if($current_lang == "en" && $_SERVER["HTTP_CF_IPCOUNTRY"] == "FR"){$url_ep = "https://vk.com/doc-132316795_$fake_id";}else{}
	//Geoblock OUTSIDE FR
	$fake_id = rand(100000000,999999999);
	if($current_lang == "fr" && $language != "fr"){$url_ep = "https://vk.com/doc-132316795_$fake_id";}else{}
?>