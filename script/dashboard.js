let passwordField = document.getElementById("password");
let showPass = document.getElementById("passwordVisibility");

showPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
})