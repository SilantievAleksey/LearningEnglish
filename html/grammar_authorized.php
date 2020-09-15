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
    <link rel="stylesheet" href="../css/grammar_authorized.css">
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
                            <li><a href="#">Способы перевода пассивного залога на русский язык</a></li>
                            <li><a href="#">Выражение have something done</a></li>
                            <li><a href="#">Употребление would rather (would sooner) и prefer </a></li>
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
                                    <li><a href="#">Наречия с Present Perfect </a></li>
                                    <li><a href="#">Present Perfect Continuous</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Прошедшее время</a>
                                <ul>
                                    <li><a href="#">Past Simple</a></li>
                                    <li><a href="#">Выражения used to и used to doing something</a></li>
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
                                    <li><a href="#">Способы выражения будущего действия</a></li>
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
                            <li><a href="#">Инфинитив с частицей to и без частицы to</a></li>
                            <li><a href="#">Complex Subject</a></li>
                            <li><a href="#">Complex Object</a></li>
                            <li><a href="#">Самостоятельный инфинитивный оборот</a></li>
                            <li><a href="#">Герундий</a></li>
                            <li><a href="#">Причастие</a></li>
                            <li><a href="#">Выражение have something done</a></li>
                            <li><a href="#">Самостоятельный причастный оборот</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_1_modal_verbs">
                <input id="tab-one_modal_verbs" type="checkbox" name="tabs">
                <label for="tab-one_modal_verbs">Модальные глаголы</label>
                <div class="part_1_modal_verbs_list">
                    <nav>
                        <ul class="zebra_modal_verbs">
                            <li><a href="#">Модальные глаголы в английском языке </a></li>
                            <li><a href="#">Модальный глагол CAN</a></li>
                            <li><a href="#">Модальный глагол MAY </a></li>
                            <li><a href="#">Модальный глагол MUST </a></li>
                            <li><a href="#">Модальный глагол HAVE TO</a></li>
                            <li><a href="#">Модальный глагол OUGHT TO </a></li>
                            <li><a href="#">Модальный глагол NEED</a></li>
                            <li><a href="#">Модальный глагол TO BE TO</a></li>
                            <li><a href="#">Модальный глагол SHALL (SHOULD)</a></li>
                            <li><a href="#">Модальный глагол WILL (WOULD)</a></li>
                            <li><a href="#">Модальный глагол DARE</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_1_phrases_verbs">
                <input id="tab-one_phrases_verbs" type="checkbox" name="tabs">
                <label for="tab-one_phrases_verbs">Фразовые глаголы</label>
                <div class="part_1_phrases_verbs_list">
                    <nav>
                        <ul class="zebra_phrases_verbs">
                            <li><a href="#">Английские фразовые глаголы</a></li>
                            <li><a href="#">Фразовый глагол get</a></li>
                            <li><a href="#">Фразовый глагол give</a></li>
                            <li><a href="#">Фразовый глагол make</a></li>
                            <li><a href="#">Фразовый глагол take </a></li>
                            <li><a href="#">Фразовый глагол bring</a></li>
                            <li><a href="#">Фразовый глагол look</a></li>
                            <li><a href="#">Фразовый глагол move</a></li>
                            <li><a href="#">Фразовый глагол leave</a></li>
                            <li><a href="#">Фразовый глагол do</a></li>
                            <li><a href="#">Фразовый глагол break</a></li>
                            <li><a href="#">Фразовый глагол hold</a></li>
                            <li><a href="#">Фразовый глагол pay</a></li>
                            <li><a href="#">Фразовый глагол keep</a></li>
                            <li><a href="#">Фразовый глагол set</a></li>
                            <li><a href="#">Фразовый глагол turn</a></li>
                            <li><a href="#">Фразовый глагол put</a></li>
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
                            <li><a href="#">Расположение артикля</a></li>
                            <li><a href="#">Артикли с географическими названиями</a></li>
                            <li><a href="#">Артикли с именами собственными</a></li>
                            <li><a href="#">Артикли с личными именами</a></li>
                            <li><a href="#">Артикли с уникальными именами существительными</a></li>
                            <li><a href="#">Артикли с существительными fruit и fish</a></li>
                            <li><a href="#">Артикли с конкретными и абстрактными именами существительными</a></li>
                            <li><a href="#">Артикли с названиями болезней</a></li>
                            <li><a href="#">Артикли с существительными, обозначающими приемы пищи</a></li>
                            <li><a href="#">Артикли с существительными, обозначающими части суток и времена года</a></li>
                            <li><a href="#">Артикли с существительными в функции приложения</a></li>
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
                            <li><a href="#">Прилагательные на -ing и -ed</a></li>
                            <li><a href="#">Употребление so/such</a></li>
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
                            <li><a href="#">Даты и порядковые числительные</a></li>
                            <li><a href="#">Дробные числительные</a></li>
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
                            <li><a href="#">Употребление some, any, no</a></li>
                            <li><a href="#">Употребление much, many, few, little, a lot of, plenty</a></li>
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
                            <li><a href="#">Употребление too/enough</a></li>
                            <li><a href="#">Употребление so/such</a></li>
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
                            <li><a href="#">Like и as в английском языке</a></li>
                            <li><a href="#">Предлоги времени в английском языке: at, in, on</a></li>
                            <li><a href="#">Предлоги места в английском языке: at, in, on</a></li>
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
            <div class="part_10_interjection">
                <input id="tab-one_interjection" type="checkbox" name="tabs">
                <label for="tab-one_interjection">Часть &#8552; - "Междометие"</label>
                <div class="part_10_interjection_list">
                    <nav>
                        <ul class="zebra_interjection">
                            <li><a href="#">Междометия в английском языке</a></li>
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
                            <li><a href="#">Отрицание в английском языке</a></li>
                            <li><a href="#">Безличные предложения</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_11_members_sentence">
                <input id="tab-one_members_sentence" type="checkbox" name="tabs">
                <label for="tab-one_members_sentence">"Члены предложения"</label>
                <div class="part_11_members_sentence_list">
                    <nav>
                        <ul class="zebra_members_sentence">
                            <li><a href="#">Подлежащее</a></li>
                            <li><a href="#">Сказуемое</a></li>
                            <li><a href="#">Согласование сказуемого с подлежащим</a></li>
                            <li><a href="#">Дополнение</a></li>
                            <li><a href="#">Определение</a></li>
                            <li><a href="#">Обстоятельство</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_11_questions_sentence">
                <input id="tab-one_questions_sentence" type="checkbox" name="tabs">
                <label for="tab-one_questions_sentence">"Вопросительные предложения"</label>
                <div class="part_11_questions_sentence_list">
                    <nav>
                        <ul class="zebra_questions_sentence">
                            <li><a href="#">Типы вопросов в английском языке</a></li>
                            <li><a href="#">Общий вопрос</a></li>
                            <li><a href="#">Специальный вопрос</a></li>
                            <li><a href="#">Альтернативный вопрос</a></li>
                            <li><a href="#">Вопрос к подлежащему</a></li>
                            <li><a href="#">Разделительный вопрос</a></li>
                            <li><a href="#">Вопросительные слова</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_11_hard_sentence">
                <input id="tab-one_hard_sentence" type="checkbox" name="tabs">
                <label for="tab-one_hard_sentence">"Сложные предложения"</label>
                <div class="part_11_hard_sentence_list">
                    <nav>
                        <ul class="zebra_hard_sentence">
                            <li><a href="#">Придаточные предложения</a></li>
                            <li><a href="#">Косвенная речь</a></li>
                            <li><a href="#">Согласование времен</a></li>
                            <li><a href="#">Условные предложения</a></li>
                            <li><a href="#">Предложения с I wish</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="part_12_punctuation">
                <input id="tab-one_punctuation" type="checkbox" name="tabs">
                <label for="tab-one_punctuation">Часть &#8554; - "Пунктуация"</label>
                <div class="part_12_punctuation_list">
                    <nav>
                        <ul class="zebra_punctuation">
                            <li><a href="#">Пунктуация в английском языке</a></li>
                            <li><a href="#">Употребление запятых</a></li>
                            <li><a href="#">Точка с запятой, двоеточие и тире</a></li>
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
                    <li class="fot_item"><a href="grammar_authorized.php">Справочник</a></li>
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
