<?php
require_once( "sparqllib.php" );

//Mi collego al database e in caso di errore esco.
$db = sparql_connect( "https://dydra.com/cristianolongo/agenda-bastione-degli-infetti-catania/sparql" );

if( !$db ) {
	print $db->errno() . ": " . $db->error(). "\n";
	exit;
}

$minDate=date('Y-m-d\TH:i:s\Z');

$db->ns( "event","http://purl.org/NET/c4dm/event.owl#" );
$db->ns( "locn","http://www.w3.org/ns/locn#" );
$db->ns( "time","http://www.w3.org/2006/time#" );
$db->ns( "dcterms","http://purl.org/dc/terms/" );
$db->ns( "foaf","http://xmlns.com/foaf/0.1/" );
$db->ns( "locn","http://www.w3.org/ns/locn#");
$db->ns( "wsg84","http://www.w3.org/2003/01/geo/wgs84_pos#");
$db->ns( "rdfs","http://www.w3.org/2000/01/rdf-schema#");
$db->ns( "sioc","http://rdfs.org/sioc/ns#");
$db->ns( "dc","http://purl.org/dc/elements/1.1/");
$db->ns( "xsd","http://www.w3.org/2001/XMLSchema#");
//Imposto ed eseguo la query per estrarre tutti gli eventi, in caso di errore esco
$query = "SELECT DISTINCT ?item ?itemlabel ?timeStart ?address WHERE {
  ?item locn:location ?site .
	?item rdfs:label ?itemlabel .
	?item event:time ?t .
	?t time:hasBeginning ?hasB .
	?hasB time:inXSDDateTime ?timeStart .
	?site locn:address ?a .
	?a locn:fullAddress ?address .
	FILTER (xsd:dateTime(?timeStart) >'".$minDate."'^^xsd:dateTime)
} ORDER BY ASC(?timeStart) ?item LIMIT 1";

$result = $db->query( $query );
if( !$result ) {
	print $db->errno() . ": " . $db->error(). "\n";
	exit;
}

while( $row = $result->fetch_array()) {
	$date= substr($row['timeStart'],0,10);
	$newDate = date("d/m/Y", strtotime($date));
	$time= substr($row['timeStart'],11,5);

	echo('<div class="panel panel-default">				 
				  <div class="panel-heading panel-heading-center">Prossimo Evento</div>
				  <ul id="next" class="list-group">
				  	<li class="list-group-item">
					  	<div class="row">
					  		<div class="col-xs-2">'.$newDate.'</div>
					  		<div class="col-xs-2">'.$time.'</div>
					  		<div class="col-xs-4">'.$row['itemlabel'].'</div>
					  		<div class="col-md-push-2 col-xs-4">
					  			<a href="eventdetails.php?iri='.rawurlencode ($row['item']).'">
					  				<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Loupe.svg/58px-Loupe.svg.png">
					  			</a>
					  		</div>
					  	</div>
				</div>');


}

