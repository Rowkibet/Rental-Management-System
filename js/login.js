//Target the input elements
var form = document.querySelector(".auth-form form");
var email = document.getElementById("email");
var password = document.getElementById("password");

form.addEventListener('submit', e => {
    e.preventDefault();
    validateData();
});

function validateData() {
    //Store input data
    const emailData = email.value.trim();
    const passwordData = password.value.trim();

    //username
    if(emailData === '') {
        setErrorFor(email, "email cannot be empty");
    } else if(!isEmailValid(emailData)) {
        setErrorFor(email, "email not valid");
    } else {
        setSuccessFor(email)
    }

    //password
    if(passwordData === '') {
        setErrorFor(password, "password cannot be empty");
    } else {
        setSuccessFor(password);
    }
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");

    formControl.className = "form-control error";
    small.textContent = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

function isEmailValid(email) {
    const regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(email);
}