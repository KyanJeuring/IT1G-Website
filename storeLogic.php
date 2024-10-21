<?php
    // PREPARE SESSION DATA
    if (!isset($_SESSION['shoppingCart']) || empty($_SESSION['shoppingCart'])) {
        echo "New cart created";
        $_SESSION['shoppingCart'] = new shoppingCart();
    }  
    
    // INPUT DATA VALIDATION
    $firstName = filter_input(INPUT_POST, "first-name");
    $lastName = filter_input(INPUT_POST, "last-name");
    $email = filter_input(INPUT_POST, "email");
    $phone = filter_input(INPUT_POST, "phone");
    $address = filter_input(INPUT_POST, "address");
    $houseNumber = filter_input(INPUT_POST, "house-number");
    $city = filter_input(INPUT_POST, "city");
    $state = filter_input(INPUT_POST, "state");
    $zip = filter_input(INPUT_POST, "zip");
    $country = filter_input(INPUT_POST, "country");
    $paymentMethod = filter_input(INPUT_POST, "payment-method", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    
    $coupon = filter_input(INPUT_POST, "coupon");

    // MAIN
    if($coupon == "reset") $_SESSION['shoppingCart']->currentCoupon = null;
    else if(!empty($coupon)) $_SESSION['shoppingCart']->applyCoupon($coupon);

    $_SESSION['shoppingCart']->calculatePrices();

    //TODO
    // validate if the form is filled out correctly
    // if not, display an error message
    // if it is, save the data to the session and redirect thank you page
?>