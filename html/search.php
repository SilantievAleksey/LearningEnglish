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
    <link rel="stylesheet" href="../css/search.css">
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
    <title>Источники</title>
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
                <form action="" method="get">
                    <input type="search" placeholder="Искать на сайте...">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </div>
</header>

<section class="search">
    <div class="container_2">
        <div class="search_main">
            <?php
            if (isset($_POST['search_word'])){
                $search_q=$_POST['main_search'];
                if ($search_q != ''){
                    $l= mysqli_connect('localhost', 'f0424952_reg', '123', 'register');
                    $search_q = trim($search_q);
                    $search_q = strip_tags($search_q);
                    $q= "SELECT title_value,content FROM search WHERE title_value LIKE '%$search_q%'";
                    if ($result = mysqli_query($l, $q)) {
                        echo '<p>Обнаруженные совпадения:</p>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<a href='{$row['content']}'>{$row['content']}</a><br>";
                        }
                        mysqli_free_result($result);
                    }
                    else{
                        echo '<p>Ничего не найдено!</p>';
                    }
                    mysqli_close($l);
                }
                else{
                    echo '<p>Не введены данные для поиска!</p>';
                }
            }
            ?>
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