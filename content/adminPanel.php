<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin-panel.css" type="text/css">
</head>
<body>
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
                <ul id="orders-list">
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                    <li>Ocean Breeze - 2 pairs - Apple pay</li>
                </ul>
            </div>
        </div>
        <div class="admin-box">
            <div class="admin-box-title">
                <h1>Newsletter members</h1>
            </div>
            <div class="admin-item">
                <h2>Latest Newsletter Members:</h2>
                <ul id="newsletter-members">
                    <li>Steve Jobs</li>
                    <li>Tim Cook</li>
                    <li>Elon Musk</li>
                    <li>Matthew McCounaughey</li>
                    <li>Matthew Perry</li>
                    <li>Christoph Waltz</li>
                    <li>Kurt Cobain</li>
                    <li>David Gilmour</li>
                    <li>Tyler Joseph</li>
                    <li>Eddie Hall</li>
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
</body>
</html>