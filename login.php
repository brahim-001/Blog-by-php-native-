<?php
 include ('verification.php');
 

?>
<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</head>
<style>
body {
    /* background: #67BE4B; */
    /* background: #f200ff; */
    background: -moz-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, #f200ff), color-stop(100%, #ffba42));
    background: -webkit-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: -o-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: -ms-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f200ff', endColorstr='#ffba42', GradientType=1);
    width: 100%;

}

.container {
    width: 400px;
    margin: 0 auto;
    margin-top: 10%;
}


/* Bordered form */
form {
    width: 100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.container h1 {
    /* width: 38%; */
    /* margin: 0 auto; */
    padding: 30px;
    text-align: center;


}

.container img {
    width: 130%;
    margin-top: 50px;
}


/* Full-width inputs */
input[type=text],
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    /* background-color: #53af57; */
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    background: -moz-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: -webkit-gradient(left bottom, right top, color-stop(0%, #f200ff), color-stop(100%, #ffba42));
    background: -webkit-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: -o-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: -ms-linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    background: linear-gradient(45deg, #f200ff 0%, #ffba42 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f200ff', endColorstr='#ffba42', GradientType=1);
}

input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}
</style>

<body>

    <div class="row">
        <div class="col-6">
            <div class="container">
                <img src="https://1.bp.blogspot.com/-oZwO2fbVQqs/Xl9HqDQMT5I/AAAAAAAAIxI/iq-kH0LW0VMJIcVtLqqnE-SnypvdM7ihgCLcBGAsYHQ/s1600/Template%2Bdashboard%2Badmin%2Bbootstrap.png"
                    alt="">
            </div>
        </div>
        <div class=" col-6">

            <div class="container">
                <!-- zone de connexion -->

                <form action="verification.php" method="POST">
                    <h1>Connexion</h1>

                    <label><b>Admin Email</b></label>
                    <input type="text" placeholder="enter your email" name="email" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="enter your password" name="motDePasse" required>

                    <input type="submit" name="submit" id='submit' value=' LOGIN'>
                    <?php
                      if(isset($_GET['erreur'])){
                         $err = $_GET['erreur'];
                         if($err==1 || $err==2)
                        echo "<p style='color:red'>Email or Password not correct</p>";
                         }
                     ?>
                </form>
            </div>

        </div>
    </div>


</body>

</html>