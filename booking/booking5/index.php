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

  <!---قامت به ملاك ---------->
<div id="LoginModal" class="modal fade" role="dialog">
  <form action="server.php" method="post">
 <div class="modal-dialog">
   <div class="modal-content">

     <div class="modal-header">
       <h4 class="modal-title">Login </h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <div class="modal-body">
       <lable>Name</label>
       <input type="text" name="adminname" id="username" class="form-control" />
       <br />
       <lable>Password</label>
       <input type="password" name="password" id="password" class="form-control"/>
     </div>

     <div class="modal-footer">
       <button type="submit" name="login_button" id="login_button" class=" btn btn-primary submit">Login</button>
     </div>

   </div>
 </div>
</form>
</div>

  <!-- END nav -->

  <?php if(isset($_SESSION['success'])):?>
                                         <?php
                                          echo $_SESSION['success'];
                                          unset($_SESSION['success']);?>
                                       <?php endif ?>


    <script>
    $(document).ready(function(){
      $('#login_button').click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        if(username != '' && password != '')
        {
            $.ajax ({
              url:"../index.php",
              method:"post",
              data:{username:username, password:password},
              success:function(data){
                if(dats == 'No')
                {
                  alert("Wrong Data");
                }
                else
                {
                  $('#LoginModal').hide();
                  location.reload();
                  }
                }
              }
            )};
        else
         {
            alert("Both fields are required");
        }
      });
    });
    </script>
    <!--نهاية الاتصال php-->

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


  <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">

          <div class="block-32">
            <form action="search.php" method="post" >
              <div class="row">

                    <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                       <div class="row">
                         <div class=".col-md-n mb-3 mb-md-0">
                           <label for="checkin">Country</label>
                           <input type="text" name="Country" class="form-control">

                         </div>
                       </div>
                     </div>


                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check In</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkin_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                  <label for="checkin">Check Out</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="icon-calendar"></span></div>
                    <input type="text" id="checkout_date" class="form-control">
                  </div>
                </div>
                <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                  <div class="row">
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label for="checkin">Adults</label>
                      <input type="text" class="form-control" name="adults">

                    </div>

                  </div>
                </div>
                <div class="col-md-6 col-lg-3 align-self-end">
                  <button name="submit2" type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
              </div>
            </form>


               </div>
             </div>
           </div>




          </div>
        </div>
      </div>





    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 section-heading">
              <span class="subheading-sm">Countries</span>
              <h2 class="heading">Countries available</h2>
            </div>
          </div>

          <div class="block-35">

            <ul class="nav" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-Turkey-tab" data-toggle="pill" href="Turkey.html" role="tab" aria-controls="pills-Turkey" aria-selected="false" data-target="#pills-Turkey">Turkey</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-Lebanon-tab" data-toggle="pill" href="Lebanon.html" role="tab" aria-controls="pills-Lebanon" aria-selected="false" data-target="#pills-Lebanon">Lebanon</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-egypt-tab" data-toggle="pill" href="egypt.html" role="tab" aria-controls="pills-egypt" aria-selected="false" data-target="#pills-egypt">Egypt</a>
              </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-Turkey" role="tabpanel" aria-labelledby="pills-Turkey-tab">
                <div class="row">
                  <div class="col-md-12 block-13">
                    <div class="nonloop-block-13 owl-carousel">
                      <?php
                        $sqlget = "SELECT * FROM room WHERE id_hotel=100 limit 4;" ;
                        $sqldata = $con -> query($sqlget) ;
                        if($sqldata -> num_rows> 0 ){
                          while($row = $sqldata -> fetch_assoc()) {

                        ?>
                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="Renata Hotel.php"><img src="<?php echo $row['img']; ?> "></a>
                          </div>
                          <div class="text">
                            <h2 class="heading"><?php echo $row['Name']; ?></h2>
                            <strong hidden>Room Number</strong><input hidden name="room-id" value="<?php echo $row['id_room']; ?>"/>
                            <div class="price"><sup>$</sup><span class="number"><?php echo $row['price']; ?></span><sub>/per night</sub></div>
                            <ul class="specs">
                              <li><strong>Adults:</strong> <?php echo $row['adults']; ?></li>
                              <li><strong>Categories:</strong> <?php echo $row['categorie']; ?></li>
                              <li><strong>Facilities:</strong> <?php echo $row['facilities']; ?></li>
                              <li><strong>Bed Type:</strong> <?php echo $row['bed_type']; ?></li>
                            </ul>
                            <p><button name="submit" type="submit" class="btn btn-primary px-4">Booke Now</button></p>
                          </div>
                        </div>
                      </div>

                      <?php
                        }
                      }
                      ?>

                    </div>
                  </div>
                </div>
              </div>


              <div class="tab-pane fade" id="pills-Lebanon" role="tabpanel" aria-labelledby="pills-Lebanon-tab">
                <div class="row">
                  <div class="col-md-12 block-13">
                    <div class="nonloop-block-13 owl-carousel">
                      <?php
                        $sqlget = "SELECT * FROM room WHERE id_hotel=200 limit 4;" ;
                        $sqldata = $con -> query($sqlget) ;
                        if($sqldata -> num_rows> 0 ){
                          while($row = $sqldata -> fetch_assoc()) {

                        ?>
                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="Hilton Hotel.php"><img src="<?php echo $row['img']; ?> "></a>
                          </div>
                          <div class="text">
                            <h2 class="heading"><?php echo $row['Name']; ?></h2>
                            <strong hidden>Room Number</strong><input hidden name="room-id" value="<?php echo $row['id_room']; ?>"/>
                            <div class="price"><sup>$</sup><span class="number"><?php echo $row['price']; ?></span><sub>/per night</sub></div>
                            <ul class="specs">
                              <li><strong>Adults:</strong> <?php echo $row['adults']; ?></li>
                              <li><strong>Categories:</strong> <?php echo $row['categorie']; ?></li>
                              <li><strong>Facilities:</strong> <?php echo $row['facilities']; ?></li>
                              <li><strong>Bed Type:</strong> <?php echo $row['bed_type']; ?></li>
                            </ul>
                            <p><button name="submit" type="submit" class="btn btn-primary px-4">Booke Now</button></p>
                          </div>
                        </div>
                      </div>

                      <?php
                        }
                      }
                      ?>


                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-egypt" role="tabpanel" aria-labelledby="pills-egypt-tab">
                <div class="row">
                  <div class="col-md-12 block-13">
                    <div class="nonloop-block-13 owl-carousel">

                      <?php
                        $sqlget = "SELECT * FROM room WHERE id_hotel=300 limit 4;" ;
                        $sqldata = $con -> query($sqlget) ;
                        if($sqldata -> num_rows> 0 ){
                          while($row = $sqldata -> fetch_assoc()) {

                        ?>
                      <div class="item">
                        <div class="block-34">
                          <div class="image">
                            <a href="Steigenberger Hotel.php"><img src="<?php echo $row['img']; ?> "></a>
                          </div>
                          <div class="text">
                            <h2 class="heading"><?php echo $row['Name']; ?></h2>
                            <strong hidden>Room Number</strong><input hidden name="room-id" value="<?php echo $row['id_room']; ?>"/>
                            <div class="price"><sup>$</sup><span class="number"><?php echo $row['price']; ?></span><sub>/per night</sub></div>
                            <ul class="specs">
                              <li><strong>Adults:</strong> <?php echo $row['adults']; ?></li>
                              <li><strong>Categories:</strong> <?php echo $row['categorie']; ?></li>
                              <li><strong>Facilities:</strong> <?php echo $row['facilities']; ?></li>
                              <li><strong>Bed Type:</strong> <?php echo $row['bed_type']; ?></li>
                            </ul>
                            <p><button name="submit" type="submit" class="btn btn-primary px-4">Booke Now</button></p>
                          </div>
                        </div>
                      </div>

                      <?php
                        }
                      }
                      ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>


                </div>
              </div>
            </div>



    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 section-heading">
            <span class="subheading-sm">Reviews</span>
            <h2 class="heading">Guest Reviews</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_3.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Martin Newmansfield</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_2.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Nancy Green</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4">

            <div class="block-33">
              <div class="vcard d-flex mb-3">
                <div class="image align-self-center"><img src="images/person_1.jpg" alt="Person here"></div>
                <div class="name-text align-self-center">
                  <h2 class="heading">Elizabeth Charles</h2>
                  <span class="meta">Satisfied Customer</span>
                </div>
              </div>
              <div class="text">
                <blockquote>
                  <p>&rdquo; Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga aliquid. Atque dolore esse veritatis iusto eaque perferendis non dolorem fugiat voluptatibus vitae error ad itaque inventore accusantium tempore dolores sunt. &ldquo;</p>
                </blockquote>
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
