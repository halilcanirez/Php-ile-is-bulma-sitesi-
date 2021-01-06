<?php 
include("connect.php");
include 'isverenustmenu.php';
include 'fonksiyonlar.php';

if (empty($_SESSION["isveren"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}



$id = $_GET["ID"];
$query = "SELECT * FROM ozgecmisler WHERE id= ".$id;
$result=mysqli_query($baglanti , $query); 
$row = mysqli_fetch_assoc($result);

$querybsvr = "SELECT * FROM basvurular WHERE sirketid='".$_SESSION["isveren"]."' AND ozgecmisid =".$row["id"] ;
$resultbsvr=mysqli_query($baglanti , $querybsvr); 
$rowbsvr = mysqli_fetch_assoc($resultbsvr);

if (isset($_POST["onecikar"])) {
	$queryupdate  = "UPDATE basvurular SET  onecikar= 1  WHERE sirketid='".$_SESSION["isveren"]."' AND ozgecmisid =".$row["id"] ;
	mysqli_query($baglanti,  $queryupdate);
	header("Refresh: 0;");
}

if (isset($_POST["sil"])) {
	$queryupdate  = "UPDATE basvurular SET  uygunlukdurumu= 1  WHERE sirketid='".$_SESSION["isveren"]."' AND ozgecmisid =".$row["id"];
	mysqli_query($baglanti,  $queryupdate);
	header("Refresh: 0;");
}
if (isset($_POST["al"])) {
	$queryupdate  = "UPDATE basvurular SET  uygunlukdurumu= 0  WHERE sirketid='".$_SESSION["isveren"]."' AND ozgecmisid =".$row["id"];
	mysqli_query($baglanti,  $queryupdate);
	header("Refresh: 0;");
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

</head>
<body>
	<div class="container">
		<form method="post">

			<div class="row mt-5">
				<div class="col-2"></div>
				<div class="col-2">
					<button class="btn btn-info" type="submit" name="onecikar" >Öne Çıkar</button>
				</div>
				<?php  
				if ($rowbsvr["uygunlukdurumu"]==0) {
					?>
					<div class="col-2">
						<button class="btn btn-info" type="submit" name="sil" >Başvuruyu Sil</button>
					</div>
					<?php  						
				}
				else{
					?>
					<div class="col-6">
						<button class="btn btn-info" type="submit" name="al"  > Başvuruyu Tekrar İşleme Al</button>
					</div>
					<?php 
				}
				?>
				

			</div>
		</form>	
		<hr>
		<div class="row mt-3">
			<div class="col-1"></div>
			<br>
			<div class="col-md-10">
				<form method="post">
					<div class="row">
						<div class="col-1"></div>
						<div class="col-10">
							<h5 style="font: 23px Arial;color: #333;"> Ad Soyad : <?php echo $row["adsoyad"] ?></h5>
						</div>
					</div>
				</form>
				<br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info " style=" font: 20px "> İletişim Bilgileri </h5>
					</div>
					<div class="col-1"></div>
				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-5">
						<p>E-Posta Adresi </p> <p style=" color: #666;" > <?php echo $row["epostadresi"] ?></p>
					</div>
					<div class="col-5">
						<p>Adres:</p><p style=" color: #666;"><?php echo $row["adres"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<div class="row pl-4 ml-4">

					<div class="col-10">
						<div class="col-5"><p>Telefon</p></div>
						<div class="col-5"><p style=" color: #666;"><?php echo $row["telefon"] ?></p></div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info " style=" font: 20px ">Ön Yazı</h5>
					</div>
					<div class="col-1"></div>
				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-10">
						<p> <?php echo $row["ozetbilgi"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info " style=" font: 20px ">İş Deneyimleri </h5>
					</div>
					<div class="col-1"></div>
				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-10">
						<p> <?php echo $row["isdeneyimleri"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info " style=" font: 20px ">Eğitim Bilgileri </h5>
					</div>
					<div class="col-1"></div>
				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-10">
						<p> <?php echo $row["egitimbilgileri"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<br><br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info text-center" style=" font: 20px ">Genel Bilgiler </h5>
					</div>
					<div class="col-1"></div>
				</div>
				<br>
				

				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p > Askerlik Durumu : </p>
					</div>
					<div class="col-8">
						<p style=" color: #666;"><?php echo $row["askerlikdurumu"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>



				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Yetenekler: </p>
					</div>
					<div class="col-8">
						<p style=" color: #666;"><?php echo $row["yetenekler"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p > Yabancı Dil : </p>
					</div>
					<div class="col-8">
						<p style=" color: #666;"><?php echo $row["yabancidil"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>

				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >   Askerlik Durumu : </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["askerlikdurumu"] ?></p>
					</div>

				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >Cinsiyet: </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["cinsiyet"] ?></p>
					</div>

				</div>

				
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Projeler: </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["projeler"] ?></p>
					</div>

				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Referanslar: </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["referanslar"] ?></p>
					</div>

				</div>

				

			</div>

		</div>

		<footer>
			<?php include '../ayar/footer.php'; ?> 
		</footer>

	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>