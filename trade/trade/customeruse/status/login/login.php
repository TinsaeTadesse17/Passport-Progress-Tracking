<?php

if(isset($_POST['submit'])){
   if(empty($_POST['username']) || empty($_POST['password'])){
     
      echo("Invalid Input!");
   }else{
   	$user= $_POST['username'];
   	$pass= $_POST['password'];

   	$conn= mysqli_connect("localhost","gage","1234");
   	$db = mysqli_select_db($conn, "trade");
   	$query= mysqli_query($conn, "SELECT * FROM license_info WHERE password='$pass' AND username='$user'");

   	$rows= mysqli_num_rows($query);
   	if ($rows==1){
   		header("location: choice.html ");
       
     
   	}else{

   		echo"<script> alert('Incorrect User Name or Password!'); window.location='login.html'</script>";
   	}
    	mysqli_close($conn);
   }

}

?>