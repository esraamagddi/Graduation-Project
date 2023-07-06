

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
    <title>SQLI</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>
<body>
  <!-- loader -->
  <!-- <script src="../component/loader.js"></script> -->

  <div class="xss d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="container mb-2 justify-content-center align-items-center mt-4">
      <div class="d-flex align-items-center logo-labs position-relative mb-5">
        <div class="landing rounded-4 d-flex align-items-center justify-content-center text-center">
                <img src="../../files/imgs/logo.png" alt="">
            </div>
            <div class="border border-0 border-start ms-2 ps-4">
              <h2  class="text fs-2 fw-semibold border-bottom border-primary  "> <span class=" position-absolute "style="
            height: 68px
            top: 4rem;
        " >SQLi  </span> 
        <a href="./SQLi description.html"><br><span class="text2 fs-5">Back to lab description <small class="fs-6">>>></small> </span>  </a>  </h2>
            </div>
      
            <div class="position-absolute end-0 w-100" style="background-color: var(--main-color); height: 2px; bottom:-13px"></div>
      </div>
      
                <div class="back  h-50  p-3 mb-2 justify-content-center align-items-center d-flex flex-column  ">
                  <img src="../imgs/Group.png" class="w-50 mb-5" alt=""> </div>

                  <form action="sqli.php" class="position-relative mt-2 form  d-flex align-items-center justify-content-center  ">
                      <input type="text" name="search" class="rounded-pill p-3 w-75 border-0 ps-4 pe-5"type="text" placeholder="Search The Blog..." data-search require id="validationDefault01"  required>
                      <button class="btn border-0">
                        <i class="SearchIcon position-absolute top-50 p-3 translate-middle-y fa-solid fs-4 fa-magnifying-glass text-black-50 "role="button"
                        type="submit" name="fname" id="xss-inp"style="right: 14%;" ></i> 
                      </button>
                
                  
                </form>
          </div>
              </div>
            
              
                <!-- <form action="Reflected xss.php" method="post" id="xss-form" name="myform" class="position-relative mt-2 form  d-flex align-items-center justify-content-center  " >
                    <input id="xss-inp" name="fname" class="rounded-pill p-3 w-100 border-0 ps-4 pe-5"type="text" placeholder="Search The Blog..." data-search require>
                    <button class="btn border-0">
                      <i class="SearchIcon position-absolute top-50 p-3 translate-middle-y fa-solid fs-4 fa-magnifying-glass text-black-50 "role="button"
                      type="submit" name="fname" id="xss-inp"style="right: 4%;" ></i> 
                    </button>
                    
                  </form> -->
<!-- <div class="container">
  <form action="sqli.php" class="row g-3">
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">First name</label>
      <input type="text" name="search" class="form-control" id="validationDefault01"  required>
    </div>
   
    <div class="col-12">
      <input type="submit" class="btn btn-primary" value="check">
    </div>

  </div> 
</form>-->
  <div class="container d-flex flex-column mt-5">
    <div class=" text-white d-flex flex-column justify-content-center align-items-center  mb-5  "> <img class="rounded w-50 mb-3" src="../imgs/12.jpg " alt="">
   <h2 class="text-primary mb-3 fs-5">It's All Just A Click Away</h2>
   <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
   <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-center fs-6"style="
align-content: center;
display: inline-flex;
width: 32rem;
margin-right: 5rem;">What I love most about Social Media is how it fills my days. Time just evaporates with every word I read, every video I watch and every pointless self-analyzing quiz I take part in.....</p>    
<a href="./Products/Product1.html" class="btn  btn-info d-flex  mb-5" >
 <p class="fw-semibold  text-white">View post</p> </a> </div>

</div>
<div class=" text-white d-flex flex-column justify-content-center align-items-center  mb-5  "> <img class="rounded w-50 mb-3" src="../imgs/13.jpg " alt="">
   <h2 class="text-primary mb-3 fs-5">Lies, Lies & More Lies</h2>
   <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
   <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
align-content: center;
display: inline-flex;
width: 32rem;
margin-right: 5rem;"> I remember the first time I told a lie. That's not to say I didn't do it before then, I just don't remember. I was nine years old and at my third school already........</p>
   <a href="./Products/Product2.html" class="btn btn-info mb-5" >
     <p class="fw-semibold text-white">View post</p> </a> </div>
</div>
<div class=" text-white d-flex flex-column justify-content-center align-items-center  mb-5  "> <img class="rounded w-50  mb-3" src="../imgs/10.jpg " alt="">
   <h2 class="text-primary mb-3 fs-5">I'm A Photoshopped Girl Living In A Photoshopped World</h2>
   <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
   <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
align-content: center;
display: inline-flex;
width: 32rem;
margin-right: 5rem;"> The 'discovery' of port dates back to the late Seventeenth Century when British sailors stumbled upon the drink in Portugal and then stumbled even more slowly home with several more bottles. It has been said since then that Portugal is...</p>
   <a href="./Products/product3.html" class="btn btn-info mb-5" > 
    <p class="fw-semibold  text-white">View post</p> </a> </div>
</div>
<div class=" text-white d-flex flex-column justify-content-center align-items-center mb-5  "> <img class="rounded w-50  mb-3" src="../imgs/21.jpg" alt="">
   <h2 class="text-primary mb-3 fs-5">The Do's & Don'ts of Writing Your Resume</h2>
   <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
   <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
align-content: center;
display: inline-flex;
width: 32rem;
margin-right: 5rem;"> We all know how extremely important first impressions are, especially in the business world. Your resume is your handshake to your future employer, don't make it a sweaty limp one...........
</p>
   <a href="./Products/product4.html" class="btn btn-info mb-5" >
     <p class="fw-semibold  text-white">View post</p> </a> </div>
</div>
<div class=" text-white d-flex flex-column justify-content-center align-items-center  mb-5  "> <img class="rounded w-50  mb-3" src="../imgs/image (1).jpeg " alt="">
   <h2 class="text-primary mb-3 fs-5">The history of swigging port</h2>
   <div class="paragraph  d-flex flex-column justify-content-center align-items-center ">
   <p class=" mb-3 ms-5  d-flex  flex-column justify-content-center align-items-cente fs-6"style="
align-content: center;
display: inline-flex;
width: 32rem;
margin-right: 5rem;"> The 'discovery' of port dates back to the late Seventeenth Century when British sailors stumbled upon the drink in Portugal and then stumbled even more slowly home with several more bottles. It has been said since then that Portugal is...</p>
   <a href="./Products/product5.html" class="btn btn-info" > 
    <p class="fw-semibold  text-white">View post</p> </a> </div>
</div>

</div>

</div> 
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

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>