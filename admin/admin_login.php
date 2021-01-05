<?php include '../server/conn.php';
include '../server/school_name.php';


    $sql="SELECT * FROM `registerstd_adm_on_off` WHERE serial_no=8 AND EnableDisable=1";
$send=mysqli_query($connect,$sql);

if (mysqli_num_rows($send)>0) {

while($reasons=mysqli_fetch_assoc($send)){
    
    $reason=$reasons['reason'];
}

    header('location:../index.php?msg='.$reason);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title> Admin login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="..\css\login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script type="text/javascript" src="../js/admin login.js">
       
    </script>
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
                        <li><a href="../index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="admin register.php"><span class="glyphicon glyphicon-log-in"></span> Sing Up Admin</a></li>
                            </ul>
                        </li>
                        <li><a href="../contact us.php">Contact us</a></li>
                        <li><a href="../about.php">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <div class="container-fluid">




        <form  action="admin_login.php" method="GET">
            <div class="admin_login">
                   <?php include '../server/admin login.php';


                if (isset($_GET['msg'])) {
                    $msg = $_GET['msg'];
                   echo "
                <div class='alert alert-success'>
                    {$msg}
                  </div>

                   ";
                }


                    ?>
                <center>
                    <h1>Admin Login</h1>
                </center>

                <label><b>Admin Phone No:</b> </label>
                <input type="number" placeholder="enter Admin phone number" name="adminphone">
                <label>Password:</label>
                <input type="Password" id="psw" placeholder="please enter Password" name="psw">
 <input type="checkbox" onclick="show()" hidden="true" id="pass-toggle">
 <label for="pass-toggle"><i class="fa fa-eye" style="display: none;"id="fa-eye" aria-hidden="true"></i>
  <i class="fa fa-eye-slash" id="fa-eye-slash"  aria-hidden="true"></i>
                </label>

           


                <input type="submit" value="Login" name="Adminlogin">

                <button type="button" style="  float: right;background-color: #5657; padding: 3px;" class="btn btn-outline-info"> <a href="admin register.php" style="text-decoration: none;color:#fff;"> Admin Sign up here... </a></button>
                <button type="button" style="  float: right; padding: 3px;
" class="btn btn-danger"> <a href="../index.php" style="text-decoration: none;color:#fff;"> cancel</a> </button>
                <a href="forgotpass.php"><b>forgot </b>password ?.</a>


            </div>
        </form>




    </div>


</body>

</html>
