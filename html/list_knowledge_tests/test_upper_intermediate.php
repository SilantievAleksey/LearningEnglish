<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/test_upper_intermediate.css">
    <link rel="stylesheet" href="../../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/chatbot.js"></script>
    <title>Общий тест: уровень Upper-Intermediate</title>
</head>
<body class="page_fix">

<?php
$ot = 0;
$not = 0;
if (isset($_POST['q1'])) { if ($_POST['q1'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q2'])) {if ($_POST['q2'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q3'])) {if ($_POST['q3'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q4'])) {if ($_POST['q4'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q5'])) {if ($_POST['q5'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q6'])) {if ($_POST['q6'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q7'])) {if ($_POST['q7'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q8'])) {if ($_POST['q8'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q9'])) {if ($_POST['q9'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q10'])) {if ($_POST['q10'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q11'])) {if ($_POST['q11'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q12'])) {if ($_POST['q12'] == 'b'){$ot++;} else {$not++;}}
if (isset($_POST['q13'])) {if ($_POST['q13'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q14'])) {if ($_POST['q14'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q15'])) {if ($_POST['q15'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q16'])) {if ($_POST['q16'] == 'c'){$ot++;} else {$not++;}}
if (isset($_POST['q17'])) {if ($_POST['q17'] == 'a'){$ot++;} else {$not++;}}
if (isset($_POST['q18'])) {if ($_POST['q18'] == 'a'){$ot++;} else {$not++;}}
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

<section class="test_upper_intermediate">
    <div class="container_2">
        <div class="upper_intermediate_main">
            <div class="upper_intermediate_main_text">
                <h1>Тест на определение уровня: Upper-Intermediate</h1>
                <p>Ключ к тесту</p>
                <p>
                    Если вы набрали менее 10 правильных ответов – ваш уровень Intermediate. Сначала закрепите полученные знания.
                    Если вы набрали более 10 правильных ответов – ваш уровень Upper-Intermediate. Добро пожаловать в мир живого английского!
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
            <form action="test_upper_intermediate.php" method="post">
                <div>
                    <p>1. You …… worry so much, you’ll make yourself ill. </p>
                    <label><input name="q1" type="radio" value="a">must</label><br>
                    <label><input name="q1" type="radio" value="b">shouldn’t</label><br>
                    <label><input name="q1" type="radio" value="c">can’t</label>
                </div>
                <div>
                    <p>2. Joe …… think of a good excuse for being late.</p>
                    <label><input name="q2" type="radio" value="a">shouldn’t</label><br>
                    <label><input name="q2" type="radio" value="b">mustn’t</label><br>
                    <label><input name="q2" type="radio" value="c">couldn’t</label>
                </div>
                <div>
                    <p>3. Stella"s …… be promoted because she works hard.</p>
                    <label><input name="q3" type="radio" value="a">allowed to</label><br>
                    <label><input name="q3" type="radio" value="b">bound to</label><br>
                    <label><input name="q3" type="radio" value="c">manage to</label>
                </div>
                <div>
                    <p>4. My mother …… is in Argentina this week.</p>
                    <label><input name="q4" type="radio" value="a">what</label><br>
                    <label><input name="q4" type="radio" value="b">where</label><br>
                    <label><input name="q4" type="radio" value="c">who</label>
                </div>
                <div>
                    <p>5. They’re going to stay with their cousins …… live on a boat.</p>
                    <label><input name="q5" type="radio" value="a">don’t suppose it</label><br>
                    <label><input name="q5" type="radio" value="b">suppose not</label><br>
                    <label><input name="q5" type="radio" value="c">don’t suppose</label>
                </div>
                <div>
                    <p>6. Where are the flowers …… I sent you?</p>
                    <label><input name="q6" type="radio" value="a">where</label><br>
                    <label><input name="q6" type="radio" value="b">whose</label><br>
                    <label><input name="q6" type="radio" value="c">-</label>
                </div>
                <div>
                    <p>7. Come in from the rain – you’re …… soaking.</p>
                    <label><input name="q7" type="radio" value="a">bored</label><br>
                    <label><input name="q7" type="radio" value="b">boredom</label><br>
                    <label><input name="q7" type="radio" value="c">boring</label>
                </div>
                <div>
                    <p>8. My grandmother …… living alone so she finds the house very quiet.</p>
                    <label><input name="q8" type="radio" value="a">didn’t use to</label><br>
                    <label><input name="q8" type="radio" value="b">used to</label><br>
                    <label><input name="q8" type="radio" value="c">isn’t used to</label>
                </div>
                <div>
                    <p>9. My boss really annoys me because she …… me to work at the weekends.</p>
                    <label><input name="q9" type="radio" value="a">is always asking</label><br>
                    <label><input name="q9" type="radio" value="b">would ask</label><br>
                    <label><input name="q9" type="radio" value="c">asked</label>
                </div>
                <div>
                    <p>10. Maria's got a terrible voice but she …… at any opportunity.</p>
                    <label><input name="q10" type="radio" value="a">is singing</label><br>
                    <label><input name="q10" type="radio" value="b">would sing</label><br>
                    <label><input name="q10" type="radio" value="c">has sung</label>
                </div>
                <div>
                    <p>11. Do you remember when Mum and Dad …… take us camping and it …… always rain?</p>
                    <label><input name="q11" type="radio" value="a">used to/ would</label><br>
                    <label><input name="q11" type="radio" value="b">are used to / will</label><br>
                    <label><input name="q11" type="radio" value="c">used to / would</label>
                </div>
                <div>
                    <p>12. It was only in Australia for a week so he …… seen a lot.</p>
                    <label><input name="q12" type="radio" value="a">shouldn't have</label><br>
                    <label><input name="q12" type="radio" value="b">couldn’t have</label><br>
                    <label><input name="q12" type="radio" value="c">might have</label>
                </div>
                <div>
                    <p>13. Although it was kind, they …… bought us a housewarming present.</p>
                    <label><input name="q13" type="radio" value="a">couldn’t have </label><br>
                    <label><input name="q13" type="radio" value="b">mightn’t have</label><br>
                    <label><input name="q13" type="radio" value="c">needn’t have</label>
                </div>
                <div>
                    <p>14. If only I …… school when I was fifteen, I …… a lot more money.</p>
                    <label><input name="q14" type="radio" value="a">hadn’t left / ’d earn</label><br>
                    <label><input name="q14" type="radio" value="b">don’t leave / won’t earn</label><br>
                    <label><input name="q14" type="radio" value="c">left / ’d earn</label>
                </div>
                <div>
                    <p>15. If I …… a lot of money, I’d retire.</p>
                    <label><input name="q15" type="radio" value="a">win</label><br>
                    <label><input name="q15" type="radio" value="b">won</label><br>
                    <label><input name="q15" type="radio" value="c">had won</label>
                </div>
                <div>
                    <p>16. Sometimes they both wish they …… married so young.</p>
                    <label><input name="q16" type="radio" value="a">didn't get</label><br>
                    <label><input name="q16" type="radio" value="b">don’t get</label><br>
                    <label><input name="q16" type="radio" value="c">hadn’t got</label>
                </div>
                <div>
                    <p>17. Don’t you wish we …… ten years ago?</p>
                    <label><input name="q17" type="radio" value="a">met</label><br>
                    <label><input name="q17" type="radio" value="b">had met</label><br>
                    <label><input name="q17" type="radio" value="c">meet</label>
                </div>
                <div>
                    <p>18. You can’t buy …… happiness.</p>
                    <label><input name="q18" type="radio" value="a">-</label><br>
                    <label><input name="q18" type="radio" value="b">a</label><br>
                    <label><input name="q18" type="radio" value="c">the</label>
                </div>
                <div>
                    <p>19. Lucy …… well with her brother, even though he’s much younger than her.</p>
                    <label><input name="q19" type="radio" value="a">gets over</label><br>
                    <label><input name="q19" type="radio" value="b">gets up</label><br>
                    <label><input name="q19" type="radio" value="c">gets on</label>
                </div>
                <div>
                    <p>20. It was …… great film that we saw it twice.</p>
                    <label><input name="q20" type="radio" value="a">what a</label><br>
                    <label><input name="q20" type="radio" value="b">her only</label><br>
                    <label><input name="q20" type="radio" value="c">such a</label>
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