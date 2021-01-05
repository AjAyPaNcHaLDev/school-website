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
    <title> System admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
     <script src="../js/Dashboard.js"></script>
     
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
                        <li ><a href="../../../admin/Dashboard.php?l=1">Home</a></li>



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
<div class="container-fluid-1">
 
      
<button class='btn btn-danger' style="display: none;float: right;position: fixed;display: inline;z-index: 1;">
    Hide Admins
</button>
    <button class='btn btn-primary' style="float: right; position: fixed;display: inline;z-index: 1;">
    Show Admins
</button>
  
<script type="text/javascript">
    $(document).ready(function () {
       $('.btn-primary').click(function(){
        $('.col-sm-4').slideToggle(500);
        $('.btn-primary').hide();
        $('.btn-danger').show();
       });
        $('.btn-danger').click(function(){
        $('.col-sm-4').slideToggle(500);
        $('.btn-primary').show();
        $('.btn-danger').hide();
       });

    });


</script>
    <div class="row">

<div class="container">

<?php
$getadmin=mysqli_query($connect,"SELECT * FROM admin");
while ($show=mysqli_fetch_assoc($getadmin)) {
   $adminname=$show['adminname'];
   $adminid=$show['adminid'];
   $adminphone=$show['adminphone'];
    echo '<div class="col-sm-4" style="display:none;">
          <h3>Admin  <label>  '.$adminname.'</label></h3>
                <label>ID:'.$adminid.'</label>
                    <br>
                      <label>Phone No:'.$adminphone.'</label>
                       </div>';
                                                              
}

 ?>
   
 </div>
</div>
</div>

</body>
<footer>
    
    <style type="text/css">
        body{
            background-color: #eee;
        }
       .container-fluid-1{
background-color:#F7CAC9;
padding: 22px;

       }

       .col-sm-4 {
        margin: 4px;
        width: 240px;
    background-color:#ff4e22;
    color:  #8a4c4c;
    border-radius: 4px;
    padding: 8px;
}

.col-sm-4 h3{
    color: white;
}
 .col-sm-4 label{
    font-family: monospace;
    color: #dddcdc;
 }
</style>
</footer>

</html>