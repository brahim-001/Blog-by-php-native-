<?php
     include "conn.php";
if ( isset($_POST['submit']) ){
    $name=$_POST['nom'];//htmlent  ities?
    
    /*------------------------------Image---------------------------------------- -->*/
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileError = $_FILES['fileToUpload']['error'];
    
    if($fileError === 0){
        $fileDestination = 'uploads/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }   
    
    /*------------------------------Image---------------------------------------- -->*/
if ($name&&$fileName) {
   
    $sql ="INSERT INTO category (`name`, `image`) VALUES ('$name', '$fileName')";
   
 
    $conn->exec($sql);
   // echo "New record created successfully";
   // echo "Connected successfully";
   header('Location: categories-admin.php');
 
}
else echo "Veuillez saisir tous les champs ";
}   
   
?>