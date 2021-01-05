<?php include '../../../server/conn.php'; 
include '../../Desh data.php';
include '../../../server/school_name.php';


if (!isset($_SESSION['adminid'])) {
    
    header("location:../../admin_login.php?msg=please login your session was expire!.");
}
 
 ?>
<!DOCTYPE html>
<html>

<head>
    <title> fee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
     <script src="../js/Dashboard.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body>
    <div class="header">
         <h1><?php echo $school_name; ?></h1>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li ><a href="../../Dashboard.php">Home</a></li>

                        <script type="text/javascript">
                            var adminid = <?php echo $adminid  ;?>;

                        </script>


                        <!-- <?php //header("location:Dashboard.php?adminid={$adminid}"); ?> -->

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">


                                <li><a href="#"><i class="fas fa-child"></i> Student Details</a></li>
                                <li><a href="#">Update Info</a></li>
                                <li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                            </ul>
                        </li>

                        <li><a href="../../../contact us.php?l=1">Contact us</a></li>
                        <li><a href="../../../about.php?l=1">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="../../../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>