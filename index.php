<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" 
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">";
		
	if (!empty($_GET['url'])){
		$form = $_GET;
		
		require_once 'pagerank.php';
		$pr = getpagerank($form['url']);
		
		if ($pr===0 || !empty($pr)){
			$form['pr'] = $pr;
		}else{
			$form['pr'] = 'nežinomas';
			$form['message'] = 'Klaida gaunant PR reikšmę. Patikrinkite adresą.';
		}
		
		$form = array_merge(array('pr' => 'nežinomas'), $form);
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Koks yra mano svetainės puslapio Google PageRank (PR)?</title>
	<meta name="description" content="Koks mano Google PageRank? Sužinok!"/>
	<meta name="keywords" content="PR, PageRank, Google PageRank, Google PR, mano pagerank, mano PR, koks mano pagerank, koks mano PR, svetainės PageRank, svetainės PR, puslapio Pagerank, puslapio PR"/>
	<link rel="stylesheet" href="style.css" type="text/css"/> 
</head>
<body>
	<div id="site_wrapper">
        <h1>Koks yra mano svetainės Google PageRank?</h1>
        <hr/>
        <p>Užpildykite žemiau esančią formą, spauskite mygtuką "PR" ir į Jūsų klausimą bus atsakyta!</p>
        <form name="pr-form" method="get" action="">
        http://<input type="text" name="url" value="<?php if (!empty($form['url'])){ echo $form['url'];}?>"></input>
        <input type="submit" value="PR"/>
        </form>
        <br />
        <?php
        if (!empty($form['message'])){
            echo "<div class=\"message\">{$form['message']}</div>";
        }
        if (!empty($form['url'])){
            echo "<div class=\"site\">Svetainės <strong>{$form['url']}</strong> Google PageRank yra: <strong>{$form['pr']}</strong></div>";
        }
        
        ?>
        <h2>Kas yra Google PageRank?</h2>
        <p><strong>Google PageRank</strong> (sutrumpintai <strong>PR</strong>) yra Google paieškos sistemos duodamas įvertinimas www svetainių puslapiams pagal jų populiarumą intervale nuo 0 iki 10. Algoritmas (-ai) pagal kurį Google paieškos robotai įvertina svetainės <strong>PR</strong> reikšmę nėra viešai atskleidžiamas, be to jis yra nuolat atnaujinamas ir tobulinamas.</p>
        <p><strong>Google PaGerank</strong> svetainėms ir puslapiams yra reguliariai atnaujinamas, tačiau <strong>PR</strong> reikšmė viešai paskelbiama tik kas kelis mėnesius (2-3).</p>
        <p>Geriausias žinomas būdas didinti savo svetainės <strong>PR</strong> yra gauti nuorodų (backlinks) iš kitų svetainių. Nuorodos iš svetainių su didesniu <strong>PR</strong> yra žymiai naudingesnės.</p>
        <p><strong>Google PageRank</strong> yra svarbus svetainėms dėl dviejų pagrindinių priežasčių: </p>
            <ol>
                <li>Pirmiausia, Google paieškos rezultatuose didesnį <strong>PR</strong> turinčios svetainės atsiduria aukštesnėse pozicijose.</li>
                <li>Be to, priklausomai nuo <strong>PR</strong> reikšmės Google sistema nustato, kokiu dažnumu paieškos robotai apsilankys svetainėje, arba puslapyje. Kuo <strong>PR</strong> didesnis, tuo dažniau galima tikėtis robotų apsilankymo ir tuo pačiu Google sistemoje saugomos informacijos apie svetainę atnaujinimo.</li>
            </ol>
        
        
        <hr/>
        <div class="footer">
			<div class="left">
				<div>
					&copy;&nbsp;2009&nbsp;<a href="http://www.kran.lt" title="kran">kran.lt</a> &nbsp;|&nbsp; <a href="http://pr.kran.lt/">Koks yra mano svetainės Google PageRank?</a> v. 0.1
				</div>
        
				<div class="links">
					<a href="http://www.bajeriukai.lt" title="Lietuviškas humoras">Bajeriukai</a>
					&nbsp;|&nbsp;
					<a href="http://ip.kran.lt" title="Išorinio IP adreso tikrinimas">IP tikrinimas</a>
				</div>
			</div>
		
			<div class="right">
				<script language="javascript" type="text/javascript">
				<!--
				var _hey_lt_w = "", _hey_lt_h = "", _hey_lt_c = "";
				//-->
				</script>
				<script language="javascript1.2" type="text/javascript">
				<!--
				_hey_lt_w = screen.width; _hey_lt_h = screen.height; _hey_lt_c = navigator.appName.indexOf("Microsoft") >= 0 ? screen.colorDepth : screen.pixelDepth;
				//-->
				</script>
				<script language="javascript" type="text/javascript">
				<!--
				document.write("<a target='_blank' href='http://www.hey.lt/details.php?id=prkran'><img width=88 height=31 border=0 src='//www.hey.lt/count.php?id=prkran&width=" + _hey_lt_w + "&height=" + _hey_lt_h + "&color=" + _hey_lt_c + "&referer=" + escape(document.referrer) + "' alt='Hey.lt - Nemokamas lankytojų skaitliukas'><\/a>");
				//-->
				</script>
				<noscript>
				<a target="_blank" href="http://www.hey.lt/details.php?id=prkran"><img width=88 height=31 border=0 src="//www.hey.lt/count.php?id=prkran" alt="Hey.lt - Nemokamas lankytojų skaitliukas"></a>
				</noscript>
			</div>
		</div>
	</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-9009122-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>