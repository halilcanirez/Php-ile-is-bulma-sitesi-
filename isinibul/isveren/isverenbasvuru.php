<?php 
include ("connect.php");
include ("fonksiyonlar.php");
include 'isverenustmenu.php';



if (isset($_POST["basvuru"])) {
	if ($_POST["email"] !="" && $_POST["sifre"] !="" &&$_POST["sirketismi"] !="" && $_POST["kurulusyili"] != "" && $_POST["sektor"] != ""  && $_POST["web"] != "" ) {

		$sirketismi= mysqli_real_escape_string($baglanti, $_POST["sirketismi"]);
		$kurulusyili = mysqli_real_escape_string($baglanti, $_POST["kurulusyili"]);
		$email = mysqli_real_escape_string($baglanti, $_POST["email"]);
		$sifre = mysqli_real_escape_string($baglanti, $_POST["sifre"]);
		$sektor= mysqli_real_escape_string($baglanti, $_POST["sektor"]);
		$soyisim = mysqli_real_escape_string($baglanti, $_POST["kurulusyili"]);
		$web = mysqli_real_escape_string($baglanti, $_POST["web"]);
		$adres = mysqli_real_escape_string($baglanti, $_POST["adres"]);
		$hakkinda = mysqli_real_escape_string($baglanti, $_POST["hakkinda"]);
		$vizyon = mysqli_real_escape_string($baglanti, $_POST["vizyon"]);

		
		$emailsayisi = emailkontrolisveren($email);
		

		if ($emailsayisi==0) {

			$query = "INSERT INTO isverenkullanıcılar (durumu,email,  sirketismi ,sifre ,adres , websitesi , sektor , kurulusyili , hakkında , vizyonmisyon) 
			VALUES (1 ,'".$email."', '".$sirketismi."', '".$sifre."' , '".$adres."' , '".$web."' , '".$sektor."' , 
			'".$kurulusyili."' , '".$hakkinda."' ,  '".$vizyon."')";
			mysqli_query($baglanti , $query);

			

			header("Refresh: 2; url=isverengirisi.php");

		}
		
		else{
			include ("../uyarilar/giridiginizemailvar.php");
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

	<title>İsinOlsun.com</title>
</head>
<body>
	
	<br> <br> 
	<div class="container">
		<div class="row mt-3">
			<div class="col-2"></div>
			<br>
			<div class="col-md-8">
				<form method="post">
					<div class="col-12">
						<h5 style="color: #666; font-size: 20px; text-align: left;">Hesap Bilgileri </h5>
					</div>
					<br>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<input type="text" name="email" class="form-control" placeholder=" E-mail">
						</div>
						<div class="form-group col-sm-6">
							<input type="text" name="sifre" class="form-control" placeholder="Sifre">
						</div>
					</div>


					<div class="form-row">

						<div class="col-12">
							<h5 style="color: #666; font-size: 20px; text-align: left;">Şirket İsmi</h5>
						</div>
						<br>
						<div class="form-group col-sm-12 mt-3">
							<input type="text" class="form-control " name="sirketismi" placeholder="" >
						</div>	

						<div class="col-12">
							<h5 style="color: #666; font-size: 20px; text-align: left;">Genel Bilgiler</h5>
						</div>
						<br>
						<div class="form-group col-sm-12 mt-3">
							<input type="text" class="form-control " name="web" placeholder="Web Sitesi" >
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-6">
							<input type="text" name="sektor" class="form-control" placeholder=" Sektör">
						</div>
						<div class="form-group col-sm-6">
							<input type="text" name="kurulusyili" class="form-control" placeholder="Kuruluş Yılı">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-12">
							<textarea class="form-control" name="adres" placeholder="Adres" rows="3" ></textarea>
						</div>
					</div>
					<br>
					

					
					

					<div class="row">
						<div class="form-group col-sm-12" style="color: #666; font-size: 20px; text-align: left;">
							<h5>Hakkında </h5>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<textarea class="form-control" name="hakkinda" placeholder="" rows="6" ></textarea>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-sm-12">
							<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Vizyon&Misyon </h5>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<textarea class="form-control" name="vizyon" placeholder="" rows="6" ></textarea>
						</div>
					</div>
					
					<br>
					<button class="btn btn-info px-5 " name="basvuru" type="submit"> 
						<strong>Başvuru Yap </strong>  
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