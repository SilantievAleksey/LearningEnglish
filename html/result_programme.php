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
    <link rel="stylesheet" href="../css/result_programme.css">
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
    <title>Результат тестирования</title>
</head>
<body class="page_fix">

<?php

    require "db.php"; // подключаем файл для соединения с БД

    $ot = 0;
    $not = 0;

    $user = R::findOne('users', 'email = ?', array($_COOKIE['email']));
    $user_id = $user->id;
    $exist = R::findOne('programme', 'id_user = ?', array($user_id));

    if (!$exist)
    {
        $programme_user = R::dispense('programme');

        $programme_user->id_user = $user_id;

        if (isset($_POST['q1_1'])) { if ($_POST['q1_1'] == 'c'){$ot++;$programme_user->t1 = 1;} else {$not++;$programme_user->t1 = 0;}}else{$programme_user->t1 = 0;}
        if (isset($_POST['q1_2'])) { if ($_POST['q1_2'] == 'b'){$ot++;$programme_user->t1 = 1;} else {$not++;$programme_user->t1 = 0;}}else{$programme_user->t1 = 0;}
        if (isset($_POST['q1_3'])) { if ($_POST['q1_3'] == 'b'){$ot++;$programme_user->t1 = 1;} else {$not++;$programme_user->t1 = 0;}}else{$programme_user->t1 = 0;}
        if (isset($_POST['q1_4'])) { if ($_POST['q1_4'] == 'a'){$ot++;$programme_user->t1 = 1;} else {$not++;$programme_user->t1 = 0;}}else{$programme_user->t1 = 0;}
        if (isset($_POST['q1_5'])) { if ($_POST['q1_5'] == 'b'){$ot++;$programme_user->t1 = 1;} else {$not++;$programme_user->t1 = 0;}}else{$programme_user->t1 = 0;}

        if (isset($_POST['q2_1'])) {if ($_POST['q2_1'] == 'a'){$ot++;$programme_user->t2 = 1;} else {$not++;$programme_user->t2 = 0;}}else{$programme_user->t2 = 0;}
        if (isset($_POST['q2_2'])) {if ($_POST['q2_2'] == 'c'){$ot++;$programme_user->t2 = 1;} else {$not++;$programme_user->t2 = 0;}}else{$programme_user->t2 = 0;}
        if (isset($_POST['q2_3'])) {if ($_POST['q2_3'] == 'b'){$ot++;$programme_user->t2 = 1;} else {$not++;$programme_user->t2 = 0;}}else{$programme_user->t2 = 0;}
        if (isset($_POST['q2_4'])) {if ($_POST['q2_4'] == 'a'){$ot++;$programme_user->t2 = 1;} else {$not++;$programme_user->t2 = 0;}}else{$programme_user->t2 = 0;}
        if (isset($_POST['q2_5'])) {if ($_POST['q2_5'] == 'b'){$ot++;$programme_user->t2 = 1;} else {$not++;$programme_user->t2 = 0;}}else{$programme_user->t2 = 0;}

        if (isset($_POST['q3_1'])) {if ($_POST['q3_1'] == 'b'){$ot++;$programme_user->t3 = 1;} else {$not++;$programme_user->t3 = 0;}}else{$programme_user->t3 = 0;}
        if (isset($_POST['q3_2'])) {if ($_POST['q3_2'] == 'c'){$ot++;$programme_user->t3 = 1;} else {$not++;$programme_user->t3 = 0;}}else{$programme_user->t3 = 0;}
        if (isset($_POST['q3_3'])) {if ($_POST['q3_3'] == 'a'){$ot++;$programme_user->t3 = 1;} else {$not++;$programme_user->t3 = 0;}}else{$programme_user->t3 = 0;}
        if (isset($_POST['q3_4'])) {if ($_POST['q3_4'] == 'a'){$ot++;$programme_user->t3 = 1;} else {$not++;$programme_user->t3 = 0;}}else{$programme_user->t3 = 0;}
        if (isset($_POST['q3_5'])) {if ($_POST['q3_5'] == 'c'){$ot++;$programme_user->t3 = 1;} else {$not++;$programme_user->t3 = 0;}}else{$programme_user->t3 = 0;}


        if (isset($_POST['q4_1'])) {if ($_POST['q4_1'] == 'b'){$ot++;$programme_user->t4 = 1;} else {$not++;$programme_user->t4 = 0;}}else{$programme_user->t4 = 0;}
        if (isset($_POST['q4_2'])) {if ($_POST['q4_2'] == 'b'){$ot++;$programme_user->t4 = 1;} else {$not++;$programme_user->t4 = 0;}}else{$programme_user->t4 = 0;}
        if (isset($_POST['q4_3'])) {if ($_POST['q4_3'] == 'a'){$ot++;$programme_user->t4 = 1;} else {$not++;$programme_user->t4 = 0;}}else{$programme_user->t4 = 0;}
        if (isset($_POST['q4_4'])) {if ($_POST['q4_4'] == 'c'){$ot++;$programme_user->t4 = 1;} else {$not++;$programme_user->t4 = 0;}}else{$programme_user->t4 = 0;}
        if (isset($_POST['q4_5'])) {if ($_POST['q4_5'] == 'c'){$ot++;$programme_user->t4 = 1;} else {$not++;$programme_user->t4 = 0;}}else{$programme_user->t4 = 0;}

        if (isset($_POST['q5_1'])) {if ($_POST['q5_1'] == 'b'){$ot++;$programme_user->t5 = 1;} else {$not++;$programme_user->t5 = 0;}}else{$programme_user->t5 = 0;}
        if (isset($_POST['q5_2'])) {if ($_POST['q5_2'] == 'b'){$ot++;$programme_user->t5 = 1;} else {$not++;$programme_user->t5 = 0;}}else{$programme_user->t5 = 0;}
        if (isset($_POST['q5_3'])) {if ($_POST['q5_3'] == 'a'){$ot++;$programme_user->t5 = 1;} else {$not++;$programme_user->t5 = 0;}}else{$programme_user->t5 = 0;}
        if (isset($_POST['q5_4'])) {if ($_POST['q5_4'] == 'a'){$ot++;$programme_user->t5 = 1;} else {$not++;$programme_user->t5 = 0;}}else{$programme_user->t5 = 0;}
        if (isset($_POST['q5_5'])) {if ($_POST['q5_5'] == 'c'){$ot++;$programme_user->t5 = 1;} else {$not++;$programme_user->t5 = 0;}}else{$programme_user->t5 = 0;}

        if (isset($_POST['q6_1'])) {if ($_POST['q6_1'] == 'c'){$ot++;$programme_user->t6 = 1;} else {$not++;}$programme_user->t6 = 0;}else{$programme_user->t6 = 0;}
        if (isset($_POST['q6_2'])) {if ($_POST['q6_2'] == 'b'){$ot++;$programme_user->t6 = 1;} else {$not++;}$programme_user->t6 = 0;}else{$programme_user->t6 = 0;}
        if (isset($_POST['q6_3'])) {if ($_POST['q6_3'] == 'a'){$ot++;$programme_user->t6 = 1;} else {$not++;}$programme_user->t6 = 0;}else{$programme_user->t6 = 0;}
        if (isset($_POST['q6_4'])) {if ($_POST['q6_4'] == 'c'){$ot++;$programme_user->t6 = 1;} else {$not++;}$programme_user->t6 = 0;}else{$programme_user->t6 = 0;}
        if (isset($_POST['q6_5'])) {if ($_POST['q6_5'] == 'a'){$ot++;$programme_user->t6 = 1;} else {$not++;}$programme_user->t6 = 0;}else{$programme_user->t6 = 0;}

        if (isset($_POST['q7_1'])) {if ($_POST['q7_1'] == 'b'){$ot++;$programme_user->t7 = 1;} else {$not++;$programme_user->t7 = 0;}}else{$programme_user->t7 = 0;}
        if (isset($_POST['q7_2'])) {if ($_POST['q7_2'] == 'c'){$ot++;$programme_user->t7 = 1;} else {$not++;$programme_user->t7 = 0;}}else{$programme_user->t7 = 0;}
        if (isset($_POST['q7_3'])) {if ($_POST['q7_3'] == 'c'){$ot++;$programme_user->t7 = 1;} else {$not++;$programme_user->t7 = 0;}}else{$programme_user->t7 = 0;}
        if (isset($_POST['q7_4'])) {if ($_POST['q7_4'] == 'a'){$ot++;$programme_user->t7 = 1;} else {$not++;$programme_user->t7 = 0;}}else{$programme_user->t7 = 0;}
        if (isset($_POST['q7_5'])) {if ($_POST['q7_5'] == 'c'){$ot++;$programme_user->t7 = 1;} else {$not++;$programme_user->t7 = 0;}}else{$programme_user->t7 = 0;}

        if (isset($_POST['q8_1'])) {if ($_POST['q8_1'] == 'b'){$ot++;$programme_user->t8 = 1;} else {$not++;$programme_user->t8 = 0;}}else{$programme_user->t8 = 0;}
        if (isset($_POST['q8_2'])) {if ($_POST['q8_2'] == 'b'){$ot++;$programme_user->t8 = 1;} else {$not++;$programme_user->t8 = 0;}}else{$programme_user->t8 = 0;}
        if (isset($_POST['q8_3'])) {if ($_POST['q8_3'] == 'a'){$ot++;$programme_user->t8 = 1;} else {$not++;$programme_user->t8 = 0;}}else{$programme_user->t8 = 0;}
        if (isset($_POST['q8_4'])) {if ($_POST['q8_4'] == 'b'){$ot++;$programme_user->t8 = 1;} else {$not++;$programme_user->t8 = 0;}}else{$programme_user->t8 = 0;}
        if (isset($_POST['q8_5'])) {if ($_POST['q8_5'] == 'c'){$ot++;$programme_user->t8 = 1;} else {$not++;$programme_user->t8 = 0;}}else{$programme_user->t8 = 0;}

        if (isset($_POST['q9_1'])) {if ($_POST['q9_1'] == 'c'){$ot++;$programme_user->t9 = 1;} else {$not++;$programme_user->t9 = 0;}}else{$programme_user->t9 = 0;}
        if (isset($_POST['q9_2'])) {if ($_POST['q9_2'] == 'a'){$ot++;$programme_user->t9 = 1;} else {$not++;$programme_user->t9 = 0;}}else{$programme_user->t9 = 0;}
        if (isset($_POST['q9_3'])) {if ($_POST['q9_3'] == 'b'){$ot++;$programme_user->t9 = 1;} else {$not++;$programme_user->t9 = 0;}}else{$programme_user->t9 = 0;}
        if (isset($_POST['q9_4'])) {if ($_POST['q9_4'] == 'a'){$ot++;$programme_user->t9 = 1;} else {$not++;$programme_user->t9 = 0;}}else{$programme_user->t9 = 0;}
        if (isset($_POST['q9_5'])) {if ($_POST['q9_5'] == 'b'){$ot++;$programme_user->t9 = 1;} else {$not++;$programme_user->t9 = 0;}}else{$programme_user->t9 = 0;}

        if (isset($_POST['q10_1'])) {if ($_POST['q10_1'] == 'a'){$ot++;$programme_user->t10 = 1;} else {$not++;$programme_user->t10 = 0;}}else{$programme_user->t10 = 0;}
        if (isset($_POST['q10_2'])) {if ($_POST['q10_2'] == 'c'){$ot++;$programme_user->t10 = 1;} else {$not++;$programme_user->t10 = 0;}}else{$programme_user->t10 = 0;}
        if (isset($_POST['q10_3'])) {if ($_POST['q10_3'] == 'a'){$ot++;$programme_user->t10 = 1;} else {$not++;$programme_user->t10 = 0;}}else{$programme_user->t10 = 0;}
        if (isset($_POST['q10_4'])) {if ($_POST['q10_4'] == 'b'){$ot++;$programme_user->t10 = 1;} else {$not++;$programme_user->t10 = 0;}}else{$programme_user->t10 = 0;}
        if (isset($_POST['q10_5'])) {if ($_POST['q10_5'] == 'c'){$ot++;$programme_user->t10 = 1;} else {$not++;$programme_user->t10 = 0;}}else{$programme_user->t10 = 0;}

        if (isset($_POST['q11_1'])) {if ($_POST['q11_1'] == 'a'){$ot++;$programme_user->t11 = 1;} else {$not++;$programme_user->t11 = 0;}}else{$programme_user->t11 = 0;}
        if (isset($_POST['q11_2'])) {if ($_POST['q11_2'] == 'b'){$ot++;$programme_user->t11 = 1;} else {$not++;$programme_user->t11 = 0;}}else{$programme_user->t11 = 0;}
        if (isset($_POST['q11_3'])) {if ($_POST['q11_3'] == 'a'){$ot++;$programme_user->t11 = 1;} else {$not++;$programme_user->t11 = 0;}}else{$programme_user->t11 = 0;}
        if (isset($_POST['q11_4'])) {if ($_POST['q11_4'] == 'a'){$ot++;$programme_user->t11 = 1;} else {$not++;$programme_user->t11 = 0;}}else{$programme_user->t11 = 0;}
        if (isset($_POST['q11_5'])) {if ($_POST['q11_5'] == 'a'){$ot++;$programme_user->t11 = 1;} else {$not++;$programme_user->t11 = 0;}}else{$programme_user->t11 = 0;}

        if (isset($_POST['q12_1'])) {if ($_POST['q12_1'] == 'a'){$ot++;$programme_user->t12 = 1;} else {$not++;$programme_user->t12 = 0;}}else{$programme_user->t12 = 0;}
        if (isset($_POST['q12_2'])) {if ($_POST['q12_2'] == 'a'){$ot++;$programme_user->t12 = 1;} else {$not++;$programme_user->t12 = 0;}}else{$programme_user->t12 = 0;}
        if (isset($_POST['q12_3'])) {if ($_POST['q12_3'] == 'a'){$ot++;$programme_user->t12 = 1;} else {$not++;$programme_user->t12 = 0;}}else{$programme_user->t12 = 0;}
        if (isset($_POST['q12_4'])) {if ($_POST['q12_4'] == 'c'){$ot++;$programme_user->t12 = 1;} else {$not++;$programme_user->t12 = 0;}}else{$programme_user->t12 = 0;}
        if (isset($_POST['q12_5'])) {if ($_POST['q12_5'] == 'b'){$ot++;$programme_user->t12 = 1;} else {$not++;$programme_user->t11 = 0;}}else{$programme_user->t12 = 0;}

        if (isset($_POST['q13_1'])) {if ($_POST['q13_1'] == 'b'){$ot++;$programme_user->t13 = 1;} else {$not++;$programme_user->t13 = 0;}}else{$programme_user->t13 = 0;}
        if (isset($_POST['q13_2'])) {if ($_POST['q13_2'] == 'c'){$ot++;$programme_user->t13 = 1;} else {$not++;$programme_user->t13 = 0;}}else{$programme_user->t13 = 0;}
        if (isset($_POST['q13_3'])) {if ($_POST['q13_3'] == 'c'){$ot++;$programme_user->t13 = 1;} else {$not++;$programme_user->t13 = 0;}}else{$programme_user->t13 = 0;}
        if (isset($_POST['q13_4'])) {if ($_POST['q13_4'] == 'b'){$ot++;$programme_user->t13 = 1;} else {$not++;$programme_user->t13 = 0;}}else{$programme_user->t13 = 0;}
        if (isset($_POST['q13_5'])) {if ($_POST['q13_5'] == 'b'){$ot++;$programme_user->t13 = 1;} else {$not++;$programme_user->t13 = 0;}}else{$programme_user->t13 = 0;}

        if (isset($_POST['q14_1'])) {if ($_POST['q14_1'] == 'b'){$ot++;$programme_user->t14 = 1;} else {$not++;$programme_user->t14 = 0;}}else{$programme_user->t14 = 0;}
        if (isset($_POST['q14_2'])) {if ($_POST['q14_2'] == 'b'){$ot++;$programme_user->t14 = 1;} else {$not++;$programme_user->t14 = 0;}}else{$programme_user->t14 = 0;}
        if (isset($_POST['q14_3'])) {if ($_POST['q14_3'] == 'c'){$ot++;$programme_user->t14 = 1;} else {$not++;$programme_user->t14 = 0;}}else{$programme_user->t14 = 0;}
        if (isset($_POST['q14_4'])) {if ($_POST['q14_4'] == 'b'){$ot++;$programme_user->t14 = 1;} else {$not++;$programme_user->t14 = 0;}}else{$programme_user->t14 = 0;}
        if (isset($_POST['q14_5'])) {if ($_POST['q14_5'] == 'a'){$ot++;$programme_user->t14 = 1;} else {$not++;$programme_user->t14 = 0;}}else{$programme_user->t14 = 0;}

        if (isset($_POST['q15_1'])) {if ($_POST['q15_1'] == 'c'){$ot++;$programme_user->t15 = 1;} else {$not++;$programme_user->t15 = 0;}}else{$programme_user->t15 = 0;}
        if (isset($_POST['q15_2'])) {if ($_POST['q15_2'] == 'b'){$ot++;$programme_user->t15 = 1;} else {$not++;$programme_user->t15 = 0;}}else{$programme_user->t15 = 0;}
        if (isset($_POST['q15_3'])) {if ($_POST['q15_3'] == 'b'){$ot++;$programme_user->t15 = 1;} else {$not++;$programme_user->t15 = 0;}}else{$programme_user->t15 = 0;}
        if (isset($_POST['q15_4'])) {if ($_POST['q15_4'] == 'b'){$ot++;$programme_user->t15 = 1;} else {$not++;$programme_user->t15 = 0;}}else{$programme_user->t15 = 0;}
        if (isset($_POST['q15_5'])) {if ($_POST['q15_5'] == 'a'){$ot++;$programme_user->t15 = 1;} else {$not++;$programme_user->t15 = 0;}}else{$programme_user->t15 = 0;}

        if (isset($_POST['q16_1'])) {if ($_POST['q16_1'] == 'a'){$ot++;$programme_user->t16 = 1;} else {$not++;$programme_user->t16 = 0;}}else{$programme_user->t16 = 0;}
        if (isset($_POST['q16_2'])) {if ($_POST['q16_2'] == 'c'){$ot++;$programme_user->t16 = 1;} else {$not++;$programme_user->t16 = 0;}}else{$programme_user->t16 = 0;}
        if (isset($_POST['q16_3'])) {if ($_POST['q16_3'] == 'a'){$ot++;$programme_user->t16 = 1;} else {$not++;$programme_user->t16 = 0;}}else{$programme_user->t16 = 0;}
        if (isset($_POST['q16_4'])) {if ($_POST['q16_4'] == 'a'){$ot++;$programme_user->t16 = 1;} else {$not++;$programme_user->t16 = 0;}}else{$programme_user->t16 = 0;}
        if (isset($_POST['q16_5'])) {if ($_POST['q16_5'] == 'b'){$ot++;$programme_user->t16 = 1;} else {$not++;$programme_user->t16 = 0;}}else{$programme_user->t16 = 0;}

        if (isset($_POST['q17_1'])) {if ($_POST['q17_1'] == 'b'){$ot++;$programme_user->t17 = 1;} else {$not++;$programme_user->t17 = 0;}}else{$programme_user->t17 = 0;}
        if (isset($_POST['q17_2'])) {if ($_POST['q17_2'] == 'b'){$ot++;$programme_user->t17 = 1;} else {$not++;$programme_user->t17 = 0;}}else{$programme_user->t17 = 0;}
        if (isset($_POST['q17_3'])) {if ($_POST['q17_3'] == 'b'){$ot++;$programme_user->t17 = 1;} else {$not++;$programme_user->t17 = 0;}}else{$programme_user->t17 = 0;}
        if (isset($_POST['q17_4'])) {if ($_POST['q17_4'] == 'a'){$ot++;$programme_user->t17 = 1;} else {$not++;$programme_user->t17 = 0;}}else{$programme_user->t17 = 0;}
        if (isset($_POST['q17_5'])) {if ($_POST['q17_5'] == 'a'){$ot++;$programme_user->t17 = 1;} else {$not++;$programme_user->t17 = 0;}}else{$programme_user->t17 = 0;}

        if (isset($_POST['q18_1'])) {if ($_POST['q18_1'] == 'c'){$ot++;$programme_user->t18 = 1;} else {$not++;$programme_user->t18 = 0;}}else{$programme_user->t18 = 0;}
        if (isset($_POST['q18_2'])) {if ($_POST['q18_2'] == 'b'){$ot++;$programme_user->t18 = 1;} else {$not++;$programme_user->t18 = 0;}}else{$programme_user->t18 = 0;}
        if (isset($_POST['q18_3'])) {if ($_POST['q18_3'] == 'c'){$ot++;$programme_user->t18 = 1;} else {$not++;$programme_user->t18 = 0;}}else{$programme_user->t18 = 0;}
        if (isset($_POST['q18_4'])) {if ($_POST['q18_4'] == 'a'){$ot++;$programme_user->t18 = 1;} else {$not++;$programme_user->t18 = 0;}}else{$programme_user->t18 = 0;}
        if (isset($_POST['q18_5'])) {if ($_POST['q18_5'] == 'a'){$ot++;$programme_user->t18 = 1;} else {$not++;$programme_user->t18 = 0;}}else{$programme_user->t18 = 0;}

        if (isset($_POST['q19_1'])) {if ($_POST['q19_1'] == 'b'){$ot++;$programme_user->t19 = 1;} else {$not++;$programme_user->t19 = 0;}}else{$programme_user->t19 = 0;}
        if (isset($_POST['q19_2'])) {if ($_POST['q19_2'] == 'a'){$ot++;$programme_user->t19 = 1;} else {$not++;$programme_user->t19 = 0;}}else{$programme_user->t19 = 0;}
        if (isset($_POST['q19_3'])) {if ($_POST['q19_3'] == 'a'){$ot++;$programme_user->t19 = 1;} else {$not++;$programme_user->t19 = 0;}}else{$programme_user->t19 = 0;}
        if (isset($_POST['q19_4'])) {if ($_POST['q19_4'] == 'b'){$ot++;$programme_user->t19 = 1;} else {$not++;$programme_user->t19 = 0;}}else{$programme_user->t19 = 0;}
        if (isset($_POST['q19_5'])) {if ($_POST['q19_5'] == 'c'){$ot++;$programme_user->t19 = 1;} else {$not++;$programme_user->t19 = 0;}}else{$programme_user->t19 = 0;}

        if (isset($_POST['q20_1'])) {if ($_POST['q20_1'] == 'b'){$ot++;$programme_user->t20 = 1;} else {$not++;$programme_user->t20 = 0;}}else{$programme_user->t20 = 0;}
        if (isset($_POST['q20_2'])) {if ($_POST['q20_2'] == 'a'){$ot++;$programme_user->t20 = 1;} else {$not++;$programme_user->t20 = 0;}}else{$programme_user->t20 = 0;}
        if (isset($_POST['q20_3'])) {if ($_POST['q20_3'] == 'b'){$ot++;$programme_user->t20 = 1;} else {$not++;$programme_user->t20 = 0;}}else{$programme_user->t20 = 0;}
        if (isset($_POST['q20_4'])) {if ($_POST['q20_4'] == 'a'){$ot++;$programme_user->t20 = 1;} else {$not++;$programme_user->t20 = 0;}}else{$programme_user->t20 = 0;}
        if (isset($_POST['q20_5'])) {if ($_POST['q20_5'] == 'a'){$ot++;$programme_user->t20 = 1;} else {$not++;$programme_user->t20 = 0;}}else{$programme_user->t20 = 0;}

        if (isset($_POST['q21_1'])) {if ($_POST['q21_1'] == 'b'){$ot++;$programme_user->t21 = 1;} else {$not++;$programme_user->t21 = 0;}}else{$programme_user->t21 = 0;}
        if (isset($_POST['q21_2'])) {if ($_POST['q21_2'] == 'c'){$ot++;$programme_user->t21 = 1;} else {$not++;$programme_user->t21 = 0;}}else{$programme_user->t21 = 0;}
        if (isset($_POST['q21_3'])) {if ($_POST['q21_3'] == 'a'){$ot++;$programme_user->t21 = 1;} else {$not++;$programme_user->t21 = 0;}}else{$programme_user->t21 = 0;}
        if (isset($_POST['q21_4'])) {if ($_POST['q21_4'] == 'a'){$ot++;$programme_user->t21 = 1;} else {$not++;$programme_user->t21 = 0;}}else{$programme_user->t21 = 0;}
        if (isset($_POST['q21_5'])) {if ($_POST['q21_5'] == 'a'){$ot++;$programme_user->t21 = 1;} else {$not++;$programme_user->t21 = 0;}}else{$programme_user->t21 = 0;}

        if (isset($_POST['q22_1'])) {if ($_POST['q22_1'] == 'b'){$ot++;$programme_user->t22 = 1;} else {$not++;$programme_user->t22 = 0;}}else{$programme_user->t22 = 0;}
        if (isset($_POST['q22_2'])) {if ($_POST['q22_2'] == 'a'){$ot++;$programme_user->t22 = 1;} else {$not++;$programme_user->t22 = 0;}}else{$programme_user->t22 = 0;}
        if (isset($_POST['q22_3'])) {if ($_POST['q22_3'] == 'c'){$ot++;$programme_user->t22 = 1;} else {$not++;$programme_user->t22 = 0;}}else{$programme_user->t22 = 0;}
        if (isset($_POST['q22_4'])) {if ($_POST['q22_4'] == 'b'){$ot++;$programme_user->t22 = 1;} else {$not++;$programme_user->t22 = 0;}}else{$programme_user->t22 = 0;}
        if (isset($_POST['q22_5'])) {if ($_POST['q22_5'] == 'a'){$ot++;$programme_user->t22 = 1;} else {$not++;$programme_user->t22 = 0;}}else{$programme_user->t22 = 0;}

        if (isset($_POST['q23_1'])) {if ($_POST['q23_1'] == 'c'){$ot++;$programme_user->t23 = 1;} else {$not++;$programme_user->t23 = 0;}}else{$programme_user->t23 = 0;}
        if (isset($_POST['q23_2'])) {if ($_POST['q23_2'] == 'a'){$ot++;$programme_user->t23 = 1;} else {$not++;$programme_user->t23 = 0;}}else{$programme_user->t23 = 0;}
        if (isset($_POST['q23_3'])) {if ($_POST['q23_3'] == 'c'){$ot++;$programme_user->t23 = 1;} else {$not++;$programme_user->t23 = 0;}}else{$programme_user->t23 = 0;}
        if (isset($_POST['q23_4'])) {if ($_POST['q23_4'] == 'b'){$ot++;$programme_user->t23 = 1;} else {$not++;$programme_user->t23 = 0;}}else{$programme_user->t23 = 0;}
        if (isset($_POST['q23_5'])) {if ($_POST['q23_5'] == 'a'){$ot++;$programme_user->t23 = 1;} else {$not++;$programme_user->t23 = 0;}}else{$programme_user->t23 = 0;}

        if (isset($_POST['q24_1'])) {if ($_POST['q24_1'] == 'b'){$ot++;$programme_user->t24 = 1;} else {$not++;$programme_user->t24 = 0;}}else{$programme_user->t24 = 0;}
        if (isset($_POST['q24_2'])) {if ($_POST['q24_2'] == 'b'){$ot++;$programme_user->t24 = 1;} else {$not++;$programme_user->t24 = 0;}}else{$programme_user->t24 = 0;}
        if (isset($_POST['q24_3'])) {if ($_POST['q24_3'] == 'c'){$ot++;$programme_user->t24 = 1;} else {$not++;$programme_user->t24 = 0;}}else{$programme_user->t24 = 0;}
        if (isset($_POST['q24_4'])) {if ($_POST['q24_4'] == 'b'){$ot++;$programme_user->t24 = 1;} else {$not++;$programme_user->t24 = 0;}}else{$programme_user->t24 = 0;}
        if (isset($_POST['q24_5'])) {if ($_POST['q24_5'] == 'a'){$ot++;$programme_user->t24 = 1;} else {$not++;$programme_user->t24 = 0;}}else{$programme_user->t24 = 0;}

        if (isset($_POST['q25_1'])) {if ($_POST['q25_1'] == 'a'){$ot++;$programme_user->t25 = 1;} else {$not++;$programme_user->t25 = 0;}}else{$programme_user->t25 = 0;}
        if (isset($_POST['q25_2'])) {if ($_POST['q25_2'] == 'a'){$ot++;$programme_user->t25 = 1;} else {$not++;$programme_user->t25 = 0;}}else{$programme_user->t25 = 0;}
        if (isset($_POST['q25_3'])) {if ($_POST['q25_3'] == 'a'){$ot++;$programme_user->t25 = 1;} else {$not++;$programme_user->t25 = 0;}}else{$programme_user->t25 = 0;}
        if (isset($_POST['q25_4'])) {if ($_POST['q25_4'] == 'a'){$ot++;$programme_user->t25 = 1;} else {$not++;$programme_user->t25 = 0;}}else{$programme_user->t25 = 0;}
        if (isset($_POST['q25_5'])) {if ($_POST['q25_5'] == 'a'){$ot++;$programme_user->t25 = 1;} else {$not++;$programme_user->t25 = 0;}}else{$programme_user->t25 = 0;}

        if (isset($_POST['q26_1'])) {if ($_POST['q26_1'] == 'a'){$ot++;$programme_user->t26 = 1;} else {$not++;$programme_user->t26 = 0;}}else{$programme_user->t26 = 0;}
        if (isset($_POST['q26_2'])) {if ($_POST['q26_2'] == 'c'){$ot++;$programme_user->t26 = 1;} else {$not++;$programme_user->t26 = 0;}}else{$programme_user->t26 = 0;}
        if (isset($_POST['q26_3'])) {if ($_POST['q26_3'] == 'a'){$ot++;$programme_user->t26 = 1;} else {$not++;$programme_user->t26 = 0;}}else{$programme_user->t26 = 0;}
        if (isset($_POST['q26_4'])) {if ($_POST['q26_4'] == 'b'){$ot++;$programme_user->t26 = 1;} else {$not++;$programme_user->t26 = 0;}}else{$programme_user->t26 = 0;}
        if (isset($_POST['q26_5'])) {if ($_POST['q26_5'] == 'a'){$ot++;$programme_user->t26 = 1;} else {$not++;$programme_user->t26 = 0;}}else{$programme_user->t26 = 0;}

        if (isset($_POST['q27_1'])) {if ($_POST['q27_1'] == 'c'){$ot++;$programme_user->t27 = 1;} else {$not++;$programme_user->t27 = 0;}}else{$programme_user->t27 = 0;}
        if (isset($_POST['q27_2'])) {if ($_POST['q27_2'] == 'b'){$ot++;$programme_user->t27 = 1;} else {$not++;$programme_user->t27 = 0;}}else{$programme_user->t27 = 0;}
        if (isset($_POST['q27_3'])) {if ($_POST['q27_3'] == 'a'){$ot++;$programme_user->t27 = 1;} else {$not++;$programme_user->t27 = 0;}}else{$programme_user->t27 = 0;}
        if (isset($_POST['q27_4'])) {if ($_POST['q27_4'] == 'b'){$ot++;$programme_user->t27 = 1;} else {$not++;$programme_user->t27 = 0;}}else{$programme_user->t27 = 0;}
        if (isset($_POST['q27_5'])) {if ($_POST['q27_5'] == 'a'){$ot++;$programme_user->t27 = 1;} else {$not++;$programme_user->t27 = 0;}}else{$programme_user->t27 = 0;}

        if (isset($_POST['q28_1'])) {if ($_POST['q28_1'] == 'c'){$ot++;$programme_user->t28 = 1;} else {$not++;$programme_user->t28 = 0;}}else{$programme_user->t28 = 0;}
        if (isset($_POST['q28_2'])) {if ($_POST['q28_2'] == 'b'){$ot++;$programme_user->t28 = 1;} else {$not++;$programme_user->t28 = 0;}}else{$programme_user->t28 = 0;}
        if (isset($_POST['q28_3'])) {if ($_POST['q28_3'] == 'a'){$ot++;$programme_user->t28 = 1;} else {$not++;$programme_user->t28 = 0;}}else{$programme_user->t28 = 0;}
        if (isset($_POST['q28_4'])) {if ($_POST['q28_4'] == 'b'){$ot++;$programme_user->t28 = 1;} else {$not++;$programme_user->t28 = 0;}}else{$programme_user->t28 = 0;}
        if (isset($_POST['q28_5'])) {if ($_POST['q28_5'] == 'a'){$ot++;$programme_user->t28 = 1;} else {$not++;$programme_user->t28 = 0;}}else{$programme_user->t28 = 0;}

        if (isset($_POST['q29_1'])) {if ($_POST['q29_1'] == 'b'){$ot++;$programme_user->t29 = 1;} else {$not++;$programme_user->t29 = 0;}}else{$programme_user->t29 = 0;}
        if (isset($_POST['q29_2'])) {if ($_POST['q29_2'] == 'b'){$ot++;$programme_user->t29 = 1;} else {$not++;$programme_user->t29 = 0;}}else{$programme_user->t29 = 0;}
        if (isset($_POST['q29_3'])) {if ($_POST['q29_3'] == 'b'){$ot++;$programme_user->t29 = 1;} else {$not++;$programme_user->t29 = 0;}}else{$programme_user->t29 = 0;}
        if (isset($_POST['q29_4'])) {if ($_POST['q29_4'] == 'a'){$ot++;$programme_user->t29 = 1;} else {$not++;$programme_user->t29 = 0;}}else{$programme_user->t29 = 0;}
        if (isset($_POST['q29_5'])) {if ($_POST['q29_5'] == 'a'){$ot++;$programme_user->t29 = 1;} else {$not++;$programme_user->t29 = 0;}}else{$programme_user->t29 = 0;}

        if (isset($_POST['q30_1'])) {if ($_POST['q30_1'] == 'a'){$ot++;$programme_user->t30 = 1;} else {$not++;$programme_user->t30 = 0;}}else{$programme_user->t30 = 0;}
        if (isset($_POST['q30_2'])) {if ($_POST['q30_2'] == 'a'){$ot++;$programme_user->t30 = 1;} else {$not++;$programme_user->t30 = 0;}}else{$programme_user->t30 = 0;}
        if (isset($_POST['q30_3'])) {if ($_POST['q30_3'] == 'c'){$ot++;$programme_user->t30 = 1;} else {$not++;$programme_user->t30 = 0;}}else{$programme_user->t30 = 0;}
        if (isset($_POST['q30_4'])) {if ($_POST['q30_4'] == 'a'){$ot++;$programme_user->t30 = 1;} else {$not++;$programme_user->t30 = 0;}}else{$programme_user->t30 = 0;}
        if (isset($_POST['q30_5'])) {if ($_POST['q30_5'] == 'b'){$ot++;$programme_user->t30 = 1;} else {$not++;$programme_user->t30 = 0;}}else{$programme_user->t30 = 0;}

        R::store($programme_user);

    }

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

