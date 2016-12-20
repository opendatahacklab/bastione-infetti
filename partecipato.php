<?php
	$subj="Democrazia partecipata: Azione n°1";
	$body="Catania, [data]\n".
		"Egr. Sig. Sindaco del Comune di Catania\n".
		"\nOggetto: Democrazia partecipata - Risposta all'avviso pubblico del".
		"17 dicembre c.a. – ISTANZA ex art. 43 dello Statuto della Città di".
		"Catania e art. 5 del Regolamento sugli Istituti di partecipazione e consultazione dei cittadini.\n".
		"\nIo sottoscritto/a [nome e cognome], nato/a a [luogo di nascita], il [data di nascita] espone quanto segue:".
		"ai fini della destinazione dei fondi di cui all’art. 6, comma 1 della L. R. n° 5/2014 ".
		"(come modificata dal comma 2 dell’art. 6 della L. R. 9/2015),".
		"si esprime come preferenza quella inerente l'azione:\n".
		"\n    1. Riqualificazione Bastione degli Infetti - Torre del Vescovo.\n".
		"\nDistinti saluti.\n".
		"[nome e cognome]\n";
	$mail='mailto:democrazia.partecipata@comune.catania.it?subject='.rawurlencode($subj)."&body=".rawurlencode($body);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bastione degli Infetti - Bilancio Partecipativo</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	      		<a class="navbar-brand" href="index.php"><h1 style="margin:0px;">Il Bastione degli Infetti</h1></a>
	    	</div>
				<ul class="nav navbar-nav">
					<li><a href="eventi.html">Eventi</a></li>
					<li><a href="corsoantico.html" >Comitato</a></li>
					<li><a href="storia.html">Storia</a></li>
					<li>
						<a href="credits.html">Riconoscimenti</a>
					</li>
					<li><a href="corsoantico.html#contatti">
						<img src="./img/contacts.png"
							class="extLink" />
					</a></li>
					<li><a href="index.php#data" title="open data"><img
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

		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2>Bilancio Partecipativo</h2>
				<blockquote cite="https://it.wikipedia.org/wiki/Bilancio_partecipativo">
				Il Bilancio Partecipativo o partecipato &egrave; una forma di partecipazione 
				diretta dei cittadini alla vita politica della propria citt&agrave;, 
				consistente nell'assegnare una quota di bilancio dell'Ente locale alla 
				gestione diretta dei cittadini, che vengono cos&igrave; messi in grado di 
				interagire e dialogare con le scelte delle Amministrazioni per modificarle 
				a proprio beneficio.
				</blockquote>
				<p class="citsource">Fonte <a href="https://it.wikipedia.org/wiki/Bilancio_partecipativo">Wikipedia</a></p>
				
				<p class="full">Il bilancio partecipativo in Sicilia &egrave; regolato dalla Legge Regionale numero 5
				del 2014 articolo 6 comma 1, come modificata dal comma 2 dell'articolo 6 della Legge Regionale numero 9 del 2015, 
				specificando che la quota del 2% delle somme trasferite dalla 
				Regione Siciliana all'Ente dovr&agrave; essere spesa con forme di <em>democrazia 
				partecipata utilizzando strumenti che coinvolgono la cittadinanza per la scelta di azioni di 
				interesse comune</em>.</p>  
				
				<p class="full">Il 17 Dicembre 2016 il Comune di Catania ha emanato un 
				<a href="http://www.comune.catania.it/informazioni/avvisi/avvisi-2016/default.aspx?news=55759">avviso di 
				partecipazione per la scelta di azioni di interesse comune</a> relativo appunto al
				bilancio partecipativo. <em>Riqualificazione Bastione degli Infetti</em>
				&egrave; una delle azioni che i cittadini del comune possono indicare inviando
				una e-mail a <a href="<?php echo $mail;?>">democrazia.partecipata@comune.catania.it</a>.
				</p>
				<p><em>ATTENZIONE:</em> nel modulo sottostante che vi viene fornito sostituire i valori
				indicati tra parentesi quadre con i vostri dati personali.</p>
								
				<p class="button"><a class="button" style="color:#eed2d3;" href="<?php echo $mail;?>">INVIA MAIL PER IL BASTIONE</a></p>
				
				<p>Si ringraziano la piattaforma web di <em href="http://www.cataniasource.it/">Catania Source</em> e <em>Mirko Viola</em> per il supporto nella realizzazione del modulo.</p>
			</div>
		</div>				
	</div>
</body>
</html>