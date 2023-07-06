// show solution in questions
function solution(){
    document.querySelectorAll(".questions .arrow").forEach(arrow=>{
        if(`#${arrow.parentElement.id}`==window.location.hash){
            console.log(`#${arrow.parentElement.id}`==window.location.hash)
            arrow.parentElement.querySelector(".solution").classList.remove("d-none");
            let inv=setInterval(()=>{
                arrow.parentElement.querySelector(".solution").style.opacity=1;
                arrow.parentElement.querySelector(".solution").style.bottom=0;
                arrow.querySelector("div").style.transform="rotateX(180deg)";
                clearInterval(inv);
            },1200);
        }
        arrow.onclick=()=>{
            arrow.parentElement.querySelector(".solution").classList.toggle("d-none");
            if(!(arrow.parentElement.querySelector(".solution").classList.contains("d-none"))){
                let inv=setInterval(()=>{
                    arrow.parentElement.querySelector(".solution").style.opacity=1;
                    arrow.parentElement.querySelector(".solution").style.bottom=0;
                    arrow.querySelector("div").style.transform="rotateX(180deg)";
                    clearInterval(inv);
                },100);
            }else{
                arrow.parentElement.querySelector(".solution.d-none").style.opacity=0;
                arrow.parentElement.querySelector(".solution.d-none").style.bottom="-177px";
                arrow.querySelector("div").style.transform="rotateX(0deg)";
            }
        };
        
    });
};
solution();