<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="building a car purchase website" />
  <meta name="keywords" content="HTML5, css"/>
  <meta name="author" content="Nishant" />
 
  <link href="styles/styles.css" rel="stylesheet" />
  <title>Product</title>
</head>

<body>
   

    <header>
      <h1>Product Page</h1>
    </header>


    
    <?php
    include("menu.inc");
    ?>
  

<section id="camr">


      <a href="https://www.google.com/search?q=toyota+camry&rlz=1C5CHFA_enUS829US829&sxsrf=ALeKk01KXzN83NdBGJwBg2GtaTr_fRZurg:1616911299483&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjM-o39p9LvAhVDjuYKHUZtDRwQ_AUoAXoECAEQAw&biw=1440&bih=795#imgrc=v1iN6qKvpzE2LM"><img class="pic" src="images/camry.jpeg" alt="photo of while camry" title="file size 8kb" width="300"
        height="300" /></a>
      <h3>Toyota Camry</h3>
      <p>

      </p>
      <p>

      </p>
      <table class="tab" id="pad">
        <caption>Vehicle Specs</caption>
       
        <tbody>
         
        <tr>
          <th scope="row" class="eng">Engine</th>
          <td>2.5 L 4-cylinder, 3.5 L V6</td>
        </tr>
        <tr>
          <th scope="row" class="trans">Transmission</th>
          <td>Automatic</td>
        </tr>
        <tr>
          <th scope="row" class="fuel">Fuel Type</th>
          <td>Petrol</td>
        </tr>
        <tr>
          <th scope="row" class="mileage">Odometer</th>
          <td>120,000 KM</td>
        </tr>
        </tbody>
      </table>
    </section>

    <section id="por">


     <a href="https://www.autoexpress.co.uk/porsche/911/107763/new-porsche-911-carrera-2019-review"> <img class="pic" src="images/porsche911.jpeg" alt="photo of porsche" title="file size 7kb" width="300" height="300" /></a>
      <h3>Porsche 911</h3>
      
      <table class="tab" id="pad1">
        <caption>Vehicle Specs</caption>
        <tbody>
        <tr>
          <th scope="row" class="eng">Engine</th>
          <td>6 L 8-cylinder, Turbo V8</td>
        </tr>
        <tr>
          <th scope="row" class="trans">Transmission</th>
          <td>Manual</td>
        </tr>
        <tr>
          <th scope="row" class="fuel">Fuel Type</th>
          <td>Petrol</td>
        </tr>
        <tr>
          <th scope="row" class="mileage">Odometer</th>
          <td>30,000 KM</td>
        </tr>
      </tbody>
      </table>
    </section>
    
    <section id="maz">
 <a href="https://www.google.com/search?q=mazda+3&rlz=1C5CHFA_enUS829US829&sxsrf=ALeKk02aNacLdSXajC1hzp838gKxwawKaQ:1616911132667&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiwnsitp9LvAhWf4nMBHT0IAuQQ_AUoAXoECAEQAw&biw=1440&bih=795"><img class="pic" src="images/mazda3.jpg" alt="photo of red mazda" title="file size 8kb" width="300" height="300" /></a>
      <h3>Mazda</h3>
      
      <table class="tab" id="pad2">
        <caption>Vehicle Specs</caption>
        
       <tbody>
        <tr>
          <th scope="row" class="eng">Engine</th>
          <td>2.5 L 4-cylinder, 3.5 L V6</td>
        </tr>
        <tr>
          <th scope="row" class="trans">Transmission</th>
          <td>Automatic</td>
        </tr>
        <tr>
          <th scope="row" class="fuel">Fuel Type</th>
          <td>Petrol</td>
        </tr>
        <tr>
          <th scope="row" class="mileage">Odometer</th>
          <td>80,000 KM</td>
        </tr>
      </tbody>
      </table>
    </section>

<aside>
  <h2>Year End Sale!!</h2>
  <p>Come and check out our year end sale for 2020!!</p>
  <p>We have a range of options available for you:</p>
    <ul id="leftalign">
      <li>Family Vechiles</li>
      <li>Fuel Efficient Vechilce</li>
      <li>Performace Vehicle</li>
      <li>Pre-Owned Vechiles and More!</li>
    </ul>
  
  </aside>
  <aside>
    <h2>We have other cars available too!</h2>
    <p>Current stock:</p>
      <ul id="lalign">
        <li>Toyota Hilux</li>
        <li>Honda Civic</li>
        <li>VW Golf</li>
        <li>Kia Stinger</li>
        <li>Mitsubishi Lancer</li>
        <li>Ford Falcon</li>
      </ul>
    
    </aside>
  
    <aside>
      <h2>5 Reasons to choose us!</h2>
      <p>Quality Guaranteed</p>
        <ol id="oalign">
          <li>10 Years In the Industry</li>
          <li>Lowest Prices</li>
          <li>Multiple Locations</li>
          <li>Finance Option</li>
          <li>Trade-In Options</li>
          <li>Low Interest Rates</li>
        </ol>
      
      </aside>
   
 













      <?php include("footer.inc");?>



 