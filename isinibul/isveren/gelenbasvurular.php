<?php 
include("connect.php");
include 'isverenustmenu.php';
include 'fonksiyonlar.php';
if (empty($_SESSION["isveren"])) {
	include ("uyarigirisyapiniz.php");
	die();
}

$ilanid = $_GET["ID"];



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
			<div class="row ml-2 mt-4 mb-4"  >

				<div class="col-4">
					<p class="ml-3" style="margin: 0;font-size: 20px; font-size: 1.300rem; font-family: Roboto-Medium,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif;color: #333;">İlana Yapılan Başvurular</p>
				</div>
				 <div class="col-3"></div>
				<div class="col-2">
					<select class="form-control " name="arama">
						<option value="1" >Tümü</option>
						<option value="2" >Öne Çıkarılanlar</option>
						<option value="3" >Sililenler </option>
					</select>
				</div>
				<div class="col-2 ">
					<button class="btn btn-info " name="ara" type="submit" style="">Ara</button>
				</div> 

			</div>	

		</form>


		<div class="row ml-2">
			<div class="col-10">
				<?php
				$id = $_SESSION["isveren"];

				$query = "SELECT * FROM basvurular  WHERE uygunlukdurumu= 0 AND ilanid= '".$ilanid."' AND sirketid= " .$id;

				
				if (isset($_POST["ara"])) {
					$secim = $_POST["arama"];
					if ($secim==1) {
						$query = "SELECT * FROM basvurular  WHERE uygunlukdurumu= 0 AND ilanid= '".$ilanid."' AND sirketid= " .$id;
					}
					else if ($secim==2){
						$query = "SELECT * FROM basvurular  WHERE uygunlukdurumu= 0 AND onecikar=1 AND ilanid= '".$ilanid."' AND sirketid= " .$id;
					}
					else{
						$query = "SELECT * FROM basvurular  WHERE uygunlukdurumu= 1 AND ilanid= '".$ilanid."' AND sirketid= " .$id;
					} 	
				}

				if ($result=mysqli_query($baglanti , $query)) {
					while ( $row = mysqli_fetch_assoc($result)) {
							

							$ozgecmis = $row["ozgecmisid"];
						    $queryozgm = "SELECT * FROM ozgecmisler  WHERE id= ".$ozgecmis ;
						    $resultozgm=mysqli_query($baglanti , $queryozgm);
						    $rowozgm = mysqli_fetch_assoc($resultozgm);
						

						?>
						<div class="row ml-2 mr-2" style="border : 1px solid #E0E0E0">
							<div class="col mt-2">

								<h5 style="    font-size: 18px; color: #333; margin-bottom: 0; " class="mt-1"> <?php echo $rowozgm["adsoyad"]; ?> </h5>
								<p class="mt-3"> <?php echo $rowozgm["epostadresi"] ; ?> <?php echo $rowozgm["telefon"] ; ?>
								

								<a class="float-right text-info mr-2" href="ozgecmisgörüntüle.php?ID=<?php echo $rowozgm["id"]?>">Görüntüle</a></p>
							</div>
							


						</div>
						<br>
						<?php 

					}

					if (empty($id)) {
						?>

						<div class="row mt-3 mb-3">
							<div class="col">
								<p class="ml-5 mt-5" style="margin: 0;font-size: 15px; font-size: 1.125rem; font-family: Roboto-Medium,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif;color: #333;">Yayınlanmış İlanın Yok <a class="text-info" href="ilanolustur.php">Yeni Bir İlan Yayınlamak İçin Tıkla</a></p>
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


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>




