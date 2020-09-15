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
    <link rel="stylesheet" href="../css/individual_programme.css">
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
    <title>Индивидуальная программа</title>
</head>
<body class="page_fix">

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
                    <li><a href="#">Индивидуальная программа</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="tests_for_programme">
    <div class="container_2">
        <div class="tests_main">
            <div class="texts_main_text">
                <p>Для того чтобы мы составили для вас индивидуальную программу обучения, вам необходимо пройти тестирование, которое определит ваш уровень знаний.</p>
                <p>Данное тестирование -  это комплексная проверка ваших знаний в трех областях: грамматике, словарном запасе и восприятии речи на слух.</p>
                <a href="individual_test.php">Начать тестирование</a>
            </div>
        </div>
        <div class="features">
            <h1>Особенности нашего теста</h1>
            <div class="complex_features">
                <div class="complex_features_image">
                    <img src="../images/ComplexStudent.png" alt="ComplexStudent">
                </div>
               <div class="complex_programme">
                   <div class="complex_programme_text">
                       <img src="../images/NumberOne.png" alt="NumberOne">
                       <h1>Комплексная проверка</h1>
                   </div>
                    <div class="complex_programme_description">
                        <p>Наше тестирование оценивает ваши знания не только в области английской грамматики, но и в таких важных аспектах языка как словарный запас, чтение и восприятие речи на слух. Такой подход позволяет дать более точную оценку вашим знаниям.</p>
                    </div>
               </div>
            </div>
            <div class="convenience_features">
                <div class="convenience_programme">
                    <div class="convenience_programme_text">
                        <img src="../images/NumberTwo.png" alt="NumberTwo">
                        <h1>Удобство и доступность</h1>
                    </div>
                    <div class="convenience_programme_description">
                        <p>По завершении теста вы получите информацию об уровне знаний и допущенных ошибках, а также полезные рекомендации.</p>
                    </div>
                </div>
                <div class="convenience_features_image">
                    <img src="../images/Convenience.png" alt="Convenience">
                </div>
            </div>
            <div class="help_features">
                <div class="help_features_image">
                    <img src="../images/Achievement.png" alt="Achievement">
                </div>
                <div class="help_programme">
                    <div class="help_programme_text">
                        <img src="../images/NumberThree.png" alt="NumberThree">
                        <h1>Достижение результата</h1>
                    </div>
                    <div class="help_programme_description">
                        <p>Начать изучение английского с онлайн-тестирования — значит существенно повысить свои шансы на успех! Результат теста на знание английского позволит вам выбрать отправную точку, определиться с целями и задать курс обучения.</p>
                    </div>
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