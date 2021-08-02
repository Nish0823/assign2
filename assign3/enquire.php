
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="building a car purchase website" />
  <meta name="keywords" content="HTML5, css"/>
  <meta name="author" content="Nishant" />
  <link href="styles/styles.css" rel="stylesheet"/>
  <!-- <script src="scripts/part2.js"> </script> -->
  <title>Enquire</title>
  
</head>

<body>
  <header>
  <h1>Service Enquiry Page</h1> </header>
  
  
  <?php
    include("menu.inc");
?>
  
 

  <form id="myform" method="POST" action="payment.php" novalidate="novalidate">
    <fieldset>
      <legend>Customer Info</legend>

      <p><label for="fname">Given Name:</label>
        <input type="text" id="fname" name="fname" maxlength="25" required></p>
      <p><label for="lname">Family Name:</label>
        <input type="text" id="lname" name="lname" maxlength="25" pattern="[A-Za-z]+" required></p>
      <p><label for="mail">E-Mail:</label>
        <input type="email" id="mail" name="mail" required></p>
      <p><label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone"
          required />
      </p>
    </fieldset>

      <fieldset>
      <legend>Customer Address</legend>
      <p><label for="stad">Street:</label>
        <input type="text" id="stad" name="stad" maxlength="40" required></p>
      <p><label for="burb">Suburb/Town:</label>
        <input type="text" id="burb" name="burb" maxlength="20" required></p>
      <p><label for="state">State:</label>
        <select name="State" id="state" >
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
          <input type="text" id="code" name="pcode" pattern= "[0-9]{4}" placeholder="0000" maxlength="4" required></p>
      </fieldset>
      <fieldset id="choice">
        <legend>Preffered Method of Communication</legend>
        <p>
          <input type="radio" id="eml" name="choice" value="@email">
          <label for="eml">E-mail</label>
          <input type="radio" id="phn" name="choice" value="@phone">
          <label for="phn">Phone</label>
          <input type="radio" id="pst" name="choice" value="@post">
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
			<input type="text" id="nocars" name="nocar"/>
</p>

      </fieldset>


    
<fieldset>

  <legend>Product Features</legend>
    
    <p><label for="powned">Pre-owned</label> 
            <input type="checkbox" id="powned" name="category[]" value="used" checked="checked"/>
        
        <label for="new">NEW</label> 
            <input type="checkbox" id="new" name="category[]" value="new"/>
        
        <label for="accident">Accident History</label> 
            <input type="checkbox" id="accident" name="category[]" value="accident"/>
       
       </p>
        <p><label for="comments">Further Enquiry:</label></p>
			<p><textarea id="comments" name="comments" rows="6" cols="80" placeholder="Please mention further enquiry here..."></textarea>
        </p>
</fieldset>

    <input type="submit" value="Pay Now" name="submit"/>
    <input type="reset" value="Reset Form" />

  </form>


  

</body>



</html>