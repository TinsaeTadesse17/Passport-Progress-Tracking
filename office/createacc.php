<?php

if(isset($_POST['submit'])){
   
       
       $fname= $_POST['fname'];
       $user= $_POST['username'];
       $phone= $_POST['phone'];
   	   $pass= $_POST['password'];
       $role= $_POST['role'];
   	  
   	   


   	   $conn= mysqli_connect("localhost","admin","1234");
   	   $db = mysqli_select_db($conn, "immigration");
   	   $quer= mysqli_query($conn, "SELECT username FROM officeuse WHERE username='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	   if(preg_match('/^[0-9]*$/', $phone) && strlen($phone)==10) {
        if ($rows<1){
         if(strlen($pass)>5){
   	       
              $conn= mysqli_connect("localhost","admin","1234");
       	      $db = mysqli_select_db($conn, "immigration");
   		        $query= mysqli_query($conn, "insert into officeuse( fullname,username,phone, password,role) value('$fname', '$user','$phone', '$pass','$role')");
    
              mysqli_query($conn, $query);
    
             
              echo"<script> alert('Succesfully Registered!'); window.location='adminchoice.html'</script>";
            
         }else{
   	  
            echo"<script> alert('Password must be atleast 6 digits!'); window.location='createacc.html'</script>";
      	      
        }
      }else{
        echo"<script> alert('User Name exists!'); window.location='createacc.html'</script>";
   	
          }
      }else{
        echo"<script> alert('Invalid Phone Number!'); window.location='createacc.html'</script>";
      }
   mysqli_close($conn);

  
}
?>