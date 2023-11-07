<?php 

  require_once 'db_conn.php';
  
  function dispaly_data(){
    global $con;
    $query = "select tinno,fname,mname,lname,transno,amount,paydate, status FROM payment WHERE status='to be checked'";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>