<?php
     include "conn.php";
if ( isset($_POST['submit']) ){
    
    
    /*------------------------------juste Image---------------------------------------- -->*/


    $fileName = $_FILES['Avatar']['name'];
    $fileTmpName = $_FILES['avatar']['tmp_name'];

    $fileError = $_FILES['avatar']['error'];

    $Fullname = $_POST['Fullname'];
    $Email = $_POST['Email'];
    if($fileError === 0){
        $fileDestination = 'uploads/'.$fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
    }else {
        echo "There was an error";
    }   
    
    
    /*------------------------------nom de l'image et les autres données---------------------------------------- -->*/
if ($fileName&&$Email&&$Fullname) {
   
    $sql ="INSERT INTO auteur (`fullname`, `email`, `avatar`) VALUES ('$Fullname','$Email','$fileName')";
    $conn->exec($sql);
   // echo "New record created successfully";
   // echo "Connected successfully";
 }
else echo "Veuillez saisir tous les champs ";
}   
header('Location: auteurs-admin.php');
?>