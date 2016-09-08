<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://www.opendatahacklab.org/sparql_suite/sparql_processor.js"></script>
	<script type="text/javascript" src="http://www.opendatahacklab.org/sparql_suite/event_sparql_processor.js"></script>
	<link rel="stylesheet" type="text/css" href="bastione.css">
	<title>Il Bastione degli Infetti - Eventi</title>
	<script>
 jQuery(document).ready(function($) {
 	$("#eventi").addClass('active');
 });
</script>	
</head>
<body>
		<div class="container">
			<?php  include("php/header.php");?>
			<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Prossimi Eventi</div>
				  <!-- List group -->
				  <ul id="next" class="list-group">
				  	<li id="loading1">Caricamento...</li>
				  </ul>
				</div>
	
			</div>
			<div class="container">
			<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Eventi Passati</div>
				  <!-- List group -->
				  <ul id="past" class="list-group">
				  	<li id="loading2">Caricamento...</li>
				  </ul>
				</div>
			</div>
<script type="text/javascript">

		var boolNext = false;
		var boolPast = false;
		var container = document.getElementById("events");

		var list_next_events = document.getElementById("next");
		var list_past_events = document.getElementById("past");
		var loading1 = document.getElementById("loading1");
		var loading2 = document.getElementById("loading2");

		function setAttributes(el, attrs) 
		{
  			for(var key in attrs) {
    			el.setAttribute(key, attrs[key]);
  			}
		}

		function insertDate(event, element)
		{
			var date = new Date(event.timeStart);
			var day = date.getDate();
			day = insertZero(day);
			var month = date.getMonth() + 1;
			month = insertZero(month);
			var stringDate = document.createTextNode(day + "/" + month + "/"
			+ date.getFullYear());
			element.appendChild(stringDate);
		}

		function insertTime(event, element)
		{
			var date = new Date(event.timeStart);
			var minutes = date.getMinutes();
			minutes = insertZero(minutes);
			var hours = date.getHours();
			hours  = insertZero(hours);
			var hour = document.createTextNode(hours + ":" + minutes);
			element.appendChild(hour);
		}

		function insertTitle(event, element)
		{
			var titleEvent = document.createTextNode(event.eventName);
			element.appendChild(titleEvent);
		}

		function insertToggle(event, element, toggle)
		{
			var a = document.createElement("a");
			a.href = "eventdetails.php?iri=" + encodeURIComponent(event.URI);
			toggle.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Loupe.svg/58px-Loupe.svg.png";
			a.appendChild(toggle);
			element.appendChild(a);
		}

		function removeLoading(parent, child, event)
		{
			if(child.parentNode !== false)
			{
				parent.removeChild(child);
			}

		}

		function insertZero(x) {

		if (x == "0" || x == "1" || x == "2" || x == "3" || x == "4"
					 || x == "5" || x == "6" || x == "7" || x == "8"
					|| x == "9") 
				{
					x = "0" + x;
				}
				return x;
			};

		var processEventNextFunction = function(event, isNext) 
		{
			if(!boolNext)
			{
				boolNext = true;
			}

			var li_event = document.createElement("li");
			var img_toogle = document.createElement("img");

			var div_row = document.createElement("div");
			var div_date = document.createElement("div");
			var div_time = document.createElement("div");
			var div_title = document.createElement("div");
			var div_details = document.createElement("div");

	//Setto le classi Bootstrap
			div_row.setAttribute('class', 'row');

			setAttributes(div_date, {"class" : "col-md-2 col-xs-2"});
			setAttributes(div_time, {"class" : "col-md-2 col-xs-2"});
			setAttributes(div_title, {"class" : "col-md-4 col-xs-4"});
			setAttributes(div_details, {"class": "col-md-2 col-md-push-2 col-xs-4"});


			
			div_row.appendChild(div_date);
			div_row.appendChild(div_time);
			div_row.appendChild(div_title);
			div_row.appendChild(div_details);

			li_event.setAttribute("class", "list-group-item");
			loading1.setAttribute("class", "list-group-item");
			loading2.setAttribute("class", "list-group-item");
			li_event.appendChild(div_row);

			insertDate(event, div_date);
			insertTime(event, div_time);
			insertTitle(event, div_title);
			insertToggle(event, div_details, img_toogle);

			list_next_events.appendChild(li_event);

		};


		var processEventPastFunction = function(event, isNext) 
		{

			if(!boolPast)
			{
				boolPast = true;
			}


			var li_event = document.createElement("li");
			var img_toogle = document.createElement("img");

			var div_row = document.createElement("div");
			var div_date = document.createElement("div");
			var div_time = document.createElement("div");
			var div_title = document.createElement("div");
			var div_details = document.createElement("div");

	//Setto le classi Bootstrap
			div_row.setAttribute('class', 'row');

			setAttributes(div_date, {"class" : "col-md-2 col-xs-2"});
			setAttributes(div_time, {"class" : "col-md-2 col-xs-2"});
			setAttributes(div_title, {"class" : "col-md-4 col-xs-4"});
			setAttributes(div_details, {"class": "col-md-2 col-md-push-2 col-xs-4"});


			
			div_row.appendChild(div_date);
			div_row.appendChild(div_time);
			div_row.appendChild(div_title);
			div_row.appendChild(div_details);

			li_event.setAttribute("class", "list-group-item");
			li_event.appendChild(div_row);

			insertDate(event, div_date);
			insertTime(event, div_time);
			insertTitle(event, div_title);
			insertToggle(event, div_details, img_toogle);

			list_past_events.appendChild(li_event);

		};



		

		function EventProcessor() 
		{

			this.processPast = function(event) 
			{
				processEventPastFunction(event, true);
			};
			this.processNext = function(event) 
			{
				processEventNextFunction(event, true);
			};
			this.processFuture = function(event) {
				
			};
			this.flush = function() 
			{
				if(!boolNext)
				{
					var string = "Non ci sono nuovi eventi";
					loading1.innerHTML = string;
				}
				else
				{
					removeLoading(list_next_events ,loading1);
				}

				if(!boolPast)
				{
					var string = "Non ci sono eventi passati";
					loading2.innerHTML = string;
				}
				else
				{
					removeLoading(list_past_events ,loading2);
				}
			};

		}

		var p = new EventQueryProcessor(new EventProcessor(), new Date());

		sparql_query("https://dydra.com/cristianolongo/agenda-bastione-degli-infetti-catania/sparql",p);
	</script>

</body>
</html>