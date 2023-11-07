<?php

if(isset($_POST['submit'])){
   
       
       
       $user= $_POST['username'];
       $dob= $_POST['dob'];
       $address= $_POST['address'];
       $sname= $_POST['schoolname'];
       $gender= $_POST['gender'];
       $edu= $_POST['educationlevel'];
       $idtype=$_POST['idtype'];
       $doctype= $_POST['doctype'];
       $docref= $_POST['docref'];
       $issue = $_POST['issuedate'];
       $idnum= $_POST['idnum'];
       $saddress= $_POST['saddress'];
       $status="Not Granted";
       
          $conn= mysqli_connect("localhost","gage","1234");
   	   $db = mysqli_select_db($conn, "qr");
   	   $quer= mysqli_query($conn, "SELECT * FROM document WHERE username='$user'");
       
   	   $rows= mysqli_num_rows($quer);
   	   
        if ($rows==1){
              $conn= mysqli_connect("localhost","gage","1234");
       	      $db = mysqli_select_db($conn, "qr");
   		        $query= mysqli_query($conn, "UPDATE document SET dob='$dob', idtype='$idtype',idno= '$idnum',address='$address',schoolname='$sname',doctype='$doctype', docrefno= '$docref', issuedate='$issue', gender= '$gender', edulevel='$edu', addressofschool='$saddress', status='$status' WHERE username='$user'");
    
              mysqli_query($conn, $query);
    
              echo"<script> alert('Succesfully Registered!'); window.location='../login/choice.html'</script>";
           
    }
    else{
       echo"<script> alert('Incorrect User Name!'); window.location='registration.html'</script>";

   	      
    }
}  
   mysqli_close($conn);

  

?>