<?php 




require_once 'db.php';
require_once 'functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Progress Tracker</title>
    
    
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel = "stylesheet" type ="text/css" href = "style.css">
    <link rel = "stylesheet" type ="text/css" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel = "stylesheet" type ="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">  
    </script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    </script>  
  </head>
  <header class="bg-dark fixed-top"  >
    <nav class="container-xxl navbar navbar-expand-lg py-3 bg-dark navbar-dark" >
      <div class="container-fluid" style="height: 60px;">
        <a class="navbar-brand fw-bold fs-3" href="#" style="padding-left: 20px; color: orange;" >Progress Tracker</a>
        <a href="../landing/landing.html" style="padding-left: 214px;color: white; font-size: 23px; "  > Home</a>
        <a href="../reg/registration.html" style="padding-left: 20px; color: white; font-size: 23px; margin-left: 60px;"  >Apply For Passport</a>
        <a href="../home/index.php" style="padding-left: 20px; color: white; font-size: 23px; margin-left: 60px;" >My Progress</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="font-size: 20px;">
            <li class="nav-item mx-2">
              
            
            </li>
            
            
           
        </div>
      </div>
    </nav>
  </header>
  <body >
   

<br>
    <!-- Hero or Showcase Section -->
    <section class="hero d-flex flex-column align-items-center justify-content-center">
      
        
        <div class="container px-1 px-md-4 py-5 mx-auto">
          <div class="card" style="box-shadow: 5px 20px 50px black;">
              <div class="row d-flex justify-content-between px-3 top">
                
                  <div class="d-flex">
                      <h5 style="margin-left: 40px;">TRACK <span class="text-primary font-weight-bold">YOUR PROGRESS</span></h5><br><br>
                    
                    
                  </div>
                  <form action=""method="post">
                    <input type="text"name="track"placeholder="Enter Tracking Number" style="height:35px;padding-top:9px;">
                    <input type="submit"name="submit"class="btn btn-dark mb-3" style="margin-right: 10px;">
              </div>
              
              <table class="">
                <thread class="">
                  <tr>
              <div class="row justify-content-between top">
              <th><div class="row d-flex icon-content" style="margin-left: 30px;">
                      <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                      <div class="d-flex flex-column">
                          <p class="font-weight-bold">User<br>Application</p>
                      </div>
                  </div></th>
                 <th> <div class="row d-flex icon-content">
                      <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                      <div class="d-flex flex-column">
                          <p class="font-weight-bold">Document<br>Verification</p>
                      </div>
                  </div></th>
                 <th><div class="row d-flex icon-content">
                      <img class="icon" src="biometrics.png">
                      <div class="d-flex flex-column">
                          <p class="font-weight-bold">Biometrics<br> Authentication</p>
                      </div>
                  </div></th>
                  <th><div class="row d-flex icon-content">
                      <img class="icon" src="postoffice.png">
                      <div class="d-flex flex-column">
                          <p class="font-weight-bold">Printed<br>and Collect</p>
                      </div>
                  </div></th>
              
              </div>
            </tr>
                </thread>
                <tbody >
                  <?php
      
        if($result){
        while ($row = mysqli_fetch_row($result)) {
        ?>
                    <tr>
                      <td style="padding-left: 90px;"><?php echo $row["0"]; ?></td>
                      <td style="padding-left: 50px;"><?php echo $row["1"]; ?></td>
                      <td style="padding-left: 10px; max-width:30px;"><?php echo $row['2']; ?></td>
                      <td style="padding-left: 50px;"><?php echo $row['3']; ?></td>
                     
                     
          
                      
                      
                    </tr>
                    <?php    
                  }
        }
                ?>
                </tbody>
          </table>
          
          </div>
      
      </div>
    </form>
    </section>
    
 
 </body>
</html>