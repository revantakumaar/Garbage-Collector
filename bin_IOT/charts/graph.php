<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(pie_chart);
    google.charts.setOnLoadCallback(column_chart);
    google.charts.setOnLoadCallback(bar_chart);
    google.charts.setOnLoadCallback(line_chart1);
	google.charts.setOnLoadCallback(line_chart2);
	google.charts.setOnLoadCallback(line_chart3);
	google.charts.setOnLoadCallback(line_chart4);
      
    function pie_chart() {
      var jsonData = $.ajax({
          url: "pie_chart.php",
          dataType: "json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
	 //alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
      chart.draw(data, {width: 800, height: 400});
    }

    function column_chart() {
		
		var jsonData = $.ajax({
			url: 'column_chart.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var data = new google.visualization.arrayToDataTable(jsonData);	
        			var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_values'));
					chart.draw(data);
					
				}	
			}).responseText;
  }
      function bar_chart() {
		
		var jsonData = $.ajax({
			url: 'column_chart.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var data = new google.visualization.arrayToDataTable(jsonData);	
        			var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));
					chart.draw(data);
					
				}	
			}).responseText;
  }
  function line_chart1() 
  {
	  	var jsonData = $.ajax({
			url: 'line_chart1.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var options = 
					{
						//legend: 'none',
						hAxis: { minValue: 0, title: 'level',
						titleTextStyle:{
										color: '#FF0000'
						}},

						vAxis: {
						  title: 'count'
						},
						curveType: 'function',
						pointSize: 7,
						dataOpacity: 0.3
					};
					var data = new google.visualization.arrayToDataTable(jsonData);	
					
        			 var chart = new google.visualization.LineChart(document.getElementById('line_chart1'));
                     chart.draw(data, options);	
				}	
			}).responseText;
	  
    }
	 function line_chart2() 
  {
	  	var jsonData = $.ajax({
			url: 'line_chart2.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var options = 
					{
						//legend: 'none',
						hAxis: { minValue: 0, title: 'level',
						titleTextStyle:{
										color: '#FF0000'
						}},

						vAxis: {
						  title: 'count'
						},
						curveType: 'function',
						pointSize: 7,
						dataOpacity: 0.3
					};
					var data = new google.visualization.arrayToDataTable(jsonData);	
					
        			 var chart = new google.visualization.LineChart(document.getElementById('line_chart2'));
                     chart.draw(data, options);	
				}	
			}).responseText;
	  
    }
	 function line_chart3() 
  {
	  	var jsonData = $.ajax({
			url: 'line_chart3.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var options = 
					{
						//legend: 'none',
						hAxis: { minValue: 0, title: 'level',
						titleTextStyle:{
										color: '#FF0000'
						}},

						vAxis: {
						  title: 'count'
						},
						curveType: 'function',
						pointSize: 7,
						dataOpacity: 0.3
					};
					var data = new google.visualization.arrayToDataTable(jsonData);	
					
        			 var chart = new google.visualization.LineChart(document.getElementById('line_chart3'));
                     chart.draw(data, options);	
				}	
			}).responseText;
	  
    }
	 function line_chart4() 
  {
	  	var jsonData = $.ajax({
			url: 'line_chart4.php',
    		dataType:"json",
    		async: false,
			success: function(jsonData)
				{
					var options = 
					{
						//legend: 'none',
						hAxis: { minValue: 0, title: 'level',
						titleTextStyle:{
										color: '#FF0000'
						}},

						vAxis: {
						  title: 'count'
						},
						curveType: 'function',
						pointSize: 7,
						dataOpacity: 0.3
					};
					var data = new google.visualization.arrayToDataTable(jsonData);	
					
        			 var chart = new google.visualization.LineChart(document.getElementById('line_chart4'));
                     chart.draw(data, options);	
				}	
			}).responseText;
	  
    }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
	<div style="font: 21px arial; padding: 10px 0 0 100px;">Pie Chart analysis on bins filled</div>
   <div id="piechart_div"></div>
	<div style="font: 21px arial; padding: 10px 0 0 100px; ">BIN 1</div>
	<div id="line_chart1" style="width: 900px; height: 300px;"></div>
	<div style="font: 21px arial; padding: 10px 0 0 100px;">BIN 2</div>
	<div id="line_chart2" style="width: 900px; height: 300px;"></div>
	<div style="font: 21px arial; padding: 10px 0 0 100px;">BIN 3</div>
	<div id="line_chart3" style="width: 900px; height: 300px;"></div>
	<div style="font: 21px arial; padding: 10px 0 0 100px;">BIN 4</div>
	<div id="line_chart4" style="width: 900px; height: 300px;"></div>
  </body>
</html>