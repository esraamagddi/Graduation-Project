<?php
include '../component/conn-db.php';
$errors_reset = [];

if (isset($_POST['save_password'])) {
  $new_password = $_POST["new_password"];

  $confirm_password = $_POST["confirm_password"];
  $email = $_POST["email"];
  $token = $_POST["token"];



  $stm = "SELECT * FROM users WHERE email='$email'";
  $q = $conn->prepare($stm);
  $q->execute();
  $data = $q->fetch();
  if (!$data) {
    // خطا في تسجيل الدخول
    $errors_reset[] = "Error";
  } else {
    if ($confirm_password == "" || $new_password == "") {
      $errors_reset[] = "please fill passwords input.";
    } else {

      $stm = "SELECT reset_link_token FROM users WHERE email='$email'";
      $q = $conn->prepare($stm);
      $q->execute();
      $data = $q->fetch();

      if (!$data) {
        $errors_reset[] = "an error";
      } else {
        $db_token = $data["reset_link_token"];
        if ($db_token !== $token) {
          $errors_reset[] = "Token Error";
        } else {
          if ($new_password == $confirm_password) {

            $new_password = password_hash($new_password, PASSWORD_DEFAULT);

            $update = "update users set password='$new_password' where email='$email'";
            $q = $conn->prepare($update);
            $q->execute();
            if ($q) {


              $token = md5(rand());
              $update_token = "UPDATE users SET reset_link_token ='$token' WHERE email = '$email' LIMIT 1";

              $q = $conn->prepare($update_token);
              $q->execute();
              if ($q) {

                $success_msg = "Password Updated Successfully";

              }

            } else {
              /*sorry your profile is not update*/

              $errors_reset[] = "sorry your profile is not update";

            }
          } else {
            $errors_reset[] = "Passwords Doesnot match";
          }
        }
      }




    }
  }


} else {
  if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $email = $_GET["email"];

    $stm = "SELECT reset_link_token FROM users WHERE email='$email'";
    $q = $conn->prepare($stm);
    $q->execute();
    $data = $q->fetch();

    if (!$data) {
      $errors_reset[] = "an error";
    } else {
      $db_token = $data["reset_link_token"];
      if ($db_token !== $token) {
        $errors_reset[] = "The link is invalid";
      }
    }

  } else {
    $errors_reset[] = "token Not found";
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
  <!-- page title -->
  <title>Reset Password</title>
  <!-- manifest file -->
  <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
  <link rel="manifest" href="/Graduation-Project/manifest.json">
  <meta name="theme-color" content="#3ab8ff">

  <style>
    .sign_error {
      color: red;
      display: block;
    }

    .sign_success {
      color: green;
      display: block;
    }
  </style>
</head>

<body>
  <!-- loader -->
  <script src="../component/loader.js"></script>

  <div class="resetPass mt-5 mb-2">
    <div class="card w-50 mx-auto border-0">
      <div class="card-body position-relative">
        <div class="card-layout w-100 h-100 position-absolute top-0 start-0"></div>
        <div class="position-relative">
          <?php
          if (isset($errors_reset) && count($errors_reset) > 0) {
            ?>
            <div class="custom_errors">
              <?php
              foreach ($errors_reset as $error_reset) {
                echo '<h3 class="sign_error">' . $error_reset . '</h3>';
              }
              ?>
            </div>
            <script>
              setTimeout(function () {
                window.location.href = "../home/home.php";
              }, 5000);
            </script>
            <?php
          } else {
            ?>

            <?php
            if (isset($success_msg)) {
              echo '<h3 class="sign_success">' . $success_msg . '</h3>';
              ?>
              <script>
                setTimeout(function () {
                  window.location.href = "../home/home.php";
                }, 3000);
              </script>
              <?php
            }
            ?>
            <h5 class="card-title text-capitalize fw-bold mt-5 text-center">set new password</h5>
            <form action="reset.php" method="POST">
              <input type="hidden" name="token" value="<?php echo isset($_GET["token"]) ? $_GET["token"] : ""; ?>">
              <input type="hidden" name="email" value="<?php echo isset($_GET["email"]) ? $_GET["email"] : ""; ?>">
              <div class="position-relative">
                <input class="p-2 pe-5 w-100 border-top-0 border-end-0 mt-3" type="password" name="new_password"
                  id="pass-reset" placeholder="Enter Your Password" required maxlength="20" minlength="8">
                <div class="eye-slash position-absolute top-50 translate-middle-y text-white" role="button"><i
                    class="fa-solid fa-eye-slash"></i></div>
                <div class="eye d-none position-absolute top-50 translate-middle-y text-white" role="button"><i
                    class="fa-solid fa-eye"></i></div>
              </div>
              <div id="passwordHelpBlock" class="form-text mb-4 text-white-50">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
                special characters, or emoji.
              </div>
              <div class="position-relative">
                <input class="p-2 pe-5 w-100 border-top-0 border-end-0 mt-2" type="password" name="confirm_password"
                  id="re-pass-reset" placeholder="Repeat Password" required maxlength="20" minlength="8">
                <div class="eye-slash position-absolute top-50 translate-middle-y text-white" role="button"><i
                    class="fa-solid fa-eye-slash"></i></div>
                <div class="eye d-none position-absolute top-50 translate-middle-y text-white" role="button"><i
                    class="fa-solid fa-eye"></i></div>
              </div>
              <div class="pass-miss text-danger mb-3 mt-1">
                * password mismatch
              </div>
              <input type="submit" class="reset btn text-white w-100 py-2 fs-5 mt-3 mb-5 fw-semibold" name="save_password"
                value="Reset Password">
            </form>
            <?php
          }

          ?>


        </div>
      </div>
    </div>
  </div>
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
  <!-- main js file -->
  <script src="js/reset.js"></script>
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