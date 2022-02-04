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
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Gymlog - Add program</title>
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
                        <a class="nav-li" href="/appPrograms">Programs</a>
                    </li>
                    <li>
                        <i class="fas fa-dumbbell fa-2x"></i>
                        <a class="nav-li" href="/appExercises">Exercises</a>
                    </li>
                    <li>
                        <i class="fas fa-calculator fa-2x"></i>
                        <a class="nav-li" href="/appCalculator">1 Rep Max Calculator</a>
                    </li>
                </ul>
            </nav>
        </header>
        <section>
            <div id="div-for-content-1part">
                <div class="white-background-content">
                    <a href=""><i class="fas fa-arrow-left fa-3x"></i></a>
                    <p id="welcome-title">Add program</p>
                    <form class="add-form" method="POST" action="addProgram">
                        <input class="user-data-input" name="program-name" type="text" placeholder="program name">
                        <textarea name="program-description" class="textarea-description" placeholder="description"></textarea>
                        <p class="text">add your new training program that will include all the training workouts for the whole week</p>
                        <button class="red-app-btn" type="submit">Add</button>
                    </form>
<!--                    <button class="red-app-btn">Add</button>-->
                    

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
                        <a class= "nav-li" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>