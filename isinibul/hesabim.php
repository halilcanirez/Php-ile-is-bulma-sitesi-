<?php 	
include ("ayar/connect.php");
include 'ayar/nav.php'; 	
if (empty($_SESSION["kullanici"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}


$id = $_SESSION["kullanici"];
$querybir = "SELECT * FROM ozgecmisler  WHERE uyeid= '".$id."'  LIMIT 1" ;
$resultbir=mysqli_query($baglanti , $querybir);
$rowbir = mysqli_fetch_assoc($resultbir);

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
		<form method="post">
			<div class="row pl-5 mt-3">

				<div class="col-2 mt-3">
					<select class="form-control ml-3" name="sehir">
						<option >Şehir</option>
						<option value="1" >Adana</option>
						<option value="2" >Adıyaman</option>
						<option value="3" >Afyon</option>
						<option value="4" >Ağrı</option>
						<option value="6" >Aksaray</option>
						<option value="5" >Amasya</option>
						<option value="6" >Ankara</option>
						<option value="7" >Antalya</option>
						<option value="700" >Ardahan</option>
						<option value="8" >Artvin</option>
						<option value="9" >Aydın</option>
						<option value="10" >Balıkesir</option>
						<option value="74" >Bartın</option>
						<option value="72" >Batman</option>
						<option value="69" >Bayburt</option>
						<option value="11" >Bilecik</option>
						<option value="12" >Bing&#246;l</option>
						<option value="13" >Bitlis</option>
						<option value="14" >Bolu</option>
						<option value="15" >Burdur</option>
						<option value="16" >Bursa</option>
						<option value="17" >&#199;anakkale</option>
						<option value="18" >&#199;ankırı</option>
						<option value="19" >&#199;orum</option>
						<option value="20" >Denizli</option>
						<option value="21" >Diyarbakır</option>
						<option value="81" >D&#252;zce</option>
						<option value="22" >Edirne</option>
						<option value="23" >Elazığ</option>
						<option value="24" >Erzincan</option>
						<option value="25" >Erzurum</option>
						<option value="26" >Eskişehir</option>
						<option value="86" >Gazi Magusa</option>
						<option value="27" >Gaziantep</option>
						<option value="28" >Giresun</option>
						<option value="87" >Girne</option>
						<option value="29" >G&#252;m&#252;şhane</option>
						<option value="88" >G&#252;zelyurt</option>
						<option value="30" >Hakkari</option>
						<option value="31" >Hatay</option>
						<option value="76" >Iğdır</option>
						<option value="32" >Isparta</option>
						<option value="89" >İskele</option>
						<option value="82" >İstanbul(Asya)</option>
						<option value="34" >İstanbul(Avr.)</option>
						<option value="35" >İzmir</option>
						<option value="46" >Kahramanmaraş</option>
						<option value="78" >Karab&#252;k</option>
						<option value="70" >Karaman</option>
						<option value="36" >Kars</option>
						<option value="37" >Kastamonu</option>
						<option value="38" >Kayseri</option>
						<option value="71" >Kırıkkale</option>
						<option value="39" >Kırklareli</option>
						<option value="40" >Kırşehir</option>
						<option value="79" >Kilis</option>
						<option value="90" >KKTC Diğer</option>
						<option value="41" >Kocaeli</option>
						<option value="42" >Konya</option>
						<option value="43" >K&#252;tahya</option>
						<option value="85" >Lefkoşa</option>
						<option value="44" >Malatya</option>
						<option value="45" >Manisa</option>
						<option value="47" >Mardin</option>
						<option value="33" >Mersin</option>
						<option value="48" >Muğla</option>
						<option value="49" >Muş</option>
						<option value="50" >Nevşehir</option>
						<option value="51" >Niğde</option>
						<option value="52" >Ordu</option>
						<option value="80" >Osmaniye</option>
						<option value="53" >Rize</option>
						<option value="54" >Sakarya</option>
						<option value="55" >Samsun</option>
						<option value="56" >Siirt</option>
						<option value="57" >Sinop</option>
						<option value="58" >Sivas</option>
						<option value="63" >Şanlıurfa</option>
						<option value="73" >Şırnak</option>
						<option value="59" >Tekirdağ</option>
						<option value="60" >Tokat</option>
						<option value="61" >Trabzon</option>
						<option value="62" >Tunceli</option>
						<option value="64" >Uşak</option>
						<option value="65" >Van</option>
						<option value="77" >Yalova</option>
						<option value="66" >Yozgat</option>
						<option value="67" >Zonguldak</option>
					</select>

				</div>

				<div class="col-3 mt-3">
					<select class="form-control" name="katagori">
						<option>Katagori</option>
							<option>Eğitim</option>
							<option>Satış</option>
							<option>Sağlık</option>
							<option>Teknik İşler</option>
							<option>Muhasebe</option>
							<option>Pazarlama</option>
							<option>Üretim</option>
							<option>Çağrı Merkezi</option>
							<option>Kafe-Bar-Restoran</option>
							<option>Mühendislik</option>
							<option>Lojistik-Depo</option>
							<option>Müşteri Hizmetleri</option>
							<option>Bilgi Teknolojileri</option>
							<option>Temizlik</option>
							<option>İdari İşler-Ofis</option>
							<option>Mağazacılık</option>
							<option>Hizmet</option>
							<option>Operasyon</option>
							<option>Turuzim-Otelcilik</option>
							<option>İnsan Kaynakları</option>
							<option>Tasarım-Grafik</option>
							<option>İş Sağlığı Güvenliği</option>
							<option>Makina Operatörü</option>
					</select>
					<br>
				</div>

				<div class="col-3 mt-3">

					<button class="btn btn-info px-5 " type="submit" name="ara"> İŞ ARA  </button>
				</div>

			</div>
		</form>
		<hr style="border : 1px solid #ccc">

		<div class="row ml-5 " >

			<div class="col-2" style="border : 1px solid #E0E0E0" >
				<nav class="nav flex-column">
					<!-- <a href="hesabim.php" class="nav-link">Profil</a>
					<a href="ozgecmisler.php" class="nav-link" style="border-bottom : 1px solid #E0E0E0 ">Özgeçmişler</a> 
					<a href="basvurular.php" class="nav-link">Başvurular</a>
					<a href="kaydedilenler.php" class="nav-link" style="border-bottom : 1px solid #E0E0E0" >Kaydedilenler</a>
					<a href="#" class="nav-link">İncelenen İlanlar</a>
					<a href="#" class="nav-link"  style="border-bottom : 1px solid #E0E0E0">İş Alarmları</a>
					<a href="ayarlar.php" class="nav-link">Ayarlar</a> -->


					<?php include 'yanmenu.php';  ?>	
				</nav> 
			</div>

			<div class="col-8 ml-2" style="border : 1px solid #E0E0E0">
				<div class="row mt-2">
					<div class="col">
						<p class="ml-1  " style="font-size : 25px; color: #808080; " >Hoş Geldin	 <?php echo $_SESSION["ad"]; ?></p>
					</div>
					<div class="col">
						<button class="btn btn-info float-right ml-1" style="padding: 1px 30px;" name="oluştur" type="submit"> 
							<a class="text-white" href="ayarlar.php">Ayarlar</a>
						</button>
					</div>
				</div>


				<div class="row mt-2 ml-2 mr-2" style="border : 1px solid #E0E0E0">
					<div class="col">
						<p class="ml-1" style="font-size: 20px;">Güncel Özgeçmiş</p>
					</div>
					<div class="col">
						<button class="btn btn-info float-right mt-2" style="padding: 1px 30px;" name="oluştur" type="submit"> 
							<a class="text-white" href="ozgecmisler.php">Tümünü Göster</a>
						</button>
					</div>

				</div>
				

				<?php
				$id = $_SESSION["kullanici"];
				$query = "SELECT * FROM ozgecmisler  WHERE uyeid= '".$id."'  LIMIT 1" ;
				if ($result=mysqli_query($baglanti , $query)) {
					while ( $row = mysqli_fetch_assoc($result)) {
						?>
						<div class="row ml-2 mr-2 mt-2" style="border : 1px solid #E0E0E0">
							<div class="col">
								<h5 style="    font-size: 18px; color: #333; margin-bottom: 0; " class="mt-1"> <?php echo $row["baslik"]; ?> </h5>

								<p><?php echo $row["adsoyad"] ; ?></p>
								<p>Yetenekler :  <?php echo $row["yetenekler"] ; ?> 
								<a class="float-right ml-3 text-info" href="ozgecmissil.php?ID=<?php echo $row["id"]?>">Sil</a>	
								<a class="float-right ml-3 text-info" href="">Güncelle</a>
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
