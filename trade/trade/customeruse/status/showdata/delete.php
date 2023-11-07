<?php

$id = $_POST['id'];
$sql = "DELETE FROM document WHERE username = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
