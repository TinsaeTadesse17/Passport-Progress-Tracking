
<?php 

require_once 'db.php';

function dispaly_data(){
  if(isset($_POST['submit'])){
    $id=$_POST['phone'];
  global $con;
  $query = "select trackingnumber from registration where phonenumber='$id'";
  $result = mysqli_query($con,$query);
  return $result;
  }
}
?>