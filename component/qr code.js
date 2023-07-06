// create qr code
function qrCode(){
    let qrText=`
    <div class="layout w-100 h-100 top-0 position-fixed"></div>
    <div class="card w-50 mx-auto position-fixed top-50 start-50 translate-middle border-0">
        <div class="card-body position-relative">
            <div class="card-layout w-100 h-100 top-0 start-0 position-absolute"></div>
            <div class="exit position-absolute fs-3 fw-bold text-white" role="button">X</div>
            <h5 class="card-title text-capitalize text-center fw-bold mt-5 mb-3 fs-3 text-white">Scan QR Code</h5>
            <img class="img-fluid mb-3" src="../files/imgs/qr code.svg" alt="">
        </div>
    </div>`
    let qrElement=document.createElement("div");
    qrElement.classList=("qr position-relative d-none");
    qrElement.innerHTML=qrText;
    document.querySelector("header").appendChild(qrElement);
};
qrCode();

// qr code popup
function qr(){
    document.querySelector("footer img").addEventListener("click",()=>{
        document.querySelector(".qr").classList.remove("d-none");
    });
    document.querySelector(".qr .layout").addEventListener("click",()=>{
        document.querySelector(".qr").classList.add("d-none");
    });
    document.querySelector(".qr .card .exit").addEventListener("click",()=>{
        document.querySelector(".qr").classList.add("d-none");
    })
};
qr();