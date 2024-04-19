let showPassword = document.getElementById('passVisibility');
let passwordField = document.getElementById('pass');
let confirmshowPass = document.getElementById('confirmpassVisibility');
let showpassField = document.getElementById('confirmPass');

showPassword.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
})

confirmshowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = showpassField.getAttribute("type") === "password" ? "text" : "password";
    showpassField.setAttribute("type", type);
})