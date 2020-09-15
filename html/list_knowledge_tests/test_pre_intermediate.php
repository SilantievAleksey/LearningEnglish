<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/test_pre_intermediate.css">
    <link rel="stylesheet" href="../../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/chatbot.js"></script>
    <title>Общий тест: уровень Pre-Intermediate</title>
</head>
<body class="page_fix">

<?php
$ot = 0;
$not = 0;
if (isset($_POST['q1'])) { if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q2'])) {if ($_POST['q2'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q3'])) {if ($_POST['q3'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q4'])) {if ($_POST['q4'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q5'])) {if ($_POST['q5'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q6'])) {if ($_POST['q6'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q7'])) {if ($_POST['q7'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q8'])) {if ($_POST['q8'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q9'])) {if ($_POST['q9'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q10'])) {if ($_POST['q10'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q11'])) {if ($_POST['q11'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q12'])) {if ($_POST['q12'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q13'])) {if ($_POST['q13'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q14'])) {if ($_POST['q14'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q15'])) {if ($_POST['q15'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q16'])) {if ($_POST['q16'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q17'])) {if ($_POST['q17'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q18'])) {if ($_POST['q18'] == 'b'){$ot++;} else {$not++;}}
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

<section class="test_pre_intermediate">
    <div class="container_2">
        <div class="pre_intermediate_main">
            <div class="pre_intermediate_main_text">
                <h1>Тест на определение уровня: Pre-Intermediate</h1>
                <p>Ключ к тесту</p>
                <p>
                    Если вы набрали менее 10 правильных ответов – ваш уровень Pre-Intermediate. Сначала закрепите полученные знания.
                    Если вы набрали более 10 правильных ответов – ваш уровень Elementary. Добро пожаловать в мир живого английского!
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
            <form action="test_pre_intermediate.php" method="post">
                <div>
                    <p>1. Do you …… work on Sundays</p>
                    <label><input name="q1" type="radio" value="a">have to</label><br>
                    <label><input name="q1" type="radio" value="b">must</label><br>
                    <label><input name="q1" type="radio" value="c">should</label>
                </div>
                <div>
                    <p>2. I don’t think you …… stay out late</p>
                    <label><input name="q2" type="radio" value="a">must</label><br>
                    <label><input name="q2" type="radio" value="b">should</label><br>
                    <label><input name="q2" type="radio" value="c">shouldn’t</label>
                </div>
                <div>
                    <p>3. You …… bring anything special to the party. </p>
                    <label><input name="q3" type="radio" value="a">don’t have to</label><br>
                    <label><input name="q3" type="radio" value="b">must</label><br>
                    <label><input name="q3" type="radio" value="c">should</label>
                </div>
                <div>
                    <p>4. Naomi will get in touch …… she hears any news.</p>
                    <label><input name="q4" type="radio" value="a">as soon as</label><br>
                    <label><input name="q4" type="radio" value="b">while</label><br>
                    <label><input name="q4" type="radio" value="c">until</label>
                </div>
                <div>
                    <p>5. Please look after the children …… I get home from work.</p>
                    <label><input name="q5" type="radio" value="a">until</label><br>
                    <label><input name="q5" type="radio" value="b">if</label><br>
                    <label><input name="q5" type="radio" value="c">while</label>
                </div>
                <div>
                    <p>6. If I …… some money, I’ll go on holiday next year.</p>
                    <label><input name="q6" type="radio" value="a">’ll save</label><br>
                    <label><input name="q6" type="radio" value="b">saved</label><br>
                    <label><input name="q6" type="radio" value="c">save</label>
                </div>
                <div>
                    <p>7. Will your parents buy you a car if you finish university?’ …… ’.</p>
                    <label><input name="q7" type="radio" value="a">No, won’t</label><br>
                    <label><input name="q7" type="radio" value="b">No, they don’t</label><br>
                    <label><input name="q7" type="radio" value="c">No, they won’t</label>
                </div>
                <div>
                    <p>8. Before I go out tonight, I …… finish this work.</p>
                    <label><input name="q8" type="radio" value="a">’m going to</label><br>
                    <label><input name="q8" type="radio" value="b">going to</label><br>
                    <label><input name="q8" type="radio" value="c">am</label>
                </div>
                <div>
                    <p>9. Do you want to go …… ?</p>
                    <label><input name="q9" type="radio" value="a">dancing</label><br>
                    <label><input name="q9" type="radio" value="b">to dance</label><br>
                    <label><input name="q9" type="radio" value="c">dance</label>
                </div>
                <div>
                    <p>10. Is coffee …… in Kenya?</p>
                    <label><input name="q10" type="radio" value="a">grew</label><br>
                    <label><input name="q10" type="radio" value="b">grown</label><br>
                    <label><input name="q10" type="radio" value="c">grow</label>
                </div>
                <div>
                    <p>11. Since 2001, all Skoda cars …… by Volkswagen.</p>
                    <label><input name="q11" type="radio" value="a">were produced</label><br>
                    <label><input name="q11" type="radio" value="b">are produced</label><br>
                    <label><input name="q11" type="radio" value="c">have been produced</label>
                </div>
                <div>
                    <p>12. ‘Is a lot of paper wasted in your office? ‘ …… ’.</p>
                    <label><input name="q12" type="radio" value="a">Yes, it was</label><br>
                    <label><input name="q12" type="radio" value="b">Yes, it is</label><br>
                    <label><input name="q12" type="radio" value="c">Yes, it has</label>
                </div>
                <div>
                    <p>13. If I …… a famous person, I wouldn’t know what to say.</p>
                    <label><input name="q13" type="radio" value="a">meet</label><br>
                    <label><input name="q13" type="radio" value="b">didn’t meet</label><br>
                    <label><input name="q13" type="radio" value="c">met</label>
                </div>
                <div>
                    <p>14. They …… more money if they saved a little every month.</p>
                    <label><input name="q14" type="radio" value="a">would have</label><br>
                    <label><input name="q14" type="radio" value="b">will have</label><br>
                    <label><input name="q14" type="radio" value="c">would had</label>
                </div>
                <div>
                    <p>15. If you …… me, what would you do?</p>
                    <label><input name="q15" type="radio" value="a">are</label><br>
                    <label><input name="q15" type="radio" value="b">like</label><br>
                    <label><input name="q15" type="radio" value="c">were</label>
                </div>
                <div>
                    <p>16. Emma is very busy so she …… come to the party. She hasn’t decided yet.</p>
                    <label><input name="q16" type="radio" value="a">mustn’t</label><br>
                    <label><input name="q16" type="radio" value="b">shouldn’t</label><br>
                    <label><input name="q16" type="radio" value="c">might not</label>
                </div>
                <div>
                    <p>17. Ed is tired because he …… all night.</p>
                    <label><input name="q17" type="radio" value="a">hasn’t worked</label><br>
                    <label><input name="q17" type="radio" value="b">has been working</label><br>
                    <label><input name="q17" type="radio" value="c">is working</label>
                </div>
                <div>
                    <p>18. You’ve got a lot of bags. …… you …… ?</p>
                    <label><input name="q18" type="radio" value="a">Do / go shopping?</label><br>
                    <label><input name="q18" type="radio" value="b">Have / been shopping</label><br>
                    <label><input name="q18" type="radio" value="c">Have / shopped</label>
                </div>
                <div>
                    <p>19. Dan was taken to hospital because he …… his leg.</p>
                    <label><input name="q19" type="radio" value="a">breaks</label><br>
                    <label><input name="q19" type="radio" value="b">has broken</label><br>
                    <label><input name="q19" type="radio" value="c">had broken</label>
                </div>
                <div>
                    <p>20. ‘Had they met Kathy before the party‘. ‘Yes, …… ’.</p>
                    <label><input name="q20" type="radio" value="a">she had</label><br>
                    <label><input name="q20" type="radio" value="b">they had</label><br>
                    <label><input name="q20" type="radio" value="c">they did</label>
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