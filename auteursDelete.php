<?php
include "conn.php" ;


if (isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $sql="DELETE FROM auteur WHERE  id_aut=$id" ;
    $affiche = $conn->prepare($sql);
    $affiche->execute();
}

else{
    echo "there are an error";
}

header('Location: Auteurs-admin.php');
   ?>