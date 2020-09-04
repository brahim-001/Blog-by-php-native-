<?php
// session_start();
include "conn.php";

if (isset($_GET['logout'])) {
   
   session_start();
   session_destroy();

   Header("Location: login.php");
}

   //Logout


    if(isset($_POST['submit']))
    {
       
      $email = $_POST['email']; 
      $pass = $_POST['motDePasse'];

      login($email, $pass, $conn);
   }

   function login($email, $pass, $conn)
{
    session_start();
    $req = $conn->prepare("select * from dataadmin where email=?");

    $req->execute([$email]);
    $user = $req->fetch();

    
   
    if ($user) {
        if (password_verify($pass, $user['adminPassword'])) {

            $_SESSION['name'] = $user['name'];
            $_SESSION['id'] = $user['id'];

            echo "yes";

            header('Location: articles-admin.php');

           
        } else {
            // $_SESSION['error'] = 'password invalid';
            header('Location: login.php?erreur=1'); 
         
        }
    } else {

      header('Location: login.php?erreur=1'); 

      // $_SESSION['error'] = 'Email not found';
      // header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
      // $pass = password_hash($pass, PASSWORD_DEFAULT);
      // $sql = "INSERT INTO dataadmin (email, adminPassword) VALUES ('$email', '$pass')";
      // $req = $conn->prepare($sql);
      // $req->execute();
    }
}
?>