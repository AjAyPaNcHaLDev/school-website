<?php if (isset($_GET['Signup'])) {
   $student_name=ucwords($_GET['name']);
   $student_id=$_GET['id'];
   $phone=$_GET['phone'];
   $psw=$_GET['psw'];
   $gender=$_GET['gender'];
   $repsw=$_GET['repsw'];
   $security_id =$_GET['q'];
$security_id2 =$_GET['q1'];
$s_answer =$_GET['s_answer'];
$s_answer1 =$_GET['s_answer1'];
   $error= array();
   if($gender==0){
	array_push($error, "please choose gender!.");

}if (empty($phone)||strlen($phone)<10) {
	array_push($error, "please enter  Phone No or not less then 10 digits!.");
}
   if (empty($student_name)) {
      array_push($error, "please enter a valid name");
   }
   if (empty($student_id)) {
      array_push($error, "please enter a valid id");
   }
   if (empty($psw)) {
      array_push($error, "please enter a valid Password");
   }else{
    $psw=md5($psw);
   }
   if (empty($repsw)) {
      array_push($error, "please enter a valid re-enter Password");

   }else{
    $repsw=md5($repsw);
   }
if (empty($security_id)||$security_id==0){
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


   if ($psw!==$repsw) {
      array_push($error, "Password not match reenter Password");
   }
   
if ($security_id!=$security_id2) {
  array_push($error, "Question not match reenter Question!.");
}
if ($s_answer!=$s_answer1) {
  array_push($error, "answer not match reenter answer!.");
}
   if ($error!==0) {
      for ($i=0; $i <count($error) ; $i++) { 
         echo "<p style='color:red;'>".$error[$i]."?.</p>" ;
      }
   }
   if (count($error)==0) {
    


    $sql="INSERT INTO student_info (student_id,student_name,phone,psw,gender,security_id ,securityanswer) VALUES ('{$student_id}','{$student_name}' ,'{$phone}','{$psw}','{$gender}','{$security_id}','{$s_answer}')";
$cheak="SELECT student_id FROM student_info WHERE student_id='$student_id'  ";
    $countphone=mysqli_query($connect,$cheak);
if (mysqli_num_rows($countphone)>0) {
echo " <div class='alert alert-danger'>
    <strong>Danger!  already registed id</strong>
  </div>";
}else{

            if (mysqli_query($connect,$sql))
            {
                   
  header("location:student login.php?msg=you are now Sign Up");


            }else{

                echo " <div class='alert alert-info'>
    <strong>Info!</strong> not registerd!.
  </div>";
        }

            }



}} ?>