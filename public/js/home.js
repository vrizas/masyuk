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


const carouselItems = document.querySelectorAll('.carousel .item');
const carouselButtons = document.querySelectorAll('.btn-carousel');

let selector = 0;

for(let i = 0; i < carouselItems.length; i++) {
    if(i != 0) 
    carouselItems[i].classList.add('hidden');
}

carouselButtons.forEach(button => {
    button.addEventListener('click', event => {
        if(button.classList.contains('next')) {
                selector++;
            if(selector > carouselItems.length - 1) {
                selector = 0;
                carouselItems[carouselItems.length - 1].classList.add('hidden');
                carouselItems[selector].classList.remove('hidden');
            } else {
                carouselItems[selector - 1].classList.add('hidden');
                carouselItems[selector].classList.remove('hidden');
                
            }
        } else {
            selector--;
            if(selector < 0) {
                selector = carouselItems.length - 1;
                carouselItems[0].classList.add('hidden');
                carouselItems[selector].classList.remove('hidden');
            } else {
                carouselItems[selector + 1].classList.add('hidden');
                carouselItems[selector].classList.remove('hidden');
            }
        }
    });
});



