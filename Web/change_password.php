<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Авторизация</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="wrapper">
    <div id="header">
      <h1><font color=#76b900>Видеокарты NVIDIA®</font></h1>
    </div>
    <div id="header2">
      <?php include('header.php') ?>
    </div>
    <div id="content">
      <h2>Вход</h2>
      <form action="change_psw.php" method="post">
      <p>
      <label>Ваш новый логин:<br></label>
      <input name="login" type="text" size="15" maxlength="15">
      </p>
      <p>
      <label>Ваш новый пароль:<br></label>
      <input name="password" type="password" size="15" maxlength="15">
      </p>
      <p>
      <input type="submit" name="submit" value="Заменить">
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