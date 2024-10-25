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

    class Order
    {
        public $items = [];

        public $discount;
        public $donation;
        public $shippingCost;
        public $totalPrice;

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
    }

    class ShoppingCart 
    {
        //items
        public $items = [];

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
            $this->itemsTotal = 0;
            foreach($this->items as $item) 
            {
                $this->itemsTotal += $item->price;
            }
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

        public function removeFromCart($itemName)
        {
            foreach($this->items as $key => $item)
            {
                if($item->name == $itemName)
                {
                    unset($_SESSION['shoppingCart']->items[$key]);
                    return true;
                }
            }
            return false;
        }

        public function submitOrder() 
        {
            $filePath = 'data/orders.json';
            
            //check if database is available
            if(!file_exists($filePath)) 
            {
                return false;
            }

            // create order object
            $order = new Order();
            $order->items = $this->items;
            $order->discount = $this->discount;
            $order->donation = $this->donation === null ? 0 : $this->donation;
            $order->shippingCost = $this->shippingCost;
            $order->totalPrice = $this->totalPrice;
            $order->firstName = $this->firstName;
            $order->lastName = $this->lastName;
            $order->email = $this->email;
            $order->countryCode = $this->countryCode;
            $order->phone = $this->phone;
            $order->streetAddress = $this->streetAddress;
            $order->houseNumber = $this->houseNumber;
            $order->postalCode = $this->postalCode;
            $order->city = $this->city;
            $order->shippingCountry = $this->shippingCountry;
            $order->paymentMethod = $this->paymentMethod;

            // save order to file
            $orders = json_decode(file_get_contents($filePath), true);
            array_push($orders, $order);
            file_put_contents($filePath, json_encode($orders, JSON_PRETTY_PRINT));
        
            return $order;
        }
   }
?>