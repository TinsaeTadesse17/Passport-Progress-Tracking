<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
      
      <title>document authentication</title>
      <link rel="stylesheet" href="style3.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible"content="ie=edge">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
      <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
   <script src ="javascript/pass-show-hide.js"> </script>
   
  <div class="wrapper">
  
      <section class="form login">
      <a href="../choice.html" class="link-dark" style="padding-left: 260px;">Back to Choice</a>
            <form action="upload.php"method="post"enctype="multipart/form-data">
                  
               <div class="error-txt"style="background: #f8d7da;
               
      color: #721c24;
      padding: 8px 10px;
      text-align: center;
      border-radius: 5px;
      margin-bottom: 10px;
      border: 1px solid #f5c6cb; display: none;"></div>
      
                                    <input type="text"name="username" style="justify-content: center; font-weight: 400;text-align:center;border-radius: 5px;margin-top: 20px;height: 28px;width:180px;" placeholder="Enter User Name"><br>
                                    
                                    <input type="file"name="my_image" style="justify-content: center; margin-top: 20px;height: 25px;border: none;font-size: 15px; font-weight: 6;color: #fff;border-radius: 5px;cursor: pointer; text-align: center;width:100px;">Attach ID Card
                                    
     
                     <div class="field"style="display: flex;
      flex-direction: column;
      margin-bottom: 10px;">
                           <input type="submit"name="submit"value="Upload" style="justify-content: center; margin-top: 20px;height: 38px;border: none;font-size: 23px; font-weight: 600;background: #FF6347;color: #fff;border-radius: 5px;cursor: pointer; text-align: center;">
                            </div>
                    
            </form>
      </section>
  </div>
</body>
</html>