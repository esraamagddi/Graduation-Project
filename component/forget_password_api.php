<?php
header("Content-Type: Application/json");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'mailer/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('conn-db.php');


    if (isset($_POST["action"]) && $_POST["action"] !== "") {

        $action = $_POST["action"];
        if ($action == "recover_email") {



            $email = $_POST["email"];
            $token = md5(rand());
            $check_email = "SELECT email FROM users WHERE email ='$email' LIMIT 1";
            $check_email_run = $conn->prepare($check_email)->execute();
            $result = $conn->prepare("SELECT FOUND_ROWS()");
            $result->execute();
            $row_count = $result->fetchColumn();
            if ($row_count > 0) {
                $stm = "SELECT * FROM users WHERE email ='$email' LIMIT 1";
                $q = $conn->prepare($stm);
                $q->execute();
                $row = $q->fetch();

                $get_name = $row['username'];
                $get_email = $row['email'];
                $update_token = "UPDATE users SET reset_link_token ='$token' WHERE email = '$get_email' LIMIT 1";
                $q = $conn->prepare($update_token);
                $q->execute();
                if (!$q) {
                    $res["status"] = false;
                    $res["msg"] = "Something went wrong. #1";
                } else {

                    $mail = new PHPMailer;
                    $mail->isSMTP();
                    $mail->Host = "smtp.gmail.com";
                    $mail->SMTPAuth = true;
                    $mail->Username = 'secure.spacce@gmail.com';
                    $mail->Password = 'gpazjnjkycsffmqx';
                    $mail->SMTPSecure = "tls";
                    $mail->Port = 587;
                    $mail->setFrom('secure.spacce@gmail.com', 'secure space');
                    $mail->addAddress($get_email, $get_name);
                    $mail->isHTML(true);
                    $mail->Subject = 'reset your account password on secure space';

                    $email_template = "
			<h2>Hello</h2> 
			<h3>You are receiving this email because we received a password reset request for your account.</h3> 
			<br/><br/>
			<a href='http://localhost/graduation-project/reset password/reset.php?token=$token&email=$get_email'> Click Me </a>
			";
                    $mail->Body = $email_template;


                    if (!$mail->send()) {
                        $res["status"] = false;
                        $res["msg"] = 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        $res["status"] = true;
                        $res["msg"] = "Recovery Email sent successfully";
                        
                    }

                }
            } else {
                $res["status"] = false;
                $res["msg"] = "No Email Found";
            }



        }
    } else {
        $res["status"] = 401;
        $res["msg"] = "action not found";
    }
    echo json_encode($res);
}