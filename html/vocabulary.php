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
    <link rel="stylesheet" href="../css/vocabulary.css">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/translate.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/chatbot.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <title>Словарь</title>

    <style>
        .hide {
            display: none;
        }

    </style>

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
                    <li><a href="#">Словарь</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="vocabulary">
    <div class="container_2">
        <div class="vocabulary_main">
            <div class="vocabulary_text">
                <h1 data-translate-key="VOCABULARY">Словарь</h1>
                <p>
                    В этом разделе выложены 4500 популярных английских слов. Выучив их, вы сможете понимать 95% английского текста.
                    <br> Выучив 1000 слов, вы овладеете словарным минимумом по английскому и будете чувствовать себя довольно уверенно в англоязычной стране.
                     Не пытайтесь выучить всё сразу. 50-100 слов в день достаточно, просто возвращайтесь в этим словам ежедневно и будет вам счастье:)
                </p>
                <h1>Все слова</h1>
            </div>
            <div class="vocabulary_search">
                <form action="vocabulary.php" method="post">
                    <input type="search" id="input" placeholder="Поиск слова..." name="search_text">
                    <button type="submit" name="search_words"></button>
                </form>
            </div>
            <div class="all_words">
                <nav>
                    <ul>
                        <li class="btn_ground"><button value="A" id="words_A">A</button></li>
                        <li class="btn_ground"><button value="B" id="words_B">B</button></li>
                        <li class="btn_ground"><button value="C" id="words_C">C</button></li>
                        <li class="btn_ground"><button value="D" id="words_D">D</button></li>
                        <li class="btn_ground"><button value="E" id="words_E">E</button></li>
                        <li class="btn_ground"><button value="F" id="words_F">F</button></li>
                        <li class="btn_ground"><button value="G" id="words_G">G</button></li>
                        <li class="btn_ground"><button value="H" id="words_H">H</button></li>
                        <li class="btn_ground"><button value="I" id="words_I">I</button></li>
                        <li class="btn_ground"><button value="J" id="words_J">J</button></li>
                        <li class="btn_ground"><button value="K" id="words_K">K</button></li>
                        <li class="btn_ground"><button value="L" id="words_L">L</button></li>
                        <li class="btn_ground"><button value="M" id="words_M">M</button></li>
                        <li class="btn_ground"><button value="N" id="words_N">N</button></li>
                        <li class="btn_ground"><button value="O" id="words_O">O</button></li>
                        <li class="btn_ground"><button value="P" id="words_O">P</button></li>
                        <li class="btn_ground"><button value="Q" id="words_Q">Q</button></li>
                        <li class="btn_ground"><button value="R" id="words_R">R</button></li>
                        <li class="btn_ground"><button value="S" id="words_S">S</button></li>
                        <li class="btn_ground"><button value="T" id="words_T">T</button></li>
                        <li class="btn_ground"><button value="U" id="words_U">U</button></li>
                        <li class="btn_ground"><button value="V" id="words_V">V</button></li>
                        <li class="btn_ground"><button value="W" id="words_W">W</button></li>
                        <li class="btn_ground"><button value="X" id="words_X">X</button></li>
                        <li class="btn_ground"><button value="Y" id="words_Y">Y</button></li>
                        <li class="btn_ground"><button value="Z" id="words_Z">Z</button></li>
                    </ul>
                </nav>
            </div>
            <div id="vocabulary_words_A" class="list_words">
                <p>A</p>
                <a href="#" class="list_item">able</a>
                <a href="#" class="list_item">about</a>
                <a href="#" class="list_item">abstract</a>
                <a href="#" class="list_item">absence</a>
                <a href="#" class="list_item">absolute</a>
                <a href="#" class="list_item">absurd</a>
                <a href="#" class="list_item">accent</a>
                <a href="#" class="list_item">accident</a>
                <a href="#" class="list_item">according</a>
                <a href="#" class="list_item">account</a>
                <a href="#" class="list_item">act</a>
                <a href="#" class="list_item">acting</a>
                <a href="#" class="list_item">actress</a>
                <a href="#" class="list_item">actually</a>
                <a href="#" class="list_item">address</a>
                <a href="#" class="list_item">advance</a>
                <a href="#" class="list_item">advantage</a>
                <a href="#" class="list_item">advertise</a>
                <a href="#" class="list_item">advertisement</a>
                <a href="#" class="list_item">advise</a>
                <a href="#" class="list_item">afford</a>
                <a href="#" class="list_item">afraid</a>
                <a href="#" class="list_item">after</a>
                <a href="#" class="list_item">afternoon</a>
                <a href="#" class="list_item">again</a>
                <a href="#" class="list_item">agency</a>
                <a href="#" class="list_item">ago</a>
                <a href="#" class="list_item">agree</a>
                <a href="#" class="list_item">ahead</a>
                <a href="#" class="list_item">aid</a>
                <a href="#" class="list_item">alcohol</a>
                <a href="#" class="list_item">all</a>
                <a href="#" class="list_item">allot</a>
                <a href="#" class="list_item">allow</a>
                <a href="#" class="list_item">almost</a>
                <a href="#" class="list_item">alone</a>
                <a href="#" class="list_item">along</a>
                <a href="#" class="list_item">Alps</a>
                <a href="#" class="list_item">alternate</a>
                <a href="#" class="list_item">altogether</a>
                <a href="#" class="list_item">always</a>
                <a href="#" class="list_item">amateur</a>
                <a href="#" class="list_item">ancient</a>
                <a href="#" class="list_item">anniversary</a>
                <a href="#" class="list_item">another</a>
                <a href="#" class="list_item">answer</a>
                <a href="#" class="list_item">ant</a>
                <a href="#" class="list_item">anyone</a>
                <a href="#" class="list_item">anything</a>
                <a href="#" class="list_item">anyway</a>
                <a href="#" class="list_item">appartment</a>
                <a href="#" class="list_item">apparently</a>
                <a href="#" class="list_item">appear</a>
                <a href="#" class="list_item">appetite</a>
                <a href="#" class="list_item">apple</a>
                <a href="#" class="list_item">application</a>
                <a href="#" class="list_item">apply</a>
                <a href="#" class="list_item">approach</a>
                <a href="#" class="list_item">approval</a>
                <a href="#" class="list_item">archaeological</a>
                <a href="#" class="list_item">architect</a>
                <a href="#" class="list_item">arm</a>
                <a href="#" class="list_item">army</a>
                <a href="#" class="list_item">arrange</a>
                <a href="#" class="list_item">arrangements</a>
                <a href="#" class="list_item">arrive</a>
                <a href="#" class="list_item">article</a>
                <a href="#" class="list_item">artificial</a>
                <a href="#" class="list_item">as well</a>
                <a href="#" class="list_item">aside</a>
                <a href="#" class="list_item">ask</a>
                <a href="#" class="list_item">asleep</a>
                <a href="#" class="list_item">assembly</a>
                <a href="#" class="list_item">assistant</a>
                <a href="#" class="list_item">association</a>
                <a href="#" class="list_item">assure</a>
                <a href="#" class="list_item">astronomy</a>
                <a href="#" class="list_item">ate</a>
                <a href="#" class="list_item">attain</a>
                <a href="#" class="list_item">attention</a>
                <a href="#" class="list_item">attic</a>
                <a href="#" class="list_item">attractions</a>
                <a href="#" class="list_item">attractive</a>
                <a href="#" class="list_item">audience</a>
                <a href="#" class="list_item">aunt</a>
                <a href="#" class="list_item">Austrian</a>
                <a href="#" class="list_item">avenue</a>
                <a href="#" class="list_item">avoid</a>
                <a href="#" class="list_item">away</a>
                <a href="#" class="list_item">awful</a>
            </div>
            <div id="vocabulary_words_B" class="list_words">
                <p>B</p>
                <a href="#" class="list_item">back</a>
                <a href="#" class="list_item">background</a>
                <a href="#" class="list_item">backward</a>
            </div>
            <div id="vocabulary_words_C" class="list_words">
                <p>C</p>
                <a href="#" class="list_item">cafe</a>
                <a href="#" class="list_item">call</a>
                <a href="#" class="list_item">calm</a>
            </div>
            <div id="vocabulary_words_D" class="list_words">
                <p>D</p>
                <a href="#" class="list_item">daily</a>
                <a href="#" class="list_item">damage</a>
                <a href="#" class="list_item">darling</a>
            </div>
            <div id="vocabulary_words_E" class="list_words">
                <p>E</p>
                <a href="#" class="list_item">early</a>
                <a href="#" class="list_item">earn</a>
                <a href="#" class="list_item">earth</a>
            </div>
            <div id="vocabulary_words_F" class="list_words">
                <p>F</p>
                <a href="#" class="list_item">face</a>
                <a href="#" class="list_item">fact</a>
                <a href="#" class="list_item">fade</a>
            </div>
            <div id="vocabulary_words_G" class="list_words">
                <p>G</p>
                <a href="#" class="list_item">gadget</a>
                <a href="#" class="list_item">gallon</a>
                <a href="#" class="list_item">game</a>
            </div>
            <div id="vocabulary_words_H" class="list_words">
                <p>H</p>
                <a href="#">half</a>
                <a href="#">hall</a>
                <a href="#">hammer</a>
            </div>
            <div id="vocabulary_words_I" class="list_words">
                <p>I</p>
                <a href="#" class="list_item">idea</a>
                <a href="#" class="list_item">identity</a>
                <a href="#" class="list_item">ill</a>
            </div>
            <div id="vocabulary_words_J" class="list_words">
                <p>J</p>
                <a href="#" class="list_item">jack</a>
                <a href="#" class="list_item">job</a>
                <a href="#" class="list_item">join</a>
            </div>
            <div id="vocabulary_words_K" class="list_words">
                <p>K</p>
                <a href="#" class="list_item">keep</a>
                <a href="#" class="list_item">kept</a>
                <a href="#" class="list_item">kettle</a>
            </div>
            <div id="vocabulary_words_L" class="list_words">
                <p>L</p>
                <a href="#" class="list_item">lady</a>
                <a href="#" class="list_item">lake</a>
                <a href="#" class="list_item">lamb</a>
            </div>
            <div id="vocabulary_words_M" class="list_words">
                <p>M</p>
                <a href="#" class="list_item">madam</a>
                <a href="#" class="list_item">made</a>
                <a href="#" class="list_item">main</a>
            </div>
            <div id="vocabulary_words_N" class="list_words">
                <p>N</p>
                <a href="#" class="list_item">nail</a>
                <a href="#" class="list_item">name</a>
                <a href="#" class="list_item">nappy</a>
            </div>
            <div id="vocabulary_words_O" class="list_words">
                <p>O</p>
                <a href="#" class="list_item">object</a>
                <a href="#" class="list_item">objection</a>
                <a href="#" class="list_item">obvious</a>
            </div>
            <div id="vocabulary_words_P" class="list_words">
                <p>P</p>
                <a href="#" class="list_item">pace</a>
                <a href="#" class="list_item">pack</a>
                <a href="#" class="list_item">packet</a>
            </div>
            <div id="vocabulary_words_Q" class="list_words">
                <p>Q</p>
                <a href="#" class="list_item">quality</a>
                <a href="#" class="list_item">queer</a>
                <a href="#" class="list_item">question</a>
            </div>
            <div id="vocabulary_words_R" class="list_words">
                <p>R</p>
                <a href="#" class="list_item">radiator</a>
                <a href="#" class="list_item">radical</a>
                <a href="#" class="list_item">rain</a>
            </div>
            <div id="vocabulary_words_S" class="list_words">
                <p>S</p>
                <a href="#" class="list_item">sad</a>
                <a href="#" class="list_item">safe</a>
                <a href="#" class="list_item">said</a>
            </div>
            <div id="vocabulary_words_T" class="list_words">
                <p>T</p>
                <a href="#" class="list_item">table</a>
                <a href="#" class="list_item">take</a>
                <a href="#" class="list_item">talk</a>
            </div>
            <div id="vocabulary_words_U" class="list_words">
                <p>U</p>
                <a href="#" class="list_item">ugly</a>
                <a href="#" class="list_item">umbrella</a>
                <a href="#" class="list_item">uncle</a>
            </div>
            <div id="vocabulary_words_V" class="list_words">
                <p>V</p>
                <a href="#" class="list_item">valuable</a>
                <a href="#" class="list_item">value</a>
                <a href="#" class="list_item">variety</a>
            </div>
            <div id="vocabulary_words_W" class="list_words">
                <p>W</p>
                <a href="#" class="list_item">waist</a>
                <a href="#" class="list_item">wait</a>
                <a href="#" class="list_item">waitress</a>
            </div>
            <div id="vocabulary_words_X" class="list_words">
                <p>X</p>
                <a href="#" class="list_item">xanthous</a>
                <a href="#" class="list_item">xenial</a>
                <a href="#" class="list_item">xyloid</a>
            </div>
            <div id="vocabulary_words_Y" class="list_words">
                <p>Y</p>
                <a href="#" class="list_item">yard</a>
                <a href="#" class="list_item">year</a>
                <a href="#" class="list_item">yellow</a>
            </div>
            <div id="vocabulary_words_Z" class="list_words">
                <p>Z</p>
                <a href="#" class="list_item">zebra</a>
                <a href="#" class="list_item">zeal</a>
                <a href="#" class="list_item">zoo</a>
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