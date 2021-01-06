<?php 
include ("ayar/connect.php");
include ("ayar/fonksiyonlar.php");
include 'ayar/nav.php';

if (isset($_POST["kaydolbuton"])) {
	if ($_POST["isim"] !="" && $_POST["soyisim"] != "" && $_POST["email"] != ""  && $_POST["sifre"] != "" ) {
		$isim= mysqli_real_escape_string($baglanti, $_POST["isim"]);
		$soyisim = mysqli_real_escape_string($baglanti, $_POST["soyisim"]);
		$email = mysqli_real_escape_string($baglanti, $_POST["email"]);
		$sifre = mysqli_real_escape_string($baglanti, $_POST["sifre"]);
		$md5lisifre = md5($sifre);
		$emailsayisi = emailkontrol($email);
		

		if ($emailsayisi==0) {
			$query = "INSERT INTO uyeler (isim,soyisim,emailadresi,sifre ) VALUES ('".$isim."',
			'".$soyisim."', '".$email."', '".$md5lisifre."' )";
			if (mysqli_query($baglanti, $query)) {
				include ("uyarilar/uyekayitbasarili.php");
			}
			else{
				echo "üye oluşturulamadı";
			}
		}
		else{
			include ("uyarilar/giridiginizemailvar.php");
		}


	}


	else{
		include ("uyarilar/formdakialanlar.php");
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

	<title>Hello, world!</title>
</head>
<body>
	
	<br> <br> 
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-center text--title">Yeni Üyelik Oluştur</h1>
				<br>
				<p class="text-center text--block"> Zaten üye misin ? <a class="text-info"  href="uyegirisi.php">Üye Girişi Yap</a> </p>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-4"></div>
			<div class="col-md-4">
				<form method="post">
					<div class="form-row">
						<div class="form-group col-sm-6">
							<input type="text" class="form-control" name="isim" placeholder="Adın" >
						</div>
						<div class="form-group col-sm-6">
							<input type="text" class="form-control"  name="soyisim" placeholder="Soyadın" >
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-12">
							<input type="text" name="email" class="form-control" placeholder=" E-posta">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-12">
							<input type="password" name="sifre" class="form-control" placeholder="Yeni Şifre">
						</div>
					</div>
					<br>
					<div class="form-row" style="margin-top: -8px">
						<div class="col-sm-10">
							<small class="text-muted">
								Kaydol düğmesine tıklayarak, <a class="text-info" href="#"> Koşullarımızı</a>, <a class="text-info" href="#"> Veri İlkemizi</a> ve <a class="text-info" href="#"> Çerezler İlkemizi</a> kabul etmiş olursun. Bizden E-posta Bildirimleri alabilir ve bu bildirimleri istediğin zaman durdurabilirsin.
							</small>
						</div>
					</div>
					<br>
					<button class="btn btn-info px-5 " name="kaydolbuton" type="submit"> 
						<strong>Üye OL</strong>  
					</button>

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