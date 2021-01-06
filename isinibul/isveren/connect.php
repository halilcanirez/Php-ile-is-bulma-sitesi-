<?php 
$baglanti  = mysqli_connect("localhost","root","","isinibul");
$baglanti -> set_charset("utf8");

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>