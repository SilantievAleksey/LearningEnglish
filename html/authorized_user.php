<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../additional/fontawesome-free-5.12.1-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/authorized_user.css">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/chatbot.js"></script>
    <script src="../js/translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <title>English Club</title>
</head>
<body class="page_fix">

<?php
    require "db.php"; // подключаем файл для соединения с БД
    $user = R::findOne('users', 'email = ?', array($_COOKIE['email']));
    $user_id = $user->id;

    $beg_user = R::findOne('beginner', 'id_user = ?', array($user_id));
    $int_user = R::findOne('intermediate', 'id_user = ?', array($user_id));
    $adv_user = R::findOne('advanced', 'id_user = ?', array($user_id));
    $pr_user = R::findOne('programme', 'id_user = ?', array($user_id));
?>

<header>
    <div class="container">
        <div class="menu_intro">
            <div class="logo">
                <a href="#"><img src="../images/Logo.png" alt="Logo"></a>
            </div>
            <div class="menu_bar">
                <div class="menu">
                    <nav>
                        <ul class="menu_items">
                            <li><a href="authorized_user.php" class="home"></a></li>
                            <li class="item"><a href="grammar_authorized.php">Грамматика</a></li>
                            <li class="item"><a href="test_for_authorized.php">Тесты</a></li>
                            <li class="item"><a href="vocabulary_authorized.php">Словарь</a></li>
                            <li class="item"><a href="books.php">Книги</a></li>
                        </ul>
                    </nav>
                </div>
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
                </div>
                <div class="profile">
                    <img src="../images/User.png" alt="User" class="user">
                    <div class="profile_content">
                        <a href="profile.php">Профиль</a>
                        <a href="logout.php">Выход</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="learn_programme">
    <div class="container_2">
        <div class="content_main">
            <div class="individual_programme">
                <div class="individual_programme_text">
                    <p>Индивидуальная программа</p>
                </div>
                <div class="individual_programme_main">
                    <div class="individual_programme_main_text">
                        <p>Проходи уроки и совешенствуйся с каждым днем!</p>
                    </div>
                    <div class="current_lesson">
                        <img src="../images/Student.png" alt="Student">
                        <?php if ($pr_user): ?>
                            <a href="programme_user.php">Продолжить</a>
                        <?php else: ?>
                            <a href="individual_programme.php">Начать обучение</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="courses_text">
                <p>Курсы по уровню сложности</p>
            </div>
            <div class="courses">
                <div class="learn_level_beginner">
                    <img src="../images/Beginner.png" alt="Beginner">
                    <p>Уровень: Beginner</p>
                    <?php if ($beg_user): ?>
                        <a href="level_beginner.php">Продолжить</a>
                    <?php else: ?>
                        <a href="level_beginner.php">Начать обучение</a>
                    <?php endif; ?>
                </div>
                <div class="learn_level_intermediate">
                    <img src="../images/PreIntermediate.jpg" alt="Intermediate">
                    <p>Уровень: Intermediate</p>
                    <?php if ($int_user): ?>
                        <a href="level_intermediate.php">Продолжить</a>
                    <?php else: ?>
                        <a href="level_intermediate.php">Начать обучение</a>
                    <?php endif; ?>
                </div>
                <div class="learn_level_advanced">
                    <img src="../images/Advanced.jpg" alt="Advanced">
                    <p>Уровень: Advanced</p>
                    <?php if ($adv_user): ?>
                        <a href="level_advanced.php">Продолжить</a>
                    <?php else: ?>
                        <a href="level_advanced.php">Начать обучение</a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="books">
                <div class="books_text">
                    <p>Книги</p>
                </div>
                <div class="books_main">
                    <img src="../images/CrasyBook.png" alt="Book">
                    <p>Читай книги по различным темам и прокачивай свой уровень чтения.</p>
                    <p>Последняя открытая книга: </p>
                    <a href="books.php">Перейти</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer">
            <nav>
                <ul class="footer_items">
                    <li class="fot_item"><a href="authorized_user.php">Главная</a></li>
                    <li class="fot_item"><a href="grammar_authorized.php">Грамматика</a></li>
                    <li class="fot_item"><a href="test_for_authorized.php">Тесты</a></li>
                    <li class="fot_item"><a href="vocabulary_authorized.php">Словарь</a></li>
                    <li class="fot_item"><a href="books.php">Книги</a></li>
                </ul>
            </nav>
        </div>
        <div class="copyright">
            <p>Copyright 2020-2021 &emsp; English Club</p>
        </div>
        <div class="links">
            <a href="#" class="link_facebook"></a>
            <a href="#" class="link_twitter"></a>
            <a href="#" class="link_instagram"></a>
            <a href="#" class="link_github"></a>
        </div>
    </div>
</footer>

<a href="#" class="scrollup">Наверх</a>

</body>
</html>