<div id="checkout">
    <!-- MAIN FORM -->
    <div class="paymentForm">
        <section class="itemsInCart">
            <div class="sectionHeading">
                <h2>1. Items in cart</h2>
                <div class="separatorLine"></div>
            </div>
            <div class="itemsList">
                <!-- TODO: automate with php -->

            </div>
            <div class="coupon"></div>
            <div class="sectionSummary">
                <h3>Total: </h3>
                <p><?php echo "&#8364;&#160;".$_SESSION["shoppingCart"]->itemsTotal; ?></p>
            </div>
        </section>

        <section class="deliveryInfo">
            <div class="sectionHeading">
                <h2>2. Delivery information</h2>
                <div class="separatorLine"></div>
            </div>
            <form class="deliveryInfoForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <section>
                    <!-- Name Section -->
                    <label for="first-name">Name</label>
                    <div>
                        <input type="text" id="first-name" name="first-name">
                        <input type="text" id="last-name" name="last-name">
                    </div>
                </section>

                <section>
                    <!-- Email Section -->
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com">
                </section>
                
                <section>
                    <!-- Address Section -->
                    <label for="address-line1">Address</label>
                    <div>
                        <input type="text" id="address-line1" name="address-line1" placeholder="Street Address">
                        <input type="text" id="house-number" name="house-number" placeholder="Apt / Suite">
                        <input type="text" id="postal-code" name="postal-code" placeholder="Postal Code">
    
                    </div>
    
                    <input type="text" id="city" name="city" placeholder="City">
                    <input type="text" id="country" name="country" placeholder="Country">
                </section>
                <!-- the submit button is hidden -->
                <input type="submit" name="navBtn" value="Checkout">   
            </form>
            <div class="sectionSummary">
                <h3>Shipping: </h3>
                <p><?php echo "&#8364;&#160;".$_SESSION["shoppingCart"]->shippingCost;?></p>
            </div>
        </section>

        <section class="payment">
            <div class="sectionHeading">
                <h2>3. Payment</h2>
                <div class="separatorLine"></div>
            </div>
            <form class= "paymentSelector" action="">
                <label for="applePay">
                    <input type="radio" name=paymentMethod[] id="applePay" value="applePay">
                    <img src="resources/icons/svg/apple-pay.svg" alt="apple-pay">
                </label>
                <label for="googlePay">
                    <input type="radio" name=paymentMethod[] id="googlePay" value="googlePay">
                    <img src="resources/icons/svg/google-pay.svg" alt="google-pay">
                </label>
                <label for="visa">
                    <input type="radio" name=paymentMethod[] id="visa" value="visa">
                    <img src="resources/icons/svg/visa.svg" alt="visa">
                </label>
                <label for="mastercard">
                    <input type="radio" name=paymentMethod[] id="mastercard" value="mastercard">
                    <img src="resources/icons/svg/mastercard.svg" alt="mastercard">
                </label>
                <label for="payPal">
                    <input type="radio" name=paymentMethod[] id="payPal" value="payPal">
                    <img src="resources/icons/svg/paypal.svg" alt="pay-pal">
                </label>
                <label for="bitcoin">
                    <input type="radio" name=paymentMethod[] id="bitcoin" value="bitcoin">
                    <img src="resources/icons/svg/bitcoin.svg" alt="bitcoin">
                </label>
                <label for="ideal">
                    <input type="radio" name=paymentMethod[] id="ideal" value="ideal">
                    <img src="resources/icons/svg/ideal.svg" alt="ideal">
                </label>
            </form> 
        </section>
    </div>

    <!-- SUMMARY ON THE RIGHT  -->
    <div class="summary">
        <div>
            <h1>Summary</h1>
            <div class="inLine">
                <p>Items:</p>
                <p><?php echo "&#8364;&#160;".$_SESSION["shoppingCart"]->itemsTotal; ?></p>
            </div>
            <?php if(isset($_SESSION["shoppingCart"]->currentCoupon)): ?>
                <div class="inLine">
                    <p>Discounts:</p>
                    <p><?php echo "&#8364;&#160;-".$_SESSION["shoppingCart"]->discount;?></p>
                </div>
            <?php endif ?>
            <?php if(isset($_SESSION["shoppingCart"]->donation)): ?>
                <div class="inLine">
                    <p>Donations:</p>
                    <p><?php echo "&#8364;&#160;".$_SESSION["shoppingCart"]->donation;?></p>
                </div>
            <?php endif ?>
            <div class="inLine">
                <p>Shipping:</p>
                <p><?php echo "&#8364;&#160;".$_SESSION["shoppingCart"]->shippingCost;?></p>
            </div>
        </div>

        <div>
            <div class="inLine">
                <p>Discounts:</p>
            </div>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="inLine">
                <?php if(isset($_SESSION["shoppingCart"]->currentCoupon)): ?>
                    <h2><?php echo $_SESSION["shoppingCart"]->currentCoupon->code." -".$_SESSION["shoppingCart"]->currentCoupon->discount."%"; ?></h2>
                    <input type="hidden" name="couponRst" value="true">
                    <button type="submit" name="navBtn" value="Checkout">Clear</button>
                <?php else: ?>
                    <input type="text" id="coupon" name="coupon">
                    <button type="submit" name="navBtn" value="Checkout">Enter</button>
                <?php endif; ?>
                </div>
            </form>
        </div>

        <div>
            <div class="inLine">
                <p>Donations:</p>
            </div>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <div class="inLine">
            <?php if(isset($_SESSION["shoppingCart"]->donation)): ?>
                <h2><?php echo "&#8364;&#160;".$_SESSION["shoppingCart"]->donation; ?></h2>
                <input type="hidden" name="donationRst" value="true">
                <button type="submit" name="navBtn" value="Checkout">Clear</button>
            <?php else: ?>
                <input type="text" name="donation">
                <button type="submit" name="navBtn" value="Checkout">Enter</button>
            <?php endif; ?>
            </div>
            </form>
            <div class="donationInfo">
                <p>Contribute to reduce global CO<sub>2</sub> emissions</p>
                <p>Learn more about where your donations go on the About page</p>
            </div>
        </div>

        <div>
            <div class="inLine">
                <h2>Total:</h2>
                <h2><?php echo "&#8364;&#160;".$_SESSION['shoppingCart']->totalPrice ?></h2>
            </div>
        </div>

        <button class="checkoutButton" type="submit"><h1>Checkout</h1></button>
    </div>
</div>