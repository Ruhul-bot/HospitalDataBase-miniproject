<?php
session_start();
if(!isset($_SESSION['id'])){
   header("Location: index.php");
   exit();
}
?>


<html>
 <head>
     <title>
         Thank you
     </title>
     <style>
     body {background-color: powderblue;}
     h1 {color: Black;}
     </style>
 </head>   
 <body>
     <center>
     <?php
        echo "Thank You For Visiting us";
    ?>
    </center>
 </body>
</html>