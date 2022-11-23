<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Cart | Beverrinks</title>
    <link rel="stylesheet" href="../style.style.css">
</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="popup hidden">
        <i class="fa-solid fa-circle-check"></i>
        Successfully removed from cart
    </div>
    
    <section class="soft-drinks-menu" id="soft-drinks-menu">

        <div class="cart-title">
            <div class="line"></div>
            <div class="title">Cart</div>
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
                    Remove from Cart
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>

            <div class="menu-card">
                <img src="../img/CorpseReviver.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Corpse Reviver</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Remove from Cart
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>

            <div class="menu-card">
                <img src="../img/IrishCoffee.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Irish Coffee</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Remove from Cart
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>

            <div class="menu-card">
                <img src="../img/HankyPanky.png" alt="drink image">
                <div class="drink-details">
                    <p class="drink-name" id="drink-name">Hanky Panky</p>
                    <p class="drink-cost" id="drink-cost">€ 00.00</p>
                </div>
                <button class="add-to-cart">
                    Remove from Cart
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
        </div>
    </section>
    
    <div class="checkout-section">
        <button class="checkout-btn" name="checkout-btn" id="checkout">Checkout</button>
    </div>

    <!-- ---- Footer Section ---- -->
    <?php include 'footer.php' ?>
</body>

</html>