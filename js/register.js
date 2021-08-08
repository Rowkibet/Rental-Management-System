//Target the input elements
var form = document.querySelector(".auth-form form");
var firstname = document.getElementById("firstname");
var lastname = document.getElementById("lastname");
var dateOfBirth = document.getElementById("dob");
var email = document.getElementById("email");
var phoneNumber = document.getElementById("phone-number");
var occupation = document.getElementById("occupation")
var password = document.getElementById("password");
var confirmPassword = document.getElementById("confirm-password");

form.addEventListener('submit', e => {
    e.preventDefault();
    validateData();
});

function validateData() {
    //Store input data
    const firstnameData = firstname.value.trim();
    const lastnameData = lastname.value.trim();
    const dateOfBirthData = dateOfBirth.value;
    const emailData = email.value.trim();
    // const phoneNumberData = phoneNumber.value.trim();
    const occupationData = occupation.value.trim();
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

    //dateOfBirth
    if(dateOfBirthData === '') {
        setErrorFor(dateOfBirth, "Date of Birth cannot be empty")
    } else {
        setSuccessFor(dateOfBirth);
    }

    //email
    if(emailData === '') {
        setErrorFor(email, "email cannot be empty");
    } else if(!isEmailValid(emailData)) {
        setErrorFor(email, "email not valid");
    } else {
        setSuccessFor(email)
    }

    // //phone number
    // if(phoneNumberData === '') {
    //     setErrorFor(phoneNumber, "phone number cannot be empty");
    // // } else if(!isPhoneNumberValid(phoneNumberData)) {
    // //     setErrorFor(phoneNumber, "phone number is invalid")
    // } else {
    //     setSuccessFor(phoneNumber);
    // }

    //occupation
    if(occupationData === '') {
        setErrorFor(occupation, "occupation cannot be empty");
    } else {
        setSuccessFor(occupation);
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

// function isPhoneNumberValid(phoneNumber) {
//     const regex = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
//     return regex.test(phoneNumber);
// }