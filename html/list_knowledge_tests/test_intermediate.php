<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/test_intermediate.css">
    <link rel="stylesheet" href="../../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/chatbot.js"></script>
    <title>Общий тест: уровень Intermediate</title>
</head>
<body class="page_fix">

<?php
$ot = 0;
$not = 0;
if (isset($_POST['q1'])) { if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q2'])) {if ($_POST['q2'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q3'])) {if ($_POST['q3'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q4'])) {if ($_POST['q4'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q5'])) {if ($_POST['q5'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q6'])) {if ($_POST['q6'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q7'])) {if ($_POST['q7'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q8'])) {if ($_POST['q8'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q9'])) {if ($_POST['q9'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q10'])) {if ($_POST['q10'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q11'])) {if ($_POST['q11'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q12'])) {if ($_POST['q12'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q13'])) {if ($_POST['q13'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q14'])) {if ($_POST['q14'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q15'])) {if ($_POST['q15'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q16'])) {if ($_POST['q16'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q17'])) {if ($_POST['q17'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q18'])) {if ($_POST['q18'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q19'])) {if ($_POST['q19'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q20'])) {if ($_POST['q20'] == 'c'){$ot++;} else {$not++;}}
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

<section class="test_intermediate">
    <div class="container_2">
        <div class="intermediate_main">
            <div class="intermediate_main_text">
                <h1>Тест на определение уровня: Intermediate</h1>
                <p>Ключ к тесту</p>
                <p>
                    Если вы набрали менее 10 правильных ответов – ваш уровень Intermediate. Сначала закрепите полученные знания.
                    Если вы набрали более 10 правильных ответов – ваш уровень Pre-Intermediate. Добро пожаловать в мир живого английского!
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
            <form action="test_intermediate.php" method="post">
                <div>
                    <p>1. I …… the Star Wars films.</p>
                    <label><input name="q1" type="radio" value="a">have never seen</label><br>
                    <label><input name="q1" type="radio" value="b">have ever seen</label><br>
                    <label><input name="q1" type="radio" value="c">have never saw</label>
                </div>
                <div>
                    <p>2. They …… for Google …… 2004.</p>
                    <label><input name="q2" type="radio" value="a">worked / for</label><br>
                    <label><input name="q2" type="radio" value="b">’ve worked / since</label><br>
                    <label><input name="q2" type="radio" value="c">’re working / since</label>
                </div>
                <div>
                    <p>3. …… Neil …… that he didn’t get the job?</p>
                    <label><input name="q3" type="radio" value="a">Did / tell</label><br>
                    <label><input name="q3" type="radio" value="b">Have / told</label><br>
                    <label><input name="q3" type="radio" value="c">Has / been told</label>
                </div>
                <div>
                    <p>4. If you …… that expensive car, you …… enough money to go on holiday.</p>
                    <label><input name="q4" type="radio" value="a">buy / won’t have</label><br>
                    <label><input name="q4" type="radio" value="b">bought / don’t have</label><br>
                    <label><input name="q4" type="radio" value="c">don’t buy / won’t have</label>
                </div>
                <div>
                    <p>5. What …… if you …… a mobile phone? </p>
                    <label><input name="q5" type="radio" value="a">will you do / haven’t</label><br>
                    <label><input name="q5" type="radio" value="b">would you did / had</label><br>
                    <label><input name="q5" type="radio" value="c">would you do / didn’t have</label>
                </div>
                <div>
                    <p>6. Alison has worked for a month without a day off — she …… be exhausted.</p>
                    <label><input name="q6" type="radio" value="a">might</label><br>
                    <label><input name="q6" type="radio" value="b">must</label><br>
                    <label><input name="q6" type="radio" value="c">can’t</label>
                </div>
                <div>
                    <p>7. I know he speaks French, German and Italian so he …… be Swiss.</p>
                    <label><input name="q7" type="radio" value="a">can’t</label><br>
                    <label><input name="q7" type="radio" value="b">could</label><br>
                    <label><input name="q7" type="radio" value="c">should</label>
                </div>
                <div>
                    <p>8. Hundreds of trees were blown over in the night so the wind …… have been very strong.</p>
                    <label><input name="q8" type="radio" value="a">can’t</label><br>
                    <label><input name="q8" type="radio" value="b">could</label><br>
                    <label><input name="q8" type="radio" value="c">must</label>
                </div>
                <div>
                    <p>9. “I’m not very sociable. …… .” </p>
                    <label><input name="q9" type="radio" value="a">I don’t</label><br>
                    <label><input name="q9" type="radio" value="b">So am I</label><br>
                    <label><input name="q9" type="radio" value="c">Neither am I</label>
                </div>
                <div>
                    <p>10. “Sorry I’m late. …… for a long time?”</p>
                    <label><input name="q10" type="radio" value="a">Have you waited</label><br>
                    <label><input name="q10" type="radio" value="b">Are you waiting</label><br>
                    <label><input name="q10" type="radio" value="c">Have you been waiting</label>
                </div>
                <div>
                    <p>11. Leo’s French isn’t very good. He …… it	for very long.</p>
                    <label><input name="q11" type="radio" value="a">has been learning</label><br>
                    <label><input name="q11" type="radio" value="b">hasn’t been learning</label><br>
                    <label><input name="q11" type="radio" value="c">hasn’t learned</label>
                </div>
                <div>
                    <p>12. Ellen …… that she needs to do more exercise.</p>
                    <label><input name="q12" type="radio" value="a">has been realizing</label><br>
                    <label><input name="q12" type="radio" value="b">is realized</label><br>
                    <label><input name="q12" type="radio" value="c">has realized</label>
                </div>
                <div>
                    <p>13. Henry worked for the bank …… 2001 and 2006.</p>
                    <label><input name="q13" type="radio" value="a">between</label><br>
                    <label><input name="q13" type="radio" value="b">while</label><br>
                    <label><input name="q13" type="radio" value="c">until</label>
                </div>
                <div>
                    <p>14. Could you tell me where …… ?</p>
                    <label><input name="q14" type="radio" value="a">the library is</label><br>
                    <label><input name="q14" type="radio" value="b">is the library</label><br>
                    <label><input name="q14" type="radio" value="c">if the library</label>
                </div>
                <div>
                    <p>15. Do you know …… this train goes to Cardiff?</p>
                    <label><input name="q15" type="radio" value="a">does</label><br>
                    <label><input name="q15" type="radio" value="b">if</label><br>
                    <label><input name="q15" type="radio" value="c">how</label>
                </div>
                <div>
                    <p>16. It’s lovely day, …… ?</p>
                    <label><input name="q16" type="radio" value="a">is it</label><br>
                    <label><input name="q16" type="radio" value="b">does it</label><br>
                    <label><input name="q16" type="radio" value="c">isn’t it</label>
                </div>
                <div>
                    <p>17. John …… your school, wasn’t he?</p>
                    <label><input name="q17" type="radio" value="a">was at</label><br>
                    <label><input name="q17" type="radio" value="b">went to</label><br>
                    <label><input name="q17" type="radio" value="c">wasn’t at</label>
                </div>
                <div>
                    <p>18. The interviewer asked …… drive.</p>
                    <label><input name="q18" type="radio" value="a">can I</label><br>
                    <label><input name="q18" type="radio" value="b">if I could</label><br>
                    <label><input name="q18" type="radio" value="c">if I was</label>
                </div>
                <div>
                    <p>19. The dentist …… to make another appointment.</p>
                    <label><input name="q19" type="radio" value="a">told</label><br>
                    <label><input name="q19" type="radio" value="b">said me</label><br>
                    <label><input name="q19" type="radio" value="c">told me</label>
                </div>
                <div>
                    <p>20. The police officer …… the robber to put down his gun and put his hands above his head.</p>
                    <label><input name="q20" type="radio" value="a">ordered</label><br>
                    <label><input name="q20" type="radio" value="b">advised</label><br>
                    <label><input name="q20" type="radio" value="c">reminded</label>
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