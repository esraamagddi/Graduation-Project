<?php
require_once '../component/conn-db.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('../component/login.php');
    exit();
}
$errors_info = [];
$errors_pass = [];
$errors_photo = [];
$errors_del = [];

$id = $_SESSION["user"]['id'];

$stm = "SELECT * FROM users WHERE id=$id";
$q = $conn->prepare($stm);
$q->execute();
$data = $q->fetch();


if (isset($_POST['updateinf'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $is_username_changed = $_POST['is_username_changed'];
    $is_email_changed = $_POST['is_email_changed'];


    if ($is_username_changed == "true") {
        $selectuser = "SELECT username FROM users WHERE username ='$username'";
        $q = $conn->prepare($selectuser);
        $q->execute();
        $datauser = $q->fetch();
        if ($datauser) {
            $errors_info[] = "Username already exists";
        }
    }

    if ($is_email_changed == "true") {
        $stm = "SELECT email FROM users WHERE email ='$email'";
        $q = $conn->prepare($stm);
        $q->execute();
        $dataemail = $q->fetch();
        if ($dataemail) {
            $errors_info[] = "Email already exists";
        }
    }

    if (isset($errors_info) && count($errors_info) == 0) {

        $update = "update users set username='$username',email='$email' where id=$id";
        // $sql2 = mysqli_query($conn, $update);
        $q = $conn->prepare($update);
        $q->execute();
        if ($q) {
            /*Successful*/
            $_SESSION['user']['username'] = $username;
            $_SESSION['user']['email'] = $email;
            $errors_info[] = "Updated Successufully";
        } else {
            /*sorry your profile is not update*/
            $errors_info[] = "sorry your profile is not update";
        }
    }



}


if (isset($_POST["save_image"])) {

    $target_dir = "../uploadimg/";
    $target_file = $target_dir . $_FILES["image"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $errors_photo[] = "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    // if (file_exists($target_file)) {
    //     echo "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    // Check file size
    if ($_FILES["image"]["size"] > (10 * 1024 * 1024)) {
        $errors_photo[] = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $errors_photo[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errors_photo[] = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $img_name = htmlspecialchars(basename($_FILES["image"]["name"]));

            $update = "UPDATE users set image='$img_name' where id=$id";

            $q = $conn->prepare($update);
            $q->execute();
            if ($q) {

                $errors_photo[] = "Img Uploaded Successfully";

            } else {
                /*sorry your profile is not update*/

                $errors_photo[] = "sorry your profile is not update";

            }
        } else {
            $errors_photo[] = "Sorry, there was an error uploading your file.";
        }
    }

}

//change password
if (isset($_POST['save_password'])) {

    $currunt_password = $_POST["current_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];


    $stm = "SELECT * FROM users WHERE id=$id";
    $q = $conn->prepare($stm);
    $q->execute();
    $data = $q->fetch();

    if (!$data) {

        // خطا في تسجيل الدخول
        $errors_pass[] = "login error";

    } else {

        if (!password_verify($currunt_password, $data["password"])) {
            // $errors[] = "خطأ فى تسجيل الدخول";
            $errors_pass[] = "currunt password is wrong";

        } else {


            if ($new_password == $confirm_password) {
                $new_password = password_hash($new_password, PASSWORD_DEFAULT);

                $update = "update users set password='$new_password' where id=$id";
                $q = $conn->prepare($update);
                $q->execute();
                if ($q) {

                    $errors_pass[] = "Password Updated Successfully";

                } else {
                    /*sorry your profile is not update*/

                    $errors_pass[] = "sorry your password is not update";

                }
            } else {
                $errors_pass[] = "Passwords Doesnot match";
            }


        }
    }


}

$stm = "SELECT * FROM users WHERE id=$id";
$q = $conn->prepare($stm);
$q->execute();
$data = $q->fetch();
if (isset($data["image"]) && $data["image"] !== "") {
    $user_img = "../uploadimg/" . $data["image"];
} else {
    $user_img = "../files/imgs/profile.png";
}


//Delete Password



if (isset($_POST['confirm_delete'])) {

    $password_hash = $data['password'];
    $confirm_pass_delete = $_POST['confirm_pass_delete'];


    if (empty($confirm_pass_delete)) {
        $errors_del[] = "Please type in the password";

    } else {

        if (!password_verify($confirm_pass_delete, $password_hash)) {

            $errors_del[] = "The password is wrong";


        } else {

            $stm = "DELETE FROM `users` WHERE id=$id";
            $q = $conn->prepare($stm);
            $q->execute();
            $data = $q->fetch();

            session_unset();
            header('location:../home/home.php');


        }
    }


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
    <!-- bootstrap stylesheet -->
    <link rel="stylesheet" href="../files/css/bootstrap.min.css">
    <link rel="stylesheet" href="../files/css/bootstrap.min.css.map">
    <!-- component css page -->
    <link rel="stylesheet" href="../component/comp.css">
    <!-- main css page -->
    <link rel="stylesheet" href="css/user.css">
    <!-- page title -->
    <title>User Profile</title>
</head>

<body>
    <!-- loader -->
    <script src="../component/loader.js"></script>

    <!-- start user profile -->
    <div class="userProfile d-flex  my-5  flex-column align-items-center justify-content-center">
        <div class="container ">
            <h2 class="profile text-white fs-4 my-4">
                User Profile
            </h2>
            <h3 class="content text-white fs-6 mb-5">
                Hello
                <?php echo $_SESSION['user']['username']; ?> <br> This is your profile page. you can manage your profile
                and update your data.
            </h3>

            <div class="grid  d-flex ">

                <div class="card w-50 d-flex border-0">
                    <div class="card-body w-100 py-5 my-5  g-col-6 g-col-md-4 position-relative">

                        <h3 class="profileInf fw-semibold fs-5 text-black "> Profile Information</h3>
                        <p class="text  mb-5 fw-semibold "> Update your account's profile information and email address
                        </p>
                        <form action="user.php" method="post" enctype="multipart/form-data">
                            <h3 class="userName fw-semibold fs-5 text-black text-capitalize ">username </h3>
                            <input value="<?php echo $_SESSION['user']['username']; ?>"
                                class=" input w-100 p-2 border-start-0 border-top-0 border-end-0 my-3" type="text"
                                name="username" placeholder="username" id="username_input">
                            <input type="text" name="is_username_changed" id="is_username_changed" value="false" hidden>
                            <input type="text" name="is_email_changed" id="is_email_changed" value="false" hidden>
                            <h3 class="userName fw-semibold fs-5 text-black text-capitalize ">Email </h3>
                            <input value="<?php echo $_SESSION['user']['email']; ?>"
                                class=" input w-100 p-2 border-start-0 border-top-0 border-end-0 my-3" type="email"
                                name="email" placeholder="Email" id="useremail_input">
                            <?php
                            if (isset($errors_info)) {
                                ?>
                                <div class="custom_errors">
                                    <?php
                                    foreach ($errors_info as $error_info) {
                                        echo '<h3 class="error">' . $error_info . '</h3>';
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="button d-flex justify-content-center align-items-center">
                                <input class="btn btn-primary" type="submit" name="updateinf" value="save">
                            </div>
                            <div class="hr "></div>
                            <h3 class="updatePass fw-semibold fs-5  ">Update Password</h3>
                            <p class="text  mb-5 fw-semibold"> Ensure your account is using a long random password to
                                stay secure. </p>
                            <h3 class="userName fw-semibold fs-5 text-black text-capitalize ">Current Password</h3>
                            <input type="password"
                                class=" input w-100 p-1 border-start-0 border-top-0 border-end-0 my-3"
                                name="current_password">
                            <h3 class=" userName fw-semibold fs-5 text-black text-capitalize ">New Password</h3>
                            <input class=" input w-100 p-1 border-start-0 border-top-0 border-end-0 my-3"
                                type="password" name="new_password">
                            <h3 class=" userName fw-semibold fs-5 text-black text-capitalize ">Confirm Password</h3>
                            <input class=" input w-100 p-1 border-start-0 border-top-0 border-end-0 my-3"
                                type="password" name="confirm_password">

                            <?php
                            if (isset($errors_pass)) {
                                ?>
                                <div class="custom_errors">
                                    <?php
                                    foreach ($errors_pass as $error_pass) {
                                        echo '<h3 class="error">' . $error_pass . '</h3>';
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                            <div class=" button d-flex justify-content-center align-items-center">
                                <!-- <button type="button">Update</button> -->
                                <input class="btn btn-primary" type="submit" name="save_password" value="save">

                            </div>
                        </form>
                    </div>
                </div>
                <div class="grid2 w-50 d-flex flex-column pe-3">
                    <div class="card h-100 w-100 my-5 mx-5 bg-none  border-0">
                        <div class="card-body w-100 position-relative my-5 mx-5">
                            <img class="img d-flex align-items-center justify-content-center w-50 rounded-circle"
                                src="<?php echo $user_img; ?>" alt="">
                            <h3
                                class="profileInf fw-semibold fs-5 text-black d-flex  justify-content-center align-items-center top-50 ">
                                <?php echo $_SESSION['user']['username']; ?></h3>
                            <label class=" d-flex justify-content-center align-items-center top-50">
                                <button type="file" class="btn btn-primary uphoto" id="select_photo">Upload
                                    photo</button>
                            </label>
                            <?php
                            if (isset($errors_photo)) {
                                ?>
                                <div class="custom_errors">
                                    <?php
                                    foreach ($errors_photo as $error_photo) {
                                        echo '<h3 class="error">' . $error_photo . '</h3>';
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="card h-75 w-100 my-5 mx-5 bg-none  border-0">
                        <div class="card-body w-100  position-relative my-5 mx-5">
                            <h3 class="profileInf fw-semibold fs-6  d-flex   ">Delete Account</h3>
                            <p class="text text-black mb-5"> Once your account is deleted, all of its resources and data
                                will be permanently deleted. Before deleting your account, please download any data or
                                information that you wish to retain.</p>
                            <!-- Button trigger modal -->

                            <input type="submit" class="btn btn-primary Daccount1" name="delete" value="Delete Account"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <?php
                            if (isset($errors_del)) {
                                ?>
                                <div class="custom_errors">
                                    <?php
                                    foreach ($errors_del as $error_del) {
                                        echo '<h3 class="error">' . $error_del . '</h3>';
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                            ?>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <form action="user.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-dialog   modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class=" text modal-title fs-5 text-capitalize text-black"
                                                    id="exampleModalLabel"> are you sure you want to delete your
                                                    account?
                                                </h3>
                                                <p class="text text-black mb-5"> </p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <span class=" text "> Once your account is deleted, all of its resources
                                                    and
                                                    data will be permanently deleted. Please enter your password to
                                                    confirm
                                                    you
                                                    would like to permanently delete your account.</span>
                                                <input type="password" class="input22 w-100" placeholder="Password "
                                                    name="confirm_pass_delete">
                                            </div>
                                            <?php
                                            if (isset($errors_del)) {
                                                ?>
                                                <div class="custom_errors">
                                                    <?php
                                                    foreach ($errors_del as $error_del) {
                                                        echo '<h3 class="error">' . $error_del . '</h3>';
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <input type="submit" class="btn btn-primary Daccount2"
                                                    name="confirm_delete" value="Delete Account">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- end user profile -->
    <!-- end user profile -->
    <script src="../component/jquery.min.js"></script>
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
    <script src="../contact us/js/contact.js"></script>
    <!-- footer -->
    <script src="../component/footer.js"></script>
    <!-- qr code -->
    <script src="../component/qr code.js"></script>
    <!-- arrow -->
    <script src="../component/arrow.js"></script>
    <form id="upload_img" action="user.php" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" name="image" id="getFile" accept=".jpg, .jpeg, .png"><br><br>
        <input type="submit" id="save_image" name="save_image" value="save">
    </form>
    <script>
        var first_user_name = "<?php echo $_SESSION['user']['username']; ?>";
        var first_user_email = "<?php echo $_SESSION['user']['email']; ?>";
        $("#username_input").on("input", function () {
            var new_username = this.value;
            if (first_user_name == new_username) {
                $("#is_username_changed").attr("value", "false");
            } else {
                $("#is_username_changed").attr("value", "true");
            }
        });
        $("#useremail_input").on("input", function () {
            var new_email = this.value;
            if (first_user_email == new_email) {
                $("#is_email_changed").attr("value", "false");
            } else {
                $("#is_email_changed").attr("value", "true");
            }
        });
        $("#select_photo").click(function () {
            $("#getFile").click();
            $("#getFile").off("change");
            $("#getFile").change(function () {
                filename = this.files[0].name;
                console.log(filename);
                $("#save_image").click();
            });     })

    </script>
</body>

</html>