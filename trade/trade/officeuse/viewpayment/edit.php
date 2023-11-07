<?php
include "db_conn.php";
$id = $_GET["tinno"];

if (isset($_POST["submit"])) {
 
  $first_name = $_POST['first_name'];
  $mname = $_POST['mname'];
  $last_name = $_POST['last_name'];
  
  $status = $_POST['status'];

 

  $sql = "UPDATE `license_info` SET paystatus ='$status' WHERE tinno = '$id'";
  $result = mysqli_query($con, $sql);

  
  $sqli = "UPDATE `payment` SET status ='$status' WHERE tinno = '$id'";
  $result = mysqli_query($con, $sqli);

  if ($result) {
    header("Location: viewpayment.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($con);
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

  <title>Check Payments</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Check Payment
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Approve Payment</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `payment` WHERE tinno = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_row($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        <div class="col">
            <label class="form-label">TIN Number:</label>
            <input type="text" class="form-control" name="tinno" value="<?php echo $row[0] ?>">
          </div>

          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="<?php echo $row[1] ?>">
          </div>
          <div class="col">
            <label class="form-label">Middle Name:</label>
            <input type="text" class="form-control" name="mname" value="<?php echo $row[2] ?>">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $row[3] ?>">
          </div>
        </div>

       
        <div>
        <label class="form-label">Action:</label><br>
        
        <select name="status" style=" margin-bottom: 20px;height:40px; border-color:gray;
					 width: 50%;" required>
					
						<option >Payed</option>
						<option>Not Payed</option>
						
                    </select>
        </div>
        
        

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
       
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>