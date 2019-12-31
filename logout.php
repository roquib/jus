<?php
session_start();

unset($_SESSION['authenticated']);
header('location:login_registration.php');
