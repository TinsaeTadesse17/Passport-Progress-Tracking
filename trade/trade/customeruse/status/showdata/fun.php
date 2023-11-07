<?php 

  require_once 'db_conn.php';

  function dispaly_data(){
    if(isset($_POST['submit'])){
      $id=$_POST['tinno'];
    global $con;
    $query = "select tinno,fname,lname,paystatus, status from license_info where tinno='$id'";
    $result = mysqli_query($con,$query);
    return $result;
    }
    
  }
?>