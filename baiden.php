<?php
require 'connect.php';
require 'for_all.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>baiden</title>
    <meta charset='utf-8'>
</head>
<body>

<?php


echo '<h1>' . $heading4 . '</h1><br>'; 
echo "<img width=300 height=200 src=$image4><br>"; 
echo '<h3>' . $description4 . '</h3><br>' ;
echo '<p "style=text-align:justify;">' . $text4 . '</p>' ;
echo '<a href="news.php">' . "Вернуться к новостям" . '</a>';
echo "<h2 style=text-align:center;>Похожие новости:</h2>"; 
?>

<?php 

echo '<h2>' . $similar[heading] . '</h2><br>';    // вывожу то, что не вывелось в while
echo "<img width=300 height=200 src='" . $similar['image'] . "'/><br>";
echo '<h4>' . $similar[description] . '</h4><br>'; 
echo '<p "style=text-align:justify">' . $similar[text] . '</p>'; 
echo '<a href="news.php">' . "Вернуться к новостям" . '</a>'; 


while ($similar = mysqli_fetch_assoc($sql_similiar)) {
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