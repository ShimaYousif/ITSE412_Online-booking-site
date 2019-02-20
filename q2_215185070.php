<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
  <body>
    <div>

     <form method="post">
       <div>
       <label> Item Number : <input type="text" name ="no" ></label>
     </div>
     <br>
     <div>
       <label> Item Name : <input type="text" name ="name" ></label>
       <div>
         <br>
       <label> Item Price : <input type="text" name ="price" ></label>
     </div>
     <br>
     <div>
       <button type="submit" name="submit" id="submit"> Add </button>
     </div>

       </form>
       <?php
          $host = "localhost";
          $user = "root";
          $pass = "";
          $db = "items";

          $con = mysqli_connect($host,$user,$pass,$db);

          if (mysqli_connect_error()) {
            die("can not connect to database, Faild: ".mysqli_connect_error());
          }

             if (isset($_POST['submit'])) {
                if($con)

                   $sql = "insert into  items (itemno,itemname,itemprice)

                   VALUES ('".$_POST['no']."','".$_POST['name']."','".$_POST['price']."')";

                  $query= mysqli_query($con, $sql);

                    if($query)
                      echo "<script>alert(' Add Item to database');</script>";  }


                                     ?>
                                   </div>



  </body>
</html>
