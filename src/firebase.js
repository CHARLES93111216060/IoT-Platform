  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-analytics.js";
  import { getAuth } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js" //autenticación de usuarios
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyB3p-WZibY7m9De4K3ASBNxk592maHlh7c",
    authDomain: "multilink-ff0bb.firebaseapp.com",
    projectId: "multilink-ff0bb",
    storageBucket: "multilink-ff0bb.firebasestorage.app",
    messagingSenderId: "399085525029",
    appId: "1:399085525029:web:cfaf51e70b9e4be56947cc",
    measurementId: "G-GSF03HLWHQ"
  };

  // Initialize Firebase
 export const app = initializeApp(firebaseConfig);
 export const analytics = getAnalytics(app);
 export const auth = getAuth(app);

