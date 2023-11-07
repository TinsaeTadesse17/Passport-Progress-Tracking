<?php
include "db_conn.php";
include "fun.php";
$result = dispaly_data();
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
  <a href="../login/choice.html" class="link-dark" style="padding-left: 1120px;">Back to Choice</a>
  <div class="container">
    
    <form action=""method="post">
    <input type="text"name="tinno"placeholder="Enter Your TIN Number" style="height:35px;padding-top:9px;">
    <input type="submit"name="submit"class="btn btn-dark mb-3">

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">TIN Number</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          
          <th scope="col">paystatus</th>
          <th scope="col">status</th>
         
        </tr>
      </thead>
      <tbody>
        <?php
      
        if($result){
        while ($row = mysqli_fetch_row($result)) {
        ?>
          <tr>
            <td><?php echo $row["0"] ?></td>
            <td><?php echo $row["1"] ?></td>
            <td><?php echo $row["2"] ?></td>
            <td><?php echo $row["3"] ?></td>
            <td><?php echo $row["4"] ?></td>

            
            
          </tr>
        <?php
        }
      }
        ?>
      </tbody>
    </table>
      </form>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>