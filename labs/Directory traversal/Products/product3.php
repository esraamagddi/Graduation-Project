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
          <div class="rate mb-3 text-white"> <p class="mb-4"> Hydrated Crackers</p><img class="me-5 mb-3" src="../../imgs/rating3.png"><p class=" price mb-3 d-flex flex-end"> " $63.66"</p>
          </div>
       <div class="g-col-4 text-white mb-5  "> <img class="rounded w-75 h-75 mb-3" src="../../imgs/image (2).jpeg" alt="">
     <h2 class=" text-white"> Description:</h2>
        <p class="mb-5">
            At some time or another, we've all had that dry mouth feeling when eating a cracker. If we didn't, no-one would bet how many crackers we can eat in one sitting. Here at Barnaby Smudge, we have baked the solution. Hydrated Crackers.

            Each cracker has a million tiny pores which release moisture as you chew, imagine popping a bubble, it's just like that. No more choking or having your tongue stick to your teeth and the roof of your mouth.
            
            How many times have you asked yourself, 'why?' Why are these crackers so dry. We are responding to popular public opinion that dry crackers should be a thing of the past. You can set up your own cracker eating contests, but make sure you supply your own packet; explain you are wheat intolerant and have to eat these special biscuits, but no sharing.
            
            Due to the scientific process that goes into making each individual cracker the cost might seem prohibitive for something as small as a snack. But, we know you can't put a price on hydration, with the added bonus of not spitting crumbs at people. Pick up a packet today. </div>  
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