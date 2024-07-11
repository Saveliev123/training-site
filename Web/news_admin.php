<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Новости</title>
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
      <h2>Новости</h2>
      <?php
        $link = mysqli_connect("localhost","root","","БД");           
        $query = 'SELECT * FROM Новости ORDER BY id DESC';
        $result = mysqli_query($link, $query);
        while ($data = mysqli_fetch_assoc($result)) {
      ?>
      <h3><?php echo $data['Название новости']?></h3>
      <div id="news">
        <?php 
          echo $data['Новости'] 
        ?>
      </div>
      <div id="news">
        <form action='delete.php' method='post'>
          <input type='hidden' name='delete' value="<?php echo $data['id']?>" />
          <input type='submit' value='Удалить'>
        </form>
      </div>
      <div id="news">
        <form action='change.php' method='post'>
        <input type='hidden' name='id' value="<?php echo $data['id']?>" />
        <textarea class="new" name="text" cols="100" rows="12"><?php echo $data['Новости'] ?></textarea>
        <input type='submit' value='Изменить'>        
        </form>
      </div>
      <?php 
        }
      ?>
      <div id="news">
        <form action="new.php" method="post">
          <textarea class="new" name="zagol" cols="100" rows="2"></textarea>
          <textarea class="new" name="text" cols="100" rows="12"></textarea>
          <input type="submit" value="Добавить">
        </form>
      </div>
      
    </div>
    <div class="clear"></div>
    <div id="footer">
    <?php include('footer.php') ?>
    </div>
  </div>
</body>
</html>