<?php 
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style/signupstyle.css">
</head>
<body>
    <header>
        <nav>
            <h1>Sign up to Meeting</h1>
            <ul>
                <li class="navOption">Home</li>
                <li class="navOption">Log in</li>
                <li class="navOption">Sign up</li>
            </ul>
        </nav>
        <div class="main">
            <form action="signup.php" method="post">
                <p class="paragraph1">Zarejestruj się</p>
                <p class="paragraph2">Nick:</p>
                <input type="text" name="nick" class="signupInput">
                <p class="paragraph2">Imie:</p>
                <input type="text" name="imie" class="signupInput">
                <p class="paragraph2">Nazwisko:</p>
                <input type="text" name="nazwisko" class="signupInput">
                <p class="paragraph2">E-mail:</p>
                <input type="text" name="email" class="signupInput">
                <p class="paragraph2">Password:</p>
                <input type="text" name="password" class="signupInput">
                
                <input type="submit" name="submit" class="submit" value="zarejestruj się">
            </form>
        </div>
    </header>
</body>
</html>