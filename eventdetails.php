<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bastione degli Infetti - Eventi</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web"
	rel="stylesheet">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
	src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="bastione.css">
		<title>bastione degli infetti - events</title>

		<script type="text/javascript" src="http://opendatahacklab.org/sparql_suite/sparql_processor.js"></script>
		<script type="text/javascript" src="http://opendatahacklab.org/sparql_suite/event_sparql_processor.js"></script>


	</head>
<body>
	<div class="container">
	<?php  include("php/header.php");?>
		<p><a href="eventi.php">Vedi l'elenco completo degli eventi</a></p>
		<div id="container">
		    <div id class="panel panel-default">
		    	<div id="maintitle" class="panel-heading" style="background-color: #ae1f24; color: white;"><p class="loading" id="loading">Loading ...</p>
		   		</div>
				<div id = "eventDescription" class="panel-body"></div>
		  	</div>
		</div>
	</div>
	    
		<script type="text/javascript">
	
			//the function responsible to print event information
			var processEventFunction = function(event){
	
			//replace titles 
				var titleLower=event.eventName.toLowerCase();
				var mainTitle = document.getElementById("maintitle");
				var container = document.getElementById("container");
				var eventDescrPanel = document.getElementById("eventDescription");
				var hr = document.createElement("hr");
				mainTitle.appendChild(document.createTextNode(titleLower));
			
	
				mainTitle.removeChild(document.getElementById("loading"));
	
				var time = document.createElement("p");
				var timeStart = new Date(event.timeStart);
				time.className="eventtime";
				time.appendChild(document.createTextNode(timeStart.toLocaleDateString()+" - "+timeStart.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})));
				eventDescrPanel.appendChild(time);
				eventDescrPanel.appendChild(hr);

				/*var address = document.createElement("p");
				address.className="eventaddress";
				address.appendChild(document.createTextNode(event.address));
				container.appendChild(address);	*/
	
				if(event.description != null){
					var description = document.createElement("p");
					description.className="eventdescription";
					description.appendChild(document.createTextNode(event.description));
					eventDescrPanel.appendChild(description);
				}
	
					
			};

//retrieve the eventIRI from parameters
			var eventIRI = location.search.split('?iri=')[1];

			if (eventIRI==null)
				window.alert("No event IRI provided.");
			else{
				var eventIRIdecoded=decodeURIComponent(eventIRI);
				var p = new SingleEventQueryProcessor(eventIRIdecoded, processEventFunction, function(event){
				window.alert("No such event!"+eventIRIdecoded);
				});

				sparql_query("https://dydra.com/cristianolongo/agenda-bastione-degli-infetti-catania/sparql", p);
			}
	</script>


</body>
</html>