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

    <div class="options">
        <a href="#hard-drinks-menu" class="hard-drinks drinks-container">
            <i class="fa-solid fa-champagne-glasses drink-icon"></i>
            <p>Choose the drinks you love</p>
        </a>
    </div>
    
    <section class="soft-drinks-menu" id="soft-drinks-menu">
        <?php $drinks = get_drinks();
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
                        <button type="submit" name="add-to-cart" class="add-to-cart"> Add to Cart <i class="fa-solid fa-cart-shopping"></i></button>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </section>

    <!-- ---- Footer Section ---- -->
    <?php include 'footer.php' ?>
</body>

</html>