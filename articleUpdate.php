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
    session_start();
     if(!isset($_SESSION['id'])){
         header('Location: login.php');

     };
 
 ?>

    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Read<i>it</i>.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <lul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="articles.php" class="nav-link">Articles</a></li>
                    <li class="nav-item"><a href="categories.php" class="nav-link">Categories</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="p-2 text-dark" href="Auteurs-admin.php">Auteurs</a>
                                <a class="p-2 text-dark" href="category-admin.php">Categories</a>
                                <a class="p-2 text-dark" href="articles-admin.php">Articles</a>
                                <a class="p-2 text-dark" href="commentaire-admin.php">Comments</a>
                                <a class="p-2 text-dark" href="messages-admin.php">Messages</a>
                                <form action="verification.php" method="GET">
                                    <input style="margin:10px" class="nav-item" type="submit" name="logout"
                                        value='Log out'>
                                </form>

                            </div>
                        </div>
                    </li>
                </lul>


            </div>
        </div>
    </nav>

    <?php
     require "conn.php";
    if (isset($_GET['id'])){
       
    $id = $_GET['id'];
    // var_dump($id);
// if (!empty($id)) {
 

    $query = "SELECT * FROM article, auteur,category WHERE article.id_auteur = auteur.id_aut AND article.id_categorie  = category.id_cat AND article.id_article =$id";

    //$affiche = $conn->prepare("SELECT title, contenu,article.image,`date`, auteur.fullname,category.nom FROM article , auteur , category WHERE article.id_auteur = auteur.id AND article.id_category = category.id AND article.id=$id");

$result=$conn->query($query);

$data=$result->fetchAll();
// var_dump($data);
// $id=$data[0]['id'];

$title = $data[0]['title'];
$contenu = $data[0]['contenu'];
$category =$data[0]['name'];
$auteur = $data[0]['fullname'];
$image = $data[0]['image'];


// echo $id;


// }
}

// $id = $_GET['id'];

    if (isset($_POST['submit-update'])) {
        $id = $_GET['id'];
        // image--------------------------
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileError = $_FILES['image']['error'];

        if ($fileError === 0) {
            $fileDestination = 'uploads/' . $fileName;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo "There was an error";
        }

        // image--------------------------

        var_dump($_POST["title"]);

        $title = $_POST["title"];
        $contenu = $_POST["contenu"];
        $date = date("Y-m-d H:i:s");
        $category = $_POST["Category"];
        $auteur = $_POST["Auteur"];

    

   if(!empty($fileName))
    {
    $affiche = $conn->prepare("UPDATE article SET `title`='$title', `image`='$fileName', `date`='$date', `contenu`='$contenu',`id_categorie`='$category',`id_auteur`='$auteur' where id_article=$id ");  
    $affiche->execute();

    }
    
    $affiche = $conn->prepare("UPDATE article SET `title`='$title', `date`='$date', `contenu`='$contenu',`id_categorie`='$category',`id_auteur`='$auteur' where id_article=$id ");
    $affiche->execute();
        header('Location: articles-admin.php');
        
}
    
    ?>

    <div class="container mt-5">
        <h1 style="text-align: center"> Article Update !</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="p-5">
            <div>

                <div class="form-group">
                    <label for="inputState">Auteur</label>
                    <p>ancien auteur: <?php echo $auteur ?></p>
                    <select id="inputState" name="Auteur" class="form-control">
                        <?php

                        require 'conn.php';

                        $stmt = $conn->prepare("SELECT id_aut, fullname FROM auteur");
                        $stmt->execute();
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                        foreach ($stmt->fetchAll() as $k => $v) : ?>
                        <option value="<?php echo  $v['id_aut'] ?>"> <?php echo  $v['fullname'] ?> </option>";


                        <?php endforeach;
                        ?>


                    </select>

                </div>
                <div class="form-group">
                    <label for="inputPassword4">Title</label>
                    <input type="text" value=" <?= $title?> " class="form-control" id="inputPassword4" name="title">
                </div>


                <div class="form-group">
                    <label for="inputPassword4">contenu</label> <br>
                    <textarea cols="100" name="contenu" rows="18"><?php echo  $contenu ?></textarea>
                </div>




                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="inputState">Category</label>
                        <p>ancien category: <?php echo $category ?></p>
                        <select id="inputState" name="Category" class="form-control">

                            <?php
                            require 'conn.php';
                            $stmt = $conn->prepare("SELECT id_cat, name FROM category");
                            $stmt->execute();
                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                            foreach ($stmt->fetchAll() as $k => $v) : ?>
                            <option value="<?php echo  $v['id_cat']; ?>"> <?php echo  $v['name']; ?> </option>";
                            <?php endforeach;
                            ?>
                        </select>


                    </div>
                    <div>
                        <img src="uploads/<?php echo $image?>" alt="thteejjet" style="width:300px">
                    </div>


                    <div class="form-group col-12">
                        <label for="fichier">Image</label>
                        <input type="file" class="form-control-file" value="<?php echo $image?>" name="image"
                            id="fichier">
                    </div>
                </div>


                <button type="submit" name="submit-update" class="btn btn-primary mb-5">Save</button>
        </form>
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


    < <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00" /></svg>
    </>


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