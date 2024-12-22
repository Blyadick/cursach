<?php
session_start();

if (!isset($_SESSION["user_id"])){
    header("Location: index.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../updated_style.css">
</head>
<body>
    <div class="toppan">
        <div class="img">
            <img class="imgred" src="../logo/logo.png">
            <div class="txtlogo">
                <p>Nexus</p> 
                <p class="righttxt">Provide</p>
            </div>
        </div>
        <div class="buttlog">
            <!-- Вместо кнопок Login/Register показываем имя/меню -->
            <div class="user-menu">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</span>
                <div class="dropdown">
                    <button class="dropbtn">Menu</button>
                    <div class="dropdown-content">
                        <a href="profile.php">Profile</a>
                        <a href="tariff.php">Your Tariff</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>