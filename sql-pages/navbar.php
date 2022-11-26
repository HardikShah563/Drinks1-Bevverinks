<?php include 'functions.php' ?>

<header>
    <div class="logo">
        <label>beverrinks</label>
    </div>
    <div class="nav-links">
        <li><a href="../index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="contact.php">Contact</a></li>
    </div>
    <div class="nav-actions">
        <?php if (isset($_SESSION['u_id'])) { ?>
            <button class="nav-btn">
                <a class="fa-solid fa-right-from-bracket icon" href="logout.php" ></a>
                <p class="nav-action-label"><a href="logout.php">LogOut</a></p>
            </button>
        <?php } else { ?>
            <button class="nav-btn">
                <a class="fa-solid fa-user icon" href="login.php" ></a>
                <p class="nav-action-label"><a href="login.php">Sign In</a></p>
            </button>
        <?php } ?>
        <button class="nav-btn">
            <a class="fa-solid fa-cart-shopping icon" href="cart.php"></a>
            <p class="nav-action-label"><a href="cart.php">Cart</a></p>
            <div class="btn-badge green" aria-hidden="true"><?= how_many_in_cart() ?></div>
        </button>
    </div>
    <div class="nav-lines">
        <i class="fa-solid fa-bars"></i>
    </div>
</header>