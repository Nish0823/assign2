<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="building a car purchase website" />
  <meta name="keywords" content="HTML5, css"/>
  <meta name="author" content="Nishant" />
  <link href="styles/styles.css" rel="stylesheet"/>
  <!-- <script src="scripts/booking.js"></script> -->
  
  
  <title>Payment</title>
</head>
<body>

  <header>
    <h1>Payment Page</h1> </header>
    
    
     

	<h2>Booking Confirmation</h2>


<form id="bookform" method="POST" action="process_order.php" novalidate="novalidate" > 
	<fieldset>
	<p><label for="fname">Given Name:</label>
        <input type="text" id="fname" name="fname" maxlength="25" value = "<?php echo $_POST['fname'];?>"></p>
        <p><label for="lname">Family Name:</label>
        <input type="text" id="lname" name="lname" maxlength="25" pattern="[A-Za-z]+" value = "<?php echo $_POST['lname'];?>"></p>
      <p><label for="mail">E-Mail:</label>
        <input type="email" id="mail" name="mail" value = "<?php echo $_POST['mail'];?>"></p>
      <p><label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" 
        value = "<?php echo $_POST['phone'];?>" />
      </p>
</fieldset>
<fieldset> 
      <legend>Customer Address</legend>
      <p><label for="stad">Street:</label>
        <input type="text" id="stad" name="stad" maxlength="40" value = "<?php echo $_POST['stad'];?>"></p>
      <p><label for="burb">Suburb/Town:</label>
        <input type="text" id="burb" name="burb" maxlength="20" value = "<?php echo $_POST['burb'];?>"></p>
      <p><label for="state">State:</label>
        <select name="State" id="state">
          <option value="none">Please Select</option>
          <option value="VIC">VIC</option> 
          <option value="NSW">NSW</option>
          <option value="TAS">TAS</option>
          <option value="QLD">QLD</option>
          <option value="NT">NT</option>
          <option value="ACT">ACT</option>
          <option value="SA">SA</option>
          <option value="WA">WA</option>
        </select></p>
        <p><label for="code">Post Code:</label>
          <input type="text" id="code" name="pcode" pattern= "[0-9]{4}" placeholder="0000" maxlength="4" value = "<?php echo $_POST['pcode'];?>"></p>
      </fieldset>
      <fieldset id="choice">
        <legend>Preffered Method of Communication</legend>
        <p>
          <input type="radio" id="eml" name="choice" value = "<?php echo $_POST['choice'];?>">
          <label for="eml">E-mail</label>
          <input type="radio" id="phn" name="choice" value = "<?php echo $_POST['choice'];?>">
          <label for="phn">Phone</label>
          <input type="radio" id="pst" name="choice" value = "<?php echo $_POST['choice'];?>">
          <label for="pst">Post</label>

        </p>
      </fieldset>
      <fieldset id="cars">
        <legend>Products:</legend>
          <table>
            <tr>
              <th>Make</th>
              <th>Price($)</th>
            </tr>
            <tr>
              <td>Mazda</td>
              <td>20,000</td>
            </tr>
            <tr>
              <td>Camry</td>
              <td>15,000</td>
            </tr>
            <tr>
              <td>Porsche</td>
              <td>40,000</td>
            </tr>

          </table>
          <p><label for="mazzy">Mazda</label>
          <input type="radio" name="cars" id="mazzy" value="Mazda"/>
          <label for="cammy">Camry</label>
          <input type="radio" name="cars" id="cammy" value="Camry" />
          <label for="porshy">Porsche</label>
          <input type="radio" name="cars" id="porshy" value="Porsche" /></p>

        
      
     
<p>
  <label for="nocars">Quantity</label>
			<input type="number" id="nocars" name="nocar" value = "<?php echo $_POST['nocar'];?>"/>
</p>

      </fieldset>

		<!-- <p>Your Name: <span id="confirm_name" ></span></p>
		<p>E-mail: <span id="confirm_mail"></span></p>
		<p>Address: <span id="confirm_add"></span></p>
		
    <p>Quantity: <span  id="confirm_quant"></span></p>
    <p>Product: <span  id="confirm_product"></span></p>
    <p>Total: $<span id="confirm_total"></span></p>
		 -->
    <!-- <input type="hidden" name="firstName" id="firstName" />
    <input type="hidden" name="lastName" id="lastName" />
    <input type="hidden" name="emailAdd" id="emailAdd"/>
    <input type="hidden" name="getQuantity" id="getQuantity" />
    <input type="hidden" name="stName" id="stName" />
    <input type="hidden" name="burbName" id="burbName" />
    <input type="hidden" name="state" id="state" />
    <input type="hidden" name="postCode" id="postCode" />
    <input type="hidden" name="totalCharge" id="totalCharge"/>
    <input type="hidden" name="myCar" id="myCar"/> -->

    
      <fieldset>
     <legend>Your Card Details</legend>
        <p><label for = "yourname">Name:</label>
        <input type="text" name="cname" id="yourname" maxlength="40" value = "<?php echo $_POST['fname'];?>"/><br/>
        </p>
        <p><label for ="card">Card Number:</label> 
        <input type="text" name="cardNumber" id="card" maxlength="16" placeholder="Your 15/16 digit number required"/>
        <label for= "type">Card Type:</label>
        <select id="type" name="ctype">
          <option value = "none">Please Select</option>
            <option value="visa">Visa</option>
            <option value="mastercard">MasterCard</option>
            <option value="americanexpress">AmericanExperess</option>
        </select>
      </p>
        
       <p><label for = "expiry">Expiry:</label>  
          <input type="text" name="expires" id="expiry" maxlength="10" placeholder="MM/YY" pattern = "(0[1-9]|1[0-2])\/?([0-9]{2})" required/><br/></p>
          <p><label for = "cvv">CVV:</label>
          <input type="text" name="cvv" id="cvv" maxlength="4" placeholder="123" pattern = "[0-9]{3,4}" required/></p>
        
        

          <br/>
          <br/>
         

      

		
		
		
		<input type="submit" name = "submit" value="Check Out" />
		<button type="button" id="cancelButton">Cancel</button>
    </fieldset>
</form>
</body>
</html>
