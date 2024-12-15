import {onAuthStateChanged, signOut } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js";
import { auth } from "./firebase.js";
import { mensaje } from "./message.js";

export function exit(){
  onAuthStateChanged(auth, (user) => {
    if(user) {
      const logout = document.getElementById('salir')
      logout.addEventListener('click', (e)=>{
          e.preventDefault();
  
          signOut(auth).then(()=>{
              mensaje("You've logged out...");
              if(window.location.pathname !== '/index.php'){
                window.location.href = '/index.php';
              };
          });
      });
    } else{
      mensaje('Do not forget login...', 'success');
    };
  });
};
