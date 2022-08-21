const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e =>{
    e.preventDefault();//this function prevent form from submiting

    validateInputs();//validate forms
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay =inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = "";
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

/*const isValidEmail = () =>{
    const re =/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(string(email).toLowerCase());
}*/
const validateInputs = () => {
    const usernameValue = username.value.trim();
    //const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === ''){
        setError(username, "userename is required");
    }else{
        setSuccess();
    }

/*    if(emailValue === ''){
        setError(email, 'Email is required');
    } else if(!isValidEmail(emailValue)){
        setError(email, "provide valid email");
    }else{
        setSuccess(email);
    }
*/
    if(passwordValue === ''){
        setError(password, 'Password is required');
    }else if (passwordValue.length < 8 ){
        setError(password, 'Password must be atleast of 8 characters. ');
    }else{
        setSuccess();
    }

    if(password2Value === '') {
        setError(password2, 'Please comfirm password');   
    }else if (password2Value !== passwordValue){
        setError(password2, "Passwords doesn't match");
    }
    else{
        setSuccess();
    }
};