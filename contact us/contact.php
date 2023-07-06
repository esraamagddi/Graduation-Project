<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require '../component/mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                                 //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'secure.spacce@gmail.com';                           //SMTP username
    $mail->Password   = 'gpazjnjkycsffmqx';                        //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Content format
    $mail->isHTML(true);        //Set email format to HTML
    $mail->CharSet = "UTF-8"; 

if (isset($_POST['submit'])) {

        $mail->setFrom($_POST['email'] ,  $_POST['fullname']);
        $mail->addAddress('secure.spacce@gmail.com' , 'secure space');
        $mail->Subject  =  'Contact me';
        $mail->Body     =  $_POST['user_message'];
        $mail->send();
        

        $msgs = [];
        if(!$mail->send())
{
  $msgs[] = "Mailer Error: " . $mail->ErrorInfo;
}
else
{
    $msgs[] = "Message has been sent successfully";
    
}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- reset options -->
    <link rel="stylesheet" href="../files/css/normalize.css">
    <!-- font awesome stylesheet -->
    <link rel="stylesheet" href="../files/css/all.min.css">
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href="../files/css/bootstrap.min.css">
    <link rel="stylesheet" href="../files/css/bootstrap.min.css.map">
    <!-- component css page -->
    <link rel="stylesheet" href="../component/comp.css">
    <!-- main css page -->
    <link rel="stylesheet" href="css/contact.css">
    <!-- page title -->
    <title>Contact</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>
<body>
  <!-- loader -->
  <script src="../component/loader.js"></script>

  <!-- start contact us -->
  <div class="contact my-5  d-flex flex-column align-items-center justify-content-center">
    <div class="container text-capitalize ">
      <div class="contact-form p-4 rounded-3 bg-white text-dark" >
        <div class="row align-items-center pt-4">

                        <?php
                        if (isset($msgs)) {
                            ?>
                            <div class="custom_errors">
                                <?php
                                foreach ($msgs as $msg) {
                                    echo '<h3 class="error">' . $msg . '</h3>';
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
          <div class="col  d-flex flex-column align-items-center justify-content-center">
            <form action="contact.php" method="post" enctype="multipart/form-data">
              <div class="d-flex flex-column gap-4">
                <div class="w-100">
                  <!-- <label for="validationCustom01" class="form-label text-black-50 mb-2">name</label> -->
                  <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="fullname" required>
                </div>
                <div class="w-100 mb-4">
                  <!-- <label for="exampleInputEmail1" class="input text-black-50 mb-2">Email</label> -->
                  <input type="email" class="email form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Email" name="email" required >
                </div>
              </div>
              <div>
                <!-- <label class="msg text-black-50 mb-2 mt-4 w-50" for="message">Message</label> -->
                <textarea class="form-control w-100" name="user_message" id="msg" cols="30" rows="10" placeholder="Message" required></textarea>
              </div>
              <div class="text ms-5 ">
                <input type="submit" class="submit btn text-uppercase text-white px-5 mt-4" name="submit" value="Submit">
              </div>
            </form>
          </div>
          <div class="col">
            <img class="image w-100" src="../files/imgs/contact.png" alt="Contact-Us" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end contact us -->
  
  <script src="../component/jquery.min.js"></script>
    <!-- font awesome js -->
    <script src="../files/js/all.min.js"></script>
    <script src="https://kit.fontawesome.com/c7495e3692.js" crossorigin="anonymous"></script>
    <!-- bootstrap js file -->
    <script src="../files/js/bootstrap.bundle.min.js"></script>
    <script src="../files/js/bootstrap.bundle.min.js.map"></script>
    <!-- header -->
    <script src="../component/header.php"></script>
    <!-- sign in -->
    <script src="../component/sign in.php"></script>
    <!-- sign up -->
    <script src="../component/sign up.js"></script>
    <!-- forget password -->
    <script src="../component/forget password.js"></script>
    <!-- profile header -->
    <!-- <script src="../component/profile header.js"></script> -->
    <!-- main js file -->
    <script src="js/contact.js"></script>
    <!-- footer -->
    <script src="../component/footer.js"></script>
    <!-- qr code -->
    <script src="../component/qr code.js"></script>
    <!-- arrow -->
    <script src="../component/arrow.js"></script>
    <!-- component js file -->
    <script src="../files/js/app.js"></script>
</body>
</html>