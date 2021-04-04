<?php
$connect = mysqli_connect('localhost','root','','first');

$select = mysqli_query($connect, "SELECT * FROM `news`"); // выводит все новости через while
$sql = mysqli_fetch_assoc($select);



$news = $select; 


$sql_similiar = mysqli_query($connect, "SELECT * FROM `news` WHERE `topic` LIKE '%Политика%'"); 
$similar = mysqli_fetch_assoc($sql_similiar);


$chose = mysqli_query($connect, "SELECT * FROM `news` WHERE `chosen` LIKE '%added%'");

$select_ufa = mysqli_query($connect, "SELECT * FROM `news` WHERE `city` LIKE '%Уфа%'"); // Уфа
$ufa_news = mysqli_fetch_assoc($select_ufa);
$select_ufa1 = mysqli_query($connect, "SELECT * FROM `news` ORDER BY `city`");

$select_tat = mysqli_query($connect, "SELECT * FROM `news` WHERE `city` LIKE '%Татарстан%'");  // Татарстан
$tatarstan_news = mysqli_fetch_assoc($select_tat);
$select_tat1 = mysqli_query($connect, "SELECT * FROM `news` ORDER BY `city`");

