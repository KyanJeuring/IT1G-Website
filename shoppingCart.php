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

    class shoppingCart {
        public $currentCoupon;
        public $shippingCountry;

        public $itemsTotal;
        public $discount;
        public $shippingCost;
        public $totalPrice;
        public $donation;

        public function __construct() {
            $this->calculatePrices();
        }

        public function getItemsTotal() {
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

        public function calculatePrices() {
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

        private function loadCoupons() {
            // load coupons from file
            // return empty array if file does not exist
            $filePath = 'data/validCoupons.txt';
            if (file_exists($filePath)) {
                $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $coupons = [];
                foreach($lines as $line) {
                    $coupon = explode(":", $line);
                    array_push($coupons, new Coupon($coupon[0], intval($coupon[1])));
                }
                return $coupons;
            } else {
                return [];
            }
        }

        public function applyCoupon($coupon) {
            //apply coupon if it is valid
            //search for coupon in $this->coupons
            foreach($this->loadCoupons() as $c) {
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
?>