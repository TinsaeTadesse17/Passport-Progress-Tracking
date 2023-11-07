<?php

if(isset($_POST['submit'])){
    $user= $_POST['username'];
   	$pass= $_POST['password'];
    $role= $_POST['role'];
   if($role=="Admin"){
    $con= mysqli_connect("localhost","admin","1234");
    $db = mysqli_select_db($con, "immigration");
    $query= mysqli_query($con, "SELECT * FROM officeuse WHERE password='$pass' AND username='$user' AND role='$role'");
    $rows= mysqli_num_rows($query);
     
    if ($rows==1){
        header("location: adminchoice.html");
  
    }else{

        echo"<script> alert('Incorrect Email or Password!'); window.location='offlogin.html'</script>";
   }
}elseif($role=="Verification Officer"){
   	
   	$con= mysqli_connect("localhost","admin","1234");
   	$dbs= mysqli_select_db($con, "immigration");
   	$quer= mysqli_query($con, "SELECT * FROM officeuse WHERE password='$pass' AND username='$user' AND role='$role'");

   	$rowss= mysqli_num_rows($quer);
    
   	if ($rowss==1){
   		
        header("location: ../fetch/index.php ");
     
   	}else{

   		echo"<script> alert('Incorrect User Name or Password!');window.location='offlogin.html'</script>";
   	}
}elseif($role="Biometrics Officer"){
	$con= mysqli_connect("localhost","admin","1234");
   	$dbsm= mysqli_select_db($con, "immigration");
   	$quers= mysqli_query($con, "SELECT * FROM officeuse WHERE password='$pass' AND username='$user'");

   	$rowsm= mysqli_num_rows($quers);
    
   	if ($rowsm==1){
   		header("location:../bio/index.php");
       
     
   	}else{

   		echo"<script> alert('Incorrect User Name or Password!'); window.location='offlogin.html'</script>";
   	}

}
    	mysqli_close($con);
   }



?>