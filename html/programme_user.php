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
    <link rel="stylesheet" href="../css/programme_user.css">
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
    <title>Индивидуальная программа</title>
</head>
<body class="page_fix">

<?php
    require "db.php"; // подключаем файл для соединения с БД
    $user = R::findOne('users', 'email = ?', array($_COOKIE['email']));
    $user_id = $user->id;
    $exist = R::findOne('programme', 'id_user = ?', array($user_id));
    $number = 1;
?>

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
                    <li><a href="#">Индивидуальная программа</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="global">
   <div class="container_2">
      <div class="global_content">

          <div class="global_menu">

              <?php

                  if ($exist->t1 == 0){

                      echo " <div class=\"part\">
                                  <input id=\"tab-1\" type=\"checkbox\" name=\"tabs\">
                                  <label for=\"tab-1\">Урок $number</label>
                                  <div class=\"part_list\">
                                      <nav>
                                          <ul class=\"zebra\">
                                              <li><a href=\"#\">Личные местоимения</a></li>
                                              <li><a href=\"#\">Глагол TO BE</a></li>
                                          </ul>
                                      </nav>
                                  </div>
                               </div>";
                      $number++;
                  }
                  ?>

              <?php

                if($exist->t1 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-2\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-2\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Неопределенный артикль</a></li>
                                  <li><a href=\"#\">Множественное число существительных</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }

              ?>


              <?php
                if ($exist->t2 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-3\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-3\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Притяжательные местоимения</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t2 == 0){
                    echo  " <div class=\"part\">
                      <input id=\"tab-4\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-4\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Притяжательный падеж</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t3 == 0)
                {
                    echo  " <div class=\"part\">
                      <input id=\"tab-5\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-5\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Указательные местоимения</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t3 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-6\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-6\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Present Simple</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t4 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-7\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-7\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Типы вопросов</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t4 == 0){
                    echo  "<div class=\"part\">
                      <input id=\"tab-8\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-8\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Прилагательные</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t5 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-9\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-9\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Предлоги времени</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t5 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-10\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-10\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Модальный глагол CAN</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t6 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-11\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-11\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Past Simple</a></li>
                                  <li><a href=\"#\">Правильные и неправильные глаголы</a></li>
                                  <li><a href=\"#\">Таблица неправильных глаголов</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t6 == 0){
                    echo  "  <div class=\"part\">
                      <input id=\"tab-12\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-12\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Оборот there + be (there is / there are)</a></li>
                                  <li><a href=\"#\">Предлоги места (at, in, on)</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t7 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-13\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-13\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Present Continuous</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t7 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-14\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-14\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Исчисляемые и неисчисляемые существительные</a></li>
                                  <li><a href=\"#\">Употребление some, any, no</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t8 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-15\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-15\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Употребление much, many, few, little, a lot of, plenty</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t8 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-16\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-16\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Выражение be going to</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t9 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-17\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-17\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Future Simple</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t9 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-18\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-18\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Степени сравнения прилагательных</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t10 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-19\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-19\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Наречия</a></li>
                                  <li><a href=\"#\">Образование наречий</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t10 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-20\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-20\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Present Perfect</a></li>
                                  <li><a href=\"#\">Наречия с Present Perfect</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t11 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-21\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-21\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Past Continuous</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t12 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-2234\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-2234\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Относительные местоимения</a></li>
                                  <li><a href=\"#\">Неопределенные местоимения</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t12 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-234\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-234\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Модальный глагол MUST</a></li>
                                  <li><a href=\"#\">Модальный глагол HAVE TO</a></li>
                                  <li><a href=\"#\">Модальный глагол SHALL (SHOULD)</a></li>
                                  <li><a href=\"#\">Модальный глагол MAY (MIGHT)</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t13 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-24\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-24\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Условные предложения</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t13 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-25\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-25\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Present Perfect Continuous </a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t14 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-26\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-26\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Past Perfect</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t14 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-27\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-27\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Can (could) и be able to</a></li>
                                  <li><a href=\"#\">Прилагательные на –ing и –ed</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t14 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-28\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-28\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Should, must или have to?</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t15 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-230\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-230\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Модальный глагол NEED</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t15 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-30\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-30\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Модальный глагол OUGHT TO</a></li>
                                  <li><a href=\"#\">Модальный глагол WILL (WOULD)</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t16 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-31\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-31\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Выражения used to do и used to doing something</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t16 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-32\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-32\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Образование существительных в английском языке</a></li>
                                  <li><a href=\"#\">Суффиксы существительных</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t17 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-33\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-33\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Степени сравнения прилагательных</a></li>
                                  <li><a href=\"#\">Сильные и слабые прилагательные в английском языке</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t18 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-34\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-34\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Неопределенный артикль</a></li>
                                  <li><a href=\"#\">Определенный артикль</a></li>
                                  <li><a href=\"#\">Нулевой артикль</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t18 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-35\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-35\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Артикли с уникальными существительными</a></li>
                                  <li><a href=\"#\">Артикли с личными именами</a></li>
                                  <li><a href=\"#\">Артикли с именами собственными</a></li>
                                  <li><a href=\"#\">Артикли с географическими названиями</a></li>
                                  <li><a href=\"#\">Артикли с названиями болезней</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if($exist->t19 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-36\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-36\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Герундий</a></li>
                                  <li><a href=\"#\">Инфинитив</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t19 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-37\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-37\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Причастие</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t20 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-38\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-38\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Придаточные предложения в английском языке</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t20 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-39\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-39\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Условные предложения</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t22 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-40\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-40\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Passive Voice</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t22 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-41\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-41\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Косвенная речь</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t23 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-443\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-443\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Фразовые глаголы</a></li>
                                  <li><a href=\"#\">Фразовый глагол break</a></li>
                                  <li><a href=\"#\">Фразовый глагол look</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t23 == 0){
                    echo "  <div class=\"part\">
                      <input id=\"tab-43\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-43\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Фразовый глагол bring </a></li>
                                  <li><a href=\"#\">Фразовый глагол make</a></li>
                                  <li><a href=\"#\">Фразовый глагол pay</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t23 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-44\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-44\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Фразовый глагол do</a></li>
                                  <li><a href=\"#\">Фразовый глагол give</a></li>
                                  <li><a href=\"#\">Фразовый глагол set</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t23 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-45\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-45\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Фразовый глагол hold</a></li>
                                  <li><a href=\"#\">Фразовый глагол move</a></li>
                                  <li><a href=\"#\">Фразовый глагол take</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t23 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-46\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-46\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Фразовый глагол keep</a></li>
                                  <li><a href=\"#\">Фразовый глагол leave</a></li>
                                  <li><a href=\"#\">Фразовый глагол put</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t24 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-47\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-47\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Порядок прилагательных</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t25 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-48\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-48\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Время Future Continuous</a></li>
                                  <li><a href=\"#\">Время Future Perfect Continuous</a></li>
                                  <li><a href=\"#\">Время Future Perfect</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t26 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-49\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-49\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Самостоятельный причастный оборот</a></li>
                                  <li><a href=\"#\">Самостоятельный инфинитивный оборот</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t27 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-50\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-50\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Сложное подлежащее Complex Subject</a></li>
                                  <li><a href=\"#\">Сложное дополнение Complex Object</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t28 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-51\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-51\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Наклонение и четыре типа условия</a></li>
                                  <li><a href=\"#\">Употребление сослагательного наклонения</a></li>
                                  <li><a href=\"#\">Сослагательное наклонение в простом предложении</a></li>
                                  <li><a href=\"#\">Формы сослагательного наклонения в сложном предложении в схемах</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t28 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-52\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-52\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Выражение had better</a></li>
                                  <li><a href=\"#\">Употребление would rather, sooner, prefer</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t29 == 0){
                    echo "<div class=\"part\">
                      <input id=\"tab-53\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-53\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Таблицы вопросительных предложений по временам</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t30 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-54\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-54\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Инверсия (обратный порядок слов)</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

              <?php
                if ($exist->t30 == 0){
                    echo " <div class=\"part\">
                      <input id=\"tab-55\" type=\"checkbox\" name=\"tabs\">
                      <label for=\"tab-55\">Урок $number</label>
                      <div class=\"part_list\">
                          <nav>
                              <ul class=\"zebra\">
                                  <li><a href=\"#\">Предложения с I wish</a></li>
                                  <li><a href=\"#\">Выражение have something done</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>";
                    $number++;
                }
              ?>

          </div>

          <div class="global_inf" id="global_inf">
              <h1>Материалы временно отсутствуют</h1>
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
