<?php 
include ("ayar/connect.php");
include 'ayar/nav.php';	

if (empty($_SESSION["kullanici"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}


if (isset($_POST["degistir"])) {
	if ( $_POST["eskisifre"] != ""  && $_POST["yenisifre"] != "" && $_POST["sifre2"] != "" ) {
		$eskisifre = mysqli_real_escape_string($baglanti, $_POST["eskisifre"]);
		$yenisifre = mysqli_real_escape_string($baglanti, $_POST["yenisifre"]);
		$sifre2 = mysqli_real_escape_string($baglanti, $_POST["sifre2"]);
		
		$md5lieskisifre = md5($eskisifre);

		$query = "SELECT * FROM uyeler WHERE id= ".$_SESSION["kullanici"];
		$result=mysqli_query($baglanti , $query); 
		$row = mysqli_fetch_assoc($result);

		if ($yenisifre==$sifre2) {
			
			if ($row["sifre"] == $md5lieskisifre) {
				$md5lisifre = md5($sifre2);
				$queryupdate = "UPDATE uyeler SET  sifre  = '".$md5lisifre."'  WHERE id =" .$_SESSION["kullanici"];
				mysqli_query($baglanti, $queryupdate);
				include ("uyarilar/sifrendegisti.php");
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

	<div class="container-fluid">

		<?php include ("ayar/aramabutonu.php"); ?> 
		<hr style="border : 1px solid #ccc">

		<div class="row ml-5 mt-2">
			<div class="col-2" style="border : 1px solid #E0E0E0" >
				<nav class="nav flex-column">
					<!-- <a href="hesabim.php" class="nav-link">Profil</a>
					<a href="ozgecmisler.php" class="nav-link" style="border-bottom : 1px solid #E0E0E0 ">Özgeçmişler</a> 
					<a href="basvurular.php" class="nav-link">Başvurular</a>
					<a href="#" class="nav-link" style="border-bottom : 1px solid #E0E0E0" >Kaydedilenler</a>
					<a href="#" class="nav-link">İncelenen İlanlar</a>
					<a href="#" class="nav-link"  style="border-bottom : 1px solid #E0E0E0">İş Alarmları</a>
					<a href="#" class="nav-link">Ayarlar</a> -->

					<?php include 'yanmenu.php';  ?>	
				</nav> 
			</div>

			<div class="col-md-4 ml-3">
				<h4 class="text--title mt-2 ">Şifre Değiştir </h4>
				<form method="post">
					<div class="form-row">
						<div class="form-group col-sm-10 mt-2">
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