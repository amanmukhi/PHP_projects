<?php

// check session
if (!$_SESSION['user_id']) {
    header("location: login.php");
}

// logout button and set session = null
if (isset($_POST['logout'])) {
    $_SESSION['username'] = null;
    header("location: login.php");
}
