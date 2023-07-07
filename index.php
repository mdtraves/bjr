<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bramley</title>
</head>
<body>
    Bramley


    <script type="module">
    import { initializeApp } from 'https://www.gstatic.com/firebasejs/10.0.0/firebase-app.js'

    // If you enabled Analytics in your project, add the Firebase SDK for Google Analytics
    import { getAnalytics } from 'https://www.gstatic.com/firebasejs/10.0.0/firebase-analytics.js'
    import { getDatabase, set, ref } from "https://www.gstatic.com/firebasejs/10.0.0/firebase-database.js"


       // TODO: Replace the following with your app's Firebase project configuration
       const firebaseConfig = {
            apiKey: "AIzaSyDnOvUmGiN8txOjKQ9DFG0g8V_2xUIOL6c",
            authDomain: "bramleyjr2023.firebaseapp.com",
            databaseURL: "https://bramleyjr2023-default-rtdb.europe-west1.firebasedatabase.app",
            projectId: "bramleyjr2023",
            storageBucket: "bramleyjr2023.appspot.com",
            messagingSenderId: "530663509573",
            appId: "1:530663509573:web:f3b418b649b3e63c835d2c",
            measurementId: "G-M2VZQW35D2"
        };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    function writeUserData(userId, name) {
        const db = getDatabase();
        set(ref(db, 'users/' + userId), {
            username: name,
           
        });
    }

    writeUserData(1,'Mike')


  </script>
</body>
</html>