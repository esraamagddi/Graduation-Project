<?php
session_start();


$sign_in_status = isset($_SESSION['user']['username']) ? "true" : "false";


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
  <link rel="stylesheet" href="./css/labs.css">
  <!-- page title -->
  <title>Labs</title>
  <!-- manifest file -->
  <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
  <link rel="manifest" href="/Graduation-Project/manifest.json">
  <meta name="theme-color" content="#3ab8ff">
</head>

<body>
  <!-- loader -->
  <script src="../component/loader.js"></script>

  <!-- start labs -->
  <div class="labs my-5">
    <div class="container text-capitalize">
      <h2 class="main-head">all labs</h2>

      <div class="parent w-100 col-lg-12 bg-white p-4 pe-5  position-relative mb-5  rounded-4">
        <p class="fs-5 ms-3 d-flex align-items-center">Try solving a random lab with the title and description hidden.
          As you'll have no prior knowledge of the type of vulnerability that you need to find and exploit, this is
          great for practicing recon and analysis.</p>
        <div class="stick position-absolute top-50 translate-middle-y start-0 ms-3"></div>
      </div>
      <!-- <div class="sign d-none d-lg-flex gap-2 ms-4 justify-content-end">
        <button class="btn sign-in-btn bg-white px-4 fw-semibold">Sign In</button>
        <button class="btn sign-up-btn bg-white px-4 fw-semibold">Sign Up</button>
    </div> -->

      <div class="access d-flex align-items-center justify-content-center" id="access">
        <div class="permission " id="permission">
          <img class="w-100" src="../files/imgs/logo.png" alt="">
          <p class="text-white fw-semibold align-items-center d-flex justify-content-center fs-4 "> for free, online web
            security training</p>
          <!-- <div class="sign d-lg-flex gap-2 align-items-center d-flex justify-content-center ">
              <button  type="button" class="btn btn-primary m-4 px-4 fw-semibold sign-in-btn">sign in</button>
              <button  type="button"  class="btn btn-outline-secondary px-4 m-4 fw-semibold text-white sign-up-btn ">sign up</button>
            </div> -->
          <div class="sign d-flex gap-2  align-items-center d-flex justify-content-center">
            <button class="btn sign-in-btn btn-primary  m-4 px-4 fw-semibold fw-semibold">Sign In</button>
            <button class="btn sign-up-btn  btn-outline-secondary px-4 m-4 fw-semibold text-white fw-semibold">Sign
              Up</button>
          </div>
        </div>
      </div>
      <div class="feature  " id="feature">
        <!-- <h3 class="main-head fw-semibold">cross site scripting</h3> -->

        <div class="child  col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem;">Reflected Xss</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./Reflected xss/Reflected xss description.html"
            class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; ">SQL injection</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./sql_i/SQLi description.html" class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; "> CSRF</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./CSRF/CSRF description.html" class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; ">XXE</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./XXE/XXE description.html" class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; ">SSRF</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./SSRF/SSRF description.html" class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; "> RCE </p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./RCE/RCE description.html"
            class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; ">Directory traversal</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./Directory traversal/Directory traversal description.html"
            class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; ">File upload</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./file upload/File upload description.html"
            class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>

        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold"
            style=" left: 8rem; top: 3rem; "> IDOR</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./IDOR/IDOR description.html" class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>

        <div class="child w-100 h-25 col-lg-12 bg-white p-4 pe-5 rounded-pill position-relative mb-5">
          <i class="icon fa-solid fa-flask fa-2x"></i>
          <span class="lab2 text-uppercase ms-2 fw-bold text-black-50">lab</span>
          <p class="fs-5 ms-3 d-flex align-items-center position-absolute text-dark fw-bold" style=" left: 8rem; top: 3rem; ">Open Redirection</p>
          <div class="stick2 position-absolute top-0 ms-5 mt-2"></div>
          <a href="./Open redirection/Open redirection description.html " class="btn btn-primary btn-sm position-absolute text-center"
            style=" left: 9rem; height: 2rem; top: 1rem;">APPRENTICE</a>
        </div>
      </div>
    </div>
  </div>
  <script src="../component/jquery.min.js"></script>
  <!-- end labs -->
  <script>
    <?php
    echo "var sign_in_status = " . $sign_in_status . ";";
    ?>
  </script>
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
  <script src="./js/labs.js"></script>
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