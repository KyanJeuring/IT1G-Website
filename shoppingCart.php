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
       public $totalPrice;

       public function __construct() {
           $this->calculatePrices();
       }

       public function calculatePrices() {
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