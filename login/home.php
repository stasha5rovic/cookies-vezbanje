<?php
    session_start();
    echo "Dobro dosli, ". $_SESSION['email'];
    echo "<a href='logout.php'> Log out. </a>";

    if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
            $emailCookie = $_COOKIE['email'];
            $passwordCookie = $_COOKIE['password'];

            echo "<script> 
                alert('$emailCookie');
            
            </script>";
    }

?>