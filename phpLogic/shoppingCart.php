<?php 
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

    class shoppingCart 
    {
        //user info
        public $firstName;
        public $lastName;
        public $email;
        public $countryCode;
        public $phone;
        public $streetAddress;
        public $houseNumber;
        public $postalCode;
        public $city;
        public $shippingCountry;
        public $paymentMethod;
        
        //price vars
        public $currentCoupon;
        public $itemsTotal;
        public $discount;
        public $shippingCost;
        public $totalPrice;
        public $donation;

        public function __construct() 
        {
            $this->calculatePrices();
        }

        public function getItemsTotal() 
        {
            //TODO: get items total from items   
            $this->itemsTotal = 125.34; // example
            return $this->itemsTotal;
        }

        public function calculateDiscount()
        {
            if($this->currentCoupon !== null)
            {
                $this->discount = round(($this->itemsTotal / 100) * $this->currentCoupon->discount, 2);
            }
            else
            {
                $this->discount = 0;
            }
        }

        public function calculateShipping() 
        {
            //calculate shipping cost based on shipping state
            if($this->shippingCountry == "Netherlands") 
            {
                $this->shippingCost = 0.99;
            }
            else 
            {
                $this->shippingCost = 14.99;
            }
        }

        public function calculatePrices() 
        {
            $this->calculateDiscount();
            $this->getItemsTotal();
            $this->calculateShipping();

            $price = $this->itemsTotal; // get sum of items
            $price -= $this->discount; // apply discount
            $price += $this->donation; // add donation
            $price += $this->shippingCost; // add shipping cost

            $this->totalPrice = round($price, 2); //round to 2 decimal places

            return $this->totalPrice;
        }

        private function loadCoupons() 
        {
            // load coupons from file
            // return empty array if file does not exist
            $filePath = 'data/validCoupons.json';
            if (file_exists($filePath)) 
            {
                return json_decode(file_get_contents($filePath), true);
            } 
            else 
            {
                return [];
            }
        }

        public function applyCoupon($coupon) 
        {
            //apply coupon if it is valid
            foreach($this->loadCoupons() as $c)
            {
                if($c["code"]== $coupon)
                {
                    $this->currentCoupon = new Coupon($c["code"], $c["discount"]);
                    $this->calculatePrices();
                    return true;
                }
            }
            // coupon not found
            return false;
        }
   }
?>