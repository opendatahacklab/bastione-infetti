<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bastione degli Infetti - Open Data</title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bastione.css">
</head>
<body>

	<div class="container">

	<?php  include("php/header.php");?>
		
		<p>I dati relativi agli <a href="eventi.html">eventi</a> che si tengono 
		al bastione sono rilasciati come <a href="http://opendefinition.org/">open
		data</a> con licenza <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>,
		ossia possono essere scaricati e riutilizzati in qualsiasi modo e a qualsiasi fine con
		l'unica limitazione di dover citare questa pagina come fonte.
		<p>Sono accessibili nelle seguenti modalit&agrave;:</p>
		<ul>
			<li><a href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/agenda.owl" type="application/rdf+xml">ontologia OWL in RDF/XML</a></li>
			<li><a href="https://dydra.com/cristianolongo/agenda-bastione-degli-infetti-catania/sparql">SPARQL endpoint</a>,</li>
			<li><a href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/agenda.ics">Internet Calendar</a>,</li>
			<li><a href="http://www.opendatahacklab.org/free-agenda/bastione-degli-infetti-catania/agenda.atom">Feed RSS Atom</a>.</li>
		</ul>		
	</div>
</body>
</html>