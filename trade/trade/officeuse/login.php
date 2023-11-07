<?php

if(isset($_POST['submit'])){
    $user= $_POST['username'];
   	$pass= $_POST['pass'];
    $role= $_POST['role'];
   if($role=="Admin"){
    $conn= mysqli_connect("localhost","gage","1234");
    $db = mysqli_select_db($conn, "trade");
    $query= mysqli_query($conn, "SELECT * FROM office_users WHERE password='$pass' AND position='$role' AND username='$user'");
    $rows= mysqli_num_rows($query);
     
    if ($rows==1){
        header("location: ../admin/choice.html");
  
    }else{

        echo"<script> alert('Incorrect Email or Passsword or Role!'); window.location='login.html'</script>";
   }
}elseif($role=="Accountant"){
   	
   	$conn= mysqli_connect("localhost","gage","1234");
   	$dbs= mysqli_select_db($conn, "trade");
   	$quer= mysqli_query($conn, "SELECT * FROM office_users WHERE password='$pass' AND username='$user' AND position='$role'");

   	$rowss= mysqli_num_rows($quer);
    
   	if ($rowss==1){
   		header("location:viewpayment/viewpayment.php");
       
     
   	}else{

   		echo"<script> alert('Incorrect Email or Passsword or Role!'); window.location='login.html'</script>";
   	}
}else{
   	
        $conn= mysqli_connect("localhost","gage","1234");
        $dbsm= mysqli_select_db($conn, "trade");
        $querys= mysqli_query($conn, "SELECT * FROM office_users WHERE password='$pass' AND username='$user' AND position='$role'");
 
        $rowm= mysqli_num_rows($querys);
     
        if ($rowm==1){
            header("location:choice.html");
        
      
        }else{
 
            echo"<script> alert('Incorrect Email or Passsword or Role!'); window.location='login.html'</script>";
        }
    	
   }
   mysqli_close($conn);
}

?>