<?php
include "config/db.php";
$id = $_GET["phone"];
if (isset($_POST["submit"])) {
  $track= $_POST['track'];
  
  $jj= 'Verified';
  
  $assign = $_POST['ass'];
  $appdate=  $_POST['appdate'];
  

  $sql = "UPDATE `registration` SET `biostatus`='Assigned to: $assign on $appdate',`verification`='$jj' WHERE trackingnumber = $track";

  $result = mysqli_query($con, $sql);

  if ($result) {
    header("Location: index.php?msg=Assigned Successfully");
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

  <title>immigration</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: black; color:white; height:100px;">
   Assign To Biometrics Collector
  </nav>

  <div class="container" style="font-size:20px; font-weight:800;">
    

  

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
        
        <?php 
          $sql = "SELECT * FROM registration WHERE phonenumber='$id'";
          $res = mysqli_query($con,  $sql);
          $query= "SELECT fullname FROM officeuse where role='Verification Officer' ";
          $re = mysqli_query($con, $query);
          $result= mysqli_fetch_assoc($re);

          if (mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {  ?>
            <div class="col">
          
          <label class="form-label">Tracking Number:</label>
          
          <input type="text" class="form-control" name="track" value="<?php echo $row['trackingnumber'] ?>"required>
          
        </div>
          <div class="col">
          
            <label class="form-label">First Name:</label>
            
            <input type="text" class="form-control" name="first_name" value="<?php echo $row['firstname'] ?>"required>
            
          </div>
          <div class="col">
            <label class="form-label">Middle Name:</label>
            <input type="text" class="form-control" name="middle_name" value="<?php echo $row['middlename'] ?>"required>
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $row['lastname'] ?>"required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Date of Birth:</label>
          <input type="date" class="form-control" style="width:400px;" name="dob" value="<?php echo $row['dob'] ?>"required>
        </div>
        <div class="mb-3">
          <label class="form-label">Gender:</label>
          <input type="text" class="form-control" style="width:400px;" name="gender" value="<?php echo $row['gender'] ?>"required>
        </div>
        
        <div class="mb-3">
          <label class="form-label">Phone Number:</label>
          <input type="text" class="form-control" style="width:400px;" name="phone" value="<?php echo $row['phonenumber'] ?>"required>
        </div>
        
        <div class="col">
          
            <label class="form-label">Assign to:</label>
            <select  name="ass"  required>
                                <option >Select Employee</option>
                                <option><?php echo $result['fullname'] ?></option>
                           
                            </select>
            
          </div><br>
          <div class="mb-3">
          <label class="form-label">Appointment Date:</label>
          <input type="date" class="form-control" style="width:400px;" name="appdate" required>
        </div><br><br>
        <div class="mb-3">
          
          <input type="submit" class="form-control" name="submit" style=" width: 160px; background-color: black; color:white;"value="Assign" >
          
        </div>
         <?php } }?>
        </div>
        
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>