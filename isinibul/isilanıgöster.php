<?php 
include ("ayar/connect.php");
include 'ayar/nav.php';	

if (empty($_SESSION["kullanici"]) ) {
	include ("uyarilar/girisyapiniz.php");
	die();
}



$uyeid = $_SESSION["kullanici"] ; 
$id = $_GET["ID"];
$query = "SELECT * FROM isilanları WHERE id= ".$id;
$result=mysqli_query($baglanti , $query); 
$row = mysqli_fetch_assoc($result);	



$queryiki = "SELECT * FROM basvurular WHERE uyid = '".$uyeid."' AND ilanid = " .$id;
$resultiki=mysqli_query($baglanti , $queryiki); 
$basvurukontrol= mysqli_fetch_assoc($resultiki);

$_SESSION["sirketid"]=$row["sirketid"];

if (isset($_POST["ilanikaydet"])) {
	$query34 = "INSERT INTO kaydedilenler (uyeid , ilanid) VALUES  ('".$uyeid."' , '".$id."') ";
	mysqli_query($baglanti, $query34);

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
	<br>
	<div class="container">
		<div class="row mt-3">
			<div class="col-1"></div>
			<br>
			<div class="col-md-10">
				<div class="row">
					<div class="col-4">
						<h5 style="font: 17px/1 Arial;color: #333;"> <?php echo $row["isinismi"] ?></h5>
						<h5 style="font: 17px/1 Arial;color: #333;"> <?php echo $row["sirketismi"] ?></h5>
						<h5 style="font: 17px/1 Arial;color: #333;"><?php echo $row["ulkesehir"] ?></h5>
					</div>
					<div class="col-4"></div>
					<?php 
					if ($row["durumu"] == 0) {
						?>
						<div class="col-4">
							<a href=""><button class="btn btn-info" type="submit" name="basvur" style="padding: 10px 75px ">İlan Yayından Kaldırılmış </button></a>
						</div>
						<?php 
					}
					else if (empty($basvurukontrol["id"])) {
						?>
						<div class="col-4">
							<a href="basvurutamamla.php?ID=<?php echo $row["id"] ?>"><button class="btn btn-info" type="submit" name="basvur" style="padding: 10px 75px ">Başvur </button></a>
						</div>
						<?php 
					}
					else{
						?>
						<div class="col-4">
							<button class="btn btn-secondary" type="submit" style="padding: 10px 75px "> Başvuruldu </button>
						</div>
						<?php
					}
					?>
					
				</div>
				<br><br><br> <br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info " style=" font: 20px "> Genel Nitelikler ve İş Tanımı</h5>
					</div>
					<div class="col-1"></div>
				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-10">
						<p> <?php echo $row["aranannitelikler"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<br><br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info " style=" font: 20px ">İş Tanımı</h5>
					</div>
					<div class="col-1"></div>
				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-10">
						<p> <?php echo $row["istanımı"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info text-center" style=" font: 20px ">Aday Kriterleri</h5>
					</div>
					<div class="col-1"></div>
				</div>

				

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
						<p > Eğitim Seviyesi : </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["egitimseviyesi"] ?></p>
					</div>

				</div>
				<br>
				<div class="row">
					<div class="col-1"></div>
					<div class="col-10">
						<h5 class="text-info text-center" style=" font: 20px ">Posizyon Bilgileri</h5>
					</div>
					<div class="col-1"></div>
				</div>

				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p > Firma Sektörü: </p>
					</div>
					<div class="col-8">
						<p style=" color: #666;"><?php echo $row["firmasektörü"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p > Departman : </p>
					</div>
					<div class="col-8">
						<p style=" color: #666;"><?php echo $row["katagori"] ?></p>
					</div>
					<div class="col-1"></div>

				</div>

				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Çalışma Şekli : </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["calısmasekli"] ?></p>
					</div>

				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Pozisyon Seviyesi: </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["pozisyonseviyesi"] ?></p>
					</div>

				</div>

				
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Personel Sayısı : </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["personelsayısı"] ?></p>
					</div>

				</div>
				<div class="row mt-2">
					<div class="col-1"></div>
					<div class="col-2">
						<p >  Ülke/Şehir: </p>
					</div>
					<div class="col-9">
						<p style=" color: #666;"><?php echo $row["ulkesehir"] ?></p>
					</div>

				</div>

				<div class="row mt-5">
					<div class="col-1"></div>
					<div class="col-4">
						<a href="firmaprofili.php?ID=<?php echo $row["sirketid"] ?>"><button class="btn btn-info" type="submit" name="" style="padding: 10px 75px " target="_blank">Firma Profili </button></a>
					</div>
					<div class="col-3 "></div>
					<form method="post">
						<div class="col-4">
							<?php 
							$querykaydet = "SELECT * FROM kaydedilenler WHERE uyeid = '".$uyeid."' AND ilanid = " .$id;
							$resultkaydet=mysqli_query($baglanti , $querykaydet); 
							$kaydetK= mysqli_fetch_assoc($resultkaydet);
							if (empty($kaydetK["id"])) {
								?>

								<button class="btn btn-info" type="submit" name="ilanikaydet" style="padding: 10px 75px "> İlanı Kaydet </button>

								<?php 
							}
							else{
								?>

								<button class="btn btn-secondary" type="submit" style="padding: 10px 75px "> Kaydedildi </button>

								<?php
							}
							?>

						</div>

					</form>	
				</div>

			</div>

		</div>




		<br><br><br><br>

		<footer>
			<?php include 'ayar/footer.php'; ?> 
		</footer>

	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>