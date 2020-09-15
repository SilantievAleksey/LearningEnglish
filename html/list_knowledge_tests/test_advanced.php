<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="../../images/BackIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/test_advanced.css">
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
    <title>Общий тест: уровень Advanced</title>
</head>
<body class="page_fix">

<?php
    $ot = 0;
    $not = 0;
    if (isset($_POST['q1'])) { if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q2'])) {if ($_POST['q2'] == 'c'){$ot++;} else {$not++;}}
    if (isset($_POST['q3'])) {if ($_POST['q3'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q4'])) {if ($_POST['q4'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q5'])) {if ($_POST['q5'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q6'])) {if ($_POST['q6'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q7'])) {if ($_POST['q7'] == 'c'){$ot++;} else {$not++;}}
    if (isset($_POST['q8'])) {if ($_POST['q8'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q9'])) {if ($_POST['q9'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q10'])) {if ($_POST['q10'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q11'])) {if ($_POST['q11'] == 'c'){$ot++;} else {$not++;}}
    if (isset($_POST['q12'])) {if ($_POST['q12'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q13'])) {if ($_POST['q13'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q14'])) {if ($_POST['q14'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q15'])) {if ($_POST['q15'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q16'])) {if ($_POST['q16'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q17'])) {if ($_POST['q17'] == 'a'){$ot++;} else {$not++;}}
    if (isset($_POST['q18'])) {if ($_POST['q18'] == 'b'){$ot++;} else {$not++;}}
    if (isset($_POST['q19'])) {if ($_POST['q19'] == 'c'){$ot++;} else {$not++;}}
    if (isset($_POST['q20'])) {if ($_POST['q20'] == 'a'){$ot++;} else {$not++;}}
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

<section class="test_advanced">
    <div class="container_2">
        <div class="advanced_main">
            <div class="advanced_main_text">
                <h1>Тест на определение уровня: Advanced</h1>
                <p>Ключ к тесту</p>
                <p>
                    Если вы набрали менее 10 правильных ответов – ваш уровень Upper-Intermediate. Сначала закрепите полученные знания.
                    Если вы набрали более 10 правильных ответов – ваш уровень Advanced. Добро пожаловать в мир живого английского!
                </p>
            </div>
            <div id="list_results">
                <?php
                # Если кнопка нажата
                if( isset( $_POST['btn_start']))
                {
                    echo '<p>&emsp;Результаты: </p>';
                    echo "<p>&emsp;&emsp;- Правильных ответов: $ot </p>";
                    echo "<p>&emsp;&emsp;- Неправильных ответов: " . (20 - $ot) .  "</p>";
                }
                ?>
            </div>
            <form action="test_advanced.php" method="post">
                <div>
                    <p>1. The taxi will be here in a couple of minutes. We …… get ready to go.</p>
                    <label><input name="q1" type="radio" value="a">had better</label><br>
                    <label><input name="q1" type="radio" value="b">would better</label><br>
                    <label><input name="q1" type="radio" value="c">should better</label>
                </div>
                <div>
                    <p>2. The interviewer started off …… me why I wanted the job.</p>
                    <label><input name="q2" type="radio" value="a">to ask</label><br>
                    <label><input name="q2" type="radio" value="b">in asking</label><br>
                    <label><input name="q2" type="radio" value="c">by asking</label>
                </div>
                <div>
                    <p>3. The stairs …… quite steep, so be careful how you go down.</p>
                    <label><input name="q3" type="radio" value="a">are</label><br>
                    <label><input name="q3" type="radio" value="b">be</label><br>
                    <label><input name="q3" type="radio" value="c">is</label>
                </div>
                <div>
                    <p>4. “Michael Jordan is visiting our school next week to talk about basketball.” “You mean …… Michael Jordan? Can you get his autograph for me?”</p>
                    <label><input name="q4" type="radio" value="a">–</label><br>
                    <label><input name="q4" type="radio" value="b">the</label><br>
                    <label><input name="q4" type="radio" value="c">a</label>
                </div>
                <div>
                    <p>5. “Dad won’t mind us borrowing the car, will he?” “No, I ……”</p>
                    <label><input name="q5" type="radio" value="a">don’t suppose it</label><br>
                    <label><input name="q5" type="radio" value="b">suppose not</label><br>
                    <label><input name="q5" type="radio" value="c">don’t suppose</label>
                </div>
                <div>
                    <p>6. We …… to the tennis club since we moved here.</p>
                    <label><input name="q6" type="radio" value="a">have belonged</label><br>
                    <label><input name="q6" type="radio" value="b">are belonging</label><br>
                    <label><input name="q6" type="radio" value="c">belong</label>
                </div>
                <div>
                    <p>7. Your eyes are red – ……?</p>
                    <label><input name="q7" type="radio" value="a">did you cry</label><br>
                    <label><input name="q7" type="radio" value="b">have you cried</label><br>
                    <label><input name="q7" type="radio" value="c">have you been crying</label>
                </div>
                <div>
                    <p>8. I don’t know when Helen …… back.</p>
                    <label><input name="q8" type="radio" value="a">will be</label><br>
                    <label><input name="q8" type="radio" value="b">is</label><br>
                    <label><input name="q8" type="radio" value="c">can</label>
                </div>
                <div>
                    <p>9. I …… an interview because I’d worked there before.</p>
                    <label><input name="q9" type="radio" value="a">needn’t have</label><br>
                    <label><input name="q9" type="radio" value="b">didn’t need to have</label><br>
                    <label><input name="q9" type="radio" value="c">needn’t have had</label>
                </div>
                <div>
                    <p>10. When I asked what was wrong, ……</p>
                    <label><input name="q10" type="radio" value="a">I was explained the problem</label><br>
                    <label><input name="q10" type="radio" value="b">the problem was explained to me</label><br>
                    <label><input name="q10" type="radio" value="c">he explained me the problem</label>
                </div>
                <div>
                    <p>11. Steven …… the wallet.</p>
                    <label><input name="q11" type="radio" value="a">admitted to steal</label><br>
                    <label><input name="q11" type="radio" value="b">admitted steal</label><br>
                    <label><input name="q11" type="radio" value="c">admitted stealing</label>
                </div>
                <div>
                    <p>12. …… to Paris during the vacation.</p>
                    <label><input name="q12" type="radio" value="a">They are all going</label><br>
                    <label><input name="q12" type="radio" value="b">All they are going</label><br>
                    <label><input name="q12" type="radio" value="c">They all are going</label>
                </div>
                <div>
                    <p>13. We should use …… time we have available to discuss John’s proposal.</p>
                    <label><input name="q13" type="radio" value="a">the little of</label><br>
                    <label><input name="q13" type="radio" value="b">the little</label><br>
                    <label><input name="q13" type="radio" value="c">little</label>
                </div>
                <div>
                    <p>14. Some experience is …… for the job.</p>
                    <label><input name="q14" type="radio" value="a">really essential</label><br>
                    <label><input name="q14" type="radio" value="b">fairly essential</label><br>
                    <label><input name="q14" type="radio" value="c">very essential</label>
                </div>
                <div>
                    <p>15. She was …… as anyone could have had.</p>
                    <label><input name="q15" type="radio" value="a">as patient teacher</label><br>
                    <label><input name="q15" type="radio" value="b">a patient as teacher</label><br>
                    <label><input name="q15" type="radio" value="c">as patient a teacher</label>
                </div>
                <div>
                    <p>16. …… Derek nowadays, he’s so busy at the office.</p>
                    <label><input name="q16" type="radio" value="a">Hardly we ever see</label><br>
                    <label><input name="q16" type="radio" value="b">We hardly ever see</label><br>
                    <label><input name="q16" type="radio" value="c">We see hardly ever</label>
                </div>
                <div>
                    <p>17. …… in my seventies and rather unfit, I might consider taking up squash.</p>
                    <label><input name="q17" type="radio" value="a">Were I not</label><br>
                    <label><input name="q17" type="radio" value="b">Was I not</label><br>
                    <label><input name="q17" type="radio" value="c">If I wasn't</label>
                </div>
                <div>
                    <p>18. We were delayed …… an accident.</p>
                    <label><input name="q18" type="radio" value="a">because</label><br>
                    <label><input name="q18" type="radio" value="b">because of</label><br>
                    <label><input name="q18" type="radio" value="c">of because</label>
                </div>
                <div>
                    <p>19. …… that Marie was able to retire at the age of 50..</p>
                    <label><input name="q19" type="radio" value="a">So successful her business was,</label><br>
                    <label><input name="q19" type="radio" value="b">So was her successful business,</label><br>
                    <label><input name="q19" type="radio" value="c">So successful was her business</label>
                </div>
                <div>
                    <p>20. …… they slept soundly.</p>
                    <label><input name="q20" type="radio" value="a">Hot though the night air was</label><br>
                    <label><input name="q20" type="radio" value="b">Hot though was the night air</label><br>
                    <label><input name="q20" type="radio" value="c">Hot although the night air was</label>
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
                    <li class="fot_item"><a href="../grammar_authorized.php">Справочник</a></li>
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