<?php
include '../server/conn.php';
include '../server/school_name.php';
if (!isset($_SESSION['student_id'])) {
    
    header("location:student login.php?msg=please login your session was expire!.");
}

if (isset($_SESSION['student_id'])) {
$student_id=$_SESSION['student_id'];
 $sql="SELECT  * FROM student_info WHERE student_id='{$student_id}'";
     $send=mysqli_query($connect,$sql);
    while ($accept=mysqli_fetch_assoc($send)) {
        
        $student_id=$accept['student_id'];
        $student_name=$accept['student_name'];
    }
  
}

?>

<!DOCTYPE html>
<html>

<head>
    <title> Student Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="css/sdash.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="css/notification.css">
    <link rel="stylesheet" type="text/css" href="../css/std css/Student_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
</head>

<body style=" background-image: url('../images/school.jpg'); background-size: cover;">
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
                        <li class="active"><a href="sdash.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="admin\admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up Admin</a></li>
                                <li><a href="admin\admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
                                <li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                            </ul>
                        </li>
                     <li><a href="../contact us.php?l=2">Contact us</a></li>
                        <li><a href="../about.php?l=2">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../index.php"><span class="glyphicon glyphicon-user"></span> logout</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <div class="container" >
        <div class="row">
            <div class="col-sm-4">
                 <h5>Photo of Student :</h5>
                <h2>Welcome</h2>
               
                <div class="">

                </div>
                <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
                <h3>Some Links</h3>
                <p>Lorem ipsum dolor sit ame.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <hr class="d-sm-none">
            </div>
            <div class="aside" style="float: right;">
        
            <div class="col-sm-8">
                


                <div class="">

                </div>
                
                <div class="container"></div>
               
            </div>
        </div>
    </div>

</body>

</html>
