<main id="checkout">
    <!-- MAIN FORM -->
    <div class="paymentForm">
        <section class="itemsInCart">
            <div class="sectionHeading">
                <h2>1. Items in cart</h2>
                <div class="separatorLine"></div>
            </div>
            <ul class="itemsList">
                <?php for($i = 0; $i < 4; $i++): ?>
                <li class="item">                                      
                    <div>
                        <img src = 'resources/products/Confusion.jpg' alt='ProductImg'> 
                        <h1>Confusion</h1>
                    </div>
                    <div>
                        <p>&#8364;&#160;25.99</p>
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method=POST>
                            <input type="hidden" name="removeFromCart" value="{itemName}">
                            <button type="submit" name="navBtn" value="Checkout">
                                <img class="trashIcon" src="resources/icons/svg/trash.svg" alt="trashIcon">
                            </button>
                        </form>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>
            <div class="coupon"></div>
            <div class="sectionSummary">
                <h3>Total: </h3>
                <p><?php echo "&#8364;&#160;" . $_SESSION["shoppingCart"]->itemsTotal; ?></p>
            </div>
        </section>

        <section class="deliveryInfo">
            <div class="sectionHeading">
                <h2>2. Delivery information</h2>
                <div class="separatorLine"></div>
            </div>
            <?php if($incompleteShippingInfo): ?>
                <p class="errorMessage">Please fill in all fields</p>
            <?php endif ?>
            <form class="deliveryInfoForm" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <section>
                    <!-- Name Section -->
                    <label for="first-name">Name</label>
                    <div>
                        <input type="text" id="first-name" name="first-name" value="<?php echo $_SESSION["shoppingCart"]->firstName; ?>">
                        <input type="text" id="last-name" name="last-name" value="<?php echo $_SESSION["shoppingCart"]->lastName; ?>">
                    </div>
                </section>

                <section>
                    <!-- Email Section -->
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="example@example.com" value="<?php echo $_SESSION["shoppingCart"]->email; ?>">
                </section>

                <section>
                    <!-- Phone Section -->
                    <label for="phone">Phone</label>
                    <div class="inline">
                        <input type="text" id="country-code" name="country-code" placeholder="31" value="<?php echo $_SESSION["shoppingCart"]->countryCode; ?>">
                        <input type="text" id="phone" name="phone" value="<?php echo $_SESSION["shoppingCart"]->phone; ?>">
                    </div>
                </section>

                <section>
                    <!-- Address Section -->
                    <label for="address-line1">Address</label>
                    <div>
                        <input type="text" id="address" name="address" placeholder="Street Address" value="<?php echo $_SESSION["shoppingCart"]->streetAddress; ?>">
                        <input type="text" id="house-number" name="house-number" placeholder="Apt / Suite" value="<?php echo $_SESSION["shoppingCart"]->houseNumber; ?>">
                        <input type="text" id="postal-code" name="postal-code" placeholder="Postal Code" value="<?php echo $_SESSION["shoppingCart"]->postalCode; ?>">
                    </div>
                    <input type="text" id="city" name="city" placeholder="City" value="<?php echo $_SESSION["shoppingCart"]->city; ?>">
                    <input type="text" id="country" name="country" placeholder="Country" value="<?php echo $_SESSION["shoppingCart"]->shippingCountry; ?>">
                </section>
                <input type="hidden" name="navBtn" value="Checkout">
                <input type="submit" value="Save">
            </form>
            <div class="sectionSummary">
                <h3>Shipping: </h3>
                <p><?php echo "&#8364;&#160;" . $_SESSION["shoppingCart"]->shippingCost; ?></p>
            </div>
        </section>

        <section class="payment">
            <div class="sectionHeading">
                <h2>3. Payment</h2>
                <div class="separatorLine"></div>
            </div>
            <?php if($missingPaymentMethod): ?>
                <p class="errorMessage">Please select a payment method</p>
            <?php endif ?>
            <form class="paymentSelector" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                <label for="applePay">
                    <input type="radio" name=payment-method id="applePay" value="applePay" <?php if($_SESSION["shoppingCart"]->paymentMethod == "applePay") echo "checked";?>>
                    <img src="resources/icons/svg/apple-pay.svg" alt="apple-pay">
                </label>
                <label for="googlePay">
                    <input type="radio" name=payment-method id="googlePay" value="googlePay" <?php if($_SESSION["shoppingCart"]->paymentMethod == "googlePay") echo "checked";?>>
                    <img src="resources/icons/svg/google-pay.svg" alt="google-pay">
                </label>
                <label for="visa">
                    <input type="radio" name=payment-method id="visa" value="visa" <?php if($_SESSION["shoppingCart"]->paymentMethod == "visa") echo "checked";?>>
                    <img src="resources/icons/svg/visa.svg" alt="visa">
                </label>
                <label for="mastercard">
                    <input type="radio" name=payment-method id="mastercard" value="mastercard" <?php if($_SESSION["shoppingCart"]->paymentMethod == "mastercard") echo "checked";?>>
                    <img src="resources/icons/svg/mastercard.svg" alt="mastercard">
                </label>
                <label for="payPal">
                    <input type="radio" name=payment-method id="payPal" value="payPal" <?php if($_SESSION["shoppingCart"]->paymentMethod == "payPal") echo "checked";?>>
                    <img src="resources/icons/svg/paypal.svg" alt="pay-pal">
                </label>
                <label for="bitcoin">
                    <input type="radio" name=payment-method id="bitcoin" value="bitcoin" <?php if($_SESSION["shoppingCart"]->paymentMethod == "bitcoin") echo "checked";?>>
                    <img src="resources/icons/svg/bitcoin.svg" alt="bitcoin">
                </label>
                <label for="ideal">
                    <input type="radio" name=payment-method id="ideal" value="ideal" <?php if($_SESSION["shoppingCart"]->paymentMethod == "ideal") echo "checked";?>>
                    <img src="resources/icons/svg/ideal.svg" alt="ideal">
                </label>
                <input type="hidden" name="navBtn" value="Checkout">
                <input type="submit" value="Save">
            </form>
        </section>
    </div>

    <!-- SUMMARY ON THE RIGHT  -->
    <div class="summary">
        <div>
            <h1>Summary</h1>
            <div class="inLine">
                <p>Items:</p>
                <p><?php echo "&#8364;&#160;" . $_SESSION["shoppingCart"]->itemsTotal; ?></p>
            </div>
            <?php if (isset($_SESSION["shoppingCart"]->currentCoupon)): ?>
                <div class="inLine">
                    <p>Discounts:</p>
                    <p><?php echo "&#8364;&#160;-" . $_SESSION["shoppingCart"]->discount; ?></p>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION["shoppingCart"]->donation)): ?>
                <div class="inLine">
                    <p>Donations:</p>
                    <p><?php echo "&#8364;&#160;" . $_SESSION["shoppingCart"]->donation; ?></p>
                </div>
            <?php endif ?>
            <div class="inLine">
                <p>Shipping:</p>
                <p><?php echo "&#8364;&#160;" . $_SESSION["shoppingCart"]->shippingCost; ?></p>
            </div>
        </div>
        
        <div>
            <div class="inLine">
                <p>Discounts:</p>
            </div>
            <?php if($invalidCoupon): ?>
                <p class="errorMessage">Invalid coupon</p>
            <?php endif ?>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="inLine">
                    <?php if (isset($_SESSION["shoppingCart"]->currentCoupon)): ?>
                        <h2><?php echo $_SESSION["shoppingCart"]->currentCoupon->code . " -" . $_SESSION["shoppingCart"]->currentCoupon->discount . "%"; ?></h2>
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
            <?php if($invalidDonation): ?>
                <p class="errorMessage">Invalid donation</p>
            <?php endif ?>
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <div class="inLine">
                    <?php if (isset($_SESSION["shoppingCart"]->donation)): ?>
                        <h2><?php echo "&#8364;&#160;" . $_SESSION["shoppingCart"]->donation; ?></h2>
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
                <h2><?php echo "&#8364;&#160;" . $_SESSION['shoppingCart']->totalPrice ?></h2>
            </div>
        </div>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">        
            <input type="hidden" name="navBtn" value="Checkout">
            <input type="hidden" name="checkout" value="true">
            <input class="checkoutButton" type="submit" value="Checkout">
        </form>
    </div>
</main>