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
    <link rel="stylesheet" href="../css/individual_test.css">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/load_test.js"></script>
    <script src="../js/chatbot.js"></script>
    <script src="../js/translate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
    <title>Тестирование для составления программы обучения</title>
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

<section class="individual_test">
    <div class="container_2">
        <div class="individual_test_main" id="testing">
            <form action="result_programme.php" method="post">

                <div class="nb_1">
                    <div id="nb_1_1">
                        <p>1. They ... happy.</p>
                        <label><input name="q1_1" type="radio" value="a">am</label><br>
                        <label><input name="q1_1" type="radio" value="b">is</label><br>
                        <label><input name="q1_1" type="radio" value="c">are</label>
                    </div>
                    <div id="nb_1_2">
                        <p>1. It ... near.</p>
                        <label><input name="q1_2" type="radio" value="a">am</label><br>
                        <label><input name="q1_2" type="radio" value="b">is</label><br>
                        <label><input name="q1_2" type="radio" value="c">are</label>
                    </div>
                    <div id="nb_1_3">
                        <p>1. My work ... easy.</p>
                        <label><input name="q1_3" type="radio" value="a">am</label><br>
                        <label><input name="q1_3" type="radio" value="b">is</label><br>
                        <label><input name="q1_3" type="radio" value="c">are</label>
                    </div>
                    <div id="nb_1_4">
                        <p>1. I ... at work today.</p>
                        <label><input name="q1_4" type="radio" value="a">am</label><br>
                        <label><input name="q1_4" type="radio" value="b">is</label><br>
                        <label><input name="q1_4" type="radio" value="c">are</label>
                    </div>
                    <div id="nb_1_5">
                        <p>1. Our dog ... big.</p>
                        <label><input name="q1_5" type="radio" value="a">am</label><br>
                        <label><input name="q1_5" type="radio" value="b">is</label><br>
                        <label><input name="q1_5" type="radio" value="c">are</label>
                    </div>
                </div>

                <div class="nb_2">
                    <div id="nb_2_1">
                        <p>2. My mother moved to ... new big house.</p>
                        <label><input name="q2_1" type="radio" value="a">a</label><br>
                        <label><input name="q2_1" type="radio" value="b">an</label><br>
                        <label><input name="q2_1" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_2_2">
                        <p>2. Open … books on page 13.</p>
                        <label><input name="q2_2" type="radio" value="a">a</label><br>
                        <label><input name="q2_2" type="radio" value="b">an</label><br>
                        <label><input name="q2_2" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_2_3">
                        <p>2. It’s such … honour to meet you!</p>
                        <label><input name="q2_3" type="radio" value="a">a</label><br>
                        <label><input name="q2_3" type="radio" value="b">an</label><br>
                        <label><input name="q2_3" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_2_4">
                        /*a*/
                        <p>2. My father was … university professor.</p>
                        <label><input name="q2_4" type="radio" value="a">a</label><br>
                        <label><input name="q2_4" type="radio" value="b">an</label><br>
                        <label><input name="q2_4" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_2_5">
                        <p>2. Can you give me ... apple, please?</p>
                        <label><input name="q2_5" type="radio" value="a">a</label><br>
                        <label><input name="q2_5" type="radio" value="b">an</label><br>
                        <label><input name="q2_5" type="radio" value="c">-</label>
                    </div>
                </div>

                <div class="nb_3">
                    <div id="nb_3_1">
                        <p>3. She … you until you … to him.</p>
                        <label><input name="q3_1" type="radio" value="a">will bother, will talk</label><br>
                        <label><input name="q3_1" type="radio" value="b">will bother, talk</label><br>
                        <label><input name="q3_1" type="radio" value="c">bother, talk</label>
                    </div>
                    <div id="nb_3_2">
                        <p>3. They … a bigger house as soon as they … a baby.</p>
                        <label><input name="q3_2" type="radio" value="a">will find, has</label><br>
                        <label><input name="q3_2" type="radio" value="b">find, will have</label><br>
                        <label><input name="q3_2" type="radio" value="c">will find, have</label>
                    </div>
                    <div id="nb_3_3">
                        <p>3. If he … busy, he … tonight.</p>
                        <label><input name="q3_3" type="radio" value="a">isn’t, will come</label><br>
                        <label><input name="q3_3" type="radio" value="b">doesn’t, will come</label><br>
                        <label><input name="q3_3" type="radio" value="c">isn’t, comes</label>
                    </div>
                    <div id="nb_3_4">
                        <p>3. If it … raining, we … a picnic.</p>
                        <label><input name="q3_4" type="radio" value="a">stops, will have</label><br>
                        <label><input name="q3_4" type="radio" value="b">stops, will has</label><br>
                        <label><input name="q3_4" type="radio" value="c">will stop, will have</label>
                    </div>
                    <div id="nb_3_5">
                        <p>3. He ... how to solve this problem.</p>
                        <label><input name="q3_5" type="radio" value="a">don’t know</label><br>
                        <label><input name="q3_5" type="radio" value="b">isn’t know</label><br>
                        <label><input name="q3_5" type="radio" value="c">doesn’t know</label>
                    </div>
                </div>

                <div class="nb_4">
                    <div id="nb_4_1">
                        <p>4. Would you like ... fruit?</p>
                        <label><input name="q4_1" type="radio" value="a">a</label><br>
                        <label><input name="q4_1" type="radio" value="b">some</label><br>
                        <label><input name="q4_1" type="radio" value="c">any</label>
                    </div>
                    <div id="nb_4_2">
                        <p>4. Have you got ... lemons?</p>
                        <label><input name="q4_2" type="radio" value="a">a</label><br>
                        <label><input name="q4_2" type="radio" value="b">any</label><br>
                        <label><input name="q4_2" type="radio" value="c">some</label>
                    </div>
                    <div id="nb_4_3">
                        <p>4. I´ll buy ... bottle of water at the beach.</p>
                        <label><input name="q4_3" type="radio" value="a">a</label><br>
                        <label><input name="q4_3" type="radio" value="b">an</label><br>
                        <label><input name="q4_3" type="radio" value="c">some</label>
                    </div>
                    <div id="nb_4_4">
                        <p>4. There isn´t ... electricity at the campsite.</p>
                        <label><input name="q4_4" type="radio" value="a">a</label><br>
                        <label><input name="q4_4" type="radio" value="b">some</label><br>
                        <label><input name="q4_4" type="radio" value="c">any</label>
                    </div>
                    <div id="nb_4_5">
                        <p>4. I don’t like these boots, but I really like the ... you are wearing.</p>
                        <label><input name="q4_5" type="radio" value="a">one</label><br>
                        <label><input name="q4_5" type="radio" value="b">any</label><br>
                        <label><input name="q4_5" type="radio" value="c">ones</label>
                    </div>
                </div>

                <div class="nb_5">
                    <div id="nb_5_1">
                        <p>5. What will take place at Bill’s house tomorrow?</p>
                        <audio src="../sounds/phone.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q5_1" type="radio" value="a">a party</label><br>
                        <label><input name="q5_1" type="radio" value="b">a game</label><br>
                        <label><input name="q5_1" type="radio" value="c">a dance</label>
                    </div>
                    <div id="nb_5_2">
                        <p>5. Why does Hank have to work late?</p>
                        <audio src="../sounds/phone.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q5_2" type="radio" value="a">He has to attend a meeting.</label><br>
                        <label><input name="q5_2" type="radio" value="b">He has to write a report.</label><br>
                        <label><input name="q5_2" type="radio" value="c">He has to close the office.</label>
                    </div>
                    <div id="nb_5_3">
                        <p>5. Why is Hank going to visit Lisa after work?</p>
                        <audio src="../sounds/phone.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q5_3" type="radio" value="a">because she is sick in bed</label><br>
                        <label><input name="q5_3" type="radio" value="b">because he has to return something</label><br>
                        <label><input name="q5_3" type="radio" value="c">because he is going to take her to Bill’s house</label>
                    </div>
                    <div id="nb_5_4">
                        <p>5. Where is Hank going to get the snacks to take to Bill’s house?</p>
                        <audio src="../sounds/phone.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q5_4" type="radio" value="a">from his house</label><br>
                        <label><input name="q5_4" type="radio" value="b">from the store</label><br>
                        <label><input name="q5_4" type="radio" value="c">from his work</label>
                    </div>
                    <div id="nb_5_5">
                        <p>5. What time will Hank most likely arrive at Bill’s house?</p>
                        <audio src="../sounds/phone.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q5_5" type="radio" value="a">7:00 PM</label><br>
                        <label><input name="q5_5" type="radio" value="b">8:00 PM</label><br>
                        <label><input name="q5_5" type="radio" value="c">9:00 PM</label>
                    </div>
                </div>

                <div class="nb_6">
                    <div id="nb_6_1">
                        <p>6. There ... soup in the fridge.</p>
                        <label><input name="q6_1" type="radio" value="a">is many</label><br>
                        <label><input name="q6_1" type="radio" value="b">are much</label><br>
                        <label><input name="q6_1" type="radio" value="c">is much</label>
                    </div>
                    <div id="nb_6_2">
                        <p>6. ... there ... here?</p>
                        <label><input name="q6_2" type="radio" value="a">Is / somebody</label><br>
                        <label><input name="q6_2" type="radio" value="b">Is / anybody</label><br>
                        <label><input name="q6_2" type="radio" value="c">Are / somebody</label>
                    </div>
                    <div id="nb_6_3">
                        <p>6. There ... much food left in the fridge. We should buy some.</p>
                        <label><input name="q6_3" type="radio" value="a">isn’t</label><br>
                        <label><input name="q6_3" type="radio" value="b">aren’t</label><br>
                        <label><input name="q6_3" type="radio" value="c">are</label>
                    </div>
                    <div id="nb_6_4">
                        <p>6. I am planning to redecorate my room. There ... a lot of flowers and toys here.</p>
                        <label><input name="q6_4" type="radio" value="a">are</label><br>
                        <label><input name="q6_4" type="radio" value="b">were</label><br>
                        <label><input name="q6_4" type="radio" value="c">will be</label>
                    </div>
                    <div id="nb_6_5">
                        <p>6. ... there ... I can do for you?</p>
                        <label><input name="q6_5" type="radio" value="a">Is / anything</label><br>
                        <label><input name="q6_5" type="radio" value="b">Was / anything</label><br>
                        <label><input name="q6_5" type="radio" value="c">Are / something</label>
                    </div>
                </div>

                <div class="nb_7">
                    <div id="nb_7_1">
                        <p>7. Every year The Guinness Book of World Records announces ... person in the world.</p>
                        <label><input name="q7_1" type="radio" value="a">more higher</label><br>
                        <label><input name="q7_1" type="radio" value="b">the highest</label><br>
                        <label><input name="q7_1" type="radio" value="c">highest</label>
                    </div>
                    <div id="nb_7_2">
                        <p>7. I am 1.9 cm ... than you are.</p>
                        <label><input name="q7_2" type="radio" value="a">tallest</label><br>
                        <label><input name="q7_2" type="radio" value="b">more taller</label><br>
                        <label><input name="q7_2" type="radio" value="c">taller</label>
                    </div>
                    <div id="nb_7_3">
                        <p>7. This chair is ... than the other one.</p>
                        <label><input name="q7_3" type="radio" value="a">much comfortable</label><br>
                        <label><input name="q7_3" type="radio" value="b">very comfortable</label><br>
                        <label><input name="q7_3" type="radio" value="c">more comfortable</label>
                    </div>
                    <div id="nb_7_4">
                        <p>7. Cindy is ... girl I have ever met.</p>
                        <label><input name="q7_4" type="radio" value="a">the smartest</label><br>
                        <label><input name="q7_4" type="radio" value="b">smatier</label><br>
                        <label><input name="q7_4" type="radio" value="c">the most smartest</label>
                    </div>
                    <div id="nb_7_5">
                        <p>7. Cars are getting ... as the years go by.</p>
                        <label><input name="q7_5" type="radio" value="a">the cheapest</label><br>
                        <label><input name="q7_5" type="radio" value="b">most cheaper</label><br>
                        <label><input name="q7_5" type="radio" value="c">cheaper</label>
                    </div>
                </div>

                <div class="nb_8">
                    <div id="nb_8_1">
                        <p>8. Dear Maggie, when you read ... message I will be already on the board of plane.</p>
                        <label><input name="q8_1" type="radio" value="a">that</label><br>
                        <label><input name="q8_1" type="radio" value="b">this</label><br>
                        <label><input name="q8_1" type="radio" value="c">these</label>
                    </div>
                    <div id="nb_8_2">
                        <p>8. The jury had to decide why he had committed ... crime.</p>
                        <label><input name="q8_2" type="radio" value="a">this</label><br>
                        <label><input name="q8_2" type="radio" value="b">that</label><br>
                        <label><input name="q8_2" type="radio" value="c">these</label>
                    </div>
                    <div id="nb_8_3">
                        <p>8. I am so excited! I can’t wait to see a new play at our theatre. ... is an adaptation of Rachel Sparks novel.</p>
                        <label><input name="q8_3" type="radio" value="a">This</label><br>
                        <label><input name="q8_3" type="radio" value="b">That</label><br>
                        <label><input name="q8_3" type="radio" value="c">These</label>
                    </div>
                    <div id="nb_8_4">
                        <p>8. He saw a bike across the road. ... was a red Honda.</p>
                        <label><input name="q8_4" type="radio" value="a">This</label><br>
                        <label><input name="q8_4" type="radio" value="b">That</label><br>
                        <label><input name="q8_4" type="radio" value="c">These</label>
                    </div>
                    <div id="nb_8_5">
                        <p>8. I’ve been looking for some good articles for my report. But ... are difficult to find.</p>
                        <label><input name="q8_5" type="radio" value="a">this</label><br>
                        <label><input name="q8_5" type="radio" value="b">that</label><br>
                        <label><input name="q8_5" type="radio" value="c">these</label>
                    </div>
                </div>

                <div class="nb_9">
                    <div id="nb_9_1">
                        <p>9. She … about her friends, neighbours, and colleagues! </p>
                        <label><input name="q9_1" type="radio" value="a">were always gossiping</label><br>
                        <label><input name="q9_1" type="radio" value="b">were gossiping always</label><br>
                        <label><input name="q9_1" type="radio" value="c">was always gossiping</label>
                    </div>
                    <div id="nb_9_2">
                        <p>9. If you … sleeping pills, you wouldn’t have health problems.</p>
                        <label><input name="q9_2" type="radio" value="a">were not taking</label><br>
                        <label><input name="q9_2" type="radio" value="b">was not taking</label><br>
                        <label><input name="q9_2" type="radio" value="c">not was taking</label>
                    </div>
                    <div id="nb_9_3">
                        <p>9. He … to get to that night show, but he had to get up early next day.</p>
                        <label><input name="q9_3" type="radio" value="a">were hoping</label><br>
                        <label><input name="q9_3" type="radio" value="b">was hoping</label><br>
                        <label><input name="q9_3" type="radio" value="c">was to hoping</label>
                    </div>
                    <div id="nb_9_4">
                        <p>9. My wife … clothes!</p>
                        <label><input name="q9_4" type="radio" value="a">was constantly buying</label><br>
                        <label><input name="q9_4" type="radio" value="b">were buying constantly</label><br>
                        <label><input name="q9_4" type="radio" value="c">were constantly buying</label>
                    </div>
                    <div id="nb_9_5">
                        <p>9. They … their cousin to come in July, but he caught a cold and didn’t come.</p>
                        <label><input name="q9_5" type="radio" value="a">was expecting</label><br>
                        <label><input name="q9_5" type="radio" value="b">were expecting</label><br>
                        <label><input name="q9_5" type="radio" value="c">were expect</label>
                    </div>
                </div>

                <div class="nb_10">
                    <div id="nb_10_1">
                        <p>10. Where is Pancho from?</p>
                        <audio src="../sounds/fam2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q10_1" type="radio" value="a">Paraguay</label><br>
                        <label><input name="q10_1" type="radio" value="b"> Peru</label><br>
                        <label><input name="q10_1" type="radio" value="c">Portugal</label>
                    </div>
                    <div id="nb_10_2">
                        <p>10.  How many brothers and sisters does Pancho have?</p>
                        <audio src="../sounds/fam2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q10_2" type="radio" value="a">11</label><br>
                        <label><input name="q10_2" type="radio" value="b">12</label><br>
                        <label><input name="q10_2" type="radio" value="c">13</label>
                    </div>
                    <div id="nb_10_3">
                        <p>10. What is his father’s job?</p>
                        <audio src="../sounds/fam2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q10_3" type="radio" value="a">taxi driver</label><br>
                        <label><input name="q10_3" type="radio" value="b">dentist</label><br>
                        <label><input name="q10_3" type="radio" value="c">police officer</label>
                    </div>
                    <div id="nb_10_4">
                        <p>10. What does his mother do?</p>
                        <audio src="../sounds/fam2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q10_4" type="radio" value="a">She owns a beauty salon.</label><br>
                        <label><input name="q10_4" type="radio" value="b">She runs a small family store.</label><br>
                        <label><input name="q10_4" type="radio" value="c"> She works at a bread shop.</label>
                    </div>
                    <div id="nb_10_5">
                        <p>10. Which thing does Pancho NOT say?</p>
                        <audio src="../sounds/fam2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q10_5" type="radio" value="a">His brothers and sisters help his mom.</label><br>
                        <label><input name="q10_5" type="radio" value="b">His mom sells food like eggs and sugar.</label><br>
                        <label><input name="q10_5" type="radio" value="c">His mother enjoys her job very much.</label>
                    </div>
                </div>

                <div class="nb_11">
                    <div id="nb_11_1">
                        <p>11. Tara is a qualified linguist. She ... speak five languages.</p>
                        <label><input name="q11_1" type="radio" value="a">can</label><br>
                        <label><input name="q11_1" type="radio" value="b">is able</label><br>
                        <label><input name="q11_1" type="radio" value="c">will be able to</label>
                    </div>
                    <div id="nb_11_2">
                        <p>11. My teacher had surgery on her vocal cords. She ... speak in three weeks.</p>
                        <label><input name="q11_2" type="radio" value="a">can</label><br>
                        <label><input name="q11_2" type="radio" value="b">will be able to</label><br>
                        <label><input name="q11_2" type="radio" value="c">able</label>
                    </div>
                    <div id="nb_11_3">
                        <p>11. I’m sorry, sir, but you ... smoke in here. It’s a non-smoking area.</p>
                        <label><input name="q11_3" type="radio" value="a">can’t</label><br>
                        <label><input name="q11_3" type="radio" value="b">are not able to</label><br>
                        <label><input name="q11_3" type="radio" value="c">is able</label>
                    </div>
                    <div id="nb_11_4">
                        <p>11. I need to call my mom, but my phone battery is dead! – You ... use a public telephone.</p>
                        <label><input name="q11_4" type="radio" value="a">can</label><br>
                        <label><input name="q11_4" type="radio" value="b">are able to</label><br>
                        <label><input name="q11_4" type="radio" value="c">can’t</label>
                    </div>
                    <div id="nb_11_5">
                        <p>11. Have you seen Kevin recently? He promised me to come by. – Yes, sorry, he said he ... come.</p>
                        <label><input name="q11_5" type="radio" value="a">wasn’t able to</label><br>
                        <label><input name="q11_5" type="radio" value="b">could</label><br>
                        <label><input name="q11_5" type="radio" value="c">can</label>
                    </div>
                </div>

                <div class="nb_12">
                    <div id="nb_12_1">
                        <p>12. The wind is very strong today. You … put your coat on.</p>
                        <label><input name="q12_1" type="radio" value="a">need to</label><br>
                        <label><input name="q12_1" type="radio" value="b">do need</label><br>
                        <label><input name="q12_1" type="radio" value="c">needs</label>
                    </div>
                    <div id="nb_12_2">
                        <p>12. This flower doesn’t look well. It … watering.</p>
                        <label><input name="q12_2" type="radio" value="a">needs</label><br>
                        <label><input name="q12_2" type="radio" value="b">does need</label><br>
                        <label><input name="q12_2" type="radio" value="c">do need</label>
                    </div>
                    <div id="nb_12_3">
                        <p>12. No one … know the name of the candidate.</p>
                        <label><input name="q12_3" type="radio" value="a">need</label><br>
                        <label><input name="q12_3" type="radio" value="b">do needn’t</label><br>
                        <label><input name="q12_3" type="radio" value="c">does need</label>
                    </div>
                    <div id="nb_12_4">
                        <p>12. My boots are dirty. They … cleaning.</p>
                        <label><input name="q12_4" type="radio" value="a">do need</label><br>
                        <label><input name="q12_4" type="radio" value="b">does need</label><br>
                        <label><input name="q12_4" type="radio" value="c">need</label>
                    </div>
                    <div id="nb_12_5">
                        <p>12. You … tell anyone, but you can, if you want.</p>
                        <label><input name="q12_5" type="radio" value="a">needn’t to</label><br>
                        <label><input name="q12_5" type="radio" value="b">needn’t</label><br>
                        <label><input name="q12_5" type="radio" value="c">need</label>
                    </div>
                </div>

                <div class="nb_13">
                    <div id="nb_13_1">
                        <p>13. My best friend is ... than me.</p>
                        <label><input name="q13_1" type="radio" value="a">elder</label><br>
                        <label><input name="q13_1" type="radio" value="b">older</label><br>
                        <label><input name="q13_1" type="radio" value="c">the oldest</label>
                    </div>
                    <div id="nb_13_2">
                        <p>13. She’s by far ... woman I have ever seen.</p>
                        <label><input name="q13_2" type="radio" value="a">more beautiful</label><br>
                        <label><input name="q13_2" type="radio" value="b">much beautiful</label><br>
                        <label><input name="q13_2" type="radio" value="c">the most beautiful</label>
                    </div>
                    <div id="nb_13_3">
                        <p>13. I’ve heard James playing the piano. He doesn’t seem to be getting ... .</p>
                        <label><input name="q13_3" type="radio" value="a">gooder</label><br>
                        <label><input name="q13_3" type="radio" value="b">the best</label><br>
                        <label><input name="q13_3" type="radio" value="c">better</label>
                    </div>
                    <div id="nb_13_4">
                        <p>13. My computer is really old. I need something ... .</p>
                        <label><input name="q13_4" type="radio" value="a">modernier</label><br>
                        <label><input name="q13_4" type="radio" value="b">more modern</label><br>
                        <label><input name="q13_4" type="radio" value="c">the modernest</label>
                    </div>
                    <div id="nb_13_5">
                        <p>13. Chemistry is ... of all subjects.</p>
                        <label><input name="q13_5" type="radio" value="a">more difficult</label><br>
                        <label><input name="q13_5" type="radio" value="b">the most difficult</label><br>
                        <label><input name="q13_5" type="radio" value="c">much more difficult</label>
                    </div>
                </div>

                <div class="nb_14">
                    <div id="nb_14_1">
                        <p>14. … Pole Star is a guiding star.</p>
                        <label><input name="q14_1" type="radio" value="a">The</label><br>
                        <label><input name="q14_1" type="radio" value="b">A</label><br>
                        <label><input name="q14_1" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_14_2">
                        <p>14. We must take measures to protect … environment.</p>
                        <label><input name="q14_2" type="radio" value="a">the</label><br>
                        <label><input name="q14_2" type="radio" value="b">a</label><br>
                        <label><input name="q14_2" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_14_3">
                        <p>14. Venus is closer to … Earth than Mars.</p>
                        <label><input name="q14_3" type="radio" value="a">the</label><br>
                        <label><input name="q14_3" type="radio" value="b">a</label><br>
                        <label><input name="q14_3" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_14_4">
                        <p>14. I can’t see anything in … cloudy sky.</p>
                        <label><input name="q14_4" type="radio" value="a">the</label><br>
                        <label><input name="q14_4" type="radio" value="b">a</label><br>
                        <label><input name="q14_4" type="radio" value="c">-</label>
                    </div>
                    <div id="nb_14_5">
                        <p>14. Don’t be a child. Stop crying for … moon.</p>
                        <label><input name="q14_5" type="radio" value="a">the</label><br>
                        <label><input name="q14_5" type="radio" value="b">a</label><br>
                        <label><input name="q14_5" type="radio" value="c">-</label>
                    </div>
                </div>

                <div class="nb_15">
                    <div id="nb_15_1">
                        <p>15. What is the man’s destination?</p>
                        <audio src="../sounds/flight1.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q15_1" type="radio" value="a">Salt Lake City, USA</label><br>
                        <label><input name="q15_1" type="radio" value="b">New York City, USA</label><br>
                        <label><input name="q15_1" type="radio" value="c">Helsinki, Finland</label>
                    </div>
                    <div id="nb_15_2">
                        <p>15. When is the man’s departure date?</p>
                        <audio src="../sounds/flight1.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q15_2" type="radio" value="a">the twenty-first</label><br>
                        <label><input name="q15_2" type="radio" value="b">the twenty-second</label><br>
                        <label><input name="q15_2" type="radio" value="c">the twenty-third</label>
                    </div>
                    <div id="nb_15_3">
                        <p>15. What is the flight number for the second half of his journey?</p>
                        <audio src="../sounds/flight1.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q15_3" type="radio" value="a">555</label><br>
                        <label><input name="q15_3" type="radio" value="b">90</label><br>
                        <label><input name="q15_3" type="radio" value="c">830</label>
                    </div>
                    <div id="nb_15_4">
                        <p>15. How long is the man’s layover between flights?</p>
                        <audio src="../sounds/flight1.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q15_4" type="radio" value="a">less than an hour</label><br>
                        <label><input name="q15_4" type="radio" value="b">less than two hours</label><br>
                        <label><input name="q15_4" type="radio" value="c"> less than three hours</label>
                    </div>
                    <div id="nb_15_5">
                        <p>15. What request did the man make regarding his flight?</p>
                        <audio src="../sounds/flight1.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q15_5" type="radio" value="a">He asked for a specially-prepared dinner.</label><br>
                        <label><input name="q15_5" type="radio" value="b">He wanted an aisle seat.</label><br>
                        <label><input name="q15_5" type="radio" value="c"> He requested a bassinet for his baby.</label>
                    </div>
                </div>

                <div class="nb_16">
                    <div id="nb_16_1">
                        <p>16. I hope you didn’t forget ... the dog.</p>
                        <label><input name="q16_1" type="radio" value="a">to feed</label><br>
                        <label><input name="q16_1" type="radio" value="b">feeding</label><br>
                        <label><input name="q16_1" type="radio" value="c">feed</label>
                    </div>
                    <div id="nb_16_2">
                        <p>16. The joke was funny, but I didn’t feel like ... .</p>
                        <label><input name="q16_2" type="radio" value="a">having laugh</label><br>
                        <label><input name="q16_2" type="radio" value="b">to laugh</label><br>
                        <label><input name="q16_2" type="radio" value="c">laughing</label>
                    </div>
                    <div id="nb_16_3">
                        <p>16. She is afraid ... in the dark.</p>
                        <label><input name="q16_3" type="radio" value="a">of sleeping</label><br>
                        <label><input name="q16_3" type="radio" value="b">to sleep</label><br>
                        <label><input name="q16_3" type="radio" value="c">sleeping</label>
                    </div>
                    <div id="nb_16_4">
                        <p>16. Stop ... ! I cannot listen to you anymore!</p>
                        <label><input name="q16_4" type="radio" value="a">complaining</label><br>
                        <label><input name="q16_4" type="radio" value="b">to complain</label><br>
                        <label><input name="q16_4" type="radio" value="c">to complaining</label>
                    </div>
                    <div id="nb_16_5">
                        <p>16. I hate ... with her.</p>
                        <label><input name="q16_5" type="radio" value="a">to go shopping</label><br>
                        <label><input name="q16_5" type="radio" value="b">going shopping</label><br>
                        <label><input name="q16_5" type="radio" value="c">going to shop</label>
                    </div>
                </div>

                <div class="nb_17">
                    <div id="nb_17_1">
                        <p>17. If he ... an extra pen, he ... it to you.</p>
                        <label><input name="q17_1" type="radio" value="a">had, would given</label><br>
                        <label><input name="q17_1" type="radio" value="b">had, would give</label><br>
                        <label><input name="q17_1" type="radio" value="c">has, will gave</label>
                    </div>
                    <div id="nb_17_2">
                        <p>17. If I ... to bed early, I ... a good sleep.</p>
                        <label><input name="q17_2" type="radio" value="a">goes, will have</label><br>
                        <label><input name="q17_2" type="radio" value="b">go, will have</label><br>
                        <label><input name="q17_2" type="radio" value="c">go, will has</label>
                    </div>
                    <div id="nb_17_3">
                        <p>17. If you ... water up to 100 Celsius, it ...</p>
                        <label><input name="q17_3" type="radio" value="a">heats, will boil</label><br>
                        <label><input name="q17_3" type="radio" value="b">heat, boils</label><br>
                        <label><input name="q17_3" type="radio" value="c">will heat, boils</label>
                    </div>
                    <div id="nb_17_4">
                        <p>17. He … in time if he ... in a traffic jam.</p>
                        <label><input name="q17_4" type="radio" value="a">will be, isn’t caught</label><br>
                        <label><input name="q17_4" type="radio" value="b">will be, doesn’t caught</label><br>
                        <label><input name="q17_4" type="radio" value="c">would be, not caught</label>
                    </div>
                    <div id="nb_17_5">
                        <p>17. If you … exhausted, you …</p>
                        <label><input name="q17_5" type="radio" value="a">are, should leave</label><br>
                        <label><input name="q17_5" type="radio" value="b">was, should leave</label><br>
                        <label><input name="q17_5" type="radio" value="c">are, should left</label>
                    </div>
                </div>

                <div class="nb_18">
                    <div id="nb_18_1">
                        <p>18. Five books ... before 1869.</p>
                        <label><input name="q18_1" type="radio" value="a">are written</label><br>
                        <label><input name="q18_1" type="radio" value="b">are being written</label><br>
                        <label><input name="q18_1" type="radio" value="c">had been written</label>
                    </div>
                    <div id="nb_18_2">
                        <p>18. Portuguese ... in Brazil.</p>
                        <label><input name="q18_2" type="radio" value="a">will spoken</label><br>
                        <label><input name="q18_2" type="radio" value="b">is spoken</label><br>
                        <label><input name="q18_2" type="radio" value="c">speaks</label>
                    </div>
                    <div id="nb_18_3">
                        <p>18. A new store ... near the station.</p>
                        <label><input name="q18_3" type="radio" value="a">built</label><br>
                        <label><input name="q18_3" type="radio" value="b">is builds</label><br>
                        <label><input name="q18_3" type="radio" value="c">is being built</label>
                    </div>
                    <div id="nb_18_4">
                        <p>18. Look! All the mineral water ...</p>
                        <label><input name="q18_4" type="radio" value="a">has been drunk</label><br>
                        <label><input name="q18_4" type="radio" value="b">was drink</label><br>
                        <label><input name="q18_4" type="radio" value="c">is drinking</label>
                    </div>
                    <div id="nb_18_5">
                        <p>18. The vacuum cleaner ... tomorrow.</p>
                        <label><input name="q18_5" type="radio" value="a">will be repaired</label><br>
                        <label><input name="q18_5" type="radio" value="b">will repair</label><br>
                        <label><input name="q18_5" type="radio" value="c">is repaired</label>
                    </div>
                </div>

                <div class="nb_19">
                    <div id="nb_19_1">
                        <p>19. The police are ... the series of homicides.</p>
                        <label><input name="q19_1" type="radio" value="a">looking after</label><br>
                        <label><input name="q19_1" type="radio" value="b">looking into</label><br>
                        <label><input name="q19_1" type="radio" value="c">looking for</label>
                    </div>
                    <div id="nb_19_2">
                        <p>19. The government should ... this old law.</p>
                        <label><input name="q19_2" type="radio" value="a">do away with</label><br>
                        <label><input name="q19_2" type="radio" value="b">do by</label><br>
                        <label><input name="q19_2" type="radio" value="c">do down with</label>
                    </div>
                    <div id="nb_19_3">
                        <p>19. The rebellion ... in 1990 and lasted till 1993.</p>
                        <label><input name="q19_3" type="radio" value="a">broke out</label><br>
                        <label><input name="q19_3" type="radio" value="b">broke into</label><br>
                        <label><input name="q19_3" type="radio" value="c">broke in</label>
                    </div>
                    <div id="nb_19_4">
                        <p>19. Let’s ... the matter ... for now and talk about more urgent problems.</p>
                        <label><input name="q19_4" type="radio" value="a">leave / around</label><br>
                        <label><input name="q19_4" type="radio" value="b">leave / aside</label><br>
                        <label><input name="q19_4" type="radio" value="c">leave / behind</label>
                    </div>
                    <div id="nb_19_5">
                        <p>19. Students are always glad when school ... for holidays.</p>
                        <label><input name="q19_5" type="radio" value="a">breaks into</label><br>
                        <label><input name="q19_5" type="radio" value="b">breaks out</label><br>
                        <label><input name="q19_5" type="radio" value="c">breaks up</label>
                    </div>
                </div>

                <div class="nb_20">
                    <div id="nb_20_1">
                        <p>20. How much does the father owe his son in allowance?</p>
                        <audio src="../sounds/money2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q20_1" type="radio" value="a">three dollars</label><br>
                        <label><input name="q20_1" type="radio" value="b">thirteen dollars</label><br>
                        <label><input name="q20_1" type="radio" value="c">thirty dollars</label>
                    </div>
                    <div id="nb_20_2">
                        <p>20. Why hasn’t the father given his son allowance?</p>
                        <audio src="../sounds/money2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q20_2" type="radio" value="a">because he didn’t remember to do it</label><br>
                        <label><input name="q20_2" type="radio" value="b">because he doesn’t have any money now</label><br>
                        <label><input name="q20_2" type="radio" value="c"> because his son already has money</label>
                    </div>
                    <div id="nb_20_3">
                        <p>20. When does the father usually give his son money?</p>
                        <audio src="../sounds/money2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q20_3" type="radio" value="a">on Friday</label><br>
                        <label><input name="q20_3" type="radio" value="b">on Saturday</label><br>
                        <label><input name="q20_3" type="radio" value="c">on Sunday</label>
                    </div>
                    <div id="nb_20_4">
                        <p>20. Where does the man get money to pay his son?</p>
                        <audio src="../sounds/money2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q20_4" type="radio" value="a">in his bedroom</label><br>
                        <label><input name="q20_4" type="radio" value="b">at the bank</label><br>
                        <label><input name="q20_4" type="radio" value="c"> from the bookstand</label>
                    </div>
                    <div id="nb_20_5">
                        <p>20. Choose one thing the boy does NOT mention about how he will spend his money.</p>
                        <audio src="../sounds/money2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q20_5" type="radio" value="a">He will buy some toys</label><br>
                        <label><input name="q20_5" type="radio" value="b">He will save some of it</label><br>
                        <label><input name="q20_5" type="radio" value="c">He will give part to the needy</label>
                    </div>
                </div>

                <div class="nb_21">
                    <div id="nb_21_1">
                        <p>21. This time next Sunday we … to Hawaii.</p>
                        <label><input name="q21_1" type="radio" value="a">will flying</label><br>
                        <label><input name="q21_1" type="radio" value="b">will be flying</label><br>
                        <label><input name="q21_1" type="radio" value="c">will be fly</label>
                    </div>
                    <div id="nb_21_2">
                        <p>21. At midnight I …</p>
                        <label><input name="q21_2" type="radio" value="a">will sleeps</label><br>
                        <label><input name="q21_2" type="radio" value="b">will sleeping</label><br>
                        <label><input name="q21_2" type="radio" value="c">will be sleeping</label>
                    </div>
                    <div id="nb_21_3">
                        <p>21. Tonight at 5 o’clock they … a film.</p>
                        <label><input name="q21_3" type="radio" value="a">will be watching</label><br>
                        <label><input name="q21_3" type="radio" value="b">will be watch</label><br>
                        <label><input name="q21_3" type="radio" value="c">will watching</label>
                    </div>
                    <div id="nb_21_4">
                        <p>21. She … this evening. She won’t be at home.</p>
                        <label><input name="q21_4" type="radio" value="a">will be shopping</label><br>
                        <label><input name="q21_4" type="radio" value="b">will shopping</label><br>
                        <label><input name="q21_4" type="radio" value="c">will be shops</label>
                    </div>
                    <div id="nb_21_5">
                        <p>21. They have found a country house to rent. They … tomorrow.</p>
                        <label><input name="q21_5" type="radio" value="a">will be moving out</label><br>
                        <label><input name="q21_5" type="radio" value="b">will out be moved</label><br>
                        <label><input name="q21_5" type="radio" value="c">will moving out</label>
                    </div>
                </div>

                <div class="nb_22">
                    <div id="nb_22_1">
                        <p>22. By the time you come home, I … dinner. </p>
                        <label><input name="q22_1" type="radio" value="a">will have cooken</label><br>
                        <label><input name="q22_1" type="radio" value="b">will have cooked</label><br>
                        <label><input name="q22_1" type="radio" value="c">will had cooked</label>
                    </div>
                    <div id="nb_22_2">
                        <p>22. I … the article by noon.</p>
                        <label><input name="q22_2" type="radio" value="a">will have finished</label><br>
                        <label><input name="q22_2" type="radio" value="b">will has finished</label><br>
                        <label><input name="q22_2" type="radio" value="c">will had finished</label>
                    </div>
                    <div id="nb_22_3">
                        <p>22. By the time you arrive in Paris, we … for Rome.</p>
                        <label><input name="q22_3" type="radio" value="a">will have already leave</label><br>
                        <label><input name="q22_3" type="radio" value="b">will have already leave</label><br>
                        <label><input name="q22_3" type="radio" value="c">will have already left</label>
                    </div>
                    <div id="nb_22_4">
                        <p>22. We … for 10 years by next month.</p>
                        <label><input name="q22_4" type="radio" value="a">will been had married</label><br>
                        <label><input name="q22_4" type="radio" value="b">will have been married</label><br>
                        <label><input name="q22_4" type="radio" value="c">will have been married</label>
                    </div>
                    <div id="nb_22_5">
                        <p>22. … the washing-up before she goes out?</p>
                        <label><input name="q22_5" type="radio" value="a">Will she have done</label><br>
                        <label><input name="q22_5" type="radio" value="b">She will had done</label><br>
                        <label><input name="q22_5" type="radio" value="c">She will have done</label>
                    </div>
                </div>

                <div class="nb_23">
                    <div id="nb_23_1">
                        <p>23. I saw her ... into the building.</p>
                        <label><input name="q23_1" type="radio" value="a">to come</label><br>
                        <label><input name="q23_1" type="radio" value="b">coming</label><br>
                        <label><input name="q23_1" type="radio" value="c">come</label>
                    </div>
                    <div id="nb_23_2">
                        <p>23. I believed you ... three mobile phones.</p>
                        <label><input name="q23_2" type="radio" value="a">to have</label><br>
                        <label><input name="q23_2" type="radio" value="b">having</label><br>
                        <label><input name="q23_2" type="radio" value="c">have</label>
                    </div>
                    <div id="nb_23_3">
                        <p>23. He made me ... the window.</p>
                        <label><input name="q23_3" type="radio" value="a">to close</label><br>
                        <label><input name="q23_3" type="radio" value="b">closing</label><br>
                        <label><input name="q23_3" type="radio" value="c">close</label>
                    </div>
                    <div id="nb_23_4">
                        <p>23. I saw them ... in the park.</p>
                        <label><input name="q23_4" type="radio" value="a">to play</label><br>
                        <label><input name="q23_4" type="radio" value="b">playing</label><br>
                        <label><input name="q23_4" type="radio" value="c">play</label>
                    </div>
                    <div id="nb_23_5">
                        <p>23. She believes Mark ... a good guy.</p>
                        <label><input name="q23_5" type="radio" value="a">to be</label><br>
                        <label><input name="q23_5" type="radio" value="b">being</label><br>
                        <label><input name="q23_5" type="radio" value="c">be</label>
                    </div>
                </div>

                <div class="nb_24">
                    <div id="nb_24_1">
                        <p>24. I feel so desperate. I wish there ... a way out!</p>
                        <label><input name="q24_1" type="radio" value="a">will be</label><br>
                        <label><input name="q24_1" type="radio" value="b">were</label><br>
                        <label><input name="q24_1" type="radio" value="c">have been</label>
                    </div>
                    <div id="nb_24_2">
                        <p>24. Paul doesn’t have a lot of friends. But if you ... him better, you would understand how amicable he really is.</p>
                        <label><input name="q24_2" type="radio" value="a">known</label><br>
                        <label><input name="q24_2" type="radio" value="b">knew</label><br>
                        <label><input name="q24_2" type="radio" value="c">know</label>
                    </div>
                    <div id="nb_24_3">
                        <p>24. I think my mother would be disappointed if I ... my lessons.</p>
                        <label><input name="q24_3" type="radio" value="a">would skip</label><br>
                        <label><input name="q24_3" type="radio" value="b">had skipped</label><br>
                        <label><input name="q24_3" type="radio" value="c">skipped</label>
                    </div>
                    <div id="nb_24_4">
                        <p>24. This phone doesn’t work at all! I wish I ... it!</p>
                        <label><input name="q24_4" type="radio" value="a">didn’t buy</label><br>
                        <label><input name="q24_4" type="radio" value="b">hadn’t bought</label><br>
                        <label><input name="q24_4" type="radio" value="c">should not have bought</label>
                    </div>
                    <div id="nb_24_5">
                        <p>24. But for his rudeness, he ... to this position.</p>
                        <label><input name="q24_5" type="radio" value="a">would be accepted</label><br>
                        <label><input name="q24_5" type="radio" value="b">will be accepted</label><br>
                        <label><input name="q24_5" type="radio" value="c">were accepted</label>
                    </div>
                </div>

                <div class="nb_25">
                    <div id="nb_25_1">
                        <p>25. What does the man want to do after he graduates?</p>
                        <audio src="../sounds/school2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q25_1" type="radio" value="a">He wants to become a teacher</label><br>
                        <label><input name="q25_1" type="radio" value="b">He hopes to go on to graduate school</label><br>
                        <label><input name="q25_1" type="radio" value="c"> He’d like to work at a hotel</label>
                    </div>
                    <div id="nb_25_2">
                        <p>25. What is the woman majoring in?</p>
                        <audio src="../sounds/school2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q25_2" type="radio" value="a">history</label><br>
                        <label><input name="q25_2" type="radio" value="b">French</label><br>
                        <label><input name="q25_2" type="radio" value="c">computer science</label>
                    </div>
                    <div id="nb_25_3">
                        <p>25. How does the woman pay for college?</p>
                        <audio src="../sounds/school2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q25_3" type="radio" value="a">She has a part-time job</label><br>
                        <label><input name="q25_3" type="radio" value="b">She received a scholarship</label><br>
                        <label><input name="q25_3" type="radio" value="c">Her parents are paying for it</label>
                    </div>
                    <div id="nb_25_4">
                        <p>25. Where does the man work part-time?</p>
                        <audio src="../sounds/school2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q25_4" type="radio" value="a">at a bakery</label><br>
                        <label><input name="q25_4" type="radio" value="b">in a library</label><br>
                        <label><input name="q25_4" type="radio" value="c">at a restaurant</label>
                    </div>
                    <div id="nb_25_5">
                        <p>25. What thing did the man NOT say about his job?</p>
                        <audio src="../sounds/school2.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q25_5" type="radio" value="a">His co-workers are friendly</label><br>
                        <label><input name="q25_5" type="radio" value="b">He works long hours</label><br>
                        <label><input name="q25_5" type="radio" value="c">The pay is okay</label>
                    </div>
                </div>

                <div class="nb_26">
                    <div id="nb_26_1">
                        <p>26. He got up early ... he should be late for classes.</p>
                        <label><input name="q26_1" type="radio" value="a">lest</label><br>
                        <label><input name="q26_1" type="radio" value="b">that</label><br>
                        <label><input name="q26_1" type="radio" value="c">so</label>
                    </div>
                    <div id="nb_26_2">
                        <p>26. If he had come, we ... for a walk.</p>
                        <label><input name="q26_2" type="radio" value="a">would go</label><br>
                        <label><input name="q26_2" type="radio" value="b">will go</label><br>
                        <label><input name="q26_2" type="radio" value="c">would have gone</label>
                    </div>
                    <div id="nb_26_3">
                        <p>26. It is possible the weather ...</p>
                        <label><input name="q26_3" type="radio" value="a">may change</label><br>
                        <label><input name="q26_3" type="radio" value="b">should change</label><br>
                        <label><input name="q26_3" type="radio" value="c">changes</label>
                    </div>
                    <div id="nb_26_4">
                        <p>26. The suggestion was that we ... it as quickly as possible.</p>
                        <label><input name="q26_4" type="radio" value="a">must do</label><br>
                        <label><input name="q26_4" type="radio" value="b">do</label><br>
                        <label><input name="q26_4" type="radio" value="c">could do</label>
                    </div>
                    <div id="nb_26_5">
                        <p>26. I wish you ... better last term.</p>
                        <label><input name="q26_5" type="radio" value="a">would have studied</label><br>
                        <label><input name="q26_5" type="radio" value="b">would study</label><br>
                        <label><input name="q26_5" type="radio" value="c">study</label>
                    </div>
                </div>

                <div class="nb_27">
                    <div id="nb_27_1">
                        <p>27. Jill … on Monday. </p>
                        <label><input name="q27_1" type="radio" value="a">had taken her blood pressure</label><br>
                        <label><input name="q27_1" type="radio" value="b">her blood had taken pressure </label><br>
                        <label><input name="q27_1" type="radio" value="c">had her blood pressure taken</label>
                    </div>
                    <div id="nb_27_2">
                        <p>27. Anna … now.</p>
                        <label><input name="q27_2" type="radio" value="a">is having done her hair</label><br>
                        <label><input name="q27_2" type="radio" value="b">is having her hair done</label><br>
                        <label><input name="q27_2" type="radio" value="c">having her hair done</label>
                    </div>
                    <div id="nb_27_3">
                        <p>27. Dan …</p>
                        <label><input name="q27_3" type="radio" value="a">is going to have his walls painted</label><br>
                        <label><input name="q27_3" type="radio" value="b">is going to have painted his walls</label><br>
                        <label><input name="q27_3" type="radio" value="c">is going to had painted the walls</label>
                    </div>
                    <div id="nb_27_4">
                        <p>27. Mr. Smith … soon.</p>
                        <label><input name="q27_4" type="radio" value="a">will have reconstructed his house</label><br>
                        <label><input name="q27_4" type="radio" value="b">will have his house reconstructed</label><br>
                        <label><input name="q27_4" type="radio" value="c">his house will have reconstructed</label>
                    </div>
                    <div id="nb_27_5">
                        <p>27. Jim … every 6 months.</p>
                        <label><input name="q27_5" type="radio" value="a">has his dog vaccinated</label><br>
                        <label><input name="q27_5" type="radio" value="b">has vaccinated his dog</label><br>
                        <label><input name="q27_5" type="radio" value="c">is vaccinated his dog</label>
                    </div>
                </div>

                <div class="nb_28">
                    <div id="nb_28_1">
                        <p>28. I … the laundry for an hour when you get back.</p>
                        <label><input name="q28_1" type="radio" value="a">will have been dooing</label><br>
                        <label><input name="q28_1" type="radio" value="b">wil have been doing</label><br>
                        <label><input name="q28_1" type="radio" value="c">will have been doing</label>
                    </div>
                    <div id="nb_28_2">
                        <p>28. I … for an hour when you join me.</p>
                        <label><input name="q28_2" type="radio" value="a">will have been fished</label><br>
                        <label><input name="q28_2" type="radio" value="b">will have been fishing</label><br>
                        <label><input name="q28_2" type="radio" value="c">will have ben fishing</label>
                    </div>
                    <div id="nb_28_3">
                        <p>28. By the time my friends from Japan arrive, I … Japanese for a year.</p>
                        <label><input name="q28_3" type="radio" value="a">will have been learning</label><br>
                        <label><input name="q28_3" type="radio" value="b">will had been learning</label><br>
                        <label><input name="q28_3" type="radio" value="c">will has been learning</label>
                    </div>
                    <div id="nb_28_4">
                        <p>28. By the time he moves out, he … in this flat for 20 years.</p>
                        <label><input name="q28_4" type="radio" value="a">will have been lived</label><br>
                        <label><input name="q28_4" type="radio" value="b">will have been living</label><br>
                        <label><input name="q28_4" type="radio" value="c">will has been living</label>
                    </div>
                    <div id="nb_28_5">
                        <p>28. When she comes home, I … a book for two hours.</p>
                        <label><input name="q28_5" type="radio" value="a">will have been reading</label><br>
                        <label><input name="q28_5" type="radio" value="b">will have be reading</label><br>
                        <label><input name="q28_5" type="radio" value="c">will had been reading</label>
                    </div>
                </div>

                <div class="nb_29">
                    <div id="nb_29_1">
                        <p>29. If he ... an extra pen, he ... it to you.</p>
                        <label><input name="q29_1" type="radio" value="a">had, would given</label><br>
                        <label><input name="q29_1" type="radio" value="b">had, would give</label><br>
                        <label><input name="q29_1" type="radio" value="c">has, will gave</label>
                    </div>
                    <div id="nb_29_2">
                        <p>29. If I ... to bed early, I ... a good sleep.</p>
                        <label><input name="q29_2" type="radio" value="a">goes, will have </label><br>
                        <label><input name="q29_2" type="radio" value="b">go, will have</label><br>
                        <label><input name="q29_2" type="radio" value="c">go, will has</label>
                    </div>
                    <div id="nb_29_3">
                        <p>29. If you ... water up to 100 Celsius, it ...</p>
                        <label><input name="q29_3" type="radio" value="a">heats, will boil</label><br>
                        <label><input name="q29_3" type="radio" value="b">heat, boils</label><br>
                        <label><input name="q29_3" type="radio" value="c">will heat, boils</label>
                    </div>
                    <div id="nb_29_4">
                        <p>29. He … in time if he ... in a traffic jam.</p>
                        <label><input name="q29_4" type="radio" value="a">will be, isn’t caught</label><br>
                        <label><input name="q29_4" type="radio" value="b">will be, doesn’t caught</label><br>
                        <label><input name="q29_4" type="radio" value="c">would be, not caught</label>
                    </div>
                    <div id="nb_29_5">
                        <p>29. If you … exhausted, you …</p>
                        <label><input name="q29_5" type="radio" value="a">are, should leave</label><br>
                        <label><input name="q29_5" type="radio" value="b">was, should leave</label><br>
                        <label><input name="q29_5" type="radio" value="c">are, should left</label>
                    </div>
                </div>

                <div class="nb_30">
                    <div id="nb_30_1">
                        <p>30. What does the little boy NOT ask for Christmas?</p>
                        <audio src="../sounds/santa.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q30_1" type="radio" value="a">a toy train</label><br>
                        <label><input name="q30_1" type="radio" value="b">a play car</label><br>
                        <label><input name="q30_1" type="radio" value="c">hand-held radio receiver-transmitters</label>
                    </div>
                    <div id="nb_30_2">
                        <p>30. What does the girl want for Christmas?</p>
                        <audio src="../sounds/santa.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q30_2" type="radio" value="a">dolls</label><br>
                        <label><input name="q30_2" type="radio" value="b">Barbie playhouse</label><br>
                        <label><input name="q30_2" type="radio" value="c">marbles</label>
                    </div>
                    <div id="nb_30_3">
                        <p>30. What are some of the foods the children want to prepare for Santa’s reindeer?</p>
                        <audio src="../sounds/santa.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q30_3" type="radio" value="a">cookies, apples, and carrots</label><br>
                        <label><input name="q30_3" type="radio" value="b">hot chocolate, oranges, and corn</label><br>
                        <label><input name="q30_3" type="radio" value="c">apples, oranges, and cookies</label>
                    </div>
                    <div id="nb_30_4">
                        <p>30. What time do they plan to go to bed?</p>
                        <audio src="../sounds/santa.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q30_4" type="radio" value="a">7:00 p.m.</label><br>
                        <label><input name="q30_4" type="radio" value="b">8:00 p.m.</label><br>
                        <label><input name="q30_4" type="radio" value="c">9:00 p.m.</label>
                    </div>
                    <div id="nb_30_5">
                        <p>30. How is Santa going to enter the house?</p>
                        <audio src="../sounds/santa.mp3" type = "audio/mp3" controls>Ваш браузер не поддерживает этот аудио формат.</audio>
                        <br>
                        <label><input name="q30_5" type="radio" value="a">through the back door</label><br>
                        <label><input name="q30_5" type="radio" value="b">down the chimney</label><br>
                        <label><input name="q30_5" type="radio" value="c">through a basement window</label>
                    </div>
                </div>

                <input type = "submit" name = "btn_start" value = "Результат">
            </form>
        </div>
    </div>

<footer>
    <div class="container">
        <div class="footer">
            <nav>
                <ul class="footer_items">
                    <li class="fot_item"><a href="authorized_user.php">Главная</a></li>
                    <li class="fot_item"><a href="grammar_authorized.php">Грамматика</a></li>
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