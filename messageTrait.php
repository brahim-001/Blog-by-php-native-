<?php
     include "conn.php";
if ( isset($_POST['submit']) ){

    
    $name=$_POST['name'];

    $email=$_POST['email'];
    $sujet=$_POST['sujet'];
    $message=$_POST['message'];

    
if ($name&&$email&&$sujet&&$message) {
   
    $sql ="INSERT INTO message (`name`, `email`,`sujet`, `message`) VALUES ('$name', '$email', '$sujet', '$message')";
   
 
    $conn->exec($sql);
   // echo "New record created successfully";
   // echo "Connected successfully";
   header('Location: contact.php');
 
}
else echo "Veuillez saisir tous les champs ";
}   
   
?>