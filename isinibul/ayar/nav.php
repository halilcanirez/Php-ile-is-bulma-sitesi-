<?php 
session_start();

?>


<!doctype html>
<html lang="en">
<head>                                             <!-- <STRONG> İŞİNİ BUL </STRONG><STRONG>.com</STRONG> -->
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<div class="container-fluid">
		<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
			<!--  -->
			<h5 class="my-0 mr-md-auto font-weight-normal lead  p-2 pl-5 ml-2  "> <a class="text-decoration-none text-info" href="index.php"><STRONG> İŞİNİ BUL </STRONG><STRONG>.com</STRONG></a></h5>
			<nav class="my-2 my-md-0 mr-md-3">
				<a class="p-2 text-dark text-muted" href="#">Kariyer Rehberi</a>
				<a class="p-2 text-dark  text-muted" href="#">İşveren Başvuru</a>
			</nav>
			<?php
			if (empty($_SESSION["kullanici"])) {
				?>

				<a class="btn btn-info mr-2" href="uyeol.php">Üye Ol</a>
				<a class="btn btn-info mr-2" href="uyegirisi.php">Üye Girişi</a>
				<a class="btn btn-info  mr-2" href="#">İşveren</a>
				<a class="btn btn-secondary mr-5" href="#">İş İlanı Yayınla</a>
				<?php 
			} 
			else{
				?>
				<a class="btn btn-info mr-2" href="hesabim.php">Hesabım</a>
				<a class="btn btn-info mr-5" href="cikisyap.php">Çıkış Yap</a>
				<?php 
			}
			?>
			
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


