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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Justifiable 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130801

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adimin Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800|Open+Sans+Condensed:300,700" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />



<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
		<script src="jquery-1.7.1.js"></script>
		<script src="jquery-1.7.1.intellisense.js"></script>
		<script>
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
<div id="logo" class="container">
	<h1><span class="icon icon-lock icon-size"></span><a href="#">Admin<span>Page</span></a></h1>
	<p> <a href="http://templated.co" rel="nofollow">Government Of India</a></p>
	<div id="time" align="left" style="border:#FF6600"></div>
	</div>
	
</div>

<div id="wrapper" class="container">
	<div id="menu" class="container">
		<ul>
			<li class="current_page_item"><a href="index.php" accesskey="1" title="">Home</a></li>
			<!--<li><a href="#" accesskey="1" title="">Home</a></li>-->
			<li><a href="results.php" accesskey="2" title=""> Current Election Result</a></li>
			<li><a href="about.php" accesskey="3" title="">About Us</a></li>
			<li><a href="logout.php" accesskey="4" title="">Logout</a></li>
		</ul>
	</div>
	<div id="three-column" class="container">
		<!--<div><span class="arrow-down"></span></div>-->
		<div id="tbox1"> <span class="icon " style="background-image: url(images/images3.png)"></span>
			<div class="title">
			<h2>Voter Registration</h2> 
			</div>
			<a href="voterreg.php" class="button" >Add new</a> </div>	


		<div id="tbox2"> <span class="icon" style="background-image: url(images/img.png)"></span>
			<div class="title">
				<h2>Candidate Registration</h2>
			</div>	
	  <a href="candreg.php" class="button">Create</a> </div>
	

		<div id="tbox3"> <span class="icon" style="background-image: url(images/crowd.png)"></span>
			<div class="title">
				<h2>Candidates Appeared</h2>
			</div>
	  <a href="listcandidate.php" class="button">Display List</a> </div>
	</div>
	
	
		<div id="three-column" class="container">
		
		<div id="tbox1"> <span class="icon " style="background-image: url(images/download.png)"></span>
			<div class="title">
			<h2>Existing Users</h2> 
			</div>
			<a href="listvoter.php" class="button" >Display List</a> </div>	


		<div id="tbox2"> <span class="icon " style="background-image: url(images/Tick.png)"></span>
			<div class="title">
			<h2>Users Voted</h2>
			</div>	
			<a href="totalvoted.php" class="button">Display List</a> </div>
	

		<div id="tbox3"> <span class="icon" style="background-image: url(images/cross.png)"></span>
			<div class="title">
				<h2>Users not Voted</h2>
			</div>
	  <a href="notvoted.php" class="button">Display List</a> </div>
	</div>
	
	
	<div id="page">
		<div><span class="arrow-down"></span></div>
				
		<div id="box2">
		<div id="demo_time"></div>
		</div>
		
			
		<div id="box1">
	<form action="AccessTime2.php" method="post" autocomplete="on">	 
   <table>
   <tbody>
  <tr><td>Year <input   id="yr"    name="yr"   type="text"/></td>
   <td>Month<input  id="mon"   name="mon"  type="text"/></td>
  <td>Date <input  id="dt"    name="dt"   type="text"/></td>
  <td> Hours <input  id="hr"    name="hr"   type="text"/></td>
  <td>Minutes <input  id="mins"  name="mins" type="text"/></td></tr>
  <tr><td> <input  class="info" id="sub"   name="sub"  type="submit"  style="background:#FF0066 " value="Start Timer"/></td></tr>
  </tbody>
  </table>
   </form>

		</div>
		
	</div>
</div>
<div id="copyright">
	<p>&copy; Untitled. All rights reserved. </p>
</div>

</body>
</html>
