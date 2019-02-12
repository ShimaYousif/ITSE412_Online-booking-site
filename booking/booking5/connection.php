
<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "booking";

   $con = mysqli_connect($host,$user,$pass,$db);

   if (mysqli_connect_error()) {
     die("can not connect to database, Faild: ".mysqli_connect_error());
   }
 ?>
