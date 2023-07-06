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
       <div class="g-col-4 text-white mb-5  "> <img class="rounded w-75 h-75 mb-3" src="../../imgs/image (3).jpeg " alt="">
     <h2 class=" text-white"> Description:</h2>
        <p class="mb-5">
            Voice assistants have just got so much better. You no longer have to look at a blank screen, your 3d assistant can be customized to resemble anyone you want it to be. Your assistant works via a Bluetooth connection enabling you to keep that cell tucked away out of sight. Pop your assistant on the table, in your top pocket, or anywhere you like. Just like other voice assistants you can communicate in real time and ask it anything you need to know.

            You will never be alone with your 3D assistant. Good company for all occasions, debate, play puzzles and listen to your choice of music together. Your assistant comes with a 600 page, hard copy, instruction manual, allowing you to train it to its full capacity. There are over 5000 command and responses you can easily input ensuring many evenings of entertaining conversation, and mind-boggling facts and figures that will blow your mind.
            
            Once fully enabled you only need to update your assistant once a month when we send you the upgraded 500-page electronic instruction manual. You will always be abreast of the latest technology and on top of current affairs as our team trawl the net for new information for you to add to your existing database. Get yourself a pocket friend and expand your mind today.</p>
         </div>  
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
  <!-- <script src="../../../component/header.php"></script>s -->
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