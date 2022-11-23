<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Shop | Beverrinks</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="popup hidden">
        <i class="fa-solid fa-circle-check"></i>
        Successfully added to cart
    </div>

    <p class="option-question">What are you looking for?</p>
    <div class="options">
        <a href="#soft-drinks-menu" class="soft-drinks drinks-container">
            <i class="fa-solid fa-martini-glass drink-icon"></i>
            <p>Soft Drinks</p>
        </a>
        <a href="#hard-drinks-menu" class="hard-drinks drinks-container">
            <i class="fa-solid fa-champagne-glasses drink-icon"></i>
            <p>Hard Drinks</p>
        </a>
    </div>
    
    <section class="soft-drinks-menu" id="soft-drinks-menu">
        <div class="drinks-title">
            <div class="line"></div>
            <div class="title">Soft Drinks</div>
            <div class="line"></div>
        </div>
        <div class="menu">
            <div class="menu-card">
                <img src="../img/PiscoPunch.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Pisco Punch</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>

            <div class="menu-card">
                <img src="../img/CorpseReviver.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Corpse Reviver</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>

            <div class="menu-card">
                <img src="../img/IrishCoffee.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Irish Coffee</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>

            <div class="menu-card">
                <img src="../img/HankyPanky.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Hanky Panky</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
        </div>
    </section>

    <div class="hard-drinks-menu" id="hard-drinks-menu">
        <div class="drinks-title">
            <div class="line"></div>
            <div class="title">Hard Drinks</div>
            <div class="line"></div>
        </div>
        <div class="menu">
            <div class="menu-card">
                <img src="../img/PiscoPunch.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Pisco Punch</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>

            <div class="menu-card">
                <img src="../img/CorpseReviver.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Corpse Reviver</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>

            <div class="menu-card">
                <img src="../img/IrishCoffee.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Irish Coffee</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>

            <div class="menu-card">
                <img src="../img/HankyPanky.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Hanky Panky</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Add to Cart
                    <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
        </div>
    </div>

    <!-- ---- Footer Section ---- -->
    <?php include 'footer.php' ?>
</body>

</html>