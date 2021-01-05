<?php 


if (isset($_GET['Add_class'])) {
 
    $class_name=$_GET['class_name'];
    if (empty($class_name)) {
        echo " <div  class='alert alert-danger'>

     Please enter Class Name!.
  </div>"; 
    }
    else{
        
        $sqlcheak="SELECT * FROM classes WHERE class_name='{$class_name}'";
        $send=mysqli_query($connect,$sqlcheak);
if (mysqli_num_rows($send)) {
    echo " <div  class='alert alert-danger'>

     This class already persent!.
  </div>";
}else{
        $sql="INSERT INTO classes (class_name) VALUES ('{$class_name}')";
         $send=mysqli_query($connect,$sql);
    echo " <div class='alert alert-success'>
    <strong>Info!</strong> class added!.
  </div>";

      }
    }
}

?>