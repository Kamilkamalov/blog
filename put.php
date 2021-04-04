<?php
require 'connect.php';
require 'for_all.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Put</title>
    <meta charset='utf-8'>
</head>
<body>
<?= '<h1>' . $heading3 . '</h1><br>'; ?>
<?= "<img width=300 height=200 src=$image3><br>"; ?>
<?= '<h3>' . $description3 . '</h3><br>' ?>
<?= '<p "style=text-align:justify;">' . $text3 . '</p>' ?>
<?= '<a href="news.php">' . "Вернуться к новостям" . '</a>'?>
<?="<h2 style=text-align:center;>Похожие новости:</h2>"?>
<?php

$connect = mysqli_connect('localhost','root','','first');
$sql = "SELECT * FROM `news` WHERE `topic` LIKE '%Политика%'";
$select = mysqli_query($connect, $sql);
$similar = mysqli_fetch_assoc($select);

echo '<h2>' . $similar[heading] . '</h2><br>';    // вывожу то, что не вывелось в while
echo "<img width=300 height=200 src='" . $similar['image'] . "'/><br>";
echo '<h4>' . $similar[description] . '</h4><br>'; 
echo '<p "style=text-align:justify">' . $similar[text] . '</p>'; 
echo '<a href="news.php">' . "Вернуться к новостям" . '</a>'; 

while ($similar = mysqli_fetch_assoc($select)) {
    ?>
    <br>
    <?= '<h2>' . $similar[heading] . '</h2><br>'; ?>
    <?= "<img width=300 height=200 src=$similar[image]><br>" ?>
    <?= '<h4>' . $similar[description] . '</h4><br>'; ?>
    <?= '<p "style=text-align:justify">' . $similar[text] . '</p>'; ?>
    <?= '<a href="news.php">' . "Вернуться к новостям" . '</a>'; ?>
<?php }
?>

</body>
</html>
