<!DOCTYPE html>
<html lang="en">

<head>
    <title>Readit - Blog</title>
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

<body>

    <?php
    include "conn.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (!empty($id)) {
            $query = "SELECT title, contenu,article.image,`date`, auteur.fullname,category.name FROM article , auteur , category WHERE article.id_auteur = auteur.id_aut AND article.id_categorie  = category.id_cat AND article.id_article=$id";
            $result = $conn->query($query);
            $article = $result->fetchAll();


            // $id=$article[0]['id'];
            $date = $article[0]['date'];
            $title = $article[0]['title'];
            $contenu = $article[0]['contenu'];
            $category = $article[0]['name'];
            $auteur = $article[0]['fullname'];
            $image = $article[0]['image'];
        }
    }
    ?>

    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Read<i>it</i>.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="articles.php" class="nav-link">Articles</a></li>
                    <li class="nav-item"><a href="category.php" class="nav-link">Categories</a></li>
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
                    <h1 class="mb-3 bread">Blog Single</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single
                            <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">



                    <div class="row">

                        <img src="uploads/<?= $image ?>" class="img-fluid pb-5 col-7" style="height: 300px" alt="">
                        <div class=" col-5">
                            <h2 class="mb-3">
                                <?php echo $title ?>
                            </h2>
                            <p class="ml-2">
                                -Date : <?= $date ?>.
                            </p>
                            <p class="ml-2">
                                -Catégorie : <?= $category ?>.
                            </p>
                            <p class="ml-2">
                                -Writer : <?= $auteur ?>.
                            </p>



                        </div>
                        <p class="col-8" style="margin:0 auto; font-size:20px; font-family:medium-content-serif-font">
                            <?= $contenu ?>
                        </p>

                    </div>








                </div>


            </div>

            <!--------------------------------systéme de commentaire/ traitement---------------------------------------->
            <?php
    include "conn.php";

    if (isset($_POST['submit']))
     {
        $id=$_GET['id'];
        $nickmane = $_POST['nickmane'];
        $commentaire = $_POST['commentaire'];
        if ($nickmane&&$commentaire&&$id) 
        {
            $sql = "INSERT into    commentaire (`nickname`, `comment`,`id_article`) values('$nickmane','$commentaire','$id') ";
            $conn->exec($sql);
        }
    } 
   ?>
            <!--------------------------------systéme de commentaire/ formulaire---------------------------------------->

            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" method="POST" class="p-5 bg-light">
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" name="nickmane" class="form-control" id="name">
                    </div>


                    <div class="form-group">
                        <label for="message">Comment</label>
                        <textarea name="commentaire" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                    </div>
                </form>
            </div>

            <!-------------------------les anciennes commentaires--------------------------  -->
            <?php
                 $comm = $conn->prepare("SELECT * FROM commentaire WHERE  id_article = $id");
                $comm->execute([$_GET["id"]]);
                $commentaires = $comm->fetchAll();
            ?>
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Comments</h3>
                <?php foreach ($commentaires as $commentaire) : ?>
                <form action="" mehod="post" class=bg-light">
                    <div class="row border border-primary mb-3">
                        <div class="col-md-2 border-primary ">
                            <img src="anonyme1.jpg" alt="" id="img_comment" style="width: 50%;height:80px;">
                        </div>
                        <div class="col-md-8">
                            <p>
                            <h5> <?= $commentaire['nickname']; ?></h5>
                            </p>
                            <p><?= $commentaire['comment'];?></p>
                        </div>
                        <div class="col-1 mt-4">
                            <!-- <a href="delete_commentaire.php?id=<?php echo $commentaire["id_comment"] ?>&id_article=<?php echo $commentaire["id_article"] ?>&sourcepage=2"
                                type="button" class="btn btn-secondary">supprimer</a> -->
                        </div>
                </form>
            </div>



            <?php endforeach;

        ?>

        </div>


        </div>

        </div>

        </div>
        </div>










    </section> <!-- .section -->

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
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
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
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a>
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
                            <li><a href="#" class="py-1 d-block"><span
                                        class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                            <li><a href="#" class="py-1 d-block"><span
                                        class="ion-ios-arrow-forward mr-3"></span>About</a></li>
                            <li><a href="#" class="py-1 d-block"><span
                                        class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
                            <li><a href="#" class="py-1 d-block"><span
                                        class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
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



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


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