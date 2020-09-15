<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/test_advanced.css">
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
    <title>Общий тест: уровень Advanced</title>
</head>
<body class="page_fix">

<?php
$ot = 0;
$not = 0;
if (isset($_POST['q1'])) { if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q2'])) {if ($_POST['q2'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q3'])) {if ($_POST['q3'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q4'])) {if ($_POST['q4'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q5'])) {if ($_POST['q5'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q6'])) {if ($_POST['q6'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q7'])) {if ($_POST['q7'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q8'])) {if ($_POST['q8'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q9'])) {if ($_POST['q9'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q10'])) {if ($_POST['q10'] == 'b'){$ot++;} else {$not++;}}
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

<section class="test_advanced">
    <div class="container_2">
        <div class="advanced_main">
            <div class="advanced_main_text">
                <h1>Тест на определение уровня: Advanced</h1>
                <p>Ключ к тесту</p>
                <p>
                    Если вы набрали менее 7 правильных ответов, то вы имеете менее значимымый словарным запасом.
                    Если вы набрали более 7 правильных ответов, то вы имеете хороший словарный запас.
                </p>
            </div>
            <div id="list_results">
                <?php
                # Если кнопка нажата
                if( isset( $_POST['btn_start']))
                {
                    echo '<p>&emsp;Результаты: </p>';
                    echo "<p>&emsp;&emsp;- Правильных ответов: $ot </p>";
                    echo "<p>&emsp;&emsp;- Неправильных ответов: " . (10 - $ot) .  "</p>";
                }
                ?>
            </div>
            <form action="test_words.php" method="post">
                <div>
                    <p>1. Переведите слово research.</p>
                    <label><input name="q1" type="radio" value="a">исследование</label><br>
                    <label><input name="q1" type="radio" value="b">путешествие</label><br>
                    <label><input name="q1" type="radio" value="c">наука</label>
                </div>
                <div>
                    <p>2. Переведите слово report.</p>
                    <label><input name="q2" type="radio" value="a">доклад</label><br>
                    <label><input name="q2" type="radio" value="b">персона</label><br>
                    <label><input name="q2" type="radio" value="c">замечание</label>
                </div>
                <div>
                    <p>3. Переведите слово government.</p>
                    <label><input name="q3" type="radio" value="a">собственность</label><br>
                    <label><input name="q3" type="radio" value="b">правительство</label><br>
                    <label><input name="q3" type="radio" value="c">нежвижимость</label>
                </div>
                <div>
                    <p>4. Переведите слово reason.</p>
                    <label><input name="q4" type="radio" value="a">причина</label><br>
                    <label><input name="q4" type="radio" value="b">требование</label><br>
                    <label><input name="q4" type="radio" value="c">замечание</label>
                </div>
                <div>
                    <p>5. Переведите слово own.</p>
                    <label><input name="q5" type="radio" value="a">важный</label><br>
                    <label><input name="q5" type="radio" value="b">собственный</label><br>
                    <label><input name="q5" type="radio" value="c">великий</label>
                </div>
                <div>
                    <p>6. Переведите слово possible.</p>
                    <label><input name="q6" type="radio" value="a">влиятельный</label><br>
                    <label><input name="q6" type="radio" value="b">длинный</label><br>
                    <label><input name="q6" type="radio" value="c">возможный</label>
                </div>
                <div>
                    <p>7. Переведите слово suggest.</p>
                    <label><input name="q7" type="radio" value="a">предлагать</label><br>
                    <label><input name="q7" type="radio" value="b">забирать</label><br>
                    <label><input name="q7" type="radio" value="c">помогать</label>
                </div>
                <div>
                    <p>8. Переведите слово seem.</p>
                    <label><input name="q8" type="radio" value="a">наблюдать</label><br>
                    <label><input name="q8" type="radio" value="b">волноваться</label><br>
                    <label><input name="q8" type="radio" value="c">казаться</label>
                </div>
                <div>
                    <p>9. Переведите слово provide.</p>
                    <label><input name="q9" type="radio" value="a">надеяться</label><br>
                    <label><input name="q9" type="radio" value="b">обеспечивать</label><br>
                    <label><input name="q9" type="radio" value="c">использовать</label>
                </div>
                <div>
                    <p>10. Переведите слово bring.</p>
                    <label><input name="q10" type="radio" value="a">помогать</label><br>
                    <label><input name="q10" type="radio" value="b">нести</label><br>
                    <label><input name="q10" type="radio" value="c">поднимать</label>
                </div>
                <div>
                <input type = "submit" name = "btn_start" value = "Результат">
            </form>
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