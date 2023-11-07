<?php
include "db_conn.php";
include "fun.php";
$id = $_POST['username'];
$role=$_POST['role'];

$query= mysqli_query($con, "SELECT * FROM office_users WHERE  position='$role' AND username='$id'");
$rows= mysqli_num_rows($query);
 
if ($rows==1){


$sql = "DELETE FROM office_users WHERE username = '$id' AND position='$role'";
$result = mysqli_query($con, $sql);

if ($result) {
  echo"<script> alert('Succesfully Deleted!'); window.location='../choice.html'</script>";
} else {
  echo"<script> alert('User Name not found!'); window.location='delete.html'</script>";
}
}else{
  echo"<script> alert('User Name or Role is Incorrect!'); window.location='delete.html'</script>";
}