<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$_SESSION['admin_logged_in'] = false;
unset($_SESSION['admin_logged_in']);
header('Location: login.php');
exit;
