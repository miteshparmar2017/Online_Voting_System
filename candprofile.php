<?php session_start();
 header("Refresh:60");
   if(isset($_SESSION['loggedin'])){
          $duration=$_SESSION['loggedin']['duration'];   
          $start=$_SESSION['loggedin']['start'];
		  
		  if((time()-$start)>$duration){
		  
		       unset($_SESSION['loggedin']['duration']);
			   unset($_SESSION['loggedin']['start']);
			   unset($_SESSION['loggedin']['name']);
			   unset($_SESSION['loggedin']);
			   header("location: login.php?status=error&msg=Session has been expired");
		  }
		  else{
		  
		      $_SESSION['loggedin']['start']= time();
		      echo "<h2>Welcome to the Candidate profile page:". $_SESSION['loggedin']['name']."</h2>";
		  
		  }
   }
   else{
   
      header("location: login.php?status=error&msg=No Session Found.Please login.");
   
   }
?>
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
		<style>
		
		.votebtn{
		    
			 position: absolute;
             top: 100%;
             left:90%;
             transform : translateX(-50%) translateY(-50%);
             text-align: inherit ;
             background: #FFFF00;
             border: 1px solid #999;
             padding: 5px;
            box-shadow: 0 0 5px 3px #ccc;
			width:200px;
			height:60px;
		    }
		
		</style>
		<script src="jquery-1.7.1.js"></script>
		<script src="jquery-1.7.1.intellisense.js"></script>
		<script>
		     $(document).ready(function(){
			 
			          setInterval(function(){
					  
					$('#time').load('time.php');
				  $('#demo_time').load('timetry.php');
					  
					  },1000);
			 
			 });
	    	
		
		</script>
		
<?php 

header("Refresh:60");
//header("Cache-Control:no-cache");
 if($_SESSION['vote_time']=="true") {
              
             header("Location:E_over.php");
			 //exit;
			 //echo $_SESSION['vote_time'];		
		}
		//echo $_SESSION['vote_time'];
 
?>       
  </head>
  
  
  <body>
 
  <div id="time"></div>
  <div id="demo_time"></div>
      <?php
 

	
 $uname=$_SESSION['name'];
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
		$sql4 = "SELECT flag1 FROM voter WHERE aadhar='$uname'";
		$result4 = $conn->query($sql4);
		if ($result4->num_rows > 0) 
		{
		while($row = $result4->fetch_assoc()) 
		{
				$fval=$row["flag1"];
				if($fval==1)
				{
					echo "<script type=\"text/javascript\">";
					echo "alert(\"You have already voted...\");";
					echo "location=\"index.php\";";
					echo "</script>";
				}
		}
		}
		
		$sql41 = "SELECT flag1 FROM candidate WHERE aadhar='$uname'";
		$result41 = $conn->query($sql41);
		if ($result41->num_rows > 0) 
		{
		while($row = $result41->fetch_assoc()) 
		{
				$fval25=$row["flag1"];
				if($fval25==1)
				{
					echo "<script type=\"text/javascript\">";
					echo "alert(\"You have already voted...\");";
					echo "location=\"index.php\";";
					echo "</script>";
				}
		}
		}

		

$sqlo = "SELECT `srno`,`name`,`party`,`path` FROM candidate order by `srno`";
$result = $conn->query($sqlo);
?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js">
          
        </script>	
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="js/bootstrap.js"></script>
    <form action="voted.php" method="POST">
    <div class="container" align="center">
    <p style="font-size:25px"><strong>Candidate List for election</strong></p>
    <table border="2" align="center" style="font-family:Cambria">
	  <thead align="center">
			<tr align="center">
			  <th>Sr.No</th>
			  <th>Candidate Name</th>
              <th>Candidate Party</th>
			  <th>Party Symbol</th>
			  <th>Vote</th>
			</tr>
	  </thead><tbody>


<?php
if ( mysqli_num_rows( $result )==0 ) {
	echo '<tr><td colspan="4">No Rows Returned</td></tr>';
}
else {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr align=\"center\"><td>{$row['srno']}</td><td>{$row['name']}</td><td>{$row['party']}</td><td><img src='".$row['path']."' width=\"200\" height=\"150\" /></td><td><input type=\"radio\" name=\"voting\" value='".$row['party']."'</td>\n";
    }
} 

?>
</tbody>
</table>
<input  class="votebtn" type="submit" Value="Vote">
</form>
</body>
</html>