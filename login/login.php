<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            text-align: center;
            background-color: beige;
        }
    </style>
</head>
<body>
    <h3>FIRST REAL LOGIN PAGE</h3>
    <form action="loginValidation.php" method="POST">
        <label for="email">Email:</label>
        <div>
        <input type="text" id="email" name="email" placeholder="Unesite svoj email: ">
        </div>
        <label for="password">Sifra:</label>
        <div>
        <input type="password" name="password" id="password" placeholder="Unesite sifru:">
        </div>
        <br>
        <input type="checkbox" name="remember" id="remember">Zapamti me
        <br><br>
        <input type="submit" value="Login" name="submit">
    </form>
    
</body>
</html>