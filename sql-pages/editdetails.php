
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>My Account-Edit | Cocktailtastic</title>
</head>

<style>
    .padding {
        padding: 8px;
    }
</style>

<body>
    <div class="box login-page">
        <?php include 'navbar.php' ?>

        <?php 

        if (isset($_POST['editDetails'])) {
            $editDetails = $_POST;

            $editDetails['fname'] = $_POST["fname"];
            $editDetails['lname'] = $_POST["lname"];
            $editDetails['email'] = $_POST["email"];
            $editDetails['password'] = $_POST["newpassword"];
            $edit = edit_user($editDetails);
            
            if(!$edit) {
                $response = [
                    'type' => 'error',
                    'message' => 'Edit Failed'
                    ];
            } else {
                $response = [
                    'type' => 'success',
                    'message' => 'Successfully Edited details'
                    ];
            }
        }

        ?>

        <section class="checkout" name="checkout">
            <form action="?" method="post">
                <h1>Edit Details</h1>
                <?php if (isset($response)) { ?>
                    <div class="message-box <?= $response['type'] ?>">
                        <p><?= $response['message'] ?></p>
                    </div>
                <?php } ?>
                <p>Personal Information: </p>
                <div class="checkout-form">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <input type="text" name="lname" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="Email Id" required>
                </div>
                <hr>
                <p>Change Password: </p>
                <div class="checkout-form">
                    <input type="password" name="password" placeholder="Old Password" required>
                    <input type="password" name="newpassword" placeholder="New password" required>
                </div>
                <div class="checkout-form">
                    <button name="editDetails" type="submit">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </form>
        </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>