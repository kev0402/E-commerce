let signupPasswordField = document.getElementById("signupPasswordField");
let signupShowPassField = document.getElementById('signupConfirmPassField');
let signupShowPass = document.getElementById("signupPasswordVisibility");
let signupConfirmShowPass = document.getElementById('signupConfirmPassVisibility');
let loginPassField = document.getElementById('loginPasswordField');
let loginShowPass = document.getElementById('loginPasswordVisibility');


loginShowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = loginPassField.getAttribute("type") === "password" ? "text" : "password";
    loginPassField.setAttribute("type", type);
})

signupShowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = signupPasswordField.getAttribute("type") === "password" ? "text" : "password";
    signupPasswordField.setAttribute("type", type);
})

signupConfirmShowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = signupShowPassField.getAttribute("type") === "password" ? "text" : "password";
    signupShowPassField.setAttribute("type", type);
})

