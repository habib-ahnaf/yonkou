<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yonkou Profile</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">YONKOU</a></h1>
			<ul>
				<li class="active"><a href="index.html">HOME</a></li>
				<li><a href="about.html">ABOUT</a></li>
				<li><a href="service.html">SERVICE</a></li>
				<li><a href="contact.html">CONTACT</a></li>
			</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>WELCOME TO YONKOU PROFILE</h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Kami bergerak diberbagai sektor seperti toko online, penjualan produk virtual, laundry, dan berita seputar dunia saat ini.</p>
			<p>Tujuan dari berbagai macam pekerjaan ini ialah agar masyarakat bisa memanfaatkan teknologi terkhusunya internet, untuk digunakan lebih bijak dan bermanfaat.</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>OUR SERVICE & WORKS</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-shopping-cart"></i></div>
					<h4>ONLINE SHOP</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-tablet"></i></div>
					<h4>VIRTUAL PRODUCT</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-tshirt"></i></div>
					<h4>LAUNDRY</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-newspaper"></i></div>
					<h4>NEWS</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Yonkou. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>