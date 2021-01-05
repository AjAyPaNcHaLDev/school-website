<?php include '../server/conn.php'; 
include 'Desh data.php';
include '../server/school_name.php';


if (!isset($_SESSION['adminid'])) {
    
    header("location:admin_login.php?msg=please login your session was expire!.");
}
 
 ?>
<!DOCTYPE html>
<html>

<head>
    <title> Dashbord</title>
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
    <style type="text/css">
     


    </style>
    <script type="text/javascript">
            $(document).ready(function () {
               $('.slide').slideToggle(1000);
            });
           

             $(document).ready(function () {
               $('.container-fluid').slideToggle(1000);
            });

              $(document).ready(function () {
               $('.colsm8inner').toggle(1000);
            });
        </script>
</head>

<body class="slide" style="background-color: #f7cac982; display: none;margin-top:0px;padding: 22px">


    <div class="header"  >
        <?php
if (isset($_GET['msg'])) {
   $msg=$_GET['msg'];
   echo"<script>alert ('";echo$msg;echo "')</script>";
}


 ?>
        <h1><?php echo $school_name; ?></h1>
        
        <nav class="navbar navbar-inverse"  >
            <div class="container-fluid" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="Dashboard.php">Home</a></li>


                        

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">


                                <li><a href="#"><i class="fas fa-child"></i> Student Details</a></li>
                                <li><a href="#">Update Info</a></li>
                                <li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                            </ul>
                        </li>

                        <li><a href="../contact us.php?l=1">Contact us</a></li>
                        <li><a href="../about.php?l=1">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </nav>


    </div>


    <div class="container-fluid" >
        <div class="row" style="background-color:#cbe68e12;padding: 22px;">
            <div class="col-sm-4"style="background-color: #F7CAC9;padding: 22px;border-radius: 8px; outline: 4px ridge #ccaf;">
                <h2>About Me</h2>
                <h5>Photo of me: available soon</h5>

                <h5>
                    <?php echo $adminname; ?>
                </h5>


                <h3 id="flip" class="flip">
                    Some importent Links
                  <i id="fas2" style='font-size:24px;float: right;' class='fas'>&#xf107;</i>
              </h3>
                <style type="text/css">
                    

                </style>
                <ul id="panel" class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="Dashboard.php">HOME</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Notification</a>
                    </li>
                </ul>
                <div class="col-sm-13">
                    <h3 id="flip1" class="flip">
                        Management
                         <i id="fas02" style='font-size:24px;float: right;' class='fas'>&#xf107;</i>
                     </h3>

                    <ul id="panel1" class="nav nav-pills flex-column">
                        <li class="nav-item">
                        <a class="nav-link" href="usn.php">Update School Name</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="management/class/classmang.php">Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="management/fee/fee.php">Fee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="management/admin/adminmanag.php">System admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="management\logreg\loginregister.php">Login</a>
                        </li>
                    </ul>
                </div>
                <hr class="d-sm-none">
            </div>
           

            <div class="col-sm-8">
                   <div class="colsm8inner" style="display: none;">
                <h2>Welcome <?php echo "Mr. ". $adminname; ?></h2>
                           <br>
                
            </div>
             </div>
              <div class="Notification">
<style>
.notif{
    
    margin-top: 22px;
 margin-left: 10%;
 width: 40%;
 
 }
.noti-form input{
margin-left: 10%;
width: 40%;
 margin-top: 22px;
 background-color: transparent;
 border:1px dotted black;
}
.noti-form button{
    float: right;
    margin-right: 9%;
    margin-top: 22px;
}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('.notif').click(function(){
            $('.noti-form').toggle(1000);
        });
    });
//     function  Fnotify(){
//   var  x=document.getElementByid('Notification').value;
// alert(x);

//     }

$(document).ready(function(){
    $('#Fnotify').click(function(){

      var x= $('#Notification').val();

    });
});

</script> 


     
     <button class='notif'>Notification</button>
                          <div class="noti-form" style="display:none">  
                    <input type="text" placeholder="Add Notification" id="Notification">
                  <button onclick="Fnotify()">Add</button>
                              <script>
                              
                              </script>
</div>
            </div>
        </div> 
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>AjAyPaNcHaL Devloper.</p>
    </div>

</body>

</html>
