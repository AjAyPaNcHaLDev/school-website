<?php 


if (isset($_SESSION['adminid'])) {
	$adminid=$_SESSION['adminid'];
	
	$sql="SELECT  * FROM admin WHERE adminid='{$adminid}'";
	$send=mysqli_query($connect,$sql);
	while ($accept=mysqli_fetch_assoc($send)) {
		
		$adminid=$accept['adminid'];
		$adminname=$accept['adminname'];
	}
}



 ?>