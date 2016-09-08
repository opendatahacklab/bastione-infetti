<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bastione degli Infetti</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web"rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bastione.css">
<script>
 jQuery(document).ready(function($) {
 	$("#index").addClass('active');
 });
</script>	
</head>
<body>
	<div class="container">
	<?php  include("php/header.php");?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6"
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
							avvistata nei pressi della scogliera dellâ€™Armisi, ma per fortuna,
							un forte vento allontan&ograve; le navi. Sollecitati dal pericolo
							occorso, il 30 novembre 1553 i catanesi misero mano alla
							costruzione di mura e bastioni a maggiore difesa della
							citt&agrave;.</p>
					</div>
				</div>
				<div class="col-md-1" id="separatore"></div>
				<div class="col-sm-6" style="padding: 0px;" id="bottone">
					<div class="container" id="vote">
						<p>
							Il Bastione degli Infetti partecipa al concorso <a
								href="http://iluoghidelcuore.it/" target="_blank">I Luoghi
								del Cuore</a>
						</p>

						<p class="button">
							<a class="button" href="http://iluoghidelcuore.it/luoghi/86006"
								target="_blank">Votalo!</a>
						</p>
					</div>
				</div>
			</div>
			<?php  include("php/load_next_event.php");?>

		</div>

		<div class="row" style="margin-top: 2em;">
			<div class="col-md-12">
				<iframe width="100%" height="350" frameborder="0" scrolling="no"
					marginheight="0" marginwidth="0"
					src="http://www.openstreetmap.org/export/embed.html?bbox=15.077335238456724%2C37.505695941797846%2C15.08144438266754%2C37.50805348165004&amp;layer=mapnik&amp;marker=37.50687472103061%2C15.079389810562134"
					style="border: 1px solid black"></iframe>
				<br />
				<small><a href="http://www.openstreetmap.org/way/42035803"
					target="_blank">Visualizza mappa ingrandita</a></small>
			</div>
		</div>
	</div>
</body>
</html>