<?php 




require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Authentication Status</title>
</head>
<header class="bg-dark fixed-top"  >
    <nav class="container-xxl navbar navbar-expand-lg py-3 bg-dark navbar-dark" >
      <div class="container-fluid" style="height: 60px;">
        <a class="navbar-brand fw-bold fs-3" href="../office/offlogin.html" style="padding-left: 20px; color: orange;" >Home Page</a>
        
      </div>
    </nav>
  </header>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Authentication Status</h2>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  
                  <td> First Name </td>
                  <td> Middle Name </td>
                  <td> Last Name </td>
                 
                  <td> Date of Birth</td>
                  <td> Phone </td>
                  <td> Delete </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  
                  <td><?php echo $row['firstname']; ?></td>
                  
                  <td><?php echo $row['middlename']; ?></td>
                  <td><?php echo $row['lastname']; ?></td>
                  <td><?php echo $row['dob']; ?></td>
                  <td><?php echo $row['phonenumber']; ?></td>
                
                 
                  
                  <td>
              <a href="edit.php?phone=<?php echo $row['phonenumber'] ?>" class="btn btn-danger">Assign</a>
             
            </td>
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>