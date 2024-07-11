<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>Контакты</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <h2><font color=#76b900>Видеокарты NVIDIA®</font></h2>
    </div>
    <div id="header2">
      <?php include('header.php') ?>
    </div>
    <div id="content">
      <h2>Наши контакты:</h2>
      <h3>Офис</h3>
      <p>Адрес: 614068 г. Пермь, ул. Генкеля, 7</p>
      <p>Юридический адрес: 614068 г. Пермь, ул. Букирева 15</p>
      <p>Адрес на карте: 
      <a href="https://www.google.com/maps/place/%D0%9F%D0%B3%D0%BD%D0%B8%D1%83/@58.0091348,56.1858421,17z/data=!3m1!4b1!4m6!3m5!1s0x43e8c76aff7130ad:0x18e592726a3afee0!8m2!3d58.009132!4d56.188417!16s%2Fg%2F11flt2l0p5?hl=ru-RU&entry=ttu" target="_blank" rel="nofollow">Google Maps</a>
       |
      <a href="https://yandex.ru/maps/org/pgniu/1694653172/?from=1org_map&ll=56.187853%2C58.008400&z=18.22" target="_blank" rel="nofollow">Яндекс.Карты</a>
       |
      <a href="https://2gis.ru/perm/branches/2252336684597822/firm/2252783361201571/56.187884%2C58.008443?m=56.28756%2C57.980218%2F11.81" target="_blank" rel="nofollow">2GIS</a>
      </p>
      <h3>Связь</h3>
      <p>Телефон: +7 (800) 555-35-35</p>
      <p>E-mail: mymail@yandex</p>
      <h3>Посетителям</h3>
      <p>Друзья, к сожалению, мы не имеем возможности вступать в переписку, но все ваши письма мы с интересом просматриваем, делаем выводы и стараемся учитывать ваши пожелания.</p>
    </div>
    <div class="clear"></div>
    <div id="footer">
    <?php include('footer.php') ?>
    </div>
  </div>
</body>
</html>