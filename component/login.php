<?php
header("Content-Type: application/json");
session_start();
$email_cookie = "";
if (isset($_COOKIE['email_cookie'])) {
    $email_cookie = $_COOKIE['email_cookie'];
    // $password_cookie = $_COOKIE['password_cookie'];
}


include 'conn-db.php';
$username_or_email = filter_var($_GET['username_or_email'], FILTER_SANITIZE_STRING);
$password = filter_var($_GET['password'], FILTER_SANITIZE_STRING);
$errors = [];

// validate email
if (empty($username_or_email)) {
    $errors[] = "please enter Email or user name";
}


// validate password
if (empty($password)) {
    $errors[] = "please enter password";
}


// Remember me
if (isset($_GET['remember_me']) && $_GET['remember_me'] == "true") {

    setcookie('email_cookie', $_GET['username_or_email'], time() + 3600 * 24 * 30);
    // setcookie('password_cookie', $_GET['password'], time() + 3600 * 24 * 30);
} else {

    unset($_COOKIE['email_cookie']);
    setcookie("email_cookie", "", time() - 3600);

}



// echo "check db";

$stm = "SELECT * FROM users WHERE ( username='$username_or_email' OR email = '$username_or_email') ";
$q = $conn->prepare($stm);
$q->execute();
$data = $q->fetch();


if (!$data) {
    $errors[] = "login error";

} else {

    $password_hash = $data['password'];


    if (!password_verify($password, $password_hash)) {
        $errors[] = "The password is wrong";
    } else {

        $_SESSION['user'] = [
            "username" => $data['username'],
            "email" => $data['email'],
            "id" => $data['id'],
        ];

        $res_obj["status"] = true;
        //$res_obj["msg"] = "loged in Successfully";

    }
}

// errros 
if (!empty($errors)) {


     $res_obj["status"] = false;
     $res_obj["msgs"] = $errors;
}
echo json_encode($res_obj);


?>