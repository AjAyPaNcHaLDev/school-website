<?php include '../server/conn.php';
include '../server/school_name.php';
  $sql="SELECT * FROM `registerstd_adm_on_off` WHERE serial_no=3 AND EnableDisable=1";
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


    <title>forgot password</title>
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
<style type="text/css">
    
.container{
  border: 6px dotted white;
    padding: 71px;
    background-color: #98afffa9;
}   
.container form input[type='number'],input[type='text'], input[type='password']{
    background-color: transparent;
    border-top: transparent;
    border-right: transparent;
    border-left: transparent;
    border-bottom: 1px solid brown;
    padding: 14px;
    width: 20%;


}

.container form select{
    border-top: transparent;
    border-right: transparent;
    border-left: transparent;
    border-bottom: 1px solid brown;
    background-color: transparent;
     width: 20%;
    padding: 14px;
}
.container form input[type='submit'] {
    width: 150px;
    padding: 14px 0px 14px 0px;
    float: right;
}

.container form  input:hover[type='submit'] {
    padding: 14px 0px 14px 0px;
    background-color: green;
     border: 2px dotted white;
    `
}
.container form  input:active[type='submit'] {
    padding: 14px 0px 14px 0px;
    background-color: transparent;
     border: 5px dotted green;
    `
}
</style>

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
                  
                </div>
            </div>
        </nav>
</div>

 <center><h1>Admin Update your Password here...</h1></center>
<div id="admin" class="container">
  <center><h3><a href="admin register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
    <a href="admin_login.php"><span class="glyphicon glyphicon-user"></span> login </a></h3></center>
    <form><label> Admin Name: </label>
<input type="text" name="adminname" ><br>
<label> Admin phone: </label>
<input type="number" name="adminphone" ><br>
        <label> Choose Security Question: </label>

                <select  id="q1"  name="q" >
       <?php

                       
            $sql="SELECT * FROM securityquestion ";

            $send=mysqli_query($connect,$sql);
               while ($row=mysqli_fetch_assoc($send)) {
                 $security_id=$row['security_id'];
                 $security=$row['security'];
            echo "<option value='{$security_id}' > {$security}</option>";
               }
?>

                </select><br>   
                <label> Answer: </label>
                <input type="password" name="securityanswer"  >
                <input type="submit" value="verify" name="verify">
    </form>
    
<?php 

if (isset($_GET['verify'])) {
    $adminname=$_GET['adminname'];
    $adminphone=$_GET['adminphone'];
    $security_id=$_GET['q'];
   $securityanswer=$_GET['securityanswer'];
$error=array();
   if (empty($adminname)) {
       array_push($error, "enter Admin name!.");
   }
   if (empty($adminphone)) {
       array_push($error, "enter  adminphone!.");
   }
    if (empty($securityanswer)) {
       array_push($error, "enter answer!.");
   }else{
    $securityanswer=md5($securityanswer);
   }



if ($error!==0) {
    for ($i=0; $i < count($error); $i++) { 
        echo " <div class='alert alert-danger'>
    <strong>  ".$error[$i]."</strong>
  </div>";
    }
}
if (count($error)==0) {

$sql="SELECT * FROM  admin WHERE adminname='{$adminname}'AND adminphone=$adminphone AND securityanswer='{$securityanswer}' AND security_id=$security_id";
$send=mysqli_query($connect,$sql);
if (mysqli_num_rows($send)>0) {
   echo "<h2><center>match sucess please set new password</center>    <h2>";

echo"<form>
<label>$adminname</label>
<br>
<input type='text' name='adminphone' value='{$adminphone}' style='display:none;'  >
<br><br><br>
<label>New password</label>
<input type='password' name='psw'  ><br>
<label>Re-enter New password</label>
<input type='password' name='psw2'>

<input type ='submit' name ='change' value='change'>";

}else{
  echo "<div  class='alert alert-danger'>
     detials not match !.
  </div>";
}

}
    

}
if (isset($_GET['change'])) {
   $psw=$_GET['psw'];
   $psw2=$_GET['psw2'];
   $admin_phone=$_GET['adminphone'];

$error=array();
   if (empty($psw)) {
    array_push($error, "please enter  password!.");
}else{
    $psw=md5($psw);
}
if (empty($psw2)) {
    array_push($error, "please enter repeat password!.");
}else{
    $psw2=md5($psw2);
}if ($psw!=$psw2) {
    array_push($error, "password not match reenter password!.");
}if ($error!==0) {
    for ($i=0; $i < count($error); $i++) { 
        echo " <div class='alert alert-danger'>
    <strong>  ".$error[$i]."</strong>
  </div>";
    }
}
if (count($error)==0) {


$sql="UPDATE admin SET psw='$psw' WHERE adminphone=$admin_phone";
if (mysqli_query($connect,$sql)) {
    echo"updated";
}else{
    echo "not UPDATE";

}

}

}
 ?>

