<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app-style.css" type="text/css">
    <script src="https://kit.fontawesome.com/311dc4d48f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/navElementsColor.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,100;1,700&display=swap" rel="stylesheet">
    <title>Gymlog - Home</title>
</head>



<body>

<?php
if(!isset($_COOKIE['user_id_for_cookie'])) {
    $url = "http://$_SERVER[HTTP_HOST]";
    header("Location: {$url}/signIn");
}
?>


    <div id="main">
        <header>
            <a href="/home" class="logo-app"><img src="public/img/logo-app.svg" alt="logo-app"></a>
            <nav>
                <ul>
                    <li>
                        <i class="fas fa-home fa-2x"></i>
                        <a class="nav-li" href="/home">Home</a>
                    </li>
                    <li>
                        <i class="fas fa-clipboard-list fa-2x"></i>
                        <a class="nav-li" href="/programs">Programs</a>
                    </li>
                    <li>
                        <i class="fas fa-dumbbell fa-2x"></i>
                        <a class="nav-li" href="/exercises">Exercises</a>
                    </li>
                    <li>
                        <i class="fas fa-calculator fa-2x"></i>
                        <a class="nav-li" href="/calculator">1 Rep Max Calculator</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section>
            <div id="div-for-content-1part">
                <div class="white-background-content" id="app-home-page">
                    <p id="welcome-title">Welcome in <span class="two-colors-text bold-text">GymLog</span></p>
                    <p class="text">Welcome <span class="bold-text"><?= $user->getName();?> <?= $user->getSurname();?></span>!</p>
                    <p class="text">Thanks for choosing <span class="two-colors-text bold-text">GymLog</span>.</p>
                    <p class="text">To add your own training plans/workouts choose <span class="bold-text">Programs.</span><br>
                    There you can also add your exercises, just go to <span class="bold-text"> Exercises</span> tab 
                    and add your personalized exercises.</p>
                    <p class="text"> Don't know how much weight to put on the bar? Don't worry, just
                    head to our <span class="bold-text"> 1 rep max calculator</span> and check how much you
                    can do.</p>
                    <p class="text"> Hope you will enjoy using our application.</p>
                    <p id="signature"><span class="two-colors-text bold-text">GymLog</span> team</p>
                </div>
            </div>
            <div id="div-for-content-2part">
                <div id="user-data-photo">
                    <div id="user-photo-container">
                        <img src="public/img/person.jpeg" alt="">
                    </div>
                    <span class="user-name-surname bold-text"><?= $user->getName();?> <?= $user->getSurname();?></span>
                    <span id="user-email"><?= $user->getEmail();?></span>
                </div>
                <div id="settings">
                    <div class="settings-element">
                        <i class="fas fa-user-cog fa-2x"></i>
                        <a class= "nav-li" href="/settings">Settings</a>
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