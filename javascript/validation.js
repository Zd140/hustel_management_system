const from = document.getElementById('form');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

from.addEventListener('submit', e =>{
    e.preventDefault();//this function prevent form from submiting

    validateInputs();//validate forms
});

const setError = (element, message) =>{
    const Control = element.parentElement;
    const errorDisplay = Control.querySelector('.errror');

    errorDisplay.innertext = message;
    Control.classlist.add('error')
    Control.classlist.remeve('success')
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password.2value.trim();
};