<?php
    session_start();
    session_destroy();

    

    if(isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
        $emailCookie = isset($_COOKIE['email']);
        $passwordCookie = isset($_COOKIE['password']);

        setcookie('email', $emailCookie, time()-1);
        setcookie('password', $passwordCookie, time()-1);
        
    }


    echo "Uspesno ste se odjavili!
           Kliknite <a href='login.php'> ovde </a> da biste se opet logovali.";


?>