<section class="result">
    <div class="container_2">
        <div class="result_main">
            <div class="result_main_image">
                <img src="../images/TestResult.png" alt="TestResult">
            </div>
            <div class="result_main_text">
                <?php
                if (isset($_POST['btn_start'])){
                    if ($ot >= 0 and  $ot <= 10)
                    {
                        echo  "<p>Ваш результат тестирования соответствует уровню Beginner.</p>";
                        echo "<p>Правильных ответов: $ot </p>";
                        echo  "<p>Исходя из ваших ответов мы составили для вас индвивидуальную программу обучения. Однако вы можете не проходить индивидуальное обучение, а пройти весь курс целиком для уровня Beginner.</p>";
                        echo  "<a href='programme_user.php'>Перейти к программе</a>";
                        echo "<a href='level_beginner.php' class='level'>Уровень Beginner</a>";
                    }
                    if ($ot > 10 and  $ot <= 20)
                    {
                        echo  "<p>Ваш результат тестирования соответствует уровню Intermediate.</p>";
                        echo "<p>Правильных ответов: $ot </p>";
                        echo  "<p>Исходя из ваших ответов мы составили для вас индвивидуальную программу обучения. Однако вы можете не проходить индивидуальное обучение, а пройти весь курс целиком для уровня Intermediate.</p>";
                        echo  "<a href='programme_user.php'>Перейти к программе</a>";
                        echo "<a href='level_intermediate.php'>Уровень Intermediate</a>";
                    }
                    if ($ot > 20 and  $ot <= 30)
                    {
                        echo  "<p>Ваш результат тестирования соответствует уровню Advanced.</p>";
                        echo "<p>Правильных ответов: $ot </p>";
                        echo  "<p>Исходя из ваших ответов мы составили для вас индвивидуальную программу обучения. Однако вы можете не проходить индивидуальное обучение, а пройти весь курс целиком для уровня Advanced.</p>";
                        echo  "<a href='programme_user.php'>Перейти к программе</a>";
                        echo "<a href='level_advanced.php'>Уровень Advanced</a>";
                    }
                }
                ?>
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