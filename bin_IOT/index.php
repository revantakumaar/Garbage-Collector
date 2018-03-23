
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
@media only screen and (max-width: 960px) {
  .col-xs-12 {
    display: flex;
    flex-direction: column-reverse;
  }
}
.progress-bar-vertical {
  width: 90px;
  min-height: 180px;
  margin-right: 20px;
  float: left;
  display: -webkit-box;  /* OLD - iOS 6-, Safari 3.1-6, BB7 */
  display: -ms-flexbox;  /* TWEENER - IE 10 */
  display: -webkit-flex; /* NEW - Safari 6.1+. iOS 7.1+, BB10 */
  display: flex;         /* NEW, Spec - Firefox, Chrome, Opera */
  align-items: flex-end;
  -webkit-align-items: flex-end; /* Safari 7.0+ */
  margin-left:32%;
  border-bottom-right-radius: 25px;
  border-bottom-left-radius: 25px;
}
.panel-body{
float:middle;}
.progress-bar-vertical .progress-bar {
  width: 100%;
  height: 10;
  -webkit-transition: height 0.6s ease;
  -o-transition: height 0.6s ease;
  transition: height 0.6s ease;
}
.vertical {
  box-shadow: inset 0px 4px 6px #ccc;
}
.progress-bar {
  box-shadow: inset 0px 4px 6px rgba(100,100,100,0.6);
}

				.jumbotron {
      margin-bottom: 0;
    }
	.navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
	#img{float:center; margin-left:15%; margin-top:7%;}
</style>

<body style="background-color:lightgray;">
<?php 
	include 'xtra.php';
	?>
