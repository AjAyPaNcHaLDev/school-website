<?php
if (isset($_GET['AdminSignUp'])) {

$adminname=ucwords($_GET['adminname']);

$adminphone=$_GET['adminphone'];
$psw=$_GET['psw'];
$repsw=$_GET['repsw'];
$security_id =$_GET['q'];
$gender=$_GET['gender'];
$security_id2 =$_GET['q1'];
$s_answer =$_GET['s_answer'];
$s_answer1 =$_GET['s_answer1'];

$error=array();

if($gender==0){
	array_push($error, "please choose gender!.");

}


if (empty($adminname)) {
	array_push($error, "please enter Admin Name!.");
}
if (empty($adminphone)||strlen($adminphone)<10) {
	array_push($error, "please enter Admin Phone No or not less then 10 digits!.");
}
if (empty($psw)) {
	array_push($error, "please enter Admin password!.");
}else{
	$psw=md5($psw);
}
if (empty($repsw)) {
	array_push($error, "please enter repeat password!.");
}else{
	$repsw=md5($repsw);
}


if (empty($security_id)||$security_id==0) {
	array_push($error, "please enter security question!.");
}if (empty($security_id2)||$security_id2==0) {
	array_push($error, "please enter security question!.");
}if (empty($s_answer)) {
	array_push($error, "please enter answer!.");
}else{
	$s_answer=md5($s_answer);
}
if (empty($s_answer1)) {
	array_push($error, "please enter answer!.");
}else{
	$s_answer1=md5($s_answer1);
}


if ($psw!=$repsw) {
	array_push($error, "password not match reenter password!.");
}
if ($security_id!=$security_id2) {
	array_push($error, "Question not match reenter Question!.");
}
if ($s_answer!=$s_answer1) {
	array_push($error, "answer not match reenter answer!.");
}

if ($error!==0) {
	for ($i=0; $i < count($error); $i++) { 
		echo " <div class='alert alert-danger'>
    <strong>".$error[$i]."</strong>
  </div>";
	}
}
if (count($error)==0) {
	



	$sql="INSERT INTO admin (adminname,adminphone,gender,psw,security_id ,securityanswer) VALUES ('{$adminname}','{$adminphone}' ,'{$gender}','{$psw}','{$security_id}','{$s_answer}')";
$cheak="SELECT adminphone FROM admin WHERE adminphone='$adminphone'  ";
	$countphone=mysqli_query($connect,$cheak);
if (mysqli_num_rows($countphone)>0) {
echo " <div class='alert alert-danger'>
    <strong>Danger!  already registed phone</strong>
  </div>";
}else{

			if (mysqli_query($connect,$sql))
			{
					echo " <div class='alert alert-success'>
    <strong>Info!</strong> you are now registerd!.
  </div>";
  header("location:admin_login.php?msg=you are now Sign Up");


			}else{

				echo " <div class='alert alert-info'>
    <strong>Info!</strong> not registerd!.
  </div>";
		}

			}



}




}


?>
