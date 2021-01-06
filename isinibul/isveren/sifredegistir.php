<?php 
include("connect.php");
include 'isverenustmenu.php';
include 'fonksiyonlar.php';
if (empty($_SESSION["isveren"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}


if (isset($_POST["degistir"])) {
	if ( $_POST["eskisifre"] != ""  && $_POST["yenisifre"] != "" && $_POST["sifre2"] != "" ) {
		$eskisifre = mysqli_real_escape_string($baglanti, $_POST["eskisifre"]);
		$yenisifre = mysqli_real_escape_string($baglanti, $_POST["yenisifre"]);
		$sifre2 = mysqli_real_escape_string($baglanti, $_POST["sifre2"]);
		
		$query = "SELECT * FROM isverenkullanıcılar WHERE id= ".$_SESSION["isveren"];
		$result=mysqli_query($baglanti , $query); 
		$row = mysqli_fetch_assoc($result);

		if ($yenisifre==$sifre2) {
			
			if ($row["sifre"] == $eskisifre) {
				$queryupdate = "UPDATE isverenkullanıcılar SET  sifre  = '".$yenisifre."'  WHERE id =" .$_SESSION["isveren"];
				mysqli_query($baglanti, $queryupdate);
				header("Refresh: 0;");
			}
			else{
				echo "Eski Şifreniz Hatalı";
			}


		}
		else{
			echo "İki Şifrede Aynı Olmalı";
		}

		



	}
	else{
		include ("../uyarilar/formdakialanlar.php");
	}
}

?>




<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>İşini Bul</title>
</head>
<body>
	
	<br> <br> 
	<div class="container">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<h2 class="text--title">Şifre Değiştir </h2>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4"></div>
			<div class="col-md-4">
				<form method="post">
					<div class="form-row">
						<div class="form-group col-sm-10">
							<input type="text" class="form-control" name="eskisifre" placeholder="Eski Şifre" >
							<small class="text-info" >En az 3 karakter girmelisin </small>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-10">
							<input type="text" class="form-control" name="yenisifre" placeholder="Yeni Şifre" >
							<small class="text-info" >En az 3 karakter girmelisin </small>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-10">
							<input type="text" name="sifre2" class="form-control" placeholder="Yeni Şifre Tekrar">
							<small class="text-info" >En az 3 karakter girmelisin </small>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-10 ml-3">
							<button class="btn btn-info px-5 mx-5" name="degistir" type="submit"> 
								<strong>Değiştir</strong>  
							</button>
						</div>
					</div>
				</form>
				
			</div>
			<div class="col-4"></div>
		</div>

	</div>





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>