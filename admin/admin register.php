<?php

include '../server/conn.php';
include '../server/school_name.php';

$sql="SELECT * FROM `registerstd_adm_on_off` WHERE serial_no=2 AND EnableDisable=1";
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
    <title> Admin Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">

    <link rel="stylesheet" type="text/css" href="..\css\admin register.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script type="text/javascript" src="..\js\admin_register.js"></script>
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
                                <li><a class="active" href="admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up Admin</a></li>
                                <li><a class="active" href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
                            </ul>
                        </li>
                        <li><a href="../contact us.php">Contact us</a></li>
                        <li><a href="../about.php">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>
    <div class="container-fluid">

        <div class="admin_register">
            <?php include '../server/admin_register.php'; ?>
            <p> <span id="alerts"></span></p>
            <form action="admin register.php" method="GET" >

                <center>
                    <h1>Admin Sign Up</h1>
                </center>
                <label><b>Admin Name:</b> </label>
                <input type="text" id="adminname" placeholder="Enter Name" name="adminname"  required>
                
                <label><b>Phone no:</b> </label>
                <input type="text" id="adminphone" placeholder="enter phone number" name="adminphone" required>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender">
                <option value="0">select</option>
                    <option value="1" id="gen1">male</option>
                    <option value="2" id="gen2">female</option>
                    <option value="3" id="gen3">sheman</option>
                </select>                 
<br>
                <label> Choose Security Question</label>
                <select  id="q1" oninput="mq()" name="q">
                <option >select</option>
                             <?php 
            $sql="SELECT * FROM securityquestion ";

            $send=mysqli_query($connect,$sql);
               while ($row=mysqli_fetch_assoc($send)) {
                 $security_id=$row['security_id'];
                 $security=$row['security'];
            echo "<option value='{$security_id}' > {$security}</option>";
               }
               
             ?>

                </select>

                <input type="Password" id="answer" name="s_answer" oninput="matchanswer()" placeholder="enter answer" required="true">


                <br>
                 <label> Repeat Security Question</label>
                <select oninput="mq()" id="q2" name="q1">
                <option >select</option>
                             <?php 
            $sql="SELECT * FROM securityquestion ";

            $send=mysqli_query($connect,$sql);
               while ($row=mysqli_fetch_assoc($send)) {
                 $security_id=$row['security_id'];
                 $security=$row['security'];
            echo "<option value='{$security_id}' > {$security}</option>";
               }
               
             ?>

                </select>


                <p><span id="ques"></span></p>
                <input type="Password" id="answer1"  oninput="matchanswer()" name="s_answer1" placeholder="enter answer" required="true">
                <br>
                <p><span id="ans"></span></p>
                <label>Password:</label>
                <input type="Password" id="psw" oninput="matchpass()" placeholder="please enter Password" name="psw" required>
                <label>Repeat Password:</label>

                <input type="Password" id="repsw" placeholder="please enter Password Again" oninput="matchpass()" name="repsw" required>
                <p><span id="pass"></span></p>
                <input type="checkbox" onclick="show()" hidden="true" id="pass-toggle">
                <label for="pass-toggle"><i class="fa fa-eye" style="display: none;"id="fa-eye" aria-hidden="true"></i>
                    <i class="fa fa-eye-slash" id="fa-eye-slash"  aria-hidden="true"></i>
                </label>
                <input type="submit" onclick="return checkdata()" value="Admin Sign Up" name="AdminSignUp">

            </form>

            <button type="button" style="  float: right;background-color: #5657; padding: 3px;" class="btn btn-outline-info"> <a href="admin_login.php" style="text-decoration: none;color:#fff;"> Admin login here... </a></button>
            <button type="button" style="  float: right;" class="btn btn-danger"> <a href="../index.php" style="text-decoration: none;color:#fff;"> cancel</a> </button>



        </div>

    </div>


</body>

</html>
