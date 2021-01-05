<!-- if (isset($_GET['Addclass'])) {
    $cols=$_GET['cols'];
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
   

     
echo"
<form>";
for ($i=1; $i < $cols+1; $i++) { 
    echo "<label> Subject" .$i."Name:</label>";
    echo "<input type='text' placeholder='Enter Subject Name' name='subject".$i."'><br>"; 

}
echo "<input type='submit'  name='Addclass";


echo"
</form>";
        $sql="INSERT INTO classes (class_name) VALUES ('{$class_name}')";
         $send=mysqli_query($connect,$sql);
    echo " <div class='alert alert-success'>
    <strong>Info!</strong> class added!.
  </div>";

      }
    }
} -->

<?php include '../../../server/conn.php';?>
<form>
    <input type="submit" name="ok">
</form>

<?php  if (isset($_GET['ok'])) { 
  $sql="CREATE table subject2 (subject1
varchar(255));"; }
mysqli_query($connect,$sql);


?>
