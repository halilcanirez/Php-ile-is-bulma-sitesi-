<?php
include 'ayar/nav.php'; 	
include ("ayar/connect.php");

$ktgr = $_GET["katagoriid"];
$sehir = $_GET["sehirid"];

if ($sehir=="ŞehirYok") {
	$katagori = $_GET["katagoriid"];
	$firmasektörü = $_GET["frmsktrid"];
	$pozisyonseviyesi = $_GET["pznid"];

	$query = "SELECT * FROM isilanları";
	
	
	$count=0;

	if ($firmasektörü!="Firma Sektörü") {
		$wheresktr="WHERE firmasektörü LIKE '%$firmasektörü%'";
		$query.=" ".$wheresktr;

		$count=$count+1;

	}

	if ($katagori!="Katagori") {
		if ($count>0) {
			$wheresktr="AND katagori LIKE '%$katagori%'";
			$query.=" ".$wheresktr;

			$count=$count+1; 
		}
		else{
			$wheresktr="WHERE katagori LIKE '%$katagori%'";
			$query.=" ".$wheresktr;

			$count=$count+1;
		}
		
	}

	if ($pozisyonseviyesi!="Pozisyon") {
		if ($count>0) {
			$wheresktr="AND pozisyonseviyesi LIKE '%$pozisyonseviyesi%'";
			$query.=" ".$wheresktr;

			
		}
		else{
			$wheresktr="WHERE pozisyonseviyesi LIKE '%$pozisyonseviyesi%'";
			$query.=" ".$wheresktr;

			
		}
		
	}


	echo $query;
}

else{
	if ($ktgr=="Katagori" && $sehir=="Şehir" ) {
	$query = "SELECT * FROM isilanları"; //$query = "SELECT * FROM isilanları WHERE katagori LIKE '%$ktgr%' AND sehirid= ".$sehir;
}
else if ($ktgr=="Katagori" && $sehir!="Şehir" ) {
	$query = "SELECT * FROM isilanları WHERE sehirid= ".$sehir;
}
else if ($ktgr!="Katagori" && $sehir=="Şehir") {
	$query = "SELECT * FROM isilanları WHERE katagori LIKE '%$ktgr%'  ";
}
else{
	$query = "SELECT * FROM isilanları WHERE katagori LIKE '%$ktgr%' AND sehirid= ".$sehir;

}
}





