<!DOCTYPE html>
<html>
  <head>

    <!-- Metadata for this site -->
    <meta charset="utf-8">
    <meta name="description" content="Rice Order Calculator">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Joseph Kwon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Favicon for this site -->
    <link rel="apple-touch-icon.png" sizes="180x180" href="./fav_index/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-red.min.css" /> 

    <!-- receives and gives data -->
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Rice Order Calculator</title>
    
  </head>
  <body>

    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

     <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
			<!-- Web page header -->
      <header class = "mdl-layout__header">
        <div class = "mdl-layout__header-row">      
          <span class = "mdl-layout-title">Calculate Your Food Order for Rice</span>          
        </div>       
      </header>
    
     
    <center>
      <h1>Rice Order Calculator</h1>
    </center>

    <?php echo "<p>Rice is carbohydrates defined as a cereal grain. They can be sold around Ottawa for various prices but this calculator will use the general average prices for the rice, toppings, and the side dish found in Ottawa. This calculator will be using the Canadian dollar as the currency and will calculate your subtotal, tax, and total cost.</p>" ?>

    <br>
    <br>
    <br>
       
    <center>
      <p>For visual understanding, this is a bowl of rice.</p>
    </center>

    <center>
      <img src="./images/Rice.jpg" alt="Rice">
    </center>


       
		<?php echo "<h3>Select your wanted sizes, toppings and extras:</h3>" ?>

    <!-- Receiving user input -->
		<form action="./results.php" method="post" target="results">	
	
      <br><br>

      <!--drop down menu for rice -->
      <label for="select-rice">Select rice size:</label>
  
      <select name="rice" id="rice">
        <option value="Regular">Regular $2</option>
        <option value="Large">Large $3</option>
        <option value="Extra Large">Extra Large $4</option>
      </select>
      <br>
      <br>
      <br>

      <!--drop down menu for toppings -->
      <label for="select-toppings">Select toppings:</label>
  
      <select name="toppings" id="toppings">
        <option value="None">None</option>
        <option value="Seaweed">Seaweed $0.50</option>
        <option value="Sesame">Sesame $0.50</option>
        <option value="TwoToppings">Both Toppings</option>
      </select>
      <br>
      <br>
      <br>

     <!--drop down menu for extra -->
     <label for="select-extra">Select extra:</label>
  
      <select name="extra" id="extra">
        <option value="None1">None</option>
        <option value="Kimchi">Kimchi $1</option>
      </select>
      <br>
      <br>
      <br>
            
      <input type="submit" value="Check my total">
		</form>
			
	  <!-- Create a space where the user information will be displayed -->
			<iframe id="results" name="results">			
	    </iframe>
  </center>

       <br>
       <br>
       <br>
  </body>
</html></h1>
			
