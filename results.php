<?php

// constants for prices
define (REGULAR_PRICE, 2);
define (LARGE_PRICE, 3);
define (EXTRALARGE_PRICE, 4);
define (TOPPINGS_PRICE, 0.50);
define (EXTRA_PRICE, 1);


//variables
$rice = $_POST['rice'];
$sizePrice = 0;
$toppings = $_POST['toppings'];
$toppingsPrice = 0;
$extra = $_POST['extra'];
$extraPrice = 0;


 // if user selects regular for rice
	if ($rice == "Regular") {
    $sizePrice = REGULAR_PRICE;
  }
		
  
  // else if user selects large for rice
	else if ($rice == "Large") {
		$sizePrice = LARGE_PRICE;
  }
  // else if user selects Extra Large for rice
	else if ($rice == "Extra Large") {
		$sizePrice = EXTRALARGE_PRICE;
  }
  // else if none of the conditions are met
	else {
		$sizePrice = 0;
  }

    
  
  
  // if user selects seaweed for toppings
	if ($toppings == "Seaweed" || toppings == "Sesame") {
		$toppingsPrice  = TOPPINGS_PRICE;
  }
  // else if user selects both toppings for toppings
	else if ($toppings == "TwoToppings") {
		$toppingsPrice  = TOPPINGS_PRICE * 2;
  }
  // else if none of the conditions are met
	else {
		$toppingsPrice  = 0;
  }

  

  // if user selects kimchi for extra
  if ($extra == "Kimchi") {
    $extraPrice = EXTRA_PRICE;
  }
  // else if noneof the conditions are met
  else {
    $extraPrice = 0;
  }
  


  //variables, calculations 
  $subTotal = number_format($sizePrice + $toppingsPrice + $extraPrice, 2);
  $tax = number_format($subTotal * 0.13, 2);
  $total = number_format($subTotal + $tax, 2);



?>
<h3>Results:</h3>
Your subtotal is $<?php echo $subTotal ?> CAD. While Tax Price is $<?php echo $tax ?> CAD. Your total cost is $<?php echo $total ?> CAD.
    




  