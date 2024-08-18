<?php 
session_start();
?>

<html>
 <head>
     <title>
         Welcome
     </title>
     <style>
     body {background-color: powderblue;}
     h1 {color: Black;}
     </style>
 </head>   
 <body>
     <?php
        echo "Welcome to ecom";
        echo $_SESSION['id'];
    ?>
    <br>
    <a href="logout.php">Log Out</a>
 </body>
</html>