<?php 

  require_once 'db_conn.php';

  function dispaly_data(){
    global $con;
    $query = "select * from office_users";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>