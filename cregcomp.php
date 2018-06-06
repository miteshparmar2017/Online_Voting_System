<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "ovs";
// Create connection
$conn = new mysqli($servername, $username, $password, $db, 3306);
//require("connect.php");
$name=$_POST['fullname'];
$addr=$_POST['addr'];
$dob=$_POST['DoB'];
$email=$_POST['EmailId'];
$aadhar=$_POST['Adhr'];
$contact=$_POST['Contact'];
$gender=$_POST['gen'];
$party=$_POST['Party'];
$pass1=$_POST['Spassword'];
$pass2=$_POST['Cpassword'];
$pass3=md5($pass1);
$pass4=md5($pass2);

if($party=="BJP")
{
	$path=$file_path = 'http://localhost/miniproject/images/bjp.png';
}
if($party=="Congress")
{
	$path=$file_path = 'http://localhost/miniproject/images/congress.png';
}
if($party=="ShivSena")
{
	$path=$file_path = 'http://localhost/miniproject/images/shivsena.jpg';
}
if($party=="NCP")
{
	$path=$file_path = 'http://localhost/miniproject/images/ncp.png';
}
if($party=="AAP")
{
	$path=$file_path = 'http://localhost/miniproject/images/aap.png';
}
if($party=="Others")
{
	$path=$file_path = 'http://localhost/miniproject/images/others.png';
}






$sql = "INSERT INTO candidate (name, address, dob, email, aadhar, contact, gender, party, pass1, pass2,path)
VALUES ('".$name."','".$addr."','".$dob."','".$email."','".$aadhar."','".$contact."','".$gender."','".$party."','".$pass3."','".$pass4."','".$path."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<script type="text/javascript">
alert("Candidate Registration Successful");
location="index.php";
</script>