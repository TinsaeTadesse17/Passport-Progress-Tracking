<?php 

  require_once 'db_conn.php';

  function dispaly_data(){
    $status="expired";
    global $con;
    $query = "select tinno,fname,lname,tradename,paystatus, idcard, status from license_info WHERE status='$status'";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>