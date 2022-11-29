<?php include 'functions.php' ?>

<?php

if (isset($_POST['login'])) {
  $data = $_POST;
  $user = login($data);
  if (!$user) {
    $response = [
      'type' => 'error',
      'message' => 'Login Failed!'
    ];
  } else {
    header("Location: ./shop.php");
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'header.php' ?>
    <title>Login | Beverrinks</title>
</head>

<body>
    <div class="background">
        <div class="login-register">
            <div class="login-register-form">
            <?php if (isset($response)) { ?>
                <div class="message-box <?= $response['type'] ?>">
                    <p><?= $response['message'] ?></p>
                </div>
            <?php } ?>
                <form action="?" method="POST">
                    <h1>Login</h1>
                    <input type="email" name="email" placeholder="Email Id" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button name="login" class="submit" type="submit">Log In</button>
                </form>
                <p class="register">Don't have an account? &nbsp; <a href="register.php">Register here</a></p>
            </div>
        </div>
    </div>
</body>

</html>