<!--<div class="jumbotron " style=" background-color:#2c3e50;">
  <div class="container hidden-md hidden-sm hidden-xs text-center">
    <img src="gayatri.png" width="100" height="100" style="float:left; margin-left:1%; margin-top:1%;visibility:show" class="hidden-md hidden-sm hidden-xs">
      <div class="container">
        <a class="navbar-brand  js-scroll-trigger" href="#page-top" style="font-size:2em; color:white;">IOT-AUTONOMOUS GARBAGE / PACKAGE CARRIER SYSTEM<br><p style="float:left; margin-left:50%; color:yellow; font-size:12px;">--TATA CONSULTANCY SERVICES REMOTE INTERNSHIP PROJECT</p></a>
		
		<img src="logoo.jpg" width="100" height="100" class="hidden-md hidden-sm hidden-xs">      
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
*--**                    <span class="sr-only">Toggle navigation</span>
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
    <div class="container">

        <!-- Row1 -->
               <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
						<p>Bin Id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $bin[0][0];?></p>
						<p>Bin Status&emsp;&emsp;&emsp;&emsp;&emsp;<i style=" color:<?php echo color($bin[0][1]);?>"><b><?php echo status($bin[0][1]);?></b></i></p>
						<p>Bin Level&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<?php echo $bin[0][2];?></p>
						<p>Bin Location&emsp;&emsp;&emsp;&emsp;<?php echo $bin[0][3];?></p>
                    </div>
                    <div class="panel-body" style="height: 190px;">
						<img src="roboo.png" id="img" width="135" height="135" style="display: <?php if($bin[0][3]==$bot[0][3]){ echo 'show';}else{ echo 'none';};?>">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <br><h4>&emsp;&emsp;Bin <?php echo $bin[0][0];?>&emsp;&emsp;</a><br><br>
                    </div>
                    <div class="panel-body"> 
							<div class="progress progress-bar-vertical">
							  <div class="progress-bar  progress-bar-<?php echo level($value[0][2]);?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height:  <?php echo $value[0][2] ?>%;">
								<span><?php echo $value[0][2];?>%</span>
							  </div>
							</div>
								
                    </div>
                </div>
            </div>
		
                        <div class="col-md-3 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
						<p>Bin Id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $bin[1][0];?></p>
						<p>Bin Status&emsp;&emsp;&emsp;&emsp;&emsp;<i style=" color:<?php echo color($bin[1][1]);?>"><b><?php echo status($bin[1][1]);?></b></i></p>
						<p>Bin Level&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<?php echo $bin[1][2];?></p>
						<p>Bin Location&emsp;&emsp;&emsp;&emsp;<?php echo $bin[1][3];?></p>
                    </div>
                    <div class="panel-body" style="height: 190px;">
						<img src="roboo.png" id="img" id="img" width="135" height="135" style="display: <?php if($bin[1][3]==$bot[0][3]){ echo 'show';}else{ echo 'none';};?>">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <br><h4>&emsp;&emsp;Bin <?php echo $bin[1][0];?>&emsp;&emsp;</a><br><br>
                    </div>
                    <div class="panel-body"> 
							<div class="progress progress-bar-vertical">
							  <div class="progress-bar  progress-bar-<?php echo level($value[1][2]);?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height:  <?php echo $value[1][2] ?>%;">
								<span><?php echo $value[1][2];?>%</span>
							  </div>
							</div>
								
                    </div>
                </div>
            </div>
        </div>

	        <!-- ROW2 -->
               <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
						<p>Bin Id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $bin[2][0];?></p>
						<p>Bin Status&emsp;&emsp;&emsp;&emsp;&emsp;<i style=" color:<?php echo color($bin[2][1]);?>"><b><?php echo status($bin[2][1]);?></b></i></p>
						<p>Bin Level&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<?php echo $bin[2][2];?></p>
						<p>Bin Location&emsp;&emsp;&emsp;&emsp;<?php echo $bin[2][3];?></p>
                    </div>
                    <div class="panel-body" style="height: 190px;">
						<img src="roboo.png" id="img" width="135" height="135" style="display: <?php if($bin[2][3]==$bot[0][3]){ echo 'show';}else{ echo 'none';};?>">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <br><h4>&emsp;&emsp;Bin <?php echo $bin[2][0];?>&emsp;&emsp;</a><br><br>
                    </div>
                    <div class="panel-body"> 
							<div class="progress progress-bar-vertical">
							  <div class="progress-bar  progress-bar-<?php echo level($value[2][2]);?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height:  <?php echo $value[2][2] ?>%;">
								<span><?php echo $value[2][2];?>%</span>
							  </div>
							</div>
								
                    </div>
                </div>
            </div>
		
                        <div class="col-md-3 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
						<p>Bin Id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $bin[3][0];?></p>
						<p>Bin Status&emsp;&emsp;&emsp;&emsp;&emsp;<i style=" color:<?php echo color($bin[3][1]);?>"><b><?php echo status($bin[3][1]);?></b></i></p>
						<p>Bin Level&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;<?php echo $bin[3][2];?></p>
						<p>Bin Location&emsp;&emsp;&emsp;&emsp;<?php echo $bin[3][3];?></p>
                    </div>
                    <div class="panel-body" style="height: 190px;">
						<img src="roboo.png" id="img" width="135" height="135" style="display: <?php if($bin[3][3]==$bot[0][3]){ echo 'show';}else{ echo 'none';};?>">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <br><h4>&emsp;&emsp;Bin <?php echo $bin[3][0];?>&emsp;&emsp;</a><br><br>
                    </div>
                    <div class="panel-body" > 
							<div class="progress progress-bar-vertical">
							  <div class="progress-bar  progress-bar-<?php echo level($value[3][2]);?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height:  <?php echo $value[3][2] ?>%;">
								<span><?php echo $value[3][2];?>%</span>
							  </div>
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
                   <p> IOT-AUTONOMOUS GARBAGE / PACKAGE COLLECTION SYSTEM</p>
                </div>
				
                <div class="col-md-4">
				
                    <a class="btn btn-lg btn-default btn-block" href="table.php">Tabular View</a>
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
