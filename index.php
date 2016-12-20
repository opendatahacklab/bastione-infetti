<?php
/**
 * store on a file access.log date and time of accessing this code.
 */
define('CSV_TIME_FORMAT',"Y\tm\td\tH\ti\ts\n");
$handle = fopen("access.log", "a");
fwrite($handle, date(CSV_TIME_FORMAT));
fflush($handle);
fclose($handle);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bastione degli Infetti</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web"
	rel="stylesheet">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bastione.css">
</head>
<body>

	<div class="container">
		<header>
			<img id="muro" src="img/header.png" alt="foto del muro del bastione" />
		</header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><h1>Il Bastione degli
							Infetti</h1></a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="eventi.html">Eventi</a></li>
					<li><a href="corsoantico.html">Comitato</a></li>
					<li><a href="storia.html">Storia</a></li>
					<li>
						<a href="credits.html">Riconoscimenti</a>
					</li>
					<li><a href="corsoantico.html#contatti">
						<img src="./img/contacts.png"
							class="extLink" />
					</a></li>
					<li><a href="#data" title="open data"><img
							src="img/rdf.png" class="extLink" alt="Open Data" /></a></li>
					<li><a
						href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/rssfeed.php"
						type="application/atom+xml" title="aggiornamenti sugli eventi"><img
							src="img/rss-feed-icon-gray.png" class="extLink"
							alt="Aggiornamenti sugli eventi" /></a></li>
					<li><a
						href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/calendar.php"
						type="text/calendar" title="calendario eventi"><img
							src="img/Calendar-gray.png" class="extLink"
							alt="Calendario eventi" /></a></li>
					<li><a
						href="https://github.com/opendatahacklab/bastione-infetti.git"><img
							class="extLink" target="_blank" src="./img/github_icon_gray.png" alt="GitHub"></a></li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">		
					<?php  include("php/load_next_event.php");?>		
			<div class="row">
				<div class="col-sm-6">
					style="padding: 0px; font-size: 1.2em; padding-right: 2%;"
					id="storia">
					<div class="container" id="paragrafo">
						<p>Siamo intorno al 1550, quando tutto il Mediterraneo era
							oggetto di attacchi dei pirati saraceni, i quali, partendo dal
							nord Africa, facevano rapide ed improvvise incursioni lungo le
							coste siciliane per depredare le citt&agrave;, rapire donne e
							uomini da vendere come schiavi nei loro mercati.</p>

						<p>Catania scamp&ograve; ad un grave pericolo nella primavera
							del 1551, quando la flotta del pirata saraceno Dragut fu
							avvistata nei pressi della scogliera dell’Armisi, ma per fortuna,
							un forte vento allontan&ograve; le navi. Sollecitati dal pericolo
							occorso, il 30 novembre 1553 i catanesi misero mano alla
							costruzione di mura e bastioni a maggiore difesa della
							citt&agrave;.</p>
						<p><a href="storia.html">Vedi la storia del Bastione degli Infetti</a></p>
					</div>
				</div>
				<div class="col-md-1" id="separatore"></div>
				<div class="col-sm-6" style="padding: 0px;" id="bottone">
					<div class="container" id="vote">
						<p>
							Il Bastione degli Infetti &egrave; tra le azioni del
							<a href="http://www.comune.catania.it/informazioni/avvisi/avvisi-2016/default.aspx?news=55759">bilancio partecipato</a>.
						</p>

						<p class="button">
							<a class="button" href="partecipato.php"
								style="color:#eed2d3">Votalo!</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 2em;">
			<div class="col-md-12">
				<iframe width="100%" height="350" frameborder="0" scrolling="no"
					marginheight="0" marginwidth="0"
					src="http://www.openstreetmap.org/export/embed.html?bbox=15.077335238456724%2C37.505695941797846%2C15.08144438266754%2C37.50805348165004&amp;layer=mapnik&amp;marker=37.50687472103061%2C15.079389810562134"
					style="border: 3px solid #ae1f24"></iframe>
				<br />
				<small><a href="http://www.openstreetmap.org/way/42035803"
					target="_blank">Visualizza mappa ingrandita</a></small>
			</div>
		</div>
	<h2 id="data">Open Data</h2>
	<p>I dati relativi agli <a href="eventi.html">eventi</a> che si tengono 
	al bastione sono rilasciati come <a href="http://opendefinition.org/">open
	data</a> con licenza <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>,
	ossia possono essere scaricati e riutilizzati in qualsiasi modo e a qualsiasi fine con
	l'unica limitazione di dover citare questa pagina come fonte.
	<p>Sono accessibili nelle seguenti modalit&agrave;:</p>
	<ol class="iconlist">
		<li><img src="./img/rdf.png" /> <a href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/ontology.php" type="application/rdf+xml">ontologia OWL in RDF/XML</a></li>
		<li><img src="./img/rdf.png" /> <a href="https://dydra.com/cristianolongo/agenda-bastione-degli-infetti-catania/sparql">SPARQL endpoint</a>,</li>
		<li><img src="./img/Calendar-gray.svg" /><a href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/calendar.php">Internet Calendar</a>,</li>
		<li><img src="./img/rss-feed-icon-gray.png" /> <a href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/rssfeed.php">Feed RSS Atom</a>.</li>
	</ol>			
	</div>
</body>
</html>
