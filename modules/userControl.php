<?php

$userControl = true;

if ($userControl == true) {
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<!--user is logged in.-->';
    } else {
        header('Location: ../../clientLogin.php');
    }
}
