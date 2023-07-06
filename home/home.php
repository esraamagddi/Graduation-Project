<?php
session_start();
$loged_in_success = false;
if (isset($_SESSION['user']['email'])) {
    $loged_in_success = true;
    
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
    <!-- sweet alert stylesheet -->
    <link rel="stylesheet" href="../files/css/sweetalert2.min.css">
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href="../files/css/bootstrap.min.css">
    <link rel="stylesheet" href="../files/css/bootstrap.min.css.map">
    <!-- component css page -->
    <link rel="stylesheet" href="../component/comp.css">
    <!-- main css page -->
    <link rel="stylesheet" href="css/home.css">
    <!-- page title -->
    <title>Home</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>

<body>
    <!-- loader -->
    <script src="../component/loader.js"></script>

    <!-- start landing -->
    <div class="landing text-center my-5">
        <div class="container">
            <h1 class="text-white fw-semibold">Are You Secure <span class="fw-bold">100%</span></h1>
            <p class="text-white pt-1">Check If Your Email Or Phone Number Is In Data Breach. For More Information <a
                    class="what-breach fw-bold" target="_blank" href="../faq/faq.html#what-is-data-breach">CHECK
                    HERE</a></p>
                    
            <form class="position-relative mt-4 mb-3" method="POST" action="home.php">
                <input type="text" name="query" class="rounded-pill py-3 w-50 border-0 pe-5 ps-4"  
                    placeholder="Enter Your Email Or Phone Number"    required>
                <button class="btn position-absolute top-50 translate-middle-y text-black-50 fs-4 border-0"
                    type="submit" name="search-data-leak" id="elk-search-btn"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        
            <!-- <form method="post" action="home.php">
<input type="text" name="query">
<button type="submit">Search</button>
</form> -->

            <p class="text-white-50 mb-5"><i class="fa-solid fa-circle-check fs-5 me-1"></i> We do not keep logs of your
                searches. Data is transferred using the TLS protocol and cannot be intercepted.</p>
            <div class="row pt-2">
            </div>
        </div>
        <template id="my-template"></template>
        <div class="info">
        </div>
    </div>
       <!-- sweet alert js file -->
       <script src="../files/js/sweetalert2.all.min.js"></script>
    <?php
require_once 'app/init.php';



?>

    <!-- end landing -->
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <!-- font awesome js -->
    <script src="../component/jquery.min.js"></script>
    <!-- font awesome js -->
    <script src="../files/js/all.min.js"></script>
    <script src="https://kit.fontawesome.com/c7495e3692.js" crossorigin="anonymous"></script>
    <!-- sweet alert js file -->
    <!-- <script src="../files/js/sweetalert2.all.min.js"></script> -->
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
    <script src="js/home.js"></script>
    <!-- elastic search -->
    <!-- <script type="application/javascript" src="./js/elastic search.js"></script> -->
    <!-- footer -->
    <script src="../component/footer.js"></script>
    <!-- qr code -->
    <script src="../component/qr code.js"></script>
    <!-- arrow -->
    <script src="../component/arrow.js"></script>
    <!-- component js file -->
    <script src="../files/js/app.js"></script>
    <!-- <script>    document.querySelector(".landing form").addEventListener("submit", (e) => {
        e.preventDefault();})</script> -->

</body>

</html>