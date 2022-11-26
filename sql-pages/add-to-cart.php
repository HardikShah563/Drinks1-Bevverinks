<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php' ?>
    <title>Document</title>
</head>
<body>
    <?php include 'navbar.php' ?>

    <?php

    if (isset($_POST['add-to-cart'])) {
        $data = $_POST;
        $id = $_POST["d_id"];
        $quantity = $_POST['quantity'];
        if (add_to_cart($id, $quantity)) {
            $response = [
                'type' => 'success',
                'message' => 'Drink is added to cart successfully!',
                'icon' => '<i class="fa-solid fa-circle-check"></i>',
            ];
        } else {
            $response = [
                'type' => 'success',
                'message' => 'Some Error Occured, Please try again!',
                'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
            ];
        }
    } else if (isset($_POST['update-to-cart'])) {
        $data = $_POST;
        $id = $_POST["d_id"];
        $quantity = $_POST['quantity'];
        if (update_to_cart($id, $quantity)) {
            $response = [
                'type' => 'success',
                'message' => 'Drink is added to cart successfully!',
                'icon' => '<i class="fa-solid fa-circle-check"></i>',
            ];
        } else {
            $response = [
                'type' => 'success',
                'message' => 'Some Error Occured, Please try again!',
                'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
            ];
        }
    } else if (isset($_POST['remove-from-cart'])) {
        $id = $_POST["d_id"];
        if (remove_from_cart($id)) {
            $response = [
            'type' => 'success',
            'message' => 'Drink is removed from cart',
            'icon' => '<i class="fa-solid fa-circle-check"></i>',
            ];
        } else {
            $response = [
            'type' => 'error',
            'message' => 'Some Error Occured, Please try again!',
            'icon' => '<i class="fa-solid fa-circle-xmark"></i>',
            ];
        }
    }

    ?>
    
    <div class="display-message" style="text-align: center; margin: 100px 0;">
        <div class="display-icon" style="font-size: 48px;">
            <?= $response['icon'] ?>
        </div>
        <div class="display-content">
            <h1><?= $response['message'] ?></h1>
        </div>
    </div>
    <section style="position: absolute; bottom: 0px; width: 100%;">
        <?php include 'footer.php' ?>
    </section>
</body>
</html>