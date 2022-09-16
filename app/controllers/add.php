<?php include '../../connection/database.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $choices = array();
    $choices[1] = $_POST['choice1'];
    $choices[2] = $_POST['choice2'];
    $choices[3] = $_POST['choice3'];
    $choices[4] = $_POST['choice4'];
    $choices[5] = $_POST['choice5'];
    $correct_answer = $_POST['correct_answer'];
    //Question query
    $query = "INSERT INTO `questions` (question_number, text)
		VALUES('$question_number', '$question_text')";
    $insert_row = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
    if ($insert_row) {
        foreach ($choices as $choice => $value) {
            if ($value != '') {
                if ($correct_answer == $choice) {
                    $is_correct = 1;
                } else {
                    $is_correct = 0;
                }
                //choice query
                $query = $query = "INSERT INTO `choices` (question_number, is_correct, text)
					VALUES('$question_number', '$is_correct', '$value')";
                $insert_row = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
                if ($insert_row) {
                    continue;
                } else {
                    die($mysqli_error.__LINE__);
                }
            }
        }
        $msg = "Question added successfully!";
    }
}
//get total questions
$query = "SELECT * FROM questions";
//get results
$results = mysqli_query($connection, $query) or die($mysqli_error.__LINE__);
$total = $results->num_rows;
$next = $total + 1;
// routes
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
					<img src="../../public/img/logo-2.png" alt="logo-quiz" width="300" height="150" loading="lazy">
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-left">
					<div class="card bg-glassmorpism-2 wow zoomIn" data-wow-delay=".6s" style="width: 100%;">
						<div class="card-body ">
							<div class="container">
								<a role="button" class="btn btn-danger badge"
									href="<?php echo $routes['home'];?>">BACK
									HOME</a> <br>
								<h2 class="adumu wow fadeIn" data-wow-delay=".9s">Add a question...</h2>
								<?php if (isset($msg)) {
								    echo "<div class='alert alert-success' role='alert'>".$msg."</div>";
								} ?>
								<form method="post" action="add.php">
									<div class="row mt-4">
										<div class="add-area col-6 text-center">
											<p class="adumu wow fadeIn" data-wow-delay="1.1s">
												<label>Question Number</label> <br>
												<input class="text-center" type="number" name="question_number"
													value="<?php echo $next;  ?>">
											</p>
											<p class="adumu wow fadeIn" data-wow-delay="1.4s">
												<label>Question</label><br>
												<input class="text-center" type="text" name="question_text">
											</p>
											<p class="adumu wow fadeIn" data-wow-delay="1.7s">
												<label>Choice #1</label><br>
												<input class="text-center" type="text" name="choice1">
											</p>
											<p class="adumu wow fadeIn" data-wow-delay="2s">
												<label>Choice #2</label><br>
												<input class="text-center" type="text" name="choice2">
											</p>
										</div>
										<div class="add-area col-6 text-center">
											<p class="adumu wow fadeIn" data-wow-delay="2.3s">
												<label>Choice #3</label><br>
												<input class="text-center" type="text" name="choice3">
											</p>
											<p class="adumu wow fadeIn" data-wow-delay="2.6s">
												<label>Choice #4</label><br>
												<input class="text-center" type="text" name="choice4">
											</p>
											<p class="adumu wow fadeIn" data-wow-delay="2.9s">
												<label>Choice #5</label><br>
												<input class="text-center" type="text" name="choice5">
											</p>
											<p class="adumu wow fadeIn" data-wow-delay="3.2s">
												<label>Correct answer</label><br>
												<input class="text-center" type="text" name="correct_answer">
											</p>
											<p class="adumu submit-add wow fadeIn" data-wow-delay="3.5s">
												<input type="submit" name="submit" value="Submit"
													class="ps-4 pe-4 bg-warning text-light">
											</p>
										</div>
									</div>
								</form>
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