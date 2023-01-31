<?php
session_start();

// check session
if (!$_SESSION['user_id']) {
    header("location: login.php");
}

// logout button and set session = null
if (isset($_POST['logout'])) {
    $_SESSION['user_id'] = null;
    header("location: login.php");
}
