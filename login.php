<?php
session_start();
$_SESSION["timeoutFlag"]=0;
include("functions.php");
if(isset($_SESSION["user_name"])) {
	if(isLoginSessionExpired()) {
	    $_SESSION["timeoutFlag"]=1;
		header("Location:logout.php?session_expired=1");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loginstyle.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script src="jquery-1.7.1.js"></script>
		<script src="jquery-1.7.1.intellisense.js"></script>
		<script type="text/javascript">
		     $(document).ready(function(){
			 
			          setInterval(function(){
					  
					$('#time').load('time.php');
						    $('#asp').load('asp.php');
							  $('#demo_time').load('timetry.php');
					  
					  },1000);
			 
			 });
			 
					
		</script>
  </head>
  <body>
  <div id="time">   </div>
  
  <h1 id="response"></h1>

   <!--	<div  id="timer" align="right">-->
	
	<div id="message" style="background-color: #FFFF00">
	
	    <?php 
		
		     if(isset($_GET['status'])){
			       $id= $_GET['status'];
			       $message=$_GET['msg'];
				   echo "<div id='$id'> $message</div>";
			 }
		
		?>
	
	</div>
	
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
	          <li><a href="http://localhost/miniproject/login.php">Login</a></li>
	          <li><a href="http://localhost/miniproject/statistics.php">Statistics</a></li>
	        </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
      </nav>
      
      <form action="logincheck.php" method="POST">
      <div class="container">
        <label for="textfield"><b>UID</b></label>
        <input type="text" placeholder="Enter UID(Aadhar Number)" name="name" id="textfield" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
		<input type="submit" name="submit" id="submit" value="Login" >
      </div>
      </form>
  </div>
  
    <div id="demo_time">

	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>


  </body>
</html>