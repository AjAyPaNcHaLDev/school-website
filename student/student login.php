<?php include '../server/conn.php';
include '../server/school_name.php';

$sql="SELECT * FROM `registerstd_adm_on_off` WHERE serial_no=7 AND EnableDisable=1";
$send=mysqli_query($connect,$sql);
if (mysqli_num_rows($send)>0) {

while($reasons=mysqli_fetch_assoc($send)){
    
    $reason=$reasons['reason'];
}

    header('location:../index.php?msg='.$reason);
}

function login( $connect)
{
    include 'slogin.php';
}
 ?>

<!DOCTYPE html>
<html>

<head>
    <title> Student login</title>
   
</head>

<body >
    <div class="header">


<h1><h3>〖ή𝑒w〗𝕊h🅸𝓿คl🅸k HᎥ🅶ђﾂ sc𝖍๏๏ℓ</h3>
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
                        <li><a href="../index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="admin\admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up Admin</a></li>
                                <li><a href="admin\admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
                                <li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                            </ul>
                        </li>
                        <li><a href="contact us.php">Contact us</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <li><a href="../about.php">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="student sign up.php"><span class="glyphicon glyphicon-user"></span> Student Sign Up</a></li>

                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-sm-4">
                <marquee><h2>Welcome</h2></marquee>
                <h5>Photo of School :</h5>
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
            <div class="col-sm-8">
                <h2>Login Here...</h2>
                <h5>it's Student login form</h5>

                <div class="Student_login">

<?php



if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];
                   echo "
                <div class='alert alert-success'>
                    {$msg}
                  </div>

                   ";
                }
login($connect);

?>

         <form>
            <div>
                <center>
                    <h1>Student Login</h1>
                </center>
                <label><b>Student Id:</b> </label>
                <input type="text" placeholder="Enter Student Id" name="student_id">
                <label>Password:</label>
                <input type="Password" id="psw" placeholder="Please enter Password" name="psw">
 <label style="float: right; font-size: 29px;margin-top:10px;background-color: transparent;border-top: transparent;border-right: transparent;border-left: transparent;border-bottom: 1px solid brown; " for="pass-toggle">
<input type="checkbox" onclick="slogpass()" hidden="true" id="pass-toggle">


    <i class="fa fa-eye" style="display: none;"id="fa-eye" aria-hidden="true"></i>
  <i class="fa fa-eye-slash" id="fa-eye-slash"  aria-hidden="true"></i>
  </label>

  
                            <input type="submit" value="Login" name="login">
                            



                            <button type="button" style="  float: right;background-color: #5657; padding: 3px;" class="btn btn-outline-info"> <a href="student sign up.php" style="text-decoration: none;color:#fff;">Student sign up </a></button>
                            <button type="button" style="  float: right; padding: 3px;
" class="btn btn-danger"> <a href="../index.php" style="text-decoration: none;color:#fff;"> cancel</a> </button>
                            <a href="../admin/forgotpass.php?w=1"><b>forgot </b>password ?.</a>


                        </div>
                    </form>



                </div>
           
            </div>
        </div>
    </div>

</body>
<footer>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="../css/std css/Student_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/admin login.js"></script>
    <script src="index.js"></script>
    
</footer>
</html>
