<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="refresh" content="15" >
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
	
</head>
<style>
.navbar-nav > li > a, .navbar-brand {
    padding-top:20px !important; padding-bottom:0 !important;
    height: 40px;
}


.panel-body{
float:middle;}

	.navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
	#img{float:center; margin-left:15%; margin-top:7%;}
	body {
  background-color: #F5F5F5;
}


@heading-bg-color: #FFFFFF;
@heading-text-color: #00000;
.panel-theme {
  background-color: @heading-bg-color;
  border: none;
  box-shadow: 1px 2px 6px rgba(0, 0, 0, .2);
  
  & > .panel-heading {
    background-color: @heading-bg-color;
    border: none;
        
    .badge {
      color: @heading-bg-color;
      background-color: @heading-text-color;
    }
    
    .panel-title {
      font-weight: bold;
    }
  }
  
  & > .panel-footer {
    background-color: @heading-bg-color;
    border: none;
    border-top: 1px solid #E0E0E0;
    + .panel-collapse > .panel-body {
      border-bottom: none;
    }
  }
}
@media only screen and (max-width: 960px) {
  .col-xs-12 {
    display: flex;
    flex-direction: column-reverse;
  }
}

thead{background-color:#2c3e50; color:white;}

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

    

    <!-- Page Content -->
	<br/>
<div class="container">  
  <div class="row">
    
<div class="col-md-6">
      <div class="panel panel-theme">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3 class="panel-title"><center>GARBAGE BIN</center></h4>
        </div>
        <div class="panel-body">
        <!-- Table -->
		<div class="table-responsive"> 
        <table class="table table-bordered">
          <thead>
            <tr>
                <th><center>bin_id</center></th>
				<th><center>bin_status</center></th>
				<th><center>bin_level</center></th>
				<th><center>bin_location</center></th>
               
            </tr>
        </thead>
		       <tbody>
   <?php

for ($row = 0; $row < $n; $row++) {
echo '<tr style="background-color:#D3D3D3;">';
  for ($col = 0; $col < 4; $col++) {
  
  echo "<td ><center>".$bin[$row][$col]."</center></td>";
 
  }
echo '</tr>';
}
?>
</tbody>
          
        </table>
      </div>
      </div>
    </div>
    
  </div>
    
        <div class="col-md-6" >
      <div class="panel panel-theme"  >
        <!-- Default panel contents -->
       <div class="panel-heading" >
          <h3 class="panel-title"><center>GARBAGE COLLECTOR</center></h4>
        </div>
        <div class="panel-body" >
        <!-- Table -->
		<div class="table-responsive"> 
        <table class="table table-bordered">
           <thead>
            <tr>
                <th><center>bot_id</center></th>
				<th><center>bot_status</center></th>
				<th><center>bot_level</center></th>
				<th><center>bot_location</center></th>
               
            </tr>
        </thead>
		       <tbody>
   <?php

for ($row2 = 0; $row2 < $i; $row2++) {
echo '<tr style="background-color:#D3D3D3;">';
  for ($col2 = 0; $col2 < 4; $col2++) {
  
  echo "<td><center>".$bot[$row2][$col2]."</center></td>";
 
  }
echo '</tr>';
}
mysqli_close($connection);
	?>
</tbody>
          
        </table>
      </div>
      </div>
    </div>
    
  </div>
      
</div>

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
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
