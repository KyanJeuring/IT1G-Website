<main>
    <div id="orderSummary">
        <img class="checkmark" src="resources/icons/svg/checkmark.svg" alt="checkmarkIcon">
        <h1>Thank you for your order</h1>
        <p>Your order has been submitted and will be shipped to you shortly.</p>
        <!-- ADD ORDER SUMMARY -->
        <?php 
            // var_dump($order);
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <button class="returnButton" type="submit" name="navBtn" value="Home">Return to homepage</button>
        </form>
    </div>
</main>