// create forget password section
function forgetPassSection() {
  let forgetPassText = `
    <div class="layout w-100 h-100 top-0 position-fixed"></div>
    <div class="card w-50 mx-auto position-fixed top-50 start-50 translate-middle border-0">
        <div class="card-body position-relative">
            <div class="card-layout w-100 h-100 top-0 start-0 position-absolute"></div>
            <div class="exit position-absolute fs-3 fw-bold text-white" role="button">X</div>
            <h5 class="card-title text-capitalize text-center fw-bold mt-5">Forgot Password?</h5>
            
            <p class="form-text text-center text-white-50 mb-3">
                We will send you an email to reset your password
            </p>
            <form id="forget_form" action="">
                <input class="w-100 p-2 border-top-0 border-end-0 my-3" type="email" name="email" id="mail-forget" placeholder="Enter Your E-mail Or User name" required>
                <button class="forget-btn btn text-white w-100 py-2 fs-5 mt-3 mb-4 fw-semibold" type="submit">Send Password</button>
            </form>
            <div id="forget_messages"></div>
            <button class="back-log btn border-0 text-white-50 text-capitalize mb-3 ms-auto d-block"><i class="fa-solid fa-hand-point-left"></i> back to login</button>
        </div>
    </div>`;
  let forgetPassElement = document.createElement("div");
  forgetPassElement.classList = "forgetPass position-relative d-none";
  forgetPassElement.innerHTML = forgetPassText;
  document.querySelector("header").appendChild(forgetPassElement);
}
forgetPassSection();

$("#forget_form").submit(function (event) {
  event.preventDefault();
  email = $("#mail-forget").val();
  $.ajax({
    method: "post",
    url: "http://localhost/graduation-project/component/forget_password_api.php",
    data: {
      action: "recover_email",
      email: email,
    },
    success: function (res) {
      $(".sign_error").remove();
      if (res.status == true) {
        $("#forget_messages").append(
          `<span class="sign_success text-success">${res.msg}</span>`
        );
      } else {
        for (let index = 0; index < res.msgs.length; index++) {
          msg = res.msgs[index];

          $("#forget_messages").append(
            `<span class="sign_error text-danger">${msg}</span>`
          );
        }
      }
    },
  });
});

// forget password popup
function forgetPass() {
  document.querySelector(".forget").addEventListener("click", () => {
    document.querySelector(".signIn").classList.add("d-none");
    document.querySelector(".forgetPass").classList.remove("d-none");
  });
  document
    .querySelector(".forgetPass .layout")
    .addEventListener("click", () => {
      document.querySelector(".forgetPass").classList.add("d-none");
    });
  document
    .querySelector(".forgetPass .card .exit")
    .addEventListener("click", () => {
      document.querySelector(".forgetPass").classList.add("d-none");
    });
  document.querySelector(".back-log").addEventListener("click", () => {
    document.querySelector(".forgetPass").classList.add("d-none");
    document.querySelector(".signIn").classList.remove("d-none");
  });
}
forgetPass();
