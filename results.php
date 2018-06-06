<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Profiles</title>
    <!-- Bootstrap -->
	<link href="bootstrap.css" rel="stylesheet">
	<link href="profilestyle.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
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
	          <!--<li><a href="http://localhost/miniproject/login.php">Login</a></li>-->
	          <li><a href="http://localhost/miniproject/statistics.php">Statistics</a></li>
			   <li><a href="http://localhost/miniproject/logout.php">Logout</a></li>
	        </ul>
          </div>
	      <!-- /.navbar-collapse -->
        </div>
	    <!-- /.container-fluid -->
     
   <?php
   
   
 session_start();
 
 //$uname=$_SESSION['name'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "ovs";
// Create connection
$conn = new mysqli($servername, $username, $password, $db, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
//echo "Connected successfully";
} 
		

$sql1 = "SELECT `partys`,`counter` FROM status";

$results1 = $conn->query($sql1);
?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js">
          
        </script>	
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
    <form action="voted.php" method="POST">
    <div class="container" align="center">
    <p style="font-size:25px"><strong>Results of the Elections</strong></p>
    <table border="2" align="center" style="font-family:Cambria">
	  <thead align="center">
			<tr align="center">
			  <th>Party Name</th>
              <th>Total Votes</th>
			  
			</tr>
	
			
	  </thead><tbody>
	  
	  


<?php
if ( mysqli_num_rows( $results1 )==0 ) {
	echo '<tr><td colspan="4">No Rows Returned</td></tr>';
}
else {
    // output data of each row
    while($row = $results1->fetch_assoc()) {
        echo "<tr align=\"center\"><td>{$row['partys']}</td><td>{$row['counter']}";
    }
	
	
	
} 

?>


</tbody>
</table>
<br>
<p style="font-size:25px"><strong>WINNER OF ELECTION IS</strong></p>

<?php
$sql1 = "SELECT max(`counter`) as 'cnt' FROM status";

$results1 = $conn->query($sql1);
?>

<?php
if ( mysqli_num_rows( $results1 )==0 ) {
	echo '<tr><td colspan="4">No Rows Returned</td></tr>';
}
else {
    // output data of each row
    while($row = $results1->fetch_assoc()) {
        
		$mit = $row['cnt'];
		//echo $mit;
		
	}
?>
<?php		
$sql2 = "SELECT path FROM status where counter=$mit";
$result2 = $conn->query($sql2);
 while($row2 = $result2->fetch_assoc()) 
 {
   $si=$row2['path'];
   echo "<tr align=\"center\"><td><img src='".$row2['path']."' width=\"250\" height=\"200\" /></td>";
		
		
    }
	
	
	
} 

?>
</form>
</body>
</html>