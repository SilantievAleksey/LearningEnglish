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
    <link rel="stylesheet" href="../css/grammar.css">
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
    <title>Справочник по английскому языку</title>
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
                    <li><a href="#">Справочник</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="grammar_levels">
    <div class="container_2">
        <div class="grammar_levels_main">
            <div class="grammar_levels_text">
                <h1>Справочник по грамматике английского языка</h1>
                <p>Включает лишь самые основные сведения о частях речи, артиклях, глагольных временах <br> и структуре английского предложения.</p>
                <p>Полную версию справочника имеют только зарегистрированные пользователи</p>
            </div>
            <div class="part_1_verb">
                <input id="tab-one" type="checkbox" name="tabs">
                <label for="tab-one">Часть &#8544; - "Глагол"</label>
                <div class="part_1_verb_list">
                    <nav>
                        <ul class="zebra">
                            <li><a href="#">Глагол в английском языке</a></li>
                            <li><a href="#">Формы глаголов в английском языке</a></li>
                            <li><a href="#">Три формы неправильных глаголов</a></li>
                            <li><a href="#">Правильные и неправильные глаголы</a></li>
                            <li><a href="#">Вспомогательные глаголы</a></li>
                            <li><a href="#">Активный и пассивный залог </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_1_times">
                <input id="tab-one_times" type="checkbox" name="tabs">
                <label for="tab-one_times">Времена</label>
                <div class="part_1_times_list">
                    <nav>
                        <ul class="zebra_times">
                            <li><a href="#">Сколько времен в английском языке</a></li>
                            <li>
                                <a href="#">Настоящее время</a>
                                <ul>
                                    <li><a href="#">Present Simple</a></li>
                                    <li><a href="#">Present Continuous</a></li>
                                    <li><a href="#">Present Perfect</a></li>
                                    <li><a href="#">Present Perfect Continuous</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Прошедшее время</a>
                                <ul>
                                    <li><a href="#">Past Simple</a></li>
                                    <li><a href="#">Past Continuous</a></li>
                                    <li><a href="#">Past Perfect</a></li>
                                    <li><a href="#">Past Perfect Continuous</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Будущее время</a>
                                <ul>
                                    <li><a href="#">Future Simple</a></li>
                                    <li><a href="#">Future Continuous</a></li>
                                    <li><a href="#">Future Perfect</a></li>
                                    <li><a href="#">Future Perfect Continuous</a></li>
                                    <li><a href="#">Future in the Past</a></li>
                                    <li><a href="#">Future in the Past</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_1_mood">
                <input id="tab-one_mood" type="checkbox" name="tabs">
                <label for="tab-one_mood">Наклонение</label>
                <div class="part_1_mood_list">
                    <nav>
                        <ul class="zebra_mood">
                            <li><a href="#">Общие сведения</a></li>
                            <li><a href="#">Повелительное наклонение</a></li>
                            <li><a href="#">Сослагательное наклонение </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_1_impersonal_verbs">
                <input id="tab-one_impersonal_verbs" type="checkbox" name="tabs">
                <label for="tab-one_impersonal_verbs">Неличные формы глаголов</label>
                <div class="part_1_impersonal_verbs_list">
                    <nav>
                        <ul class="zebra_impersonal_verbs">
                            <li><a href="#">Инфинитив</a></li>
                            <li><a href="#">Самостоятельный инфинитивный оборот</a></li>
                            <li><a href="#">Герундий</a></li>
                            <li><a href="#">Причастие</a></li>
                            <li><a href="#">Самостоятельный причастный оборот</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_2_nouns">
                <input id="tab-one_nouns" type="checkbox" name="tabs">
                <label for="tab-one_nouns">Часть &#8545; - "Существительное"</label>
                <div class="part_2_nouns_list">
                    <nav>
                        <ul class="zebra_nouns">
                            <li><a href="#">Существительное в английском языке</a></li>
                            <li><a href="#">Исчисляемые и неисчисляемые существительные</a></li>
                            <li><a href="#">Множественное число существительных</a></li>
                            <li><a href="#">Употребление существительных только во множественном и только в единственном числе</a></li>
                            <li><a href="#">Падежи в английском языке</a></li>
                            <li><a href="#">Притяжательный падеж</a></li>
                            <li><a href="#">Образование существительных</a></li>
                            <li><a href="#">Суффиксы существительных</a></li>
                            <li><a href="#">Род имен существительных</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_3_article">
                <input id="tab-one_article" type="checkbox" name="tabs">
                <label for="tab-one_article">Часть &#8546; - "Артикль"</label>
                <div class="part_3_article_list">
                    <nav>
                        <ul class="zebra_article">
                            <li><a href="#">Общее понятие</a></li>
                            <li><a href="#">Неопределенный артикль</a></li>
                            <li><a href="#">Определенный артикль</a></li>
                            <li><a href="#">Нулевой артикль</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_4_adjective">
                <input id="tab-one_adjective" type="checkbox" name="tabs">
                <label for="tab-one_adjective">Часть &#8547; - "Прилагательное"</label>
                <div class="part_4_adjective_list">
                    <nav>
                        <ul class="zebra_adjective">
                            <li><a href="#">Прилагательные в английском языке</a></li>
                            <li><a href="#">Порядок прилагательных </a></li>
                            <li><a href="#">Степени сравнения прилагательных </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_5_numeral">
                <input id="tab-one_numeral" type="checkbox" name="tabs">
                <label for="tab-one_numeral">Часть &#8548; - "Числительное"</label>
                <div class="part_5_numeral_list">
                    <nav>
                        <ul class="zebra_numeral">
                            <li><a href="#">Числительные в английском языке</a></li>
                            <li><a href="#">Количественные числительные</a></li>
                            <li><a href="#">Порядковые числительные</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_6_pronoun">
                <input id="tab-one_pronoun" type="checkbox" name="tabs">
                <label for="tab-one_pronoun">Часть &#8549; - "Местоимение"</label>
                <div class="part_6_pronoun_list">
                    <nav>
                        <ul class="zebra_pronoun">
                            <li><a href="#">Местоимения в английском языке </a></li>
                            <li><a href="#">Личные местоимения (Personal Pronouns)</a></li>
                            <li><a href="#">Притяжательные местоимения (Possessive Pronouns)</a></li>
                            <li><a href="#">Возвратные местоимения (Reflexive Pronouns)</a></li>
                            <li><a href="#">Указательные местоимения (Demonstrative Pronouns)</a></li>
                            <li><a href="#">Вопросительные местоимения (Interrogative Pronouns)</a></li>
                            <li><a href="#">Относительные местоимения (Relative Pronouns)</a></li>
                            <li><a href="#">Неопределенные местоимения (Indefinite Pronouns)</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_7_adverb">
                <input id="tab-one_adverb" type="checkbox" name="tabs">
                <label for="tab-one_adverb">Часть &#8550; - "Наречия"</label>
                <div class="part_7_adverb_list">
                    <nav>
                        <ul class="zebra_adverb">
                            <li><a href="#">Наречия в английском языке</a></li>
                            <li><a href="#">Образование наречий</a></li>
                            <li><a href="#">Место наречия в английском предложении</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_8_pretext">
                <input id="tab-one_pretext" type="checkbox" name="tabs">
                <label for="tab-one_pretext">Часть &#8551; - "Предлог"</label>
                <div class="part_8_pretext_list">
                    <nav>
                        <ul class="zebra_pretext">
                            <li><a href="#">Предлоги в английском языке</a></li>
                            <li><a href="#">Употребление предлогов в английском языке</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_9_union">
                <input id="tab-one_union" type="checkbox" name="tabs">
                <label for="tab-one_union">Часть &#8551; - "Союз"</label>
                <div class="part_9_union_list">
                    <nav>
                        <ul class="zebra_union">
                            <li><a href="#">Союзы в английском языке</a></li>
                            <li><a href="#">Сочинительные союзы</a></li>
                            <li><a href="#">Подчинительные союзы</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_11_sentence">
                <input id="tab-one_sentence" type="checkbox" name="tabs">
                <label for="tab-one_sentence">Часть &#8553; - "Предложение"</label>
                <div class="part_11_sentence_list">
                    <nav>
                        <ul class="zebra_sentence">
                            <li><a href="#">Предложения на английском языке</a></li>
                            <li><a href="#">Типы предложений</a></li>
                            <li><a href="#">Порядок слов</a></li>
                            <li><a href="#">Построение предложений</a></li>
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