</div>

                                                <!-- student section  -->
                                                <center><h1>Student Update your Password here...</h1></center>

<div id="student" class="container">
    <center><h3> <a href="../student/student sign up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
    <a href="../student/student login.php"><span class="glyphicon glyphicon-user"></span> login </a></h3></center>
    <form><label> Student Name: </label>
<input type="text" name="student_name" ><br>
<label> Student Id: </label>
<input type="text" name="student_id" ><br>
        <label> Choose Security Question: </label>

                <select  id="q1"  name="q" >
       <?php

                       
            $sql="SELECT * FROM securityquestion ";

            $send=mysqli_query($connect,$sql);
               while ($row=mysqli_fetch_assoc($send)) {
                 $security_id=$row['security_id'];
                 $security=$row['security'];
            echo "<option value='{$security_id}' > {$security}</option>";
               }
?>

                </select><br>   
                <label> Answer: </label>
                <input type="password" name="securityanswer"  >
                <input type="submit" value="verify" name="verifystd">
    </form>

<?php 

if (isset($_GET['verifystd'])) {
    $student_name=$_GET['student_name'];
    $student_id=$_GET['student_id'];
    $security_id=$_GET['q'];
   $securityanswer=$_GET['securityanswer'];
$error=array();
   if (empty($student_name)) {
       array_push($error, "enter Student name!.");
   }
   if (empty($student_id)) {
       array_push($error, "enter  Student id!.");
   }
    if (empty($securityanswer)) {
       array_push($error, "enter answer!.");
   }else{
    $securityanswer=md5($securityanswer);
   }



if ($error!==0) {
    for ($i=0; $i < count($error); $i++) { 
        echo " <div class='alert alert-danger'>
    <strong>  ".$error[$i]."</strong>
  </div>";
    }
}
if (count($error)==0) {

$sql="SELECT * FROM  student_info WHERE student_name='{$student_name}'AND student_id='{$student_id}' AND securityanswer='{$securityanswer}' AND security_id=$security_id";
$send=mysqli_query($connect,$sql);
if (mysqli_num_rows($send)>0) {
   echo "<h2><center>match sucess please set new password</center>    <h2>";

echo"<form>
<label>$student_name</label>
<br>
<input type='text' name='student_id' value='{$student_id}' style='display:none'  >
<br><br><br>
<label>New password</label>
<input type='password' name='psw'  ><br>
<label>Re-enter New password</label>
<input type='password' name='psw2'>

<input type ='submit' name ='changestd' value='change'>";

}else{
  echo "<div  class='alert alert-danger'>
     detials not match !.
  </div>";
}

}
    

}
if (isset($_GET['changestd'])) {
   $psw=$_GET['psw'];
   $psw2=$_GET['psw2'];
   $student_id=$_GET['student_id'];

$error=array();
   if (empty($psw)) {
    array_push($error, "please enter  password!.");
}else{
    $psw=md5($psw);
}
if (empty($psw2)) {
    array_push($error, "please enter repeat password!.");
}else{
    $psw2=md5($psw2);
}if ($psw!=$psw2) {
    array_push($error, "password not match reenter password!.");
}if ($error!==0) {
    for ($i=0; $i < count($error); $i++) { 
        echo " <div class='alert alert-danger'>
    <strong>  ".$error[$i]."</strong>
  </div>";
    }
}
if (count($error)==0) {

$sql="UPDATE student_info SET psw='$psw' WHERE student_id='$student_id'";
if (mysqli_query($connect,$sql)) {
    echo"updated";
}else{
    echo "not UPDATE";

}


}

}
 ?>

</div>


</body>

</html>