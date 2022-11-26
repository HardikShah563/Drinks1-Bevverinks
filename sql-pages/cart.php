<?php 

if (isset($_POST['checkout-btn'])) {
    header("Location: checkout.php");
}
?>

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

        <?php 
        
        $cart = get_cart();
        if (isset($cart)) {
            $drinks = get_drinks_by_ids($cart);
        }

        if (mysqli_num_rows($drinks)) { ?>
        <div class="menu">
            <?php foreach ($drinks as $drink) { ?>
            <div class="menu-card">
                <img src="../img/<?= $drink['image'] ?>" alt="drink image" />
                <div class="drink-details">
                    <p class="drink-name"><?= $drink['name'] ?></p>
                    <p class="drink-cost">£<?= $drink['price'] ?></p>
                </div>
                <div class="add-to-basket">
                    <form action="add-to-cart.php" method="POST">
                        <input type="hidden" name="d_id" value="<?= $drink['d_id'] ?>">
                        <input type="hidden" id="item-<?= $drink['d_id'] ?>" name="quantity" value="1">
                        <button type="submit" name="remove-from-cart" class="add-to-cart"> Remove from Cart <i class="fa-solid fa-cart-shopping"></i></button>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>

    </section>
    

    <?php if (mysqli_num_rows($drinks)) { ?>
        <div class="checkout-section">
            <form action="?" method="post">
                <button class="checkout-btn" name="checkout-btn" id="checkout">Checkout</button>
            </form>
        </div>
    <?php } else {?>
        <h3 style="text-align: center;">---- Cart is empty ----</h3>
    <?php }?>

    <!-- ---- Footer Section ---- -->
    <?php if (mysqli_num_rows($drinks)) { ?>
        <?php include 'footer.php' ?>

    <?php } else {?>
        <section style="margin-top: 180px; position: absolute; bottom: 0px; width: 100%;">
            <?php include 'footer.php' ?>
        </section>
    <?php } ?>
</body>

</html>