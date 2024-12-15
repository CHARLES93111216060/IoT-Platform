import {mensaje} from './message.js';
import {onAuthStateChanged } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js";
import { auth } from './firebase.js';
import { datos } from './importData.js';

const logout = document.querySelectorAll('.logged-out');
const logg = document.querySelectorAll('.logged-in');

function update(user){
    if (user) {
      mensaje('Athenticated user...', 'success');
      logout.forEach(link => link.style.display = 'none');
      logg.forEach(link => link.style.display = 'block');
      datos(user);

    } else {
      mensaje('Unauthenticated user...try login');
      logout.forEach(link => link.style.display = 'block');
      logg.forEach(link => link.style.display = 'none');
      if(!user && window.location.pathname !=='/index.php' ){
        window.location.href = '/index.php';
      }
      stateInitialized = false;
    }
    // off(auth, authListener);

};

let stateInitialized = false;
export function state(){
  if(!stateInitialized){
    stateInitialized = true;
    onAuthStateChanged(auth, (user) => {
      update(user);
    });
  };
};