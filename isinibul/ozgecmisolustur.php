<?php 
include 'ayar/nav.php';
include ("ayar/connect.php");

if (empty($_SESSION["kullanici"])) {
	include ("uyarilar/girisyapiniz.php");
	die();
}
if (isset($_POST["oluştur"])) {
	
	$uyeid = $_SESSION["kullanici"];
	$isim= mysqli_real_escape_string($baglanti, $_POST["isim"]);
	$email = mysqli_real_escape_string($baglanti, $_POST["email"]);
	$telefon = mysqli_real_escape_string($baglanti, $_POST["telefon"]);
	$adres = mysqli_real_escape_string($baglanti, $_POST["adres"]);
	$cinsiyet = mysqli_real_escape_string($baglanti, $_POST["cinsiyet"]);
	$surucu = mysqli_real_escape_string($baglanti, $_POST["surucu"]);
	$askerlik = mysqli_real_escape_string($baglanti, $_POST["askerlik"]);
	$ozet = mysqli_real_escape_string($baglanti, $_POST["ozetbilgi"]);
	$isdeneyim = mysqli_real_escape_string($baglanti, $_POST["isdeneyim"]);
	$egitim = mysqli_real_escape_string($baglanti, $_POST["egitim"]);
	$yetenek = mysqli_real_escape_string($baglanti, $_POST["yetenek"]);
	$dil = mysqli_real_escape_string($baglanti, $_POST["dil"]);
	$proje = mysqli_real_escape_string($baglanti, $_POST["proje"]);
	$referans = mysqli_real_escape_string($baglanti, $_POST["referans"]);
	$baslik = mysqli_real_escape_string($baglanti, $_POST["ozgecmisbaslik"]);


	$query = "INSERT INTO ozgecmisler (uyeid , adsoyad, baslik , epostadresi,telefon,adres , cinsiyet ,surucu , askerlikdurumu ,ozetbilgi, isdeneyimleri ,egitimbilgileri , yetenekler,yabancidil , projeler , referanslar) 
	VALUES ('".$uyeid."' , '".$isim."','".$baslik."','".$email."', '".$telefon."', '".$adres."' , '".$cinsiyet."' , '".$surucu."' , '".$askerlik."' , 		   '".$ozet."' ,'".$isdeneyim."' , '".$egitim."' ,  '".$yetenek."' , '".$dil."' , '".$proje."' , '".$referans."')";

	if (mysqli_query($baglanti, $query)) {
		include ("uyarilar/ozgecmisbasari.php");
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
						<h5 style="color: #666; font-size: 20px; text-align: left;">Özgeçmiş Başlığı</h5>
					</div>
					<br>
					<div class="form-group col-sm-12 mt-3">
						<input type="text" class="form-control " name="ozgecmisbaslik" placeholder="" >
					</div>

					<div class="col-12">
						<h5 style="color: #666; font-size: 20px; text-align: left;">İletişim Bilgileri</h5>
					</div>
					<br>
					<div class="form-group col-sm-12 mt-3">
						<input type="text" class="form-control " name="isim" placeholder="Adın Soyadın" >
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-6">
						<input type="text" name="email" class="form-control" placeholder=" E-posta">
					</div>
					<div class="form-group col-sm-6">
						<input type="text" name="telefon" class="form-control" placeholder="Telefon">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-sm-12">
						<textarea class="form-control" name="adres" placeholder="Adres" rows="3" ></textarea>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="form-group col-sm-12" style="color: #666; font-size: 20px; text-align: left;">
						<h5>Özel Bilgiler</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-4">

						<label>Cinsiyet</label>
						<select class="form-control" name="cinsiyet">
							<option> Erkek</option>
							<option>Kadın</option>
						</select>
					</div>
					<div class="form-group col-sm-4">
						<label>Sürücü Belgesi</label>
						<input type="text" name="surucu" class="form-control" placeholder="Sürücü Belgesi">
					</div>

					<div class="form-group col-sm-4	">
						<label>Askerlik Durumu</label>
						<select class="form-control" name="askerlik">
							<option> Yapıldı</option>
							<option>Yapılmadı</option>
							<option> Muaf</option>
							<option>Tecilli</option>
						</select>
					</div>

				</div>
				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;"> Ön Yazı</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<textarea class="form-control" name="ozetbilgi" placeholder="" rows="6" ></textarea>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12" style="color: #666; font-size: 20px; text-align: left;">
						<h5>İş Deneyimleri</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<textarea class="form-control" name="isdeneyim" placeholder="" rows="6" ></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Eğitim Bilgileri</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<textarea class="form-control" name="egitim" placeholder="" rows="6" ></textarea>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Yetenekler</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control " name="yetenek" placeholder="" >
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Yabancı Dil</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control " name="dil" placeholder="" >
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Projeler</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control " name="proje" placeholder="" >
					</div>
				</div>

				<div class="row">
					<div class="form-group col-sm-12">
						<h5 class="ozbaslik" style="color: #666; font-size: 20px; text-align: left;">Referans</h5>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control " name="referans" placeholder="" >
					</div>
				</div>

				<div class="form-row" style="margin-top: -8px">
					<div class="col-sm-10">
						<small class="text-muted">
							<a class="text-info" href="#"> Özgeçmiş Olşturma rehberimizi inceleyerek daha etkili özgeçmiş oluşturabilirsin</a> 
						</small>
					</div>
				</div>
				<br>
				<button class="btn btn-info px-5 " name="oluştur" type="submit"> 
					<strong>Özgeçmişi Oluştur</strong>  
				</button>

			</form>
		</div>
		<div class="col-4"></div>
	</div>
	
	<footer>
		<?php include 'ayar/footer.php'; ?> 
	</footer>

</div>
