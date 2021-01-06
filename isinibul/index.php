<?php
session_start();
include ("ayar/connect.php");
if (isset($_POST["ara"])) {
  $sehir = $_POST["sehir"];
  $ktgr = $_POST["katagori"];
  echo $sehir;
  header("Location: isilanlari.php?sehirid=$sehir&katagoriid=$ktgr");
}

if (isset($_POST["isigetir"])) {
  $sehir = "ŞehirYok";
  $frmsktr = $_POST["firmasektörü"];
  $ktgr = $_POST["katagori"];
  $pzn = $_POST["pozisyonseviyesi"];
  header("Location: isilanlari.php?sehirid=$sehir&frmsktrid=$frmsktr&katagoriid=$ktgr&pznid=$pzn");
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <!-- gerekli meta etketleri  -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" src="ayar/fonksiyon.js" language="javascript"></script>

  <title>İşini Bul</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
/*          https://i4.hurimg.com/i/hurriyet/75/1200x675/5ba8d748d3806c2240f2818c.jpg
*/    .hero-image {
  background-image: url("https://i4.hurimg.com/i/hurriyet/75/1200x675/5ba8d748d3806c2240f2818c.jpg");
  background-color: #cccccc;
  height: 125px;
  width: 360px;
  background-position: center;

  background-size: cover;
  position: relative;
}

.hero-image2 {
  background-image: url("https://harmonigd.com.tr/media/filer_public_thumbnails/filer_public/b7/89/b789d565-2386-4f06-9cee-ec6ee781d5ef/turizm.jpg__850x350_q85_crop_subsampling-2.jpg");
  background-color: #cccccc;
  height: 125px;
  width: 360px;
  background-position: center;

  background-size: cover;
  position: relative;
}
.hero-image3 {
  background-image: url("https://i2.cnnturk.com/i/cnnturk/75/800x400/5de10182bf214412f429b06c");
  background-color: #cccccc;
  height: 125px;
  width: 360px;
  background-position: center;

  background-size: cover;
  position: relative;
}
.hero-image4 {
  background-image: url("https://www.horoz.com.tr/Upload_Files/635494117174119039-horoz_lojistik_4.jpg");
  background-color: #cccccc;
  height: 125px;
  width: 360px;
  background-position: center;

  background-size: cover;
  position: relative;
}

.hero-image5 {
  background-image: url("https://i2.wp.com/blog.fikirmod.com.tr/wp-content/uploads/2018/09/Sat%C4%B1%C5%9F-Departman%C4%B1-1.jpg?resize=750%2C501&ssl=1");
  background-color: #cccccc;
  height: 125px;
  width: 360px;
  background-position: center;

  background-size: cover;
  position: relative;
}

.hero-image6 {
  background-image: url("https://www.iienstitu.com/uploads/online-egitim/gorsel-magazacilik-egitimi_2_w380_h300_op.jpeg");
  background-color: #cccccc;
  height: 125px;
  width: 360px;
  background-position: center;

  background-size: cover;
  position: relative;
}

.hero-text {

  position: absolute;
  top: 85%;
  left: 30%;
  transform: translate(-50%, -50%);

}

.hero-text2 {

  position: absolute;
  top: 85%;
  left: 33%;
  transform: translate(-50%, -50%);

}
.hero-text4 {

  position: absolute;
  top: 75%;
  left: 35%;
  transform: translate(-50%, -50%);

}
.hero-text5 {

  position: absolute;
  top: 85%;
  left: 30%;
  transform: translate(-50%, -50%);

}
.hero-text6 {

  position: absolute;
  top: 79%;
  left: 35%;
  transform: translate(-50%, -50%);

}

</style>


</head>
<body>
  <div class="container-fluid">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal lead text-info p-2 pl-5 ml-2  " ><STRONG> İŞİNİ BUL </STRONG><STRONG>.com</STRONG></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark text-muted" href="#">Kariyer Rehberi</a>
        <a class="p-2 text-dark  text-muted" href="isveren/isverenbasvuru.php">İşveren Başvuru</a>
      </nav>
      <?php
      if (empty($_SESSION["kullanici"])) {
       ?>

       <a class="btn btn-info mr-2" href="uyeol.php">Üye Ol</a>
       <a class="btn btn-info mr-2" href="uyegirisi.php">Üye Girişi</a>
       <?php 
     } 
     else{
       ?>
       <a class="btn btn-info mr-2" href="hesabim.php">Hesabım</a>
       <a class="btn btn-info mr-2" href="cikisyap.php">Çıkış Yap</a>
       <?php 
     }
     ?>
     <a class="btn btn-info  mr-2" href="isveren/isverengirisi.php">İşveren</a>
     <a class="btn btn-secondary mr-5" href="#">İş İlanı Yayınla</a>
   </div>

   <div class="row bg-info pl-5 p-2 ">
    <div class="col-12 ">
      <h1 class="baslik pl-4 ">Senin için burda yüzlerce ilan var !</h1>
    </div>

  </div>
  <form method="post">
    <div class="row bg-info pl-5">
      <div class="col-2">
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

      <div class="col-3 ">
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

      <div class="col-3 ">

        <button class="btn btn-secondary px-5 " type="submit" name="ara"> İŞ ARA  </button>
      </div>
      <br><br><br><br>
    </div>
  </form>
</div>

<div class="comtainer-fluid">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-3  mr-2">

      <div class="hero-image mt-4">
       <div class="hero-text">
        <a style="text-decoration: none" href="isilanlari.php?sehirid=Şehir&katagoriid=Eğitim"><h3 class="text-white" >Eğitim İş İlanları</h3></a>
      </div> 
    </div>

  </div>
  <div class="col-3 ml-3 mr-4">
    <div class="hero-image2 mt-4">
     <div class="hero-text2">
      <a style="text-decoration: none" href="isilanlari.php?sehirid=Şehir&katagoriid=Turuzim-Otelcilik"><h3 class="text-white" >Turuzim İş İlanları</h3></a>
    </div> 
  </div>
</div>
<div class="col-3">
 <div class="hero-image3 mt-4">
   <div class="hero-text">
    <a style="text-decoration: none" href="isilanlari.php?sehirid=Şehir&katagoriid=Sağlık"><h3 class="text-white" >Sağlık İş İlanları</h3></a>
  </div> 
</div>
</div>
</div>

<div class="row">
  <div class="col-1"></div>
  <div class="col-3  mr-2">

    <div class="hero-image4 mt-4">
     <div class="hero-text4">
      <a style="text-decoration: none" href="isilanlari.php?sehirid=Şehir&katagoriid=Lojistik-Depo"><h3 class="text-white" >Lojistik-Depo İş İlanları</h3></a>
    </div> 
  </div>

</div>
<div class="col-3 ml-3 mr-4">
  <div class="hero-image5 mt-4">
   <div class="hero-text5">
    <a style="text-decoration: none" href="isilanlari.php?sehirid=Şehir&katagoriid=Satış"><h3 class="text-white" >Satış İş İlanları</h3></a>
  </div> 
</div>
</div>
<div class="col-3">
 <div class="hero-image6 mt-4">
   <div class="hero-text6">
    <a style="text-decoration: none" href="isilanlari.php?sehirid=Şehir&katagoriid=Mağazacılık"><h3 class="text-white" >Mağazacılık İş İlanları</h3></a>
  </div> 
</div>
</div>
</div>
<br><br>


</div>
<div class="jumbotron">
  <div class="container">
    <form method="post">
      <div class="row">
        <h5 style="background-image: linear-gradient(270deg,#66469c 0%,#274d9e 77%,#274d9e 100%); -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; font-size: 26px;
        font-weight: 600;
        display: inline-block;
        opacity: .8; " class="ml-5">İş Bulma Makinesi</h5>
      </div>
      <p style=" line-height: 24px;opacity: .7;color: #000;font-size: 17px;font-weight: 600;" class="pl-4 mt-1 ml-2">Aşağıdaki filtreleri  kullanarak istediğin iş kriterlerini seç, en güzel işleri sana getirelim
        </p>
      <div class="row pl-3 mt-4">
        <div class="col-2 ml-3">
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

        </div>

        <div class="col-2 ">
          <select class="form-control  " name="firmasektörü" >
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
          <br>
        </div>
        <div class="col-2">
          <select class="form-control" name="pozisyonseviyesi" >
                <option>Pozisyon</option>
                <option>Eleman</option>
                <option>Uzman</option>
                <option>Uzman Yardımcısı</option>
                <option>İşçi </option>
                <option>Şef-Amir</option>
                <option>Yeni Mezun</option>
                <option>Üst Düzey Yönetici </option>
              </select>
        </div>

        <div class="col-3 ">

          <button class="btn px-5 ml-2" style="background-image: linear-gradient(270deg,#66469c 0%,#274d9e 77%,#274d9e 100%);
                  opacity: .8;  color: #fff;" type="submit" name="isigetir"> İŞ GETİR  </button>
        </div>
        <br><br><br><br>
      </div>
    </form>
    
  </div>
</div>

<footer>
  <?php include 'ayar/footer.php'; ?> 
</footer>

</body>
</html>