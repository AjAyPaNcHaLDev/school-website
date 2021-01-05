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
    <title> School name update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Dashboard.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="../css/usn.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="index.js"></script>
    <script type="text/javascript" src="../js/admin login.js">    </script>
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
                        <li class="active"><a href="Dashboard.php">Home</a></li>
                          <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Administrator <span class="caret"></span></a>
                            <ul class="dropdown-menu">


                                <li><a href="#">Student Details</a></li>
                                <li><a href="#">Update Info</a></li>
                                <li><a href="#"><span class="glyphicon">&#xe008;</span> School Staff </a></li>
                            </ul>
                        </li>

    =1                <li><a href="../contact us.php?l=1">Contact us</a></li>
                        <li><a href="../about.php?l=1">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="../index.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<div class="usn">
    <center><strong>  <h1><?php echo $school_name; ?></h1></strong></center>
     <div id="usnpswsucess" style="display: none;" class="alert alert-success">

        <h3><b> <?php echo $adminname; ?></b> </h3>
   <center> <strong>Success!</strong> Your<strong> password</strong> Varify Success.<br><h2>Now you can Update School Name</h2></center>
  </div>
<div class='alert alert-info'>
           <form id="usnpsw">
<center><strong>Info!</strong>   TO Update <b>School Name</b> Please Enter<b> Admin Password!.</b></center>
                      <h3><b> <?php echo $adminname;   $varify='wait';?></b> </h3>
            <label>Password:</label>
                <input type="Password" id="psw" placeholder="please enter Password" name="psw"required>
                 <input type="checkbox" onclick="show()" hidden="true" id="pass-toggle">
 <label for="pass-toggle"><i class="fa fa-eye" style="display: none;"id="fa-eye" aria-hidden="true"></i>
  <i class="fa fa-eye-slash" id="fa-eye-slash"  aria-hidden="true"></i>
                </label>

<?php 
if (isset($_GET['varify'])) {
    $adminid=$_SESSION['adminid'];
$psw=$_GET['psw'];
    if (empty($psw)) {
        echo "
  <div class='alert alert-warning'>
    <strong>Warning!</strong> Please fill Password box !. 
  </div>
        ";
    }
$psw=md5($psw);

    $psw="SELECT * FROM admin WHERE adminid='$adminid' AND psw='$psw' limit 1 ";
$sql=mysqli_query($connect,$psw);

if (mysqli_num_rows($sql)==0) {

    echo " <div id='error' class='alert alert-danger'>

     Ronge Password!.
  </div>";

}else{
echo"<script src='../js/usn.js'></script>";
$varify='done';
} 
}
?>
         <input type="submit" value="Varify" name="varify">
             </form>
 <?php 
          
if ($varify==='done') {
    
echo "
<div class='usn'>
<form>
<input type='text' name='school_name' required>

<input type='submit' value='Update School Name' name='update'>
<button ><a href='Dashboard.php'>cancel</a></button>
</form>
</div>

";
}
?>
  </div>
</div>
<?php 
if (isset($_GET['update'])) {
       $school_name=$_GET['school_name']                      ;
$error=array();

            if (empty($school_name)) {
                array_push($error, "please fill School Name ");
            }
                 if ($error!==0) {

        for ($i=0; $i <count($error) ; $i++) { 
             echo "<p style='color:red;border:black;'>{$error[$i]}</p>";
                                             }
                    }

    if (count($error)==0) {
$sql="UPDATE myschoolname SET school_name='$school_name' WHERE schoolid={$schoolid}";

     if (mysqli_query($connect,$sql)) {
                        echo "  <center>  Your<strong> School Name</strong> Update<br><h2> <strong>Success!</strong></h2><br> refresh the page to see change!.<br><h1>$school_name</h1></center>";
                    

                    } else {
                        echo "not updated";
                    }
}
}
echo "</form>";
 ?>
</body>
</html>
