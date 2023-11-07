<?php

if(isset($_POST['submit'])){
   
       
       
       $fname= $_POST['fname'];
       $mname= $_POST['mname'];
       $lname= $_POST['lname'];
       $dob= $_POST['dob'];
       $phone= $_POST['phone'];
      

      
       $gender= $_POST['gender'];
      
       $status="Done";
       $stat="In Progress";
       
          $conn= mysqli_connect("localhost","admin","1234");
   	   $db = mysqli_select_db($conn, "immigration");
   	   $quer= mysqli_query($conn, "SELECT * FROM registration WHERE phonenumber='$phone'");
       
   	   $rows= mysqli_num_rows($quer);
   	   
        if ($rows!=1){
         $conn= mysqli_connect("localhost","admin","1234");
   	   $db = mysqli_select_db($conn, "immigration");
   		        $query= mysqli_query($conn, "INSERT into registration(firstname, middlename,lastname,dob,phonenumber,gender,application,verification) VALUE('$fname','$mname','$lname','$dob','$phone','$gender','$status','$stat')");
    
              mysqli_query($conn, $query);
    
              echo"<script> alert('Succesfully Registered!'); window.location='tracker.php'</script>";
              
           
    }
    else{
       echo"<script> alert('You have already applied!'); window.location='registration.html'</script>";

   	      
    }
}  
   mysqli_close($conn);

  

?>