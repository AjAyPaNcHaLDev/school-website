<?php 

if (isset($_GET['cols'])) {
	$cols=$_GET['cols'];
}else{
	$cols=1;
}


if (isset($_GET['Addsub'])) {
	
	if (empty($cols)) {
        echo "<div  class='alert alert-danger'>
     Please enter Number of Subject !.
  </div>";
 exit;
    }



  echo'  
<form class="addclfm">
<label> class:</label>
  <select class="select" name="class_id">';

$sql="SELECT * FROM classes ";

$send=mysqli_query($connect,$sql);
   while ($row=mysqli_fetch_assoc($send)) {
     $class_name=$row['class_name'];
     $class_id=$row['class_id'];
echo "<option style='background:transparent;' value='{$class_id}' > {$class_name}</option>";
   }

      
          
 // if ($send){echo "okok";
 //      }else{
 //        echo "error",mysqli_error($connect);
 //      }     
 
  echo'</select>'; 






    echo("

    	<input name='cols' value={$cols} hidden>
    	");
    for ($i=1; $i < $cols+1; $i++) { 
    echo " <hr style='background-color:#a94442;'><br>
    <label><b> Subject " .$i." Name:</b></label>";
    echo "<input type='text' placeholder='Enter Subject Name' name='subject".$i."'required>
   "; 
}
echo "<input type='submit' class='btn btn-primary'  name='AddSub' value='Add Subject'>


</form>";
}

if (isset($_GET['AddSub'])) {
$class_id=$_GET['class_id'];

	// echo "string";
	for ($i=1; $i <$cols+1 ; $i++) { 
		$sub =$_GET['subject'.$i];


		// $sql= "INSERT into subject (`subjects`, `classid`) values($sub,(SELECT classid FROM classes where classes.class_name ='bca' limit 1))";
    $cheak="SELECT * FROM subject where subjects= '$sub' and class_id=$class_id";



    $send=mysqli_query($connect,$cheak);

    if (mysqli_num_rows($send)>0) {
      echo " <div class='alert alert-danger'>
    already registed subject <strong>        
  ".$sub."</strong></div>";
    }else{
		  $sql="INSERT INTO `subject`( `subjects`, `class_id`) VALUES ('{$sub}', $class_id)";
      if (mysqli_query($connect,$sql)) {
        echo $sub."<hr>";
      }else{
        echo "error",mysqli_error($connect);
      }}
		}
}

?>
