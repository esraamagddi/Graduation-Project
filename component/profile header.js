//view profile icon
document.querySelectorAll("header nav .profile").forEach(profile=>{
    profile.addEventListener("click",()=>{
        document.querySelector("header .info").classList.toggle("active");
    });
});

//request login info
function req(){
    let xmlReq=new XMLHttpRequest();
    xmlReq.open("GET","../json/login.json");
    xmlReq.send();
    return xmlReq;
}
//get login info for profile
function getInfo(){
    let xmlReq=req();
    xmlReq.onreadystatechange=function(){
        if(this.status==200 && this.readyState==4){
            document.querySelectorAll("nav .sign").forEach(sign=>{
                sign.classList.add("d-none");
                sign.classList.remove("d-lg-flex")
            });
            let login= JSON.parse(this.responseText);
            document.querySelector("header .info").innerHTML=
                `<img class="rounded-circle position-absolute start-50 translate-middle-x" src="${login.img}" alt="${login.username}">
                <p class="user fw-bold black-color mt-3 mb-4">${login.username}</p>
                <a href="../user profile/user.html" class="btn border-0 main-btn w-100 text-white py-2 d-flex align-items-center justify-content-center gap-2">
                    <i class="fs-5 fa-regular fa-circle-user"></i>
                    <p>View Profile</p>
                </a>
                <a href="../home/home.html" class="btn border-0 main-btn w-100 text-white py-2 mt-3 d-flex align-items-center justify-content-center gap-2">
                    <i class="fs-5 fa-solid fa-arrow-right-from-bracket"></i>
                    <p>Log Out</p>
                </a>`
        }
        else if(this.status==404 && this.readyState==4){
            document.querySelectorAll("header nav .profile").forEach(profile=>{
                profile.classList.add("d-none");
                profile.classList.remove("d-lg-flex");
            });
        }
    }
}
getInfo();