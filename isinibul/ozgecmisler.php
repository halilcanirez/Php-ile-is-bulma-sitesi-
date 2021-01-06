<?php 
include ("ayar/connect.php");
include 'ayar/nav.php';
if (empty($_SESSION["kullanici"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}

if (isset($_POST["ara"])) {
	$sehir = $_POST["sehir"];
	$ktgr = $_POST["katagori"];
	echo $sehir;
	header("Location: isilanlari.php?sehirid=$sehir&katagoriid=$ktgr");
}


$idilk = $_SESSION["kullanici"];
$querybir = "SELECT * FROM ozgecmisler  WHERE uyeid= '".$idilk."'  " ;
$resultbir=mysqli_query($baglanti , $querybir);
$rowbir = mysqli_fetch_assoc($resultbir);

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

	<div class="container-fluid">
		<?php include ("ayar/aramabutonu.php"); ?> 
		<hr style="border : 1px solid #ccc">

		<div class="row ml-5 " >

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

			<div class="col-9 ml-2" 	>
				<div class="row mt-3 mb-3">
					<div class="col">
						<p class="ml-1" style="margin: 0;font-size: 20px; font-size: 1.125rem; font-family: Roboto-Medium,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif;color: #333;">Özgeçmişler</p>
					</div>
					<div class="col">
						<button class="btn btn-info float-right" style="padding: 1px 30px;" name="oluştur" type="submit"> 
							<a class="text-white" href="ozgecmisolustur.php">Yeni Özgeçmiş</a>
						</button>
					</div>
				</div>

				<?php
				$id = $_SESSION["kullanici"];
				$query = "SELECT * FROM ozgecmisler  WHERE uyeid= " .$id;
				if ($result=mysqli_query($baglanti , $query)) {
					while ( $row = mysqli_fetch_assoc($result)) {
						?>
						<div class="row ml-2 mr-2" style="border : 1px solid #E0E0E0">
							<div class="col">
								<h5 style="    font-size: 18px; color: #333; margin-bottom: 0; " class="mt-1"> <?php echo $row["baslik"]; ?> </h5>

								<p><?php echo $row["adsoyad"] ; ?></p>
								<p>Yetenekler :  <?php echo $row["yetenekler"] ; ?> 
								<a class="float-right ml-3 text-info " href="ozgecmissil.php?ID=<?php echo $row["id"]?>">Sil</a>	
								<a class="float-right text-info" href="ozgecmisgörüntüle.php?ID=<?php echo $row["id"]?>">Görüntüle</a></p>
							</div>
							


						</div>
						<br>
						<?php 

					}

					if (empty($rowbir["id"])) {
						?>

						<div class="row mt-3 mb-3">
							<div class="col">
								<p class="ml-5 mt-5" style="margin: 0;font-size: 15px; font-size: 1.125rem; font-family: Roboto-Medium,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif;color: #333;">Özgecmişin Yok <a class="text-info" href="ozgecmisolustur.php">Yeni Bir Özgeçmiş Oluşturmak İçin Tıkla</a></p>
							</div>


						<?php 
					}

				} 
				else{
					echo "HATA";
				} 

				?>
			</div>

		</div>


	</div>

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