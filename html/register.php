<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/BackIcon.ico" type="image/x-icon">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/chatbot.js"></script>
    <script src="../js/translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <title>Регистрация</title>
</head>
<body class="page_fix">

<?php

    require "db.php"; // подключаем файл для соединения с БД

    // Создаем переменную для сбора данных от пользователя по методу POST
    $data = $_POST;

    // Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
    if(isset($data['do_register']))
    {
        // Регистрируем
        // Создаем массив для сбора ошибок
        $errors = array();

        // Проводим проверки
        // trim — удаляет пробелы (или другие символы) из начала и конца строки
        if(trim($data['login']) == '')
        {
            $errors[0] = "Введите логин!";
        }

        if(trim($data['email']) == '')
        {
            $errors[1] = "Введите Email";
        }

        if($data['password'] == '')
        {
            $errors[2] = "Введите пароль";
        }

        if($data['password_2'] != $data['password'])
        {
            $errors[3] = "Пароли не совпадают!";
        }

        // функция mb_strlen - получает длину строки
        // Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
        if(mb_strlen($data['login']) < 5 || mb_strlen($data['login']) > 90)
        {
            $errors[0] = "Недопустимая длина логина";
        }

        if (mb_strlen($data['password']) < 3 || mb_strlen($data['password']) > 15)
        {
            $errors[2] = "Недопустимая длина пароля (от 3 до 15 символов)";
        }

        // проверка на правильность написания Email
        if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $data['email']))
        {
            $errors[1] = 'Неверно введен е-mail';
        }

        // Проверка на уникальность логина
        if(R::count('users', "login = ?", array($data['login'])) > 0)
        {
            $errors[0] = "Пользователь с таким логином существует!";
        }

        // Проверка на уникальность email
        if(R::count('users', "email = ?", array($data['email'])) > 0)
        {
            $errors[1] = "Пользователь с таким Email существует!";
        }

        if(empty($errors))
        {
            // Все проверено, регистрируем
            // Создаем таблицу users
            $user = R::dispense('users');

            // добавляем в таблицу записи
            $user->login = $data['login'];
            $user->email = $data['email'];
            // Хешируем пароль
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);

            setcookie('login',$user->login,time()+86400);
            setcookie('email',$user->email,time()+86400);
            setcookie('password',$user->password,time()+86400);

            // Сохраняем таблицу
            R::store($user);

            // Редирект на главную страницу
            header("Location: main.php");

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

        <div id="window_register">
            <div class="register_main">
                <form action="register.php" method="post">
                    <h1>Регистрация</h1>
                    <div class="register_login">
                        <span><i class="fa fa-user-circle-o fa-lg"></i></span>
                        <input type="text" placeholder="Логин" name="login" value="" required>
                    </div>
                    <?php
                    if(!empty($errors))
                    {
                        if(isset($errors[0]))
                            echo '<div class="error">' . $errors[0] . '</div>';
                    }
                    ?>
                    <div class="register_mail">
                        <span><i class="fa fa-envelope-o fa-lg"></i></span>
                        <input type="email" placeholder="Email" name="email" value="" required>
                    </div>
                    <?php
                    if(!empty($errors))
                    {
                        if(isset($errors[1]))
                            echo '<div class="error">' . $errors[1] . '</div>';
                    }
                    ?>
                    <div class="register_password">
                        <span><i class="fa fa-lock fa-lg"></i></span>
                        <input type="password" placeholder="Пароль" name="password" value="" required>
                    </div>
                    <?php
                    if(!empty($errors))
                    {
                        if(isset($errors[2]))
                            echo '<div class="error">' . $errors[2] . '</div>';
                    }
                    ?>
                    <div class="register_password_remember">
                        <span><i class="fa fa-unlock fa-lg"></i></span>
                        <input type="password" placeholder="Подтввердите пароль" name="password_2" value="" required>
                    </div>
                    <?php
                    if(!empty($errors))
                    {
                        if(isset($errors[3]))
                            echo '<div class="error">' . $errors[3] . '</div>';
                    }
                    ?>
                    <div class="register_btn">
                        <button name="do_register" type="submit">Зарегистрироваться</button>
                    </div>
                    <div class="post_register">
                        <a href="login.php">Уже зарегистрированы?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>

</body>
</html>