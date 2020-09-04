<?php



include "conn.php";

if ( isset($_POST['submit']) ){
    
/*------------------------------juste Image---------------------------------------- -->*/
    $date=date("Y-m-d H:i:s");

    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileError = $_FILES['image']['error'];

    $Auteur = $_POST['Auteur'];
    $Title = $_POST['Title'];
    // $contenu = $_POST['contenu'];
    $contenu = htmlspecialchars($_POST['contenu'], ENT_QUOTES);
    $Category = $_POST['Category'];
     if($fileError === 0){
        $fileDestination = 'uploads/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }   
    
    
    /*------------------------------nom de l'image et les autre données---------------------------------------- -->*/
if ($Title&&$contenu&&$Category&&$Auteur&& $fileName) {
   
    $sql ="INSERT INTO article (`title`, `contenu`,`image`,`date`,`id_categorie`,`id_auteur`) VALUES ('$Title','$contenu','$fileName','$date','$Category','$Auteur')";
    $conn->exec($sql);
   // echo "New record created successfully";
   // echo "Connected successfully";
 
}
else echo "Veuillez saisir tous les champs ";
}   
header('Location: articles-admin.php');
?>