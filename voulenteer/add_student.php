<?php 
session_start();
include_once("../config.php");
if(!isset($_SESSION['username'])){
    $_SESSION['msg']="YOU MUST LOG IN FIRST";
    header('Location:../index.php');
}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Volunteers Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.php">UDGAM CHARITY</a>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="volen.php"><i class="fa fa-child"></i>Student Details</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="events.php"><i class="fa fa-puzzle-piece"></i>Event Details</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="account.php"><i class="fas fa-user "></i>Account</a>
                            </li>
                            
                            <li class="nav-item ">
                                    <a class="nav-link" href="../index.php"><i class="fas fa-external-link-alt"></i>Visit Site</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><?php echo $_SESSION['username'];?>'s Dashboard </h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">    
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <h5 class="card-header">Student Details</h5>
                                    <div class="card-body p-4">
                                    <form action="add.php" method="post">    
                                    <div class="form-group mb-2">
                                                <lable>Students Name</lable><input type="text" name="cname" class="form-control form-contol-sm mb-2">
                                                <lable>Class</lable><input type="text" name="class" class="form-control form-contol-sm mb-2">
                                                <lable>DOB</lable><input type="date" name="dob" class="form-control form-contol-sm mb-2">
                                     </div>
                                     <div class="radio">
                                     <lable>Gender</lable><br>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" name="gender" class="custom-control-input" value="M"><span class="custom-control-label">M</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline" value="F">
                                                <input type="radio" name="gender" class="custom-control-input"><span class="custom-control-label">F</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline" value="O">
                                                <input type="radio" name="gender" class="custom-control-input"><span class="custom-control-label">O</span>
                                            </label>

                                    </div>
                                    <div class="form-group mb-2">
                                                <lable>School id</lable><input type="text" name="sid" class="form-control form-contol-sm mb-2">
                                                <lable>Grade</lable><input type="text" name="Grade" class="form-control form-contol-sm mb-2">
                                                <lable>Marks</lable><input type="text" name="marks" class="form-control form-contol-sm mb-2">
                                                <lable>Remarks</lable><input type="text" name="remarks" class="form-control form-contol-sm mb-2">
                                                <lable>Sem</lable><input type="text" name="sem" class="form-control form-contol-sm mb-2">
                                     </div>
                                     <div class="card-footer">  
                                     <input type="submit" class="btn btn-outline-light float-right" value="Submit">
                                    </div>
                                        </form>          
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
    
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>