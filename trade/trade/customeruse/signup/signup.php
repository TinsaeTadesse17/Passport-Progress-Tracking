<?php

if(isset($_POST['submit'])){
   
       
       $fname= $_POST['fname'];
       
       $lname= $_POST['lname'];
       $user= $_POST['username'];
      
   	   $pass= $_POST['pass'];
   	   $cpass= $_POST['cpass'];
   	   


   	   $conn= mysqli_connect("localhost","gage","1234");
   	   $db = mysqli_select_db($conn, "trade");
   	   $quer= mysqli_query($conn, "SELECT username FROM license_info WHERE username='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	   
        if ($rows<1){
         if(strlen($pass)>5){
   	       if($pass==$cpass){
              $con= mysqli_connect("localhost","gage","1234");
       	      $dbs = mysqli_select_db($con, "trade");
   		        $query= mysqli_query($con, "insert into license_info( fname,lname,username,password) VALUE('$fname','$lname', '$user','$pass')");
    
              mysqli_query($con, $query);
    
              echo"<script> alert('Succesfully Registered!'); window.location='../login/login.html'</script>";
            }else{
      
               echo"<script> alert('Password doesnot match!'); window.location='signup.html'</script>";

   	      }
         }else{
   	  
               echo"<script> alert('Password must be atleast 6 digits!'); window.location='signup.html'</script>";
      	      
        }
      }else{
   	        echo"<script> alert('User Name exists!'); window.location='signup.html'</script>";
   	
          }
     
   mysqli_close($conn);

  
}
?>