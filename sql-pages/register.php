<?php include 'functions.php' ?>

<?php

if (isset($_POST['signup'])) {
  $data = $_POST;
  $user_exists = email_exists($data['email']);
  if ($user_exists) {
    $response = [
      'type' => 'error',
      'message' => 'Email is Already Taken!',
    ];
  } else {
    if ($data["passkey"] == $data["cpassword"]) {
      $data["type"] = 'user';
      $user = signup($data);
      if ($user) {
        $response = [
          'type' => 'success',
          'message' => 'User Registered Successfully! You can Log In',
        ];
        login($data);
      } else {
        $response = [
          'type' => 'error',
          'message' => 'Some Error Occured!',
        ];
      }
    } else {
      $response = [
        'type' => 'error',
        'message' => 'Passwords should match!',
      ];
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'header.php' ?>
    <title>Create account | Beverrinks</title>
</head>

<body style="color: #fff;">
    <div class="background">
        <div class="login-register">
            <div class="login-register-form">
                <form action="?" method="POST">
                    <h1>Register</h1>
                    <?php if (isset($response)) { ?>
                        <div class="message-box <?= $response['type'] ?>">
                            <p><?= $response['message'] ?></p>
                        </div>
                        <?php } ?>
                    <input type="text" name="fname" id="fname" placeholder="First Name" required>
                    <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                    <input type="email" name="email" id="email" placeholder="Email Id" required>
                    <input type="password" name="passkey" id="password" placeholder="Create password" required>
                    <input type="password" name="cpassword" id="password" placeholder="Retype password" required>
                    <button class="submit" id="submit-button" name="signup" type="submit">Create Account</button>
                </form>
                <p class="register">Already have an account? &nbsp; <a href="login.php">Login here</a></p>
            </div>
        </div>
    </div>
</body>

</html>