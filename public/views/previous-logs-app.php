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
    <title>Gymlog - Previous logs</title>
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
                    <p id="welcome-title" class="spec-exercise">SPECIFIC EXERCISE</p>
                    <p class="text specific-exercise">Previous logs</p>
                    <table>
                        <caption>Specific Date</caption>
                        <tr>
                            <th>No</th>
                            <th>Weight[kg]</th>
                            <th>Reps</th>
                            <th>RPE</th>
                            <th>Tempo</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>120</td>
                            <td>4</td>
                            <td>8.5</td>
                            <td>21X1</td>
                        </tr>
                        <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>120</td>
                        <td>4</td>
                        <td>8.5</td>
                        <td>21X1</td>
                    </tr>
                    
                    </table>
                    <table>
                        <caption>Specific Date</caption>
                        <tr>
                            <th>No</th>
                            <th>Weight[kg]</th>
                            <th>Reps</th>
                            <th>RPE</th>
                            <th>Tempo</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>120</td>
                            <td>4</td>
                            <td>8.5</td>
                            <td>21X1</td>
                        </tr>
                        <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>120</td>
                        <td>4</td>
                        <td>8.5</td>
                        <td>21X1</td>
                    </tr>
                    
                    </table>
                    <table>
                        <caption>Specific Date</caption>
                        <tr>
                            <th>No</th>
                            <th>Weight[kg]</th>
                            <th>Reps</th>
                            <th>RPE</th>
                            <th>Tempo</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>120</td>
                            <td>4</td>
                            <td>8.5</td>
                            <td>21X1</td>
                        </tr>
                        <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>120</td>
                        <td>4</td>
                        <td>8.5</td>
                        <td>21X1</td>
                    </tr>
                    
                    </table>
                    <table>
                        <caption>Specific Date</caption>
                        <tr>
                            <th>No</th>
                            <th>Weight[kg]</th>
                            <th>Reps</th>
                            <th>RPE</th>
                            <th>Tempo</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>120</td>
                            <td>4</td>
                            <td>8.5</td>
                            <td>21X1</td>
                        </tr>
                        <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                         <td>1</td>
                         <td>120</td>
                         <td>4</td>
                         <td>8.5</td>
                         <td>21X1</td>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>120</td>
                        <td>4</td>
                        <td>8.5</td>
                        <td>21X1</td>
                    </tr>
                    
                    </table>

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