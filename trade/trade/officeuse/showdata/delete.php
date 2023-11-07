<?php
include "db_conn.php";
include "fun.php";
$id = $_GET['tinno'];
$sql = "DELETE FROM license_info WHERE tinno = '$id'";
$result = mysqli_query($con, $sql);

if ($result) {
  echo"<script> alert('Deleted Successfully'); window.location='../choice.html'</script>";
} else {
  echo "Failed: " . mysqli_error($conn);
}
