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
$pass1=$_POST['Spassword'];
$pass2=$_POST['Cpassword'];
$pass3=md5($pass1);
$pass4=md5($pass2);

$sql = "INSERT INTO voter (name, address, dob, email, aadhar, contact, gender, pass1, pass2, flag1)
VALUES ('".$name."','".$addr."','".$dob."','".$email."','".$aadhar."','".$contact."','".$gender."','".$pass3."','".$pass4."','0')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<script type="text/javascript">
alert("Voter Registration Successful");
location="index.php";
</script>