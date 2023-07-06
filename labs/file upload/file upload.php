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
  <link rel="stylesheet" href="./file upload.css">
  <!-- page title -->
    <title>file upload</title>
    <!-- manifest file -->
    <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
    <link rel="manifest" href="/Graduation-Project/manifest.json">
    <meta name="theme-color" content="#3ab8ff">
</head>
<body>
  <!-- loader -->
  <script src="../component/loader.js"></script>

  <div class="xss d-flex flex-column justify-content-center align-items-center mb-5 text-white">
    <div class="container  h-100 mb-2 justify-content-center align-items-center text-white mt-4" >
    <div class="header-labs">
            <script src="../../component/header-labs.js"></script>
          </div>
  </div>
</div>
  <div class="card-action">
<div class="container">
  <div class="parent p-3 mb-2 text-dark d-flex flex-column align-items-center justify-content-center position-relative  rounded-4">
<img class="mb-5" src="../../files/imgs/logo.png" alt="">
<p class="mb-4 text-white fs-4 d-flex justify-content-center align-items-center mx-5 "> To upload your files, please click on the "Browse" <br> button and select the file you wish to upload. <br>     <?php
    error_reporting(0);
    $blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
    if (isset($_FILES['uploadedfile'])) {
      $file_type = $_FILES['uploadedfile']['type'];
      $file_ext = '.' . pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
      if (in_array($file_ext, $blacklist)) {
        echo "<p class='py-3 text-white fs-3'>Sorry, invalid type!</p>";
        
      } else {
        $uploaddir = 'uploads/';
        $uploadfile = $uploaddir . basename($_FILES['uploadedfile']['name']);
        if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $uploadfile)) {
          echo "<p class='py-3 text-white fs-3'>File is valid, and was successfully uploaded.</p>";
          if (file_exists($uploadfile)) {
            echo "<a href=\"$uploadfile\">Uploaded</a>";
          }
        } else {
          echo "<p class='py-3 text-white fs-3'>File uploading failed.</p>";
        }
      }
    }
    ?></p>
<div class="Browse text-center d-flex gap-4">
    <form enctype="multipart/form-data" action="file upload.php" method="POST">
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000000000000000000000000000000000000" />
      <input class=" upload m-5 mx-5 btn btn-primary" name="uploadedfile" type="file" id="upload" hidden /> <label for="upload">Browse Files</label>
      <input class="upload1 mx-5 btn btn-primary" type="submit" value="Upload File"  /> 
      <p class="text-muted">Files supported: jpg, png, gif, pdf</p>
    </form></div>
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
</body>
</html>