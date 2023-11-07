<?php

if(isset($_POST['submit'])){
   
       
    $user= $_POST['tinno'];
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $lname= $_POST['lname'];
    $transno= $_POST['transno'];
    $date= $_POST['date'];
    $paytype= $_POST['paytype'];
   	$status="to be checked";   


   	   $conn= mysqli_connect("localhost","gage","1234");
   	   $db = mysqli_select_db($conn, "trade");
   	   $quer= mysqli_query($conn, "SELECT tinno FROM payment WHERE tinno='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	   
        if ($rows>=0){
         
              $con= mysqli_connect("localhost","gage","1234");
       	      $dbs = mysqli_select_db($con, "trade");
   		        $query= mysqli_query($con, "insert into payment( tinno,fname,mname,lname,transno,amount,paydate,status) VALUE('$user','$fname','$mname','$lname','$transno','$paytype','$date','$status')");
    
              mysqli_query($con, $query);
    
              echo"<script> alert('Succesfully Registered!'); window.location='../registration/choice.html'</script>";
           
        
      }else{
   	        echo"<script> alert('User Name exists!'); window.location='signup.html'</script>";
   	
          }
     
   mysqli_close($conn);

  
}
?>