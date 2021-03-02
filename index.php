<?php include 'server/conn.php';
/*
*this is first page of website.
*All Session destroy  hare.
*/

session_unset();
session_destroy();
include 'server/school_name.php';//only for access school name

?>


<!DOCTYPE html>
<html>

<head>
<title> Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  <!-- this link for header -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="index.js"></script>
</head>

<body >
<?php
if (isset($_GET['msg'])) {
$msg=$_GET['msg'];
echo"<script>alert ('";echo$msg;echo "')</script>";
}


?>

<div class="header" >
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
<li class="active"><a href="index.php">Home</a></li>
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="admin\admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up Admin</a></li>
<li><a href="admin\admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
<li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
</ul>
</li>
<li><a href="contact us.php?l">Contact us</a></li>
<li><a href="schedule.php?l">Schedule</a></li>
<li><a href="about.php?l">About</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="student\student sign up.php"><span class="glyphicon glyphicon-user"></span> Student Sign Up</a></li>
<li><a href="student\student login.php"><span class="glyphicon glyphicon-log-in"></span> Student Login</a></li>
</ul>
</div>
</div>
</nav>

</div>


</body>
<footer>
</footer>
</html>
