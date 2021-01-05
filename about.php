        <?php include 'server/conn.php';
        include 'server/school_name.php';
        if (isset($_GET['logout'])){

           if (isset($_GET['logout'])){
            if ((!isset($_SESSION['adminid']))&&(!isset($_SESSION['student_id']))  ) {
        header("location:../admin/index.php?msg=please login your session was expire!.");
            }
        }
           }
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> About</title>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="Dashboard.css">
        <link rel="stylesheet" type="text/css" href="header.css">
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <script src="index.js"></script>
                <script type="text/javascript" src="js/links.js"></script>
              
  
</head>

<body>

        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1><?php echo $school_name; ?></h1>
        </div>


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
                    <li><a id="indexhome" href="index.php">Home</a></li>
                    <li id="adminhome" style="display: none;"><a href="admin/Dashboard.php?l=1">Home</a></li>
<li id="student" style="display: none;"><a href="student/sdash.php?l=2">Home</a></li>
                    <li  class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="admsign"><a href="admin/admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up Admin</a></li>
                            <li id="admLogin"><a href="admin/admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
                            <li id="admstdDetails" style="display: none;"><a href="#">Student Details</a></li>
                            <li id="admstdupd" style="display: none;"><a href="#">Update Student Info</a></li>
                            <li id="admstaff" style="display: none;"><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                        </ul>
                    </li>
                    <li id="clinkadm" style="display: none;"><a href="contact us.php?l=1">Contact us</a></li>
                    <li id="clinkstd" style="display: none;"><a href="contact us.php?l=2">Contact us</a></li>
                    <li id="clink"><a href="contact us.php?l">Contact us</a></li>

                    <li id="alinkadm" style="display: none;" class="active">
                        <a href="about.php?l=1">About</a>
                    </li>
                     <li id="alinkstd" style="display: none;" class="active">
                        <a href="about.php?l=2">About</a>
                    </li>
                    <li id="alink" class="active"><a href="about.php?l">About</a></li>
                </ul>

                <ul id="loginsign" class="nav navbar-nav navbar-right">
                    <li id="hidelink"><a href="student\student sign up.php"><span class="glyphicon glyphicon-user"></span> Student Sign Up</a></li>
                    <li id="hidelink"><a href="student\student login.php"><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li>

                </ul>

                <ul id="logout" style="display: none;" class="nav navbar-nav navbar-right">

                    <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>

                </ul>




            </div>
        </div>
    </nav>
                <?php 
                    if (isset($_GET['l'])){ $l=$_GET['l'];}
                    
                ?>
               <script type="text/javascript">
                    var x = '<?php echo $l;?>';
                 if(x ==1){admin();}
                         if (x==2){student();}
                               
                </script>
   

</body>

</html>
