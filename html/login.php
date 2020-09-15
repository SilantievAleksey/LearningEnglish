<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../additional/fontawesome-free-5.12.1-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/BackIcon.ico" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/chatbot.js"></script>
    <script src="../js/translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <title>Вход в личный кабинет</title>
</head>
<body class="page_fix">

<?php

    require "db.php"; // подключаем файл для соединения с БД

    // Создаем переменную для сбора данных от пользователя по методу POST
    $data = $_POST;

    // Пользователь нажимает на кнопку "Авторизоваться" и код начинает выполняться
    if(isset($data['do_login']))
    {

        // Создаем массив для сбора ошибок
        $errors = array();

        // Проводим поиск пользователей в таблице users
        $user = R::findOne('users', 'email = ?', array($data['email']));

        if($user)
        {

            // Если логин существует, тогда проверяем пароль
            if(password_verify($data['password'], $user->password))
            {

                // Все верно, пускаем пользователя
                $_SESSION['logged_user'] = $user;

                if (isset($_POST['remember']))
                {
                    setcookie('email',$user->email,time()+86400*30);
                    setcookie('password',$user->password,time()+86400*30);
                }

                else{
                    setcookie('email',$user->email,time()+86400);
                    setcookie('password',$user->password,time()+86400);
                }

                // Редирект на главную страницу
                header('Location: authorized_user.php');

            }

            else
                {
                $errors[1] = 'Пароль введен неверно!';
            }

        }

        else
            {
            $errors[0] = 'Пользователь с такой почтой не найден!';
        }

    }

?>

<header>
    <div class="container">
        <div class="menu_intro">
            <div class="logo">
                <a href="#"><img src="../images/Logo.png" alt="Logo"></a>
            </div>
            <div class="menu_intro_main">
                <div class="language">
                    <nav>
                        <ul class="topmenu">
                            <li>
                                <a href="#" class="down"></a>
                                <ul class="submenu">
                                    <li>
                                        <button type="button" class="ru" data-google-lang="ru">
                                            <img src="../images/RussiaLanguage.png" alt="RussiaLanguage">
                                            <p>Русский</p>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="en" data-google-lang="en">
                                            <img src="../images/EnglishLanguage.png" alt="EnglishLanguage">
                                            <p>English</p>
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <a href="main.php">Вернуться на главную страницу</a>
                </div>
            </div>
        </div>

        <div id="window_login">
            <div id="login">
                <h1>Авторизация на сайте</h1>
                <form action="login.php" method="post">
                    <div class="login_name">
                        <span class="fontawesome-user"></span>
                        <input type="email" placeholder="E-mail" name="email" required><br>
                    </div>
                    <?php
                    if(!empty($errors))
                        {
                            if(isset($errors[0]))
                                echo '<div class="error">' . $errors[0] . '</div>';
                        }
                    ?>
                    <div class="login_password">
                        <span class="fontawesome-lock"></span>
                        <input type="password"  placeholder="Пароль" name="password" required>
                    </div>
                    <?php
                    if(!empty($errors))
                        {
                            if(isset($errors[1]))
                                echo '<div class="error">' . $errors[1] . '</div>';
                        }
                    ?>
                    <div class="btn_sub">
                        <button name="do_login" type="submit">Войти</button>
                    </div>
                    <div class="remember">
                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" value="yes">
                        <label for="remember">Запомнить меня</label>
                    </div>
                </form>
                <div class="recovery">
                    <a href="recovery_mail.php">Забыли пароль?</a>
                </div>
            </div>
        </div>
    </div>
</header>

</body>
</html>