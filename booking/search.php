<?php
 include('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Booking</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
     <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Booking</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Country</a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
              <a class="dropdown-item" href="Egypt.php">Egypt</a>
              <a class="dropdown-item" href="Lebanon.php">Lebanon</a>
              <a class="dropdown-item" href="Turkey.php">Turkey</a>
            </div>

          </li>
          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class "nav-item"><a class="nav-link" data-toggle="modal" data-target="#LoginModal" style="padding-top: 30px;"><button type="submit" class="btn btn-primary ">Login</button></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 item" style="background-image: url('images/TR_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Welcome To</span>
              <h2 class="heading">Turkey</h2>
              <p><a href="Turkey.php" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/LE_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Welcome To</span>
              <h2 class="heading">Lebanon</h2>
              <p><a href="Lebanon.php" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="block-30 item" style="background-image: url('images/EG_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-10">
              <span class="subheading-sm">Welcome To</span>
              <h2 class="heading">Egypt</h2>
              <p><a href="egypt.php" class="btn py-4 px-5 btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-light">
        <div class="container">
          <div class="row mb-5">

           <?php

            $sql1 = "SELECT img,room.Name,price,adults,categorie,facilities,bed_type,id_room FROM room, hotel WHERE flag= 0 and adults= '".$_POST['adults']."' and country= '".$_POST['Country']."' and room.id_hotel=hotel.id " ;
            $sqldata = $con -> query($sql1) ;
            if($sqldata -> num_rows > 0 ){
              while($row = $sqldata -> fetch_assoc()) {

            ?>

            <div class="col-lg-4 mb-5">
            <div class="block-34">

              <div class="image">
                <a href="#"><img src="<?php echo $row['img']; ?> "></a>
              </div>
              <div class="text">
                <h2  class="heading"> <?php echo $row['Name']; ?> </h2>
                <strong hidden>Room Number</strong><input hidden name="room-id" value="<?php echo $row['id_room']; ?>"/>
                <div class="price"><sup>$</sup><span class="number"><?php echo $row['price']; ?></span><sub>/per night</sub></div>
                <ul class="specs">
                  <li><strong>Adults:</strong> <?php echo $row['adults']; ?></li>
                  <li><strong>Categories:</strong> <?php echo $row['categorie']; ?> </li>
                  <li><strong>Facilities:</strong> <?php echo $row['facilities']; ?> </li>
                  <li><strong>Bed Type:</strong> <?php echo $row['bed_type']; ?> </li>
                </ul>
                  <p><a  data-toggle="modal" data-target="#Booke_Modal"><button name="submit" type="submit" class="btn btn-primary px-4">Booke Now</button></a></p>

              </div>
            </div>
          </div>
          <?php
            }
          }

          ?>
          <div id="Booke_Modal" class="modal fade" role="dialog">
            <form method="post">
             <div class="modal-dialog">
               <div class="modal-content">

               <?php
               if (isset($_POST['submit'])) {

                ?>

                 <div class="modal-body">
                   <lable>Room Name</label>
                   <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['Name']; ?>" />
                   <lable>User Name</label>
                   <input type="text" name="username" id="username" class="form-control" />
                   <lable>E-mail</label>
                   <input type="text" name="email" id="email" class="form-control" />
                   <br />
                   <lable>Telephone</label>
                   <input type="text" name="tele" id="tele" class="form-control"/>
                   <lable>Country</label>
                   <input type="text" name="country" id="country" class="form-control"/>

                   <lable>Check-in</label>
                   <input type="date" name="check-in" id="check-in" class="form-control"/>
                   <lable>Check-out</label>
                   <input type="date" name="check-out" id="check-out" class="form-control"/>
                   <br />
                </div>


          <div class="modal-footer">
            <button type="submit" name="booke_button" id="booke_button" class=" btn btn-primary submit">Next</button>
          </div>


     <?php
   }

   if (isset($_POST['submit'])) {
     $sql2 = "insert into  users (user_name,telephone,	email,	country)
      VALUES ('".$_POST['username']."','".$_POST['tele']."','".$_POST['email']."','".$_POST['country']."')";
     $query2= mysqli_query($con,$sql2);

     $sql3 = "select id_user where 	email='".$_POST['email']."' and telephone='".$_POST['tele']."' ";
     $query3= mysqli_query($con,$sql3);
     while ($row = mysqli_fetch_array($query1))
      {
      $n = $row['id_user'];
    }


     $sql4 = "insert into  hotel_booking (id_user , id_room,	check_in,	check_out)
      VALUES ('$n','".$_POST['room-id']."','".$_POST['check-in']."','".$_POST['check-out']."')";
     $query4= mysqli_query($con,$sql4);

     echo "<script>alert('successful Booking');</script>";

   }

 ?>
</div>
</div>

</div>
              </div>
            </div>
          </div>

  <footer class="footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">This site offers many different hotels in more than one city around the world. The hotel offers an overview of the hotel and the services it provides, as well as its location and beyond the vital and tourist places in the city.</p>
          <p><a href="about.php" class="btn btn-primary px-4">Button</a></p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">Countries</h3>
          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_1.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="Turkey.php">Turkey</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Dec 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_2.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="Lebanon.php">Lebanon</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Dec 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>

          <div class="block-21 d-flex mb-4">
            <figure class="mr-3">
              <img src="images/img_3.jpg" alt="" class="img-fluid">
            </figure>
            <div class="text">
              <h3 class="heading"><a href="egypt.php">Egypt</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Dec 29, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Contact Info</h3>
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St,Tripoli, Ly</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+218 91/92 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@booking.com</span></a></li>
                <li><span class="icon icon-clock-o"></span><span class="text">Starday &mdash; Friday 8:00am - 11:00pm</span></li>
              </ul>
            </div>
        </div>


      </div>
      <div class="row pt-5">
        <div class="col-md-12 text-left">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made by Malak & Shima
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script><!--yes-->
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script><!--yes-->
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>

  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
<?php
include('colseConnaction.php');
 ?>
