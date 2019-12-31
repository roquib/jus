<?php
if ((function_exists('session_status')
  && session_status() !== PHP_SESSION_ACTIVE) || !session_id()) {
  session_start();
}
if ($_SESSION['authenticated'] == 1) {
  header('location:home.php');
}

if ($_SESSION['authenticated'] == 0) {
  header('location:login_registration.php');
}