if (isset($_POST["ara"])) {
	$query = "SELECT * FROM isilanları";
	
	$sehir = $_POST["sehir"];
	$katagori = $_POST["katagori"];
	$firmasektörü = $_POST["firmasektörü"];
	$calismasekli = $_POST["calismasekli"];
	$pozisyonseviyesi = $_POST["pozisyonseviyesi"];
	$sayı=0;
	if ($firmasektörü!="Firma Sektörü") {
		$wheresktr="WHERE firmasektörü LIKE '%$firmasektörü%'";
		$query.=" ".$wheresktr;

		$sayı=$sayı+1;

	}

	if ($katagori!="Katagori") {
		if ($sayı>0) {
			$wheresktr="AND katagori LIKE '%$katagori%'";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1; 
		}
		else{
			$wheresktr="WHERE katagori LIKE '%$katagori%'";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1;
		}
		
	}

	if ($sehir!="Şehir") {
		if ($sayı>0) {
			$wheresktr=" AND sehirid = '".$sehir."' ";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1;
		}
		else{
			$wheresktr=" WHERE sehirid = '".$sehir."' ";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1;
		}
		
	}

	if ($calismasekli!="Çalışma Şekli") {

		if ($sayı>0) {
			$wheresktr="AND calısmasekli LIKE '%$calismasekli%'";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1; 
		}
		else{
			$wheresktr="WHERE calısmasekli LIKE '%$calismasekli%'";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1;
		}
		
	}

	if ($pozisyonseviyesi!="Pozisyon Seviyesi") {
		if ($sayı>0) {
			$wheresktr="AND pozisyonseviyesi LIKE '%$pozisyonseviyesi%'";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1;
		}
		else{
			$wheresktr="WHERE pozisyonseviyesi LIKE '%$pozisyonseviyesi%'";
			$query.=" ".$wheresktr;

			$sayı=$sayı+1;
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




	<div class="container-fluid">

		<div class="row mt-5">


			<div class="col-2 " style="margin: 0px 60px;">
				<form method="post">

					<div class="row ml-2">
						<h5 class="text-info ml-3 mt-1">Seçenekler </h5>

					</div>
					<hr class="ml-3">
					<div class="form-row " >
						<div class="form-group col-sm-12 " >
							<select class="form-control ml-3 "  name="sehir">
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
							</select  >
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<select class="form-control ml-3" name="katagori" >
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
						</div>                             <!-- style="padding: 0px 115px; -->
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<select class="form-control ml-3 " name="firmasektörü" >
								<option >Firma Sektörü</option>
								<option >Eğitim</option>
								<option >Sağlık-Tıp</option>
								<option >Üretim-Endistüriyel Ürünler</option>
								<option >Turuzim-Otelcilik</option>
								<option >Danışmanlık Hizmetleri</option>
								<option >Perakande</option>
								<option >Telekominasyon</option>
								<option >Yapı İnşaat</option>
								<option >Hizzmet</option>
								<option>Tekstil</option>
								<option>Çağrı Merkezi Hizmetleri</option>
								<option>Gıda</option>
								<option>Lojistik Taşımacılık</option>
								<option>Otomotiv</option>
								<option>Bilişim-İnternet</option>
								<option>Elektrik Elektronik</option>
								<option>Diğer</option>
								<option>Emlak Gayrimenku</option>
								<option>Enerji</option>
								<option>Finans-Ekonomi</option>
								<option>Mühendislik Hizmetleri</option>
								<option>Metal-Demir-Çelik</option>
								<option>Kozmetik</option>
								<option>İthalat-Ticaret</option>
								<option>Kimya</option>
								<option>Güvenlik</option>
								<option>Reklma-Tanıtım</option>
								<option>Mobilya Aksesuar</option>
								<option>Restaurant Cafe Bar</option>
								<option>Eğlence</option>
								<option>Hizmet</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-12">
							<select class="form-control ml-3" name="calismasekli" ">
								<option>Çalışma Şekli</option>
								<option>Yarı Zamanlı</option>
								<option>Tam Zamanlı</option>
								<option>Dönemsel</option>
								<option>Sözleşmeli</option>
								<option>Stajyer</option>
							</select>
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-sm-12">
							<select class="form-control ml-3" name="pozisyonseviyesi" >
								<option>Pozisyon Seviyesi</option>
								<option>Eleman</option>
								<option>Uzman</option>
								<option>Uzman Yardımcısı</option>
								<option>İşçi </option>
								<option>Şef-Amir</option>
								<option>Yeni Mezun</option>
								<option>Üst Düzey Yönetici </option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">					
							<button class="btn btn-info ml-3 px-5 mx-5" name="ara" type="submit"  > Ara </button>
						</div>
					</div>

					


				</form>
			</div>
			<div class="col-6">
				<div class="row">
					<h5 class="text-info ml-3 mt-1">İlanlar</h5>
				</div>
				<hr>
				<?php 
				$result=mysqli_query($baglanti , $query); 
				$row = mysqli_fetch_assoc($result);	

				if ($result=mysqli_query($baglanti , $query)) {
					while ( $row = mysqli_fetch_assoc($result)) {  
						?>
						<div class="row mt-2" >           <!--  style="border : 1px solid #E0E0E0" -->
							<div class="col">

								<a style="    font-size: 18px; color: #333; margin-bottom: 0; " href="isilanıgöster.php?ID=<?php echo $row["id"]?>" target="_blank" > <?php echo $row["isinismi"]; ?></a>	



								<a style="font-size: 15px; color: #333; margin-bottom: 0; background-color: transparent; "  href="firmaprofili.php?ID=<?php echo $row["sirketid"]?>" target="_blank" ><p><?php echo $row["sirketismi"] ; ?></p> </a> 

								<p style="font: 13px 'roboto';color: #999; word-break: break-word;"><?php echo $row["ulkesehir"] ; ?></p>
								<hr>	
							</div>



						</div>

						<?php 
					}}
					?>
				</div>
			</div>



		</div>

		<footer>
			<?php include 'ayar/footer.php'; ?> 
		</footer>




		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
	</html>