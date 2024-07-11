<input type="checkbox" id="burger">
<label for="burger"></label>
<nav>
  <button type="button" class="btn btn-success" onclick="location.href='index.php'">Главная</button>   
  <?php 
      if (isset ($_SESSION['login']))
      {
        echo '<a href="news_admin.php"><input type="button" class="btn btn-success" value="Новости" /></a>';
      }
      else 
      {
        echo '<a href="news.php"><input type="button" class="btn btn-success" value="Новости" /></a>';
      }
  ?>
  <button type="button" class="btn btn-success" onclick="location.href='catalog.php'">Каталог</button>
  <button type="button" class="btn btn-success" onclick="location.href='contacts.php'">Контакты</button>
  <?php if (isset ($_SESSION['login']) )
        {
          //echo '<p><div id = "button"><a href="exit.php" class="buttonreg">Выход</a></div></p>';
          echo '<a href="exit.php"><input type="button" class="btn btn-success" value="Выход" /></a>';
          //echo '<p><div id = "button"><a href="change_password.php" class="buttonreg">Смена пароля</a></div></p>';
          echo '<a href="change_password.php"><input type="button" class="btn btn-success" value="Смена пароля" /></a>';
        }
        else 
        {
          echo '<a href="Authorization.php"><input type="button" class="btn btn-success" value="Авторизация" /></a>';
        }
  ?>
  
</nav>