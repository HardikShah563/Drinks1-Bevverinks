<?php include 'sql-pages/functions.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="./style/style.css">
    <!-- Javascript File Link -->
    <script src="./script/script.js" defer></script>
    <!-- Fontawesome icons CDN Link -->
    <script src="https://kit.fontawesome.com/6d232ec003.js" crossorigin="anonymous"></script>
    <title>Beverrinks | Home</title>
</head>

<body>
    <section class="home" id="home">
        <header>
            <div class="logo">
                <label>beverrinks</label>
            </div>
            <div class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="sql-pages/about.php">About</a></li>
                <li><a href="sql-pages/shop.php">Shop</a></li>
                <li><a href="sql-pages/contact.php">Contact</a></li>
            </div>
            <div class="nav-actions">
                <button class="nav-btn">
                    <a class="fa-solid fa-user icon" href="sql-pages/login.php" ></a>
                    <p class="nav-action-label"><a href="sql-pages/login.php">Sign In</a></p>
                </button>
                <button class="nav-btn">
                    <a class="fa-solid fa-cart-shopping icon" href="sql-pages/cart.php"></a>
                    <p class="nav-action-label"><a href="sql-pages/cart.php">Cart</a></p>
                    <div class="btn-badge green" aria-hidden="true">3</div>
                </button>
            </div>
            <div class="nav-lines">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>

        <main>
            <h2>Welcome to </h2>
            <h1>beverrinks</h1>
            <p>Clink glasses and say "Cheers"</p>
            <button class="explore-menu"><a href="sql-pages/shop.php">Explore Menu</a></button>
        </main>

    </section>

    <?php include './sql-pages/footer.php' ?>
</body>

</html>