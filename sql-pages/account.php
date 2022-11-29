<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>My Account | Cocktailtastic</title>
</head>

<body>
    <div class="box login-page">
        <?php include 'navbar.php' ?>

        <?php 

        if (isset($_POST['logout'])) {
            header("Location: logout.php");
        }

        if (isset($_POST['deleteAccount'])) {
            delete_user($_SESSION["u_id"]);
            header("Location: logout.php");
        }
        if (isset($_POST['updateAccount'])) {
            header("Location: editdetails.php");
        }

        // $user = get_user($_SESSION["u_id"]);

        // global $db;
        //     $sql = "select * from drinks";
        //     $stmt = $db->prepare($sql);
        //     $stmt->execute();
        //     $result = $stmt->get_result();
        //     return $result;

        $user = [];
        $user["fname"] = $_SESSION["fname"];
        $user["lname"] = $_SESSION["lname"];
        $user["email"] = $_SESSION["email"];

        ?>

        <div class="background">
            <div class="login-register">
            <div class="user-buttons">
                    <div class="user-details" style="margin: 60px auto; color: #fff;">
                        <h3 style="text-align: center;">Name: <?= $user["fname"]; ?> <?= $user["lname"]; ?></h3>
                        <h3 style="text-align: center;">Email Address: <?= $user["email"] ?></h3>
                    </div>
                </div>
            <div class="user-buttons" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px;">
                <form action="?" method="post">
                        <button type="submit" name="updateAccount" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                <form action="?" method="post">
                    <button type="submit" name="deleteAccount" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px;">Delete Account &nbsp;<i class="fa-solid fa-user-slash"></i></button>
                </form>
                <form action="?" method="post">
                    <button type="submit" name="logout" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px;">Log Out &nbsp; <i class="fa-solid fa-arrow-right-from-bracket"></i> </button>
                </form>
            </div>
            </div>
        </div>

        <section>
            <h1>My Account</h1>
                <div class="contact-form">
                    <div class="user-details" style="margin: 60px auto;">
                        <p style="text-align: left;">Name: <?= $user["fname"]; $user["lname"]; ?></p>
                        <p style="text-align: left;">Email Address: <?= $user["email"] ?></p>
                    </div>
                </div>
                <div class="user-buttons" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px;">
                    <form action="?" method="post">
                            <button type="submit" name="updateAccount" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px;">Edit Details &nbsp;<i class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                    <form action="?" method="post">
                        <button type="submit" name="deleteAccount" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px;">Delete Account &nbsp;<i class="fa-solid fa-user-slash"></i></button>
                    </form>
                    <form action="?" method="post">
                        <button type="submit" name="logout" style="display: flex; justify-content: center; align-items: center; font-size: 18px; width: 200px; height: 40px;">Log Out &nbsp; <i class="fa-solid fa-arrow-right-from-bracket"></i> </button>
                    </form>
                </div>
            </section>

        <?php include 'footer.php' ?>
    </div>
</body>

</html>