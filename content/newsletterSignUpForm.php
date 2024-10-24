<?php
    $email = filter_input(INPUT_POST, "email");
    $subscribe = filter_input(INPUT_POST, "subscribe", FILTER_VALIDATE_BOOLEAN);

    if($_SERVER["REQUEST_METHOD"] == "POST" && $subscribe)
    {
        $filename = "data/mailingList.txt";
        $file = file_get_contents($filename);
        $file .= "\n".$email;
        file_put_contents($filename, $file);
    }
?>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="newsletterForm">
    <div class="formHeader">
        <h2>Join us on the bright side</h2>
        <p>brighten your day by signing up</p>
    </div>

    <div class="formInputField">
        <div>
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="sunny@socks.com" required class="emailInput">
            <input type="hidden" name="navBtn" value="Home">
            <input type="hidden" name="subscribe" value="true">
            <input type="submit" value="Subscribe" class="subscribeButton">
        </div>
    </div>
</form>
