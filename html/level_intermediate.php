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
    <link rel="stylesheet" href="../css/level_intermediate.css">
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
    <title>Курс обчения для уровня Intermediate</title>
</head>
<body class="page_fix">

<?php
    require "db.php"; // подключаем файл для соединения с БД
    $user = R::findOne('users', 'email = ?', array($_COOKIE['email']));
    $user_id = $user->id;
    $int_user = R::findOne('intermediate', 'id_user = ?', array($user_id));
    if(!$int_user)
    {
        $int_user = R::dispense('intermediate');
        $int_user->id_user = $user_id;
        R::store($int_user);
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
                    <li><a href="#">Уровень Intermediate</a></li>
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
                    <?php if ($int_user) if ($int_user->less1_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Время Present Perfect Continuous </a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less1_1 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less2_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Время Past Perfect</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less2_1 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less3_1 == 1 and $int_user->less3_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Can (could) и be able to</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less3_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Прилагательные на –ing и –ed</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less3_2 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less4_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Should, must или have to?</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less4_1 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less5_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Модальный глагол NEED</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less5_1 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less6_1 == 1 and $int_user->less6_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Модальный глагол OUGHT TO</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less6_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Модальный глагол WILL (WOULD)</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less6_2 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less7_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Выражения used to do и used to doing something</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less7_1 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less8_1 == 1 and $int_user->less8_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Образование существительных в английском языке</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less8_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Суффиксы существительных</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less8_2 == 1): ?>
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
                    <?php if ($int_user) if ($int_user->less9_1 == 1 and $int_user->less9_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Степени сравнения прилагательных</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less9_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Сильные и слабые прилагательные в английском языке</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less9_2 == 1): ?>
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
                    <h1>Урок 10</h1>
                    <?php if ($int_user) if ($int_user->less10_1 == 1 and $int_user->less10_2 == 1 and $int_user->less10_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Неопределенный артикль</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less10_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Определенный артикль</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less10_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Нулевой артикль</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less10_3 == 1): ?>
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
                    <h1>Урок 11</h1>
                    <?php if ($int_user) if ($int_user->less11_1 == 1 and $int_user->less11_2 == 1 and $int_user->less11_3 == 1 and $int_user->less11_4 == 1 and $int_user->less11_5 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Артикли с уникальными существительными</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less11_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Артикли с личными именами</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less11_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Артикли с именами собственными</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less11_3 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Артикли с географическими названиями</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less11_4 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Артикли с названиями болезней</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less11_5 == 1): ?>
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
                    <h1>Урок 12</h1>
                    <?php if ($int_user) if ($int_user->less12_1 == 1 and $int_user->less12_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Герундий</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less12_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Инфинитив</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less12_2 == 1): ?>
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
                    <h1>Урок 13</h1>
                    <?php if ($int_user) if ($int_user->less13_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Причастие</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less13_1 == 1): ?>
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
                    <h1>Урок 14</h1>
                    <?php if ($int_user) if ($int_user->less14_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Придаточные предложения в английском языке</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less14_1 == 1): ?>
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
                    <h1>Урок 15</h1>
                    <?php if ($int_user) if ($int_user->less15_1 == 1 and $int_user->less15_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Условные предложения</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less15_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Таблица: условные предложения</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less15_2 == 1): ?>
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
                    <h1>Урок 16</h1>
                    <?php if ($int_user) if ($int_user->less16_1 == 1 and $int_user->less16_2 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Passive Voice</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less16_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Способы перевода пассивного залога на русский язык</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less16_2 == 1): ?>
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
                    <h1>Урок 17</h1>
                    <?php if ($int_user) if ($int_user->less17_1 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Косвенная речь</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less17_1 == 1): ?>
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
                    <h1>Урок 18</h1>
                    <?php if ($int_user) if ($int_user->less18_1 == 1 and $int_user->less18_2 == 1 and $int_user->less18_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Фразовые глаголы</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less18_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол break</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less18_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол look</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less18_3 == 1): ?>
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
                    <h1>Урок 19</h1>
                    <?php if ($int_user) if ($int_user->less19_1 == 1 and $int_user->less19_2 == 1 and $int_user->less19_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Фразовый глагол bring </a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less19_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол make</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less19_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол pay</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less19_3 == 1): ?>
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
                    <h1>Урок 20</h1>
                    <?php if ($int_user) if ($int_user->less20_1 == 1 and $int_user->less20_2 == 1 and $int_user->less20_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Фразовый глагол do</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less20_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол give</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less20_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол set</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less20_3 == 1): ?>
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
                    <h1>Урок 21</h1>
                    <?php if ($int_user) if ($int_user->less21_1 == 1 and $int_user->less21_2 == 1 and $int_user->less21_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Фразовый глагол hold</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less21_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол move</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less21_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол take</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less21_3 == 1): ?>
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
                    <h1>Урок 22</h1>
                    <?php if ($int_user) if ($int_user->less22_1 == 1 and $int_user->less22_2 == 1 and $int_user->less22_3 == 1): ?>
                        <a href="#" class="true_mark"></a>
                    <?php else: ?>
                        <a href="#" class="false_mark"></a>
                    <?php endif; ?>
                </div>
                <div class="lesson_content">
                    <nav>
                        <ul>
                            <li>
                                <div><a href="#">Фразовый глагол keep</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less22_1 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол leave</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less22_2 == 1): ?>
                                        <a href="#" class="true_mark"></a>
                                    <?php else: ?>
                                        <a href="#" class="false_mark"></a>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <li>
                                <div><a href="#">Фразовый глагол put,</a></div>
                                <div>
                                    <?php if ($int_user) if ($int_user->less22_3 == 1): ?>
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