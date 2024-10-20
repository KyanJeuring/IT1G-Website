<?php
    // PREPARE SESSION DATA
    if(session_id()) session_start();
    if (!isset($_SESSION['shoppingCart'])) {
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
    $_SESSION['shoppingCart']->applyCoupon($coupon);
    
    // DEFINITIONS
    class Coupon
    {
        public $code;
        public $discount; // percentage
        // IDEA: function for exact discount amount/free shipping
        
        public function __construct($code, $discount)
        {
            $this->code = $code;
            $this->discount = $discount;
        }
    }

    class shoppingCart {
        public $currentCoupon;
        public $coupons;
        public $totalPrice;

        public function __construct() {
            $this->coupons = $this->loadCoupons();
            $this->calculatePrices();
        }

        private function calculatePrices() {
            $price = 99.99; // TODO: get price from items 
            if($this->currentCoupon !== null) // apply discount if coupon is set
            {
                $price *= ($this->currentCoupon->discount / 100);
            }
            $this->totalPrice = round($price, 2);
        }

        private function loadCoupons() {
            // load coupons from file
            // return empty array if file does not exist
            $filePath = 'data/validCoupons.txt';
            if (file_exists($filePath)) {
                $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $coupons = [];
                foreach($lines as $line) {
                    $coupon = explode(":", $line);
                    array_push($coupons, new Coupon($coupon[0], $coupon[1]));
                }
                return $coupons;
            } else {
                return [];
            }
        }

        public function applyCoupon($coupon) {
            //apply coupon if it is valid
            //search for coupon in $this->coupons
            foreach($this->coupons as $c) {
                if($c->code == $coupon) {
                    $this->currentCoupon = $c;
                    $this->calculatePrices();
                    return true;
                }
            }
            // coupon not found
            return false;
        }
    }

    //TODO
    // validate if the form is filled out correctly
    // if not, display an error message
    // if it is, save the data to the session and redirect thank you page
?>