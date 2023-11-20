<?php
require_once "connection.php";

if (isset($_POST['login_user'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = md5(htmlspecialchars($_POST['password']));

    $sql = "SELECT * FROM admin where email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) :
            $data = $row;
        endwhile;

        $_SESSION['is_login'] = 1;
        $_SESSION['user_id'] = $data['id'];
        header('location:payment_links.php');
    } else {
        header('location:message.php?message=Email, Password Mismatch');
    }
}
