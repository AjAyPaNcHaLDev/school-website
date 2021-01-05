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
    <title> login register</title>
    <meta charset="utf-8">

  
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
                        <li ><a href="../../Dashboard.php">Home</a></li>

                        <script type="text/javascript">
                            var adminid = <?php echo $adminid  ;?>;

                        </script>


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
 <div class="container-fluid">
<?php 


            $sql="SELECT * FROM registerstd_adm_on_off ";

            $send=mysqli_query($connect,$sql);
          
               while ($row=mysqli_fetch_assoc($send)) {
                 $Contant=$row['Contant'];
                 $serial_no=$row['serial_no'];
                 $EnableDisable=$row['EnableDisable'];
            echo'<div class="container">';
  echo "<form > <label>".$Contant . "</label> ";
                     
                     if ($EnableDisable==0) {
                                          echo "<br><input style='width:30%;' type='text' placeholder='Enter a Reason for Disable' name='reason' required>";
                                  echo("<input type='submit' class='btn btn-danger' value='Disable'name='Disable".$serial_no."'> "); 

                                      echo "<p style='color:green'>This field now Enable</p>"; 
                              }
                                      if ($EnableDisable==1) {              
                                           
                                          echo("<input type='submit' class='btn btn-primary' value='Enable'name='Enable".$serial_no."'> ");

                                          echo "<p style='color:red'>This field now Disable</p>";
                                      }

                   
                                             
                                
             echo " </form>";
        echo "</div>";

        if (isset($_GET['Disable'.$serial_no])) {
                     $reason=$_GET['reason'];
                            $Disable=1;
            $sql="UPDATE `registerstd_adm_on_off` SET`EnableDisable`=$Disable ,  reason='{$reason}' WHERE serial_no=$serial_no";
                if (mysqli_query($connect,$sql)) {
                     // echo '<meta http-equiv="content-type" content="loginregister.php; charset=UTF-8">';
                     header('location:loginregister.php');
                }else{
                    echo "not UPDATE".$Contant .$Disable;

                }
                         }
              if (isset($_GET['Enable'.$serial_no])) {
                         
                            $Enable=0;
             $sql="UPDATE `registerstd_adm_on_off` SET`EnableDisable`=$Enable WHERE serial_no=$serial_no";

                if (mysqli_query($connect,$sql)) {
                    // echo '<meta http-equiv="content-type" content="loginregister.php; charset=UTF-8">';
                     header('location:loginregister.php');

                }else{
                    echo "not UPDATE".$Contant .$Enable;

                }
                    }



               }
?>

<div class="container">
  <form class="addclfm">
            
            <label> Create new Field For Enable Disable</label>
            <input type="text" placeholder="Enter Field Name" value="" name="Contant">

            <input type="submit" value="Add Field" class="btn btn-primary" name="Addfield">
        </form>
      
 <?php

if (isset($_GET['Addfield'])) {
 
    $Contant=$_GET['Contant'];
    if (empty($Contant)) {
        echo " <div  class='alert alert-danger'>

     Please enter Field Name!.
  </div>"; 
    }
    else{
        
        $sqlcheak="SELECT * FROM registerstd_adm_on_off WHERE Contant='{$Contant}'";
        $send=mysqli_query($connect,$sqlcheak);
if (mysqli_num_rows($send)) {
    echo " <div  class='alert alert-danger'>

     This Field  already persent!.
  </div>";
}else{
        $sql="INSERT INTO registerstd_adm_on_off (Contant) VALUES ('{$Contant}')";
         if(mysqli_query($connect,$sql)){
          echo " <div class='alert alert-success'>
    <strong>Info!</strong> Field added relod to see change!.

  </div>";
  echo '<meta http-equiv="content-type" content="loginregister.php; charset=UTF-8">';
  // header('location:loginregister.php');
         }
    
      }
    }
}




?>


     </div>
     <div class="container">
 <form class="addclfm">

      
            <label> Remove Field For Enable Disable:</label>

            <select class="select"name="serial_no">
                    <option default>select</option>
                       <?php 
            $sql="SELECT * FROM registerstd_adm_on_off ";

            $send=mysqli_query($connect,$sql);
               while ($row=mysqli_fetch_assoc($send)) {
                 $Contant=$row['Contant'];
                 $serial_no=$row['serial_no'];
            echo "<option value='{$serial_no}' > {$Contant}</option>";
               }
               
             ?>
</select>
            <input type="submit" value="Remove Field" class="btn btn-primary" name="RField">
        </form>


            <?php  

                    if (isset($_GET['RField'])) {
                        $serial_no=$_GET['serial_no'];
                        $sql="DELETE FROM registerstd_adm_on_off WHERE serial_no=$serial_no";
                          if (mysqli_query($connect,$sql)) {
                        echo "Field Delete sucess relod to see change!.";
                          echo '<meta http-equiv="content-type" content="loginregister.php; charset=UTF-8">';
                    }else{
            echo "error to delete Field or please select a field";
            }}
            ?>


      


               
       

    </div>
   
</body>
<footer>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
     <script src="../js/Dashboard.js"></script>
   
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style type="text/css">
  body{
      background-color: #b3cccb59;
        padding: 10px;
  }
    .container label{
border-bottom: thick ridge #edf5ee;
padding: 0px 0px 8px 0px;
    }
    .container{

        background-color: #b3cccb59;
        padding: 10px;
        margin: 15px auto;outline: thick ridge #edf5ee;
        font-family: monospace;
    }
    .container input[type=submit]{
      float: right;
      width: 120px;

    }
</style>
</footer>



</html>