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
    <link rel="stylesheet" href="../css/level_advanced.css">
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
    <title>Курс обчения для уровня Advanced</title>
</head>
<body class="page_fix">

<?php
    require "db.php"; // подключаем файл для соединения с БД
    $user = R::findOne('users', 'email = ?', array($_COOKIE['email']));
    $user_id = $user->id;
    $adv_user = R::findOne('advanced', 'id_user = ?', array($user_id));
    if(!$adv_user)
    {
        $adv_user = R::dispense('advanced');
        $adv_user->id_user = $user_id;
        R::store($adv_user);
    }
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

<section class="tabs">
    <div class="container_2">
        <div class="tabs_main">
            <nav>
                <ul>
                    <li><a href="authorized_user.php">Главная</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="#">Уровень Advanced</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="lessons">
    <div class="container_2">
        <div class="lessons_main">

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 1</h1>
                    <?php if ($adv_user) if ($adv_user->less1_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Порядок прилагательных</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less1_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 2</h1>
                    <?php if ($adv_user) if ($adv_user->less2_1 == 1 and $adv_user->less2_2 == 1 and $adv_user->less2_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Время Future Continuous</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less2_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Время Future Perfect Continuous</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less2_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Время Future Perfect</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less2_3 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 3</h1>
                    <?php if ($adv_user) if ($adv_user->less3_1 == 1 and $adv_user->less3_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Самостоятельный причастный оборот</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less3_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Самостоятельный инфинитивный оборот</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less3_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 4</h1>
                    <?php if ($adv_user) if ($adv_user->less4_1 == 1 and $adv_user->less4_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Сложное подлежащее Complex Subject</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less4_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Сложное дополнение Complex Object</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less4_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 5</h1>
                    <?php if ($adv_user) if ($adv_user->less5_1 == 1 and $adv_user->less5_2 == 1 and $adv_user->less5_3 == 1 and $adv_user->less5_4 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Наклонение и четыре типа условия</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less5_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Употребление сослагательного наклонения</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less5_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Сослагательное наклонение в простом предложении</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less5_3 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Формы сослагательного наклонения в сложном предложении в схемах</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less5_4 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 6</h1>
                    <?php if ($adv_user) if ($adv_user->less6_1 == 1 and $adv_user->less6_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Выражение had better</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less6_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Употребление would rather, sooner, prefer</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less6_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 7</h1>
                    <?php if ($adv_user) if ($adv_user->less7_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Таблицы вопросительных предложений по временам</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less7_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 8</h1>
                    <?php if ($adv_user) if ($adv_user->less8_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Инверсия (обратный порядок слов)</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less8_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="lesson">
                <div class="lesson_text">
                    <h1>Урок 9</h1>
                    <?php if ($adv_user) if ($adv_user->less9_1 == 1 and $adv_user->less9_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Предложения с I wish</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less9_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Выражение have something done</a></div>
                                <div>
                                    <?php if ($adv_user) if ($adv_user->less9_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </nav>
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