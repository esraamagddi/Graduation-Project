<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- reset options -->
  <link rel="stylesheet" href="../../files/css/normalize.css">
  <!-- font awesome stylesheet -->
  <link rel="stylesheet" href="../../files/css/all.min.css">
  <!-- bootstrap stylesheet -->
  <link rel="stylesheet" href="../../files/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../files/css/bootstrap.min.css.map">
  <!-- component css page -->
  <link rel="stylesheet" href="../../component/comp.css">
  <!-- main css page -->
  <link rel="stylesheet" href="../css/Reflected.css">
  <!-- page title -->
    <title>SSRF</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>
<body>
  <!-- loader -->
  <!-- <script src="../component/loader.js"></script> -->

  <div class="xss d-flex flex-column justify-content-center align-items-center myb-5 overflow-hidden">
    <div class="container h-100 mb-2 justify-content-center align-items-center mt-4">
      <div class="header-labs">
        <script src="../../component/header-labs.js"></script>
      </div>
        <div class="home home text-white d-flex fs-3    justify-content-end">
          <p class=" home text-white d-flex  "><a class="text-white" href="">Home</a>   
            </p></div>
          <div class="landing rounded-4 d-flex align-items-center justify-content-center text-center mb-5">
          </div>
        </div> 

  <form action="ssrf.php"  name="labform" class="row g-3">
   
  <div class="row row-cols-3   ms-5 text-white overflow-hidden">
          
          <div class="col mb-5">  <img class="  w-75" src="../imgs/image (1).jpeg">
            <h3>All-in-One Typewriter</h3>
            <div class="rate mb-3"><p class=" price d-flex flex-end"> <img class="me-5 w-25" src="../imgs/rating4.png">" $63.66"</p>
            </div>
            
            <a class="btn btn-primary w-75" href="./Products/Product1.php?url=All-in-One-Typewriter&submit=check">View details</a>
        </div>
          <div class="col mb-5">  <img class="  w-75" src="../imgs/image (3).jpeg">
            <h3>3D Voice Assistants</h3>
            <div class="rate mb-3"><p class=" price d-flex flex-end"> <img class="me-5 w-25" src="../imgs/rating2.png">" $63.66"</p>
            </div>
            
            <a class="btn btn-primary w-75" href="./Products/product2.php?url=3D-Voice-Assistants&submit=check">View details</a>
        </div>
          <div class="col mb-5">  <img class="  w-75" src="../imgs/image (2).jpeg">
            <h3>Hydrated Crackers</h3>
            <div class="rate mb-3"><p class=" price d-flex flex-end"> <img class="me-5 w-25" src="../imgs/rating3.png">" $63.66"</p>
            </div> 
            
            <a class="btn btn-primary w-75" href="./Products/product3.php?url=Hydrated-Crackers&submit=check">View details</a>
        </div>
          <div class="col mb-5">  <img class="  w-75" src="../imgs/54.jpg">
            <h4>Robot Home Security Buddy
            </h4>
            <div class="rate mb-3"><p class=" price d-flex flex-end"> <img class="me-5 w-25" src="../imgs/rating2.png">" $63.66"</p>
            </div>
            
            <a class="btn btn-primary w-75" href="./Products/product4.php?url=Robot_Home_Security_Buddy&submit=check">View details</a>
        </div>
          <div class="col mb-5">  <img class="  w-75" src="../imgs/image.jpeg">
            <h4>Your Virtual Journey Starts Here
            </h4>
            <div class="rate mb-3"><p class=" price d-flex flex-end"> <img class="me-5 w-25" src="../imgs/rating1.png">" $63.66"</p>
            </div>
            
            <a class="btn btn-primary w-75" href="./Products/product5.php?url=Your_Virtual_Journey_Starts_Here&submit=check">View details</a>
        </div>
          <div class="col mb-5">  <img class="  w-75" src="../imgs/75.jpg">
            <h3>Grow Your Own Spy Kit
            </h3>
            <div class="rate mb-3"><p class=" price d-flex flex-end"> <img class="me-5 w-25" src="../imgs/rating4.png">" $63.66"</p>
            </div>
            
            <a class="btn btn-primary w-75" href="./Products/product6.php?url=Grow_Your_Own_Spy_Kit&submit=check">View details</a>
        </div>
    
    </div>
          
    
	</form>
  <?php
      error_reporting(0);

      header('ssrf.php');

    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        echo "<div class='output'>";
        echo file_get_contents($url);
        echo "</div>";
    }
?>


    <div><p id="result-xss" class="text-white pt-4 fs-3"></p></div>
</div>
  <script src="../../component/jquery.min.js"></script>
  <!-- font awesome js -->
    <script src="../../files/js/all.min.js"></script>
    <script src="https://kit.fontawesome.com/c7495e3692.js" crossorigin="anonymous"></script>
    <!-- bootstrap js file -->
    <script src="../../files/js/bootstrap.bundle.min.js"></script>
    <script src="../../files/js/bootstrap.bundle.min.js.map"></script>
    <!-- header -->
    <!-- <script src="../../component/header.php"></script> -->
    <!-- sign in -->
    <script src="../../component/sign in.php"></script>
    <!-- sign up -->
    <script src="../../component/sign up.js"></script>
    <!-- forget password -->
    <script src="../../component/forget password.js"></script>
    <!-- profile header -->
    <!-- <script src="../component/profile header.js"></script> -->
    <!-- main js file -->
    <script src="../js/description.js"></script>
    <!-- footer -->
    <!-- <script src="../../component/footer.js"></script> -->
    <!-- qr code -->
    <script src="../../component/qr code.js"></script>
    <!-- arrow -->
    <script src="../../component/arrow.js"></script>
    <!-- component js file -->
    <script src="../../files/js/app.js"></script>
</body>
</html>