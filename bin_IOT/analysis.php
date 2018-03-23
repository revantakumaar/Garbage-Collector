<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Status View</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
          url: "charts/pie_chart.php",
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
			url: 'charts/column_chart.php',
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
			url: 'charts/column_chart.php',
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
			url: 'charts/line_chart1.php',
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
			url: 'charts/line_chart2.php',
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
			url: 'charts/line_chart3.php',
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
			url: 'charts/line_chart4.php',
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
<style>
.navbar-nav > li > a, .navbar-brand {
    padding-top:20px !important; padding-bottom:0 !important;
    height: 40px;
}



</style>

<body>
<?php 
	include 'xtra.php';
	?>
<!-- <div class="jumbotron" style=" background-color:#2c3e50;">
  <div class="container hidden-md hidden-sm hidden-xs text-center">
    <img src="gayatri.png" width="100" height="100" style="float:left; margin-left:1%; margin-top:%;visibility:show">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-size:2em; color:white;">IOT-AUTONOMOUS GARBAGE / PACKAGE CARRIER SYSTEM<br><p style="float:left; margin-left:50%; color:yellow; font-size:12px;">--TATA CONSULTANCY SERVICES REMOTE INTERNSHIP PROJECT</p></a>
		
		<img src="logoo.jpg" width="100" height="100">      
      </div>
  </div>
</div>-->
<br><br>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-sm hidden-xs" href="index.php" style="color:white;">IOT-AUTONOMOUS GARBAGE / PACKAGE CARRIER SYSTEM</a>
				<a class="navbar-brand hidden-md hidden-lg" href="index.php" style="color:white;">MENU</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
					<li>
                        <a href="analysis.php">Analysis</a>
                    </li>
                    <li>
                        <a href="table.php">Tabular View</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    
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


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                   <h5> IOT-AUTONOMOUS GARBAGE / PACKAGE COLLECTION SYSTEM</h5>
                </div>
				
                <div class="col-md-4">
				
                    <a class="btn btn-lg btn-default btn-block" href="index.php">Home Page</a>
                </div>
            </div>
        </div>


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p><center>A. REVANTA KUMAAR & K. VISHNU PRIYA</center></p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    

</body>

</html>
