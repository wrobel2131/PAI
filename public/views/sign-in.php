<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/311dc4d48f.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
    <title>GymLog - Your simple workout log</title>
</head>
<body>
    <div class="main-signin">
        <header class="header-sign">
            <a href="/" class="logo"><img src="public/img/logo.svg" alt="GymLog-logo"></a>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Features</a></li>
                    <li><a href="/">Contact</a></li>
                </ul>
            </nav>
            <a href="/signIn" class="button-home">Sign in</a>
        </header>
        <div class="sign-content">

            <div class="text-content">
                <p class="sign-text"><span class="bold-text">Slow progress</span> is better than no progess</p>
            </div>
            <form class="sign-form" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input class="user-data-input" type="text" name="email" placeholder="email@email.com">
                <input class="user-data-input" type="password" name="password" placeholder="password">
<!--                <a href="#" class="button-home" type="">Sign in</a>-->
                <button class="button-home" type="submit">Sign in</button>
            </form>
        </div>
    </div>
</body>
</html>