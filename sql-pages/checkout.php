<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Checkout | Beverrinks</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <?php

    if (!isset($_SESSION['u_id'])) {
        header('Location: ./login.php');
    }
    if (isset($_POST['checkout'])) {
        $checkout = $_POST;
        $cart = get_cart();
        if (!empty($cart)) {
            $checkout['u_id'] = $_SESSION["u_id"];
            $checkout["total"] = get_total();
            $checkout["drinks"] = json_encode($cart, true);
            $checkout = checkout($checkout);
            if (!$checkout) {
                $response = [
                    'type' => 'error',
                    'message' => 'Checkout Failed!'
                ];
            } else {
                $response = [
                    'type' => 'success',
                    'message' => 'Checkout Successful',
                ];
                empty_cart();
            }
        } else {
            header('Location: ./index.php');
        }
    }

    ?>

    <section class="checkout" name="checkout">
        <form>
            <?php if (isset($response)) { ?>
                <div class="message-box <?= $response['type'] ?>">
                    <p><?= $response['message'] ?></p>
                </div>
            <?php } ?>
            <p>Personal Information: </p>
            <div class="checkout-form personal-details">
                <input type="text" placeholder="Name" required>
                <input type="text" name="phoneNo" id="phoneNo" placeholder="Phone Number" required>
                <input type="email" name="emailId" id="emailId" placeholder="Email Id" required>
            </div>
            <hr>
            <p>Address: </p>
            <div class="checkout-form address-details">
                <input type="text" placeholder="House no. / Building Name" required>
                <input type="text" placeholder="Road Name / Area / Colony" required>
                <input type="text" placeholder="Pincode" required>
                <input type="text" placeholder="City" required>
                <input type="text" placeholder="State" required>
                <input type="text" placeholder="Nearby Location (optional)" required>
            </div>
            <hr>
            <p>Mode of Payment: </p>
            <div class="checkout-form payment-details">
                <input type="text" placeholder="Mode of Payment" required>
            </div>
            <div class="checkout-form">
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>

    <!-- ---- Footer Section ---- -->
    <?php include 'footer.php' ?>
</body>

</html>