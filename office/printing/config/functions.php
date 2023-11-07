<?php 

  require_once 'db.php';

  function dispaly_data(){
    global $con;
    $query = "select * from registration where printing='In Progress'";
    $result = mysqli_query($con,$query);
    return $result;
  }

?>