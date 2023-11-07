<?php
include "db_conn.php";
$id = $_GET["tinno"];

if (isset($_POST["submit"])) {
 
  $first_name = $_POST['first_name'];
  $mname = $_POST['mname'];
  $last_name = $_POST['last_name'];
  $trade_name = $_POST['tradename'];
  $status = $_POST['status'];
  $issue=  $_POST['issuedate'];
  $exp = $_POST['expdate'];

  $sql = "UPDATE `license_info` SET `fname`='$first_name',`mname`='$mname',`lname`='$last_name',`tradename`='$trade_name',`issuedate`='$issue',`expdate`='$exp',`status`='$status' WHERE tinno = $id";

  $result = mysqli_query($con, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>PHP CRUD Application</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `license_info` WHERE tinno = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
            <label class="form-label">TIN Number:</label>
            <input type="text" class="form-control" name="tinno" value="<?php echo $row['tinno'] ?>">
          </div>

          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="<?php echo $row['fname'] ?>">
          </div>
          <div class="col">
            <label class="form-label">Middle Name:</label>
            <input type="text" class="form-control" name="mname" value="<?php echo $row['mname'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $row['lname'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Trade Name:</label>
          <input type="text" class="form-control" style="width:400px;" name="tradename" value="<?php echo $row['tradename'] ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Issue Date:</label>
          <input type="date" class="form-control" name="issuedate" value="<?php echo $row['issuedate'] ?>" style="width:200px;">
        </div>
        <div class="mb-3">
          <label class="form-label">Expire Date:</label>
          <input type="date" class="form-control" name="expdate" value="<?php echo $row['expdate'] ?>"style="width:200px;">
        </div>
        <div>
        <label class="form-label">Action:</label><br>
        
        <select name="status" style=" margin-bottom: 20px;height:40px; border-color:gray;
					 width: 50%;" required>
					
						<option >Granted</option>
						<option>Blocked</option>
						
                    </select>
        </div>
        
        

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>