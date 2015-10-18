<?php
	// This is a simple example on how to draw a chart using FusionCharts and PHP.
	// We have included includes/fusioncharts.php, which contains functions
	// to help us easily embed the charts.
	include("includes/fusioncharts.php");
	// Create the chart - Column 2D Chart with data given in constructor parameter 
	// Syntax for the constructor - 
	new FusionCharts("type of chart", 
			"unique chart id", 
			"width of chart", 
			"height of chart", 
			"div id to render the chart", 
			"type of data", 
			"actual data")
	$columnChart = new FusionCharts(
			"column2d", 
			"ex1" , 
			"600", 
			"400", 
			"chart-1", 
			"json", 
			'{  
			   "chart":
			   {  
				  "caption":"October 2015",
				  "subCaption":"Joann Thompson: Blood levels",
				  "numberPrefix":"$",
				  "theme":"ocean"
			   },
			   "data":
			   [  
				  {  
					 "label":"Iron",
					 "value":"880000"
				  },
				  {  
					 "label":"Vitamin D",
					 "value":"20"
				  },
				  {  
					 "label":"Los Angeles Topanga",
					 "value":"590000"
				  },
				  {  
					 "label":"Glucose",
					 "value":"105"
				  },
				  {  
					 "label":"Daly City Serramonte",
					 "value":"330000"
				  }
			   ]
		}');
	// Render the chart
	$columnChart->render();
?>
