
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
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
    <script src="stylesheet" href="assets\js\init-scripts\chart-js/chartjs-init.js"></script>



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
                            <li><i class="menu-icon fa fa-table"></i><a href="show-r.php"> Show ارشيف</a></li>

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
        <header id="header" class="header" style="display: inline-block;">

            <div class="header-menu">

                <div class="col-sm-7">
                  <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">

                        <div class="user-area dropdown float-right">
                        /<!--<button type="submit" name="submit" id="submit"  class="btn btn-primary  px-4"><a href="../index.php"> Logout</a>  </button>-->
                        <a href="../index.php"><button type="submit"  class="btn btn-primary px-4">Logout</button></a>
                      </div>
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
                        </ol>
                    </div>
                </div>
            </div>
          </div> <!-- .content -->

    <div class="content mt-3">

          <div class="col-sm-6 col-lg-3">
              <div class="card text-white bg-flat-color-1" style="height:150px;">
                  <div class="card-body pb-0">

                    <?php
                     if(!mysqli_select_db($con, 'booking')){
                     }
                     //Select count users
                     $sql = "	select count(id_user) from users";
                     $records =  mysqli_query($con,$sql);
                     while ($row = mysqli_fetch_array($records))
                     {
                       $c = $row['count(id_user)'];
                     }
                    ?>
                    <h4 class="mb-0">
                      <span class = "count"> <?php echo "$c"?></span>
                    </h4>
                    <p class="text-light">Number Of Users</p>

                  </div>
                </div>
              </div> <!--/.col 1-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2" style="height:150px;">
                    <div class="card-body pb-0">
                      <?php
                       //Select sum hotel
                       $sql = "	select count(id) from hotel";
                       $records =  mysqli_query($con,$sql);

                       while ($row = mysqli_fetch_array($records))
                       {
                         $c = $row['count(id)'];
                       }
                    ?>
                      <h4 class="mb-0">
                        <span class = "count"> <?php echo "$c"?></span>
                      </h4>
                      <p class="text-light">Number Of Hotel</p>

                    </div>
                  </div>
                </div><!--/.col 2-->

                <div class="col-sm-6 col-lg-3">
                    <div class="card text-white bg-flat-color-3" style="height:150px;">
                        <div class="card-body pb-0">
                          <?php
                           //Select sim roos Available
                           $sql = "	select count(id_room) from room where flag='0'";
                           $records =  mysqli_query($con,$sql);
                           while ($row = mysqli_fetch_array($records))
                            {
                              $c = $row['count(id_room)'];
                            }
                            ?>
                          <h4 class="mb-0">
                            <span class = "count"> <?php echo "$c"?></span>
                          </h4>
                          <p class="text-light">Number Of Rooms Available</p>

                        </div>
                      </div>
                    </div><!--/.col 3-->

                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-white bg-flat-color-4" style="height:150px;">
                            <div class="card-body pb-0">
                              <?php
                               //Select sum rooms Reserved
                               $sql = "	select count(id_room) from room where flag='1'";
                               $records =  mysqli_query($con,$sql);

                               while ($row = mysqli_fetch_array($records))
                               {
                                 $c = $row['count(id_room)'];
                               }
                            ?>
                              <h4 class="mb-0">
                                <span class = "count"> <?php echo "$c"?></span>
                              </h4>
                              <p class="text-light">Number Of Rooms Reserved</p>

                            </div>
                          </div>
                        </div><!--/.col 4-->


                        <!-- chart hotels -->
                      <div class="col-sm-6 col-lg-12" style= "width: 50%; max-width: 50%;">
                        <div  id ="chartContainer" style="height: 370px; width: 100%;"></div>
                      </div>

                      <!-- chart users -->
                      <div class="col-sm-6 col-lg-12" style= "width: 50%; max-width: 50%;">
                        <div  id ="chartContainer2" style="height: 370px; width: 100%;"></div>
                      </div>

                      <?php
                      //جلب عدد النادق في كل دولة
                      $sql2 = "select count(country) from hotel where country='Egypt'";
                      $records2 =  mysqli_query($con,$sql2);
                      while ($row = mysqli_fetch_array($records2))
                      {
                        $e = $row['count(country)'];
                      }

                      $sql3 = "select count(country) from hotel where country='Lebanon'";
                      $records3 =  mysqli_query($con,$sql3);
                      while ($row = mysqli_fetch_array($records3))
                      {
                        $l = $row['count(country)'];
                      }

                      $sql4 = "select count(country) from hotel where country='Turkey'";
                      $records4 =  mysqli_query($con,$sql4);
                      while ($row = mysqli_fetch_array($records4))
                      {
                        $t = $row['count(country)'];
                      }

                      $dataPoints= array(
                        array("label"=>"Egypt", "y"=> $e),
                        array("label"=>"Lebanon", "y"=> $t),
                        array("label"=> "Turkey", "y"=> $l)
                      );
                      ?>

                    <?php
                    //جلب عدد المستخدمين بناءا علي الدول
                    $sql5 = "select count(country) from users where country='Egypt'";
                    $records5 =  mysqli_query($con,$sql5);
                    while ($row = mysqli_fetch_array($records5))
                    {
                      $ee = $row['count(country)'];
                    }

                    $sql6 = "select count(country) from users where country='Lebnon'";
                    $records6 =  mysqli_query($con,$sql6);
                    while ($row = mysqli_fetch_array($records6))
                    {
                      $ll = $row['count(country)'];
                    }

                    $sql7 = "select count(country) from users where country='Turkey'";
                    $records7 =  mysqli_query($con,$sql7);
                    while ($row = mysqli_fetch_array($records7))
                    {
                      $tt = $row['count(country)'];
                    }
                    $sql8 = "select count(country) from users where country='Libya'";
                    $records8 =  mysqli_query($con,$sql8);
                    while ($row = mysqli_fetch_array($records8))
                    {
                      $li = $row['count(country)'];
                    }

                    $sql9 = "select count(country) from users where country='Tunisia'";
                    $records9 =  mysqli_query($con,$sql9);
                    while ($row = mysqli_fetch_array($records9))
                    {
                      $tu = $row['count(country)'];
                    }

                    $sql10 = "select count(country) from users where country='Algeria'";
                    $records10 =  mysqli_query($con,$sql10);
                    while ($row = mysqli_fetch_array($records10))
                    {
                      $al = $row['count(country)'];
                    }

                    $dataPoints2 = array(
                      array("label2"=>"Egypt", "y"=> $ee),
                      array("label2"=>" Algeria", "y"=> $al),
                      array("label2"=> "Lebanon", "y"=> $ll),
                      array("label2"=>"Libya", "y"=> $li),
                      array("label2"=>"Tunisia", "y"=> $tu),
                      array("label2"=> "Turkey", "y"=>  $tt)

                    );
                    ?>
                  <script>
                //  مخطط يوضح نسبة المستخدمين بالنسبة للدول

                  window.onload = function () {

                    var chart = new CanvasJS.Chart("chartContainer", {
                      animationEnabled: true,
                      exportEnabled: true,
                      title:{
                        text: "Percentage of hotel "
                      },

                    data: [{
                      type: "pie",
                      showInLegend: "true",
                      legendText: "{label}",
                      indexLabelFontSize: 16,
                      indexLabel: " #percent%",
                      yValueFormatString: "##0",
                      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                  });
                  chart.render();
                  //مخطط يوضح نسبة الفنادق بناءا علي الدول
                  var chart2 = new CanvasJS.Chart("chartContainer2", {
                    theme: "light2",
                    animationEnabled: true,
                    exportEnabled: true,

                    title: {
                      text: "Percentage of users"
                    },
                    data: [{
                      type: "doughnut",
                      indexLabel: "#percent%",
                      yValueFormatString: "##0",
                      indexLabelFontSize: 16,
                      showInLegend: "true",
                      legendText: "{label2}",
                      dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
                    }]
                  });
                     chart2.render();
                  }
                  </script>
            </div>

    </div><!-- /#right-panel -->


    <!-- Right Panel -->


    <script src="assets/js/canvasjs.min.js"></script>">
    <script src="assets/js/jquery.canvasjs.min.js"></script>">

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>


</body>

</html>
<?php
include('../colseConnaction.php');
 ?>
