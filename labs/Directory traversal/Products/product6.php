<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- reset options -->
  <link rel="stylesheet" href="../../../files/css/normalize.css">
  <!-- font awesome stylesheet -->
  <link rel="stylesheet" href="../../../files/css/all.min.css">
  <!-- bootstrap stylesheet -->
  <link rel="stylesheet" href="../../../files/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../files/css/bootstrap.min.css.map">
  <!-- component css page -->
  <link rel="stylesheet" href="../../../component/comp.css">
  <!-- main css page -->
  <link rel="stylesheet" href="../CSRF.css">
  <!-- page title -->
    <title>view products</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>
<body>
  <!-- loader -->
  <script src="../../component/loader.js"></script>

  <!-- start description -->
  
  <div class="xss d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="container mt-4">

      <div class="Directory-Traversal header-products">
        <script src="../../../component/header-products.js"></script>
      </div>
       
<div class="container mt-5">
          <div class="rate mb-3 text-white"> <p class="mb-4"> Grow Your Own Spy Kit</p><img class="me-5 mb-3" src="../../imgs/rating4.png"><p class=" price mb-3 d-flex flex-end"> " $63.66"</p>
          </div>
       <div class="g-col-4 text-white mb-5  "> <img class="rounded w-75 h-75 mb-3" src="../../imgs/75.jpg" alt="">
     <h2 class=" text-white"> Description:</h2>
        <p class="mb-5">
            Description:
            Everyone is getting wise to the nanny cams, and the old fashioned ways of listening in on other people's conversations. No-one trusts a cute looking teddy bear anymore, who knows what is hidden behind those button eyes. We have designed a foolproof system that will never catch you out with our 'Grow Your Own Spy Kit'.
            In the same easy way you plant a seed, or seedling, you pop the water-resistant bug beneath the surface of some fresh compost. With regular watering and a sprinkling of plant food, your bug pots will thrive until they are ready to be gifted to those you wish to spy on.
            No-one will suspect what you're up to, even if they have their suspicions, the only bugs they are going to find hiding amongst the leaves will be greenfly.
            On purchasing our 'Grow Your Own Spy Kit' you will be required to sign a Non-Disclosure Agreement, loose lips cost lives you know.
            Whether you are planning on just having a bit of fun with your family and friends, or you are a serious spy in the making, eavesdropping could not be any easier  </div>  
   <div class="return  ">  </a>
    <div class="arrows align-items-center justify-content-end d-flex ">

    <i class="fa-solid fs-2 fa-chevron-left text-primary"></i> 
    <i class="fa-solid fs-2 fa-chevron-left text-primary"></i>   
    <a  href="../Directory traversal.html" >
     <span class=" text-white align-items-center">Return to list</span> </a>
   
      </div>
    </div>
    </div>
    <?php
	error_reporting(0);
	if(isset($_GET["page"])) {
	    echo "<div class='output'>";
	    include($_GET["page"]);
	    echo "</div>";
	    $page_name = $_GET["page"];
	}
	?>
 </div>
   
 
<script src="../../../component/jquery.min.js"></script>
<!-- font awesome js -->
  <script src="../../../files/js/all.min.js"></script>
  <script src="https://kit.fontawesome.com/c7495e3692.js" crossorigin="anonymous"></script>
  <!-- bootstrap js file -->
  <script src="../../../files/js/bootstrap.bundle.min.js"></script>
  <script src="../../../files/js/bootstrap.bundle.min.js.map"></script>
  <!-- header -->
  <!-- <script src="../../../component/header.php"></script> -->
  <!-- sign in -->
  <script src="../../../component/sign in.php"></script>
  <!-- sign up -->
  <script src="../../../component/sign up.js"></script>
  <!-- forget password -->
  <script src="../../../component/forget password.js"></script>
  <!-- profile header -->
  <!-- <script src="../component/profile header.js"></script> -->
  <!-- main js file -->
  <script src="../../js/description.js"></script>
  <!-- footer -->
  <!-- <script src="../../../component/footer.js"></script> -->
  <!-- qr code -->
  <script src="../../../component/qr code.js"></script>
  <!-- arrow -->
  <script src="../../../component/arrow.js"></script>
  <!-- component js file -->
  <script src="../../../files/js/app.js"></script>
</body>
</html>