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
  <link rel="stylesheet" href="../css/idor.css">
  <style>
    .custom_space {
      display: flex;
      justify-content: space-between;
    }
  </style>
  <!-- page title -->
  <title>IDOR</title>
  <!-- manifest file -->
  <link rel="canonical" href="https://radwaamer.github.io/Graduation-Project/" />
  <link rel="manifest" href="/Graduation-Project/manifest.json">
  <meta name="theme-color" content="#3ab8ff">
</head>

<body>

  <div class="xss d-flex flex-column justify-content-center align-items-center mt-4 ">
    <div class="container  mb-2 justify-content-center align-items-center mb-5">
      <div class="d-flex align-items-center logo-labs position-relative mb-5">
        <div class="landing rounded-4 d-flex align-items-center justify-content-center text-center">
          <img src="../../files/imgs/logo.png" alt="">
        </div>
        <div class="border border-0 border-start ms-2 ps-4">
          <h2 class="text fs-2 fw-semibold border-bottom border-primary text-white "> <span class=" position-absolute "
              style="
            height: 68px
            top: 4rem;
        ">IDOR </span>
            <a href="./IDOR description.html"><br><span class="text2 fs-5 text-white">Back to lab description <small
                  class="fs-6">>>></small> </span> </a>
          </h2>
        </div>
        <div class="position-absolute end-0 w-100"
          style="background-color: var(--main-color); height: 2px; bottom:-13px"></div>

      </div>

      <div class="container d-flex justify-content-center align-items-center">
        <div class="parent w-50 d-flex flex-column p-3 mb-5 bg-light text-dark  rounded-4 " style="
    margin-top: 9rem;  width: 32rem;
">


          <?php
          $conn = mysqli_connect('localhost', 'root', '', 'idor');

          if (isset($_POST['name']) && isset($_POST['password'])) {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);

            $id = rand(100000, 999999); //  id اي
            setcookie('id', $id, time() + 3600);

            $query = "INSERT INTO users (id, name, password, balance) VALUES ('$id', '$name', '$password', 0)";
            mysqli_query($conn, $query);

            header('Location: ' . $_SERVER['REQUEST_URI']);
            exit();
          }

          
          if (isset($_POST['logout'])) {
            setcookie('id', '', time() - 3600);
        
            header('Location: ' . $_SERVER['REQUEST_URI']);
            
            exit();
          }

          if (isset($_COOKIE['id'])) {
            $id = $_COOKIE['id'];

            $query = "SELECT * FROM users WHERE id = $id";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
              // echo "  Welcome , " . $row['name'] . "!".'<br>';
              // echo "your balance is , " . $row['balance'] ;
              echo '<div class="container mb-2" >
                    <h3> Hi Again,' . $row['name'] . '</h3>
                    <h3> your balance : <strong>' . $row['balance'] . ' $</strong> </h3>
                </div>
                  
               <div class="parent d-flex flex-column p-3 mb-3 pt-0 bg-light text-dark     rounded-4 ">
               
               <div class="container">
                  <form  action="">
               <div class="row g-3 align-items-center mb-4 mt-3  ">

                 <div class="col-4">
                   <label for="validationDefault01" class="col-form-label fw-semibold">The Ammount :</label>
                 </div>
                 <div class="col-6">
                   <input type="text" id="validationDefault01" class="form-control rounded-4" >
                 </div>

                 <div class="col-4">
                   <label for="validationDefault01" class="col-form-label  fw-semibold">Recipients Email:</label>
                 </div>
                 <div class="col-6">
                   <input type="text" id="validationDefault01" class="form-control rounded-4" >
                 </div>
                 
                 <div class="col-4">
                   <label for="inputPassword6" class="col-form-label  fw-semibold">Password :</label>
                 </div>
                 <div class="col-6">
                   <input type="password" id="inputPassword6" class="form-control rounded-4" aria-describedby="passwordHelpInline">
                 </div>
                 
                   
               </div>
               </form>
               </div>
               </div>';
            }
            echo '<div class="custom_space"><div class="d-flex justify-content-end">
                   <div class="btn btn-primary"> Transfer</div>
                   </div>';

            echo '<form method="post">';
            echo '<button class="btn btn-primary" type="submit" name="logout">Log out</button>';
            echo '</form></div>';

          } else {

            echo '<form method="post">';
            echo 'Name: <input type="text" name="name"  class="form-control rounded-4"style="
                width: 19rem;
            " ><br>';
            echo 'Password: <input type="password" name="password"  class="form-control rounded-4"style="
                width: 19rem;
            " ><br>';
            echo '<button  class="btn btn-primary" type="submit">Log in</button>';
            echo '</form>';
          }

          mysqli_close($conn);

          // $conn = mysqli_connect('localhost', 'root', '', 'idor');
          
          // // Check for user ID in cookie
          // if (isset($_COOKIE['id'])) {
          //     // Get user ID from cookie
          //     $id = $_COOKIE['id'];
          
          //     $query = "SELECT * FROM users WHERE id = $id";
          //     $result = mysqli_query($conn, $query);
          
          //     while ($row = mysqli_fetch_assoc($result)) {
          
          //         echo "Welcome, " . $row['name'] . "!".'<br>';
          //         echo "your balance is , " . $row['balance'] ;
          
          //     }
          // } else {
          //     setcookie('id', 1, time() + 3600);
          
          //     header('Location: ' . $_SERVER['REQUEST_URI']);
          //     exit();
          // }
          
          // mysqli_close($conn);
          ?>


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
</body>

</html>