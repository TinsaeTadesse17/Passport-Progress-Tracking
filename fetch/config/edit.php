<?php

if(isset($_POST['submit'])){
   
       
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $lname= $_POST['lname'];
 
    $phone= $_POST['phone'];
    $pass= $_POST['password'];
       $user= $_POST['username'];
       $dob= $_POST['dob'];
       $address= $_POST['address'];
       $sname= $_POST['schoolname'];
       $gender= $_POST['gender'];
       $edu= $_POST['educationlevel'];
       $doctype= $_POST['doctype'];
       $docref= $_POST['docref'];
       $issue = $_POST['issuedate'];
       $idnum= $_POST['idnum'];
       $saddress= $_POST['saddress'];
       $file=$_POST['file'];
       
              $conn= mysqli_connect("localhost","gage","1234");
       	      $db = mysqli_select_db($conn, "qr");
   		        $query= mysqli_query($conn, "UPDATE document SET fname='$fname', mname= '$mname', lname='$lname', password='$pass', phone='$phone',dob='$dob', idno= '$idnum',address='$address',schoolname='$sname',doctype='$doctype', docrefno= '$docref', issuedate='$issue', gender= '$gender', edulevel='$edu', addressofschool='$saddress', document='$file' WHERE username='$user'");
    
              mysqli_query($conn, $query);
    
              echo"<script> alert('Succesfully Registered!'); ";
           
    }
      
   mysqli_close($conn);

  

?>