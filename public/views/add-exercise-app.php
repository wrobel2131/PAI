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
    
    <title>Gymlog - Add exercise</title>
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
                <div class="white-background-content">
                    <p id="welcome-title">Add exercise</p>
                    <form class="add-form" method="POST" action="addExercise">
                        <input class="user-data-input" name="exercise-name" type="text" placeholder="exercise name">
                        <textarea name="exercise-description" class="textarea-description" placeholder="description"></textarea>
<!--                        <select class="minimal">-->
<!--                            <option>Select category</option>-->
<!--                            <option>Chest</option>-->
<!--                            <option>Back</option>-->
<!--                            <option>Legs</option>-->
<!--                            <option>Glutes</option>-->
<!--                          </select>-->
                        <button class="red-app-btn" type="submit">Add</button>
                    </form>

                    

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