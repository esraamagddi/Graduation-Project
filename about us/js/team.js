// create team section
function team(){
    fetch("../json/teams.json")
    .then(res=>res.json())
    .then(data=>{
        for(let i=0;i<Object.keys(data).length;i++){
            document.querySelector(".teams .container").innerHTML+=`
            <div class="team overflow-hidden pb-5">
                <h4 class="mx-auto fw-bold mb-5 position-relative text-white text-center">${Object.keys(data)[i]}</h4>
                <div class="row justify-content-center"></div>
            </div>`;
            for(let x=0;x<data[Object.keys(data)[i]].length;x++){
                document.querySelectorAll(".teams .team .row")[i].innerHTML+=`
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="card w-100 mb-4 mx-auto" style="width: 18rem;">
                            <img class="m-3 mb-0 rounded-1" src=${data[Object.keys(data)[i]][x]["img"]} class="card-img-top" alt="">
                            <div class="card-body text-white">
                                <h5 class="card-title fw-bold">${data[Object.keys(data)[i]][x]["name"]}</h5>
                                <p class="card-text fw-semibold text-white-50 mb-4">${data[Object.keys(data)[i]][x]["job-title"]}</p>
                                <div class="icons">
                                <a href=${"mailto:"+data[Object.keys(data)[i]][x]["mail"]} target="_blank"><i class="fa-solid fa-envelope rounded-circle p-2 text-black"></i></a>
                                <a href=${data[Object.keys(data)[i]][x]["git"]} target="_blank"><i class="fa-solid fa-code-branch rounded-circle p-2 text-black mx-3"></i></a>
                                <a href=${data[Object.keys(data)[i]][x]["linkedin"]} target="_blank"><i class="fa-brands fa-linkedin-in rounded-circle p-2 text-black"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>`
            }
        };
    });
};
team();