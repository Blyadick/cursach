<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus Provide</title>
    <link rel="stylesheet" href="updated_style.css">
    
</head>
<body>
    <div class="toppan">
        <div class="img">
            <img class="imgred" src="logo/logo.png">
            <div class="txtlogo">
                <p>Nexus</p> 
                <p class="righttxt">Provide</p>
            </div>
        
        </div>
        <div class="buttons">
            <button class="button">Above</button>
            <button class="button">Donate</button>
            <button class="button">Contact</button>
        </div>

        <div class="buttlog">
            <button class="login" id="login">Log in</button>
            <button class="login" id="register">Register</button>
        </div>
    </div>
    <form action="templates/login.php" method="post">
    <div class="log" id="loginpan">
        <h1 class="txtlog">&dagger;Login&dagger;</h1>
        <div class="logpass">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
        </div>
        <p style="margin-left: 5px;">Forgot the password? <a href="" class="forpass">Click</a></p>
        <div class="logbutt">
            <input type="submit" value="Log In" class="loginbutt">
        </div>
    </form>
    </div>
    <form action="templates/register.php" method="post">
    <div class="regpan" id="regipan">
        <h1 class="txtlog">&dagger;Register&dagger;</h1>
        <div class="regpass">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name= "confirm_password" placeholder="Confirm Password" required>
        </div>
        <div class="regbutt">
            <input type="submit" value="Register" class="registerbutt">
        </div>
    </div>
    </form>
    <div class="content" id="cont">
    

    </div>
    <div class="leftpan">
        <button id="news">News</button>
        <button id="tarifs">Tariff</button>
        <button id="balance">Top up balance</button>
        <button id="coverage">Coverage Map</button>
        <button id="settings">Settings</button>

    </div>
    
<script src="script/script.js"></script>
</body>
</html>