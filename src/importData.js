import {getDatabase, ref, onValue} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-database.js";
import { app } from "./firebase.js";

const db = getDatabase(app);

export function datos(user){

    const tempure = ref(db, 'UserData/' + user.uid  + '/Temperatura ');
    

    onValue(tempure, (snapshot)=>{
        const temp = snapshot.val();
        document.querySelector('#temperatura1').innerText = temp + ' °C';
    });

    const humidity = ref(db, 'UserData/' + user.uid + '/Humedad ');
    onValue(humidity, (snapshot)=>{
        const humedad = snapshot.val();
        console.log(humedad);
        document.querySelector('#humedadAmbiente1').innerText = humedad + ' %';
    })


};