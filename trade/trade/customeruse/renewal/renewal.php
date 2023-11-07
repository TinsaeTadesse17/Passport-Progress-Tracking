<?php

if(isset($_POST['submit'])){
   
       
       
       $user= $_POST['tinno'];
       
      
       $phone= $_POST['phone'];
       $age= $_POST['age'];
       $tdname= $_POST['tdname'];
       $capital= $_POST['capital'];
       
       $region= $_POST['region'];
       $zone= $_POST['zone'];
       $wereda= $_POST['wereda'];
       $kebele = $_POST['kebele'];
       $status="expired";
       $pay="to be checked";
       
          $conn= mysqli_connect("localhost","gage","1234");
   	   $db = mysqli_select_db($conn, "trade");
   	   $quer= mysqli_query($conn, "SELECT * FROM license_info WHERE tinno='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	   
        if ($rows==1){
              $conn= mysqli_connect("localhost","gage","1234");
       	      $db = mysqli_select_db($conn, "trade");
   		        $query= mysqli_query($conn, "UPDATE license_info SET age='$age',phoneno='$phone',tradename='$tdname', capital='$capital', region='$region', zone='$zone',wereda='$wereda',kebele='$kebele',status='$status',paystatus='$pay' WHERE tinno='$user'");
    
              mysqli_query($conn, $query);
    
              echo"<script> alert('Succesfully Requested!'); window.location='login/choice.html'</script>";
           
    }
    else{
       echo"<script> alert('Incorrect TIN Number!'); window.location='renewal.php'</script>";

   	      
    }
       mysqli_close($conn);
}  


  

?>