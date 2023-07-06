// // console.log(document.cookie)
// var form= document.getElementById("xss-form");
// form.addEventListener("submit",function(e){
//     e.preventDefault();
//     var fname= document.forms["xss-name"]["fname"].value.trim();
//     fetch("http://localhost/graduation-project/labs/backend/xss.php", {
     
//     // Adding method type
//     method: "POST",
     
//     // Adding body or contents to send
//     body: JSON.stringify({
//         fname: fname
//     }),
     
//     // Adding headers to the request
//     headers: {
//         "Access-Control-Allow-Origin": "*",
//         "Content-type": "application/json; charset=UTF-8"
//     }
// })


 
// // Converting to JSON
// .then(response => response.json())
 
// // Displaying results to console

// .then(json => {
//     document.cookie = `${Object.keys(json[0])[0]}=${json[0][Object.keys(json[0])[0]]}`;
//     try {
//         eval(json[1]["message"]["fname"])
//     } catch (e) {
//         document.getElementById("result-xss").innerHTML=`${json[1]["message"]["fname"]}`
//     }
// });

// })