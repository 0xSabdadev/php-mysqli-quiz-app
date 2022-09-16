<?php
define('BASE_URL', 'php-quiz');
$routes['questions'] = './app/controllers/question.php?n=1';
$routes['add'] = './app/controllers/add.php';
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
    <meta property="og:image" content="./public/img/og-image.png">
    <meta property="og:description"
        content="One of the greatest game is finally back! Prepare yourself and get ready to be part of Uler Tumbuh~! Be there or be square.">
    <!-- open graph ends-->
    <!-- Favicons -->
    <link href="./public/img/icon.png" rel="icon">
    <link href="./public/img/icon.png" rel="apple-touch-icon">
    <!-- css -->
    <link rel="stylesheet"
        href="./public/css/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+HK:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./vendors/animate-css/animate.min.css">
</head>

<body>
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center wow zoomIn" data-wow-delay=".3s">
                    <img src="./public/img/logo-2.png" alt="logo-tedx" width="600" height="400" loading="lazy">
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center ">
                    <a role="button"
                        href="<?php echo $routes['questions'];?>"
                        class="btn btn-success btn-home mt-4 wow fadeInUp" data-wow-delay=".8s">START QUIZ</a> <br>
                    <a role="button" href="" class="btn btn-success btn-home mt-3 wow fadeInUp" data-wow-delay="1.2s"
                        data-bs-toggle="modal" data-bs-target="#aboutModal">DEVELOPERS</a> <br>
                    <a role="button"
                        href="<?php echo $routes['add'];?>"
                        class="btn btn-success btn-home mt-3 mb-5 wow fadeInUp" data-wow-delay="1.6s">ADD QUESTIONS</a>
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

    <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true"
        focus="false">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-glassmorpism">
                <div class="modal-header b-none">
                    <h5 class="modal-title fs-3 text-light wow zoomIn" data-wow-delay=".1s" id="aboutModalLabel">
                        DEVELOPERS</h5>
                </div>
                <div class="modal-body ">
                    <div class="row row-cols-1 row-cols-md-5 g-4">
                        <div class="col">
                            <div class="card h-100 wow zoomIn" data-wow-delay=".3s">
                                <img src="./public/img/1.png" class="card-img-top" alt="img-jay" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">Farid Reza</h5>
                                    <p class="card-text">24060120140075</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-light">Codename : <i>PHP</i></small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 wow zoomIn" data-wow-delay=".5s">
                                <img src="./public/img/2.png" class="card-img-top" alt="img-jess" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">Jason Riskova</h5>
                                    <p class="card-text">24060120120002</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-light">Codename : <i>JAVASCRIPT</i></small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 wow zoomIn" data-wow-delay=".7s">
                                <img src="./public/img/3.png" class="card-img-top" alt="img-nadia" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">Nadiatus Salam</h5>
                                    <p class="card-text">24060120120006</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-light">Codename : <i>C</i></small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 wow zoomIn" data-wow-delay=".9s">
                                <img src="./public/img/4.png" class="card-img-top" alt="img-ilma" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">Ilma Dzakiah</h5>
                                    <p class="card-text">24060120140153</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-light">Codename : <i>PYTHON</i></small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100 wow zoomIn" data-wow-delay="1.1s">
                                <img src="./public/img/5.png" class="card-img-top" alt="img-putri" loading="lazy">
                                <div class="card-body">
                                    <h5 class="card-title">Aulia Putri</h5>
                                    <p class="card-text">24060120130054</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-light">Codename : <i>C++</i></small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer b-none">
                    <button type="button" class="btn text-white" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tutorialModal" tabindex="-1" aria-labelledby="tutorialModalLabel" aria-hidden="true"
        focus="false">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-glassmorpism">
                <div class="modal-header b-none">
                    <h5 class="modal-title fs-3 text-light wow zoomIn" data-wow-delay=".1s" id="tutorialModalLabel">
                        Tutorial</h5>
                </div>
                <div class="modal-body">
                    <div class="row row-cols-1 g-4 ">
                        <div class="col text-center wow zoomIn" data-wow-delay=".6s">
                            <img src="./public/img/key.png" alt="img-key" width="500" height="500" loading="lazy">
                        </div>
                    </div>

                </div>
                <div class="modal-footer b-none">
                    <button type="button" class="btn text-white" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./vendors/wowjs/wow.min.js"></script>
    <script src="./public/js/app.js"></script>
</body>

</html>