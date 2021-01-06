


<?php 
include ("ayar/connect.php");
	$id = $_GET["ID"];
	$query = "DELETE FROM ozgecmisler WHERE id=" .$id;
	mysqli_query($baglanti, $query);

	header("Location: ozgecmisler.php");
		

 ?>



