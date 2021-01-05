<?php 

 $sql="SELECT * FROM registerstd_adm_on_off ";

            $send=mysqli_query($connect,$sql);
          
               while ($row=mysqli_fetch_assoc($send)) {
                 $Contant=$row['Contant'];
                 $serial_no=$row['serial_no'];
                 $EnableDisable=$row['EnableDisable'];
        

        if (isset($_GET['Disable'.$serial_no])) {
                     
                            $Disable=1;
            $sql="UPDATE `registerstd_adm_on_off` SET`EnableDisable`=$Disable WHERE serial_no=$serial_no";
                if (mysqli_query($connect,$sql)) {
                    header("location:loginregister.php");
                }else{
                    echo "not UPDATE".$Contant .$Disable;

                }
                         }
              if (isset($_GET['Enable'.$serial_no])) {
                         
                            $Enable=0;
             $sql="UPDATE `registerstd_adm_on_off` SET`EnableDisable`=$Enable WHERE serial_no=$serial_no";

                if (mysqli_query($connect,$sql)) {
                    header("location:loginregister.php");
                }else{
                    echo "not UPDATE".$Contant .$Enable;

                }
                    }



               }


    if (isset($_GET['RField'])) {
                        $serial_no=$_GET['serial_no'];
                        $sql="DELETE FROM registerstd_adm_on_off WHERE serial_no=$serial_no";
                          if (mysqli_query($connect,$sql)) {
                        echo "Field Delete sucess";
                    }else{
            echo "error to delete Field or please select a field";
            }}

 ?>