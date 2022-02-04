<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/app-style.css" type="text/css">
    <script src="https://kit.fontawesome.com/311dc4d48f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/calculator.js" defer></script>
    <script type="text/javascript" src="./public/js/navElementsColor.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,100;1,700&display=swap" rel="stylesheet">
    <title>Gymlog - Calculator</title>
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
                    <li id="home-li">
                        <i class="fas fa-home fa-2x"></i>
                        <a class="nav-li" href="/home">Home</a>
                    </li>
                    <li id="programs-li">
                        <i class="fas fa-clipboard-list fa-2x"></i>
                        <a class="nav-li" href="/programs">Programs</a>
                    </li>
                    <li id="exercises-li">
                        <i class="fas fa-dumbbell fa-2x"></i>
                        <a class="nav-li" href="/exercises">Exercises</a>
                    </li>
                    <li id="calculator-li">
                        <i class="fas fa-calculator fa-2x"></i>
                        <a class="nav-li" href="/calculator">1 Rep Max Calculator</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section>
            <div id="div-for-content-1part">
                <div class="white-background-content">
                    <p id="welcome-title">1 Rep Max Calculator</p>
                    <form class="calc-input">
                        <input class="user-data-input" type="text" name="reps" placeholder="Reps" onchange="calculate()" required>
                        <input class="user-data-input" type="text" name="weight" placeholder="Weight" onchange="calculate()" required>
                        <p class="text">Your 1 rep max is around</p>
                        <output class="user-1rep-result" name="result" ></output>
                    </form>
                    <div class="info">
                        <p class="bold-text">How does it work?</p>
                        <p class="text">We calculate your 1 rep max using a number of repetitions and weight used in your set.</p>
                        <p class="bold-text">Tip #1</p>
                        <p class="text">If you want the result to be as accurate as possible, use a at least 60-65% of your current 1 rep max.</p>
                        <p class="bold-text">Tip #2</p>
                        <p class="text">If you don’t know your current 1 rep max, just take the bar/dumbbells with a rather heavy weight and see how many reps you can do. <span>Remember to ask someone for a spot</span>, because in this test you want to test the maximum of your abilities.</p>    
                    </div>
                    
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
                        <a class= "nav-li" href="/logout">Logout</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>