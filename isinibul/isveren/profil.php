<?php 
include 'isverenustmenu.php';
include("connect.php");

$id = $_SESSION["isveren"];
$query= "SELECT * FROM isverenkullanıcılar  WHERE id= '".$id."'  " ;
$result=mysqli_query($baglanti , $query);
$row = mysqli_fetch_assoc($result);
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
		<div class="row">
			<div class="col-12">
				<h4 class="mt-4" style="color: #333;font-size: 24px;  font-size: 1.5rem;"> <?php echo $row["sirketismi"] ?></h4>
			</div>
			
		</div>
		<hr>
		<div class="row mt-2">
			<div class="col-4">
				<div class="row">
					<div class="col-2">
						<p > Sektör: </p>
					</div>
					<div class="col-8">
						<p style=" color: #666;"><?php echo $row["sektor"] ?></p>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="row">
					<div class="col-4">
						<p > Kuruluş Yılı: </p>
					</div>
					<div class="col-2">
						<p style=" color: #666;"><?php echo $row["kurulusyili"] ?></p>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="row">
					<div class="col-4">
						<p > Web Sitesi: </p>
					</div>
					<div class="col-2">
						<a href="<?php echo $row["websitesi"] ?>">Tıklayın</a>
						
					</div>
				</div>
			</div>
			
		</div>
		<hr>
		<div class="row">

			<div class="col-10">
				<h5 class="" style="color: #333;font-size: 10px;  font-size: 1.5rem;"> Hakkında</h5>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row mt-2">

			<div class="col-10">
				<p style="font-size: .950rem;"> <?php echo $row["hakkında"] ?></p>
			</div>


		</div>
		<div class="row">

			<div class="col-10">
				<h5 class="" style="color: #333;font-size: 10px;  font-size: 1.5rem;"> Misyon</h5>
			</div>
			<div class="col-1"></div>
		</div>
		<div class="row mt-2">

			<div class="col-10">
				<p style="font-size: .950rem;"> <?php echo $row["vizyonmisyon"] ?></p>
			</div>


		</div>
	</div>

	<footer>
		<?php include '../ayar/footer.php'; ?> 
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>