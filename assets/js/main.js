        const modalSigninContainer = document.querySelector('.js-modal-signin-container');
        const modalSignin = document.querySelector('.js-modal-signin');
        const SignIn = document.querySelector('.js-signin');
        const modalClose = document.querySelector('.js-modal-close');
        const modalLoginContainer = document.querySelector('.js-modal-login-container');
        const modalLogin = document.querySelector('.js-modal-login');
        const Login = document.querySelector('.js-login');

        function showModalSignin(){
            modalSignin.classList.add('open')
        }
        function hireModalSignin(){
            modalSignin.classList.remove('open')
        }
        function showModalLogin(){
            modalLogin.classList.add('open')
        }
        function hireModalLogin(){
            modalLogin.classList.remove('open')
        }

        // Login
        Login.addEventListener('click', showModalLogin)
        modalClose.addEventListener('click',hireModalLogin)

        modalLogin.addEventListener('click',hireModalLogin)
        
        modalLoginContainer.addEventListener('click',function(even){
            even.stopPropagation()
        })

        // Signin

        SignIn.addEventListener('click', showModalSignin)
        modalClose.addEventListener('click',hireModalSignin)

        modalSignin.addEventListener('click',hireModalSignin)
        
        modalSigninContainer.addEventListener('click',function(even){
            even.stopPropagation()
        })

  

