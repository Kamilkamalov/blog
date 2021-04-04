
<!DOCTYPE html>
<html>
<head>
    <title>Все новости</title>
    <meta charset='utf-8'>
</head>
<body>
<h2>Результаты поиска:</h2>


<?php
    require "connect.php";
    echo $_GET["search"];
    $search_get = $_GET["search"];
    $select_search = mysqli_query($connect, "SELECT * FROM `news` WHERE `heading` LIKE '%$search_get%' OR `topic` LIKE '%$search_get%'");

   while ($search = mysqli_fetch_assoc($select_search)) {
        ?>
        <br>
        <h2><a href='<?= $search["link"].'.php';?>'><?= $search["heading"];?></a></h2>
        <?php
}
?>
</body>
</html>