<?php
//require('C:\xampp\htdocs\miniproject\counter.php');
//$d=$_POST['distance'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Voting System</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<style type="text/css">
    </style>
	<link href="css/homestyle.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
	<div class="container-fluid" id="wrap">
	  <nav class="navbar navbar-default">
	    <div class="container">
	      <!-- Brand and toggle get grouped for better mobile display -->
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	        <a class="navbar-brand" href="http://localhost/miniproject/index.php">Online Voting System</a></div>
	      <!-- Collect the nav links, forms, and other content for toggling -->
	      <div class="collapse navbar-collapse" id="defaultNavbar1">
<ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/miniproject/about.php">About</a></li>
	          <!--<li><a href="http://localhost/miniproject/register.php">Register</a></li> -->
	          <li><a href="http://localhost/miniproject/login.php">Login</a></li>
	          <li><a href="http://localhost/miniproject/statistics.php">Statistics</a></li>
			  
	        </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
	  <div id="carousel1" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel1" data-slide-to="1"></li>
        </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active"><a href="http://localhost/miniproject/login.php"><img src="images/register now.jpg" alt="First slide image" class="center-block imgfill"></a>          </div>
	      <div class="item"><a href="http://localhost/miniproject/statistics.php"><img src="images/ChoosingWisely-CMYK-taglineR.jpg" alt="Second slide image" class="center-block imgfill"></a>          </div>
        </div>
	    <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
	  <article id="art">
	    <h1>Welcome to Online Voting System</h1>
	    <p>OVS is an online voting system, developed just for your convinience!</p>
	    <p>The system aims at simplicity of the voting process! </p>
	  </article>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/miniproject/polls.php"><img src="images/election.jpg" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Current &amp; Upcoming Elections</h3>
                <p>Check out this page to find out which are up and coming elections for you!</p>
			</div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/miniproject/statistics.php"><img src="images/results.jpg" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Analyze through past statistics</h3>
                <p>Check out the statistics of past elections held so far!</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/miniproject/login.php"><img src="images/log.jpg" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Have you logged in yet?</h3>
                <p>Proceed for the login page while the elections are still open!</p>			
              </div>
            </div>
          </div>   
          <div class="col-md-3">
            <div class="thumbnail"><a href="http://localhost/miniproject/about.php"><img src="images/about1.png" alt="Thumbnail Image 1" class="imgfill"></a>
              <div class="caption">
                <h3>Know more about our website</h3>
                <p>View this page for knowing about us and website</p>
              </div>
            </div>
          </div>
        </div>
      </div>     
	  </br>
	  </br>
	  <footer>&copy; Copyright 2018</footer>
    </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>