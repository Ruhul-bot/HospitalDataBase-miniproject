<?php
session_start();
if(!isset($_SESSION['id'])){
   header("Location: index.php");
   exit();
}
?>


<html>
    <head>
        <title>LOGIN</title>
    </head>
    <?php

      $name = $_POST['fname'];
      $phone_no = $_POST['phone_no'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $gender = $_POST['gen'];
      $reli = $_POST['reli'];



      $servername = "localhost";
      $username = "root";
      $password = "";


      try {
        $conn = new PDO("mysql:host=$servername;dbname=ecom", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
        
      
        $stmt = $conn->prepare("INSERT INTO user_info  (fname, phone_no, mail, address, gen, reli) values ('$name', '$phone_no', '$email', '$address', '$gender', '$reli' )");
      
        $stmt->execute();
        echo('done');
      
      
      
      
      
      
      
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      
      header('Location: thank.php');
      exit();
            
           ?> 
         </body>
      </html>