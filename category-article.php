<!DOCTYPE html>
<html lang="en">

<head>
    <title>Readit - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">



    <!--..............code php..........-->
    <?php
    
    include "conn.php";
    $affiche = $conn->prepare("SELECT * from category ");
    $affiche->execute();

    $resultat = $affiche->setFetchMode(PDO::FETCH_ASSOC);
    ?>
    <!--..............code php..........-->

    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Read<i>it</i>.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="articles.php" class="nav-link">Articles</a></li>
                    <li class="nav-item active"><a href="category.php" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Articles Category</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="articles.php">Home
                                <i class="ion-ios-arrow-forward"></i></a></span> <span>Categorie-Articles <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>



    <!--..............code php..........-->
    <?php
    // include "header.php";
    include "conn.php";
    $id = $_GET["id"];
    ?>


    <?php
    $stmt = $conn->prepare("SELECT * from article where id_categorie=$id");
    $stmt->execute();
    $resultat = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    ?>

    <!--..............code php..........-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">

                <?php
                    $affiche = $conn->prepare("SELECT * from category where id_cat=$id");
                    $affiche->execute();
                    foreach ($affiche->fetchAll() as $key => $article) :
                    ?>
                <h1 style="padding-top: 15%; padding-left: 6%; color: #626365;font-family: cursive; ">
                    Catégorie : <?= $article["name"] ?>
                </h1>

            </div>
            <div class="col-6">
                <img src="uploads/<?= $article["image"] ?>" alt="image"
                    style="width:500px; height:280px;margin-bottom:13%">
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex">
            <?php
              foreach ($stmt->fetchAll() as $key => $resultat) :
            ?>

            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.php?id=<?php echo $resultat["id_article"]?>" class="block-20"
                        style="background-image: url('uploads/<?= $resultat["image"]?>');">
                    </a>
                    <div class="text p-4 float-right d-block">
                        <div class="topper d-flex align-items-center">
                            <div class="one py-2 pl-3 pr-1 align-self-stretch">

                                <span class="mos"><?= $resultat["date"]?></span>
                            </div>
                        </div>
                        <h3 class="heading mb-3"><?php echo $resultat["title"] ?></h3>
                        <p><?php echo substr($resultat["contenu"], 0, 100) ?>...</p>
                        <p>
                            <a href="blog-single.php?id=<?php echo $resultat["id_article"]?>" class="btn-custom">
                                <span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>







        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00" />
            </svg>
        </div>
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">latest News</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"></span> Oct. 16, 2019</a></div>
                                    <div><a href="#"></span> Admin</a></div>
                                    <div><a href="#"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        Categories</a>
                                </h3>
                                <div class="meta">
                                    <div><a href="#"></span> Oct. 16, 2019</a></div>
                                    <div><a href="#"></span> Admin</a></div>
                                    <div><a href="#"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li class="nav-item active"><a href="articles.php" class="nav-link">Articles</a></li>
                            <li class="nav-item"><a href="category.php" class="nav-link">Categories</a></li>
                            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>