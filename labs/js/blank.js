var form= document.getElementById("upload-form");
form.addEventListener("submit",function(e){
    e.preventDefault();
    var file= document.getElementById("upload-inp").files[0].name;
    var path= document.getElementById("upload-inp").value;
    fetch("http://localhost/graduation-project/labs/backend/uploadfile.php", {
     
    // Adding method type
    method: "POST",
     
    // Adding body or contents to send
    body: JSON.stringify({
        path:path,
        file: file
    }),
     
    // Adding headers to the request
    headers: {
        "Access-Control-Allow-Origin": "*",
        "Content-type": "application/json; charset=UTF-8"
    }
})


 
// Converting to JSON
.then(response => response.json())
 
// Displaying results to console

.then(json => console.log(json));

})