<?php

if(isset($_POST['submit'])){
   
       
       $fname= $_POST['fname'];
       $mname= $_POST['mname'];
       $lname= $_POST['lname'];
       $user= $_POST['username'];
       
   	   $pass= $_POST['pass'];
       $role= $_POST['role'];
   	  
   	   


   	   $conn= mysqli_connect("localhost","gage","1234");
   	   $db = mysqli_select_db($conn, "trade");
   	   $quer= mysqli_query($conn, "SELECT username FROM office_users WHERE username='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	    
        if ($rows<1){
         if(strlen($pass)>5){
   	       
              $con= mysqli_connect("localhost","gage","1234");
       	      $db = mysqli_select_db($con, "trade");
   		        $query= mysqli_query($con, "insert into office_users( fname, mname,lname,username, password,position) value('$fname','$mname','$lname', '$user', '$pass','$role')");
    
                     mysqli_query($con, $query);
    
             
              echo"<script> alert('Succesfully Registered!'); window.location='signup.html'</script>";
            
         }else{
   	  
            echo"<script> alert('Password must be atleast 6 digits!'); window.location='signup.html'</script>";
      	      
        }
      }else{
        echo"<script> alert('User Name exists!'); window.location='signup.html'</script>";
   	
          }
          mysqli_close($conn);
      }
  

  

?>