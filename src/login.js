    import { signInWithEmailAndPassword, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js" //autenticación de usuarios
    import {auth} from './firebase.js';
    import {mensaje} from './message.js';
    import {state} from './state_auth.js';
    import {exit} from './logout.js';

    state();
    exit();

    const login = document.querySelector('#formaSingin');
    login.addEventListener('submit', async (e)=>{
        e.preventDefault();

        const correo = login['correo'].value;
        const clave = login['contrasena'].value;

        // cerrando modal
        const modal = document.querySelector('#modalSingIn')
        const moda = bootstrap.Modal.getInstance(modal);
        moda.hide();

        try {
            const entrar = await signInWithEmailAndPassword(auth, correo, clave);
            mensaje('Welcome ' + entrar.user.email, "success");
            if(window.location.pathname !== '/usuarios.php'){
                window.location.href = '/usuarios.php';
            }

        } catch (error) {
            if(error.code === 'auth/invalid-credential'){
                mensaje('Email or password wrong...Try again');
            }else{
                mensaje('Email or password wrong...Try again');
            }
        }
    });