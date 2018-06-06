<html>
<body>

<?php 
session_start();
//$unm=$_SESSION['user_name'];
if(isset($_SESSION['vote_time'])){
?>

<h1  align="center" style="background-color:#FF0000"> Election is still GOING ON!!!</h1>

<?php }

?>
<a href="logout.php"> Logout</a>
</body>
</html>