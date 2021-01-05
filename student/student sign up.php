<?php include '../server/conn.php';
include '../server/school_name.php';

$sql="SELECT * FROM `registerstd_adm_on_off` WHERE serial_no=1 AND EnableDisable=1";
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
    <title> Student Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
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
                        <li ><a href="../index.php">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="..\admin\admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up Admin</a></li>
                                <li><a href="..\admin\admin_login.php"><span class="glyphicon glyphicon-log-in"></span> Login Admin</a></li>
                                <li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                            </ul>
                        </li>
                        <li><a href="contact us.php">Contact us</a></li>
                       
                        <li><a href="../about.php">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="student login.php"><span class="glyphicon glyphicon-user"></span> Student Login</a></li>

                    </ul>
                    
                </div>
            </div>
        </nav>


    </div>
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-sm-4">
                <h2>Welcome</h2>
                <h5>Photo of School :</h5>
                
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
                <h2>Sign Up Here...</h2>
                <h5>it's Student Sign Up form</h5>

                <div class="Student_login">

<?php include 'ssignup.php'; ?>

                    <form>


                      
                          <h1>Student Sign Up</h1>
                
                <label><b>Student Name:</b> </label>
                <input type="text" placeholder="Enter Name" name="name">
                <label><b>Create Student Id:</b> </label>
                <input type="text" placeholder="enter Student Id" name="id">
                <label><b>Phone no:</b> </label>
                <input type="text" id="phone" placeholder="enter phone number" name="phone" required>
                
                <select name="gender">
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
                
                <input type="submit" value="Sign Up" name="Signup">
<button type="button" style="  float: right;background-color: #5657; padding: 3px;" class="btn btn-outline-info"> 

                            <a href="student login.php" style="text-decoration: none;color:#fff;"> Student login here... </a></button>
                        <button type="button" style="  float: right;" class="btn btn-danger"> <a href="../index.php" style="text-decoration: none;color:#fff;"> cancel</a> </button>
  </form>



                </div>
            
            </div>
        </div>
    </div>

</body>
<footer>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="../css/std css/Student_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script type="text/javascript" src="..\js\admin_register.js"></script>
</footer>
</html>
