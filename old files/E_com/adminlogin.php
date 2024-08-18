<?php
session_start();
include "db.php";
?>
<html>
    <head>
        <title>Connection</title>
    </head>
 <?php
 session_start(); 
  $user_email = $_POST['mail'];
  $user_password = $_POST['pass'];



  $servername = "localhost";
  $username = "root";
  $password = '';


  try {
    $conn = new PDO("mysql:host=$servername;dbname=ecom_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    
  
    $statement = $conn->prepare("SELECT * FROM  login where user_email = '$user_email' and user_password = '$user_password'");
  
    $statement->execute();  
    $count = $statement->rowCount();  
 if($count > 0)
 {  
      $row = $statement->fetch();
      $_SESSION["id"] = $row["id"];  
      header("Location: user.php");
      exit();
 }
 else
 {
      echo '<script>
      
      alert ("Wrong Data2");
      window.location.replace("index.php");
      
      </script>';  
 }   
    
    //echo('done');
  
  
  
  
  
  
  
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
        
       ?> 
     </body>
  </html>