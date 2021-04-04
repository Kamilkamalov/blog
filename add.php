<?php
require "connect.php";

if ($_GET[text] == "1") {
    $del_sql_1 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 1");
    $del_sql_1;
} elseif ($_GET[text] == "2") {
    $del_sql_2 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 2");
    $del_sql_2;
} elseif ($_GET[text] == "3") {
    $del_sql_3 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 3");
    $del_sql_3;
} elseif ($_GET[text] == "4") {
    $del_sql_4 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 4");
    $del_sql_4;
} elseif ($_GET[text] == "5") {
    $del_sql_5 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 5");
    $del_sql_5;
} elseif ($_GET[text] == "6") {
    $del_sql_6 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 6");
    $del_sql_6;
} elseif ($_GET[text] == "7") {
    $del_sql_7 = mysqli_query($connect, "UPDATE `news` SET `chosen` = 'added' WHERE `id` = 7");
    $del_sql_7;
} else { 
    echo 'Введены некорректные данные';
}
header("refresh: 0.5; url=../");
echo "Если страница не перезагрузилась автоматически, то нажмите сюда ->"."<a href='../'>Нажмите сюда</a>";
?>
