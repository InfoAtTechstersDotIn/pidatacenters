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
else {
    echo "An error occured";
}
if (isset($_POST['create_payment_link'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $amount = htmlspecialchars($_POST['amount']);

    $sql = "INSERT INTO payment_links (name, email, phone, amount) VALUES
            ('$name', '$email', '$phone', '$amount')";
    $result = mysqli_query($conn, $sql);
    $payment_link_id = mysqli_insert_id($conn);

    $sql = "SELECT * FROM payment_links where id = '$payment_link_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) :
            header('location:thank_you.php?payment_link_unique_id=' . $row['unique_id']);
            exit();
        endwhile;
    }
}
