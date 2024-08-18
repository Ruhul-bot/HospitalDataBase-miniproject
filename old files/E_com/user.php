<?php
session_start();
if(!isset($_SESSION['id'])){
   header("Location: index.php");
   exit();
}
?>
<html>
   <head>
     <title>Form</title>
     <style>
        #myDiv {
           border: thick solid blue;
           width: 500px;
           margin: 0 auto;
        }
     body {background-color: powderblue;}
     h1 {color: Black;}
     </style>
   </head>

<body >
<div id="myDiv">
  
   <center>
      <h1>Registration Form</h1>
   <form action="user_insert.php" method="post">

         <label for="fname">Name:</label><br>
         <input type="text" id="fname" name="fname"><br>

         <label for="phone_no">Phone no:</label><br>
         <input type="number" id="phone_no" name="phone_no"><br>


         <label for="email">Email:</label><br>
         <input type="mail" id="email" name="email"><br>

         <label for="address">Address:</label><br>
         <textarea id="address" name="address"></textarea><br>

         <br><label for="gen">Gender:</label>

          
         <input type="radio" id="gen" name="gen" value="male">
         <label for="M">Male</label>      
         <input type="radio" id="gen" name="gen" value="female">
         <label for="F">Female</label>
         <input type="radio" id="gen" name="gen" value="male">
         <label for="o">Others</label><br>
   
         <br><label for="reli">Religion:</label>
         <select name="reli">
            <option value="hindu">Hindu</option>
            <option value="muslim">Muslim</option>
            <option value="christan">Christan</option>
         </select><br>
         <br><br><input type="checkbox" id="agree" name="agree" value="agreement">
         <label for="agree"> I Agree</label>
         <input type="submit" name="btn1">
    </form>
    
</center>
</div>
 </BODY>
</html>