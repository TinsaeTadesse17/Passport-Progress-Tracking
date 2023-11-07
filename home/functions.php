<?php 

  require_once 'db.php';
  
  function dispaly_data(){
    global $con;
    if(isset($_POST['submit'])){
        $id=$_POST['track'];
    $query = "select application,verification,biostatus,printing,collection from registration where trackingnumber='$id'";
    $result = mysqli_query($con,$query);
    return $result;
  }
 }

?>