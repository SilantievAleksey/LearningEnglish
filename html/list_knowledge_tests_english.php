<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/list_knowledge_tests_english.css">
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
    <title>Тесты на знание английского языка</title>
</head>
<body class="page_fix">

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
                </div>
                <a href="register.php" class="reg" type="button">Регистрация</a>
                <a href="login.php" class="login" type="button">Вход</a>
            </div>
        </div>
        <div class="menu_bar">
            <div class="menu">
                <nav>
                    <ul class="menu_items">
                        <li><a href="main.php" class="home"></a></li>
                        <li class="item"><a href="grammar.php">Справочник</a></li>
                        <li class="item"><a href="tests_for_unauthorized.php">Тесты</a></li>
                        <li class="item"><a href="vocabulary.php">Словарь</a></li>
                        <li class="item"><a href="articles.php">Статьи</a></li>
                        <li class="item"><a href="references.php">Источники</a></li>
                    </ul>
                </nav>
            </div>
            <div class="search">
                <form action="search.php" method="post">
                    <input type="search" placeholder="Искать на сайте..." name="main_search">
                    <button type="submit" name="search_word"></button>
                </form>
            </div>
        </div>
    </div>
</header>

<section class="tabs">
    <div class="container_2">
        <div class="tabs_main">
            <nav>
                <ul>
                    <li><a href="main.php">Главная</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="tests_for_unauthorized.php">Тесты</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="#">Тесты на знание английского языка</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="list_tests_knowledge_english">
    <div class="container_2">
        <div class="list_main">
            <h1>Тесты на знание английского языка</h1>
            <p>Обычно такие тесты проходят перед записью на курсы. Как правило, данные тесты по английскому содержат пару десятков вопросов. В зависимости от результатов вас определяют в соответствующую группу.</p>
            <div class="level_advanced">
                <h1>Общий тест: уровень Advanced</h1>
                <p>Уровень Advanced предполагает fluency – беглое общение на любую тему, способность несколькими способами выражать одну и ту же мысль, готовность понимать все, что говорит собеседник. С такими знаниями можно смело ехать за границу. На этом уровне ученики учатся использовать сложные грамматические конструкции, такие как инверсия и смешанные типы условных предложений. Подробно разбирается сочетаемость слов, изучаются фразовые глаголы и фиксированные словосочетания. Учиться на этом уровне очень интересно, так как именно здесь учеба превращается в удовольствие от знания. Уровень Advanced рассматривается как подготовка к международному экзамену CAE</p>
                <a href="list_knowledge_tests/test_advanced.php">Пройти тест</a>
            </div>
            <div class="level_upper_intermediate">
                <h1>Общий тест: уровень Upper-Intermediate</h1>
                <p>Уровень Upper-Intermediate – для тех, кто не хочет останавливаться на бытовом общении. Здесь начинается изучение официального стиля речи, выучивается большой пласт фразеологизмов и идиом. Грамматика на этом уровне в основном повторяется, оттачивается ее употребление в разговорной речи. На уровне Upper-Intermediate говорение занимает большую часть урока. Также уровень Upper-Intermediate можно считать подготовкой к сдаче оксфордского экзамена FCE</p>
                <a href="list_knowledge_tests/test_upper_intermediate.php">Пройти тест</a>
            </div>
            <div class="level_intermediate">
                <h1>Общий тест: уровень Intermediate</h1>
                <p>Intermediate – четвертый по счету уровень владения английским языком. Многие люди заканчивают изучение английского языка после уровня Intermediate, потому что полученных знаний достаточно для сносного владения английским языком. На этом уровне значительно расширяется лексическая база, выучивается множество слов, необходимых для адекватного общения с носителем языка. Закрепляются знания грамматики, основное внимание уделяется синтаксису. На этом уровне значительная часть времени отводится говорению и аудированию. Конечно, вы не сможете общаться на философские темы, обсуждать политику и читать финансовые отчеты, но для бытового общения этого уровня вполне достаточно.</p>
                <a href="list_knowledge_tests/test_intermediate.php">Пройти тест</a>
            </div>
            <div class="level_pre_intermediate">
                <h1>Общий тест: уровень Pre-Intermediate</h1>
                <p>Pre-Intermediate – уровень для более подготовленных студентов, которые уже некоторое время успешно учат английский язык и готовы углублять свои знания.</p>
                <a href="list_knowledge_tests/test_pre_intermediate.php">Пройти тест</a>
            </div>
            <div class="level_elementary">
                <h1>Общий тест: уровень Elementary</h1>
                <p>Уровень знаний Elementary – это ключ к английскому языку, так как на нем проходятся основные правила, благодаря которым потом можно будет строить более сложные конструкции.Эти уровни владения английским языком отличаются достаточно сильно. Если на Elementary только закладывается грамматическая и лексическая база, то на уровне Pre-Intermediate она расширяется и укрепляется. Невозможно попасть на уровень Pre-Intermediate, не усвоив материал предыдущего уровня.</p>
                <a href="list_knowledge_tests/test_elementary.php">Пройти тест</a>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="footer">
            <nav>
                <ul class="footer_items">
                    <li class="fot_item"><a href="main.php">Главная</a></li>
                    <li class="fot_item"><a href="grammar_authorized.php">Справочник</a></li>
                    <li class="fot_item"><a href="tests_for_unauthorized.php">Тесты</a></li>
                    <li class="fot_item"><a href="vocabulary.php">Словарь</a></li>
                    <li class="fot_item"><a href="articles.php">Статьи</a></li>
                    <li class="fot_item"><a href="references.php">Источники</a></li>
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