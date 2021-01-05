<?php include '../../../server/conn.php'; 
include '../../Desh data.php';
include '../../../server/school_name.php';


  $sql="SELECT * FROM `registerstd_adm_on_off` WHERE serial_no=15 AND EnableDisable=1";
$send=mysqli_query($connect,$sql);


if (mysqli_num_rows($send)>0) {

while($reasons=mysqli_fetch_assoc($send)){
    
    $reason=$reasons['reason'];
}

    header('location:../../Dashboard.php?msg='.$reason);
}
           if (isset($_GET['logout'])){
            if ((!isset($_SESSION['adminid']))&&(!isset($_SESSION['student_id']))  ) {
        header("location:../admin/index.php?msg=please login your session was expire!.");
            }
        }
 
 ?>
<!DOCTYPE html>
<html>

<head>
    <title> class management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="classmang.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script src="../../../js/Dashboard.js"></script>
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
                        <li><a href="../../Dashboard.php">Home</a></li>
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
  
  <div class="container-fluid-main">
    <div class="container-fluid-main1">
        <div class="container-fluid-main2">
    <center class="center">ADD/REMOVE CLASS</center>
     <div class="container">
        <form class="addclfm">
            <?php include 'addclass.php';?>
            <label> Add class:</label>
            <input type="text" placeholder="Enter class Name" value="" name="class_name">

            <input type="submit" value="Add Class" class="btn btn-primary" name="Add_class">
        </form>


    </div>
 <div class="container">
  
        <form class="addclfm">
           
            <label> Remove Class:</label>

            <select class="select"name="class_id">
              <option>select</option>
                       <?php 
            $sql="SELECT * FROM classes ";

            $send=mysqli_query($connect,$sql);
               while ($row=mysqli_fetch_assoc($send)) {
                 $class_name=$row['class_name'];
                 $class_id=$row['class_id'];
            echo "<option value='{$class_id}' > {$class_name}</option>";
               }
               
             ?>
</select>
            <input type="submit" value="Remove Class" class="btn btn-primary" name="remove_class">
        </form>


            <?php  

                    if (isset($_GET['remove_class'])) {
                        $class_id=$_GET['class_id'];
                        $sql="DELETE FROM classes WHERE class_id=$class_id";
                          if (mysqli_query($connect,$sql)) {
                        echo "Class Delete sucess";
                    }else{
            echo "error to delete class";
            }
                $sql="DELETE FROM subject WHERE class_id=$class_id";
                if (mysqli_query($connect,$sql)) {
                echo "with its Subject ";
                 header("location:classmang.php");
            }else{
            echo "error to delete class";
            }
            }

            ?>

    </div>
</div>
<div class="container-fluid-main2">
<center class="center">ADD/REMOVE SUBJECTS</center>

    <div class="container">

        <form class="addclfm">

            <label> Add Subject</label><br>
            <label>Number of Subject:</label>

            <input type='number' min="1" value="6" max="15" name='cols'>
            <input type="submit" value="Add" class="btn btn-primary" name="Addsub">
        </form>
        <?php  include 'addsub.php'; ?>

         </div>
         <div class="container">
        <form class="addclfm">
            <label> Show Subject</label><br>
            <label>Class:</label>
            <select class="select"name="class_id">
              <option>select</option>
  <?php 
                $sql="SELECT * FROM classes";

                $send=mysqli_query($connect,$sql);
                   while ($row=mysqli_fetch_assoc($send)) {
                     $class_name=$row['class_name'];
                     $class_id=$row['class_id'];
                echo "<option value='{$class_id}' > {$class_name}</option>";
                   }
                   
                 ?>

            </select>
            <input type="submit" value="Show Subject" class="btn btn-primary" name="showsubj">
        </form> 

<?php

 if (isset($_GET['showsubj'])) {
    
          $class_id=$_GET['class_id'];
               
          echo "<select class='select' name='subid'>";

        $sql="SELECT * FROM subject WHERE class_id='{$class_id}' ";

$send=mysqli_query($connect,$sql);
   while ($row=mysqli_fetch_assoc($send)) {
     $subjects=$row['subjects'];
     $subid=$row['subid'];
     
echo "<option value='{$subid}' > {$subjects}</option>";
   }
echo "</select>";
}
      


  ?>

</div>

         <div class="container">
        <form class="addclfm">
            <label> Remove Subject</label><br>
            <label>Class:</label>
            <select class="select"name="class_id">
              <option>select</option>
  <?php 
                $sql="SELECT * FROM classes";

                $send=mysqli_query($connect,$sql);
                   while ($row=mysqli_fetch_assoc($send)) {
                     $class_name=$row['class_name'];
                     $class_id=$row['class_id'];
                echo "<option value='{$class_id}' > {$class_name}</option>";
                   }
                   
                 ?>

            </select>
            <input type="submit" value="Show Subject" class="btn btn-primary" name="removeSub">
        </form>
   
        <?php
 if (isset($_GET['removeSub'])) {
    echo"
 
    <form class='addclfm'>";
          $class_id=$_GET['class_id'];
               
          echo "<select class='select' name='subid'>";
          echo"<option>select</option>";
        $sql="SELECT * FROM subject WHERE class_id='{$class_id}' ";

$send=mysqli_query($connect,$sql);
   while ($row=mysqli_fetch_assoc($send)) {
     $subjects=$row['subjects'];
     $subid=$row['subid'];
     
echo "<option value='{$subid}' > {$subjects}</option>";
   }
echo "</select>
<input type='submit'name='deletesub' class='btn btn-primary' value='Delete Subject'>

";
echo"</form>";
      }

// here delete subject
if (isset($_GET['deletesub'])) {
    $subid=$_GET['subid'];
if (empty($subid)) {
    echo "please select a value ";
    exit;
}
$sql="DELETE FROM subject WHERE subid=$subid";
if (mysqli_query($connect,$sql)) {
    echo "Subject Delete sucess";
}
}


    ?>
    </div>
</div></div>
   </div>
</body>

</html>
