// create footer
function createFooter(){
    let footerText=`
    <div class="layout position-absolute top-0 white-color"></div>
    <div class="container pt-5 position-relative">
        <div class="row pt-4">
            <div class="col-md-6">
                <ul class="links black-color">
                    <li class="mb-4"><a class="black-color fw-bold support" href="mailto:rororado44@gmail.com"><span class="fs-5">Support</span> @ secure space .com</a></li>
                    <div class="row text-capitalize">
                        <div class="col-6">
                            <li class="mb-1"><a class="black-color d-block w-100" href="../home/home.php">Home</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../labs/labs.html">Labs</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../contact us/contact.php">Contact</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../faq/faq.html">FAQ</a></li>
                        </div>
                        <div class="col-6">
                            <li class="mb-1"><a class="black-color d-block w-100" href="../about us/about.html">about us</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../about us/mission.html">Mission</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../about us/team.html">team</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../about us/privacy.html">privacy</a></li>
                            <li class="mb-1"><a class="black-color d-block w-100" href="../about us/terms.html">terms</a></li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
                <div class="icons mb-3 mt-4">
                    <a href="#"><i class="fa-brands fa-twitter black-color fs-4 me-3"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in black-color fs-4"></i></a>
                </div>
                <img class="img-fluid mb-3" src="../files/imgs/qr code.svg" role="button" alt="">
                <p class="text-black-50">© 2022 secure space </p>
            </div>
        </div>
    </div>`;
    let footer=document.createElement("footer");
    footer.className="py-5 position-relative overflow-hidden mt-auto"
    footer.innerHTML=footerText;
    document.body.appendChild(footer);
}
createFooter();