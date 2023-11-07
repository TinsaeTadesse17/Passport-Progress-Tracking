
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Payment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/stylep.css">

</head>
<body>

<h1 style="padding-left: 550px;padding-top: 10px; color: white; font-size: 50px;"> Payment<a href="../registration/choice.html" class="link-dark" style="padding-left: 300px;margin-top:20px; font-size:20px;">Back to Choice</a></h1>

<div class="checkout">
  
    
  <form action="payment.php"method="post" class="form"  novalidate>
    <fieldset>
      <input type="text" name="fname"id="card-number" placeholder="First Name"class="input-name" maxlength="250" required/>
      <input type="text" name="mname"id="card-number" placeholder="Middle Name"class="input-name" maxlength="250" required/><br><br>
      <input type="text" name="lname"id="card-number" placeholder="Last Name"class="input-name" maxlength="250" required/>
      <input type="text" name="tinno" id="card-number-1" placeholder="TIN Number"class="input-name" maxlength="250" required/><br><br>
      <input type="text" name="transno" id="card-number-1" placeholder="Transaction Number"class="input-name" maxlength="4" required/>
      <input type="date"name="date" id="card-number-2" class="input-name" maxlength="" required/>
      
    </fieldset>
    
    <fieldset class="payment-type">
      <label for="payment-type">Payment Type</label>
      <div class="select">
        <select name="paytype"id="payment-type" required>
          <option></option>
          <option>New Registration 63 birr</option>
          <option>Renewal 50 birr</option>
          <option>Penalty 100 birr </option>
                 
        </select>
      </div>
      
    </fieldset>
    
    <button name="submit" class="btn"><i class="fa fa-lock"></i> submit</button>
  </form>
</div>




</body>
</html>
