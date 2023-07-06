// create loader 
function loader(){
    let loading=document.createElement("div");
    loading.className="loading";
    let loader= document.createElement("div");
    loader.id="loader";
    loader.innerHTML=`<div class="shadow"></div>
    <div class="box"></div>
    <div id="secure">
        <span>S</span>
        <span>E</span>
        <span>C</span>
        <span>U</span>
        <span>R</span>
        <span>E</span>
		</div>`
    loading.appendChild(loader);
    document.body.prepend(loading);
};
loader();

// show loader
function showLoader(){
    document.onreadystatechange = function() {
        let setInt=window.setInterval(()=>{
            if (document.readyState == "complete") {
                document.querySelector(".loading").style.display="none";
            }
        },800)
    }
}
showLoader();