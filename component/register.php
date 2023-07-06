<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Content-Type: application/json");
    session_start();
    include 'conn-db.php';
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_STRING);
    $errors = [];
    // validate username
    if (empty($username)) {
        $errors[] = "Please enter User name";
    } elseif (strlen($username) > 100) {
        $errors[] = "the user name must not be greater than 100 characters";
    }

    $selectuser = "SELECT username FROM users WHERE username ='$username'";
    $q = $conn->prepare($selectuser);
    $q->execute();
    $datauser = $q->fetch();

    if ($datauser) {
        $errors[] = "username already exists";
    }

    // validate email
    if (empty($email)) {
        $errors[] = "Please enter E-mail";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors[] = "البريد الاكترونى غير صالح";
    }

    $stm = "SELECT email FROM users WHERE email ='$email'";
    $q = $conn->prepare($stm);
    $q->execute();
    $dataemail = $q->fetch();

    if ($dataemail) {
        $errors[] = "Email already exists";
    }


    // validate password
    if (empty($password)) {
        $errors[] = "يجب كتابة  كلمة المرور ";
    } elseif (strlen($password) < 8) {
        $errors[] = "يجب ان لايكون كلمة المرور  اقل  من 8 حرف ";
    }


    // validate confirm password
    if (empty($confirm_password)) {
        $errors[] = "يجب كتابة  كلمة المرور ";
    } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
        $errors[] = "password mismatch";
    }


    // validate confirm agree terms
    if (!isset($_POST['confirm_terms'])) {
        $errors[] = "You must agree to the terms and conditions";
    }

    // insert or errros 
    if (empty($errors)) {
        // echo "insert db";
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stm = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        $conn->prepare($stm)->execute();
        $id = $conn->lastInsertId();

        $_POST['username'] = '';
        $_POST['email'] = '';

        $_SESSION['user'] = [
            "username" => $username,
            "email" => $email,
            "id" => $id
        ];
        $res_obj["status"] = true;
        //$res_obj["msg"] = "register Successfully";

        if (isset($_COOKIE['email_cookie'])) {
            unset($_COOKIE['email_cookie']);
            setcookie("email_cookie", "", time() - 3600);
        }

    } else {
        $res_obj["status"] = false;
        $res_obj["msgs"] = $errors;
    }

    echo json_encode($res_obj);
}
?>