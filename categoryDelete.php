<?php
include "conn.php" ;


if (isset($_GET['id'])){
    $id = $_GET['id'];
    echo $id;
    $sql="DELETE FROM category WHERE  id_cat=$id" ;
    $affiche = $conn->prepare($sql);
    $affiche->execute();
}

else{
    echo "there are an error";
}

header('Location: categories-admin.php');
   ?>