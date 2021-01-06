<?php 
include ("ayar/connect.php");


	$uyeid = $_SESSION["kullanici"] ; 
	$id = $_GET["ID"];

	$queryktn = "INSERT INTO kaydedilenler (uyeid,ilanid) VALUES ('".$uyeid."', '".$id."')";
	mysqli_query($baglanti, $queryktn);

	


	?>