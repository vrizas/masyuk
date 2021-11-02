const btnLogin = document.querySelector('header nav .btn-login');
const loginFormContainer = document.querySelector('.login-form-container');
const loginFormWrapper = document.querySelector('.login-form-wrapper');
const btnCloseLoginForm = document.querySelector('.login-form-container .btn-close');

btnLogin.addEventListener('click', () => {
    loginFormContainer.classList.toggle('hidden');
});

btnCloseLoginForm.addEventListener('click', event => {
    loginFormContainer.classList.add('hidden');
    event.stopPropagation();
});

loginFormContainer.addEventListener('click', () => {
    loginFormContainer.classList.add('hidden');
});

loginFormWrapper.addEventListener('click', event => {
    loginFormContainer.classList.remove('hidden');
    event.stopPropagation();
});

const btnSignup = document.querySelector('header nav .btn-signup');
const signupFormContainer = document.querySelector('.signup-form-container');
const signupFormWrapper = document.querySelector('.signup-form-wrapper');
const btnCloseSignupForm = document.querySelector('.signup-form-container .btn-close');

btnSignup.addEventListener('click', () => {
    signupFormContainer.classList.toggle('hidden');
});

btnCloseSignupForm.addEventListener('click', event => {
    signupFormContainer.classList.add('hidden');
    event.stopPropagation();
});

signupFormContainer.addEventListener('click', () => {
    signupFormContainer.classList.add('hidden');
});

signupFormWrapper.addEventListener('click', event => {
    signupFormContainer.classList.remove('hidden');
    event.stopPropagation();
});

document.querySelector('.login-form-container .btn-signup').addEventListener('click', event => {
    loginFormContainer.classList.add('hidden');
    signupFormContainer.classList.toggle('hidden');
    event.stopPropagation();
    event.preventDefault();
});



