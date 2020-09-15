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
    <link rel="stylesheet" href="../css/books.css">
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
    <script src="//static.anyflip.com/plugin/LightBox/js/anyflp-light-box-api-min.js"></script>
    <title>Книги</title>
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
                    <li><a href="authorized_user.php">Главная</a></li>
                    <li><a href="#">/</a></li>
                    <li><a href="#">Книги</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="books">
    <div class="container_2">
        <div class="books_main">
            <div class="book">
                <div class="book_image">
                    <img src='http://online.anyflip.com/uslfa/glam/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.anyflip.com/uslfa/glam/' data-width='550' data-height='350' data-title='Деловые приемы и встречи на английском'>
                    <p>Нажмите для просмотра</p>
                </div>
                <div class="book_text">
                    <h1>Деловые приемы и встречи на английском</h1>
                    <p>Книга содержит 12 тем по разным видам деловых встреч и коммуникаций. К каждой теме идет набор упражнений и словарь бизнес-лексики</p>
                    <p>Автор: Серена Мёрдок-Стерн</p>
                    <p>Кол-во страниц: 127</p>
                </div>
            </div>
            <div class="book">
                <div class="book_image">
                    <img src='http://online.anyflip.com/uslfa/rwtp/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.anyflip.com/uslfa/rwtp/' data-width='700' data-height='425' data-title='Английская грамматика в вопросах и ответах'>
                    <p>Нажмите для просмотра</p>
                </div>
                <div class="book_text">
                    <h1>Английская грамматика в вопросах и ответах</h1>
                    <p>Книга содержит основные правила использования различных грамматических конструкций английского языка, объясняет, как неправильно выбранное время полностью меняет смысл предложения. Подходит для всех, кто хочет разобраться в нюансах английской грамматики.</p>
                    <p>Автор: Елизавета Хейнонен</p>
                    <p>Кол-во страниц: 288</p>
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