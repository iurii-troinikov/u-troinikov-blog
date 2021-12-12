<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{DV.Campus} PHP Framework</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }
        .product-list {
            display: flex;
        }
        .product-list .product {
            max-width: 30%;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="{DV.Campus} PHP Framework">
        <img src="logo.jpg" alt="{DV.Campus} Logo" width="200"/>
    </a>
    <menu>
        <li>Category 1</li>
        <li>Category 2</li>
        <li>Category 3</li>
        <li>Category 4</li>
    </menu>
</header>
<main>
    <form method="post" action="/send-contact-us-request">
        <h2>Contact Us</h2>
        <div class="field">
            <label for="contact-name">Your name:</label>
            <input type="text" id="contact-name" placeholder="John Doe">
        </div>
        <div class="field">
            <label for="contact-email">Your email:</label>
            <input type="email" id="contact-email" placeholder="email@example.com">
        </div>
        <div class="field">
            <label for="contact-question">Question:</label>
            <textarea id="contact-question" rows="4" placeholder="Please, enter your question"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</main>
<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>
    <p>© Default Value 2021. All Rights Reserved.</p>
</footer>
</body>
</html>
84  web/home.php
@@ -0,0 +1,84 @@
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{DV.Campus} PHP Framework</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }
        .product-list {
            display: flex;
        }
        .product-list .product {
            max-width: 30%;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="{DV.Campus} PHP Framework">
        <img src="logo.jpg" alt="{DV.Campus} Logo" width="200"/>
    </a>
    <menu>
        <li>Category 1</li>
        <li>Category 2</li>
        <li>Category 3</li>
        <li>Category 4</li>
    </menu>
</header>
<main>
    <section title="Recently Viewed Products">
        <h2>Recently Viewed Products</h2>
        <div class="product-list">
            <div class="product">
                <a href="/product-1-url" title="Product 1">
                    <img src="/product-placeholder.png" alt="Product 1" width="200"/>
                </a>
                <a href="/product-1-url" title="Product 1">Product 1</a>
                <span>$33.33</span>
                <button type="button">Add To Cart</button>
            </div>
            <div class="product">
                <a href="/product-2-url" title="Product 2">
                    <img src="/product-placeholder.png" alt="Product 2" width="200"/>
                </a>
                <a href="/product-2-url" title="Product 2">Product 2</a>
                <span>$66.66</span>
                <button type="button">Add To Cart</button>
            </div>
            <div class="product">
                <a href="/product-3-url" title="Product 3">
                    <img src="/product-placeholder.png" alt="Product 3" width="200"/>
                </a>
                <a href="/product-3-url" title="Product 3">Product 3</a>
                <span>$99.99</span>
                <button type="button">Add To Cart</button>
            </div>
        </div>
    </section>
</main>
<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>
    <p>© Default Value 2021. All Rights Reserved.</p>
</footer>
</body>
</html>
