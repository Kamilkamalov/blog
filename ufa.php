
<!DOCTYPE html>
<html>
<head>
    <title>Все новости</title>
    <meta charset='utf-8'>
</head>
<body>
<body>
<h1 style='text-align:center'>Все новости:</h1>
<h4 style='text-align:right'><a href='/index.php'>Нажмите, чтобы перейти к главным новостям</a></h4>

<div class="container" style=text-align:center;>
<h4>Поиск работает по заголовкам и темам(Экономика, Политика, Животные, Погода)</h4>
<section class='box search'>
    <form method='get' action='search.php'>
        <input type='text' class='text' name='search' placeholder='Что ищем?' />
    </form>
</section>
</div>

<h3 style=text-align:center;>Выберите город:</h3>
<div class="container" style=text-align:center;>
<form method='get' action='ufa.php' name='ufa'>
<input type="submit" value="Уфа" name="ufa">
</form>
</div>

<div class="container" style=text-align:center;>
<form method='get' action='tatarstan.php' name='tatarstan'>
<input type="submit" value="Татарстан" name="tatarstan">
</form>
</div>


<?php
$add = '<div style=text-align:right;>
<form action="add.php" method="get">
<p><b>Введите цифру, указанную выше, для добавления новости в избранное:</b></p>
<p><textarea rows="1" cols="10" name="text"></textarea></p>
<p><input type="submit" value="Добавить в избранное"></p>
</form>
</div>';
$delete = '<div style=text-align:right;>
<form action="del.php" method="get">
<p><b>Введите цифру, указанную выше, для удаления новости из избранного:</b></p>
<p><textarea rows="1" cols="10" name="text"></textarea></p>
<p><input type="submit" value="Удалить из избранного"></p>
</form>
</div>';

$del1 = '\uploads';
$del2 = '.jpg';
$replace = '';
require "connect.php";




echo '<h2>' . $ufa_news[heading] . '</h2><br>';
echo "<img width=300 height=200 src='" . $ufa_news[image] . "'/><br>";
echo '<h2 style=text-align:right;>' . $ufa_news[id] . '</h2><br>'; 
if ($added != "added") {
    echo $add; // добавить в избранное
} else {
    echo $delete; // удалить из избранного
}
echo '<h4>' . $ufa_news[description] . '</h4><br>';     
$link = $ufa_news[image];
$link1 = str_replace($del1, $replace, $link);
$link2 = str_replace($del2, $replace, $link1);
echo '<a href="' . $link2 . '.php">Подробнее о новости...</a><hr>';

    foreach ($select_ufa1 as $key => $value):
        echo '<h2>' . $value[heading] . '</h2><br>';
        echo "<img width=300 height=200 src='" . $value[image] . "'/><br>";
        
        echo '<h2 style=text-align:right;>' . $value[id] . '</h2>';
        if ($value[chosen] != "added") { 
            echo $add; // добавить в избранное
        } else {
            echo $delete; // удалить из избранного
        }
        echo '<h4>' . $value[description] . '</h4><br>';     
        $link = $value[image];
        $link1 = str_replace($del1, $replace, $link);
        $link2 = str_replace($del2, $replace, $link1);
        echo '<a href="' . $link2 . '.php">Подробнее о новости...</a><hr>';
    endforeach; ?>

</body>
</html>