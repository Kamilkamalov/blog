<?php
require "connect.php";

$delete = '<div style=text-align:right;>
<form action="del.php" method="get">
<p><b>Введите цифру, указанную выше, для удаления новости из избранного:</b></p>
<p><textarea rows="1" cols="10" name="text"></textarea></p>
<p><input type="submit" value="Удалить из избранного"></p>
</form>
</div>';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Главная страница</title>
    <meta charset='utf-8'>
</head>
<body>
<h1 style='text-align:center'>Избранные новости:</h1>
<h4 style='text-align:right'><a href='/news.php'>Нажмите, чтобы перейти ко всем новостям</a></h4>

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
    while ($favorite = mysqli_fetch_assoc($chose)) {
        ?>
        <br>
        <h1><?= $favorite["heading"]?></h1>
        <?= "<img width=300 height=200 src='" . $favorite[image] . "'/><br>";?>
        
        <?='<h2 style=text-align:right;>'.$favorite[id].'</h2>';?>
        <?php 
            if ($favorite[chosen] = "added") {
                echo $delete; // удалить из избранного
        }
        ?>
        <?= "<h2>$favorite[description]"."<br></h2>"; ?>
        <?= '<a href="' . $favorite[link] . '.php">Подробнее о новости...</a><hr>'; ?>
        <?php

}
?>
</body>
</html>