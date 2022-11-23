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
        <?php include './sql-pages/navbar.php' ?>

        <main>
            <h2>Welcome to </h2>
            <h1>beverrinks</h1>
            <p>Clink glasses and say "Cheers"</p>
            <button class="explore-menu"><a href="./pages/shop.html" target="_blank">Explore Menu</a></button>
        </main>

    </section>

    <?php include './sql-pages/footer.php' ?>
</body>

</html>