<?php





if (isset($_GET['Adminlogin'])) {

$adminphone=$_GET['adminphone'];
$psw=md5($_GET['psw']);

$error=array();

if (empty($adminphone)) {
	array_push($error, "please enter Admin Phone No!.");
}
if (empty($psw)) {
	array_push($error, "please enter Admin password!.");
}

if ($error!==0) {
	for ($i=0; $i < count($error); $i++) { 
		echo " <div class='alert alert-danger'>
    <strong>Danger!  ".$error[$i]."</strong>
  </div>";
	}
}
if (count($error)==0) {
	
$login="SELECT * FROM admin WHERE adminphone='$adminphone' AND psw='$psw' limit 1 ";
$sql=mysqli_query($connect,$login);

if (mysqli_num_rows($sql)==0) {
	echo " <div class='alert alert-danger'>
    <strong>Danger! Sign Up first please!.</strong>
  </div>";
}else{

	while($user=mysqli_fetch_assoc($sql)){

		$_SESSION['adminid']=$user['adminid'];
		
		header("location:Dashboard.php");
	}
}

}




}


?>
