<?php 
include 'isverenustmenu.php';
include ("connect.php");

if (empty($_SESSION["isveren"])) {
	include ("../uyarilar/girisyapiniz.php");
	die();
}
if (isset($_POST["oluştur"])) {
	
	// tabloda phph kodları ozgeçmişler tablosundan kopyalanıp geldiği için, $post taki name ler yanlış , bu yüzden hata veriyor.  
	
	$sirketid = $_SESSION["isveren"];
	$ilanbaslıgı= mysqli_real_escape_string($baglanti, $_POST["ilanisbaslik"]);
	$isinismi = mysqli_real_escape_string($baglanti, $_POST["isim"]);
	$sirketismi = mysqli_real_escape_string($baglanti, $_POST["sirketismi"]);
	$sehirid = mysqli_real_escape_string($baglanti, $_POST["sehir"]);
	$aranannitelikler = mysqli_real_escape_string($baglanti, $_POST["aranannitelikler"]);
	$istanimi = mysqli_real_escape_string($baglanti, $_POST["istanimi"]);
	$tecrübe = mysqli_real_escape_string($baglanti, $_POST["tecrübe"]);
	
	$askerlikdurumu = mysqli_real_escape_string($baglanti, $_POST["askerlik"]);
	$egitim = mysqli_real_escape_string($baglanti, $_POST["egitimseviyesi"]);
	$firmasektörü = mysqli_real_escape_string($baglanti, $_POST["firmasektörü"]);
	$katogori = mysqli_real_escape_string($baglanti, $_POST["katagori"]);
	$calismasekli = mysqli_real_escape_string($baglanti, $_POST["calismasekli"]);
	$pozisyonseviyesi = mysqli_real_escape_string($baglanti, $_POST["pozisyonseviyesi"]);
	$personelsayisi = mysqli_real_escape_string($baglanti, $_POST["personelsayisi"]);
	


	$query = "INSERT INTO isilanları (durumu , ilanbaslıgı, isinismi , sirketismi,sirketid,sehirid ,aranannitelikler , istanımı ,tecrübe, askerlikdurumu ,egitimseviyesi , firmasektörü , katagori , calısmasekli , pozisyonseviyesi , personelsayısı) 
	VALUES (1 , '".$ilanbaslıgı."','".$isinismi."','".$sirketismi."', '".$sirketid."', '".$sehirid."' , '".$aranannitelikler."' , '".$istanimi."' , '".$tecrübe."' , '".$askerlikdurumu."' ,'".$egitim."' , '".$firmasektörü."' ,  '".$katogori."' , '".$calismasekli."' , '".$pozisyonseviyesi."' , '".$personelsayisi."' )";

	if (mysqli_query($baglanti, $query)) {
		include ("ilanolusturuldu.php");
		header("Refresh: 15;");

	}

}




?>

<div class="container">
	<div class="row mt-3">
		<div class="col-2"></div>
		<br>
		<div class="col-md-8">
			<form method="post">
				<div class="form-row">
					<div class="col-12">
						<h5 style="color: #666; font-size: 20px; text-align: left;">İlan Başlığı</h5>
					</div>
					<br>
					<div class="form-group col-sm-12 mt-3">
						<input type="text" class="form-control " name="ilanisbaslik" placeholder="" >
					</div>

					<div class="col-12">
						<h5 style="color: #666; font-size: 20px; text-align: left;">İlan Bilgileri</h5>
					</div>
					<br>
					<div class="form-group col-sm-12 mt-3">
						<input type="text" class="form-control " name="isim" placeholder="İşin İsmi" >
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-6">
						<input type="text" name="sirketismi" class="form-control" placeholder="Sirket İsmi">
					</div>
					<div class="form-group col-sm-6">
						<select class="form-control ml-3" name="sehir">
							<option >Şehir</option>
							<option class="1" >Adana</option>
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
				</div>
				<div class="row">
					<div class="form-group col-sm-12" style="color: #666; font-size: 20px; text-align: left;">
						<h5> Aranan Nitelikler</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<textarea class="form-control" name="aranannitelikler" placeholder="" rows="6" ></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="form-group col-sm-12" style="color: #666; font-size: 20px; text-align: left;">
						<h5> İş Tanımı</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<textarea class="form-control" name="istanimi" placeholder="" rows="6" ></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12" style="color: #666; font-size: 20px; text-align: left;">
						<h5>Aday Kriterleri</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-3 ml-3">
						<label>Tecrübe</label>
						<select class="form-control" name="tecrübe">
							
							<option >Deneyimli </option>
							<option >Deneyimsiz</option>
						</select>

					</div>

					<div class="form-group col-sm-3	ml-2">
						<label>Askerlik Durumu</label>
						<select class="form-control" name="askerlik">							
							<option> Yapıldı</option>
							<option>Yapılmadı</option>
							<option> Muaf</option>
							<option>Tecilli</option>
						</select>
					</div>
					<div class="form-group col-sm-3	ml-2">
						<label>Eğitim Seviyesi</label>
						<input type="text" name="egitimseviyesi" class="form-control" placeholder="Eğitim Seviyesi">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Pozisyon Bilgileri</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-6">
						<select class="form-control ml-3" name="firmasektörü">
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
					<div class="form-group col-sm-6">
						<select class="form-control ml-3" name="katagori">
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
					</div>
				</div>
				<br>
				<div class="form-row">
					<div class="form-group col-sm-3">
						<select class="form-control ml-3" name="calismasekli">
							<option>Çalışma Şekli</option>
							<option>Yarı Zamanlı</option>
							<option>Tam Zamanlı</option>
							<option>Dönemsel</option>
							<option>Sözleşmeli</option>
							<option>Stajyer</option>
						</select>
					</div>
					<div class="form-group col-sm-3">
						<select class="form-control ml-3" name="pozisyonseviyesi">
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
					<div class="form-group col-sm-4 ml-4">
						<input type="text" class="form-control" name="personelsayisi" placeholder="Personel Sayısı" rows="6" >
					</div>
				</div>

				<br>
				<button class="btn btn-info px-5 " name="oluştur" type="submit"> 
					<strong> İlanı Yayınla</strong>  
				</button>

			</form>
		</div>
		<div class="col-4"></div>
	</div>
	
	<footer>
		<?php include '../ayar/footer.php'; ?> 
	</footer>

</div>




