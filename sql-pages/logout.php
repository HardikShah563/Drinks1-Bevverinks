<?php include 'functions.php' ?>

<?php

session_start();

unset($_SESSION["u_id"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["email"]);
unset($_SESSION["type"]);

empty_cart();

header("Location: login.php");
