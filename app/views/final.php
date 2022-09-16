<?php session_start(); ?>
<?php
$routes['questions'] = '../controllers/question.php?n=1';
$routes['home'] = '../../index.php';
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.cdnfonts.com/css/silkscreen" rel="stylesheet">
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>KUIS TUMBUH</title>
	<meta content="Kuis Tumbuh" name="title">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="KuisTumbuh,KuisTUMBUH,Universitas Diponegoro,hackaton,revealthesun,undip,HMIF,HMIF2022"
		name="keywords">
	<meta
		content="One of the greatest game is finally back! Prepare yourself and get ready to be part of Uler Tumbuh~! Be there or be square."
		name="description">
	<!-- cannonical -->
	<link rel="canonical" hreflang="id" href="https://kuis-tumbuh.netlify.com/index.html">
	<link rel="alternate" hreflang="en" href="https://kuis-tumbuh.netlify.com/index.html">
	<link rel="alternate" hreflang="x-default" href="https://kuis-tumbuh.netlify.com/index.html">
	<!-- cannonical ends -->
	<!-- open graph -->
	<meta property="og:title" content="ULER TUMBUH V.0.0.1">
	<meta property="og:url" content="https://kuis-tumbuh.netlify.com/index.html">
	<meta property="og:image" content="../../public/img/og-image.png">
	<meta property="og:description"
		content="One of the greatest game is finally back! Prepare yourself and get ready to be part of Uler Tumbuh~! Be there or be square.">
	<!-- open graph ends-->
	<!-- Favicons -->
	<link href="../../public/img/icon.png" rel="icon">
	<link href="../../public/img/icon.png" rel="apple-touch-icon">
	<!-- css -->
	<link rel="stylesheet"
		href="../../public/css/style.css?v=<?php echo time(); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+HK:wght@200&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../../vendors/animate-css/animate.min.css">
</head>

<body>
	<section id="hero">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center wow zoomIn" data-wow-delay=".3s">
					<img src="../../public/img/logo-2.png" alt="logo-tedx" width="300" height="150" loading="lazy">
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-left">
					<div class="card bg-glassmorpism-2 wow zoomIn" data-wow-delay=".6s" style="width: 100%;">
						<div class="card-body ">
							<div class="row">
								<div class="col-12 text-center">
									<h2 class="adumu">You are done!</h2>
									<p class=" fs-4 adumu">You completed the test</p>
									<p class="fs-4 adumu">Final score:
									</p>
									<p class="fs-1 adumu text-danger"><?php echo $_SESSION['score']; ?>
									</p>
									<a role="button" class="btn btn-success"
										href="<?php echo $routes['questions'];?>"
										class="start">START AGAIN</a>
									<a role="button" class="btn btn-danger"
										href="<?php echo $routes['home'];?>"
										class="add">HOME</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<footer id="footer">
		<div class="container text-center wow fadeIn" data-wow-delay="2s">
			<div class="copyright text-light">
				&copy;2022 All Rights Reserved. <strong><span style="color: #E62B1E">v.0.1.1 BETA</span></strong>
			</div>
			<div class="credits text-light">
				Created by <strong><span href="#" style="color: #E62B1E;text-decoration: none;"> Kelompok 6
						PBP-A</span></strong>
			</div>
		</div>
	</footer>
	<div id="preloader"></div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="../../vendors/wowjs/wow.min.js"></script>
	<script src="../../public/js/app.js"></script>
</body>

</html>
<?php session_unset();
