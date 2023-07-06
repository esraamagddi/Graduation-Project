// create sign up section
function signUpSection() {
  let signUpText = `
    <div class="layout w-100 h-100 top-0 position-fixed"></div>
        <div class="card w-50 mx-auto position-fixed top-50 start-50 translate-middle border-0">
            <div class="card-body position-relative">
                <div class="card-layout w-100 h-100 top-0 start-0 position-absolute"></div>
                <div class="exit position-absolute fs-3 fw-bold text-white" role="button">X</div>
                <h5 class="card-title text-uppercase fw-semibold mt-5">Create your account :</h5>
                <div id="signup_messages"></div>
                <form id="register_form">
                    <input class="w-100 p-2 border-top-0 border-end-0 my-3" type="text" name="username" id="username-signup" placeholder="User Name" required>
                    <input class="w-100 p-2 border-top-0 border-end-0 my-3" type="email" name="email" id="mail-signup" placeholder="E-mail" required>
                    <div class="position-relative">
                        <input class="p-2 pe-5 w-100 border-top-0 border-end-0 mt-3" type="password" name="password" id="pass-signup" placeholder="Password" required maxlength="20" minlength="8">
                        <div class="eye-slash position-absolute top-50 translate-middle-y text-white" role="button"><i class="fa-solid fa-eye-slash"></i></div>
                        <div class="eye d-none position-absolute top-50 translate-middle-y text-white" role="button"><i class="fa-solid fa-eye"></i></div>
                    </div>
                    <div id="passwordHelpBlock" class="form-text mb-3 text-white-50">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                    <div class="position-relative">
                        <input class="p-2 pe-5 w-100 border-top-0 border-end-0 mt-2" type="password" name="confirm_password" id="re-pass" placeholder="Repeat Password" required maxlength="20" minlength="8">
                        <div class="eye-slash position-absolute top-50 translate-middle-y text-white" role="button"><i class="fa-solid fa-eye-slash"></i></div>
                        <div class="eye d-none position-absolute top-50 translate-middle-y text-white" role="button"><i class="fa-solid fa-eye"></i></div>
                    </div>
                    <div class="pass-miss text-danger mb-3 mt-1">
                        * password mismatch
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-2 mb-4">
                        <div class="terms-of-use d-flex justify-content-between align-items-center gap-1">
                            <input type="checkbox" name="confirm_terms" id="accept" value="yes">
                            <label class="text-white" for="accept">I accept the <a href="#">terms of use</a></label>
                        </div>
                        <span role="button" class="have-acc text-white-50">already have an account?</span>
                    </div>
                    <input class="reg btn text-white w-100 py-2 fs-5 mt-3 mb-5 fw-semibold" type="submit" name="submit" value="Register">
                </form>
            </div>
        </div>`;
  let signUpElement = document.createElement("div");
  signUpElement.classList = "signUp position-relative d-none";
  signUpElement.innerHTML = signUpText;
  document.querySelector("header").appendChild(signUpElement);
}
signUpSection();

$("#register_form").submit(function (event) {
  event.preventDefault();
  username = $("#username-signup").val();
  email = $("#mail-signup").val();
  password = $("#pass-signup").val();
  repass = $("#re-pass").val();
  confirm_terms = $("#accept").is(":checked");
  $.ajax({
    method: "post",
    url: "http://localhost/graduation-project/component/register.php",
    data: {
      username: username,
      email: email,
      password: password,
      confirm_password: repass,
      confirm_terms: confirm_terms,
    },
    success: function (res) {
      if (res.status == true) {
        //alert(res.msg);
        // window.location.href ="http://localhost/graduation-project/user profile/user.php";
        window.location.reload();
      } else {
        for (let index = 0; index < res.msgs.length; index++) {
          msg = res.msgs[index];
          $(".sign_error").remove();
          $("#signup_messages").append(`<span class="sign_error">${msg}</span>`);
    
        }
      }
    },
  });
});

// sign up popup
function signUp() {
  document.querySelectorAll(".sign-up-btn").forEach((sign) => {
    sign.addEventListener("click", () => {
      document.querySelector(".signUp").classList.remove("d-none");
    });
  });
  document.querySelector(".signUp .layout").addEventListener("click", () => {
    document.querySelector(".signUp").classList.add("d-none");
  });
  document
    .querySelector(".signUp .card .exit")
    .addEventListener("click", () => {
      document.querySelector(".signUp").classList.add("d-none");
    });
  // already have an account
  document
    .querySelector(".signUp .card .card-body form .have-acc")
    .addEventListener("click", () => {
      document.querySelector(".signUp").classList.add("d-none");
      document.querySelector(".signIn").classList.remove("d-none");
    });
}
signUp();

// show password
function eyeIcon() {
  document.querySelectorAll(".eye-slash").forEach((eye) => {
    eye.addEventListener("click", () => {
      eye.nextElementSibling.classList.remove("d-none");
      eye.classList.add("d-none");
      eye.previousElementSibling.type = "text";
    });
  });
  document.querySelectorAll(".eye").forEach((eye) => {
    eye.addEventListener("click", () => {
      eye.previousElementSibling.classList.remove("d-none");
      eye.classList.add("d-none");
      eye.previousElementSibling.previousElementSibling.type = "password";
    });
  });
}
eyeIcon();

// repeat password
function repeatPassword() {
  let confirmMsg = document.querySelector(
    ".signUp .card .card-body form .pass-miss"
  );
  let confirmPass = document.getElementById("re-pass");
  let pass = document.getElementById("pass-signup");
  confirmPass.onblur = () => {
    if (confirmPass.value != pass.value) {
      confirmMsg.style.opacity = "1";
    } else {
      confirmMsg.style.opacity = "0";
    }
  };
  confirmPass.oninput = () => {
    if (confirmPass.value == pass.value) {
      confirmMsg.style.opacity = "0";
    } else {
      confirmMsg.style.opacity = "1";
    }
  };
  pass.oninput = () => {
    if (confirmPass.value != pass.value && confirmPass.value != "") {
      confirmMsg.style.opacity = "1";
    } else {
      confirmMsg.style.opacity = "0";
    }
  };
  document
    .querySelector(".signUp .card .card-body form")
    .addEventListener("submit", (e) => {
      if (confirmPass.value !== pass.value) {
        e.preventDefault();
        confirmPass.focus();
      }
    });
}
repeatPassword();

// show sign up button after accepted terms of use
function showSignUpButton() {
  document.querySelector(".signUp .card .card-body form #accept").onclick =
    () => {
      if (
        document.querySelector(".signUp .card .card-body form #accept").checked
      ) {
        document.querySelector(
          ".signUp .card .card-body form .reg"
        ).style.opacity = 1;
        document.querySelector(
          ".signUp .card .card-body form .reg"
        ).style.cursor = "pointer";
      } else {
        document.querySelector(
          ".signUp .card .card-body form .reg"
        ).style.opacity = 0.5;
        document.querySelector(
          ".signUp .card .card-body form .reg"
        ).style.cursor = "default";
      }
    };
}
showSignUpButton();
