<?php 


$IPadresi = $_SERVER["REMOTE_ADDR"];
$zamandeğeri = time();
$tarihsaat = date("d.m.y H:i:s" , $zamandeğeri);

function Guvenlik($Deger){
	$BoslukSil			=	trim($Deger);
	$TaglariTemizle		=	strip_tags($BoslukSil);
	$EtkisizYap			=	htmlspecialchars($TaglariTemizle, ENT_QUOTES);
	$Sonuc				=	$EtkisizYap;
	return $Sonuc;
}

function AktivasyonKoduUret(){
	$IlkBesli			=	rand(10000, 99999);
	$IkinciBesli		=	rand(10000, 99999);
	$UcuncuBesli		=	rand(10000, 99999);
	$DorduncuBesli		=	rand(10000, 99999);
	$Kod				=	$IlkBesli . "-" . $IkinciBesli . "-" . $UcuncuBesli . "-" . $DorduncuBesli;
	$Sonuc				=	$Kod;
	return $Sonuc;
}

function emailkontrol($deger){
	
	$email = $deger;

	$link  = mysqli_connect("localhost","root","","isinibul");
	$link -> set_charset("utf8");
	
	$Sonuc=1;
	$sql = "SELECT * FROM uyeler WHERE emailadresi LIKE  '%$email%' ";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_assoc($result);

	if (empty($row["sifre"])) {
		$Sonuc=0;
	}

	return $Sonuc;	
	
}
function emailkontrolisveren($deger){
	
	$email = $deger;

	$link  = mysqli_connect("localhost","root","","isinibul");
	$link -> set_charset("utf8");
	
	$Sonuc=1;
	$sql = "SELECT * FROM isverenkullanıcılar WHERE email LIKE  '%$email%' ";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_assoc($result);

	if (empty($row["sifre"])) {
		$Sonuc=0;
	}

	return $Sonuc;	
	
}

function ilanid($deger){
	$ilanismi = $deger;

	$link  = mysqli_connect("localhost","root","","isinibul");
	$link -> set_charset("utf8");
	

	$sql = "SELECT * FROM isilanları WHERE ilanbaslıgı LIKE  '$%ilanismi%' ";
	$result=mysqli_query($link, $sql);
	$row=mysqli_fetch_assoc($result);

	

	return $row["id"];	
} 




?>