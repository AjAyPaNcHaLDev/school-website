<?php  
include '../../server/conn.php'; 
if(isset($_POST['data'])){
    $arr=array();
$arr=json_decode($_POST['data']);

$notic =$arr->data;





// // $check=mysqli_query($connect,"SELECT * FROM `notification` WHERE notic='{$notic}'");
// INSERT INTO admin (adminname) VALUES ('{$adminname}'')"
$sql="INSERT INTO notification (notic) VALUES ('{$notic}')";
mysqli_query($connect,$sql);
}

function getnotic($connect)
{
    $sql="SELECT * FROM notification  order by notic_id desc limit 10";
$myarray=array();

$data=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($data)){

    $myarray[]=($row);
}


print_r(json_encode($myarray));


}
getnotic($connect);


?>