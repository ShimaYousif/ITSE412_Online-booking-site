
<?php
 include('../connection.php');
 ?>
<!doctype html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Admin</title>
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
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
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>

                    <h3 class="menu-title">Hotel</h3><!-- /.menu-title -->
                    <li><a href="add-hotel.php"> <i class="menu-icon fa fa-plus-square"></i>Add Hotel</a></li>
                    <li><a href="delete-hotel.php"> <i class="menu-icon ti-trash"></i>Delete Hotel</a></li>
                    <li><a href="show-hotel.php"> <i class="menu-icon fa fa-table"></i>Show Hotel</a></li>

                    <h3 class="menu-title">Room</h3><!-- /.menu-title -->
                    <li><a href="add-room.php"> <i class="menu-icon fa fa-plus-square"></i>Add Room</a></li>
                    <li><a href="update-room.php"> <i class="menu-icon fa fa-copy"></i>Update Room</a></li>
                    <li ><a href="show-room.php"> <i class="menu-icon fa fa-table"></i>Show Room</a></li>

                    <h3 class="menu-title">Controls</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Show</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li class = "active"><i class="menu-icon fa fa-table"></i><a href="show-user.php">Show User</a></li>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Show</a></li>
                            <li class="active">Show Users</li>
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
                                <strong class="card-title">Users Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                          <th>ID_User</th>
                                          <th>Name</th>
                                          <th>Password</th>
                                          <th>Type</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Country</th>

                                        </tr>
                                    </thead>

                                   <tbody>

                                    <?php
                                     if(!mysqli_select_db($con, 'booking')){
                                       echo "databass Not Selected ";
                                     }
                                     //Select query
                                     $sql = "	select * from users";
                                  $records =  mysqli_query($con,$sql);
                                     while ($row = mysqli_fetch_array($records))
                                      {
                                       echo "<tr><td>";
                                       echo $row['id_user'];
                                       echo "</td><td>";
                                       echo $row['user_name'];
                                       echo "</td><td>";
                                       echo $row['password'];
                                        echo "</td><td>";
                                       echo $row['type'];
                                         echo "</td><td>";
                                       echo $row['telephone'];
                                         echo "</td><td>";
                                       echo $row['email'];
                                         echo "</td><td>";
                                       echo $row['country'];
                                         echo "</td></tr>";

                                     }

                                      ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

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
