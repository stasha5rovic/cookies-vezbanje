<?php

    $adminEmail = "admin@gmail.com";
    $adminPass = "admin";

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == $adminEmail && $password == $adminPass) {
            if(isset($_POST['remember'])) {
                setcookie('email', $email, time()+60*60*10);
                setcookie('password', $password, time()+60*60);
            }
        session_start();
        $_SESSION['email'] = $email;
        header("Location: home.php");
        }
        else{
            echo "Email ili sifra nisu dobro uneti. <br>
            Kliknite <a href='login.php'> ovde </a> da pokusate ponovo.";
        }

    } 
    else {
        //Ako se neko nije logovao, nego usao direktno:
        header("Location: login.php");
    }

?>