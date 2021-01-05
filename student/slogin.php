
<?php
if (isset($_GET['login'])) {

$student_id=$_GET['student_id'];
$psw=md5($_GET['psw']);

$error=array();

if (empty($student_id)) {
    array_push($error, "please enter student Id!.");
}
if (empty($psw)) {
    array_push($error, "please enter password!.");
}

if ($error!==0) {
    for ($i=0; $i < count($error); $i++) { 
        echo " <div class='alert alert-danger'>
    <strong>Danger!  ".$error[$i]."</strong>
  </div>";
    }
}
if (count($error)==0) {
    
$login="SELECT * FROM student_info WHERE student_id='$student_id' AND psw='$psw' limit 1 ";
$sql=mysqli_query($connect,$login);

if (mysqli_num_rows($sql)==0) {
    echo " <div class='alert alert-danger'>
    <strong>Danger! Sign Up first please!.</strong>
  </div>";
}else{

    while($user=mysqli_fetch_assoc($sql)){

        $_SESSION['student_id']=$user['student_id'];    
        
        header("location:sdash.php");
    }
}

}




}


?>