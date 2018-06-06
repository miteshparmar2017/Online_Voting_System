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
		

$sql2 = "SELECT `name`,`aadhar` FROM voter where flag1=0";


$result2 = $conn->query($sql2);

$sql3 = "SELECT count(`aadhar`) as cntaad FROM voter where flag1=0";


$result3 = $conn->query($sql3);


?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js">
          
        </script>	
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
    <form action="voted.php" method="POST">
    <div class="container" align="center">
    <p style="font-size:25px; color:red;"><strong>Here is the list of voters who have not voted </strong></p>
    <table border="2" align="center" style="font-family:Cambria">
	  <thead align="center">
			<tr align="center">
			  <th>Voter Name</th>
              <th>Aadhar Card No</th>
			  
			  
			</tr>
	  </thead><tbody>


<?php
if ( mysqli_num_rows( $result2 )==0 ) {
	echo '<tr><td colspan="4">Nod Rows Returned</td></tr>';
}
else {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        echo "<tr align=\"center\"><td>{$row['name']}</td><td>{$row['aadhar']}</td>";
    }
} 

if ( mysqli_num_rows( $result3 )==0 ) {
	echo '<tr><td colspan="4">Nod Rows Returned</td></tr>';
}
else {
    // output data of each row
    while($row = $result3->fetch_assoc()) {
        echo "<strong>Total Numbers of Votes : {$row['cntaad']}</strong>","</br>","</br>";
		
		
	}
}

?>
</tbody>
</table>
</form>
</body>
</html>