<?php
$voteval=$_POST['voting'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "ovs";
session_start();
$uname=$_SESSION['name'];
//echo $uname;
// Create connection
$conn = new mysqli($servername, $username, $password, $db, 3306);
if($voteval=='BJP')
{
		$sql = "UPDATE status SET counter=counter+1 WHERE partys='BJP'";
		if ($conn->query($sql) === TRUE) 
		{
			
		} 
		else 
		{
			//echo "Error updating record: " . $conn->error;
		}
}
if($voteval=='Congress')
{
		$sql = "UPDATE status SET counter=counter+1 WHERE partys='Congress'";
		if ($conn->query($sql) === TRUE) 
		{
			//echo "Record updated successfully";
		} 
		else 
		{
			//echo "Error updating record: " . $conn->error;
		}
}

if($voteval=='ShivSena')
{
		$sql = "UPDATE status SET counter=counter+1 WHERE partys='ShivSena'";
		if ($conn->query($sql) === TRUE) 
		{
			//echo "Record updated successfully";
		} 
		else 
		{
			//echo "Error updating record: " . $conn->error;
		}
}

if($voteval=='AAP')
{
		$sql = "UPDATE status SET counter=counter+1 WHERE partys='AAP'";
		if ($conn->query($sql) === TRUE) 
		{
			//echo "Record updated successfully";
		} 
		else 
		{
			//echo "Error updating record: " . $conn->error;
		}
}

if($voteval=='NCP')
{
		$sql = "UPDATE status SET counter=counter+1 WHERE partys='NCP'";
		if ($conn->query($sql) === TRUE) 
		{
			//echo "Record updated successfully";
		} 
		else 
		{
			//echo "Error updating record: " . $conn->error;
		}
}

if($voteval=='Others')
{
		$sql = "UPDATE status SET counter=counter+1 WHERE partys='Others'";
		if ($conn->query($sql) === TRUE) 
		{
			//echo "Record updated successfully";
		} 
		else 
		{
			//echo "Error updating record: " . $conn->error;
		}
}
$sql1 = "UPDATE  voter SET flag1=flag1+1 WHERE aadhar=$uname";
if ($conn->query($sql1) === TRUE) 
		{
			//echo "Record updated successfully1111111111111";
		} 
		else 
		{
			//echo "Error updating record: 1111111111111111" . $conn->error;
		}
		
		$sql14 = "UPDATE  candidate SET flag1=flag1+1 WHERE aadhar=$uname";
if ($conn->query($sql14) === TRUE) 
		{
			//echo "Record updated successfully1111111111111";
		} 
		else 
		{
			//echo "Error updating record: 1111111111111111" . $conn->error;
		}
?>

<?php
echo "<script type=\"text/javascript\">";
		echo "alert(\"Thank you for your valuable vote.....\");";
		echo "location=\"index.php\";";
		echo "</script>";


?>