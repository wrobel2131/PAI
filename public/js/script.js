const form = document.querySelector("form");
const emailInput = form.querySelector('input[name="email"]');
const confirmedPassword = form.querySelector('input[name="confirm-password"]');



function isEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}

function arePasswordsSame(password, confirmedPassword) {
    return password === confirmedPassword;
}

//jezeli warunek spelniony, to klasa dodana, jezeli warunek nie jest spelniony, to usuwamy klase
function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateEmail() {
    setTimeout(function () {
            markValidation(emailInput, isEmail(emailInput.value));
        },
        1000
    );
}

function validatePassword() {
    setTimeout(function () {
            const condition = arePasswordsSame(
                confirmedPassword.previousElementSibling.value,
                confirmedPassword.value
            );
            markValidation(confirmedPassword, condition);
        },
        1000
    );
}

emailInput.addEventListener('keyup', validateEmail);
confirmedPassword.addEventListener('keyup', validatePassword);