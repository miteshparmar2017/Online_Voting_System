<?php
//include("counter.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/regstyle.css" rel="stylesheet" type="text/css">
	
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
	          <li><a href="http://localhost/miniproject/register.php">Register</a></li>
	          <li><a href="http://localhost/miniproject/login.php">Login</a></li>
	          <li><a href="http://localhost/miniproject/statistics.php">Statistics</a></li>
              </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
      <div class="container" id="w">
	  <article>
	    <h3>Instructions for Registration - </h3>
	    <ol>
	      <li>For the registration as a voter, you need an Aadhaar card.</li>
	      <li>If you are nominee candidate for voting, <b>Register as Candidate</b> .</li>
	      <li>If you are voter for voting, <b>Register as Voter</b> .</li>
	     <li>The Aadhaar ID or UID will be your unique ID for logging in and voting.</li>
	      <li>To proceed to the registration, click below.</li>
        </ol></article></div>
        <br>
        <div class="container" align="center">
	  		<a href="http://localhost/miniproject/voterreg.php">
	  			<button type="button" class="btn btn-lg btn-default">Register as Voter
        </div>
		</br>
		<div class="container" align="center">
	  		<a href="http://localhost/miniproject/candreg.php">
	  			<button type="button" class="btn btn-lg btn-default">Register as Candidate
        </div>
		</br>
		<div class="container" align="center">
	  		<a href="http://localhost/miniproject/listvoter.php">
	  			<button type="button" class="btn btn-lg btn-default">List of Voters
        </div>
        </br>
	
		<div class="container" align="center">
	  		<a href="http://localhost/miniproject/listcandidate.php">
	  			<button type="button" class="btn btn-lg btn-default">List of Candidates
        </div>
        </br>	
        
        </div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
  </body>
</html>