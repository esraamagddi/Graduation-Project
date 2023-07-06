<?php
header("Content-Type: application/javascript");
require_once '../component/conn-db.php';
session_start();

$loged_in_success = false;
if (isset($_SESSION['user']['email'])) {
    $loged_in_success = true;

    $id = $_SESSION["user"]['id'];
    $stm = "SELECT * FROM users WHERE id=$id";
    $q = $conn->prepare($stm);
    $q->execute();
    $data = $q->fetch();
    if (isset($data["image"]) && $data["image"] !== "") {
        $user_img = "../uploadimg/" . $data["image"];
    } else {
        $user_img = "../files/imgs/profile.png";
    }
}




$js_file = 'function createHeader(){
    let headerText=`<nav class="navbar navbar-expand-lg py-2">
    <div class="container">
        <a class="navbar-brand overflow-hidden py-3" href="../home/home.php"><img src="../files/imgs/logo.png" alt="Secure Labs"></a>
        ';

if ($loged_in_success == false) {

    $js_file .= '<div class="sign d-flex d-lg-none gap-2 me-4 ms-auto justify-content-end">
            <button class="btn sign-in-btn bg-white px-4 fw-semibold">Sign In</button>
            <button class="btn sign-up-btn bg-white px-4 fw-semibold">Sign Up</button>
        </div>';
} else {
    $js_file .= '<div class="profile me-3 d-flex d-lg-none ms-auto justify-content-end profile_btn" role="button">
    <img class="rounded-circle" src="' . $user_img . '" alt="name">
</div>';
}

$js_file .= '
        <button class="navbar-toggler border-white px-3 py-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-white fs-5"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto mb-1 mb-lg-0 fw-bold border-bottom gap-lg-5 py-lg-2">
                <li class="nav-item">
                    <a class="nav-link text-white rounded-2" href="/graduation-project/home/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white rounded-2" href="/graduation-project/labs/labs.php">Labs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white rounded-2" href="/graduation-project/contact us/contact.php">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white rounded-2" href="cmklmlkd" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu text-capitalize bg-white">
                        <li class="mb-1"><a class="dropdown-item nav-link black-color" href="/graduation-project/about us/about.html">Who we are</a></li>
                        <li class="mb-1"><a class="dropdown-item nav-link black-color" href="/graduation-project/about us/mission.html">our mission</a></li>
                        <li class="mb-1"><a class="dropdown-item nav-link black-color" href="/graduation-project/about us/team.html">team</a></li>
                        <li class="mb-1"><a class="dropdown-item nav-link black-color" href="/graduation-project/about us/privacy.html">privacy</a></li>
                        <li class="mb-1"><a class="dropdown-item nav-link black-color" href="/graduation-project/about us/terms.html">terms</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white rounded-2" href="/graduation-project/faq/faq.html">FAQ</a>
                </li>
            </ul>
        </div>';

if ($loged_in_success == false) {

    $js_file .= '<div class="sign d-none d-lg-flex gap-2 ms-4 justify-content-end">
            <button class="btn sign-in-btn bg-white px-4 fw-semibold">Sign In</button>
            <button class="btn sign-up-btn bg-white px-4 fw-semibold">Sign Up</button>
        </div>';
} else {
    $js_file .= '<div class="profile ms-3 d-none d-lg-flex justify-content-end profile_btn" role="button">
    <img class="rounded-circle" src="' . $user_img . '" alt="name">
</div>

<div class="info position-absolute text-center rounded-4 text-capitalize p-4 white-color" id="user_info_box">
        
<img class="rounded-circle position-absolute start-50 translate-middle-x" src="' . $user_img . '" alt="radwa amer">
        <p class="user fw-bold black-color mt-3 mb-4">' . $_SESSION['user']['username'] . '</p>
        <a href="../user profile/user.php" class="btn border-0 main-btn w-100 text-white py-2 d-flex align-items-center justify-content-center gap-2">
            <svg class="svg-inline--fa fa-circle-user fs-5" aria-hidden="true" focusable="false" data-prefix="far" data-icon="circle-user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 112c-48.6 0-88 39.4-88 88C168 248.6 207.4 288 256 288s88-39.4 88-88C344 151.4 304.6 112 256 112zM256 240c-22.06 0-40-17.95-40-40C216 177.9 233.9 160 256 160s40 17.94 40 40C296 222.1 278.1 240 256 240zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-46.73 0-89.76-15.68-124.5-41.79C148.8 389 182.4 368 220.2 368h71.69c37.75 0 71.31 21.01 88.68 54.21C345.8 448.3 302.7 464 256 464zM416.2 388.5C389.2 346.3 343.2 320 291.8 320H220.2c-51.36 0-97.35 26.25-124.4 68.48C65.96 352.5 48 306.3 48 256c0-114.7 93.31-208 208-208s208 93.31 208 208C464 306.3 446 352.5 416.2 388.5z"></path></svg><!-- <i class="fs-5 fa-regular fa-circle-user"></i> Font Awesome fontawesome.com -->
            <p>View Profile</p>
        </a>
        <a href="http://localhost/graduation-project/component/logout.php" class="btn border-0 main-btn w-100 text-white py-2 mt-3 d-flex align-items-center justify-content-center gap-2">
            <svg class="svg-inline--fa fa-arrow-right-from-bracket fs-5" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-from-bracket" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64c17.67 0 32-14.33 32-32S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256c0 53.02 42.98 96 96 96h64c17.67 0 32-14.33 32-32S177.7 416 160 416zM502.6 233.4l-128-128c-12.51-12.51-32.76-12.49-45.25 0c-12.5 12.5-12.5 32.75 0 45.25L402.8 224H192C174.3 224 160 238.3 160 256s14.31 32 32 32h210.8l-73.38 73.38c-12.5 12.5-12.5 32.75 0 45.25s32.75 12.5 45.25 0l128-128C515.1 266.1 515.1 245.9 502.6 233.4z"></path></svg><!-- <i class="fs-5 fa-solid fa-arrow-right-from-bracket"></i> Font Awesome fontawesome.com -->
            <p>Log Out</p>
        </a>
</div>
';
}


$js_file .= '
    </div>
</nav>`
    let header=document.createElement("header");
    header.innerHTML=headerText;
    document.body.prepend(header);
};
createHeader();


$(".profile_btn").click(function () {
    $("#user_info_box").toggleClass("active");
});

// active page style
document.querySelectorAll("nav .nav-item .nav-link").forEach((a)=>{
    if(a.href.includes(window.location.pathname)){
        a.classList.add("active");
    }
})';
echo $js_file;
?>