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