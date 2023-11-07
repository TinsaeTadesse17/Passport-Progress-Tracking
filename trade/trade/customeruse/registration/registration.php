<?php

if(isset($_POST['submit'])){
   
       
       
       $user= $_POST['username'];
       $mname= $_POST['mname'];
       $gender= $_POST['gender'];
       $phone= $_POST['phone'];
       $age= $_POST['age'];
       $tdname= $_POST['tdname'];
       $capital= $_POST['capital'];
       
       $region= $_POST['region'];
       $zone= $_POST['zone'];
       $wereda= $_POST['wereda'];
       $kebele = $_POST['kebele'];
       $status="not Granted";
       
          $conn= mysqli_connect("localhost","gage","1234");
   	   $db = mysqli_select_db($conn, "trade");
   	   $quer= mysqli_query($conn, "SELECT * FROM license_info WHERE username='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	   
        if ($rows==1){
              $conn= mysqli_connect("localhost","gage","1234");
       	      $db = mysqli_select_db($conn, "trade");
   		        $query= mysqli_query($conn, "UPDATE license_info SET mname='$mname', gender= '$gender', age='$age',phoneno='$phone',tradename='$tdname', capital='$capital', region='$region', zone='$zone',wereda='$wereda',kebele='$kebele',status='$status' WHERE username='$user'");
    
              mysqli_query($conn, $query);
    
              echo"<script> alert('Succesfully Registered!'); window.location='choice.html'</script>";
           
    }
    else{
       echo"<script> alert('Incorrect User Name!'); window.location='choice.html'</script>";

   	      
    }
       mysqli_close($conn);
}  


  

?>