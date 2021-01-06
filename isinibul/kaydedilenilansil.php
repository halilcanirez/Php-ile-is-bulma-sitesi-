


<?php 
include ("ayar/connect.php");
session_start();
	$uyeid= $_SESSION["kullanici"];
	$ilanid = $_GET["ilanid"];

	$query = "DELETE FROM kaydedilenler WHERE uyeid='".$uyeid."'  AND ilanid=" .$ilanid;
	mysqli_query($baglanti, $query);
	echo $query;
	header("Location: kaydedilenler.php");
		

 ?>



