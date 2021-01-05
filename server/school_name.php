<?php 

   
    $sql="SELECT  * FROM myschoolname WHERE schoolid=1";

    $send=mysqli_query($connect,$sql);
    while ($accept=mysqli_fetch_assoc($send)) {
        
        $schoolid=$accept['schoolid'];
        $school_name=$accept['school_name'];

    }


 ?>