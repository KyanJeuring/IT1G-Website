<?php
    // PREPARE SESSION DATA
    if (!isset($_SESSION['shoppingCart']) || empty($_SESSION['shoppingCart'])) {
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
    $zip = filter_input(INPUT_POST, "zip");
    $country = filter_input(INPUT_POST, "country");
    $paymentMethod = filter_input(INPUT_POST, "payment-method", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    
    $donation = filter_input(INPUT_POST, "donation", FILTER_VALIDATE_FLOAT);
    $donationRst = filter_input(INPUT_POST, "donationRst", FILTER_VALIDATE_BOOLEAN);
    $coupon = filter_input(INPUT_POST, "coupon");
    $couponRst = filter_input(INPUT_POST, "couponRst", FILTER_VALIDATE_BOOLEAN);

    // MAIN
    // coupon handling
    if($couponRst) $_SESSION['shoppingCart']->currentCoupon = null;
    //TODO: if coupon is false add error message
    else if(!empty($coupon)) $_SESSION['shoppingCart']->applyCoupon($coupon);

    //donation handling
    if($donationRst) $_SESSION['shoppingCart']->donation = null;
    //TODO: if donation is false add error message
    else if(isset($donation) && $donation != false) $_SESSION['shoppingCart']->donation = round($donation, 2);

    //shipping cost handling
    if(isset($country) && $country != false) $_SESSION['shoppingCart']->shippingCountry = $country;
    
    $_SESSION['shoppingCart']->calculatePrices();

    //TODO
    // validate if the form is filled out correctly
    // if not, display an error message
    // if it is, save the data to the session and redirect thank you page
?>