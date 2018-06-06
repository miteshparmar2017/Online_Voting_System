<?php session_start(); 

$h=$_SESSION['hour'];
$min=$_SESSION['minutes'];
$mon=$_SESSION['month'];
$d=$_SESSION['dt'];
$y=$_SESSION['year'];
//if(isset($_SESSION['year'])){echo "true"; echo $y;}

?>

<!doctype html>
<html>
<head>
<title>PHP Countdown </title>
<style>


.countdownContainer{
position: absolute;
top: 7%;
left:53%;
transform : translateX(-50%) translateY(-50%);
text-align: inherit ;
background: #FF6633;
border: 1px solid #999;
padding: 5px;
box-shadow: 0 0 5px 3px #ccc;
}
.info {
font-size: 20px;
}



.green{color:green;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php


date_default_timezone_set("Asia/Calcutta");

//$date=mktime(00,05,00,04,6,2018);
$date=mktime((int)$h,(int)$min,00,(int)$mon,(int)$d,(int)$y);
$remaining = $date - time();

$days_remaining = floor($remaining / 86400);

$hours_remaining = floor(($remaining%86400) / 3600);
$minutes = floor(($remaining%3600) /60);
$seconds = floor(($remaining%60 ));

?>
<?php if($remaining>0){

    $_SESSION['vote_time']="false";
    $_SESSION['display_result']="false";
?>
<table class="countdownContainer">
<tr class="info">
<td colspan="4">Election Countdown</td>
</tr>
<tr class="info">
<td id="days" ><?php echo $days_remaining?></td>
<td id="hours"><?php echo $hours_remaining?></td>
<td id="minutes"><?php echo $minutes ?></td>
<td id="seconds"><?php echo $seconds ?></td>
</tr>
<tr class="info">
<td>Days</td>
<td>Hours</td>
<td>Minutes</td>
<td>Seconds</td>
</tr>
</table>

<?php } 
else { 

   $_SESSION['vote_time']="true";
   $_SESSION['display_result']="true";
?>
<table class="countdownContainer">
<tr class="info">
<td colspan="4">Election Countdown</td>
</tr>

<tr>
<td><input id="demo" name="demo" value="E X P I R E D !!!" align="center"  width="5x"/></td>
</tr>
</table>
<?php } ?>
</body>
</html>
