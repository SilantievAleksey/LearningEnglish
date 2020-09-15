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
    <link rel="stylesheet" href="../css/main.css">
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
    <title>English Club - сервис по изучению ангийского языка</title>
</head>
<body class="page_fix">

<?php
    require "db.php"; // подключаем файл для соединения с БД

    if (isset($_POST['email']))
    {
        // Проверка на уникальность email
        if(R::count('subscriptions', "email = ?", array($_POST['email'])) <= 0)
        {
            $subscriptions = R::dispense('subscriptions');
            // добавляем в таблицу записи
            $subscriptions->email = $_POST['email'];
            R::store($subscriptions);

            $message = "Здравствуйте! Вы подписались на рассылку полезных материалов от сайта English Club\nТеперь вы будете получать полезные материалы по изучению английского языка!";
            $to = $_POST['email'];
            $subject = "Полезные материалы от сайта English Club";
            $headers = "From: aleksey01032000@gmail.com\r\nReply-to: aleksey01032000@gmail.com\r\nContent-type:text/plain; charset=utf-8\r\n";
            mail($to,$subject,$message,$headers);

            header('Location: main.php');
        }
        else{
            $message = "Здравствуйте! Скоро будет глобальная рассылка статей и полезных материалов по грамматике! Ждите!";
            $to = $_POST['email'];
            $subject = "Полезные материалы от сайта English Club";
            $headers = "From: aleksey01032000@gmail.com\r\nReply-to: aleksey01032000@gmail.com;\r\nContent-type:text/plain; charset=utf-8\r\n";
            mail($to,$subject,$message,$headers);

            header('Location: main.php');
        }
    }
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
            <?php
            if (isset($_POST['search'])){
                $search = R::findOne('vocabulary', 'title = ?', array($_POST['main_search']));
                if ($search)
                {
                    echo "<p class='text_result'>Результат: </p>" . "<a href='#' style='color: red'>".$_POST['main_search']."</a>";
                }
                else{
                    echo  "Не найдено";
                }
            }
            ?>
        </div>
        <div class="menu_content">
            <div class="menu_content_text">
                <h1>Материалы для <br> самостоятельного изучения <br> английского языка</h1>
                <p>Начните учить английский самостоятельно прямо сейчас!</p>
                <a href="register.php" type="button" class="menu_content_btn">Начать изучение</a>
            </div>
            <img src="../images/HumanRead.png" alt="Human">
        </div>
    </div>
</header>

<section class="main_advantage">
    <div class="container">
        <div class="main_advantage_text">
            <p>Преимущества изучения английского с English Club</p>
        </div>
        <div class="advantages">
            <div class="global_student">
                <img src="../images/IndividulLearn.png" alt="IndividulLearn">
                <h1>Индивидуальное обучение</h1>
                <p>Уроки адаптируются под ваш стиль занятий. Упражнения разработаны для максимально эффективного пополнения словарного запаса.</p>
            </div>
            <div class="support">
                <img src="../images/TechnicalSupport.png" alt="TechnicalSupport">
                <h1>Онлайн Поддержка</h1>
                <p>Наш умный чат-бот поможет каждому освоиться на нашем сайте.</p>
            </div>
            <div class="unique_profile">
                <img src="../images/Result.png" alt="Result">
                <h1>Быстрое развитие</h1>
                <p>Программа обучения помогает быстро совершенствовать знания английского языка</p>
            </div>
        </div>
    </div>
</section>

<section class="mailing">
    <div class="container">
        <div class="mailing_main">
            <div class="mailing_letter">
                <img src="../images/Letter.png" alt="Letter">
            </div>
            <div class="mailing_text">
                <h1>Не хочешь пропускать новые материалы? <br>Оформи бесплатную рассылку "English Club"</h1>
                <p>- Новые дополнительные материалы для изучения английского</p>
                <p>- Подборка статей и книг по различным темам</p>
                <p>- Аудио и видео материалы</p>
                <form action="main.php" method="post">
                    <input type="email" placeholder="username@mail.ru" name="email" required>
                    <button type="submit" name="send_on_email">Подписаться</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="purposes">
    <div class="container">
        <h1>Цели курса</h1>
        <div class="purposes_main">
            <div class="purposes_grammar_learn">
                <img src="../images/GrammarLearn.png" alt="GrammarLearn">
                <h1>Самостоятельно разобраться с теорией грамматики английского языка</h1>
                <p>Каждый урок курса – это сочетание теоретической части и практических заданий.</p>
            </div>
            <div class="purposes_grammar_practice">
                <img src="../images/TestsPractice.png" alt="TestsPractice">
                <h1>Научиться применять теоретические знания грамматических правил английского языка на практике</h1>
                <p>Ознакомившись с теорией, необходимо выполнить упражнения урока.</p>
            </div>
            <div class="purposes_grammar_additional_learn">
                <img src="../images/VideoAndAudio.png" alt="VideoAndAudio">
                <h1>Возможность комплексного изучения английской грамматики</h1>
                <p>В дополнение к теоретическим и практическим материалам, прилагаются аудио и видео материалы.</p>
            </div>
        </div>
    </div>
</section>

<section class="grammar">
    <div class="container">
        <div class="grammar_main">
            <div class="grammar_text">
                <h1>Справочник</h1>
                <p>- Основные сведения о частях речи, артиклях, глагольных временах и <br> структуре английского предложения</p>
                <p>- Возможность выбирать уровень сложности</p>
                <p>- Тесты по пройденным темам</p>
                <a href="grammar.php">Перейти к грамматике</a>
            </div>
            <div class="grammar_image">
                <img src="../images/Grammar.png" alt="Grammar">
            </div>
        </div>
    </div>
</section>

<section class="tests">
    <div class="container">
        <div class="tests_main">
            <div class="tests_image">
                <img src="../images/Tests.png" alt="Tests">
            </div>
            <div class="tests_text">
                <h1>Тесты</h1>
                <p>- Выполняйте тесты по уровням сложности по изученным темам</p>
                <p>- Возможность выполнять аудио задания</p>
                <a href="tests_for_unauthorized.php">Перейти к тестам</a>
            </div>
        </div>
    </div>
</section>

<section class="articles">
    <div class="container">
        <div class="articles_main">
            <div class="articles_text">
                <h1>Книги (Для зарегистрированных пользователей)</h1>
                <p>- Читайте книги по различным направлениям</p>
                <p>- Возможность сохранять и скачивать книги в PDF</p>
                <p>- Имеется перевод каждой книги или же частичный перевов слов</p>
                <a href="register.php">Перейти к книгам</a>
            </div>
            <div class="articles_image">
                <img src="../images/Articles.png" alt="Articles">
            </div>
        </div>
    </div>
</section>

<section class="translator_vocabulary">
    <div class="container">
        <div class="translator_vocabulary_main">
            <div class="translator_vocabulary_image">
                <img src="../images/Dictionary.png" alt="Dictionary">
            </div>
            <div class="translator_vocabulary_text">
                <h1>Словарь</h1>
                <p>- Полный перевод статей и слов</p>
                <p>- Возможность перевода неизвестных слов при наведении</p>
                <a href="vocabulary.php">Перейти к словарю</a>
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