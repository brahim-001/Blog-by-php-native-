<!DOCTYPE html>
<html>

<head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
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
    <div class="container" style="background-color: #cddbe4">
        <form action="" method="POST" class="border-top pt-5">
            <fieldset>
                <legend>Postuler votre commentaire</legend>

                <div class="form-group">
                    <label for="nom">Entrez votre nom</label>
                    <input type="text" class="form-control" name="nickmane" id="nom" placeholder="Pierre GIRAUD">
                </div>
                <div class="form-group">
                    <label for="bio">Commentaire</label>
                    <textarea class="form-control" id="bio" name="commentaire" rows="3"></textarea>
                </div>
                <input type="submit" name="submit" value="Poster" class="btn btn-primary mb-5">
            </fieldset>
        </form>
    </div>
</body>

</html>