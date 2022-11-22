<?php include './sql-pages/functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks Shop</title>
    <link rel="stylesheet" href="./style/style.css">
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="home" id="home">
        <header>
            <div class="logo">
                <label>beverrinks</label>
            </div>
            <div class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="./pages/about.html">About</a></li>
                <li><a href="./pages/shop.html">Shop</a></li>
                <li><a href="./pages/contact.html">Contact</a></li>
            </div>
            <div class="nav-actions">
                <button class="nav-btn">
                    <a class="fa-solid fa-user icon" href="./pages/login.html" target="_blank"></a>
                    <p class="nav-action-label"><a href="./pages/login.html" target="_blank">Sign In</a></p>
                </button>
                <button class="nav-btn">
                    <a class="fa-solid fa-cart-shopping icon" href="./pages/cart.html" target="_blank"></a>
                    <p class="nav-action-label"><a href="./pages/cart.html" target="_blank">Cart</a></p>
                    <div class="btn-badge green" aria-hidden="true">3</div>
                </button>
            </div>
            <div class="nav-lines">
                <div class="line line-full"></div>
                <div class="line line-half"></div>
                <div class="line line-full"></div>
            </div>
        </header>
        <main>
            <h2>Welcome to </h2>
            <h1>beverrinks</h1>
            <p>Clink glasses and say "Cheers"</p>
            <button class="explore-menu"><a href="./pages/shop.html" target="_blank">Explore Menu</a></button>
        </main>
    </section>

    <!-- ---- Footer Section ---- -->
    <section class="footer" id="foother">
        <footer>
            <hr>
            <br>
            <p>Build with <i class="fa-solid fa-heart" id="heart"></i></p>
            <p id="copyrights">&copy; Copyright beverrinks | All Rights Reserved</p>
        </footer>
    </section>
    <script src="./script/script.js"></script>
</body>

</html>