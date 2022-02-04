<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app-style.css" type="text/css">
    <script src="https://kit.fontawesome.com/311dc4d48f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,100;1,700&display=swap" rel="stylesheet">
    <title>Gymlog - Programs</title>
</head>

<?php
if(!isset($_COOKIE['id'])) {
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/signIn");
}
?>

<body>
    <div id="main">
        <header>
            <a href="#" class="logo-app"><img src="public/img/logo-app.svg" alt="logo-app"></a>
            <nav>
                <ul>
                    <li>
                        <i class="fas fa-home fa-2x"></i>
                        <a class="nav-li" href="#">Home</a>
                    </li>
                    <li>
                        <i class="fas fa-clipboard-list fa-2x"></i>
                        <a class="nav-li" href="">Programs</a>
                    </li>
                    <li>
                        <i class="fas fa-dumbbell fa-2x"></i>
                        <a class="nav-li" href="">Exercises</a>
                    </li>
                    <li>
                        <i class="fas fa-calculator fa-2x"></i>
                        <a class="nav-li" href="">1 Rep Max Calculator</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section>
            <div id="div-for-content-1part">
                <a class="specific-program" href=""><i class="fas fa-arrow-left fa-3x"></i></a>
                <p class="title">Specific Pogram</p>
                <textarea name="specific-program-description" class="textarea-description" placeholder="workout description"></textarea>
                <div id="content-programs-container">
                    <div class="cross-programs"></div>
<!--                    <div class="program-container">A</div>-->
<!--                    <div class="program-container">B</div>-->
<!--                    <div class="program-container">C</div>-->
<!--                    <div class="program-container">D</div>-->
<!--                    <div class="program-container">E</div>-->
                    <?php foreach ($workouts as $workout):  ?>
                        <div class="program-container"><?= $workout->getName() ?></div>
                    <?php endforeach; ?>
                    
                    
                </div>
                
            </div>
            <div id="div-for-content-2part">
                <div id="user-data-photo">
                    <div id="user-photo-container">
                        <img src="public/img/person.jpeg" alt="">
                    </div>
                    <span class="user-name-surname bold-text">Name Surname</span>
                    <span id="user-email">email@email.com</span>
                </div>
                <div id="settings">
                    <div class="settings-element">
                        <i class="fas fa-user-cog fa-2x"></i>
                        <a class= "nav-li" href="##">Settings</a>
                    </div>
                    <div class="settings-element">
                        <i class="fas fa-sign-out-alt fa-2x"></i>
                        <a class= "nav-li" id="logout" href="logout">Logout</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>