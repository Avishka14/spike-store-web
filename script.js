function togglePassword() {
    var passwordField = document.getElementById("customPassword");
    var eyeIcon = document.getElementById("eyeIcon");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.textContent = "👁️";
    } else {
        passwordField.type = "password";
        eyeIcon.textContent = "🔒";
    }
}

function switchSignView(){
    var logIn = document.getElementById("logInBox");
    var CreateAc = document.getElementById("createAcBox");

    logIn.classList.toggle("d-none");
    CreateAc.classList.toggle("d-none");
}

function navBarExpand(){
    document.getElementById("navPanelSm").classList.toggle("d-none");
}