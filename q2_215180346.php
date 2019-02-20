<?php
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "items";

   $con = mysqli_connect($host,$user,$pass,$db);

   if (mysqli_connect_error()) {
     die("can not connect to database, Faild: ".mysqli_connect_error());
   }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>finalexam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
  <body>
    <form method="post">

      <label >: ادخل رقم القطعة</label >
        <input name="num"  type="text" ><br /><br />
        <label >: ادخل اسم القطعة</label >
          <input name="name"  type="text"><br /><br />
          <label >: ادخل سعر القطعة</label >
            <input name="num2"  type="text"><br /><br />
            <button type="submit" name="submit" id="submit" >اضافة</<button>
      </form>
            <?php
            if (isset($_POST['submit'])) {
              if ($con) {

              $sql = "insert into items (itemno,itemname,itemprice)

               VALUES ('".$_POST['num']."','".$_POST['name']."','".$_POST['num2']."')";

              $query= mysqli_query($con,$sql);
              //eeror in the connection
            }
              if($query)
              echo "<script>alert('Add to database');</script>";
            else
            echo "<script>alert('Can Not Add');</script>";
          }
               ?>

  </body>
</html>
