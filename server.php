<?php
$conn = mysqli_connect('localhost', 'root', 'roquib', 'jus');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "select * from users where email ='$email' and password='$password'";
    $fetch_info = mysqli_query($conn, $query);
    $fetch_assoc = mysqli_fetch_assoc($fetch_info);
    if ($fetch_assoc) {
        $_SESSION['authenticated'] = 1;
        echo $_SESSION['authenticated'];
        header('location:home.php');
    } else {
        header('location:error.php');
        $_SESSION['authenticated'] = 0;
        echo $_SESSION['authenticated'];
    }
}
