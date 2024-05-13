let signupPasswordField = document.getElementById("signupPasswordField");
let signupConfirmPassField = document.getElementById('signupConfirmPassField');
let signupShowPass = document.getElementById("signupPasswordVisibility");
let signupConfirmShowPass = document.getElementById('signupConfirmPassVisibility');
let loginPassField = document.getElementById('loginPasswordField');
let loginShowPass = document.getElementById('loginPasswordVisibility');

signupShowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = signupPasswordField.getAttribute("type") === "password" ? "text" : "password";
    signupPasswordField.setAttribute("type", type);
})

signupConfirmShowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = signupConfirmPassField.getAttribute("type") === "password" ? "text" : "password";
    signupConfirmPassField.setAttribute("type", type);
})

loginShowPass.addEventListener("click", function(){
    this.classList.toggle("fa-eye");
    let type = loginPassField.getAttribute("type") === "password" ? "text" : "password";
    loginPassField.setAttribute("type", type);
})


