<?php 

  require_once 'db_conn.php';

  function dispaly_data(){
    global $con;
    $query = "select * from license_info";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>