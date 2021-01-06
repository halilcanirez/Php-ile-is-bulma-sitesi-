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
					<?php include 'yanmenu.php';  ?>	
				</nav> 
			</div>

			<div class="col-9 ml-2" 	>
				<div class="row mt-3 mb-3">
					<div class="col">
						<p class="ml-1" style="margin: 0;font-size: 20px; font-size: 1.125rem; font-family: Roboto-Medium,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif;color: #333;">Başvurular</p>
					</div>
					
				</div>

				<?php
				$id = $_SESSION["kullanici"];
				$query = "SELECT * FROM basvurular  WHERE uyid= " .$id;
				if ($result=mysqli_query($baglanti , $query)) {
					while ( $row = mysqli_fetch_assoc($result)) {

						$ilanid = $row["ilanid"];
						$queryilan = "SELECT * FROM isilanları  WHERE id= ".$ilanid ;
						$resultilan=mysqli_query($baglanti , $queryilan);
						$rowilan = mysqli_fetch_assoc($resultilan);

						?>
						<div class="row ml-2 mr-2" style="border : 1px solid #E0E0E0">
							<div class="col">


								<h5 style="    font-size: 18px; color: #333; margin-bottom: 0; " class="mt-1"> <?php echo $rowilan["isinismi"]; ?> </h5>
								<p> <?php echo $rowilan["sirketismi"] ; ?> 
								<a class="float-right ml-3 text-info" href="basvuruiptal.php?ilanid=<?php echo $rowilan["id"]?>">Başvuruyu İptal Et</a>	
								<a class="float-right text-info" href="isilanıgöster.php?ID=<?php echo $rowilan["id"]?>">Görüntüle</a></p>
							</div>
							


						</div>
						<br>
						<?php 

					}

					if (empty($rowilan["id"])) {
						?>

						<div class="row mt-3 mb-3">
							<div class="col">
								<p class="ml-5 mt-5" style="margin: 0;font-size: 15px; font-size: 1.125rem; font-family: Roboto-Medium,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif;color: #333;"> Henüz Bir Başvurun Yok  </p>
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