<?php
session_start();
//$uname=$_SESSION['name'];
unset($_SESSION["user_name"]);
$url = "index.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
	echo"$url";
}
header("Location:$url");



  if(isset($_SESSION['loggedin'])){
          $duration=$_SESSION['loggedin']['duration'];   
          $start=$_SESSION['loggedin']['start'];
		  
		  if((time()-$start)>$duration){
		  
		       unset($_SESSION['loggedin']['duration']);
			   unset($_SESSION['loggedin']['start']);
			   unset($_SESSION['loggedin']['name']);
			   unset($_SESSION['loggedin']);
			   header("location: login.php?status=success&msg=logged out seccessfully");
		  }
		  }
		  
		  
?>