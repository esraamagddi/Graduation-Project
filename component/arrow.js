// create arrow
function arrow(){
    let arrow=document.createElement("div");
    arrow.className="up fs-1 position-fixed";
    arrow.innerHTML+=`<i class="fa-solid fa-circle-arrow-up"></i>`;
    arrow.setAttribute("role", "button");  
    document.querySelector(".loading").parentNode.insertBefore(arrow, document.querySelector(".loading").nextSibling);
}
arrow();

// scroll to the top page
function scroll(){
    let up= document.getElementsByClassName("up")[0];
    window.onscroll=()=>{
        if(scrollY>850){
            up.style.cssText="bottom: 20px;right: 10px;";
        }
        else{
            up.style.cssText="bottom: -50px;right: 10px;";
        };
    }
    up.addEventListener("click",()=>{
        window.scrollTo({
            top:0,
            behavior:"smooth"
        });
    });
};
scroll();