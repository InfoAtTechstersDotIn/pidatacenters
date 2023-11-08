<?php
require_once "connection.php";

$base_url = "https://api-m.sandbox.paypal.com";
$client_id = "AVTLcBqr3e4jtdQ-exPQUIYpNOwHb4FgH93eqclJ-s6w0Lkd7rIzdyc5kDQ91dS7RgLPyuCMdIL1XEgi";
$client_secret = "EEFqcTXZIrF-EkpnEM0y-gkmBq7fx5-q-dbSts89X0vc-pT93EyQovYIs7nwgSEJY12B6_0i5JWZTLlw";


if (isset($_POST['register_user'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = md5(htmlspecialchars($_POST['password']));
    $phone = htmlspecialchars($_POST['phone']);
    // $otp = rand(111111, 999999);
    $otp = 111111;

    $sql = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header('location:message.php?message=Email Already Exists, Please Login');
    } else {
        $sql = "INSERT INTO users (name, email, password, phone, otp) VALUES ('$name', '$email', '$password', '$phone', '$otp')";
        $result = mysqli_query($conn, $sql);

        mail($email, "PiDataCenters Email Verification", "Hello $name, OTP to validate your email adddress is $otp");
        header('location:validate_email_otp.php?email=' . $email);
    }
} else if (isset($_POST['verify_email_address_otp'])) {
    $email = htmlspecialchars($_POST['email']);
    $otp = htmlspecialchars($_POST['otp']);

    $sql = "SELECT * FROM users where email = '$email' AND otp = '$otp'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE users set is_verified = 1, otp = NULL where email = '$email'";
        $result = mysqli_query($conn, $sql);

        header('location:message.php?message=Email Verified, Please Login');
    } else {
        header('location:message.php?message=Email Not Found');
    }
} else if (isset($_POST['login_user'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = md5(htmlspecialchars($_POST['password']));

    $sql = "SELECT * FROM users where email = '$email' AND password = '$password' AND is_verified = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) :
            $data = $row;
        endwhile;

        $_SESSION['is_login'] = 1;
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['phone'] = $data['phone'];
        header('location:index.php');
    } else {
        header('location:message.php?message=Email, Password Mismatch');
    }
} else if (isset($_POST['forgot_password'])) {
    $email = htmlspecialchars($_POST['email']);
    // $otp = rand(111111, 999999);
    $otp = 111111;

    $sql = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE users set otp = '$otp' where email = '$email'";
        $result = mysqli_query($conn, $sql);

        mail($email, "PiDataCenters Forgot Password Verification", "Hello $name, OTP to reset your password is $otp");
        header('location:validate_password_otp.php?email=' . $email);
    } else {
        header('location:message.php?message=Email Not Found');
    }
} else if (isset($_POST['verify_change_password_otp'])) {
    $email = htmlspecialchars($_POST['email']);
    $otp = htmlspecialchars($_POST['otp']);
    $password = md5(htmlspecialchars($_POST['password']));

    $sql = "SELECT * FROM users where email = '$email' AND otp = '$otp'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE users set password = '$password', otp = NULL where email = '$email'";
        $result = mysqli_query($conn, $sql);

        header('location:message.php?message=Password Reset Successful, Please Login');
    } else {
        header('location:message.php?message=Email Not Found');
    }
} else if (isset($_POST['add_to_cart'])) {
    if (isset($_SESSION['is_login'])) {
        $user_id = $_SESSION['user_id'];
        $product_id = htmlspecialchars($_POST['product_id']);

        $sql = "INSERT INTO cart (user_id, product_id) VALUES ('$user_id', '$product_id')";
        $result = mysqli_query($conn, $sql);

        header('location:cart.php');
    } else {
        header('location:message.php?message=Session expired, Please Login');
    }
} else if (isset($_GET['clear_cart'])) {
    if (isset($_SESSION['is_login'])) {
        $user_id = $_SESSION['user_id'];

        $sql = "DELETE from cart WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);

        header('location:cart.php');
    } else {
        header('location:message.php?message=Session expired, Please Login');
    }
} else if (isset($_GET['delete_cart_item'])) {
    if (isset($_SESSION['is_login'])) {
        $user_id = $_SESSION['user_id'];
        $product_id = $_GET['product_id'];

        $sql = "DELETE from cart WHERE user_id = '$user_id' AND product_id = '$product_id'";
        $result = mysqli_query($conn, $sql);

        header('location:cart.php');
    } else {
        header('location:message.php?message=Session expired, Please Login');
    }
} else if (isset($_POST['paypal_create_order'])) {
    if (isset($_SESSION['is_login'])) {
        $user_id = $_SESSION['user_id'];
        $total = $_POST['total'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '/v1/oauth2/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $access_token = json_decode($response)->access_token;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '/v2/checkout/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
                                        "intent": "CAPTURE",
                                        "purchase_units": [
                                            {
                                                "amount": {
                                                    "currency_code": "USD",
                                                    "value": ' . $total . '
                                                }
                                            }
                                        ]
                                    }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $access_token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    } else {
        header('location:message.php?message=Session expired, Please Login');
    }
} else if (isset($_POST['paypal_capture_payment'])) {
    if (isset($_SESSION['is_login'])) {
        $user_id = $_SESSION['user_id'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '/v1/oauth2/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic ' . base64_encode($client_id . ':' . $client_secret),
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $access_token = json_decode($response)->access_token;

        $order_id = $_POST['order_id'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $base_url . '/v2/checkout/orders/' . $order_id . '/capture',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $access_token
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $payment_details = json_decode($response);
        $total = $payment_details->purchase_units[0]->payments->captures[0]->amount->value;

        $sql = "INSERT INTO orders (user_id, total, payment_details) 
                            VALUES ('$user_id', '$total', '$response')";
        $result = mysqli_query($conn, $sql);
        $order_id = mysqli_insert_id($conn);

        $sql = "SELECT * FROM cart JOIN products ON cart.product_id = products.id where user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) :
                $product_id = $row['product_id'];
                $price = $row['price'];

                $sql = "INSERT INTO order_items (order_id, product_id, price) 
                            VALUES ('$order_id', '$product_id', '$price')";
                mysqli_query($conn, $sql);
            endwhile;
        }

        $sql = "DELETE from cart WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);

        echo $response;
    } else {
        header('location:message.php?message=Session expired, Please Login');
    }
}
