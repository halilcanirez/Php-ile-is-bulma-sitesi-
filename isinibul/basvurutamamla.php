<?php 
include ("ayar/connect.php");
include 'ayar/nav.php';
include ("ayar/fonksiyonlar.php");	
if (empty($_SESSION["kullanici"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}

$uyeid = $_SESSION["kullanici"] ; 
$sirketid = $_SESSION["sirketid"] ; 
$_SESSION["yeniilanid"] = $_GET["ID"];
$query = "SELECT * FROM isilanları WHERE id= ".$_SESSION["yeniilanid"];
$result=mysqli_query($baglanti , $query); 
$row = mysqli_fetch_assoc($result);	


$queryiki = "SELECT * FROM basvurular WHERE uyid = '".$uyeid."' AND ilanid = " .$_SESSION["yeniilanid"];
$resultiki=mysqli_query($baglanti , $queryiki); 
$basvurukontrol= mysqli_fetch_assoc($resultiki);



if (isset($_POST["basvurutamamla"])) {
	
	
	if (empty($basvurukontrol["id"])) {
		$ozgecmisid = $_POST["ozgecmis"];

		$query = "INSERT INTO basvurular (uyid,ilanid,ozgecmisid, sirketid) VALUES ('".$uyeid."',
		'".$_SESSION["yeniilanid"]."', '".$ozgecmisid."' , '".$sirketid."' )";
		if (mysqli_query($baglanti, $query)) {		
			include ("uyarilar/basvurutamamlandı.php");
			header("Refresh: 1;");
		}
		else{
			include ("uyarilar/basvurutamamlandı.php");
		}
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

</head>
<body>
	<br>
	<div class="container">
		<form method="post">
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

						<?php 
						if (empty($basvurukontrol["id"])) {
							?>
							
							<div class="col-8">
								<!-- <form method="post"> -->
									<button class="btn btn-info ml-5" type="submit" name="basvurutamamla" style="padding: 10px 75px "> Başvuruyu Tamamla </button>
								</div>

								<!-- form -->
								<?php 
							}
							else{
								?>
								<div class="col-8">
									<button class="btn btn-secondary ml-5" type="submit" style="padding: 10px 75px "> Başvuruldu </button>
								</div>
								<?php
							}
							?>
							
						</div>

						<div class="row mt-5">
							<div class="col-4"></div>
							<div class="col-4">
								
								<div class="form-group">
									<label class="ml-5 mb-2">Özgeçmiş Seçiniz</label>
									<form method="post">
										<select class="form-control" name="ozgecmis">
											<?php 
											$queryozgcm = "SELECT * FROM ozgecmisler  WHERE uyeid= " .$uyeid;
											if ($resultozgcm=mysqli_query($baglanti , $queryozgcm)) {
												while ( $rowozgcm = mysqli_fetch_assoc($resultozgcm)) {
													?>
													<option value="<?php echo $rowozgcm["id"]; ?>" > <?php echo $rowozgcm["baslik"]; ?></option>

													<?php 
												}
											}
											?>
										</select>
										
										

									</div>

						<!-- <button class="btn btn-info px-5 " name="basvurutamamla" type="submit"> 
							<strong>Üye OL</strong>  
						</button> -->
						
					</div>
					<div class="col-4"></div>
				</div>
			</div>

		</div>

	</form>
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