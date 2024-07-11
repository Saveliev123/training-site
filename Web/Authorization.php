<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<title>Авторизация</title>
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
      <h2>Вход</h2>
      <form action="testreg.php" method="post">
      <p>
      <label>Ваш логин:<br></label>
      <input name="login" type="text" size="15" maxlength="15">
      </p>
      <p>
      <label>Ваш пароль:<br></label>
      <input name="password" type="password" size="15" maxlength="15">
      </p>
      <p>
      <input type="submit" name="submit" value="Войти">
      </p></form>
      <br>
    </div>
    <div class="clear"></div>
    <div id="footer">
    <?php include('footer.php') ?>
    </div>
  </div>
</body>
</html>