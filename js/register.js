//Target the input elements
var form = document.querySelector(".auth-form form");
var firstname = document.getElementById("firstname");
var lastname = document.getElementById("lastname");
var email = document.getElementById("email");
var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirm-password");
var username = document.getElementById("username");

form.addEventListener('submit', e => {
    e.preventDefault();
    validateData();
});

function validateData() {
    //Store input data
    const firstnameData = firstname.value.trim();
    const lastnameData = lastname.value.trim();
    const emailData = email.value.trim();
    const passwordData = password.value.trim();
    const confirmPasswordData = confirmPassword.value.trim();

    //Check if all input fields are filled and the data is valid
    //firstname
    if(firstnameData === '') {
        setErrorFor(firstname, "firstname cannot be empty");
    } else {
        setSuccessFor(firstname);
    }

    //lastname
    if(lastnameData === '') {
        setErrorFor(lastname, "lastname cannot be empty");
    } else {
        setSuccessFor(lastname);
    }

    //email
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
    } else if(passwordData.length < 8) {
        setErrorFor(password, "password must contain a minimum of 8 characters");
    } else {
        setSuccessFor(password);
    }

    //Confirm Password
    if(confirmPasswordData === '') {
        setErrorFor(confirmPassword, "Password cannot be empty");
    } else if(confirmPasswordData !== passwordData) {
        setErrorFor(confirmPassword, "Passwords do not match");
    } else {
        setSuccessFor(confirmPassword);
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