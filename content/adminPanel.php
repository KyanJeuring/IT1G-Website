<?php
    function getUsers() {
        $filepath = "data/users.json";
        return json_decode(file_get_contents($filepath), true);
    }
    function getMailingList() {
        $filepath = "data/mailingList.txt";
        return explode("\n", file_get_contents($filepath));
    }
    function getOrders() {
        $filepath = "data/orders.json";
        return json_decode(file_get_contents($filepath), true);
    }
    function printOrder($order) {
        ?>
        <li class="order infoTable">
            <h5>First Name:</h5>
            <p><?php echo $order["firstName"]; ?></p>
            <h5>Last Name:</h5>
            <p><?php echo $order["lastName"]; ?></p>
            <h5>Email:</h5>
            <p><?php echo $order["email"]; ?></p>
            <h5>Country Code:</h5>
            <p><?php echo $order["countryCode"]; ?></p>
            <h5>Phone:</h5>
            <p><?php echo $order["phone"]; ?></p>
            <h5>Address:</h5>
            <p><?php echo $order["streetAddress"]; ?></p>
            <h5>House Number:</h5>
            <p><?php echo $order["houseNumber"]; ?></p>
            <h5>Postal Code:</h5>
            <p><?php echo $order["postalCode"]; ?></p>
            <h5>City:</h5>
            <p><?php echo $order["city"]; ?></p>
            <h5>Country:</h5>
            <p><?php echo $order["shippingCountry"]; ?></p>
            <h5>Order Items:</h5>
            <ul class=orderItems>
            <?php foreach ($order["items"] as $item): ?>
                <li class="orderItem infoTable">
                    <h5>Name:</h5>
                    <p><?php echo $item["name"]; ?></p>
                    <h5>Color:</h5>
                    <p><?php echo $item["color"]; ?></p>
                    <h5>Design:</h5>
                    <p><?php echo $item["design"]; ?></p>
                    <h5>Material:</h5>
                    <p><?php echo $item["material"]; ?></p>
                    <h5>Price:</h5>
                    <p><?php echo $item["price"]; ?></p>
                </li>
            <?php endforeach; ?>
            </ul>
            <h5>Donation:</h5>
            <p><?php echo $order["donation"]; ?></p>
            <h5>Shipping cost:</h5>
            <p><?php echo $order["shippingCost"]; ?></p>
            <h5>Total paid:</h5>
            <p><?php echo $order["totalPrice"]; ?></p>
        </li>
        <?php
    }
?>

<main id="adminPanelPage">
    <div id="admin-panel-title">
        <h1>
            Admin Panel
        </h1>
    </div>
    <div id="admin-panel-container">
        <div class="admin-box">
            <div class="admin-box-title">
                <h1>Add products</h1>
            </div>
            <div id="add-product-box">
                <form action="adminPanel.php">
                    <div class="admin-item">
                        <div class="add-product-label">
                            <label for="product-name">Name of the product:</label>
                        </div>
                        <div class="add-product-input">
                            <input type="text" name="product-name" required>
                        </div>
                    </div>
                    <div class="admin-item">
                        <div class="add-product-label">
                            <label for="product-description">Product description:</label>
                        </div>
                        <div class="add-product-input">
                            <textarea type="text" name="product-description" row="10" required></textarea>
                        </div>
                    </div>
                    <div class="admin-item">
                        <div class="add-product-label">
                            <label for="product-name">Price:</label>
                        </div>
                        <div class="add-product-input">
                            <input type="number" name="product-name" required>
                        </div>
                    </div>
                    <div class="admin-item">
                        <div class="add-product-label">
                            <label for="product-image">Images of the product:</label>
                        </div>
                        <div id="drop-zone">Drag & Drop your image</div>
                        <input type="file" id="add-image-admin">
                    </div>
                </form>
            </div>
        </div>
        <div class="admin-box">
            <div class="admin-box-title">
                <h1>Manage orders</h1>
            </div>
            <div class="admin-item">
                <h2>New orders:</h2>
                <ul id="orders-list" class="scrollable">
                    <?php
                        foreach (getOrders() as $order) {
                            printOrder($order);
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="admin-box">
            <div class="admin-box-title">
                <h1>Manage users</h1>
            </div>
            <div class="admin-item">
                <div class="infoTable">
                    <h5>Username:</h5>
                    <h5>Type:</h5>
                </div>
                <ul id="users-list" class="scrollable">
                    <?php
                        foreach (getUsers() as $user) {
                            ?>
                            <li class='infoTable'>
                            <p><?php echo $user["username"]; ?></p>
                            <p><?php echo $user["isAdmin"] ? "Admin" : "User" ?></p>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="admin-box">
            <div class="admin-box-title">
                <h1>Newsletter members</h1>
            </div>
            <div class="admin-item">
                <h2>Latest Newsletter Members:</h2>
                <ul id="newsletter-members" class="scrollable">
                    <?php
                        foreach (getMailingList() as $member) {
                            echo "<li>$member</li>";    
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="admin-box">
            <div class="admin-box-title">
                <h1>Respond to Chat</h1>
            </div>
            <div class="admin-item">
                <h2>Latest chat:</h2>
            </div>
            <div id="admin-chat-box">
                <div id="user-message">
                    <p>
                        Hello! I was wondering, if I could buy Lorem Ipsum socks!
                        I have not found any company online where I could print my
                        favorite socks! I hope Sunny Socks will be the answer!
                    </p>
                </div>
                <div id="send-message-box">
                    <img src="" alt="">
                    <p>Enter message</p>
                </div>
            </div>
        </div>
    </div>
</main>