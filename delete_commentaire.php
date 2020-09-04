<?php
include "conn.php" ;
$idcomm=$_GET['id'];
$sourcepage=$_GET['sourcepage'];

if($sourcepage == 1){
    // $idArticle=$_GET['idArticle'];
    $sql="DELETE FROM commentaire WHERE  id_comment=$idcomm" ;
    $affiche = $conn->prepare($sql);
    $affiche->execute();
    
    $location="commentaire-admin.php";
    header("location: $location");
} elseif($sourcepage == 2) {
    $id_article=$_GET['id_article'];
    $sql="DELETE FROM commentaire WHERE  id_comment=$idcomm" ;
    $affiche = $conn->prepare($sql);
    $affiche->execute();
    $location="blog-single.php?id=$id_article";
    header("location: $location");
}


?>