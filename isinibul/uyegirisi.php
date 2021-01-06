<?php 
include("ayar/connect.php");
include 'ayar/nav.php';
include 'ayar/fonksiyonlar.php';


if (isset($_POST["girisyap"])) {
	if ( $_POST["email"] != ""  && $_POST["sifre"] != "" ) {
		$email = mysqli_real_escape_string($baglanti, $_POST["email"]);
		$sifre = mysqli_real_escape_string($baglanti, $_POST["sifre"]);
		$md5lisifre = md5($sifre);

		$query = "SELECT * FROM uyeler WHERE emailadresi LIKE '%$email%' ";
		$result=mysqli_query($baglanti, $query);
		$row=mysqli_fetch_assoc($result);

		if (isset($row["sifre"])) {
			if($row["sifre"] == $md5lisifre){
				header('Location: index.php');
				$_SESSION["kullanici"] = $row["id"];
				$_SESSION["ad"] = $row["isim"];
			}
			else{
				include ("uyarilar/yanlissifre.php");
			}
		}
		else{
			include ("uyarilar/yanlissifre.php");
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
			<div class="col-4"></div>
			<div class="col-4">
				<h2 class="text--title">Üye Girişi</h2>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-4"></div>
			<div class="col-md-4">
				<form method="post">
					<div class="form-row">
						<div class="form-group col-sm-10">
							<input type="text" class="form-control" name="email" placeholder="E-mail" >
							<small class="text-info" >En az 3 karakter girmelisin </small>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-10">
							<input type="password" name="sifre" class="form-control" placeholder="Şifre">
							<small class="text-info" >En az 3 karakter girmelisin </small>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-10 ml-3">
							<button class="btn btn-info px-5 mx-5" name="girisyap" type="submit"> 
								<strong>Giriş Yap</strong>  
							</button>
						</div>
					</div>
				</form>
				<div class="row">
					<div class="col-10">
						<p> İşiniBul.com'da özgeçmişin yok mu ?</p>
						<p class="text-center"><a href="uyeol.php" class="text-info">Hemen Üye ol</a></p>
						<br>
						<p class="text-center"><a href="sifreyenileme.php" class="text-info">Şifremi Unuttum</a></p>
					</div>
				</div>
			</div>
			<div class="col-4"></div>
		</div>

	</div>

<footer>
		<?php include 'ayar/footer.php'; ?> 
	</footer>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>