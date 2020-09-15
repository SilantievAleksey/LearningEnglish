<?php
$ip = $_SERVER['REMOTE_ADDR'];
include("SxGeo.php");
$SxGeo = new SxGeo('SxGeoCity.dat');
$city = $SxGeo->getCity($ip); // возвращает с краткой информацией, без названия региона и временной зоны
$countryid = $SxGeo->getCountryId($ip); //возвращает номер страны
$country = $SxGeo->getCountry($ip); // возвращает двухзначный ISO-код страны
$region = $SxGeo->getCityFull($ip); // возвращает Область

// Отображаемые данные начало
echo "Моя страна: ";
echo ($region['country']['name_ru']); // Страна
echo "<br>";
echo "Мой регион: ";
echo ($region['region']['name_ru']); // Область
echo "<br>";
echo "Я живу в";
echo " ";
echo "г.";
echo " ";
echo ($city['city']['name_ru']); // Город
echo "<br>";
echo "Мой IP Адресс: ";
echo $_SERVER['REMOTE_ADDR']; // IP адресс
echo "<br>";
echo "Код страны: ";
echo ($country); // Код страны
echo "<br>";
echo "Номер страны: ";
echo ($countryid); // Номер страны
echo "<br>";
// Отображаемые данные конец
?>