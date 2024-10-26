<?php
    // PREPARE SESSION DATA
    if (!isset($_SESSION['shoppingCart']) || empty($_SESSION['shoppingCart']))
    {
        $_SESSION['shoppingCart'] = new ShoppingCart();
    }  
    
    // INPUT DATA VALIDATION
    $firstName = filter_input(INPUT_POST, "first-name");
    $lastName = filter_input(INPUT_POST, "last-name");
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $countryCode = filter_input(INPUT_POST, "country-code", FILTER_VALIDATE_INT);
    $phone = filter_input(INPUT_POST, "phone", FILTER_VALIDATE_INT);
    $address = filter_input(INPUT_POST, "address");
    $houseNumber = filter_input(INPUT_POST, "house-number", FILTER_VALIDATE_INT);
    $city = filter_input(INPUT_POST, "city");
    $postalCode = filter_input(INPUT_POST, "postal-code");
    $country = filter_input(INPUT_POST, "country");
    $paymentMethod = filter_input(INPUT_POST, "payment-method");
    
    $donation = filter_input(INPUT_POST, "donation", FILTER_VALIDATE_FLOAT);
    $donationRst = filter_input(INPUT_POST, "donationRst", FILTER_VALIDATE_BOOLEAN);
    $coupon = filter_input(INPUT_POST, "coupon");
    $couponRst = filter_input(INPUT_POST, "couponRst", FILTER_VALIDATE_BOOLEAN);
    $checkout = filter_input(INPUT_POST, "checkout", FILTER_VALIDATE_BOOLEAN);
    $removeFromCart = filter_input(INPUT_POST, "removeFromCart");
    
    // ADDING ITEMS TO CART
    $itemToDisplay = filter_input(INPUT_POST, 'itemToDisplay');
    $addToCart = filter_input(INPUT_POST, "addToCart", FILTER_VALIDATE_BOOLEAN);
    
    if(isset($itemToDisplay)) 
    {
        $_SESSION['item'] = json_decode($itemToDisplay);
    }

    if(($addToCart === true) && (count($_SESSION['shoppingCart'] -> items) < 99))
    {
        array_push($_SESSION["shoppingCart"]->items, $_SESSION["item"]);
    }

    // MAIN
    // coupon handling
    if($couponRst) $_SESSION['shoppingCart']->currentCoupon = null;
    else if(!empty($coupon)) $_SESSION['shoppingCart']->applyCoupon($coupon);

    //donation handling
    if($donationRst) $_SESSION['shoppingCart']->donation = null;
    //TODO: if donation is false add error message
    else if(isset($donation) && $donation != false) $_SESSION['shoppingCart']->donation = round($donation, 2);

    //shipping cost handling
    if(isset($firstName)) $_SESSION['shoppingCart']->firstName = $firstName;
    if(isset($lastName)) $_SESSION['shoppingCart']->lastName = $lastName;
    if(isset($email)) $_SESSION['shoppingCart']->email = $email;
    if(isset($countryCode)) $_SESSION['shoppingCart']->countryCode = $countryCode;
    if(isset($phone)) $_SESSION['shoppingCart']->phone = $phone;
    if(isset($address)) $_SESSION['shoppingCart']->streetAddress = $address;
    if(isset($houseNumber)) $_SESSION['shoppingCart']->houseNumber = $houseNumber;
    if(isset($postalCode)) $_SESSION['shoppingCart']->postalCode = $postalCode;
    if(isset($city)) $_SESSION['shoppingCart']->city = $city;
    if(isset($country)) $_SESSION['shoppingCart']->shippingCountry = $country;
    if(isset($paymentMethod)) $_SESSION['shoppingCart']->paymentMethod = $paymentMethod;

    //error messages
    $incompleteShippingInfo = 
                            empty($_SESSION['shoppingCart']->firstName) || 
                            empty($_SESSION['shoppingCart']->lastName) || 
                            empty($_SESSION['shoppingCart']->email) || 
                            empty($_SESSION['shoppingCart']->countryCode) || 
                            empty($_SESSION['shoppingCart']->phone) || 
                            empty($_SESSION['shoppingCart']->streetAddress) || 
                            empty($_SESSION['shoppingCart']->houseNumber) || 
                            empty($_SESSION['shoppingCart']->postalCode) || 
                            empty($_SESSION['shoppingCart']->city) || 
                            empty($_SESSION['shoppingCart']->shippingCountry);
    $missingPaymentMethod = empty($_SESSION['shoppingCart']->paymentMethod);
    $invalidCoupon = isset($coupon) && !empty($coupon) && $_SESSION['shoppingCart']->currentCoupon == null;
    $invalidDonation = isset($donation) && $donation == false;
    
    //remove item from cart
    if(isset($removeFromCart))
    {
        $_SESSION['shoppingCart']->removeFromCart($removeFromCart);
    }

    //calculate prices so they can  be displayed
    $_SESSION['shoppingCart']->calculatePrices();

    // TODO check if cart is empty
    if($checkout && !$incompleteShippingInfo && !$missingPaymentMethod)
    {
        $order = $_SESSION['shoppingCart']->submitOrder();
        if($order !== false)
        {
            $_SESSION['shoppingCart'] = new ShoppingCart();
            $contentSwitcher->displayPage("OrderConfirmed");
        }
    }

?>