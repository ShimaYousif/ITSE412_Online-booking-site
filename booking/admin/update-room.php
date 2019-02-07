 <?php
 include('../connection.php');
 ?>
<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin </title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>

                    <h3 class="menu-title">Hotel</h3><!-- /.menu-title -->
                    <li><a href="add-hotel.php"> <i class="menu-icon fa fa-plus-square"></i>Add Hotel</a></li>
                    <li><a href="delete-hotel.php"> <i class="menu-icon ti-trash"></i>Delete Hotel</a></li>
                    <li><a href="show-hotel.php"> <i class="menu-icon fa fa-table"></i>Show Hotel</a></li>

                    <h3 class="menu-title">Room</h3><!-- /.menu-title -->
                    <li><a href="add-room.php"> <i class="menu-icon fa fa-plus-square"></i>Add Room</a></li>
                    <li><a href="update-room.php"> <i class="menu-icon fa fa-copy"></i>Update Room</a></li>
                    <li><a href="show-room.php"> <i class="menu-icon fa fa-table"></i>Show Room</a></li>

                    <h3 class="menu-title">Controls</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Show</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-table"></i><a href="show-user.php">Show User</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="show-reviews.php">Show Reviews</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="show-reservations.php"> Show Reservations</a></li>
                            <li><i class="menu-icon fa fa-table"></i><a href="show-r.php"> Show Archives</a></li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-7">
                  <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Home</li>
                            <li><a href="#">Room</a></li>
                            <li class="active">Update Room</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
      <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                              <div class="card-header">
                                  <strong class="card-title">Enter Room ID</strong>
                              </div>
                              <div class="card-body">
                              <form  method="post">
                               <div class="form-group">
                              <lable>ID Room</label>
                              <input type="text" name="id_room" class="form-control px-3 py-3" >
                            </div>
                            <div class="form-group">
                              <button type="submit" name="submit" id="submit"  class="btn btn-primary px-4">Fetch
                            </button>
                          </div>


                    <div class="card-header">
                        <strong class="card-title">Update Form Room</strong>
                    </div>

                      <div class="card-body">
                        <form  method="post">
                          <?php
                          if (isset($_POST['submit'])) {
                            //if($con)
                            //  echo "Connect to databass ";

                            $sql ="select adults,Name,categorie,bed_type,price,facilities,img from room where id_room='".$_POST['id_room']."'";

                        //$result = $connect->query($query);
                            $query= mysqli_query($con, $sql);
                            //eeror in the connection

                            while ($row = mysqli_fetch_array($query))
                             {
                             ?>

                             <form  method="post">

                                <div class="form-group">
                                  <lable>Name</label>
                                  <input type="text" name="Name" value="<?php echo $row['Name']; ?>"  class="form-control px-3 py-3"> </input>
                                </div>
                                <div class="form-group">
                                  <lable>Adults</label>
                                  <input type="text" name="adults" value="<?php echo $row['adults']; ?>"  class="form-control px-3 py-3"> </input>
                                </div>
                                <div class="form-group">
                                  <lable>Categories</label>
                                  <input type="text" name="categories" value="<?php echo $row['categorie']; ?>"  class="form-control px-3 py-3" > </input>
                                </div>
                                <div class="form-group">
                                  <lable>Bad Type</label>
                                  <input name="bed_type" id="bad_type" cols="30" rows="7" value="<?php echo $row['bed_type']; ?>" class="form-control px-3 py-3" >  </input>
                                </div>
                                <div class="form-group">
                                  <lable>Price</label>
                                  <input name="price" id="price" cols="30" rows="7" value="<?php echo $row['price']; ?> "  class="form-control px-3 py-3" >  </input>
                                </div>
                                <div class="form-group">
                                  <lable>Facilities</label>
                                  <input name="facilities" id="facilities" cols="30" rows="7" value="<?php echo $row['facilities']; ?>" class="form-control px-3 py-3" ></input>
                                </div>
                                <div class="form-group">
                                  <lable>Image</label>
                                  <input name="img" id="img" cols="30" rows="7" value="<?php echo $row['img']; ?>" class="form-control px-3 py-3" >  </input>
                                </div>

                                <div class="form-group">
                                  <button type="submit2" name="submit2" id="submit2"  class="btn btn-primary px-4">Update
                                </button>
                                </div>
                              </form>
                              </div>
                              <?php
                                }
                              }
                              ?>

  <!--<div class="form-group">
        <lable>ID Hotel</label>
        <input type="text" name="id_hotel" value='.$row['id_hotel'].' class="form-control px-3 py-3" >
      </div>
    -->             <?php
                           if (isset($_POST['submit2'])) {
                            $sql2 = "UPDATE `room` SET `adults`='adults',`categorie`='categories',`bed_type`='bad_type',`price`='price' WHERE `id_room`='".$_POST['id_room']."'";
                          //  $sql2 = "UPDATE `room` SET `adults`='adults',`categorie`='categories',`bed_type`='bad_type',`price`='price' WHERE `id_room`='".$_POST['id_room']."'";
//UPDATE `room` SET `adults` = 'adults',`bed_type` = '22',`price` = 'price' WHERE `id_room` = '20'

                         //$result = $connect->query($query);
                             $query1= mysqli_query($con,$sql2);
                             //eeror in the connection
                             if($query1)
                             echo "update to databass";
                         }
                              ?>
                            </form>
                          </div>
                            </form>
                           </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>

</body>

</html>
<?php
include('../colseConnaction.php');
 ?>
