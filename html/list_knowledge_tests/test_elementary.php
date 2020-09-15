<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/test_elementary.css">
    <link rel="stylesheet" href="../../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/chatbot.js"></script>
    <script src="../../js/translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <title>Общий тест: уровень Elementary</title>
</head>
<body class="page_fix">

<?php
$ot = 0;
$not = 0;
if (isset($_POST['q1'])) { if ($_POST['q1'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q2'])) {if ($_POST['q2'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q3'])) {if ($_POST['q3'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q4'])) {if ($_POST['q4'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q5'])) {if ($_POST['q5'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q6'])) {if ($_POST['q6'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q7'])) {if ($_POST['q7'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q8'])) {if ($_POST['q8'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q9'])) {if ($_POST['q9'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q10'])) {if ($_POST['q10'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q11'])) {if ($_POST['q11'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q12'])) {if ($_POST['q12'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q13'])) {if ($_POST['q13'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q14'])) {if ($_POST['q14'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q15'])) {if ($_POST['q15'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q16'])) {if ($_POST['q16'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q17'])) {if ($_POST['q17'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q18'])) {if ($_POST['q18'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q19'])) {if ($_POST['q19'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q20'])) {if ($_POST['q20'] == 'b'){$ot++;} else {$not++;}}
?>

<header>
    <div class="container">
        <div class="menu_intro">
            <div class="logo">
                <a href="#"><img src="../../images/Logo.png" alt="Logo"></a>
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
                                            <img src="../../images/RussiaLanguage.png" alt="RussiaLanguage">
                                            <p>Русский</p>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="en" data-google-lang="en">
                                            <img src="../../images/EnglishLanguage.png" alt="EnglishLanguage">
                                            <p>English</p>
                                        </button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <a href="../register.php" class="reg" type="button">Регистрация</a>
                <a href="../login.php" class="login" type="button">Вход</a>
            </div>
        </div>
        <div class="menu_bar">
            <div class="menu">
                <nav>
                    <ul class="menu_items">
                        <li><a href="../main.php" class="home"></a></li>
                        <li class="item"><a href="../grammar.php">Справочник</a></li>
                        <li class="item"><a href="../tests_for_unauthorized.php">Тесты</a></li>
                        <li class="item"><a href="../vocabulary.php">Словарь</a></li>
                        <li class="item"><a href="../articles.php">Статьи</a></li>
                        <li class="item"><a href="../references.php">Источники</a></li>
                    </ul>
                </nav>
            </div>
            <div class="search">
                <form action="../search.php" method="post">
                    <input type="search" placeholder="Искать на сайте..." name="main_search">
                    <button type="submit" name="search_word"></button>
                </form>
            </div>
        </div>
    </div>
</header>

<section class="test_elementary">
    <div class="container_2">
        <div class="elementary_main">
            <div class="elementary_main_text">
                <h1>Тест на определение уровня: Elementary</h1>
                <p>Ключ к тесту</p>
                <p>
                    Если вы набрали менее 10 правильных ответов – ваш уровень Elementary. Сначала закрепите полученные знания.
                    Если вы набрали более 10 правильных ответов – ваш уровень Beginner. Добро пожаловать в мир живого английского!
                </p>
            </div>
            <div id="list_results">
                <?php
                # Если кнопка нажата
                if( isset( $_POST['btn_start']))
                {
                    echo '<p>&emsp;Результаты: </p>';
                    echo "<p>&emsp;&emsp;- Правильных ответов: $ot </p>";
                    echo "<p>&emsp;&emsp;- Неправильных ответов: " . (20 - $ot) . "</p>";
                }
                ?>
            </div>
            <form action="test_elementary.php" method="post">
                <div>
                    <p>1. Anna and Kate …… to the cinema last Sunday.</p>
                    <label><input name="q1" type="radio" value="a">didn’t went</label><br>
                    <label><input name="q1" type="radio" value="b">don’t go</label><br>
                    <label><input name="q1" type="radio" value="c">didn’t go</label>
                </div>
                <div>
                    <p>2. I had breakfast …… ago.</p>
                    <label><input name="q2" type="radio" value="a">this morning</label><br>
                    <label><input name="q2" type="radio" value="b">three hours</label><br>
                    <label><input name="q2" type="radio" value="c">7.30 a.m.</label>
                </div>
                <div>
                    <p>3. When …… you last …… tennis?</p>
                    <label><input name="q3" type="radio" value="a">did/play</label><br>
                    <label><input name="q3" type="radio" value="b">do/play</label><br>
                    <label><input name="q3" type="radio" value="c">did/played</label>
                </div>
                <div>
                    <p>4. …… you like …… coffee?</p>
                    <label><input name="q4" type="radio" value="a">do/any</label><br>
                    <label><input name="q4" type="radio" value="b">are/some</label><br>
                    <label><input name="q4" type="radio" value="c">would/some</label>
                </div>
                <div>
                    <p>5. There isn’t …… milk in the fridge.</p>
                    <label><input name="q5" type="radio" value="a">many</label><br>
                    <label><input name="q5" type="radio" value="b">much</label><br>
                    <label><input name="q5" type="radio" value="c">a</label>
                </div>
                <div>
                    <p>6. Have you got …… brothers?</p>
                    <label><input name="q6" type="radio" value="a">some</label><br>
                    <label><input name="q6" type="radio" value="b">any</label><br>
                    <label><input name="q6" type="radio" value="c">the</label>
                </div>
                <div>
                    <p>7. The buildings in Venice are …… the buildings in New York.</p>
                    <label><input name="q7" type="radio" value="a">older than</label><br>
                    <label><input name="q7" type="radio" value="b">more older than</label><br>
                    <label><input name="q7" type="radio" value="c">much old than</label>
                </div>
                <div>
                    <p>8. Vienna is …… city in Austria.</p>
                    <label><input name="q8" type="radio" value="a">the most beautiful</label><br>
                    <label><input name="q8" type="radio" value="b">the beautiful lest</label><br>
                    <label><input name="q8" type="radio" value="c">more beautiful than</label>
                </div>
                <div>
                    <p>9. This restaurant is very, very good. It's …… restaurant in London.</p>
                    <label><input name="q9" type="radio" value="a">the better</label><br>
                    <label><input name="q9" type="radio" value="b">the good</label><br>
                    <label><input name="q9" type="radio" value="c">the best</label>
                </div>
                <div>
                    <p>10. I …… a jumper and a jacket because it's cold today.</p>
                    <label><input name="q10" type="radio" value="a">wear</label><br>
                    <label><input name="q10" type="radio" value="b">'s wearing</label><br>
                    <label><input name="q10" type="radio" value="c">'m wearing</label>
                </div>
                <div>
                    <p>11. …… Jim …… today?</p>
                    <label><input name="q11" type="radio" value="a">Do / work</label><br>
                    <label><input name="q11" type="radio" value="b">Is / working</label><br>
                    <label><input name="q11" type="radio" value="c">Does / works</label>
                </div>
                <div>
                    <p>12. Look, it's very cloudy. It …… .</p>
                    <label><input name="q12" type="radio" value="a">'s going to rain</label><br>
                    <label><input name="q12" type="radio" value="b">rainy</label><br>
                    <label><input name="q12" type="radio" value="c">raining</label>
                </div>
                <div>
                    <p>13. When …… Polly …… with her friend in Madrid?</p>
                    <label><input name="q13" type="radio" value="a">does / going to stay</label><br>
                    <label><input name="q13" type="radio" value="b">— / is going to stay</label><br>
                    <label><input name="q13" type="radio" value="c">is / going to stay</label>
                </div>
                <div>
                    <p>14. I'm going to Egypt …… the pyramids.</p>
                    <label><input name="q14" type="radio" value="a">seeing</label><br>
                    <label><input name="q14" type="radio" value="b">to see</label><br>
                    <label><input name="q14" type="radio" value="c">going to see</label>
                </div>
                <div>
                    <p>15. …… did you buy your jacket?' 'At a shop in town.'</p>
                    <label><input name="q15" type="radio" value="a">When</label><br>
                    <label><input name="q15" type="radio" value="b">Why</label><br>
                    <label><input name="q15" type="radio" value="c">Where</label>
                </div>
                <div>
                    <p>16. Let's go for a …… swim.</p>
                    <label><input name="q16" type="radio" value="a">quick</label><br>
                    <label><input name="q16" type="radio" value="b">badly</label><br>
                    <label><input name="q16" type="radio" value="c">well</label>
                </div>
                <div>
                    <p>17. …… you ever …… Mexican food?</p>
                    <label><input name="q17" type="radio" value="a">Have / eat</label><br>
                    <label><input name="q17" type="radio" value="b">Have / ate</label><br>
                    <label><input name="q17" type="radio" value="c">Have / eaten</label>
                </div>
                <div>
                    <p>18. Olivia …… to Rome.</p>
                    <label><input name="q18" type="radio" value="a">has never been</label><br>
                    <label><input name="q18" type="radio" value="b">has ever been</label><br>
                    <label><input name="q18" type="radio" value="c">hasn't never been</label>
                </div>
                <div>
                    <p>19. 'I've met Robbie Williams.' 'When …… ?'</p>
                    <label><input name="q19" type="radio" value="a">have you met</label><br>
                    <label><input name="q19" type="radio" value="b">did you met him</label><br>
                    <label><input name="q19" type="radio" value="c">did you meet him</label>
                </div>
                <div>
                    <p>20. Raquel and James have …… had a baby.</p>
                    <label><input name="q20" type="radio" value="a">yet</label><br>
                    <label><input name="q20" type="radio" value="b">just</label><br>
                    <label><input name="q20" type="radio" value="c">ever</label>
                </div>
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
                    <li class="fot_item"><a href="../main.php">Главная</a></li>
                    <li class="fot_item"><a href="../grammar.php">Справочник</a></li>
                    <li class="fot_item"><a href="../tests_for_unauthorized.php">Тесты</a></li>
                    <li class="fot_item"><a href="../vocabulary.php">Словарь</a></li>
                    <li class="fot_item"><a href="../articles.php">Статьи</a></li>
                    <li class="fot_item"><a href="../references.php">Источники</a></li>
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