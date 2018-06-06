<?php 
     //time
	$t=time();
	//echo " unix timestamp=".$t."<br>" ;
    echo "date=".date("d/m/Y")."<br>";
	date_default_timezone_set("Asia/Calcutta");
	//echo "timeaone=" .date_default_timezone_get();
	echo "time=".date("H:i:sa");
	
?>