// check if user signed in
function checkLabs() {
  let signed = sign_in_status;
  if (signed) {
    document.querySelector(".access").classList.add("d-none");
    document.querySelector(".feature").classList.remove("d-none");
  } else {
    document.querySelector(".access").classList.remove("d-none");
    document.querySelector(".feature").classList.add("d-none");
  }
}
checkLabs();
