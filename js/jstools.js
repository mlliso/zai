function validateForm() {
    var email = document.forms["register_form"]["email"].value;
    var password1 = document.forms["register_form"]["password"].value;
    var password2 = document.forms["register_form"]["password2"].value;
    var emailError = document.getElementById("email_error");
    var passwordError = document.getElementById("password_error");
    var ret = true;
    if (email.indexOf("@") == -1 || email.indexOf("." == -1)) {
        emailError.innerHTML = "Błędny adres email."
        ret = false;
    } else {
        emailError.innerHTML = "";
    }
    if (password1 === "" && password2 === "") {
        passwordError.innerHTML = "Hasło nie może być puste."
        ret = false;
    } else if (password1 !== password2) {
        passwordError.innerHTML = "Hasła nie zgadzają się."
        ret = false;
    } else {
        passwordError.innerHTML = "";
    }
    emailError.focus();
    passwordError.focus();
    return ret;
}

